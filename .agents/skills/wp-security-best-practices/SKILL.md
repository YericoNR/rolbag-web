---
name: wp-security-best-practices
description: Seguridad WordPress, validación, escaping, nonces.
---

# Buenas Prácticas de Seguridad en WordPress (ROLBAG)

## Propósito
Blindar ROLBAG contra vulnerabilidades comunes (XSS, CSRF, Inyección SQL, escalada de privilegios).

## Responsabilidades
- **Sanitización:** Toda entrada de datos (ej. un formulario) DEBE ser sanitizada. (ej. `sanitize_text_field()`, `sanitize_email()`).
- **Escaping:** Toda salida de datos hacia el front-end DEBE escaparse según el contexto. (ej. `esc_html()`, `esc_attr()`, `esc_url()`).
- **Nonces:** Proteger formularios y endpoints AJAX/REST con wp_nonce contra CSRF. (ej. `wp_create_nonce()`, `wp_verify_nonce()`).
- **Base de Datos:** Usar `$wpdb->prepare()` de manera obligatoria cuando se realicen consultas SQL manuales.
- **Capabilities:** Verificar permisos antes de acciones (ej. `current_user_can('manage_options')`).

## Referencia Externa
Implementación de alta fidelidad basada en el OWASP Top 10 y el WordPress Developer Security Handbook.
