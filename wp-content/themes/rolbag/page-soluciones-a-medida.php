<?php
/**
 * Template Name: Soluciones a Medida
 *
 * Página de desarrollo exclusivo y confección personalizada ROLBAG.
 *
 * @package Rolbag
 */

get_header('landing');
?>

<main id="primary" class="site-main rb-custom-page">

    <!-- Hero de Soluciones a Medida -->
    <section class="rb-hero-editorial" style="min-height: 480px; padding: 100px 0 90px 0;">
        <div class="rb-hero-editorial__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/custom_solution_1787698415328.jpg' ); ?>');"></div>
        <div class="rb-hero-editorial__overlay"></div>
        <div class="rb-container rb-hero-editorial__container">
            <div class="rb-hero-editorial__content">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">FABRICACIÓN NACIONAL EXCLUSIVA</span>
                <h1 class="rb-h1">Desarrollo de Fundas y Accesorios a Medida</h1>
                <p class="rb-hero-lead">Si tu empresa adquirió un modelo nuevo o requieres un sistema especial de sujeción, desarrollamos el patrón exacto y confeccionamos una muestra física en 48 horas.</p>
            </div>
        </div>
    </section>

    <!-- Explicación del Servicio -->
    <section class="rb-section">
        <div class="rb-container">
            <div class="rb-about-editorial__grid">
                <div class="rb-about-editorial__content-col">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">INGENIERÍA ANATÓMICA</span>
                    <h2 class="rb-h2">Calce milimétrico para cualquier equipo</h2>
                    <p class="rb-paragraph">En <strong>ROLBAG</strong> no forzamos fundas universales ni adaptaciones genéricas. Cada dispositivo móvil posee una distribución única de botones, gatillos de lectura (pistol grip), cámaras, sensores de escaneo láser, altavoces y puertos de carga.</p>
                    <p class="rb-paragraph">Nuestro equipo de patronaje elabora moldes específicos que respetan las funcionalidades del equipo y protegen los puntos más vulnerables ante caídas e impactos recurrentes en bodegas, faenas y centros de acopio.</p>
                    
                    <div class="rb-about-editorial__stats" style="margin-top: 24px;">
                        <div class="rb-stat-editorial">
                            <span class="rb-stat-editorial__num">48h</span>
                            <span class="rb-stat-editorial__label">Muestra física para modelos nuevos</span>
                        </div>
                        <div class="rb-stat-editorial__divider"></div>
                        <div class="rb-stat-editorial">
                            <span class="rb-stat-editorial__num">100%</span>
                            <span class="rb-stat-editorial__label">Ajuste garantizado a medida</span>
                        </div>
                    </div>
                </div>

                <div class="rb-about-editorial__image-col">
                    <div class="rb-about-image-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/fabricacion_1787702420725.jpg' ); ?>" alt="Proceso de Confección ROLBAG" class="rb-about-editorial__img" />
                        <div class="rb-about-image-badge">
                            <span class="rb-about-image-badge__title">Patronaje y Confección</span>
                            <span class="rb-about-image-badge__subtitle">Taller Central ROLBAG</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proceso Paso a Paso (Dark) -->
    <section class="rb-custom-process">
        <div class="rb-container rb-custom-process__container">
            <div class="rb-section-header rb-section-header--dark text-center" style="margin-bottom: 56px;">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">METODOLOGÍA DE TRABAJO</span>
                <h2 class="rb-h2 rb-text-white">Proceso de Desarrollo en 4 Pasos</h2>
                <p class="rb-lead-dark">Un flujo transparente, riguroso y sin contratiempos para garantizar la satisfacción técnica de tu equipo de operaciones.</p>
            </div>

            <div class="rb-process-timeline">
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">01</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Levantamiento</h4>
                        <p class="rb-step-desc">Nos indicas la marca, modelo de hardware, accesorios adicionales (batería extendida, gatillo pistol grip) y volumen estimado de unidades.</p>
                    </div>
                </div>
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">02</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Análisis Ergonómico</h4>
                        <p class="rb-step-desc">Evaluamos la postura de trabajo de los operarios, manipulación de pantallas, tipos de cintas (cintura u hombro) y resistencia del material.</p>
                    </div>
                </div>
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">03</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Muestra en 48 hrs</h4>
                        <p class="rb-step-desc">Recibimos el equipo físico durante 48 horas, creamos el patrón y confeccionamos la muestra real para tu aprobación técnica.</p>
                    </div>
                </div>
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">04</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Producción y Entrega</h4>
                        <p class="rb-step-desc">Con la muestra aprobada, confeccionamos el lote completo con despacho coordinado y seguro a cualquier punto de Chile.</p>
                    </div>
                </div>
            </div>

            <div class="rb-process-notice" style="max-width: 860px; margin: 0 auto;">
                <div class="rb-notice-icon">!</div>
                <div class="rb-notice-text">
                    <strong>Requisito indispensable para modelos nuevos:</strong> Para diseñar fundas de modelos inéditos o modificaciones dimensionales complejas, es requisito disponer de una unidad física del equipo durante <strong>48 horas</strong> en nuestro taller para garantizar el calce exacto de los comandos y aperturas.
                </div>
            </div>
        </div>
    </section>

    <!-- Casos Especiales de Desarrollo -->
    <section class="rb-section" style="background-color: var(--color-bg-light);">
        <div class="rb-container">
            <div class="rb-section-header text-center">
                <span class="rb-eyebrow rb-text-mono rb-text-accent">PERSONALIZACIONES FRECUENTES</span>
                <h2 class="rb-h2">Adaptaciones Especiales Disponibles</h2>
                <p class="rb-section-subtitle">Podemos incorporar accesorios adicionales según las condiciones específicas de tu entorno de trabajo:</p>
            </div>

            <div class="rb-compat-grid" style="grid-template-columns: repeat(3, 1fr);">
                <div class="rb-compat-card" style="padding: 28px 24px;">
                    <span class="rb-compat-cat">Sujeción de Vehículos</span>
                    <h3 class="rb-h4 rb-text-primary" style="margin: 8px 0;">Soportes para Grúa Horquilla</h3>
                    <p class="rb-text-muted" style="font-size: 0.92rem; line-height: 1.55;">Arneses y anclajes reforzados para montar capturadores o tablets directamente a la estructura de la cabina de grúas y apiladores eléctricos.</p>
                </div>
                <div class="rb-compat-card" style="padding: 28px 24px;">
                    <span class="rb-compat-cat">Ergonomía de Mano</span>
                    <h3 class="rb-h4 rb-text-primary" style="margin: 8px 0;">Handstraps y Arnés 4 Puntos</h3>
                    <p class="rb-text-muted" style="font-size: 0.92rem; line-height: 1.55;">Bandas elásticas traseras de agarre manual firme y arneses corporales de 4 puntos para operar tablets con manos libres en turnos de inventario.</p>
                </div>
                <div class="rb-compat-card" style="padding: 28px 24px;">
                    <span class="rb-compat-cat">Seguridad y Trazabilidad</span>
                    <h3 class="rb-h4 rb-text-primary" style="margin: 8px 0;">Valijas con GPS y Ruedas</h3>
                    <p class="rb-text-muted" style="font-size: 0.92rem; line-height: 1.55;">Bolsillos interiores camuflados para dispositivos de geolocalización satelital y sistemas de carro retráctil para valijas de alto tonelaje.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Solicitud de Desarrollo a Medida -->
    <section id="solicitar" class="rb-section rb-quote-section">
        <div class="rb-container">
            <div class="rb-quote-box">
                <div class="rb-quote-box__header text-center">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">EVALUACIÓN TÉCNICA</span>
                    <h2 class="rb-h2">Solicitar Evaluación para Desarrollo a Medida</h2>
                    <p class="rb-section-subtitle">Cuéntanos sobre tu equipamiento y te contactaremos para coordinar la muestra física.</p>
                </div>

                <form class="rb-quote-form" action="<?php echo esc_url( home_url( '/contacto' ) ); ?>" method="GET">
                    <input type="hidden" name="linea" value="Desarrollo a Medida">
                    <div class="rb-form-grid">
                        <div class="rb-form-group">
                            <label for="m-nombre">Nombre y Apellido *</label>
                            <input type="text" id="m-nombre" name="nombre" required placeholder="Tu nombre" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="m-empresa">Empresa / Razón Social *</label>
                            <input type="text" id="m-empresa" name="empresa" required placeholder="Nombre de tu empresa" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="m-email">Correo Electrónico Corporativo *</label>
                            <input type="email" id="m-email" name="email" required placeholder="correo@empresa.cl" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="m-telefono">Teléfono / WhatsApp *</label>
                            <input type="tel" id="m-telefono" name="telefono" required placeholder="+56 9 1234 5678" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="m-equipo">Marca y Modelo del Equipo a Desarrollar *</label>
                            <input type="text" id="m-equipo" name="modelo" required placeholder="Ej. Honeywell EDA56 o Zebra TC78" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="m-cantidad">Cantidad estimada del lote *</label>
                            <input type="number" id="m-cantidad" name="cantidad" required min="1" placeholder="Ej. 30" class="rb-input" />
                        </div>
                        <div class="rb-form-group rb-form-group--full">
                            <label for="m-detalles">Requerimientos especiales de uso o sujeción</label>
                            <textarea id="m-detalles" name="mensaje" rows="4" placeholder="Describe el entorno de trabajo (cámara de frío, grúa horquilla, terreno, lluvia) y requerimientos de cintas o accesorios..." class="rb-textarea"></textarea>
                        </div>
                    </div>
                    <div class="rb-form-submit text-center">
                        <button type="submit" class="rb-btn rb-btn--primary rb-btn--lg">Solicitar Evaluación de Muestra</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

<?php
get_footer('landing');
