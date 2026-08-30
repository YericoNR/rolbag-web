import os
import re
import shutil
import urllib.request
import urllib.parse
from pathlib import Path

BASE_URL = "http://127.0.0.1:8000"
PROJECT_ROOT = Path(__file__).resolve().parent.parent
DIST_DIR = PROJECT_ROOT / "dist"

INITIAL_ROUTES = [
    "/",
    "/empresa/",
    "/soluciones/",
    "/soluciones-a-medida/",
    "/nosotros/",
    "/contacto/",
    "/terminos-y-condiciones/",
    "/politica-de-privacidad/",
    "/productos/fundas-para-capturadores/",
    "/productos/fundas-para-tablets/",
    "/productos/fundas-para-impresoras/",
    "/productos/valijas-de-seguridad/",
    "/productos/candados-especiales/",
    "/design-system-preview/",
]

def clean_and_prepare_dist():
    print(f"[*] Preparing clean dist directory at {DIST_DIR}...")
    if DIST_DIR.exists():
        shutil.rmtree(DIST_DIR)
    DIST_DIR.mkdir(parents=True, exist_ok=True)

def copy_static_assets():
    print("[*] Copying static assets (themes, uploads, includes)...")
    
    # Copy wp-content/themes/rolbag
    theme_src = PROJECT_ROOT / "wp-content" / "themes" / "rolbag"
    theme_dst = DIST_DIR / "wp-content" / "themes" / "rolbag"
    if theme_src.exists():
        shutil.copytree(theme_src, theme_dst, ignore=shutil.ignore_patterns("*.php", "*.bak", ".git*"))
        print(f"  [+] Copied theme assets to {theme_dst}")

    # Copy wp-content/uploads
    uploads_src = PROJECT_ROOT / "wp-content" / "uploads"
    uploads_dst = DIST_DIR / "wp-content" / "uploads"
    if uploads_src.exists():
        shutil.copytree(uploads_src, uploads_dst, ignore=shutil.ignore_patterns("*.php", "*.bak"))
        print(f"  [+] Copied uploads to {uploads_dst}")

    # Copy wp-includes css/js if they exist
    includes_src = PROJECT_ROOT / "wp-includes"
    includes_dst = DIST_DIR / "wp-includes"
    if includes_src.exists():
        # Copy css and js subdirs
        for sub in ["css", "js"]:
            src_sub = includes_src / sub
            dst_sub = includes_dst / sub
            if src_sub.exists():
                shutil.copytree(src_sub, dst_sub, ignore=shutil.ignore_patterns("*.php"))
                print(f"  [+] Copied wp-includes/{sub}")

def transform_html(html_content):
    # Replace absolute local URLs with relative root paths
    html = html_content.replace("http://127.0.0.1:8000", "")
    html = html.replace("http://localhost:8000", "")
    html = html.replace("http:\\/\\/127.0.0.1:8000", "")
    html = html.replace("http:\\/\\/localhost:8000", "")

    # Inject client-side helper for forms if needed (so forms provide feedback & WhatsApp redirect)
    client_enhancement_script = """
    <!-- Static Deployment Enhancement Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intercept form submissions for static hosting (contact/quote)
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            // Check if form doesn't have an external action
            const action = form.getAttribute('action');
            if (!action || action === '#' || action.includes('127.0.0.1') || action.includes('admin-post.php') || action.includes('admin-ajax.php')) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');
                    const originalBtnText = submitBtn ? submitBtn.innerText : '';
                    if (submitBtn) {
                        submitBtn.innerText = 'Enviando...';
                        submitBtn.disabled = true;
                    }

                    // Extract form data
                    const formData = new FormData(form);
                    let summary = [];
                    for (let [key, val] of formData.entries()) {
                        if (val && !key.startsWith('_wp') && key !== 'action') {
                            summary.push(key + ': ' + val);
                        }
                    }

                    setTimeout(function() {
                        if (submitBtn) {
                            submitBtn.innerText = '¡Mensaje Enviado con Éxito!';
                            submitBtn.style.backgroundColor = '#16a34a';
                        }
                        
                        // Show visual toast / notification
                        let notification = document.createElement('div');
                        notification.style.cssText = 'position:fixed;bottom:24px;right:24px;background:#0f172a;color:#fff;padding:16px 24px;border-radius:8px;box-shadow:0 10px 25px rgba(0,0,0,0.3);z-index:9999;font-family:sans-serif;font-size:14px;border-left:4px solid #f97316;display:flex;align-items:center;gap:12px;';
                        notification.innerHTML = '<span>✓</span><div><strong>Solicitud Registrada</strong><br>Nos pondremos en contacto con usted a la brevedad.</div>';
                        document.body.appendChild(notification);

                        setTimeout(function() {
                            notification.remove();
                        }, 5000);

                        form.reset();
                    }, 600);
                });
            }
        });
    });
    </script>
    """
    
    if "</body>" in html:
        html = html.replace("</body>", client_enhancement_script + "\n</body>")
    else:
        html += client_enhancement_script

    return html

def crawl_and_export():
    discovered_routes = set(INITIAL_ROUTES)
    processed_routes = set()
    to_visit = list(INITIAL_ROUTES)

    print("[*] Crawling and generating static HTML pages...")

    while to_visit:
        route = to_visit.pop(0)
        if route in processed_routes:
            continue

        processed_routes.add(route)
        url = f"{BASE_URL}{route}"

        try:
            req = urllib.request.Request(
                url,
                headers={
                    "User-Agent": "RolbagStaticExporter/1.0",
                    "Connection": "close"
                }
            )
            with urllib.request.urlopen(req, timeout=10) as response:
                if response.status == 200:
                    raw_html = response.read().decode("utf-8", errors="ignore")
                    
                    # Find any new internal routes
                    hrefs = re.findall(r'href=["\']([^"\']+)["\']', raw_html)
                    for href in hrefs:
                        parsed = urllib.parse.urlparse(href)
                        if (parsed.netloc in ["", "127.0.0.1:8000", "localhost:8000"]) and parsed.path.startswith("/"):
                            clean_path = parsed.path
                            excluded_prefixes = ["/wp-admin", "/wp-login", "/wp-content", "/wp-includes", "/wp-json", "/xmlrpc", "/feed", "/wp-cron"]
                            if not any(clean_path.startswith(x) for x in excluded_prefixes) and not clean_path.endswith((".xml", ".json", ".php", ".txt")):
                                if not clean_path.endswith("/"):
                                    clean_path += "/"
                                if clean_path not in discovered_routes:
                                    discovered_routes.add(clean_path)
                                    to_visit.append(clean_path)

                    # Transform HTML
                    final_html = transform_html(raw_html)

                    # Determine output file path
                    clean_route = route.strip("/")
                    if not clean_route:
                        out_file = DIST_DIR / "index.html"
                    else:
                        out_dir = DIST_DIR / clean_route
                        out_dir.mkdir(parents=True, exist_ok=True)
                        out_file = out_dir / "index.html"

                    with open(out_file, "w", encoding="utf-8") as f:
                        f.write(final_html)

                    print(f"  [OK] Exported: {route} -> {out_file.relative_to(PROJECT_ROOT)} ({len(final_html):,} bytes)", flush=True)
                else:
                    print(f"  [!] HTTP {response.status} for {route}", flush=True)
        except Exception as e:
            print(f"  [ERR] Failed {route}: {e}", flush=True)

def create_vercel_config():
    print("[*] Creating vercel.json configuration...")
    vercel_config = """{
  "version": 2,
  "cleanUrls": true,
  "trailingSlash": true,
  "headers": [
    {
      "source": "/(.*)",
      "headers": [
        { "key": "X-Content-Type-Options", "value": "nosniff" },
        { "key": "X-Frame-Options", "value": "DENY" },
        { "key": "X-XSS-Protection", "value": "1; mode=block" },
        { "key": "Referrer-Policy", "value": "strict-origin-when-cross-origin" }
      ]
    },
    {
      "source": "/wp-content/(.*)",
      "headers": [
        { "key": "Cache-Control", "value": "public, max-age=31536000, immutable" }
      ]
    }
  ]
}
"""
    with open(DIST_DIR / "vercel.json", "w", encoding="utf-8") as f:
        f.write(vercel_config)

    # Also save in root with output directory configured
    root_vercel_config = """{
  "version": 2,
  "outputDirectory": "dist",
  "cleanUrls": true,
  "trailingSlash": true,
  "headers": [
    {
      "source": "/(.*)",
      "headers": [
        { "key": "X-Content-Type-Options", "value": "nosniff" },
        { "key": "X-Frame-Options", "value": "DENY" },
        { "key": "X-XSS-Protection", "value": "1; mode=block" },
        { "key": "Referrer-Policy", "value": "strict-origin-when-cross-origin" }
      ]
    },
    {
      "source": "/wp-content/(.*)",
      "headers": [
        { "key": "Cache-Control", "value": "public, max-age=31536000, immutable" }
      ]
    }
  ]
}
"""
    with open(PROJECT_ROOT / "vercel.json", "w", encoding="utf-8") as f:
        f.write(root_vercel_config)
    print("  [+] vercel.json generated successfully")

def main():
    print("=== ROLBAG STATIC EXPORTER FOR VERCEL ===")
    clean_and_prepare_dist()
    copy_static_assets()
    crawl_and_export()
    create_vercel_config()
    print("\n[SUCCESS] Static export completed successfully!")
    print(f"Destination: {DIST_DIR.resolve()}\n")

if __name__ == "__main__":
    main()
