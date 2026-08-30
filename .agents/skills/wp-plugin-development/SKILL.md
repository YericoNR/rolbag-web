---
name: wp-plugin-development
description: Habilidad oficial para el desarrollo del plugin rolbag-core. Lógica independiente del tema, Custom Post Types, Taxonomías y configuraciones.
---

# Desarrollo de Plugins WordPress (ROLBAG Core)

## Propósito
Guiar al agente en el desarrollo del plugin `rolbag-core`, separando correctamente la lógica de negocio del diseño visual.

## Responsabilidades
- **Arquitectura:** Desarrollar de manera modular, clara y autodocumentada.
- **Custom Post Types (CPT):** Registrar usando `register_post_type()` enganchado a `init`.
- **Taxonomías:** Registrar usando `register_taxonomy()` enganchado a `init`.
- **Metadatos:** Usar `add_post_meta`, `update_post_meta`, y `get_post_meta`.
- **Settings API:** Para cualquier configuración global del sistema en el panel de WordPress.
- **Seguridad Básica:** Validar capacidades de usuario (ej. `current_user_can()`) y utilizar Nonces en formularios/AJAX.

## Referencia Externa
Implementación adaptada localmente siguiendo la filosofía del repositorio oficial `https://github.com/WordPress/agent-skills`.

## Límite de Acción
Esta skill rige **exclusivamente** la lógica de negocio. Nada relacionado con HTML estructurado de vistas públicas o diseño visual debe vivir aquí a menos que sean shortcodes muy específicos o integraciones REST.
