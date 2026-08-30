---
name: gsap-advanced
description: Animaciones complejas y premium mediante GreenSock Animation Platform (GSAP). ScrollTrigger, Timelines, Stagger, etc.
---

# Animaciones Avanzadas con GSAP (ROLBAG)

## Propósito
Implementar interacciones de alto nivel donde CSS no es suficiente (animaciones atadas al scroll, secuencias de timeline complejas, etc).

## Responsabilidades
- **ScrollTrigger:** Usar GSAP ScrollTrigger para hacer reveal de elementos al entrar al viewport (scroll animations, parallax moderado, pinned sections).
- **Timelines:** Usar `gsap.timeline()` para encadenar animaciones narrativas.
- **Stagger:** Efectos en cascada (`stagger: 0.1`) para listas, cards o grids de productos.
- **Rendimiento:** 
  - Animar ÚNICAMENTE `transform` y `opacity`. 
  - NO animar `width`, `height`, `top`, `left` u otras propiedades que causen layout thrashing.
- **Restricción:** Usar GSAP solo cuando el nivel de interacción lo justifique. Para interacciones básicas, usar la skill `ui-animation` (CSS).

## Referencia Externa
Conocimientos derivados de la documentación oficial de GreenSock (GSAP).
