import zipfile
import xml.etree.ElementTree as ET
import os

docx_path = "downloaded_docs_docx.bin"

with zipfile.ZipFile(docx_path, 'r') as z:
    # We need relationships to map r:embed IDs (rId...) to actual image filenames in word/media/
    rels_xml = z.read("word/_rels/document.xml.rels")
    rels_root = ET.fromstring(rels_xml)
    
    # Map rId -> target filename
    rel_map = {}
    for rel in rels_root:
        r_id = rel.attrib.get('Id')
        target = rel.attrib.get('Target')
        if target and 'media/' in target:
            rel_map[r_id] = os.path.basename(target)
            
    # Now parse document.xml
    doc_xml = z.read("word/document.xml")
    doc_root = ET.fromstring(doc_xml)
    
    # Namespaces
    ns = {
        'w': 'http://schemas.openxmlformats.org/wordprocessingml/2006/main',
        'a': 'http://schemas.openxmlformats.org/drawingml/2006/main',
        'r': 'http://schemas.openxmlformats.org/officeDocument/2006/relationships',
        'v': 'urn:schemas-microsoft-com:vml'
    }
    
    print("--- PARAGRAPH & IMAGE MAPPING ---")
    current_section = "Inicio"
    
    structure = []
    
    for p in doc_root.iter('{http://schemas.openxmlformats.org/wordprocessingml/2006/main}p'):
        # Get all text in this paragraph
        texts = [t.text for t in p.iter('{http://schemas.openxmlformats.org/wordprocessingml/2006/main}t') if t.text]
        p_text = "".join(texts).strip()
        
        # Find images in this paragraph
        p_images = []
        # Check blip elements (drawingML)
        for blip in p.iter('{http://schemas.openxmlformats.org/drawingml/2006/main}blip'):
            embed_id = blip.attrib.get('{http://schemas.openxmlformats.org/officeDocument/2006/relationships}embed')
            if embed_id and embed_id in rel_map:
                p_images.append(rel_map[embed_id])
                
        # Check vml imagedata elements
        for img_data in p.iter('{urn:schemas-microsoft-com:vml}imagedata'):
            embed_id = img_data.attrib.get('{http://schemas.openxmlformats.org/officeDocument/2006/relationships}id')
            if embed_id and embed_id in rel_map:
                p_images.append(rel_map[embed_id])
                
        if p_text or p_images:
            structure.append({
                'text': p_text,
                'images': p_images
            })
            
    for item in structure:
        t = item['text']
        imgs = item['images']
        if t:
            print(f"\n[TEXT]: {t}")
        if imgs:
            print(f"  -> [IMAGES ({len(imgs)})]: {', '.join(imgs)}")
            
    # Save structured summary to file
    with open("extracted_gdoc/document_structure.txt", "w", encoding="utf-8") as f:
        for item in structure:
            if item['text']:
                f.write(f"\n[TEXT]: {item['text']}\n")
            if item['images']:
                f.write(f"  -> [IMAGES]: {', '.join(item['images'])}\n")
