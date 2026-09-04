<?php
/**
 * Template Part: Modal de Galería de 4 Vistas de Fotos Reales por Marca
 * Autoadministrable y Dinámico para ROLBAG B2B
 */

$brand_catalog = function_exists( 'rolbag_get_brand_galleries_catalog' ) ? rolbag_get_brand_galleries_catalog() : array();
?>
<!-- MODAL DE GALERÍA DE FOTOS REALES Y VISTAS TÉCNICAS (B2B LIGHTBOX) -->
<div class="rb-gallery-modal" id="rb-gallery-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="rb-modal-title">
    <div class="rb-gallery-modal__backdrop" id="rb-gallery-modal-backdrop"></div>
    <div class="rb-gallery-modal__dialog">
        <button type="button" class="rb-gallery-modal__close" id="rb-gallery-modal-close" aria-label="Cerrar galería">&times;</button>
        
        <div class="rb-gallery-modal__body">
            <!-- Columna Izquierda: Visor Fotográfico con Fondo Limpio Blanco -->
            <div class="rb-gallery-viewer">
                <div class="rb-gallery-viewer__stage">
                    <span class="rb-gallery-badge" id="rb-modal-badge">Fotos Reales de Confección ROLBAG</span>
                    <div class="rb-gallery-image-container">
                        <img id="rb-modal-main-img" src="" alt="Vista técnica del producto" class="rb-gallery-main-image" loading="lazy" />
                    </div>
                </div>

                <!-- Selector de Ángulos / Tabs de 4 Vistas -->
                <div class="rb-gallery-angles" id="rb-modal-angles" role="tablist" aria-label="Vistas disponibles">
                    <!-- Dinámico vía JS -->
                </div>

                <!-- Miniaturas navegables -->
                <div class="rb-gallery-thumbs" id="rb-modal-thumbs">
                    <!-- Dinámico vía JS -->
                </div>
            </div>

            <!-- Columna Derecha: Ficha Técnica y CTA Directo -->
            <div class="rb-gallery-info">
                <div class="rb-gallery-info__header">
                    <span class="rb-eyebrow rb-text-accent" id="rb-modal-brand-name">FABRICANTE COMPATIBLE</span>
                    <h3 class="rb-gallery-title" id="rb-modal-title">Línea de Fundas</h3>
                    <p class="rb-gallery-subtitle" id="rb-modal-subtitle">Confección nacional en taller propio con materiales de alta duración.</p>
                </div>

                <!-- Descripción de la Vista Actual -->
                <div class="rb-gallery-view-detail">
                    <h4 class="rb-gallery-view-name" id="rb-modal-view-name">Vista Frontal</h4>
                    <p class="rb-gallery-view-desc" id="rb-modal-view-desc">Acceso libre y protección reforzada.</p>
                </div>

                <!-- Especificaciones Rápidas -->
                <div class="rb-gallery-specs-box">
                    <h4 class="rb-gallery-specs-heading">Especificaciones de Confección:</h4>
                    <ul class="rb-gallery-specs-list" id="rb-modal-specs-list">
                        <!-- Dinámico vía JS -->
                    </ul>
                </div>

                <!-- Acciones de Cotización Rápida -->
                <div class="rb-gallery-actions">
                    <a href="#" id="rb-modal-wa-btn" class="rb-btn rb-btn--whatsapp rb-btn--lg" target="_blank" rel="noopener noreferrer">
                        <svg viewBox="0 0 24 24" width="20" height="20" style="fill:currentColor; margin-right:8px; vertical-align:middle;"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8.01 12.27C8.14 12.44 9.76 14.94 12.24 16C12.83 16.27 13.28 16.42 13.64 16.53C14.23 16.72 14.77 16.69 15.2 16.63C15.68 16.56 16.67 16.03 16.88 15.45C17.08 14.87 17.08 14.38 17.02 14.28C16.96 14.17 16.8 14.11 16.56 13.99C16.32 13.86 15.12 13.28 14.9 13.2C14.67 13.11 14.51 13.08 14.35 13.32C14.18 13.57 13.71 14.11 13.56 14.28C13.42 14.45 13.27 14.47 13.03 14.35C12.79 14.24 11.99 13.97 11.04 13.13C10.3 12.47 9.8 11.66 9.66 11.42C9.51 11.18 9.64 11.04 9.77 10.92C9.88 10.81 10.02 10.63 10.14 10.49C10.26 10.34 10.3 10.24 10.38 10.08C10.46 9.92 10.42 9.77 10.36 9.66C10.3 9.54 9.8 8.34 9.6 7.84C9.39 7.36 9.19 7.43 9.03 7.42C8.88 7.42 8.71 7.33 8.53 7.33Z"/></svg>
                        <span>Cotizar Funda para esta Marca en WhatsApp</span>
                    </a>
                    <a href="/contacto" class="rb-btn rb-btn--outline">Solicitar Muestra Física &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Objeto JSON embebido con datos de galerías para inicialización instantánea -->
<script id="rb-brand-galleries-data" type="application/json">
<?php echo wp_json_encode( $brand_catalog, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?>
</script>
