import urllib.request
import os

doc_id = '12-bqOnxERsVKzgSee_6W7YCznMtYsL2x'

# urls to test
urls = [
    ('drive_uc', f'https://drive.google.com/uc?export=download&id={doc_id}'),
    ('drive_uc_confirm', f'https://drive.google.com/uc?export=download&confirm=t&id={doc_id}'),
    ('docs_docx', f'https://docs.google.com/document/d/{doc_id}/export?format=docx'),
    ('docs_zip', f'https://docs.google.com/document/d/{doc_id}/export?format=zip'),
]

headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
}

for name, url in urls:
    try:
        req = urllib.request.Request(url, headers=headers)
        with urllib.request.urlopen(req, timeout=20) as resp:
            data = resp.read()
            ct = resp.headers.get('content-type', '')
            cd = resp.headers.get('content-disposition', '')
            print(f"[{name}] status: {resp.status}, size: {len(data)}, type: {ct}, disposition: {cd}")
            if b'<html' in data[:300].lower():
                print(f"  -> Returned HTML (len={len(data)})")
                with open(f"test_{name}.html", "wb") as f:
                    f.write(data)
            else:
                out_name = f"downloaded_{name}.bin"
                with open(out_name, "wb") as f:
                    f.write(data)
                print(f"  -> SAVED to {out_name} (magic: {data[:8]})")
    except Exception as e:
        print(f"[{name}] ERROR: {e}")
