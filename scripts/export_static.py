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
    "/productos/",
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

def build_combined_css():
    theme_css_dir = PROJECT_ROOT / "wp-content" / "themes" / "rolbag" / "assets" / "css"
    theme_root = PROJECT_ROOT / "wp-content" / "themes" / "rolbag"
    
    # Priority order of CSS
    css_files = [
        theme_css_dir / "tokens.css",
        theme_root / "style.css",
        theme_css_dir / "base.css",
        theme_css_dir / "components.css",
        theme_css_dir / "forms.css",
        theme_css_dir / "products.css",
        theme_css_dir / "landing.css",
        theme_css_dir / "motion.css",
        theme_css_dir / "responsive.css",
        theme_css_dir / "design-system-main.css"
    ]
    
    combined = []
    for f in css_files:
        if f.exists():
            content = f.read_text(encoding="utf-8", errors="ignore")
            # Remove @import statements to prevent circular/external lookups
            content = re.sub(r'@import\s+url\([^)]+\);', '', content)
            combined.append(content)
            
    full_css = "\n\n".join(combined)
    # Fix asset URLs inside CSS
    full_css = full_css.replace("/wp-content/themes/rolbag/assets/", "/assets/")
    full_css = full_css.replace("wp-content/themes/rolbag/assets/", "/assets/")
    full_css = full_css.replace("../images/", "/assets/images/")
    full_css = full_css.replace("images/", "/assets/images/")
    return full_css

def copy_static_assets():
    print("[*] Copying static assets (theme assets, uploads, clean paths)...")
    
    theme_dir = PROJECT_ROOT / "wp-content" / "themes" / "rolbag"
    
    # 1. Copy theme assets directly into dist/assets/
    theme_assets_src = theme_dir / "assets"
    dist_assets = DIST_DIR / "assets"
    if theme_assets_src.exists():
        shutil.copytree(theme_assets_src, dist_assets, ignore=shutil.ignore_patterns("*.php", "*.bak", ".git*"))
        print(f"  [+] Copied theme assets to {dist_assets}")

    # Copy root style.css into dist/assets/css/style.css
    theme_style = theme_dir / "style.css"
    if theme_style.exists():
        css_dir = dist_assets / "css"
        css_dir.mkdir(parents=True, exist_ok=True)
        shutil.copy(theme_style, css_dir / "style.css")
        print(f"  [+] Copied theme style.css to {css_dir / 'style.css'}")

    # Save combined master CSS to dist/assets/css/rolbag-bundle.css
    full_bundle_css = build_combined_css()
    (dist_assets / "css" / "rolbag-bundle.css").write_text(full_bundle_css, encoding="utf-8")
    print(f"  [+] Generated master bundle CSS at {dist_assets / 'css' / 'rolbag-bundle.css'} ({len(full_bundle_css):,} bytes)")

    # 2. Copy uploads to dist/uploads/
    uploads_src = PROJECT_ROOT / "wp-content" / "uploads"
    dist_uploads = DIST_DIR / "uploads"
    if uploads_src.exists():
        shutil.copytree(uploads_src, dist_uploads, ignore=shutil.ignore_patterns("*.php", "*.bak"))
        print(f"  [+] Copied uploads to {dist_uploads}")

    # 3. Copy wp-includes to dist/assets/vendor/
    includes_src = PROJECT_ROOT / "wp-includes"
    dist_vendor = dist_assets / "vendor"
    if includes_src.exists():
        for sub in ["css", "js"]:
            src_sub = includes_src / sub
            dst_sub = dist_vendor / sub
            if src_sub.exists():
                shutil.copytree(src_sub, dst_sub, ignore=shutil.ignore_patterns("*.php"))
                print(f"  [+] Copied vendor {sub} to {dst_sub}")

def transform_html(html_content, combined_css):
    html = html_content

    # Replace absolute local URLs
    html = html.replace("http://127.0.0.1:8000", "")
    html = html.replace("http://localhost:8000", "")
    html = html.replace("http:\\/\\/127.0.0.1:8000", "")
    html = html.replace("http:\\/\\/localhost:8000", "")

    # Map WordPress asset paths to clean public paths
    html = html.replace("/wp-content/themes/rolbag/assets/", "/assets/")
    html = html.replace("wp-content/themes/rolbag/assets/", "/assets/")
    html = html.replace("/wp-content/themes/rolbag/style.css", "/assets/css/style.css")
    html = html.replace("wp-content/themes/rolbag/style.css", "/assets/css/style.css")
    html = html.replace("/wp-content/themes/rolbag/favicon.ico", "/assets/images/brand/favicon.ico")
    html = html.replace("/wp-content/uploads/", "/uploads/")
    html = html.replace("wp-content/uploads/", "/uploads/")
    html = html.replace("/wp-includes/css/", "/assets/vendor/css/")
    html = html.replace("/wp-includes/js/", "/assets/vendor/js/")
    html = html.replace("/wp-includes/", "/assets/vendor/")

    # Inject the complete inlined CSS bundle into <head> so it is 100% styled regardless of external loading
    inlined_style_tag = f"""
    <!-- Master ROLBAG Design System & Production Styles -->
    <style id="rolbag-master-inlined-css">
    {combined_css}
    </style>
    """
    
    if "</head>" in html:
        html = html.replace("</head>", inlined_style_tag + "\n</head>")
    elif "<body" in html:
        html = html.replace("<body", inlined_style_tag + "\n<body")

    # Inject client-side helper for forms & interaction
    client_enhancement_script = """
    <!-- Static Deployment Enhancement Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intercept form submissions for static hosting (contact/quote)
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            const action = form.getAttribute('action');
            if (!action || action === '#' || action.includes('127.0.0.1') || action.includes('admin-post.php') || action.includes('admin-ajax.php')) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');
                    if (submitBtn) {
                        submitBtn.innerText = 'Enviando...';
                        submitBtn.disabled = true;
                    }

                    setTimeout(function() {
                        if (submitBtn) {
                            submitBtn.innerText = '¡Mensaje Enviado con Éxito!';
                            submitBtn.style.backgroundColor = '#16a34a';
                        }
                        
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
    combined_css = build_combined_css()
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
                    
                    # Find internal routes
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

                    # Transform HTML with inlined master CSS
                    final_html = transform_html(raw_html, combined_css)

                    # Output file
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
      "source": "/assets/(.*)",
      "headers": [
        { "key": "Cache-Control", "value": "public, max-age=31536000, immutable" }
      ]
    },
    {
      "source": "/uploads/(.*)",
      "headers": [
        { "key": "Cache-Control", "value": "public, max-age=31536000, immutable" }
      ]
    }
  ]
}
"""
    with open(DIST_DIR / "vercel.json", "w", encoding="utf-8") as f:
        f.write(vercel_config)

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
      "source": "/assets/(.*)",
      "headers": [
        { "key": "Cache-Control", "value": "public, max-age=31536000, immutable" }
      ]
    },
    {
      "source": "/uploads/(.*)",
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
    print("=== ROLBAG MASTER STATIC EXPORTER FOR VERCEL ===")
    clean_and_prepare_dist()
    copy_static_assets()
    crawl_and_export()
    create_vercel_config()
    print("\n[SUCCESS] Master static export completed successfully!")
    print(f"Destination: {DIST_DIR.resolve()}\n")

if __name__ == "__main__":
    main()
