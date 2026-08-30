<?php
/**
 * Template Name: Sobre Nosotros
 *
 * Página institucional de ROLBAG: Historia, Trayectoria, Taller de Confección, Misión y Visión.
 *
 * @package Rolbag
 */

get_header('landing');
?>

<main id="primary" class="site-main rb-about-page">

    <!-- Hero Institucional -->
    <section class="rb-hero-editorial" style="min-height: 480px; padding: 100px 0 90px 0;">
        <div class="rb-hero-editorial__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/historia_taller_rolbag.jpg' ); ?>');"></div>
        <div class="rb-hero-editorial__overlay"></div>
        <div class="rb-container rb-hero-editorial__container">
            <div class="rb-hero-editorial__content">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">CONFECCIÓN NACIONAL DESDE 2006</span>
                <h1 class="rb-h1">Más de 28 años de oficio protegiendo el hardware crítico de Chile</h1>
                <p class="rb-hero-lead">Especialistas en el diseño y fabricación de fundas protectoras a medida, valijas de seguridad y accesorios industriales para terminales móviles y transporte de valores.</p>
            </div>
        </div>
    </section>

    <!-- Historia y Origen -->
    <section class="rb-section rb-about-editorial">
        <div class="rb-container">
            <div class="rb-about-editorial__grid">
                <!-- Columna Imagen -->
                <div class="rb-about-editorial__image-col">
                    <div class="rb-about-image-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/historia_taller_rolbag.jpg' ); ?>" alt="Taller de Confección ROLBAG en Santiago" class="rb-about-editorial__img" />
                        <div class="rb-about-image-badge">
                            <span class="rb-about-image-badge__title">Taller Central de Confección</span>
                            <span class="rb-about-image-badge__subtitle">Santiago Centro, Chile</span>
                        </div>
                    </div>
                </div>

                <!-- Columna Narrativa -->
                <div class="rb-about-editorial__content-col">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">NUESTRO ORIGEN</span>
                    <h2 class="rb-h2">Tradición artesanal y evolución corporativa</h2>
                    
                    <p class="rb-paragraph"><strong>ROLBAG</strong> fue fundada por Rolando Álvarez en el año 2006, consolidando una trayectoria de más de 28 años en el oficio de la confección técnica y artesanal de calzado, bolsos de trabajo y estuches de alta resistencia.</p>
                    
                    <p class="rb-paragraph">La rigurosidad en las terminaciones y el conocimiento profundo de los materiales permitieron dar un salto natural hacia el sector corporativo, respondiendo a la necesidad crítica de empresas que buscaban resguardar la continuidad operativa de sus equipos móviles en terreno.</p>
                    
                    <p class="rb-paragraph">Nuestra primera gran línea corporativa se enfocó en la confección de <strong>valijas de seguridad</strong> para el transporte de valores y correspondencia confidencial, contando con la confianza histórica de grandes compañías como <strong>CENCOSUD, LA POLAR, CORREOS DE CHILE, IRON MOUNTAIN y FEDEX</strong>.</p>

                    <!-- Estadísticas -->
                    <div class="rb-about-editorial__stats">
                        <div class="rb-stat-editorial">
                            <span class="rb-stat-editorial__num">+28</span>
                            <span class="rb-stat-editorial__label">Años de experiencia en confección</span>
                        </div>
                        <div class="rb-stat-editorial__divider"></div>
                        <div class="rb-stat-editorial">
                            <span class="rb-stat-editorial__num">+300</span>
                            <span class="rb-stat-editorial__label">Modelos de fundas desarrollados</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Misión, Visión y Pilares (Dark Environment) -->
    <section class="rb-section" style="background-color: var(--color-brand-primary-dark); color: #fff;">
        <div class="rb-container">
            <div class="rb-section-header rb-section-header--dark text-center">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">PROPÓSITO & COMPROMISO</span>
                <h2 class="rb-h2 rb-text-white">Filosofía de Fabricación ROLBAG</h2>
                <p class="rb-lead-dark" style="max-width: 720px; margin: 12px auto 0 auto;">Nuestra metodología combina patronaje milimétrico con insumos balísticos de la más alta resistencia.</p>
            </div>

            <div class="rb-mission-vision-grid" style="max-width: 900px; margin: 0 auto 56px auto;">
                <div class="rb-mv-item" style="background: rgba(255, 255, 255, 0.05); border-left-color: var(--color-brand-cyan); padding: 28px 24px;">
                    <strong class="rb-mv-title" style="color: #fff; font-size: 1.15rem;">Nuestra Misión:</strong>
                    <p class="rb-mv-text" style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">Confeccionar productos exclusivos que brinden una mayor durabilidad, ergonomía y calidad de protección para resguardar la inversión tecnológica y la continuidad operativa de nuestros clientes.</p>
                </div>
                <div class="rb-mv-item" style="background: rgba(255, 255, 255, 0.05); border-left-color: var(--color-brand-cyan); padding: 28px 24px;">
                    <strong class="rb-mv-title" style="color: #fff; font-size: 1.15rem;">Nuestra Visión:</strong>
                    <p class="rb-mv-text" style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">Satisfacer con excelencia los requerimientos especiales y exclusivos que exigen las empresas, liderando el desarrollo de fundas industriales y accesorios de seguridad a medida en todo Chile.</p>
                </div>
            </div>

            <!-- 3 Pilares -->
            <div class="rb-tech-list" style="max-width: 900px; margin: 0 auto;">
                <div class="rb-tech-item">
                    <div class="rb-tech-item__num rb-text-mono">01</div>
                    <div class="rb-tech-item__content">
                        <h3 class="rb-h3 rb-text-white">Confección Nacional en Taller Propio</h3>
                        <p class="rb-text-muted">No intermediamos ni importamos productos genéricos. Todo el proceso de patronaje, corte, armado, costura reforzada y control de calidad se realiza en nuestro taller en Santiago Centro.</p>
                    </div>
                </div>
                <div class="rb-tech-item">
                    <div class="rb-tech-item__num rb-text-mono">02</div>
                    <div class="rb-tech-item__content">
                        <h3 class="rb-h3 rb-text-white">Muestra Física y Calce en 48 Horas</h3>
                        <p class="rb-text-muted">Para modelos nuevos, recibimos el equipo físico durante 48 horas para elaborar un molde exclusivo y entregar una muestra real para aprobación técnica antes de confeccionar el lote.</p>
                    </div>
                </div>
                <div class="rb-tech-item">
                    <div class="rb-tech-item__num rb-text-mono">03</div>
                    <div class="rb-tech-item__content">
                        <h3 class="rb-h3 rb-text-white">Respuesta Ágil para Todo Chile</h3>
                        <p class="rb-text-muted">Despachos coordinados hacia centros de distribución, faenas mineras, puertos, centros de acopio y bodegajes en todas las regiones del país.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final Pleno -->
    <section class="rb-cta-editorial">
        <div class="rb-container rb-cta-editorial__container">
            <span class="rb-eyebrow rb-text-mono rb-text-cyan">ASESORÍA DIRECTA</span>
            <h2 class="rb-cta-title">¿Necesitas proteger el equipamiento de tu empresa?</h2>
            <p class="rb-cta-lead">Conversemos sobre las necesidades operativas de tu operación y evaluemos la solución adecuada.</p>
            <div class="rb-cta-actions">
                <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-btn rb-btn--primary rb-btn--lg">Ver Catálogo de Productos</a>
                <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="rb-btn rb-btn--secondary rb-btn--lg">Contactar con Asesor</a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer('landing');
