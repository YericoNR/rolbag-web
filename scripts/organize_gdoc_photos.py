import os
import shutil

src_media = "extracted_gdoc/media"
dst_base = "data/fotos_gdoc_organizadas"

mapping = [
    # 1. Capturadores
    ("01_capturadores/01_sin_mango", ["image8.png", "image13.png"]),
    ("01_capturadores/02_con_mango", ["image4.png", "image18.png"]),
    ("01_capturadores/03_modelo_robusto", ["image9.png", "image20.png"]),
    
    # 2. Tablets
    ("02_tablets", ["image16.png", "image34.png", "image12.png", "image21.jpg", "image14.jpg"]),
    
    # 3. Impresoras
    ("03_impresoras", ["image23.png", "image31.png", "image30.png", "image28.png", "image35.png", "image26.jpg"]),
    
    # 4. POS Móviles
    ("04_pos_moviles", ["image33.png", "image32.png", "image27.jpg", "image2.jpg", "image3.png", "image1.jpg"]),
    
    # 5. Adicionales y Especiales
    ("05_adicionales_especiales/estructuras_especiales", ["image19.png", "image10.png", "image15.png"]),
    ("05_adicionales_especiales/muneca", ["image36.png", "image11.png", "image7.png"]),
    ("05_adicionales_especiales/radios", ["image17.png", "image6.png", "image5.png"]),
    ("05_adicionales_especiales/equipo_diferente", ["image24.png", "image25.png", "image22.jpg"]),
    ("05_adicionales_especiales/rolando_historica", ["image29.png"]),
]

total_copied = 0
for folder_rel, img_list in mapping:
    target_dir = os.path.join(dst_base, folder_rel)
    os.makedirs(target_dir, exist_ok=True)
    for idx, img_name in enumerate(img_list, start=1):
        src_path = os.path.join(src_media, img_name)
        if os.path.exists(src_path):
            ext = os.path.splitext(img_name)[1]
            dst_name = f"foto_{idx:02d}_{img_name}"
            dst_path = os.path.join(target_dir, dst_name)
            shutil.copy2(src_path, dst_path)
            total_copied += 1
        else:
            print(f"Warning: {src_path} not found!")

print(f"Successfully organized and copied {total_copied} images to {dst_base}")
