import os
from PIL import Image, ImageOps

source_logo = r"C:\Users\Global Service - i7\Desktop\carpetas\Rolbag\logo.png"
dest_dir = r"c:\Users\Global Service - i7\Documents\ROLBAG\wp-content\themes\rolbag\assets\images\brand"
theme_dir = r"c:\Users\Global Service - i7\Documents\ROLBAG\wp-content\themes\rolbag"

os.makedirs(dest_dir, exist_ok=True)

# Load original logo
img = Image.open(source_logo).convert("RGBA")
print(f"Original size: {img.size}")

# Save full original logo
img.save(os.path.join(dest_dir, "logo.png"), "PNG")

# Bounding box of content (removing transparent borders)
bbox = img.getbbox()
if bbox:
    cropped = img.crop(bbox)
else:
    cropped = img

# 1. Generate logo-white.png (all non-transparent pixels colored white or preserved alpha)
r, g, b, a = cropped.split()
white_img = Image.new("RGBA", cropped.size, (255, 255, 255, 255))
white_img.putalpha(a)
white_img.save(os.path.join(dest_dir, "logo-white.png"), "PNG")

# 2. Generate logo-black.png
black_img = Image.new("RGBA", cropped.size, (15, 23, 42, 255))
black_img.putalpha(a)
black_img.save(os.path.join(dest_dir, "logo-black.png"), "PNG")

# 3. Extract Symbol (left part of the logo icon)
# Let's find symbol bounding box or left portion
width, height = cropped.size
# If logo has an icon on the left (e.g., first 30-40% of width)
# Let's inspect the icon vs text aspect ratio
symbol_crop = cropped.crop((0, 0, int(height * 1.1), height))
symbol_bbox = symbol_crop.getbbox()
if symbol_bbox:
    symbol_img = symbol_crop.crop(symbol_bbox)
else:
    symbol_img = symbol_crop

# Create square padded symbol
max_dim = max(symbol_img.size)
square_symbol = Image.new("RGBA", (max_dim, max_dim), (0, 0, 0, 0))
offset_x = (max_dim - symbol_img.size[0]) // 2
offset_y = (max_dim - symbol_img.size[1]) // 2
square_symbol.paste(symbol_img, (offset_x, offset_y), symbol_img)

square_symbol.save(os.path.join(dest_dir, "symbol.png"), "PNG")

# 4. Generate favicons and touch icons
fav_32 = square_symbol.resize((32, 32), Image.Resampling.LANCZOS)
fav_32.save(os.path.join(dest_dir, "favicon-32x32.png"), "PNG")

apple_touch = square_symbol.resize((180, 180), Image.Resampling.LANCZOS)
apple_touch.save(os.path.join(dest_dir, "apple-touch-icon.png"), "PNG")

icon_512 = square_symbol.resize((512, 512), Image.Resampling.LANCZOS)
icon_512.save(os.path.join(dest_dir, "icon-512x512.png"), "PNG")

# Favicon.ico in theme root and brand folder
fav_ico = square_symbol.resize((32, 32), Image.Resampling.LANCZOS)
fav_ico.save(os.path.join(theme_dir, "favicon.ico"), format="ICO", sizes=[(32, 32), (16, 16)])
fav_ico.save(os.path.join(dest_dir, "favicon.ico"), format="ICO", sizes=[(32, 32), (16, 16)])

print("All brand assets generated successfully!")
