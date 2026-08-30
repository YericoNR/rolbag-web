---
name: ui-animation
description: Animaciones UI simples y microinteracciones usando CSS (hover, enter/exit, transitions, keyframes).
---

# Animaciones UI y Microinteracciones (ROLBAG)

## Propósito
Manejar el feedback visual inmediato en la interfaz (botones, enlaces, modales) con alta eficiencia mediante CSS.

## Responsabilidades
- **Hover States:** Crear estados hover atractivos (cambios de color sutiles, ligero `scale`, sombras).
- **Transitions:** Usar `transition` en CSS para cambios de estado, especificando la propiedad (ej. `transition: transform 0.3s ease`).
- **Enter/Exit:** Fade-ins sutiles para elementos del DOM (ej. modales, menús desplegables).
- **Regla:** Siempre preferir CSS Transitions y CSS Keyframes antes que cargar JavaScript, si la animación es estática, interactiva por el mouse o simple.

## Referencia Externa
Desarrollo basado en especificaciones modernas de CSS3 y patrones UI estándar.
