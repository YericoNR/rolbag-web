---
name: seo-audit
description: SEO Técnico, indexabilidad, metadatos, schema y arquitectura.
---

# SEO Técnico y Auditoría (ROLBAG)

## Propósito
Optimizar ROLBAG para que los motores de búsqueda rastreen, comprendan e indexen el contenido de la manera correcta.

## Responsabilidades
- **Metadata:** Todo template debe escupir el tag `title` correcto (vía `add_theme_support('title-tag')`). Descripción meta.
- **Jerarquía (H1, H2, H3):** Un solo `H1` por página. Orden lógico de encabezados.
- **Indexabilidad:** Canonical URLs correctas. Sitemap.xml y robots.txt válidos.
- **Internal Linking:** Asegurar que todos los productos y páginas clave estén interconectados. Enlaces con buen anchor text.
- **Schema Markup:** Si es posible, inyectar JSON-LD estructurado (ej. `Product` o `Organization`).

## Referencia Externa
Implementación guiada por Google Search Central SEO Starter Guide.
