# Reporte de Aislamiento del Design System

Este documento registra la resolución de la regresión visual (P0) causada por la integración inicial del Design System.

## 1. Causa de la regresión
La regresión se produjo porque el archivo principal del tema (`style.css`) fue modificado para importar directamente todos los módulos CSS del nuevo Design System (`base.css`, `components.css`, `responsive.css`, etc.). Al hacer esto, las reglas globales del Design System (como los resets en `body`, `h1`, `.container`, `.grid`, y `.card`) sobrescribieron las clases del prototipo funcional que ya utilizaban esos mismos nombres, destruyendo la estructura visual de la landing.

## 2. Archivos responsables
- `style.css` (Se sobrescribió el código original del prototipo).
- `functions.php` (No distinguía entre la landing y la página de preview, cargando todo de forma global).

## 3. Cambios realizados
- **Restauración:** Se revirtió el archivo `style.css` a su estado original exacto (previo a la fase de diseño), recuperando el CSS del prototipo funcional.
- **Aislamiento:** Se creó el archivo `assets/css/design-system-main.css` como un nuevo punto de entrada que importa los tokens y componentes del Design System.
- **Carga Condicional:** Se modificó `functions.php` para que el archivo `design-system-main.css` y las fuentes técnicas (`Roboto Mono`) se carguen **única y exclusivamente** si la plantilla activa es `page-design-system.php`.

## 4. Cómo se aisló el Design System
En lugar de depender de namespaces complejos (que dificultan la posterior refactorización), se optó por un aislamiento a nivel de renderizado (Carga Condicional).
La landing y el Design System son ahora dos ecosistemas CSS separados en la carga de recursos, evitando cualquier colisión.

## 5. Cómo se carga condicionalmente
Mediante la función nativa de WordPress `is_page_template()` en `functions.php`:
```php
if ( is_page_template( 'page-design-system.php' ) ) {
    wp_enqueue_style( 'rolbag-ds-fonts', ... );
    wp_enqueue_style( 'rolbag-design-system', ... );
}
```

## 6. Estado de la landing
- **LANDING RESTORED:** YES
- La landing page (y el resto del sitio) vuelve a verse exactamente como en el prototipo inicial. No carga estilos del Design System.

## 7. Estado de la Preview
- **DESIGN SYSTEM ISOLATED:** YES
- La página `/design-system-preview/` funciona correctamente, renderizando los componentes del Design System ya que sí encola `design-system-main.css` por encima del CSS base.

## 8. Responsive
- El responsive del prototipo original está 100% restaurado y vuelve a funcionar.
- El responsive del Design System queda aislado en su propia vista.

## 9. Errores encontrados
- Colisión de nombres de clases genéricas (`.grid`, `.card`, `.btn`) entre el prototipo y el nuevo Design System. Solucionado mediante carga condicional.

## 10. Riesgos restantes
- **CSS CONFLICTS:** NO (Actuales).
- *Riesgo a futuro:* Cuando comience el rediseño de la landing, habrá que transicionar cuidadosamente los componentes del prototipo al Design System para no romper partes que aún dependan del CSS antiguo. La transición deberá hacerse sección por sección o refactorizando el DOM para que coincida con las nuevas clases modulares.
