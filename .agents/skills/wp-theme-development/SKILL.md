---
name: wp-theme-development
description: Habilidad oficial de desarrollo de temas WordPress (adaptación basada en WordPress/agent-skills). Reglas para arquitectura del tema, templates y assets.
---

# Desarrollo de Temas WordPress (ROLBAG)

## Propósito
Guiar al agente en el desarrollo del tema `rolbag` utilizando las mejores prácticas de WordPress.

## Responsabilidades
- **Arquitectura del tema:** Utilizar `functions.php`, `style.css`, y estructura estándar.
- **Template Hierarchy:** Conocer y aplicar correctamente `front-page.php`, `single.php`, `archive.php`, etc.
- **Enqueue:** Utilizar `wp_enqueue_script` y `wp_enqueue_style` con `add_action('wp_enqueue_scripts', ...)`. NO hardcodear scripts o CSS en el header o footer.
- **Hooks:** Usar actions y filters para modificar el comportamiento (ej. `after_setup_theme`).
- **Seguridad visual:** Usar funciones como `esc_html()`, `esc_url()`, y `esc_attr()` en los templates.

## Referencia Externa
Implementación adaptada localmente siguiendo la filosofía del repositorio oficial `https://github.com/WordPress/agent-skills`.

## Límite de Acción
Esta skill rige **exclusivamente** el diseño, layout y comportamiento del tema. La lógica de negocio (CPTs, Taxonomías) NO DEBE ir en `functions.php`, sino en el plugin core.
