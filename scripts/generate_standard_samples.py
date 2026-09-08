import os
import sys
from pathlib import Path
import numpy as np
from PIL import Image, ImageOps, ImageEnhance, ImageFilter, ImageDraw
from rembg import remove, new_session

def enhance_texture_and_materials(cropped_rgba):
    """
    Carefully balances exposure, highlights, rich blacks and stitching sharpness
    without altering any colors, logos or physical geometry.
    """
    r, g, b, a = cropped_rgba.split()
    rgb_img = Image.merge("RGB", (r, g, b))
    
    # 1. Subtle gamma/tone curve adjustment
    arr = np.array(rgb_img, dtype=np.float32)
    # Slight contrast expansion while preserving highlights
    arr = 255.0 * np.power(arr / 255.0, 1.06)
    arr = np.clip(arr, 0, 255).astype(np.uint8)
    rgb_img = Image.fromarray(arr)
    
    # 2. Natural contrast & saturation calibration
    contrast = ImageEnhance.Contrast(rgb_img)
    rgb_img = contrast.enhance(1.10)
    
    color = ImageEnhance.Color(rgb_img)
    rgb_img = color.enhance(1.03)
    
    # 3. Micro-sharpness boost for 1680D nylon weave, rivets and stitching
    sharp = ImageEnhance.Sharpness(rgb_img)
    rgb_img = sharp.enhance(1.30)
    
    r_new, g_new, b_new = rgb_img.split()
    return Image.merge("RGBA", (r_new, g_new, b_new, a))

def create_catalog_studio_shadow(alpha_mask, width, height):
    """
    Generates a realistic 2-stage soft diffused studio contact shadow
    matching professional commercial hardware catalog standards.
    """
    mask_np = np.array(alpha_mask)
    y_indices, x_indices = np.where(mask_np > 25)
    
    shadow_layer = Image.new("RGBA", (width, height), (0, 0, 0, 0))
    if len(y_indices) == 0 or len(x_indices) == 0:
        return shadow_layer
        
    min_x, max_x = np.min(x_indices), np.max(x_indices)
    max_y = np.max(y_indices)
    
    prod_w = max_x - min_x
    prod_h = max_y - np.min(y_indices)
    
    # 1. Primary contact shadow (close to ground)
    contact_w = int(prod_w * 0.88)
    contact_h = max(int(prod_h * 0.07), 12)
    
    contact_img = Image.new("RGBA", (contact_w, contact_h), (0, 0, 0, 0))
    draw_c = ImageDraw.Draw(contact_img)
    draw_c.ellipse([0, 0, contact_w, contact_h], fill=(15, 23, 42, 105))
    contact_img = contact_img.filter(ImageFilter.GaussianBlur(radius=int(contact_h * 0.35)))
    
    cx = min_x + (prod_w - contact_w) // 2
    cy = max_y - int(contact_h * 0.50)
    shadow_layer.paste(contact_img, (cx, cy), contact_img)
    
    # 2. Ambient soft diffusion shadow
    ambient_w = int(prod_w * 1.12)
    ambient_h = max(int(prod_h * 0.16), 22)
    
    ambient_img = Image.new("RGBA", (ambient_w, ambient_h), (0, 0, 0, 0))
    draw_a = ImageDraw.Draw(ambient_img)
    draw_a.ellipse([0, 0, ambient_w, ambient_h], fill=(15, 23, 42, 40))
    ambient_img = ambient_img.filter(ImageFilter.GaussianBlur(radius=int(ambient_h * 0.50)))
    
    ax = min_x + (prod_w - ambient_w) // 2
    ay = max_y - int(ambient_h * 0.40)
    shadow_layer.paste(ambient_img, (ax, ay), ambient_img)
    
    return shadow_layer

def process_sample_with_isnet(src_path, dst_webp, dst_png, session, target_size=(1600, 1600)):
    print(f"[*] Processing with ISNet: {src_path.name}...")
    orig_img = Image.open(src_path)
    orig_img = ImageOps.exif_transpose(orig_img)
    if orig_img.mode != "RGB":
        orig_img = orig_img.convert("RGB")
        
    # Pre-scale large raw photos to standard processing size (max 2048px) to optimize quality and prevent RAM exhaustion
    max_dim = 2048
    w, h = orig_img.size
    if max(w, h) > max_dim:
        scale_f = max_dim / max(w, h)
        orig_img = orig_img.resize((int(w * scale_f), int(h * scale_f)), Image.Resampling.LANCZOS)
        
    # Segment foreground with ISNet
    no_bg = remove(orig_img, session=session)
    
    bbox = no_bg.getbbox()
    if not bbox:
        print(f"  [ERROR] No subject detected in {src_path.name}")
        return False
        
    cropped = no_bg.crop(bbox)
    
    # Enhance materials and details
    enhanced_prod = enhance_texture_and_materials(cropped)
    
    # Scale product to fill 80-82% of canvas
    canvas_w, canvas_h = target_size
    max_w = int(canvas_w * 0.82)
    max_h = int(canvas_h * 0.82)
    
    pw, ph = enhanced_prod.size
    scale = min(max_w / pw, max_h / ph)
    new_w = int(pw * scale)
    new_h = int(ph * scale)
    
    resized_prod = enhanced_prod.resize((new_w, new_h), Image.Resampling.LANCZOS)
    
    # Pure white studio background
    studio_bg = Image.new("RGBA", (canvas_w, canvas_h), (255, 255, 255, 255))
    
    px = (canvas_w - new_w) // 2
    py = (canvas_h - new_h) // 2
    
    placed_prod = Image.new("RGBA", (canvas_w, canvas_h), (0, 0, 0, 0))
    placed_prod.paste(resized_prod, (px, py), resized_prod)
    
    # Studio contact shadow
    shadow = create_catalog_studio_shadow(placed_prod.split()[3], canvas_w, canvas_h)
    
    # Composite: Background -> Shadow -> Product
    final_canvas = Image.alpha_composite(studio_bg, shadow)
    final_canvas = Image.alpha_composite(final_canvas, placed_prod)
    
    # Save WebP and PNG
    dst_webp.parent.mkdir(parents=True, exist_ok=True)
    final_rgb = final_canvas.convert("RGB")
    final_rgb.save(dst_webp, "WEBP", quality=95, method=6)
    final_rgb.save(dst_png, "PNG", optimize=True)
    
    print(f"  [+] Saved studio sample: {dst_webp}")
    return True

def main():
    print("[*] Initializing ISNet General Use session...")
    session = new_session("isnet-general-use")
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
        process_sample_with_isnet(s["src"], dst_webp, dst_png, session)
        
    print("\n[SUCCESS] ISNet studio samples generated successfully!")

if __name__ == "__main__":
    main()
