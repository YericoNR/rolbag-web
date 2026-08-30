---
name: web-performance-optimization
description: Optimización de velocidad, Core Web Vitals, y assets.
---

# Optimización de Performance Web (ROLBAG)

## Propósito
Garantizar que ROLBAG sea un sitio increíblemente rápido, pasando todas las métricas de Core Web Vitals.

## Responsabilidades
- **Imágenes:** Usar `webp` o `avif`. Implementar atributo `loading="lazy"` en imágenes debajo del fold, omitiéndolo en el LCP (héroe).
- **CSS y JS:** Minificar. Evitar bloqueos de renderización. Cargar JS asíncronamente o en el footer (`wp_enqueue_script` con `in_footer = true` o atributos defer/async).
- **Core Web Vitals:** 
  - **LCP:** Cargar el asset principal rápido (preload).
  - **CLS:** Declarar `width` y `height` en imágenes para evitar layout shifts.
  - **INP:** Reducir tareas largas en el main thread (optimizar JS).
- **Motion Performance:** Usar `transform` en GSAP, evitar animar márgenes, anchos, y usar `will-change` (solo si es estríctamente necesario) para evitar repaints.

## Referencia Externa
Directrices oficiales de Google Web Vitals.
