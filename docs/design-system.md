# ROLBAG Design System

Este documento define la base visual, técnica y de interacción del nuevo sitio web B2B de ROLBAG. Construido para transmitir fabricación a medida, precisión técnica y protección corporativa.

## Brand Direction
ROLBAG debe transmitir:
- **Seguridad y Protección**
- **Precisión Tecnológica**
- **Fabricación Industrial B2B**
- **Experiencia (28 años)**

La estética es corporativa, premium, industrial y tecnológica. El producto es siempre el protagonista. 

## Logo Usage
El Design System se fundamenta en los colores extraídos del logo oficial cargado por el cliente:
- La tipografía gruesa "ROLBAG" dicta el peso visual de nuestros encabezados.
- El "Azul Corporativo" es la base de confianza.
- El "Cian Tecnológico" es el acento moderno (usado en la "B" y en "Security").

## Color System
**Tokens Principales (Variables CSS):**
- `--color-brand-primary`: `#003B94` (Azul Corporativo, sólido, profundo).
- `--color-brand-accent`: `#00B4FF` (Cian brillante, tecnológico).
- `--color-background`: `#F8FAFC` (Gris muy claro, mantiene limpieza B2B).
- `--color-surface`: `#FFFFFF` (Blanco puro para contraste de cards).

**Uso de color:**
- **Azul Corporativo** para elementos estructurales, títulos principales y botones primarios.
- **Cian Tecnológico** para interacciones sutiles (hover, focus outlines), insignias destacadas y acentos en motion.
- **Descartado el color Naranja** por indicaciones estrictas, asegurando una estética fría y precisa (tecnológica).

## Typography
- **Fuente Principal:** `Inter` (Soporta pesos variables, altísima legibilidad en pantallas).
  - Usada en Headings, Párrafos, Navegación, Botones.
- **Fuente Técnica:** `Roboto Mono`.
  - Usada EXCLUSIVAMENTE para SKUs, Modelos, Badges Técnicos (ej: IP67) y especificaciones numéricas para aportar un toque "logístico" e "industrial".

## Spacing
Basado en una escala rem de múltiplos de 8px:
`--space-xs` (4px), `--space-sm` (8px), `--space-md` (16px), `--space-lg` (24px), `--space-xl` (32px), `--space-2xl` (48px).

## Grid
Sistema basado en CSS Grid.
- `--container-max-width`: `1280px`
- `--grid-columns`: 12
- Gutters: 24px en desktop, 16px en mobile.

## Radius
Bordes limpios con un ligero redondeo para suavizar lo industrial.
- `--radius-small`: 4px
- `--radius-medium`: 8px (Botones y form inputs)
- `--radius-large`: 16px (Cards)
- `--radius-pill`: 9999px (Badges)

## Shadows
Mínimo uso de sombras. Estética limpia y flat.
- `--shadow-card`: Sutil sombra de elevación al hacer hover para invitar al click sin saturar la vista.

## Buttons
Componente vital.
- **Primary:** Fondo Azul Corporativo, texto blanco.
- **Secondary:** Fondo transparente con borde gris, texto Azul Corporativo.
- **Accent:** Fondo Cian, texto blanco.

## Cards
- **Product Card:** Limpia, fondo blanco, padding interior (`space-md`), imagen protagonista con aspecto 4:3, marca superior en uppercase, SKU en tipografía Mono, y CTA inferior. Hover eleva la tarjeta e incrementa ligeramente la escala de la imagen (motion).

## Forms
Diseñados para consultas B2B formales.
- Inputs con borde sutil.
- Focus state utilizando un "glow" de color Cian Tecnológico (`box-shadow: 0 0 0 3px rgba(0, 180, 255, 0.15)`) para máxima accesibilidad y modernidad.

## Motion System
El sistema está preparado para ser implementado con CSS puro inicialmente, escalable a GSAP si se requiere complejidad (Staggers y ScrollTriggers).
- **Tokens:** `--motion-duration-fast` (150ms) a `slow` (500ms).
- **Easing:** `--motion-ease-standard` (Cubic Bezier material).

## Responsive System
- Mobile-first approach.
- Puntos de quiebre definidos en CSS para `max-width: 768px` (Tablet/Mobile menu trigger) y `max-width: 576px` (Stack 100%).
- La tipografía H1 se reduce automáticamente de 40px (Desktop) a 28px (Mobile).

## Accessibility
- Respeto por `prefers-reduced-motion` a nivel global en `:root` (desactiva transiciones/animaciones).
- `focus-visible` global para navegación por teclado con outline de color Cian.
- Textos y fondos contrastados según normativas WCAG.
