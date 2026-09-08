import os
import glob
from pathlib import Path

# Paths
SOURCE_BASE = Path(r"C:\Users\Global Service - i7\Desktop\ROLBAG - Organizacion de Fotos")
DEST_BASE_GALLERY = Path(r"C:\Users\Global Service - i7\Documents\ROLBAG\wp-content\themes\rolbag\assets\images\galeria")
DEST_BASE_IMAGES = Path(r"C:\Users\Global Service - i7\Documents\ROLBAG\wp-content\themes\rolbag\assets\images")

# Pillow to convert to webp
try:
    from PIL import Image
except ImportError:
    import subprocess
    import sys
    subprocess.check_call([sys.executable, "-m", "pip", "install", "Pillow"])
    from PIL import Image

def process_and_copy(src, dest, max_size=(1920, 1920)):
    if not os.path.exists(src):
        print(f"File not found: {src}")
        return
    
    os.makedirs(os.path.dirname(dest), exist_ok=True)
    
    with Image.open(src) as img:
        img.thumbnail(max_size, Image.Resampling.LANCZOS)
        img.save(dest, 'WEBP', quality=85)
        print(f"Copied and optimized: {dest}")

def deploy_photos():
    print("Deploying photos...")
    
    # 1. Capturadores
    process_and_copy(
        SOURCE_BASE / "01 - Fundas Capturadores" / "01 - Sin Mango" / "FOTOS MODIFICADAS" / "descarga.png",
        DEST_BASE_GALLERY / "capturadores" / "zebra_frontal.webp"
    )
    process_and_copy(
        SOURCE_BASE / "01 - Fundas Capturadores" / "01 - Sin Mango" / "FOTOS MODIFICADAS" / "descarga (1).png",
        DEST_BASE_GALLERY / "capturadores" / "zebra_lateral.webp"
    )
    
    process_and_copy(
        SOURCE_BASE / "01 - Fundas Capturadores" / "02 - Con Mango (Pistol Grip)" / "FOTOS MODIFICADAS" / "descarga.png",
        DEST_BASE_GALLERY / "capturadores" / "pistol_grip_frontal.webp"
    )
    process_and_copy(
        SOURCE_BASE / "01 - Fundas Capturadores" / "02 - Con Mango (Pistol Grip)" / "FOTOS MODIFICADAS" / "descarga (2).png",
        DEST_BASE_GALLERY / "capturadores" / "pistol_grip_lateral.webp"
    )
    
    process_and_copy(
        SOURCE_BASE / "01 - Fundas Capturadores" / "03 - Modelo Robusto" / "FOTOS MODIFICADAS" / "descarga.png",
        DEST_BASE_GALLERY / "capturadores" / "honeywell_ck65_frontal.webp"
    )
    process_and_copy(
        SOURCE_BASE / "01 - Fundas Capturadores" / "03 - Modelo Robusto" / "FOTOS MODIFICADAS" / "descarga (1).png",
        DEST_BASE_GALLERY / "capturadores" / "honeywell_ck65_lateral.webp"
    )

    # 2. Tablets
    tablet_src = SOURCE_BASE / "02 - Fundas Tablets" / "FOTOS MODIFICADAS"
    tablet_files = glob.glob(str(tablet_src / "*.png"))
    for i, file_path in enumerate(tablet_files, 1):
        process_and_copy(file_path, DEST_BASE_GALLERY / "tablets" / f"tablet_{i:02d}.webp")

    # 3. Impresoras
    impresoras_src = SOURCE_BASE / "03 - Fundas Impresoras" / "FOTOS MODIFICADAS"
    impresoras_files = glob.glob(str(impresoras_src / "*.png"))
    for i, file_path in enumerate(impresoras_files, 1):
        process_and_copy(file_path, DEST_BASE_GALLERY / "impresoras" / f"impresora_{i:02d}.webp")

    # 4. POS Moviles
    pos_src = SOURCE_BASE / "04 - Fundas POS Moviles" / "FOTOS MODIFICADAS"
    pos_files = glob.glob(str(pos_src / "*.png"))
    for i, file_path in enumerate(pos_files, 1):
        process_and_copy(file_path, DEST_BASE_GALLERY / "pos_moviles" / f"pos_{i:02d}.webp")

    # 5. Historia
    process_and_copy(
        SOURCE_BASE / "05 - Confecciones Especiales y Fondos" / "05 - Foto Historica Rolando" / "FOTOS MODIFICADAS" / "descarga (2).png",
        DEST_BASE_IMAGES / "Rolando_Foto_Historica.webp"
    )

if __name__ == "__main__":
    deploy_photos()
    print("Deployment done.")
