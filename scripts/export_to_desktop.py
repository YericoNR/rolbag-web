import os
import shutil
from pathlib import Path

desktop_dir = Path(r"C:\Users\Global Service - i7\Desktop\ROLBAG - Organizacion de Fotos")
extracted_media = Path(r"c:\Users\Global Service - i7\Documents\ROLBAG\extracted_gdoc\media")
filtradas_src = Path(r"c:\Users\Global Service - i7\Documents\ROLBAG\wp-content\themes\rolbag\assets\images\real_sources\filtradas")

# Define full folder structure with descriptive names
structure = [
    # 1. Capturadores
    {
        "folder": "01 - Fundas Capturadores/01 - Sin Mango",
        "description": "Funda sin mango (Modelo estándar de captura)",
        "files": [("image8.png", "Funda_Sin_Mango_01.png"), ("image13.png", "Funda_Sin_Mango_02.png")]
    },
    {
        "folder": "01 - Fundas Capturadores/02 - Con Mango (Pistol Grip)",
        "description": "Fundas con mango / gatillo pistol grip",
        "files": [("image4.png", "Funda_Con_Mango_01.png"), ("image18.png", "Funda_Con_Mango_02.png")]
    },
    {
        "folder": "01 - Fundas Capturadores/03 - Modelo Robusto (Con o Sin Mango)",
        "description": "Funda Modelo Robusto (con o sin mango)",
        "files": [("image9.png", "Modelo_Robusto_01.png"), ("image20.png", "Modelo_Robusto_02.png")]
    },
    
    # 2. Tablets
    {
        "folder": "02 - Fundas Tablets",
        "description": "Fundas para Tablets Industriales y de Campo con soporte y correas",
        "files": [
            ("image16.png", "Tablet_Funda_01.png"),
            ("image34.png", "Tablet_Funda_02.png"),
            ("image12.png", "Tablet_Funda_03.png"),
            ("image21.jpg", "Tablet_Funda_04.jpg"),
            ("image14.jpg", "Tablet_Funda_05.jpg")
        ]
    },
    
    # 3. Impresoras
    {
        "folder": "03 - Fundas Impresoras",
        "description": "Fundas para Impresoras Portátiles y Térmicas de cinturón",
        "files": [
            ("image23.png", "Impresora_Funda_01.png"),
            ("image31.png", "Impresora_Funda_02.png"),
            ("image30.png", "Impresora_Funda_03.png"),
            ("image28.png", "Impresora_Funda_04.png"),
            ("image35.png", "Impresora_Funda_05.png"),
            ("image26.jpg", "Impresora_Funda_06.jpg")
        ]
    },
    
    # 4. POS Móviles
    {
        "folder": "04 - Fundas POS Moviles",
        "description": "Fundas para terminales POS Móviles y puntos de pago",
        "files": [
            ("image33.png", "POS_Movil_01.png"),
            ("image32.png", "POS_Movil_02.png"),
            ("image27.jpg", "POS_Movil_03.jpg"),
            ("image2.jpg",  "POS_Movil_04.jpg"),
            ("image3.png",  "POS_Movil_05.png"),
            ("image1.jpg",  "POS_Movil_06.jpg")
        ]
    },
    
    # 5. Adicionales y Especiales
    {
        "folder": "05 - Confecciones Especiales y Fondos/01 - Estructuras Especiales",
        "description": "Fundas especiales con más estructuras solicitadas por clientes",
        "files": [
            ("image19.png", "Especial_Estructura_01.png"),
            ("image10.png", "Especial_Estructura_02.png"),
            ("image15.png", "Especial_Estructura_03.png")
        ]
    },
    {
        "folder": "05 - Confecciones Especiales y Fondos/02 - Para Muneca (Wearables)",
        "description": "Fundas y soportes portátiles de muñeca / brazo",
        "files": [
            ("image36.png", "Muneca_Wearable_01.png"),
            ("image11.png", "Muneca_Wearable_02.png"),
            ("image7.png",  "Muneca_Wearable_03.png")
        ]
    },
    {
        "folder": "05 - Confecciones Especiales y Fondos/03 - Radios de Comunicacion",
        "description": "Fundas para radios y walkie-talkies industriales",
        "files": [
            ("image17.png", "Radio_Funda_01.png"),
            ("image6.png",  "Radio_Funda_02.png"),
            ("image5.png",  "Radio_Funda_03.png")
        ]
    },
    {
        "folder": "05 - Confecciones Especiales y Fondos/04 - Equipos Especiales Diferentes",
        "description": "Equipos de medición, lectores o periféricos diferentes",
        "files": [
            ("image24.png", "Equipo_Diferente_01.png"),
            ("image25.png", "Equipo_Diferente_02.png"),
            ("image22.jpg", "Equipo_Diferente_03.jpg")
        ]
    },
    {
        "folder": "05 - Confecciones Especiales y Fondos/05 - Foto Historica Rolando",
        "description": "Foto de Rolando de hace años para historia/trayectoria",
        "files": [
            ("image29.png", "Rolando_Foto_Historica.png")
        ]
    }
]

# Reset or create desktop directory
desktop_dir.mkdir(parents=True, exist_ok=True)

# Copy categorized photos
copied_gdoc = 0
for sec in structure:
    target_path = desktop_dir / sec["folder"]
    target_path.mkdir(parents=True, exist_ok=True)
    for src_name, dst_name in sec["files"]:
        s_file = extracted_media / src_name
        d_file = target_path / dst_name
        if s_file.exists():
            shutil.copy2(s_file, d_file)
            copied_gdoc += 1
        else:
            print(f"[!] Warning: Missing {src_name}")

# Copy Filtradas folder
filtradas_dst = desktop_dir / "00 - Fotos Filtradas (Previas)"
filtradas_dst.mkdir(parents=True, exist_ok=True)
copied_filtradas = 0
if filtradas_src.exists():
    for f in filtradas_src.glob("*.*"):
        shutil.copy2(f, filtradas_dst / f.name)
        copied_filtradas += 1

# Generate README file on Desktop
readme_content = f"""================================================================================
ROLBAG - ORGANIZACION Y GUIA DE FOTOS PARA PROCESAMIENTO
================================================================================
Generado a partir del documento oficial de Google Docs:
"Organización de fotos Fundas"
Ubicacion: {desktop_dir}
Total fotos extraidas del documento: {copied_gdoc}
Total fotos filtradas previas: {copied_filtradas}
================================================================================

ESTRUCTURA DE CARPETAS Y CONTENIDO:

00 - Fotos Filtradas (Previas)/
     Contiene las 8 fotos que tenías previamente filtradas en la carpeta de fuentes reales.

01 - Fundas Capturadores/
     El documento especifica el siguiente orden de presentacion:
     ├── 01 - Sin Mango: Modelos basicos/estandar de capturador.
     ├── 02 - Con Mango (Pistol Grip): Fundas equipadas con agarre tipo pistola.
     └── 03 - Modelo Robusto (Con o Sin Mango): Fundas reforzadas (ej. Honeywell CK65 y similares).

02 - Fundas Tablets/
     5 fotos de fundas protectoras para tablets industriales de uso rudo en terreno.

03 - Fundas Impresoras/
     6 fotos de fundas para impresoras termicas portatiles de cinturon.

04 - Fundas POS Moviles/
     6 fotos de fundas para terminales de pago movil (POS).

05 - Confecciones Especiales y Fondos/
     Fotos adicionales indicadas para fondos, banners o ejemplos de confeccion a medida:
     ├── 01 - Estructuras Especiales: Fundas con mayor estructura/armazon solicitadas por clientes.
     ├── 02 - Para Muneca (Wearables): Soportes portatiles para terminales de brazo o muñeca.
     ├── 03 - Radios de Comunicacion: Fundas para radiotransmisores industriales.
     ├── 04 - Equipos Especiales Diferentes: Dispositivos y herramientas tecnicas especificas.
     └── 05 - Foto Historica Rolando: Foto antigua de Rolando para la seccion de Trayectoria / Sobre Nosotros.

================================================================================
"""

with open(desktop_dir / "LEEME_ORGANIZACION.txt", "w", encoding="utf-8") as f:
    f.write(readme_content)

print(f"DONE: Created Desktop structure with {copied_gdoc} doc photos + {copied_filtradas} filtradas.")
