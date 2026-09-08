import zipfile
import os
import xml.etree.ElementTree as ET
import shutil

docx_path = "downloaded_docs_docx.bin"
extract_dir = "extracted_gdoc"
media_dir = os.path.join(extract_dir, "media")

os.makedirs(media_dir, exist_ok=True)

print("Checking if valid zip/docx...")
if not zipfile.is_zipfile(docx_path):
    print("Not a zip file! Checking header:")
    with open(docx_path, "rb") as f:
        print(f.read(100))
    exit(1)

with zipfile.ZipFile(docx_path, 'r') as z:
    file_list = z.namelist()
    print(f"Total entries in archive: {len(file_list)}")
    
    # Check media files
    media_files = [f for f in file_list if f.startswith("word/media/")]
    print(f"Total media/images found: {len(media_files)}")
    for mf in media_files[:10]:
        info = z.getinfo(mf)
        print(f"  {mf}: {info.file_size / 1024:.1f} KB")
    if len(media_files) > 10:
        print(f"  ... and {len(media_files) - 10} more media files")
        
    # Extract media files
    for mf in media_files:
        filename = os.path.basename(mf)
        out_path = os.path.join(media_dir, filename)
        with z.open(mf) as src, open(out_path, "wb") as dst:
            shutil.copyfileobj(src, dst)
    print(f"Extracted {len(media_files)} images to {media_dir}")

    # Extract text from word/document.xml
    if "word/document.xml" in file_list:
        xml_content = z.read("word/document.xml")
        root = ET.fromstring(xml_content)
        
        # XML namespace for WordprocessingML
        namespaces = {'w': 'http://schemas.openxmlformats.org/wordprocessingml/2006/main'}
        
        paragraphs = []
        for p in root.iter('{http://schemas.openxmlformats.org/wordprocessingml/2006/main}p'):
            texts = [node.text for node in p.iter('{http://schemas.openxmlformats.org/wordprocessingml/2006/main}t') if node.text]
            if texts:
                paragraphs.append("".join(texts))
        
        doc_text = "\n".join(paragraphs)
        text_out_path = os.path.join(extract_dir, "document_text.txt")
        with open(text_out_path, "w", encoding="utf-8") as f:
            f.write(doc_text)
            
        print(f"\nDocument text extracted to {text_out_path} ({len(paragraphs)} paragraphs)")
        print("\n--- FIRST 30 PARAGRAPHS PREVIEW ---")
        for i, p in enumerate(paragraphs[:30]):
            print(f"[{i+1}] {p}")
