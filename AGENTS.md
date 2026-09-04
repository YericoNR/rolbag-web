# Reglas y Pautas del Proyecto ROLBAG

## Despliegue en Línea y Publicación en Vercel (REGLA MANDATORIA)
- **Sitio en Producción:** Este proyecto está en producción en **Vercel** conectado al repositorio `origin/main`.
- **Regla de Publicación:** Cada vez que se completen cambios de código, templates, estilos o catálogo de productos:
  1. Ejecutar la exportación estática:
     ```bash
     python scripts/export_static.py
     ```
  2. Verificar que `dist/` contenga las páginas generadas sin errores.
  3. Ejecutar `git add .`
  4. Ejecutar `git commit -m "<tipo>: <mensaje>"`
  5. Ejecutar `git push origin main` para que Vercel despliegue la nueva versión a la web en vivo.

## Reglas de Arquitectura y Contenido
- **NO inventar información:** Utilizar únicamente información técnica oficial y briefing verificado.
- **CPT y Modelos:** Mantener la arquitectura de un producto único por línea en el CPT `producto` con todos sus modelos compatibles agrupados internamente.
- **Diseño:** B2B Corporativo, Industrial, Tecnológico y 100% responsivo (Mobile-First).
