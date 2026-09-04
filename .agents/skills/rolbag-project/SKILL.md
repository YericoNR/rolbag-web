---
name: rolbag-project
description: Skill principal y permanente del proyecto ROLBAG. Contiene el contexto, arquitectura, reglas de negocio, contenido, diseño y decisiones técnicas específicas del proyecto.
---

# Proyecto ROLBAG - Contexto y Reglas Base

## 1. Identidad del Proyecto
**Nombre:** ROLBAG
**Tipo:** Sitio web corporativo B2B con catálogo de productos y generación de solicitudes de cotización. (NO es un e-commerce. No hay carrito, checkout, ni compra online).
**Objetivo:** Presentar la empresa, sus soluciones, productos y capacidad de fabricación a medida para generar confianza y conversiones (solicitudes de cotización).

### Flujo Comercial Principal:
VISITA → CONOCE LA SOLUCIÓN → EXPLORA PRODUCTO → SOLICITA INFORMACIÓN / COTIZACIÓN → CONTACTO COMERCIAL

## 2. Información Real
- Más de 28 años de experiencia.
- Más de 300 modelos de fundas desarrollados.
- Especialización en confeccionar fundas protectoras a medida (capturadores, tablets, impresoras, valijas de seguridad, candados especiales).

**Marcas de equipos:** Zebra, Honeywell, Datalogic, Urovo, Unitech, Chainway, Newland, CipherLab, Bluebird, M3 Mobile, Panasonic, Epson, Bixolon, Star Micronics, Sewoo.
**Posibles Clientes (Uso Restringido):** Cencosud, La Polar, Correos de Chile, Iron Mountain, FedEx. NO usar logos ni testimonios sin confirmación explícita.

## 3. Regla Absoluta de Información
**NO INVENTAR INFORMACIÓN.** Si falta un dato, usar `[PLACEHOLDER — INFORMACIÓN PENDIENTE]`, `[IMAGE PLACEHOLDER]` o `[DATOS PENDIENTES DE CONFIRMACIÓN]`. Nunca inventar cifras, precios, capacidades ni clientes.

## 4. Arquitectura Tecnológica
- **Stack:** WordPress + PHP + MySQL/MariaDB + HTML + CSS + JavaScript.
- **Tema:** `rolbag` (Maneja presentación, templates, layout, estilos, scripts frontend).
- **Plugin Core:** `rolbag-core` (Maneja Custom Post Types, taxonomías, campos, configuraciones. Lógica independiente del diseño).

## 5. Sistema de Productos
- **CPT:** `producto` (slug: `productos`)
- **Taxonomías:** `categoria_producto` y `marca`.
- **Categorías:** Fundas para Capturadores, Fundas para Tablets, Fundas para Impresoras, Valijas de Seguridad, Candados Especiales.
- **Plantilla:** Reutilizable (`/productos/[producto]/`). NO hardcodear páginas de productos. El precio NO es obligatorio.
- **Destacados:** Dinámicos. Consultados desde WordPress (campo destacado).

## 6. Diseño Visual y UX/CRO
- **Dirección:** Corporativa, Premium, Industrial, Tecnológica, Profesional, Moderna, Confiable. El producto es protagonista.
- **Evitar:** Plantillas genéricas, catálogos baratos, exceso de efectos.
- **UX/CRO:** Enfocado en conversión B2B clara (Solicitar cotización, Solución a medida, WhatsApp). Cero dark patterns.
- **Mobile-First:** Diseño nativo para mobile/tablet (tap targets grandes, sliders swipeables). No es un "desktop roto".

## 7. Reglas de Desarrollo y Prioridades
**Prioridades:** 1. Exactitud de la información > 2. Funcionalidad > 3. UX > 4. Conversión > 5. Accesibilidad > 6. Performance > 7. SEO > 8. Diseño visual > 9. Motion.
- **Código:** Modular, escalable y limpio.
- **Cambios de Arquitectura:** NO modificar WordPress, el tema base, el plugin core o el sistema de CPTs sin justificar el impacto y obtener aprobación previa.

## 8. Relación con Otras Skills
Esta skill establece las reglas de negocio de ROLBAG. Se apoya en:
- **WORDPRESS:** `wp-theme-development`, `wp-plugin-development`, `wp-wpcli-and-ops`, `wp-phpstan`.
- **FRONTEND/DISEÑO:** `frontend-design`, `web-design-guidelines`, `mobile-design`.
- **MOTION:** `motion-design-skill`, `gsap-advanced`, `ui-animation`, `motion-design-systems`.
- **QUALITY/SECURITY:** `webapp-testing`, `web-performance-optimization`, `seo-audit`, `wp-security-best-practices`.

## 9. Despliegue en Línea y Publicación en Vercel (Regla Permanente)
- **Sitio en Producción:** El sitio corporativo de ROLBAG se encuentra en línea y activo a través de **Vercel** conectado a la rama `main` del repositorio `origin`.
- **Obligación de Commit y Push:** Cualquier tarea, modificación de código, ajuste de estilos, templates o actualización de catálogo aprobada DEBE reflejarse en producción siguiendo el flujo:
  1. Ejecutar el generador estático: `python scripts/export_static.py` para sincronizar `dist/`.
  2. Ejecutar `git add .`
  3. Ejecutar `git commit -m "<tipo>: <descripción>"`
  4. Ejecutar `git push origin main` para activar el despliegue automático de Vercel y actualizar el sitio en vivo.

