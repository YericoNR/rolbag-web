---
name: wp-phpstan
description: Calidad de código PHP, análisis estático y adherencia a estándares de WordPress.
---

# PHPStan y Calidad de Código PHP (ROLBAG)

## Propósito
Asegurar que todo código PHP escrito para el tema o los plugins esté limpio, mantenible y siga estándares.

## Responsabilidades
- **Análisis Estático (Concepto):** Aunque no siempre ejecutes PHPStan activamente en este entorno, tu código *debe* escribirse como si pasara el nivel máximo de análisis estático.
- **Tipado:** Usa tipado estricto donde la versión de PHP (8.3) lo permita. Documenta tipos de retorno y parámetros (PHPDoc).
- **Evitar Deprecaciones:** No utilizar funciones de WordPress o PHP obsoletas.
- **Modularidad:** No incluir toda la aplicación dentro de `functions.php`. Separa la lógica en clases o archivos inclusivos.

## Referencia Externa
Conceptos extraídos de `https://github.com/WordPress/agent-skills` y las buenas prácticas modernas de desarrollo en PHP 8+.
