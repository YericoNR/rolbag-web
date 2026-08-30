<?php
/**
 * Template Name: Soluciones
 *
 * Página oficial de Soluciones por Contexto Operativo: Almacenes, Bodegajes y Logística.
 *
 * @package Rolbag
 */

get_header('landing');
?>

<main id="primary" class="site-main rb-solutions-page">

    <!-- Hero de Soluciones -->
    <section class="rb-hero-editorial">
        <div class="rb-hero-editorial__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/ops_logistica_1787700573166.jpg' ); ?>');"></div>
        <div class="rb-hero-editorial__overlay"></div>
        <div class="rb-container rb-hero-editorial__container">
            <div class="rb-hero-editorial__content">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">CONTEXTOS Y APLICACIONES OPERATIVAS</span>
                <h1 class="rb-h1">Soluciones Diseñadas para la Continuidad de tus Operaciones</h1>
                <p class="rb-hero-lead">Protegemos la tecnología móvil y aseguramos el transporte de valores en los 3 pilares operativos de la cadena de suministro en Chile.</p>
            </div>
        </div>
    </section>

    <!-- Selector Interactivo de Soluciones (01 Almacenes, 02 Bodegajes, 03 Logística) -->
    <section class="rb-section rb-solutions-interactive-section">
        <div class="rb-container">
            <div class="rb-section-header text-center">
                <span class="rb-eyebrow rb-text-mono rb-text-accent">APLICACIONES REALES</span>
                <h2 class="rb-h2">Selecciona un Contexto Operativo</h2>
                <p class="rb-section-subtitle">Descubre cómo nuestras fundas y valijas se adaptan a las exigencias específicas de cada entorno.</p>
            </div>

            <!-- Tab List accesible -->
            <div class="rb-sol-tabs-nav" role="tablist" aria-label="Sectores de Operación">
                <button type="button" class="rb-sol-tab-btn active" id="tab-01" role="tab" aria-selected="true" aria-controls="panel-01" tabindex="0">
                    <span class="rb-sol-tab-num rb-text-mono">01</span>
                    <span class="rb-sol-tab-label">Almacenes</span>
                </button>
                <button type="button" class="rb-sol-tab-btn" id="tab-02" role="tab" aria-selected="false" aria-controls="panel-02" tabindex="-1">
                    <span class="rb-sol-tab-num rb-text-mono">02</span>
                    <span class="rb-sol-tab-label">Bodegajes</span>
                </button>
                <button type="button" class="rb-sol-tab-btn" id="tab-03" role="tab" aria-selected="false" aria-controls="panel-03" tabindex="-1">
                    <span class="rb-sol-tab-num rb-text-mono">03</span>
                    <span class="rb-sol-tab-label">Logística</span>
                </button>
            </div>

            <!-- Paneles de Contenido Interactivo -->
            <div class="rb-sol-panels-wrap">
                
                <!-- Panel 01: Almacenes -->
                <div class="rb-sol-panel active" id="panel-01" role="tabpanel" aria-labelledby="tab-01">
                    <div class="rb-about-editorial__grid">
                        <div class="rb-about-editorial__content-col">
                            <span class="rb-eyebrow rb-text-mono rb-text-accent">CONTROL INTERNO Y GESTIÓN</span>
                            <h3 class="rb-h2">Almacenes y Centros de Acopio</h3>
                            <p class="rb-paragraph">En los almacenes, la velocidad de escaneo y el control de inventario requieren equipos móviles siempre listos y operarios con máxima libertad de movimiento.</p>
                            
                            <ul class="rb-feature-list" style="margin: 20px 0;">
                                <li><strong>Fundas para Capturadores de Mano:</strong> Confeccionadas con cintas de cintura para tener el terminal siempre a mano en conteos de existencias.</li>
                                <li><strong>Fundas para Impresoras Móviles:</strong> Con salida libre de papel térmico para etiquetado directo de bultos y estanterías.</li>
                                <li><strong>Protección contra Polvo y Roces:</strong> Materiales sintéticos impermeables de fácil limpieza que repelen suciedad ambiental.</li>
                            </ul>

                            <div style="margin-top: 24px;">
                                <a href="<?php echo esc_url( home_url( '/contacto?linea=Almacenes' ) ); ?>" class="rb-btn rb-btn--primary">Cotizar para Almacenes</a>
                            </div>
                        </div>

                        <div class="rb-about-editorial__image-col">
                            <div class="rb-about-image-wrapper">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/capturador_detail.jpg' ); ?>" alt="Fundas ROLBAG para Almacenes" class="rb-about-editorial__img" />
                                <div class="rb-about-image-badge">
                                    <span class="rb-about-image-badge__title">Operación en Almacenes</span>
                                    <span class="rb-about-image-badge__subtitle">Inventario y Control Interno</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel 02: Bodegajes -->
                <div class="rb-sol-panel" id="panel-02" role="tabpanel" aria-labelledby="tab-02" style="display:none;">
                    <div class="rb-about-editorial__grid">
                        <div class="rb-about-editorial__content-col">
                            <span class="rb-eyebrow rb-text-mono rb-text-accent">ALTO TONELAJE Y PICKING INTENSIVO</span>
                            <h3 class="rb-h2">Bodegajes y Centros de Distribución</h3>
                            <p class="rb-paragraph">En bodegas de gran escala, los equipos enfrentan caídas recurrentes desde estanterías altas, vibración en apiladores y turnos rotativos intensivos.</p>
                            
                            <ul class="rb-feature-list" style="margin: 20px 0;">
                                <li><strong>Fundas con Gatillo Pistol Grip:</strong> Calce exacto para terminales con mango tipo pistola para picking intensivo de alta velocidad.</li>
                                <li><strong>Fundas para Tablets Rugged:</strong> Lámina plástica frontal y arneses traseros para operarios en terreno y grúas horquilla.</li>
                                <li><strong>Amortiguación EVA de Alta Densidad:</strong> Absorbe impactos en caídas directas al hormigón industrial.</li>
                            </ul>

                            <div style="margin-top: 24px;">
                                <a href="<?php echo esc_url( home_url( '/contacto?linea=Bodegajes' ) ); ?>" class="rb-btn rb-btn--primary">Cotizar para Bodegas</a>
                            </div>
                        </div>

                        <div class="rb-about-editorial__image-col">
                            <div class="rb-about-image-wrapper">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/tablet_detail.jpg' ); ?>" alt="Fundas ROLBAG para Bodegajes" class="rb-about-editorial__img" />
                                <div class="rb-about-image-badge">
                                    <span class="rb-about-image-badge__title">Operación en Bodegajes</span>
                                    <span class="rb-about-image-badge__subtitle">Picking y Estanterías Altas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel 03: Logística -->
                <div class="rb-sol-panel" id="panel-03" role="tabpanel" aria-labelledby="tab-03" style="display:none;">
                    <div class="rb-about-editorial__grid">
                        <div class="rb-about-editorial__content-col">
                            <span class="rb-eyebrow rb-text-mono rb-text-accent">TRANSPORTE, DESPACHO Y VALORES</span>
                            <h3 class="rb-h2">Logística, Distribución y Custodia</h3>
                            <p class="rb-paragraph">En la distribución de última milla y transporte interurbano, el resguardo físico de la información confidencial, valores y terminales de cobro es crítico.</p>
                            
                            <ul class="rb-feature-list" style="margin: 20px 0;">
                                <li><strong>Valijas de Seguridad a Medida:</strong> Confeccionadas en litros con cremalleras para precinto o candado (confiadas por FedEx, Correos de Chile, etc.).</li>
                                <li><strong>Valijas con Compartimento GPS:</strong> Bolsillo interior oculto para rastreo satelital continuo de la carga.</li>
                                <li><strong>Candados Especiales Igualados y Amaestrados:</strong> Control seguro de aperturas para choferes y supervisores.</li>
                            </ul>

                            <div style="margin-top: 24px;">
                                <a href="<?php echo esc_url( home_url( '/contacto?linea=Logistica' ) ); ?>" class="rb-btn rb-btn--primary">Cotizar para Logística</a>
                            </div>
                        </div>

                        <div class="rb-about-editorial__image-col">
                            <div class="rb-about-image-wrapper">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/hero_valija_3d_1787700281649.jpg' ); ?>" alt="Valijas ROLBAG para Logística" class="rb-about-editorial__img" />
                                <div class="rb-about-image-badge">
                                    <span class="rb-about-image-badge__title">Operación en Logística</span>
                                    <span class="rb-about-image-badge__subtitle">Custodia y Transporte Seguro</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Metodología de Muestra en 48 Horas -->
    <section class="rb-custom-process">
        <div class="rb-container rb-custom-process__container">
            <div class="rb-section-header rb-section-header--dark text-center" style="margin-bottom: 48px;">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">DESARROLLO EXCLUSIVO</span>
                <h2 class="rb-h2 rb-text-white">¿Requieres una Solución para un Modelo Nuevo?</h2>
                <p class="rb-lead-dark">Si tu operación incorporó hardware reciente o requieres una valija con dimensiones específicas, desarrollamos el patrón y confeccionamos la muestra real en 48 horas.</p>
            </div>

            <div class="rb-process-timeline">
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">01</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Contacto Inicial</h4>
                        <p class="rb-step-desc">Indicas la marca, modelo o medidas en litros de la valija requerida.</p>
                    </div>
                </div>
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">02</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Recepción de Equipo</h4>
                        <p class="rb-step-desc">Recibimos el equipo físico por 48 horas en nuestro taller de Santiago Centro.</p>
                    </div>
                </div>
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">03</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Muestra en 48 hrs</h4>
                        <p class="rb-step-desc">Confeccionamos la muestra física real para tu revisión y validación técnica.</p>
                    </div>
                </div>
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">04</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Fabricación y Despacho</h4>
                        <p class="rb-step-desc">Fabricamos el lote solicitado con despacho coordinado a todo Chile.</p>
                    </div>
                </div>
            </div>

            <div class="text-center" style="margin-top: 40px;">
                <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="rb-btn rb-btn--primary rb-btn--lg">Solicitar Evaluación de Muestra</a>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.rb-sol-tab-btn');
    const panels = document.querySelectorAll('.rb-sol-panel');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => switchTab(index));
        
        tab.addEventListener('keydown', (e) => {
            let targetIndex = null;
            if (e.key === 'ArrowRight') {
                targetIndex = (index + 1) % tabs.length;
            } else if (e.key === 'ArrowLeft') {
                targetIndex = (index - 1 + tabs.length) % tabs.length;
            } else if (e.key === 'Home') {
                targetIndex = 0;
            } else if (e.key === 'End') {
                targetIndex = tabs.length - 1;
            }

            if (targetIndex !== null) {
                e.preventDefault();
                tabs[targetIndex].focus();
                switchTab(targetIndex);
            }
        });
    });

    function switchTab(index) {
        tabs.forEach((t, i) => {
            const isSelected = i === index;
            t.classList.toggle('active', isSelected);
            t.setAttribute('aria-selected', isSelected ? 'true' : 'false');
            t.setAttribute('tabindex', isSelected ? '0' : '-1');
        });

        panels.forEach((p, i) => {
            if (i === index) {
                p.style.display = 'block';
                p.classList.add('active');
                p.style.opacity = '0';
                p.style.transform = 'translateY(8px)';
                setTimeout(() => {
                    p.style.transition = 'all 0.3s ease';
                    p.style.opacity = '1';
                    p.style.transform = 'translateY(0)';
                }, 20);
            } else {
                p.style.display = 'none';
                p.classList.remove('active');
            }
        });
    }
});
</script>

<?php
get_footer('landing');
