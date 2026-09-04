---
description: Regla obligatoria de despliegue continuo y publicación en Vercel para el sitio ROLBAG
---

# Regla de Despliegue en Línea y Publicación en Vercel

## 1. Contexto Operativo
El sitio web corporativo de ROLBAG está **en línea y en producción activa**, servido a través de **Vercel** conectado al repositorio GitHub (`YericoNR/rolbag-web`).

## 2. Flujo Obligatorio de Publicación
Para que cualquier cambio en código, diseño, templates o datos sea visible para los usuarios y clientes en la web en vivo, se debe cumplir estrictamente el siguiente flujo:

1. **Sincronización de Base de Datos y Build Estático:**
   - Cuando se modifiquen metadatos o productos en WordPress local, ejecutar el script de sincronización correspondiente vía WP-CLI.
   - Siempre ejecutar el exportador estático maestro:
     ```bash
     python scripts/export_static.py
     ```
   - Verificar que todas las rutas se exporten a la carpeta `dist/` con código HTTP 200 y sin errores.

2. **Commit y Push a Producción:**
   - Añadir todos los cambios de templates, estilos, assets y compilación:
     ```bash
     git add .
     ```
   - Crear el commit con un mensaje descriptivo y profesional:
     ```bash
     git commit -m "feat/fix/update: descripción clara de los cambios"
     ```
   - Enviar a la rama principal:
     ```bash
     git push origin main
     ```

3. **Activación de Vercel:**
   - El push a `origin/main` desencadena automáticamente el build y despliegue instantáneo de Vercel.
   - Verificar que el push se ejecute limpiamente.
