import os
import shutil

src_media = r"c:\Users\Global Service - i7\Documents\ROLBAG\scripts\extracted_new_gdoc\images"
dst_base = os.path.join(os.environ["USERPROFILE"], "Desktop", "fotos_valijas_organizadas")

mapping = [
    ("01_valijas_de_seguridad_grandes", ["image10.png", "image12.png", "image11.png", "image14.png", "image13.png", "image16.png", "image15.png", "image18.png", "image17.png"]),
    ("02_valijas_medianas", ["image21.png", "image19.png", "image20.png", "image22.png"]),
    ("03_valijas_sobres", ["image23.png", "image24.png", "image25.jpg", "image26.png", "image27.png", "image28.png", "image29.png"]),
    ("04_fotos_adicionales", ["image1.png", "image2.png"]),
    ("05_candados_amaestrados", ["image3.png", "image4.png", "image5.png", "image6.png"]),
    ("06_candados_igualados", ["image7.png", "image8.png", "image9.png"])
]

total_copied = 0
for folder_rel, img_list in mapping:
    target_dir = os.path.join(dst_base, folder_rel)
    os.makedirs(target_dir, exist_ok=True)
    for idx, img_name in enumerate(img_list, start=1):
        src_path = os.path.join(src_media, img_name)
        if os.path.exists(src_path):
            dst_name = f"foto_{idx:02d}_{img_name}"
            dst_path = os.path.join(target_dir, dst_name)
            shutil.copy2(src_path, dst_path)
            total_copied += 1
        else:
            print(f"Warning: {src_path} not found!")

print(f"Successfully organized and copied {total_copied} images to {dst_base}")
