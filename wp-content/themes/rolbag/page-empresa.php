<?php
/**
 * Template Name: Empresa
 *
 * Página institucional oficial de ROLBAG: Trayectoria, Oficio, Taller de Confección, Misión y Visión.
 *
 * @package Rolbag
 */

get_header('landing');
?>

<main id="primary" class="site-main rb-about-page">

    <!-- Hero Institucional -->
    <section class="rb-hero-editorial">
        <div class="rb-hero-editorial__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/fabricacion_1787702420725.jpg' ); ?>');"></div>
        <div class="rb-hero-editorial__overlay"></div>
        <div class="rb-container rb-hero-editorial__container">
            <div class="rb-hero-editorial__content">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">TRAYECTORIA Y CONFECCIÓN NACIONAL</span>
                <h1 class="rb-h1">Más de 28 Años Diseñando<br>Soluciones de Protección<br>y Seguridad</h1>
                <p class="rb-hero-lead">Desde 2006, ROLBAG confecciona a medida fundas protectoras para tecnología móvil corporativa y valijas de seguridad para las principales operaciones logísticas de Chile.</p>
            </div>
        </div>
    </section>

    <!-- Sección 1: Historia, Origen y Evolución -->
    <section class="rb-section rb-about-editorial">
        <div class="rb-container">
            <div class="rb-about-editorial__grid">
                <div class="rb-about-editorial__content-col">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">QUIÉNES SOMOS</span>
                    <h2 class="rb-h2">Especialistas en Confección Técnica a Medida</h2>
                    
                    <p class="rb-paragraph"><strong>ROLBAG</strong> fue fundada por <strong>Rolando Álvarez</strong> en el año <strong>2006</strong> como un emprendimiento forjado tras décadas de experiencia en confección artesanal de calzado, bolsos y estuches de alta precisión.</p>
                    
                    <p class="rb-paragraph">Con la experiencia consolidada en el manejo de materiales sintéticos de alta resistencia, la empresa incursionó en el mercado corporativo mediante la fabricación de <strong>valijas de seguridad</strong> para transporte de valores y documentación confidencial, contando con la confianza de grandes organizaciones a nivel nacional como <strong>Cencosud, La Polar, Correos de Chile, Iron Mountain y FedEx</strong>, entre otras.</p>
                    
                    <p class="rb-paragraph">Motivados por los nuevos requerimientos tecnológicos de la industria y de nuestros clientes en bodegas y centros de distribución, expandimos nuestras líneas hacia la confección de <strong>fundas protectoras para terminales móviles, capturadores de datos, tablets e impresoras portátiles de uso industrial</strong>, desarrollando calces milimétricos que protegen equipos de alto costo frente a caídas, rayones y manipulación continua.</p>

                    <div class="rb-about-editorial__stats">
                        <div class="rb-stat-editorial">
                            <span class="rb-stat-editorial__num">+28</span>
                            <span class="rb-stat-editorial__label">Años de oficio y experiencia técnica</span>
                        </div>
                        <div class="rb-stat-editorial__divider"></div>
                        <div class="rb-stat-editorial">
                            <span class="rb-stat-editorial__num">2006</span>
                            <span class="rb-stat-editorial__label">Año de inicio de actividades corporativas</span>
                        </div>
                        <div class="rb-stat-editorial__divider"></div>
                        <div class="rb-stat-editorial">
                            <span class="rb-stat-editorial__num">100%</span>
                            <span class="rb-stat-editorial__label">Cobertura y despachos a todo Chile</span>
                        </div>
                    </div>
                </div>

                <div class="rb-about-editorial__image-col">
                    <div class="rb-about-image-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/fabricacion_1787702420725.jpg' ); ?>" alt="Taller de Confección ROLBAG en Santiago Centro" class="rb-about-editorial__img" />
                        <div class="rb-about-image-badge">
                            <span class="rb-about-image-badge__title">Taller Central de Confección</span>
                            <span class="rb-about-image-badge__subtitle">San Pablo 2209, Santiago Centro</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 2: Misión, Visión y Diferenciación -->
    <section class="rb-section" style="background-color: var(--color-bg-light);">
        <div class="rb-container">
            <div class="rb-section-header text-center">
                <span class="rb-eyebrow rb-text-mono rb-text-accent">PROPÓSITO Y COMPROMISO</span>
                <h2 class="rb-h2">Misión y Visión Corporativa</h2>
                <p class="rb-section-subtitle">Nuestros principios guían cada costura, refuerzo y diseño que sale de nuestro taller.</p>
            </div>

            <div class="rb-compat-grid" style="grid-template-columns: repeat(3, 1fr); margin-top: 40px;">
                <div class="rb-compat-card" style="padding: 32px 28px;">
                    <span class="rb-compat-cat">Compromiso Central</span>
                    <h3 class="rb-h3 rb-text-primary" style="margin: 12px 0;">Misión</h3>
                    <p class="rb-text-muted" style="line-height: 1.6;">Confeccionar productos exclusivos que brinden una mayor durabilidad y calidad, resguardando la inversión tecnológica y la continuidad operativa de nuestros clientes en todo Chile.</p>
                </div>

                <div class="rb-compat-card" style="padding: 32px 28px;">
                    <span class="rb-compat-cat">Proyección Técnica</span>
                    <h3 class="rb-h3 rb-text-primary" style="margin: 12px 0;">Visión</h3>
                    <p class="rb-text-muted" style="line-height: 1.6;">Satisfacer los requerimientos especiales y exclusivos que demandan las operaciones de nuestros clientes, innovando en soluciones personalizadas tales como arneses corporales, soportes para grúas y valijas con compartimentos de seguridad satelital.</p>
                </div>

                <div class="rb-compat-card" style="padding: 32px 28px;">
                    <span class="rb-compat-cat">Nuestra Fortaleza</span>
                    <h3 class="rb-h3 rb-text-primary" style="margin: 12px 0;">Exclusividad a Medida</h3>
                    <p class="rb-text-muted" style="line-height: 1.6;">Desarrollamos soluciones 100% exclusivas hechas a medida y según la aprobación técnica del cliente. Para modelos nuevos, confeccionamos una muestra física en <strong>48 horas</strong> garantizando calce y funcionalidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 3: Capacidad Productiva e Innovación -->
    <section class="rb-section">
        <div class="rb-container">
            <div class="rb-about-editorial__grid" style="grid-template-columns: 45% 55%;">
                <div class="rb-about-editorial__image-col">
                    <div class="rb-about-image-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/ops_logistica_1787700573166.jpg' ); ?>" alt="Operaciones y Logística ROLBAG" class="rb-about-editorial__img" />
                    </div>
                </div>

                <div class="rb-about-editorial__content-col">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">INNOVACIÓN Y RESPUESTA</span>
                    <h2 class="rb-h2">Vanguardia en Precios, Calidad y Tiempos de Entrega</h2>
                    <p class="rb-paragraph">Hoy en día asumimos nuevos desafíos que nos impulsan a innovar mediante la mecanización de pasos clave de elaboración en nuestro taller central, optimizando la relación precio versus calidad y posicionándonos como proveedores estratégicos de las principales empresas distribuidoras de tecnología móvil en el país.</p>
                    <p class="rb-paragraph">Nuestra responsabilidad y cercanía comercial nos permite ofrecer prontas respuestas a los proyectos más exigentes de bodegaje, control de mercancías y transporte de valores.</p>

                    <div style="margin-top: 32px; display: flex; gap: 16px; flex-wrap: wrap;">
                        <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-btn rb-btn--primary">Ver Líneas de Productos</a>
                        <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="rb-btn rb-btn--outline">Contactar a la Empresa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final Transversal -->
    <section class="rb-section rb-quote-section" style="background-color: var(--color-bg-light);">
        <div class="rb-container text-center" style="max-width: 760px;">
            <span class="rb-eyebrow rb-text-mono rb-text-accent">ATENCIÓN CORPORATIVA</span>
            <h2 class="rb-h2">¿Necesitas Proteger la Flota Tecnológica de tu Empresa?</h2>
            <p class="rb-section-subtitle" style="margin-bottom: 32px;">Contáctanos directamente para coordinar muestras físicas o solicitar una propuesta técnico-comercial a la medida de tus operaciones.</p>
            <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
                <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="rb-btn rb-btn--primary rb-btn--lg">Solicitar Cotización</a>
                <a href="https://wa.me/569318360416?text=<?php echo urlencode('Hola ROLBAG, quisiera solicitar información corporativa.'); ?>" target="_blank" rel="noopener noreferrer" class="rb-btn rb-btn--whatsapp rb-btn--lg">
                    <svg viewBox="0 0 24 24" width="22" height="22" style="fill:currentColor; margin-right:8px; vertical-align:middle;"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8.01 12.27C8.14 12.44 9.76 14.94 12.24 16C12.83 16.27 13.28 16.42 13.64 16.53C14.23 16.72 14.77 16.69 15.2 16.63C15.68 16.56 16.67 16.03 16.88 15.45C17.08 14.87 17.08 14.38 17.02 14.28C16.96 14.17 16.8 14.11 16.56 13.99C16.32 13.86 15.12 13.28 14.9 13.2C14.67 13.11 14.51 13.08 14.35 13.32C14.18 13.57 13.71 14.11 13.56 14.28C13.42 14.45 13.27 14.47 13.03 14.35C12.79 14.24 11.99 13.97 11.04 13.13C10.3 12.47 9.8 11.66 9.66 11.42C9.51 11.18 9.64 11.04 9.77 10.92C9.88 10.81 10.02 10.63 10.14 10.49C10.26 10.34 10.3 10.24 10.38 10.08C10.46 9.92 10.42 9.77 10.36 9.66C10.3 9.54 9.8 8.34 9.6 7.84C9.39 7.36 9.19 7.43 9.03 7.42C8.88 7.42 8.71 7.33 8.53 7.33Z"/></svg>
                    WhatsApp Comercial Directo
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer('landing');
