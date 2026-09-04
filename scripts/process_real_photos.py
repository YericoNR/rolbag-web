import os
import sys
import glob
from pathlib import Path
import numpy as np
from PIL import Image, ImageOps, ImageEnhance, ImageFilter
from rembg import remove, new_session

def create_studio_shadow(mask, width, height, shadow_intensity=0.25):
    """
    Creates a soft, realistic studio contact shadow beneath the isolated product.
    """
    # Create an oval shadow underneath the bounding box of the product
    mask_np = np.array(mask)
    y_indices, x_indices = np.where(mask_np > 30)
    
    shadow_layer = Image.new("RGBA", (width, height), (0, 0, 0, 0))
    if len(y_indices) == 0 or len(x_indices) == 0:
        return shadow_layer
        
    min_x, max_x = np.min(x_indices), np.max(x_indices)
    max_y = np.max(y_indices)
    
    product_width = max_x - min_x
    shadow_w = int(product_width * 0.85)
    shadow_h = int(product_width * 0.12)
    
    if shadow_w < 10 or shadow_h < 5:
        return shadow_layer
        
    shadow_img = Image.new("RGBA", (shadow_w, shadow_h), (0, 0, 0, 0))
    from PIL import ImageDraw
    draw = ImageDraw.Draw(shadow_img)
    draw.ellipse([0, 0, shadow_w, shadow_h], fill=(15, 23, 42, int(255 * shadow_intensity)))
    
    # Blur shadow for soft studio diffusion
    shadow_img = shadow_img.filter(ImageFilter.GaussianBlur(radius=int(shadow_h * 0.45)))
    
    # Position shadow at the base of the product
    shadow_x = min_x + (product_width - shadow_w) // 2
    shadow_y = max_y - shadow_h // 3
    
    shadow_layer.paste(shadow_img, (shadow_x, shadow_y), shadow_img)
    return shadow_layer

def process_single_image(src_path, dst_path, session, target_size=(1200, 1200)):
    try:
        print(f"[*] Processing: {src_path.name} -> {dst_path.name}...")
        orig_img = Image.open(src_path)
        
        # 1. Respect EXIF rotation
        orig_img = ImageOps.exif_transpose(orig_img)
        
        # Convert to RGB
        if orig_img.mode != "RGB":
            orig_img = orig_img.convert("RGB")
            
        # 2. Extract foreground with rembg
        no_bg = remove(orig_img, session=session)
        
        # 3. Crop bounding box of product with padding
        bbox = no_bg.getbbox()
        if not bbox:
            print(f"  [!] Warning: Empty bounding box for {src_path.name}")
            return False
            
        cropped_product = no_bg.crop(bbox)
        
        # Enhance product tones slightly (clarity, contrast, sharpness)
        r, g, b, a = cropped_product.split()
        rgb_img = Image.merge("RGB", (r, g, b))
        
        # Slight contrast and color boost
        contrast_enhancer = ImageEnhance.Contrast(rgb_img)
        rgb_img = contrast_enhancer.enhance(1.08)
        
        color_enhancer = ImageEnhance.Color(rgb_img)
        rgb_img = color_enhancer.enhance(1.05)
        
        sharp_enhancer = ImageEnhance.Sharpness(rgb_img)
        rgb_img = sharp_enhancer.enhance(1.15)
        
        r2, g2, b2 = rgb_img.split()
        cropped_product = Image.merge("RGBA", (r2, g2, b2, a))
        
        # 4. Scale to fit nicely inside target square canvas (e.g. 80% of canvas)
        canvas_w, canvas_h = target_size
        max_fit_w = int(canvas_w * 0.82)
        max_fit_h = int(canvas_h * 0.82)
        
        prod_w, prod_h = cropped_product.size
        scale = min(max_fit_w / prod_w, max_fit_h / prod_h)
        new_w = int(prod_w * scale)
        new_h = int(prod_h * scale)
        
        resized_product = cropped_product.resize((new_w, new_h), Image.Resampling.LANCZOS)
        
        # 5. Create clean neutral white studio canvas
        # Pure white background with subtle studio radial light
        studio_canvas = Image.new("RGBA", (canvas_w, canvas_h), (255, 255, 255, 255))
        
        # Paste product centered
        paste_x = (canvas_w - new_w) // 2
        paste_y = (canvas_h - new_h) // 2
        
        # Create subtle contact shadow
        alpha_mask = resized_product.split()[3]
        prod_placed = Image.new("RGBA", (canvas_w, canvas_h), (0, 0, 0, 0))
        prod_placed.paste(resized_product, (paste_x, paste_y), resized_product)
        
        shadow = create_studio_shadow(prod_placed.split()[3], canvas_w, canvas_h, shadow_intensity=0.22)
        
        # Composite: Canvas -> Shadow -> Product
        final_img = Image.alpha_composite(studio_canvas, shadow)
        final_img = Image.alpha_composite(final_img, prod_placed)
        
        # Convert to RGB and save as high-quality WebP
        final_rgb = final_img.convert("RGB")
        dst_path.parent.mkdir(parents=True, exist_ok=True)
        final_rgb.save(dst_path, "WEBP", quality=92, method=6)
        print(f"  [+] Saved studio asset: {dst_path}")
        return True
    except Exception as e:
        print(f"  [ERROR] Failed to process {src_path}: {e}")
        return False

def main():
    base_src = Path("wp-content/themes/rolbag/assets/images/real_sources")
    base_dst = Path("wp-content/themes/rolbag/assets/images/galeria")
    
    print("[*] Initializing Rembg AI session for studio white background remastering...")
    session = new_session("u2net")
    
    # 1. Process Zebra Sin Mango
    dir_zebra_sin = base_src / "funa protectora - marca zebra sin mango"
    dst_zebra_sin = base_dst / "zebra-sin-mango"
    if dir_zebra_sin.exists():
        files = sorted(list(dir_zebra_sin.glob("*.*")))
        for i, f in enumerate(files, start=1):
            process_single_image(f, dst_zebra_sin / f"vista_{i:02d}.webp", session)
            
    # 2. Process Zebra Con Mango (Pistol Grip)
    dir_zebra_con = base_src / "funda protectora-marca zebra Con mango"
    dst_zebra_con = base_dst / "zebra-con-mango"
    if dir_zebra_con.exists():
        files = sorted(list(dir_zebra_con.glob("*.*")))
        for i, f in enumerate(files, start=1):
            process_single_image(f, dst_zebra_con / f"vista_{i:02d}.webp", session)

    # 3. Process Honeywell CK65 Modelo Robusto
    dir_honeywell = base_src / "fundasdecapturadores- ck65 honeywell modelo robusto"
    dst_honeywell = base_dst / "honeywell-ck65"
    if dir_honeywell.exists():
        files = sorted(list(dir_honeywell.glob("*.*")))
        for i, f in enumerate(files, start=1):
            process_single_image(f, dst_honeywell / f"vista_{i:02d}.webp", session)

    # 4. Process Fundas de Impresoras Portátiles
    dir_impresoras = base_src / "fotosdefundasdeimpresoras"
    dst_impresoras = base_dst / "impresoras-portatiles"
    if dir_impresoras.exists():
        files = sorted(list(dir_impresoras.glob("*.*")))
        for i, f in enumerate(files, start=1):
            process_single_image(f, dst_impresoras / f"vista_{i:02d}.webp", session)

    # 5. Process Datalogic / Otra Marca con Mango
    dir_otra = base_src / "funda protectora con mango  - otra marca"
    dst_otra = base_dst / "datalogic-falcon"
    if dir_otra.exists():
        files = sorted(list(dir_otra.glob("*.*")))
        for i, f in enumerate(files, start=1):
            process_single_image(f, dst_otra / f"vista_{i:02d}.webp", session)

    # 6. Process Otro Modelo Capturadores
    dir_otro_modelo = base_src / "otro modelo-fundacapturadores"
    dst_otro_modelo = base_dst / "capturadores-otros"
    if dir_otro_modelo.exists():
        files = sorted(list(dir_otro_modelo.glob("*.*")))
        for i, f in enumerate(files, start=1):
            process_single_image(f, dst_otro_modelo / f"vista_{i:02d}.webp", session)

    # 7. Process Filtradas
    dir_filtradas = base_src / "filtradas"
    dst_filtradas = base_dst / "filtradas"
    if dir_filtradas.exists():
        files = sorted(list(dir_filtradas.glob("*.*")))
        for i, f in enumerate(files, start=1):
            process_single_image(f, dst_filtradas / f"vista_{i:02d}.webp", session)

    print("\n[SUCCESS] All real product photos remastered onto pure neutral white studio backgrounds!")

if __name__ == "__main__":
    main()
