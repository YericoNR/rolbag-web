# ROLBAG — Comprehensive Landing Audit

## Executive Summary
La landing page de ROLBAG actualmente sufre de un problema severo de fragmentación visual y exceso de aire (whitespace) mal gestionado. A pesar de contar con componentes modernos y recursos visuales adecuados, la página se percibe como un conjunto de "islas" desconectadas en lugar de una experiencia B2B cohesionada. El problema principal radica en la sobreutilización de márgenes y paddings globales (especialmente `var(--space-4xl)` y `var(--space-2xl)`), el uso injustificado de `min-height: 100vh` en el Hero, y un grid Bento que escala desproporcionadamente. El resultado es una página artificialmente estirada donde el contenido real queda "ahogado" en contenedores excesivamente grandes.

## Current State
El sitio se encuentra en un estado funcional desde el punto de vista del código (HTML/PHP semántico, aislamiento CSS BEM, y queries dinámicas de WordPress). Sin embargo, el diseño visual ha perdido cohesión. La densidad de contenido es excesivamente baja y la jerarquía se pierde porque los espacios entre elementos son tan grandes que el usuario no logra establecer relaciones visuales entre el título, la imagen y la descripción de una misma sección.

## Visual Problems
- **Islas de Contenido**: Las secciones alternan fondos claros y oscuros, pero debido al exceso de padding, el contenido flota en el centro, perdiendo relación con los bordes y con la sección anterior/siguiente.
- **Ritmo Roto**: La página acelera y frena bruscamente. Hay secciones muy densas seguidas de grandes espacios vacíos.
- **Falta de Tensión Visual**: Un buen diseño B2B corporativo necesita tensión (relación de cercanía entre un título y su imagen o descripción). Aquí, la tensión es cero porque todo está alejado.

## Layout Problems
- **Hero Stretches**: Al usar `min-height: 100vh`, en pantallas grandes o ultra-anchas el contenido se estira verticalmente, dejando inmensos vacíos arriba y abajo del texto principal.
- **Bento Grid Desproporcionado**: El `.rb-bento-grid` tiene un `grid-auto-rows: 320px`. Los elementos `--large` abarcan 2 filas (640px + gap = 664px). Un bloque de 664px de alto para mostrar solo un título, un párrafo y un botón es un uso extremadamente ineficiente del espacio y se ve vacío.
- **Repetición Estructural**: Se usa `.rb-operations__split` repetidamente (Quiénes Somos, Materiales, Operaciones), lo cual causa monotonía visual. 

## Spacing Problems
- **Paddings Internos Duplicados**: `.rb-operations__content` tiene `padding: var(--space-4xl);` (80px). Como la sección ya tiene `80px` de padding superior e inferior, el contenido termina encapsulado por **160px** de espacio vacío.
- **Cards Ahogadas**: `.rb-feature-card` usa `padding: var(--space-2xl)` (48px). Para el poco texto que contienen, el padding es masivo, comprimiendo el texto en el centro.
- **Gaps Inconsistentes**: Hay usos de `gap: var(--space-xl)` y `gap: var(--space-4xl)` que rompen la escala de proximidad (Ley de Gestalt).

## Content Problems
- El contenido corporativo existe en el HTML, pero está visualmente minimizado. En el Bento Grid, el contenido está oculto inicialmente y solo aparece con hover, lo que requiere esfuerzo cognitivo.
- Textos importantes (como descripciones de materiales o beneficios) quedan visualmente diminutos en comparación con el contenedor o la imagen adjunta.

## Typography Problems
- **Falta de Ancho Óptimo (Line Length)**: Algunos párrafos como la descripción del Hero no tienen un max-width adecuado para la lectura, pero al mismo tiempo están contenidos en cajas con padding gigante.
- **Contraste de Tamaños**: Un H2 de `32px` junto a un espacio en blanco de `160px` hace que la tipografía se perciba débil y poco dominante.
- El uso repetido de `.rb-text-mono` para eyebrows y números es correcto, pero a veces su tamaño (`14px`) se pierde en la inmensidad del bloque.

## Image Problems
- Las imágenes en el Bento Grid son gigantes (664px de alto) pero solo actúan como fondos (`background-image`). Esto reduce su valor funcional y las convierte en mero papel tapiz, restando profesionalismo industrial.
- En `rb-operations__split`, las imágenes están forzadas a alturas fijas (`400px` o `450px`), lo que puede causar recortes (cropping) extraños de la maquinaria o el producto dependiendo de la foto.

## Component Problems
- **Tabs de Operaciones**: Los botones `.rb-tab-btn` tienen un padding de `20px 24px`. Para 7 pestañas, la lista de pestañas ocupa más de `450px` de alto, obligando a la imagen adyacente a estirarse para compensar, generando espacios muertos.
- **Timeline Horizontal**: El timeline de "Soluciones a Medida" está flotando sin anclaje visual fuerte, con un `margin-top: 64px` que lo aísla del subtítulo.

## CSS Problems
- `landing.css` > `.rb-section`: `padding: var(--space-4xl) 0;` -> Genera 80px de padding base. Correcto, pero sumado a otros paddings es letal.
- `landing.css` > `.rb-operations__content`: `padding: var(--space-4xl);` -> CAUSA CRÍTICA DE ESPACIO VACÍO.
- `landing.css` > `.rb-hero-split`: `min-height: 100vh;` -> CAUSA CRÍTICA DE ESTIRAMIENTO ARTIFICIAL.
- `landing.css` > `.rb-bento-grid`: `grid-auto-rows: 320px;` -> CAUSA CRÍTICA DE ALTURA EXCESIVA EN CARDS.
- `landing.css` > `.rb-feature-card`: `padding: var(--space-2xl);` -> Exceso de aire interno.

## JavaScript Problems
- El script maneja correctamente los tabs y los contadores, no hay problemas severos de layout shifting originados por JS (salvo la opacidad/cruce de imágenes en tabs).
- El carrusel de productos nativo con `scroll-snap` es ligero, pero al forzar alturas iguales por Flexbox, si un título es más corto, deja un espacio en blanco debajo en la tarjeta.

## WordPress/Data Problems
- La integración con el CPT `producto` funciona correctamente y no es la causante del problema estructural.
- Las taxonomías y SKU se muestran adecuadamente. No hay vacíos por falta de datos.

## Responsive Problems
- **Desktop (1440px/1024px)**: Los problemas de espacios gigantes (`100vh`, `664px` height) se manifiestan en toda su magnitud aquí.
- **Tablet (768px)**: Al pasar los grids a 1 columna o 2 columnas, el padding interno gigante de las cards (`48px` y `80px`) hace que la columna de texto sea de apenas un par de palabras de ancho.
- **Mobile (390px)**: El Bento se colapsa, pero sigue forzando alturas fijas (`250px` / `350px`), ocupando múltiples pantallas de puro scroll para leer un solo bloque.

## UX Problems
- **Ocultamiento de Información Crítica**: En el Bento Grid de productos, los detalles están ocultos detrás de un hover. En mobile, el hover no existe (o requiere tap forzado), rompiendo la experiencia de descubrimiento.
- **Fatiga de Scroll**: El usuario debe hacer demasiado scroll para consumir muy poca información debido a la baja densidad del diseño.

## Conversion Problems
- Los CTA están demasiado alejados de su contexto (por culpa de los grandes márgenes). En la sección "A Medida", el botón "Solicitar" queda huérfano y aislado del timeline explicativo.
- Falta urgencia visual. El diseño se siente tan relajado (por el exceso de aire) que no invita a la acción rápida, contradiciendo el mensaje corporativo B2B.

## Accessibility Problems
- Contraste adecuado en general.
- Problema estructural: El hover dependiente en Bento Grid penaliza usuarios de teclado o interfaces táctiles.

## Performance Problems
- Performance buena a nivel código. No hay librerías pesadas bloqueando el render.
- GSAP se carga correctamente, pero scrollTrigger evalúa alturas. Si se reducen las alturas muertas, la percepción de velocidad mejorará porque todo estará más cerca en el viewport.

---

## Section-by-Section Analysis

| SECCIÓN | ALTURA | CONTENIDO | PROBLEMA | CAUSA PROBABLE | SEVERIDAD |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **01 Header** | 80px | Navegación | Aislado en desktop si no está sticky. | Falta anclaje de fondo inicial | Baja |
| **02 Hero** | 100vh | Título, Párrafo, CTA, Imagen | Vacíos arriba/abajo del texto. Estirado. | `min-height: 100vh` absoluto en lugar de `min-height: 600px; max-height: 800px;` | **CRÍTICO** |
| **03 Propuesta de Valor** | Depende (auto) | 3 Cards de Ingeniería | Cards son gigantes con texto mínimo al centro. | `.rb-feature-card` `padding: 48px;` y `.rb-feature-card--wide` | **ALTO** |
| **04 Quiénes Somos** | ~560px | Foto, Trayectoria | Imagen forzada a 400px; padding inmenso. | `.rb-operations__content` padding 80px + section padding 80px | **ALTO** |
| **05 Líneas de Prod** | >720px | Bento Grid (4 items) | Demasiado alto; texto oculto en hover. | `grid-auto-rows: 320px` (Span 2 = 664px) | **CRÍTICO** |
| **06 A Medida** | auto | Timeline | Contenido huérfano flotando; mucho gap. | `padding-top: 60px` interno + `margin-top: 64px` | Medio |
| **07 Materiales** | ~560px | Split (Texto + Lista + Foto) | Igual a Quiénes Somos; exceso de aire interno. | Uso de `.rb-operations__split` con su padding 80px | **ALTO** |
| **08 Destacado** | ~500px | Carrusel | Alturas irregulares por longitud de texto. | Falta de control en `min-height` de la tarjeta | Medio |
| **09 Beneficios** | auto | 6 iconos + texto | Items pequeños nadando en grid separado. | `gap: 32px` + `padding: 32px` en grid fluido | Medio |
| **10 Operaciones** | >600px | Tabs + Imagen | Altura dictada por las 7 pestañas gigantes. | `padding: 20px 24px` en cada `.rb-tab-btn` | **ALTO** |
| **11 Marcas** | auto | Listas de compatibilidad | Contenido comprimido; bloques que parecen irrelevantes. | Falta integración, parece un apéndice suelto. | Medio |
| **12 Experiencia** | ~400px | `+28`, `+300` | Excesivo padding global (`120px` top/bot). | `.rb-experience` padding | **ALTO** |
| **13 Proceso** | auto | Pasos 1 a 4 | Desconectado visualmente; flota en blanco. | Grid con `gap: 32px`, poca estructura visual. | Bajo |
| **14 Cotización** | auto | 2 Cajas de requisitos | Funcional, pero repite padding. | Flex gap y padding repetido. | Bajo |
| **15 CTA Final** | auto | Box azul oscuro | Bien proporcionado, pero el entorno lo aísla. | Padding del footer y de sección adyacente. | Bajo |

---

## Top 20 Problems

1. **P01: Altura del Bento Grid Excesiva**. Causa: `grid-auto-rows: 320px`. Impacto: Rompe el ritmo. Severidad: **CRÍTICO**. Solución: Bajar base a 220px/250px o cambiar el enfoque a cards tradicionales B2B.
2. **P02: Hero Estirado**. Causa: `min-height: 100vh` rígido. Impacto: Espacios vacíos enormes. Severidad: **CRÍTICO**. Solución: Usar `min-height: 600px` o padding fluido `clamp()`.
3. **P03: Doble Padding en Split**. Causa: `.rb-section` (80px) + `.rb-operations__content` (80px). Impacto: Islas de contenido flotante. Severidad: **CRÍTICO**. Solución: Eliminar el padding interno del split container y usar solo gap.
4. **P04: Padding Interno Excesivo en Cards**. Causa: `.rb-feature-card` `padding: 48px`. Impacto: Texto comprimido. Severidad: **ALTO**. Solución: Reducir a 24px/32px.
5. **P05: Texto oculto en Bento**. Causa: CSS hover state opacity 0. Impacto: Dificulta la lectura rápida de B2B. Severidad: **ALTO**. Solución: Mostrar siempre el texto, usar el hover para iluminar o dar focus.
6. **P06: Tabs Ocupando Exceso de Altura**. Causa: `padding: 20px 24px` en 7 tabs. Impacto: Forzan la imagen adyacente a estirarse. Severidad: **ALTO**. Solución: Reducir padding de tabs a 12px 16px.
7. **P07: Sección de Experiencia Masiva**. Causa: Padding 120px + tamaño fuente 96px. Impacto: Detiene el scroll. Severidad: **ALTO**. Solución: Integrar esta métrica dentro de otra sección (ej. Quiénes somos) o reducir altura.
8. **P08: Monotonía Visual del Componente Split**. Causa: Reutilización de `.rb-operations__split` 4 veces. Impacto: Página repetitiva y aburrida. Severidad: **ALTO**. Solución: Alternar composición (imagen a la derecha/izquierda, o usar grids asimétricos).
9. **P09: Aislamiento del Timeline "A Medida"**. Causa: `margin-top: 64px`. Impacto: Desconexión del contexto. Severidad: **MEDIO**. Solución: Reducir gap y usar bordes conectores más fuertes.
10. **P10: Bloques Flotantes en Proceso**. Causa: Grid simple sin fondo ni conector. Impacto: Se siente incompleto. Severidad: **MEDIO**. Solución: Añadir una línea conectora o agrupar en tarjetas cohesivas.
11. **P11: Imágenes forzadas a `height: 400px`**. Causa: Inline CSS `height: 400px` en `image-container`. Impacto: Recortes arbitrarios. Severidad: **MEDIO**. Solución: Dejar que la imagen determine su altura o usar un `aspect-ratio` controlado (`16/9`).
12. **P12: Tensión nula entre Headers y Contenido**. Causa: `margin-bottom: var(--space-3xl)` (64px) global. Impacto: Título desconectado. Severidad: **MEDIO**. Solución: Reducir a 32px/40px.
13. **P13: Sección Marcas parece Apéndice**. Causa: Bloques de color claro sobre fondo blanco. Impacto: Baja importancia visual. Severidad: **MEDIO**. Solución: Agruparlas en un panel con mayor peso visual.
14. **P14: Card Wide de Propuesta de Valor Vacía**. Causa: `grid-column: span 2` para muy poco texto. Impacto: Espacio en blanco masivo. Severidad: **MEDIO**. Solución: Tres columnas iguales (1fr 1fr 1fr).
15. **P15: Ancho de línea (Line Length) en Texto Hero**. Causa: `max-width: 600px` con font-size 18px. Impacto: Un poco largo para lectura rápida. Severidad: **BAJO**. Solución: Ajustar a 45-60 caracteres.
16. **P16: Colapso en Mobile de Alturas de Bento**. Causa: `min-height: 350px` forzado. Impacto: Scroll infinito en mobile. Severidad: **MEDIO**. Solución: Alturas auto en mobile.
17. **P17: Alerta "Importante" desconectada**. Causa: Está centrada bajo un timeline izquierdo. Impacto: Raro visualmente. Severidad: **BAJO**. Solución: Alinear con el flujo de contenido.
18. **P18: Iconos de Beneficios flotando**. Causa: Emojis a tamaño 32px sin contenedor visual fuerte. Impacto: Aspecto poco profesional. Severidad: **BAJO**. Solución: Usar íconos SVG corporativos.
19. **P19: Margen en listas de Compatibilidad**. Causa: `line-height: 2`. Impacto: Listas estiradas. Severidad: **BAJO**. Solución: `line-height: 1.5`, usar grid para listas largas.
20. **P20: Doble CTA Separados**. Causa: "Ver Catálogo" y "Cotizar" compiten sin jerarquía. Impacto: Confusión de conversión. Severidad: **BAJO**. Solución: Definir acción primaria única por sección.

---

## Root Causes
Las tres causas raíz (Root Causes) son:
1. **Acumulación de Padding/Margin (CSS Box Model)**: Al anidar componentes (`.rb-section` > `.rb-operations__split` > `.rb-operations__content`), los paddings se suman. 80px + 80px = 160px.
2. **Uso de Alturas Absolutas (`100vh`, `400px`, `664px`)**: Forzar contenedores a alturas predeterminadas en lugar de dejar que el contenido defina la altura (con límites de padding controlado) generó los "espacios gigantes vacíos".
3. **Conversión Estricta del Contenido a Bloques**: El intento de encajar textos narrativos en tarjetas simétricas o grids estrictos (Bento, Features) resultó en "islas" porque el contenido real no tiene la longitud suficiente para llenar esas estructuras, dejando superficies de color enormes con texto diminuto al centro.

---

## Recommended New Structure (Visual Architecture)

Bajo el principio "NO MÁS ELEMENTOS. MEJORES RELACIONES", la arquitectura de la landing debe condensarse. Debemos fusionar contextos en lugar de separarlos en bandas horizontales infinitas.

1. **HERO (Compacto)**:
   - `min-height: 70vh` (no 100vh).
   - Título, bajada y CTA a la izquierda. Imagen corporativa derecha.

2. **QUIÉNES SOMOS + TRAYECTORIA (Integrado)**:
   - Fusionar sección "Quiénes Somos" (04) con "Experiencia" (12).
   - **Razón**: Los contadores de "+28 años" y "+300 modelos" respaldan directamente la historia. Ponerlos juntos crea un bloque de confianza inmenso en lugar de dos islas separadas.

3. **PROPUESTA DE VALOR + MATERIALES (Integrado)**:
   - Fusionar "Características de Ingeniería" (03) con "Materiales" (07) y "Beneficios" (09).
   - **Razón**: Todas estas secciones hablan del *Por qué ROLBAG*. Se puede diseñar un layout de Especificaciones Técnicas (estilo Apple/Industrial) donde la "Ingeniería a medida", la "Goma EVA", y la "Durabilidad" convivan en una sola infografía o grilla compacta de densidad alta.

4. **LÍNEAS DE PRODUCTOS (Re-imaginado)**:
   - Cambiar el Bento gigante por Cards horizontales detalladas o un catálogo de listas con hover de imagen.
   - **Razón**: El usuario corporativo necesita leer qué cubre la funda, no adivinar ocultando el texto.

5. **DESARROLLO A MEDIDA + PROCESO (Integrado)**:
   - Fusionar la sección "A Medida" (06) con el "Proceso" (13) y los "Requisitos para Cotizar" (14).
   - **Razón**: Si el cliente necesita algo a medida, necesita saber cómo es el proceso y qué debe enviar. Todo esto es el flujo de compra. Formar una "Zona de Desarrollo Especial" cohesiva.

6. **OPERACIONES + MARCAS (Integrado)**:
   - Fusionar "Operaciones" (10) con "Compatibilidad" (11).
   - **Razón**: Validamos que servimos a su industria (Minería/Retail) y que soportamos su marca (Zebra/Honeywell) en un mismo contexto.

7. **CTA FINAL**:
   - Mantener como cierre fuerte e inmediato al formulario de contacto o WhatsApp.

**Resultado Narrativo**: De 16 "islas" independientes a **6 Macro-Secciones Cohesionadas**, con alta densidad de valor, tensión visual correcta y cero espacios vacíos.

---

## Priority Roadmap

### Phase A — Critical
- Refactorizar CSS: Eliminar `padding: var(--space-4xl)` de los contenedores internos.
- Refactorizar Hero: Cambiar `100vh` por una altura máxima razonable (ej. `800px`) o padding responsivo.
- Refactorizar Bento Grid: Eliminar `grid-auto-rows: 320px` masivos y asegurar que el texto sea visible siempre, reduciendo la altura.

### Phase B — High
- Fusión Arquitectónica: Consolidar "Experiencia" dentro de "Quiénes Somos".
- Reducir padding de `.rb-feature-card` de 48px a 24px.
- Rediseñar pestañas de operaciones reduciendo paddings (`.rb-tab-btn`).

### Phase C — Refinement
- Ajustar márgenes inferiores de títulos (`margin-bottom: 32px` máximo en lugar de 64px) para acercar el texto al contenido.
- Crear un flujo integrado para "Soluciones a Medida" + "Proceso de Trabajo".

### Phase D — Polish
- Reemplazar emojis de beneficios por iconos vectoriales SVG corporativos.
- Ajustes finos de Responsive Typography en mobile.

## Final Assessment
Esta web, tal como está programada ahora mismo, **NO debería publicarse como un sitio corporativo B2B premium**.
A pesar de tener un excelente fundamento técnico y código limpio, el diseño padece de "Síndrome de Plantilla Desarticulada" debido a decisiones matemáticas de CSS en la capa de layout. Los espacios gigantes disipan la autoridad de la marca.
Con el refactor propuesto (compactación y consolidación de secciones), la página alcanzará un nivel B2B altamente profesional en cuestión de horas, sin necesidad de rehacer PHP o infraestructura backend.

## ESTADO DE EJECUCI�N (FASE 4)

- **Hero:** padding reducido (ya no utiliza min-height: 100vh) ajust�ndose a su contenido.
- **Contadores de Experiencia:** se reubicaron sem�nticamente junto a 'Qui�nes Somos' y se optimiz� su espacio.
- **Bento Grid:** se elimin� la restricci�n de grid-auto-rows de 320px; las cards ahora crecen en funci�n de su contenido con un min-height de 280px. Los textos ahora son visibles siempre (opacity: 1).
- **Paddings de Componentes:** .rb-feature-card, .rb-bento-item y .rb-operations__content redujeron su padding de 48px/64px a 32px.
- **Reorganizaci�n Estructural (Macro-secciones):** Se aplic� el reordenamiento del DOM y se utilizaron clases utilitarias (.rb-section--no-pad-bottom, .rb-section--no-pad-top) para fusionar secciones adyacentes manteniendo la estructura HTML.
- **Status Final:** IMPLEMENTACI�N COMPLETADA. ESPERANDO REVISI�N VISUAL.

