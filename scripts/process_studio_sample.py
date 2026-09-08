import os
import sys
from pathlib import Path
import numpy as np
from PIL import Image, ImageOps, ImageEnhance, ImageFilter
from rembg import remove, new_session

def enhance_product_material_details(cropped_rgba):
    """
    Enhances exposure, micro-contrast, stitching sharpness and rich blacks
    without altering any colors, logos or physical geometry.
    """
    r, g, b, a = cropped_rgba.split()
    rgb_img = Image.merge("RGB", (r, g, b))
    
    # 1. Tone curve adjustment (deeper rich blacks, clear midtone textures)
    # Convert to array for precision tone curve
    arr = np.array(rgb_img, dtype=np.float32)
    # Slight S-curve for punchy industrial catalog presentation
    arr = 255.0 * np.power(arr / 255.0, 1.05)
    arr = np.clip(arr, 0, 255).astype(np.uint8)
    rgb_img = Image.fromarray(arr)
    
    # 2. Contrast & Color vibrancy (natural)
    contrast = ImageEnhance.Contrast(rgb_img)
    rgb_img = contrast.enhance(1.12)
    
    color = ImageEnhance.Color(rgb_img)
    rgb_img = color.enhance(1.04)
    
    # 3. High micro-sharpness for 1680D nylon weave, rivets and stitching
    sharp = ImageEnhance.Sharpness(rgb_img)
    rgb_img = sharp.enhance(1.35)
    
    # Recombine with alpha
    r_new, g_new, b_new = rgb_img.split()
    return Image.merge("RGBA", (r_new, g_new, b_new, a))

def generate_photorealistic_studio_shadow(alpha_mask, width, height):
    """
    Generates a 2-stage soft diffused studio contact shadow
    underneath the product and straps, matching high-end hardware catalog photos.
    """
    mask_np = np.array(alpha_mask)
    y_indices, x_indices = np.where(mask_np > 25)
    
    shadow_layer = Image.new("RGBA", (width, height), (0, 0, 0, 0))
    if len(y_indices) == 0 or len(x_indices) == 0:
        return shadow_layer
        
    min_x, max_x = np.min(x_indices), np.max(x_indices)
    min_y, max_y = np.min(y_indices), np.max(y_indices)
    
    prod_w = max_x - min_x
    prod_h = max_y - min_y
    
    # Stage 1: Tight dark contact shadow at direct floor touch points
    contact_w = int(prod_w * 0.90)
    contact_h = max(int(prod_h * 0.08), 12)
    
    contact_img = Image.new("RGBA", (contact_w, contact_h), (0, 0, 0, 0))
    from PIL import ImageDraw
    draw_c = ImageDraw.Draw(contact_img)
    draw_c.ellipse([0, 0, contact_w, contact_h], fill=(15, 23, 42, 110))
    contact_img = contact_img.filter(ImageFilter.GaussianBlur(radius=int(contact_h * 0.35)))
    
    # Position contact shadow
    cx = min_x + (prod_w - contact_w) // 2
    cy = max_y - int(contact_h * 0.55)
    shadow_layer.paste(contact_img, (cx, cy), contact_img)
    
    # Stage 2: Wide soft diffused ambient floor shadow
    ambient_w = int(prod_w * 1.15)
    ambient_h = max(int(prod_h * 0.18), 24)
    
    ambient_img = Image.new("RGBA", (ambient_w, ambient_h), (0, 0, 0, 0))
    draw_a = ImageDraw.Draw(ambient_img)
    draw_a.ellipse([0, 0, ambient_w, ambient_h], fill=(15, 23, 42, 45))
    ambient_img = ambient_img.filter(ImageFilter.GaussianBlur(radius=int(ambient_h * 0.55)))
    
    ax = min_x + (prod_w - ambient_w) // 2
    ay = max_y - int(ambient_h * 0.40)
    shadow_layer.paste(ambient_img, (ax, ay), ambient_img)
    
    return shadow_layer

def process_test_sample(src_path, dst_webp, dst_png, session, target_size=(1600, 1600)):
    print(f"[*] Processing Sample: {src_path.name}...")
    orig_img = Image.open(src_path)
    
    # EXIF rotation
    orig_img = ImageOps.exif_transpose(orig_img)
    if orig_img.mode != "RGB":
        orig_img = orig_img.convert("RGB")
        
    # Segment foreground
    no_bg = remove(orig_img, session=session)
    
    # Crop to exact bounding box with subtle padding
    bbox = no_bg.getbbox()
    if not bbox:
        print(f"  [ERROR] No subject detected in {src_path.name}")
        return False
        
    cropped = no_bg.crop(bbox)
    
    # Enhance materials, textures, stitching and exposure
    enhanced_prod = enhance_product_material_details(cropped)
    
    # Scale product to fill ~82% of canvas for balanced catalog presentation
    canvas_w, canvas_h = target_size
    max_w = int(canvas_w * 0.82)
    max_h = int(canvas_h * 0.82)
    
    pw, ph = enhanced_prod.size
    scale = min(max_w / pw, max_h / ph)
    new_w = int(pw * scale)
    new_h = int(ph * scale)
    
    resized_prod = enhanced_prod.resize((new_w, new_h), Image.Resampling.LANCZOS)
    
    # Neutral white studio background (#ffffff)
    studio_bg = Image.new("RGBA", (canvas_w, canvas_h), (255, 255, 255, 255))
    
    # Center product
    px = (canvas_w - new_w) // 2
    py = (canvas_h - new_h) // 2
    
    placed_prod = Image.new("RGBA", (canvas_w, canvas_h), (0, 0, 0, 0))
    placed_prod.paste(resized_prod, (px, py), resized_prod)
    
    # Soft realistic contact shadow
    shadow = generate_photorealistic_studio_shadow(placed_prod.split()[3], canvas_w, canvas_h)
    
    # Composite: Background -> Shadow -> Product
    final_canvas = Image.alpha_composite(studio_bg, shadow)
    final_canvas = Image.alpha_composite(final_canvas, placed_prod)
    
    # Save high-res WebP and PNG
    dst_webp.parent.mkdir(parents=True, exist_ok=True)
    final_rgb = final_canvas.convert("RGB")
    final_rgb.save(dst_webp, "WEBP", quality=95, method=6)
    final_rgb.save(dst_png, "PNG", optimize=True)
    
    print(f"  [+] Saved: {dst_webp}")
    return True

def main():
    session = new_session("u2net")
    output_dir = Path("wp-content/themes/rolbag/assets/images/pruebas_estandar_catalogo")
    
    samples = [
        {
            "src": Path("wp-content/themes/rolbag/assets/images/real_sources/funda protectora-marca zebra Con mango/IMG_1533.jpeg"),
            "name": "muestra_01_zebra_pistol_grip"
        },
        {
            "src": Path("wp-content/themes/rolbag/assets/images/real_sources/fundasdecapturadores- ck65 honeywell modelo robusto/IMG_3634.JPG"),
            "name": "muestra_02_honeywell_ck65_teclado"
        },
        {
            "src": Path("wp-content/themes/rolbag/assets/images/real_sources/fotosdefundasdeimpresoras/4D4422C5-A5AC-4B9A-AF09-486D88ED5D48.png"),
            "name": "muestra_03_impresora_portatil_termica"
        }
    ]
    
    for s in samples:
        dst_webp = output_dir / f"{s['name']}.webp"
        dst_png = output_dir / f"{s['name']}.png"
        process_test_sample(s["src"], dst_webp, dst_png, session)
        
    print("\n[SUCCESS] 3 representative test samples processed with studio catalog standard!")

if __name__ == "__main__":
    main()
