<?php
/**
 * Template Name: Landing Principal
 * Template Post Type: page
 *
 * Landing B2B corporativa, industrial y tecnológica para ROLBAG.
 *
 * @package Rolbag
 */

get_header('landing');


// --- AUTO-ADMIN VARIABLES ---
$hero_eyebrow = get_option( 'rb_hero_eyebrow', '' ) ?: 'PROTECCIÓN & CONTINUIDAD OPERATIVA EN TODO CHILE';
$hero_title   = get_option( 'rb_hero_title', '' ) ?: 'Soluciones de protección para equipos portátiles y valijas de seguridad';
$hero_lead    = get_option( 'rb_hero_lead', '' ) ?: 'Fabricamos fundas, valijas y accesorios industriales a medida. Desde 2006 asegurando la protección del hardware crítico en almacenes, bodegajes y operaciones logísticas a lo largo de todo Chile.';
$hero_bg      = get_option( 'rb_hero_bg', '' ) ?: get_template_directory_uri() . '/assets/images/generated/hero_industrial_clean.jpg';

$stat1_num    = get_option( 'rb_stat1_num', '' ) ?: '+300';
$stat1_lbl    = get_option( 'rb_stat1_lbl', '' ) ?: 'Modelos a Medida';
$stat2_num    = get_option( 'rb_stat2_num', '' ) ?: '100%';
$stat2_lbl    = get_option( 'rb_stat2_lbl', '' ) ?: 'Confección Nacional';
$stat3_num    = get_option( 'rb_stat3_num', '' ) ?: '+28';
$stat3_lbl    = get_option( 'rb_stat3_lbl', '' ) ?: 'Años de Trayectoria';

$about_title  = get_option( 'rb_about_title', '' ) ?: 'Confección Nacional y Desarrollo a Medida';
$about_text   = get_option( 'rb_about_text', '' ) ?: '<p class="rb-paragraph"><strong>ROLBAG</strong> fue fundada por Rolando Álvarez en el año 2006 a partir de una sólida trayectoria en la confección artesanal de calzado, bolsos y estuches especiales. Con el tiempo, la experiencia adquirida nos permitió dar el salto al sector corporativo, respondiendo a las exigencias de clientes empresariales que requerían resguardar sus operaciones.</p>
<p class="rb-paragraph">Incursionamos con gran éxito en la fabricación de <strong>valijas de seguridad</strong> para el transporte de valores y documentación confidencial, contando con el privilegio de atender históricamente a grandes empresas como <strong>CENCOSUD, LA POLAR, CORREOS DE CHILE, IRON MOUNTAIN y FEDEX</strong>.</p>
<p class="rb-paragraph">Posteriormente, ampliamos nuestras soluciones hacia la protección de equipos portátiles de alto valor (capturadores de datos, tablets e impresoras industriales), sumando a la fecha <strong>más de 300 modelos de fundas desarrollados</strong> con calce milimétrico para el control de mercancías en almacenes, bodegajes y logística en todo Chile.</p>';
$about_img    = get_option( 'rb_about_img', '' ) ?: get_template_directory_uri() . '/assets/images/rolando_alvarez.jpg';
// ----------------------------
?>


<main id="primary" class="site-main rb-main">

    <!-- ==============================================
         MACRO 1: HERO / PROPUESTA PRINCIPAL
         ============================================== -->
    <section class="rb-hero-editorial">
        <div class="rb-hero-editorial__bg" style="background-image: url('<?php echo esc_url( $hero_bg ); ?>');"></div>
        <div class="rb-hero-editorial__overlay"></div>
        <div class="rb-container rb-hero-editorial__container">
            <div class="rb-hero-editorial__grid">
                <!-- Columna Izquierda: Propuesta de Valor y CTAs -->
                <div class="rb-hero-editorial__content">
                    <span class="rb-eyebrow rb-text-mono"><?php echo esc_html( $hero_eyebrow ); ?></span>
                    <h1 class="rb-h1"><?php echo wp_kses_post( $hero_title ); ?></h1>
                    <p class="rb-hero-lead"><?php echo wp_kses_post( $hero_lead ); ?></p>
                    <div class="rb-hero-actions">
                        <a href="#productos" class="rb-btn rb-btn--primary rb-btn--lg">Ver Líneas de Productos</a>
                        <a href="#cotizar" class="rb-btn rb-btn--secondary rb-btn--lg">Solicitar Cotización</a>
                    </div>
                    <!-- Badges de Confianza Industrial -->
                    <div class="rb-hero-badges">
                        <div class="rb-hero-badge-item">
                            <span class="rb-hero-badge-val"><?php echo esc_html( $stat1_num ); ?></span>
                            <span class="rb-hero-badge-lbl"><?php echo esc_html( $stat1_lbl ); ?></span>
                        </div>
                        <div class="rb-hero-badge-divider"></div>
                        <div class="rb-hero-badge-item">
                            <span class="rb-hero-badge-val"><?php echo esc_html( $stat2_num ); ?></span>
                            <span class="rb-hero-badge-lbl"><?php echo esc_html( $stat2_lbl ); ?></span>
                        </div>
                        <div class="rb-hero-badge-divider"></div>
                        <div class="rb-hero-badge-item">
                            <span class="rb-hero-badge-val"><?php echo esc_html( $stat3_num ); ?></span>
                            <span class="rb-hero-badge-lbl"><?php echo esc_html( $stat3_lbl ); ?></span>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Presentación Agrupada de Productos Oficiales -->
                <div class="rb-hero-editorial__showcase">
                    <div class="rb-hero-showcase__card">
                        <div class="rb-hero-showcase__header">
                            <span class="rb-hero-showcase__tag">Líneas de Producción</span>
                            <span class="rb-hero-showcase__origin">Hecho en Chile</span>
                        </div>
                        <div class="rb-hero-showcase__img-wrapper">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/hero_products_grouped.jpg' ); ?>" alt="Líneas de Productos ROLBAG: Fundas para Capturadores, Tablets, Impresoras y Valijas de Seguridad" class="rb-hero-showcase__img" loading="eager" />
                        </div>
                        <div class="rb-hero-showcase__footer">
                            <div class="rb-hero-showcase__chips">
                                <span class="rb-showcase-chip">Capturadores</span>
                                <span class="rb-showcase-chip">Tablets</span>
                                <span class="rb-showcase-chip">Impresoras</span>
                                <span class="rb-showcase-chip">POS Móviles</span>
                                <span class="rb-showcase-chip">Valijas de Seguridad</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         SLIDER DECORATIVO CONTINUO / BRAND TICKER MARQUEE
         ============================================== -->
    <section class="rb-brand-ticker" aria-label="Marcas de Hardware Industrial Soportadas">
        <div class="rb-brand-ticker__inner">
            <div class="rb-brand-ticker__label">
                <span class="rb-ticker-pulse"></span>
                <span class="rb-ticker-label-text">COMPATIBILIDAD INDUSTRIAL</span>
            </div>
            <div class="rb-brand-ticker__viewport">
                <div class="rb-brand-ticker__track">
                    <!-- Grupo 1 -->
                    <div class="rb-ticker-group">
                        <span class="rb-ticker-item">ZEBRA</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">HONEYWELL</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">DATALOGIC</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">SAMSUNG</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">UROVO</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">NEWLAND</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">UNITECH</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">BIXOLON</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">CIPHERLAB</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">SUNMI</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">PAX</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">SEWOO</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">STAR MICRONICS</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">CHAINWAY</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">CASTLES</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">TUU</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">BLUEBIRD</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">M3 MOBILE</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">WEPOY</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">EPSON</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">PANASONIC</span>
                        <span class="rb-ticker-sep">/</span>
                    </div>
                    <!-- Grupo 2 (Clon idéntico para loop continuo sin saltos) -->
                    <div class="rb-ticker-group" aria-hidden="true">
                        <span class="rb-ticker-item">ZEBRA</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">HONEYWELL</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">DATALOGIC</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">SAMSUNG</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">UROVO</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">NEWLAND</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">UNITECH</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">BIXOLON</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">CIPHERLAB</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">SUNMI</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">PAX</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">SEWOO</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">STAR MICRONICS</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">CHAINWAY</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">CASTLES</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">TUU</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">BLUEBIRD</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">M3 MOBILE</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">WEPOY</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">EPSON</span>
                        <span class="rb-ticker-sep">/</span>
                        <span class="rb-ticker-item">PANASONIC</span>
                        <span class="rb-ticker-sep">/</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         MACRO 2: QUIÉNES SOMOS + TRAYECTORIA
         ============================================== -->
    <section id="nosotros" class="rb-section rb-about-editorial">
        <div class="rb-container">
            <div class="rb-about-editorial__grid">
                <!-- Columna Izquierda: Fotografía Confección -->
                <div class="rb-about-editorial__image-col">
                    <div class="rb-about-image-wrapper" style="aspect-ratio: 1 / 1; width: 100%; max-width: 480px; margin: 0 auto; background: #ffffff;">
                        <img src="<?php echo esc_url( $about_img ); ?>" alt="Rolando Álvarez - Fundador ROLBAG" class="rb-about-editorial__img" style="object-fit: cover; width: 100%; height: 100%; display: block;" loading="eager" />
                        <div class="rb-about-image-badge">
                            <span class="rb-about-image-badge__title">Rolando Álvarez</span>
                            <span class="rb-about-image-badge__subtitle">Santiago Centro, Chile</span>
                        </div>
                    </div>
                </div>
                <!-- Columna Derecha: Narrativa Institucional -->
                <div class="rb-about-editorial__content-col">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">HISTORIA Y TRAYECTORIA</span>
                    <h2 class="rb-h2"><?php echo wp_kses_post( $about_title ); ?></h2>
                    
                    <?php echo wp_kses_post( $about_text ); ?>

                    <!-- Estadísticas -->
                    <div class="rb-about-editorial__stats">
                        <div class="rb-stat-editorial">
                            <span class="rb-stat-editorial__num">+28</span>
                            <span class="rb-stat-editorial__label">Años de experiencia en el rubro</span>
                        </div>
                        <div class="rb-stat-editorial__divider"></div>
                        <div class="rb-stat-editorial">
                            <span class="rb-stat-editorial__num">+300</span>
                            <span class="rb-stat-editorial__label">Modelos de fundas desarrollados</span>
                        </div>
                    </div>

                    <!-- Misión y Visión -->
                    <div class="rb-mission-vision-grid">
                        <div class="rb-mv-item">
                            <strong class="rb-mv-title">Nuestra Misión:</strong>
                            <p class="rb-mv-text">Confeccionar productos exclusivos que tengan una mayor durabilidad y calidad para proteger la inversión de nuestros clientes.</p>
                        </div>
                        <div class="rb-mv-item">
                            <strong class="rb-mv-title">Nuestra Visión:</strong>
                            <p class="rb-mv-text">Satisfacer los requerimientos especiales y exclusivos que requieran las empresas, liderando el desarrollo de fundas y accesorios a medida.</p>
                        </div>
                    </div>

                    <div style="margin-top: 28px;">
                        <a href="<?php echo esc_url( home_url( '/empresa' ) ); ?>" class="rb-btn rb-btn--outline">Conocer más sobre la empresa &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         MACRO 3: INGENIERÍA / MATERIALES / BENEFICIOS (DARK ENVIRONMENT)
         ============================================== -->
    <div class="rb-macro-engineering">
        <!-- Parte A: Propuesta Técnica -->
        <section class="rb-section rb-engineering-list">
            <div class="rb-container">
                <div class="rb-engineering__header">
                    <span class="rb-eyebrow rb-text-mono rb-text-cyan">INGENIERÍA APLICADA</span>
                    <h2 class="rb-h2 rb-text-white">Transformamos la seguridad de los equipos en continuidad operativa</h2>
                    <p class="rb-lead-dark">Diseño funcional orientado a resguardar la tecnología móvil y evitar cuellos de botella por hardware inhabilitado en almacenes y bodegas.</p>
                </div>
                
                <div class="rb-tech-list">
                    <div class="rb-tech-item">
                        <div class="rb-tech-item__num rb-text-mono">01</div>
                        <div class="rb-tech-item__content">
                            <h3 class="rb-h3 rb-text-white">Ingeniería Anatómica a Medida</h3>
                            <p class="rb-text-muted">Cada funda se diseña según el contorno exacto del equipo. Permite una adecuada manipulación de comandos, botones, gatillos (pistol grip), pantallas táctiles y puertos de conexión, sin entorpecer el escaneo láser.</p>
                        </div>
                    </div>
                    <div class="rb-tech-item">
                        <div class="rb-tech-item__num rb-text-mono">02</div>
                        <div class="rb-tech-item__content">
                            <h3 class="rb-h3 rb-text-white">Materiales de Alta Durabilidad</h3>
                            <p class="rb-text-muted">Confección en telas sintéticas impermeables de alta resistencia (Cordura / Nylon balístico), capas interiores de espuma EVA de alta densidad y láminas plásticas estructurales diseñadas para soportar impactos y abrasión continua.</p>
                        </div>
                    </div>
                    <div class="rb-tech-item">
                        <div class="rb-tech-item__num rb-text-mono">03</div>
                        <div class="rb-tech-item__content">
                            <h3 class="rb-h3 rb-text-white">Resguardo Operacional Corporativo</h3>
                            <p class="rb-text-muted">Orientados a operaciones intensivas en almacenes, bodegajes y logística. Nuestras soluciones disminuyen radicalmente la tasa de fallas por caídas, protegiendo terminales costosos y asegurando turnos sin interrupciones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parte B: Materiales y Confección -->
        <section class="rb-section rb-materials-editorial">
            <div class="rb-container">
                <div class="rb-materials-editorial__grid">
                    <div class="rb-materials-editorial__text">
                        <span class="rb-eyebrow rb-text-mono rb-text-cyan">COMPOSICIÓN TÉCNICA</span>
                        <h2 class="rb-h2 rb-text-white">Materiales para la máxima exigencia</h2>
                        <p class="rb-text-muted">Utilizamos insumos técnicos testeados para resistir el trato riguroso de operarios y condiciones de almacenaje.</p>
                        
                        <div class="rb-materials-specs">
                            <div class="rb-spec-item">
                                <span class="rb-spec-label">Capa Exterior</span>
                                <p class="rb-spec-desc">Telas sintéticas repelentes al agua de alta resistencia al roce y desgarro, con costuras industriales de hilo continuo reforzado.</p>
                            </div>
                            <div class="rb-spec-item">
                                <span class="rb-spec-label">Núcleo Amortiguador</span>
                                <p class="rb-spec-desc">Espuma EVA termoformada de alta densidad y forros acolchados interiores que absorben la energía de impactos y caídas directas.</p>
                            </div>
                            <div class="rb-spec-item">
                                <span class="rb-spec-label">Visibilidad y Estructura</span>
                                <p class="rb-spec-desc">Láminas de PVC transparente de alto calibre para visualización nítida y protección de pantallas, combinadas con placas internas de polímero indeformable.</p>
                            </div>
                            <div class="rb-spec-item">
                                <span class="rb-spec-label">Cintas y Herrajes</span>
                                <p class="rb-spec-desc">Cintas tejidas de nylon de 30 mm y 40 mm con terminales plásticos de alto impacto (tipo tip-top) o metálicos regulables para porte cómodo a la cintura o al hombro.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rb-materials-editorial__image-col">
                        <div class="rb-macro-image-wrapper">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/macro_textura_1787700783771.jpg' ); ?>" alt="Texturas Industriales ROLBAG" class="rb-materials-editorial__img" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parte C: Beneficios Operacionales -->
        <section class="rb-section rb-benefits-section">
            <div class="rb-container">
                <div class="rb-section-header rb-section-header--dark text-center">
                    <span class="rb-eyebrow rb-text-mono rb-text-cyan">IMPACTO OPERACIONAL</span>
                    <h2 class="rb-h2 rb-text-white">Beneficios comprobados para tu operación</h2>
                </div>
                
                <div class="rb-benefits-table">
                    <div class="rb-benefit-cell">
                        <span class="rb-text-mono rb-benefit-num">#01</span>
                        <h4 class="rb-benefit-title">Extensión de Vida Útil</h4>
                        <p class="rb-text-muted">Protege los equipos de rayones, caídas e impactos, manteniéndolos en óptimo estado durante años de servicio.</p>
                    </div>
                    <div class="rb-benefit-cell">
                        <span class="rb-text-mono rb-benefit-num">#02</span>
                        <h4 class="rb-benefit-title">Reducción de Costos</h4>
                        <p class="rb-text-muted">Disminuye drásticamente los gastos recurrentes por reemplazo de carcasas rotas, pantallas trizadas y servicio técnico.</p>
                    </div>
                    <div class="rb-benefit-cell">
                        <span class="rb-text-mono rb-benefit-num">#03</span>
                        <h4 class="rb-benefit-title">Ergonomía Operativa</h4>
                        <p class="rb-text-muted">Correas cosidas y regulables que facilitan el porte continuo durante jornadas de 8 a 12 horas, previniendo caídas accidentales.</p>
                    </div>
                    <div class="rb-benefit-cell">
                        <span class="rb-text-mono rb-benefit-num">#04</span>
                        <h4 class="rb-benefit-title">Disponibilidad 24/7</h4>
                        <p class="rb-text-muted">Garantiza que el personal cuente siempre con sus herramientas de captura activas, evitando retrasos en despacho e inventario.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ==============================================
         MACRO 4: LÍNEAS DE PRODUCTOS (5 FICHAS OFICIALES - BENTO)
         ============================================== -->
    <section id="productos" class="rb-section rb-products-editorial">
        <div class="rb-container">
            <div class="rb-section-header text-center">
                <span class="rb-eyebrow rb-text-mono rb-text-accent">CATÁLOGO OFICIAL</span>
                <h2 class="rb-h2">Líneas de Productos ROLBAG</h2>
                <p class="rb-section-subtitle">Conoce nuestras 6 líneas especializadas de confección nacional para hardware móvil y transporte seguro.</p>
            </div>
            
            <?php
            // Helper para obtener la imagen destacada del producto para el bento grid
            if (!function_exists('rb_get_product_bg_url')) {
                function rb_get_product_bg_url( $slug, $fallback_path ) {
                    $post = get_page_by_path( $slug, OBJECT, 'producto' );
                    if ( $post && has_post_thumbnail( $post->ID ) ) {
                        return get_the_post_thumbnail_url( $post->ID, 'large' );
                    }
                    return get_template_directory_uri() . $fallback_path;
                }
            }
            ?>
            <div class="rb-products-bento-v2">
                <!-- Fila Superior: Línea Insignia (2/3) + Tablets (1/3) -->
                <div class="rb-bento-row rb-bento-row--top">
                    <!-- Línea 01: Capturadores (Dominante) -->
                    <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-bento-card rb-bento-card--lead">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( rb_get_product_bg_url('fundas-para-capturadores', '/assets/images/galeria/capturadores/honeywell_ck65_frontal.webp') ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <div class="rb-bento-card__meta">
                                <span class="rb-badge">Línea Insignia (+120 modelos)</span>
                                <span class="rb-bento-chip">Nylon Balístico / EVA</span>
                            </div>
                            <h3 class="rb-bento-title">Fundas para Capturadores de Datos</h3>
                            <p class="rb-bento-desc">Confeccionadas en material impermeable de alta duración con acceso libre a comandos, gatillo pistol grip, teclado y puertos de carga sin desarmar la funda.</p>
                            <span class="rb-bento-link">Explorar ficha técnica y modelos compatibles &rarr;</span>
                        </div>
                    </a>

                    <!-- Línea 02: Tablets -->
                    <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets' ) ); ?>" class="rb-bento-card rb-bento-card--side-top">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( rb_get_product_bg_url('fundas-para-tablets', '/assets/images/galeria/tablets/tablet_05.webp') ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <div class="rb-bento-card__meta">
                                <span class="rb-badge rb-badge--light">Línea 02</span>
                                <span class="rb-bento-chip">7" a 12" Pulgadas</span>
                            </div>
                            <h4 class="rb-bento-sub-title">Fundas para Tablets</h4>
                            <p class="rb-bento-desc-compact">Soporte ergonómico de mano y correa de hombro para inventario intensivo y faenas en terreno.</p>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>
                </div>

                <!-- Fila Inferior: 4 Columnas Modulares y Equilibradas (25% cada una en Desktop) -->
                <div class="rb-bento-row rb-bento-row--bottom">
                    <!-- Línea 03: Impresoras Portátiles -->
                    <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras' ) ); ?>" class="rb-bento-card rb-bento-card--quad">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( rb_get_product_bg_url('fundas-para-impresoras', '/assets/images/galeria/impresoras/impresora_01.webp') ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 03</span>
                            <h4 class="rb-bento-sub-title">Fundas para Impresoras</h4>
                            <p class="rb-bento-micro-desc">Apertura frontal para expulsión de boleta o ticket y recarga rápida de rollo.</p>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>

                    <!-- Línea 04: POS Móviles -->
                    <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles' ) ); ?>" class="rb-bento-card rb-bento-card--quad">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( rb_get_product_bg_url('fundas-para-pos-moviles', '/assets/images/galeria/pos_moviles/pos_02.webp') ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 04</span>
                            <h4 class="rb-bento-sub-title">Fundas para POS Móviles</h4>
                            <p class="rb-bento-micro-desc">Lectura de chip, NFC contactless y teclado táctil protegido para cobro en ruta.</p>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>

                    <!-- Línea 05: Valijas de Seguridad -->
                    <a href="<?php echo esc_url( home_url( '/productos/valijas-de-seguridad' ) ); ?>" class="rb-bento-card rb-bento-card--quad">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( rb_get_product_bg_url('valijas-de-seguridad', '/assets/images/generated/hero_valija_3d_1787700281649.jpg') ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 05</span>
                            <h4 class="rb-bento-sub-title">Valijas de Seguridad</h4>
                            <p class="rb-bento-micro-desc">Transporte inviolable de documentación y valores con sistema de ojal y precinto.</p>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>

                    <!-- Línea 06: Candados Especiales -->
                    <a href="<?php echo esc_url( home_url( '/productos/candados-especiales' ) ); ?>" class="rb-bento-card rb-bento-card--quad">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( rb_get_product_bg_url('candados-especiales', '/assets/images/generated/bento_candado_1787700534442.jpg') ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 06</span>
                            <h4 class="rb-bento-sub-title">Candados Especiales</h4>
                            <p class="rb-bento-micro-desc">Amaestramiento y llaves combinadas para control de acceso y cadena de custodia.</p>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="rb-products-all-link text-center" style="margin-top: 36px;">
                <a href="/productos" class="rb-btn rb-btn--outline">Ver Catálogo Completo de Líneas &rarr;</a>
            </div>
        </div>
    </section>

    <!-- ==============================================
         MACRO 5: ECOSISTEMA DE MARCAS COMPATIBLES (SECCIÓN INDEPENDIENTE)
         ============================================== -->
    <section id="marcas" class="rb-section rb-brands-section">
        <div class="rb-container">
<!-- ==============================================
                 SECCIÓN ESTRUCTURADA: ECOSISTEMA DE MARCAS COMPATIBLES
                 ============================================== -->
            <div class="rb-brands-ecosystem" id="marcas">
                <div class="rb-brands-ecosystem__header text-center">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">ECOSISTEMA MULTIMARCA (+300 MODELOS DESARROLLADOS)</span>
                    <h3 class="rb-h2">Marcas Compatibles y Fabricantes Soportados</h3>
                    <p class="rb-section-subtitle" style="max-width: 800px; margin: 0 auto 28px auto;">Confeccionamos fundas protectoras con calce milimétrico para el hardware industrial de los principales fabricantes del mundo.</p>
                </div>

                <?php
                $brand_ecosystem = array(
                    'capturadores' => array(
                        'title' => 'Capturadores & PDA / Terminales Móviles',
                        'desc'  => 'Soporte y calce milimétrico para 12 fabricantes globales de captura de datos',
                        'icon'  => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="3"/><line x1="12" y1="18" x2="12.01" y2="18"/><line x1="9" y1="6" x2="15" y2="6"/></svg>',
                        'brands' => array(
                            array(
                                'name' => 'Zebra Technologies',
                                'badge' => 'Líder Global Industrial',
                                'color' => '#16191F',
                                'color_light' => 'rgba(22, 25, 31, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16L6 20h14"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-zebra' ) ),
                                    array( 'name' => 'Tablets &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-zebra' ) ),
                                    array( 'name' => 'Impresoras &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-zebra' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-zebra' ),
                            ),
                            array(
                                'name' => 'Honeywell',
                                'badge' => 'Movilidad & Logística',
                                'color' => '#EE3124',
                                'color_light' => 'rgba(238, 49, 36, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4v16M19 4v16M5 12h14"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-honeywell' ) ),
                                    array( 'name' => 'Tablets &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-honeywell' ) ),
                                    array( 'name' => 'Impresoras &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-honeywell' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-honeywell' ),
                            ),
                            array(
                                'name' => 'Datalogic',
                                'badge' => 'Captura & Almacén',
                                'color' => '#E2001A',
                                'color_light' => 'rgba(226, 0, 26, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 7V5a2 2 0 0 1 2-2h2M17 3h2a2 2 0 0 1 2 2v2M21 17v2a2 2 0 0 1-2 2h-2M7 21H5a2 2 0 0 1-2-2v-2"/><circle cx="12" cy="12" r="3"/><path d="M7 12h2M15 12h2"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores de Datos &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-datalogic' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-datalogic' ),
                            ),
                            array(
                                'name' => 'Urovo',
                                'badge' => 'Terminales & RFID',
                                'color' => '#FF6600',
                                'color_light' => 'rgba(255, 102, 0, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-urovo' ) ),
                                    array( 'name' => 'Tablets &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-urovo' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-urovo' ),
                            ),
                            array(
                                'name' => 'Newland',
                                'badge' => 'Capturadores & Almacén',
                                'color' => '#0072CE',
                                'color_light' => 'rgba(0, 114, 206, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19L19 4M8 20l12-12M4 12L12 4"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores de Datos &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-newland' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-newland' ),
                            ),
                            array(
                                'name' => 'Unitech',
                                'badge' => 'Movilidad & RFID',
                                'color' => '#005BAC',
                                'color_light' => 'rgba(0, 91, 172, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4v10a6 6 0 0 0 12 0V4"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-unitech' ) ),
                                    array( 'name' => 'Tablets &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-unitech' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-unitech' ),
                            ),
                            array(
                                'name' => 'CipherLab',
                                'badge' => 'Terminales de Almacén',
                                'color' => '#004F9F',
                                'color_light' => 'rgba(0, 79, 159, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 2v20M17 5H9.5a4.5 4.5 0 0 0 0 9H14a4.5 4.5 0 0 1 0 9H7"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores de Datos &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-cipherlab' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-cipherlab' ),
                            ),
                            array(
                                'name' => 'Wepoy',
                                'badge' => 'Captura Intensiva & RFID',
                                'color' => '#0093DD',
                                'color_light' => 'rgba(0, 147, 221, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores de Datos &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-wepoy' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-wepoy' ),
                            ),
                            array(
                                'name' => 'Chainway',
                                'badge' => 'PDA Industrial & RFID',
                                'color' => '#0A60C2',
                                'color_light' => 'rgba(10, 96, 194, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-chainway' ) ),
                                    array( 'name' => 'Tablets &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-chainway' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-chainway' ),
                            ),
                            array(
                                'name' => 'Bluebird',
                                'badge' => 'Terminales Empresariales',
                                'color' => '#0082C8',
                                'color_light' => 'rgba(0, 130, 200, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 16v1a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v1"/><path d="M18 8h4a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-4"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores de Datos &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-bluebird' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-bluebird' ),
                            ),
                            array(
                                'name' => 'M3 Mobile',
                                'badge' => 'Cámaras de Frío & Logística',
                                'color' => '#0054A6',
                                'color_light' => 'rgba(0, 84, 166, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16M4 4h16M4 12h16"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores de Datos &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-m3-mobile' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-m3-mobile' ),
                            ),
                            array(
                                'name' => 'Panasonic Toughbook',
                                'badge' => 'Línea Toughbook Rugged',
                                'color' => '#003896',
                                'color_light' => 'rgba(0, 56, 150, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Capturadores & Tablets &rarr;', 'url' => home_url( '/productos/fundas-para-capturadores/#marca-panasonic' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-capturadores/#marca-panasonic' ),
                            ),
                        ),
                    ),
                    'tablets' => array(
                        'title' => 'Tablets Industriales Rugged',
                        'desc'  => 'Soporte ergonómico de mano y protección perimetral para tablets empresariales de 7" a 12"',
                        'icon'  => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="3"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>',
                        'brands' => array(
                            array(
                                'name' => 'Samsung',
                                'badge' => 'Tablets Rugged & Enterprise',
                                'color' => '#1428A0',
                                'color_light' => 'rgba(20, 40, 160, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="3"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Tablets Industriales &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-samsung' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-tablets/#marca-samsung' ),
                            ),
                            array(
                                'name' => 'Zebra Technologies',
                                'badge' => 'Tablets Rugged ET5x / L10',
                                'color' => '#16191F',
                                'color_light' => 'rgba(22, 25, 31, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16L6 20h14"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Tablets Industriales &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-zebra' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-tablets/#marca-zebra' ),
                            ),
                            array(
                                'name' => 'Honeywell',
                                'badge' => 'Tablets Rugged RT10 / EDA10A',
                                'color' => '#EE3124',
                                'color_light' => 'rgba(238, 49, 36, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4v16M19 4v16M5 12h14"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Tablets Industriales &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-honeywell' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-tablets/#marca-honeywell' ),
                            ),
                            array(
                                'name' => 'Urovo',
                                'badge' => 'Tablets Industriales P8100',
                                'color' => '#FF6600',
                                'color_light' => 'rgba(255, 102, 0, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Tablets Industriales &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-urovo' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-tablets/#marca-urovo' ),
                            ),
                            array(
                                'name' => 'Unitech',
                                'badge' => 'Tablets Rugged TB85 / TB162',
                                'color' => '#005BAC',
                                'color_light' => 'rgba(0, 91, 172, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4v10a6 6 0 0 0 12 0V4"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Tablets Industriales &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-unitech' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-tablets/#marca-unitech' ),
                            ),
                            array(
                                'name' => 'Chainway',
                                'badge' => 'Tablets P80 / P100 Rugged',
                                'color' => '#0A60C2',
                                'color_light' => 'rgba(10, 96, 194, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Tablets Industriales &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-chainway' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-tablets/#marca-chainway' ),
                            ),
                            array(
                                'name' => 'Panasonic Toughbook',
                                'badge' => 'Toughbook G2 / A3 Rugged',
                                'color' => '#003896',
                                'color_light' => 'rgba(0, 56, 150, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Tablets Rugged &rarr;', 'url' => home_url( '/productos/fundas-para-tablets/#marca-panasonic' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-tablets/#marca-panasonic' ),
                            ),
                        ),
                    ),
                    'impresoras' => array(
                        'title' => 'Impresoras Portátiles y Térmicas',
                        'desc'  => 'Fundas con apertura frontal para emisión de tickets y recarga de papel sin desarmar la funda',
                        'icon'  => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>',
                        'brands' => array(
                            array(
                                'name' => 'Bixolon',
                                'badge' => 'Impresión Térmica & RFID',
                                'color' => '#EA5404',
                                'color_light' => 'rgba(234, 84, 4, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Impresoras Portátiles &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-bixolon' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-impresoras/#marca-bixolon' ),
                            ),
                            array(
                                'name' => 'Zebra Technologies',
                                'badge' => 'Línea ZQ600 / ZQ500 / ZQ300',
                                'color' => '#16191F',
                                'color_light' => 'rgba(22, 25, 31, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16L6 20h14"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Impresoras Portátiles &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-zebra' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-impresoras/#marca-zebra' ),
                            ),
                            array(
                                'name' => 'Honeywell',
                                'badge' => 'Línea RP2 / RP4 / PB50',
                                'color' => '#EE3124',
                                'color_light' => 'rgba(238, 49, 36, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4v16M19 4v16M5 12h14"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Impresoras Portátiles &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-honeywell' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-impresoras/#marca-honeywell' ),
                            ),
                            array(
                                'name' => 'Urovo',
                                'badge' => 'Impresión Móvil K319 / K419',
                                'color' => '#FF6600',
                                'color_light' => 'rgba(255, 102, 0, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Impresoras Portátiles &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-urovo' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-impresoras/#marca-urovo' ),
                            ),
                            array(
                                'name' => 'Unitech',
                                'badge' => 'Impresión de Terreno SP320',
                                'color' => '#005BAC',
                                'color_light' => 'rgba(0, 91, 172, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4v10a6 6 0 0 0 12 0V4"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Impresoras Portátiles &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-unitech' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-impresoras/#marca-unitech' ),
                            ),
                            array(
                                'name' => 'Sewoo',
                                'badge' => 'Impresoras de Recibos LK-P',
                                'color' => '#00629B',
                                'color_light' => 'rgba(0, 98, 155, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Impresoras Portátiles &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-sewoo' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-impresoras/#marca-sewoo' ),
                            ),
                            array(
                                'name' => 'Star Micronics',
                                'badge' => 'Facturación en Terreno SM-L / SM-T',
                                'color' => '#004B97',
                                'color_light' => 'rgba(0, 75, 151, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Impresoras Portátiles &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-star-micronics' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-impresoras/#marca-star-micronics' ),
                            ),
                            array(
                                'name' => 'Epson',
                                'badge' => 'Facturación & Boleta Móvil',
                                'color' => '#003399',
                                'color_light' => 'rgba(0, 51, 153, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><rect x="6" y="14" width="12" height="8"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Impresoras Portátiles &rarr;', 'url' => home_url( '/productos/fundas-para-impresoras/#marca-epson' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-impresoras/#marca-epson' ),
                            ),
                            array(
                                'name' => 'Otras Marcas Especializadas',
                                'badge' => 'Fabricantes Especializados',
                                'color' => '#00A3E0',
                                'color_light' => 'rgba(0, 163, 224, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Barpos &rarr;', 'url' => home_url( '/productos' ) ),
                                    array( 'name' => 'Brother &rarr;', 'url' => home_url( '/productos' ) ),
                                    array( 'name' => 'iDPRT &rarr;', 'url' => home_url( '/productos' ) ),
                                    array( 'name' => 'Point Mobile &rarr;', 'url' => home_url( '/productos' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-impresoras' ),
                            ),
                        ),
                    ),
                    'pos' => array(
                        'title' => 'Terminales POS Móviles y Medios de Pago',
                        'desc'  => 'Lectura de chip, NFC contactless y teclado táctil protegido para cobro en ruta y delivery',
                        'icon'  => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="3"/><line x1="3" y1="10" x2="21" y2="10"/><path d="M7 15h2M12 15h2"/></svg>',
                        'brands' => array(
                            array(
                                'name' => 'Sunmi',
                                'badge' => 'Smart POS & Cobro Móvil',
                                'color' => '#FF5E00',
                                'color_light' => 'rgba(255, 94, 0, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="3"/><line x1="3" y1="10" x2="21" y2="10"/><path d="M7 15h2M12 15h2"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Terminales POS Móviles &rarr;', 'url' => home_url( '/productos/fundas-para-pos-moviles/#marca-sunmi' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-pos-moviles/#marca-sunmi' ),
                            ),
                            array(
                                'name' => 'PAX Technology',
                                'badge' => 'Terminales de Pago en Ruta',
                                'color' => '#0066B3',
                                'color_light' => 'rgba(0, 102, 179, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/><circle cx="7" cy="15" r="1"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Terminales POS Móviles &rarr;', 'url' => home_url( '/productos/fundas-para-pos-moviles/#marca-pax-mercado-libre' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-pos-moviles/#marca-pax-mercado-libre' ),
                            ),
                            array(
                                'name' => 'Castles Technology',
                                'badge' => 'Cobro & Certificación Bancaria',
                                'color' => '#C8102E',
                                'color_light' => 'rgba(200, 16, 46, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Terminales POS Móviles &rarr;', 'url' => home_url( '/productos/fundas-para-pos-moviles/#marca-castles' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-pos-moviles/#marca-castles' ),
                            ),
                            array(
                                'name' => 'TUU',
                                'badge' => 'Smart POS & Delivery',
                                'color' => '#4F46E5',
                                'color_light' => 'rgba(79, 70, 229, 0.08)',
                                'icon' => '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="4" x2="12" y2="20"/><line x1="4" y1="4" x2="20" y2="4"/></svg>',
                                'lines' => array(
                                    array( 'name' => 'Terminales POS Móviles &rarr;', 'url' => home_url( '/productos/fundas-para-pos-moviles/#marca-tuu' ) ),
                                ),
                                'action_url' => home_url( '/productos/fundas-para-pos-moviles/#marca-tuu' ),
                            ),
                        ),
                    ),
                );
                ?>

                <!-- Buscador predictivo de marcas y fabricantes -->
                <div class="rb-brands-search-wrap" style="margin-bottom: 28px;">
                    <div class="rb-brands-search-inner">
                        <svg class="rb-search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                        <input type="text" id="rb-brands-search" placeholder="Buscar fabricante (ej. Zebra, Honeywell, Sunmi, Bixolon, Samsung, PAX)..." aria-label="Buscar marcas o fabricantes compatibles">
                    </div>
                </div>

                <!-- Estructura de Lista Desplegable y Contraíble Agrupada por Categoría -->
                <div class="rb-brands-accordion" id="rb-brands-accordion">
                    <?php foreach ( $brand_ecosystem as $cat_key => $cat_data ) : ?>
                        <div class="rb-brands-accordion-item" data-cat="<?php echo esc_attr( $cat_key ); ?>">
                            <button type="button" class="rb-brands-accordion-header" aria-expanded="false">
                                <div class="rb-brands-acc-left">
                                    <span class="rb-brands-acc-icon">
                                        <?php echo $cat_data['icon']; ?>
                                    </span>
                                    <div class="rb-brands-acc-title-wrap">
                                        <h4 class="rb-brands-acc-title"><?php echo esc_html( $cat_data['title'] ); ?></h4>
                                        <span class="rb-brands-acc-desc"><?php echo esc_html( $cat_data['desc'] ); ?></span>
                                    </div>
                                </div>
                                <div class="rb-brands-acc-right">
                                    <span class="rb-brands-acc-badge"><?php echo count( $cat_data['brands'] ); ?> Fabricantes</span>
                                    <span class="rb-brands-acc-chevron" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                                    </span>
                                </div>
                            </button>
                            <div class="rb-brands-accordion-body" style="display: none;">
                                <div class="rb-brands-grid--category">
                                    <?php foreach ( $cat_data['brands'] as $b_item ) : ?>
                                        <div class="rb-brand-card-item" data-category="<?php echo esc_attr( $cat_key ); ?>" data-name="<?php echo esc_attr( strtolower( $b_item['name'] ) ); ?>" style="--brand-color: <?php echo esc_attr( $b_item['color'] ); ?>; --brand-color-light: <?php echo esc_attr( $b_item['color_light'] ); ?>;">
                                            <div class="rb-brand-card-item__top">
                                                <div class="rb-brand-emblem" aria-hidden="true">
                                                    <?php echo $b_item['icon']; ?>
                                                </div>
                                                <span class="rb-brand-badge-cat"><?php echo esc_html( $b_item['badge'] ); ?></span>
                                            </div>
                                            <h5 class="rb-brand-card-item__title" style="font-size:1.15rem; font-weight:700; margin:0 0 12px 0; color:#0f172a;"><?php echo esc_html( $b_item['name'] ); ?></h5>
                                            <div class="rb-brand-lines-wrap" style="margin-bottom:14px;">
                                                <span class="rb-brand-lines-label" style="font-size:0.75rem; color:#64748b; text-transform:uppercase; font-weight:600; display:block; margin-bottom:6px;">Línea compatible:</span>
                                                <div class="rb-brand-line-pills" style="display:flex; flex-wrap:wrap; gap:6px;">
                                                    <?php foreach ( $b_item['lines'] as $line_pill ) : ?>
                                                        <a href="<?php echo esc_url( $line_pill['url'] ); ?>" class="rb-brand-line-pill"><?php echo $line_pill['name']; ?></a>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="rb-brand-card-item__action" style="margin-top:auto;">
                                                <a href="<?php echo esc_url( $b_item['action_url'] ); ?>" class="rb-brand-main-btn" style="width:100%; justify-content:center;">
                                                    <span>Ver Ficha Técnica</span>
                                                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const accHeaders = document.querySelectorAll('.rb-brands-accordion-header');
                    const brandSearch = document.getElementById('rb-brands-search');
                    const accItems = document.querySelectorAll('.rb-brands-accordion-item');

                    accHeaders.forEach(header => {
                        header.addEventListener('click', function() {
                            const item = this.closest('.rb-brands-accordion-item');
                            const body = item.querySelector('.rb-brands-accordion-body');
                            const isOpen = item.classList.contains('is-open');

                            if (isOpen) {
                                item.classList.remove('is-open');
                                this.setAttribute('aria-expanded', 'false');
                                body.style.display = 'none';
                            } else {
                                item.classList.add('is-open');
                                this.setAttribute('aria-expanded', 'true');
                                body.style.display = 'block';
                            }
                        });
                    });

                    if (brandSearch) {
                        brandSearch.addEventListener('input', function() {
                            const query = this.value.toLowerCase().trim();

                            accItems.forEach(item => {
                                const cards = item.querySelectorAll('.rb-brand-card-item');
                                const header = item.querySelector('.rb-brands-accordion-header');
                                const body = item.querySelector('.rb-brands-accordion-body');
                                let matchCount = 0;

                                cards.forEach(card => {
                                    const name = card.getAttribute('data-name') || '';
                                    const title = (card.querySelector('.rb-brand-card-item__title')?.textContent || '').toLowerCase();
                                    const badge = (card.querySelector('.rb-brand-badge-cat')?.textContent || '').toLowerCase();

                                    if (!query || name.includes(query) || title.includes(query) || badge.includes(query)) {
                                        card.style.display = '';
                                        matchCount++;
                                    } else {
                                        card.style.display = 'none';
                                    }
                                });

                                if (query) {
                                    if (matchCount > 0) {
                                        item.style.display = '';
                                        item.classList.add('is-open');
                                        header.setAttribute('aria-expanded', 'true');
                                        body.style.display = 'block';
                                    } else {
                                        item.style.display = 'none';
                                    }
                                } else {
                                    item.style.display = '';
                                    item.classList.remove('is-open');
                                    header.setAttribute('aria-expanded', 'false');
                                    body.style.display = 'none';
                                }
                            });
                        });
                    }
                });
                </script>

                <!-- Banner Compromiso Prototipado 48 Horas -->
                <div class="rb-brands-custom-callout">
                    <div class="rb-custom-callout-inner">
                        <div class="rb-custom-callout-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="rb-custom-callout-content">
                            <h4 class="rb-custom-callout-title">¿Tu marca o modelo no aparece en esta lista?</h4>
                            <p class="rb-custom-callout-desc">Fabricamos fundas exclusivas a la medida de cualquier equipo del mercado. Solo requerimos disponer del dispositivo físico durante <strong>48 horas</strong> en nuestro taller de Santiago Centro para diseñar el patronaje milimétrico y entregarte una muestra física para aprobación técnica.</p>
                        </div>
                        <div class="rb-custom-callout-action">
                            <a href="<?php echo esc_url( home_url( '/soluciones-a-medida' ) ); ?>" class="rb-btn rb-btn--primary">Solicitar Muestra en 48 Horas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         MACRO 5: DESARROLLO A MEDIDA + PROCESO
         ============================================== -->
    <section id="soluciones" class="rb-custom-process">
        <div class="rb-custom-process__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/custom_solution_1787698415328.jpg' ); ?>');"></div>
        <div class="rb-custom-process__overlay"></div>
        
        <div class="rb-container rb-custom-process__container">
            <div class="rb-custom-process__intro">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">SOLUCIONES EXCLUSIVAS</span>
                <h2 class="rb-h2 rb-text-white">¿No encuentras una funda para tu equipo?</h2>
                <p class="rb-custom-highlight">La desarrollamos a la medida exacta de tu empresa.</p>
                <p class="rb-text-muted">Confeccionamos productos totalmente exclusivos según la aprobación del cliente. Desarrollamos fundas especiales para cualquier modelo nuevo o accesorios de sujeción (ejemplo: soportes para grúa horquilla).</p>
            </div>
            
            <div class="rb-process-timeline">
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">01</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Cuéntanos</h4>
                        <p class="rb-step-desc">Indica la marca, modelo de hardware, códigos y cantidad de unidades requeridas.</p>
                    </div>
                </div>
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">02</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Analizamos</h4>
                        <p class="rb-step-desc">Evaluamos la ergonomía de uso, manipulación de puertos y materiales sintéticos recomendados.</p>
                    </div>
                </div>
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">03</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Desarrollamos</h4>
                        <p class="rb-step-desc">Patronaje a medida y confección de muestra física para prueba de calce y aprobación técnica.</p>
                    </div>
                </div>
                <div class="rb-process-step">
                    <div class="rb-process-step__marker rb-text-mono">04</div>
                    <div class="rb-process-step__content">
                        <h4 class="rb-step-title">Cotizamos</h4>
                        <p class="rb-step-desc">Enviamos la propuesta formal con valores escalonados por volumen y tiempos de entrega.</p>
                    </div>
                </div>
            </div>
            
            <div class="rb-process-notice">
                <div class="rb-notice-icon">!</div>
                <div class="rb-notice-text">
                    <strong>Requisito para modelos nuevos:</strong> Para modelos nuevos e independientes de la marca, es necesario disponer del equipo físico durante un lapso de <strong>48 horas</strong> para su respectivo diseño, patronaje y posterior aprobación.
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         MACRO 6: SECTORES DE OPERACIÓN (INTERACTIVO) + COMPATIBILIDAD
         ============================================== -->
    <section id="sectores" class="rb-section rb-operations-editorial">
        <div class="rb-container">
            <div class="rb-section-header text-center">
                <span class="rb-eyebrow rb-text-mono rb-text-accent">APLICACIONES REALES</span>
                <h2 class="rb-h2">Sectores de Operación</h2>
                <p class="rb-section-subtitle">Nuestras fundas y valijas operan diariamente en los entornos de trabajo intensivo en todo Chile.</p>
            </div>
            
            <!-- Panel Interactivo de Sectores -->
            <div class="rb-operations-panel">
                <div class="rb-operations-panel__list" role="tablist" aria-label="Sectores de Operación">
                    <button type="button" class="rb-op-item rb-op-item--active" role="tab" id="tab-almacenes" aria-selected="true" aria-controls="panel-sector" tabindex="0" data-sector="almacenes" data-title="Almacenes y Centros de Acopio" data-desc="Lectura intensiva de códigos de barras, gestión de inventarios y control de mercancías con máxima protección ante caídas en superficies duras." data-img="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/ops_bodega_1787700615440.jpg' ); ?>">
                        <span class="rb-text-mono rb-op-num">01</span>
                        <div class="rb-op-info">
                            <strong>Almacenes</strong>
                            <p>Control interno de mercancía y lectura en altura.</p>
                        </div>
                    </button>

                    <button type="button" class="rb-op-item" role="tab" id="tab-bodegajes" aria-selected="false" aria-controls="panel-sector" tabindex="-1" data-sector="bodegajes" data-title="Bodegajes y Almacenaje Pesado" data-desc="Operación continua en grúas horquilla, picking de cajas y recepción de carga, donde el hardware requiere correas de seguridad y arneses ergonómicos." data-img="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/ops_terreno_1787700644226.jpg' ); ?>">
                        <span class="rb-text-mono rb-op-num">02</span>
                        <div class="rb-op-info">
                            <strong>Bodegajes</strong>
                            <p>Picking intensivo y manipulación en turnos continuos.</p>
                        </div>
                    </button>

                    <button type="button" class="rb-op-item" role="tab" id="tab-logistica" aria-selected="false" aria-controls="panel-sector" tabindex="-1" data-sector="logistica" data-title="Logística y Distribución" data-desc="Cross docking, despacho interurbano y entrega en terreno, con protección contra lluvia, polvo y manipulación exigente del transporte." data-img="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/ops_logistica_1787700573166.jpg' ); ?>">
                        <span class="rb-text-mono rb-op-num">03</span>
                        <div class="rb-op-info">
                            <strong>Logística y Distribución</strong>
                            <p>Despacho en terreno, transporte y cross docking.</p>
                        </div>
                    </button>
                </div>

                <div class="rb-operations-panel__view" id="panel-sector" role="tabpanel" aria-labelledby="tab-almacenes">
                    <div class="rb-op-view-img-wrap">
                        <img id="rb-op-dynamic-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/ops_bodega_1787700615440.jpg' ); ?>" alt="Operación en Almacenes con Fundas ROLBAG" class="rb-ops-img" />
                    </div>
                    <div class="rb-op-view-content">
                        <h3 id="rb-op-dynamic-title" class="rb-h3 rb-text-primary">Almacenes y Centros de Acopio</h3>
                        <p id="rb-op-dynamic-desc" class="rb-paragraph">Lectura intensiva de códigos de barras, gestión de inventarios y control de mercancías con máxima protección ante caídas en superficies duras.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- ==============================================
         MACRO 7: COTIZACIÓN Y CTA
         ============================================== -->
    <section id="cotizar" class="rb-section rb-quote-editorial">
        <div class="rb-container">
            <div class="rb-section-header text-center">
                <span class="rb-eyebrow rb-text-mono rb-text-accent">GUÍA DE COTIZACIÓN</span>
                <h2 class="rb-h2">Información Requerida para tu Solicitud</h2>
                <p class="rb-section-subtitle">Para entregarte una respuesta ágil y precisa, por favor considera los siguientes datos según tu requerimiento:</p>
            </div>

            <div class="rb-quote-grid">
                <!-- Columna Fundas -->
                <div class="rb-quote-card">
                    <div class="rb-quote-card__header">
                        <span class="rb-badge">Fundas Protectoras</span>
                        <h3 class="rb-quote-card__title">Para cotizar Fundas</h3>
                    </div>
                    <ul class="rb-quote-checklist">
                        <li><strong>Marca y Modelo:</strong> Indicación exacta del equipo (ej. Zebra TC58, Honeywell CT45, Samsung Active5).</li>
                        <li><strong>Códigos / Accesorios:</strong> Especificar si cuenta con accesorio pistol grip (gatillo), batería extendida o cuna de carga.</li>
                        <li><strong>Cantidad solicitada:</strong> Volumen estimado de unidades requeridas.</li>
                        <li><strong>Tiempo de entrega:</strong> Plazo aproximado objetivo de implementación.</li>
                        <li><strong>Modelo nuevo:</strong> Se requiere disponer del equipo durante 48 horas para su diseño y posterior aprobación.</li>
                    </ul>
                </div>

                <!-- Columna Valijas -->
                <div class="rb-quote-card rb-quote-card--alt">
                    <div class="rb-quote-card__header">
                        <span class="rb-badge rb-badge--navy">Seguridad</span>
                        <h3 class="rb-quote-card__title">Para cotizar Valijas</h3>
                    </div>
                    <ul class="rb-quote-checklist">
                        <li><strong>Medidas en Litros / Volumen:</strong> Dimensiones exteriores requeridas (Ancho, Largo y Alto en cm).</li>
                        <li><strong>Cantidad solicitada:</strong> Número de valijas para confección.</li>
                        <li><strong>Color corporativo:</strong> Preferencia de color de tela y cierres.</li>
                        <li><strong>Logotipo corporativo:</strong> Formato en alta resolución (vectorial o imagen nítida).</li>
                        <li><strong>Valijas especiales:</strong> Disponibles bajo previo acuerdo: valija sobre, valija con carro o compartimento para GPS.</li>
                    </ul>
                </div>
            </div>

            <!-- ==============================================
                 WIDGET PRE-COTIZADOR RÁPIDO B2B
                 ============================================== -->
            <div class="rb-quick-quote-widget" id="cotizador-rapido">
                <div class="rb-quick-quote-widget__inner">
                    <div class="rb-quick-quote-header text-center">
                        <span class="rb-badge rb-badge--accent">COTIZACIÓN ÁGIL DIRECTA</span>
                        <h3 class="rb-h3 rb-text-white">Pre-configura tu requerimiento en 30 segundos</h3>
                        <p class="rb-text-muted">Selecciona la línea y cuéntanos sobre tus equipos para recibir una propuesta técnica al instante.</p>
                    </div>

                    <form class="rb-quick-quote-form" id="rb-quick-quote-form" onsubmit="return false;">
                        <div class="rb-qq-step">
                            <label class="rb-qq-label"><span class="rb-qq-step-num">1</span> Selecciona la Línea de Interés:</label>
                            <div class="rb-qq-pills" id="rb-qq-pills-container" role="radiogroup" aria-label="Seleccionar Línea de Producto">
                                <button type="button" class="rb-qq-pill active" data-line="Fundas para Capturadores" data-placeholder="Ej: Zebra TC58, MC9300, Honeywell CT45, Datalogic Memor 10..." onclick="if(window.selectQuickQuoteLine) window.selectQuickQuoteLine(this);">Capturadores / PDA</button>
                                <button type="button" class="rb-qq-pill" data-line="Fundas para Tablets" data-placeholder="Ej: Samsung Galaxy Tab Active5, Zebra ET40 10&quot;, Honeywell RT10..." onclick="if(window.selectQuickQuoteLine) window.selectQuickQuoteLine(this);">Tablets Industriales</button>
                                <button type="button" class="rb-qq-pill" data-line="Fundas para Impresoras" data-placeholder="Ej: Zebra ZQ521, Bixolon SPP-R310, Epson Mobilink P80..." onclick="if(window.selectQuickQuoteLine) window.selectQuickQuoteLine(this);">Impresoras Portátiles</button>
                                <button type="button" class="rb-qq-pill" data-line="Fundas para POS Móviles" data-placeholder="Ej: Sunmi V2s Plus, Ingenico Move 3500, Pax A920 Pro, Verifone..." onclick="if(window.selectQuickQuoteLine) window.selectQuickQuoteLine(this);">POS Móviles</button>
                                <button type="button" class="rb-qq-pill" data-line="Valijas de Seguridad" data-placeholder="Ej: Valija 45L con ojal de candado, medidas 55x35x25 cm..." onclick="if(window.selectQuickQuoteLine) window.selectQuickQuoteLine(this);">Valijas de Seguridad</button>
                                <button type="button" class="rb-qq-pill" data-line="Candados Especiales" data-placeholder="Ej: Candado con cable de acero y llave maestra / combinación..." onclick="if(window.selectQuickQuoteLine) window.selectQuickQuoteLine(this);">Candados Especiales</button>
                            </div>
                            <input type="hidden" id="rb-qq-selected-line" value="Fundas para Capturadores">
                        </div>

                        <div class="rb-qq-grid-fields">
                            <div class="rb-qq-field">
                                <label for="rb-qq-model" class="rb-qq-label"><span class="rb-qq-step-num">2</span> Marca, Modelo o Medidas:</label>
                                <input type="text" id="rb-qq-model" placeholder="Ej: Zebra TC58 con pistol grip / Honeywell CT45..." class="rb-qq-input">
                            </div>
                            <div class="rb-qq-field rb-qq-field--qty">
                                <label for="rb-qq-qty" class="rb-qq-label"><span class="rb-qq-step-num">3</span> Cantidad Estimada:</label>
                                <input type="number" id="rb-qq-qty" min="1" value="10" placeholder="10" class="rb-qq-input">
                            </div>
                        </div>

                        <div class="rb-qq-actions">
                            <a href="https://wa.me/569318360416?text=Hola%20ROLBAG%2C%20quisiera%20cotizar%2010%20unidades%20de%20Fundas%20para%20Capturadores" id="rb-qq-whatsapp-btn" class="rb-btn rb-btn--whatsapp rb-btn--lg" target="_blank" rel="noopener noreferrer">
                                <svg viewBox="0 0 24 24" width="22" height="22" style="fill:currentColor; margin-right:8px; vertical-align:middle;"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8.01 12.27C8.14 12.44 9.76 14.94 12.24 16C12.83 16.27 13.28 16.42 13.64 16.53C14.23 16.72 14.77 16.69 15.2 16.63C15.68 16.56 16.67 16.03 16.88 15.45C17.08 14.87 17.08 14.38 17.02 14.28C16.96 14.17 16.8 14.11 16.56 13.99C16.32 13.86 15.12 13.28 14.9 13.2C14.67 13.11 14.51 13.08 14.35 13.32C14.18 13.57 13.71 14.11 13.56 14.28C13.42 14.45 13.27 14.47 13.03 14.35C12.79 14.24 11.99 13.97 11.04 13.13C10.3 12.47 9.8 11.66 9.66 11.42C9.51 11.18 9.64 11.04 9.77 10.92C9.88 10.81 10.02 10.63 10.14 10.49C10.26 10.34 10.3 10.24 10.38 10.08C10.46 9.92 10.42 9.77 10.36 9.66C10.3 9.54 9.8 8.34 9.6 7.84C9.39 7.36 9.19 7.43 9.03 7.42C8.88 7.42 8.71 7.33 8.53 7.33Z"/></svg>
                                <span>Enviar Consulta a WhatsApp con estos Datos</span>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" id="rb-qq-email-btn" class="rb-btn rb-btn--outline rb-btn--lg">
                                <span>Solicitar Cotización Formal por Formulario &rarr;</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL PLENO -->
    <section class="rb-cta-editorial">
        <div class="rb-container rb-cta-editorial__container">
            <span class="rb-eyebrow rb-text-mono rb-text-cyan">ATENCIÓN DIRECTA</span>
            <h2 class="rb-cta-title">Asegura la continuidad de tu operación</h2>
            <p class="rb-cta-lead">Comunícate hoy con nuestro equipo comercial para evaluar la solución de protección adecuada para tu empresa.</p>
            <div class="rb-cta-actions">
                <a href="/contacto" class="rb-btn rb-btn--primary rb-btn--lg">Solicitar Cotización Formal</a>
                <a href="https://wa.me/569318360416" class="rb-btn rb-btn--whatsapp rb-btn--lg" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 24 24" width="22" height="22" style="fill:currentColor; margin-right:8px; vertical-align:middle;"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8.01 12.27C8.14 12.44 9.76 14.94 12.24 16C12.83 16.27 13.28 16.42 13.64 16.53C14.23 16.72 14.77 16.69 15.2 16.63C15.68 16.56 16.67 16.03 16.88 15.45C17.08 14.87 17.08 14.38 17.02 14.28C16.96 14.17 16.8 14.11 16.56 13.99C16.32 13.86 15.12 13.28 14.9 13.2C14.67 13.11 14.51 13.08 14.35 13.32C14.18 13.57 13.71 14.11 13.56 14.28C13.42 14.45 13.27 14.47 13.03 14.35C12.79 14.24 11.99 13.97 11.04 13.13C10.3 12.47 9.8 11.66 9.66 11.42C9.51 11.18 9.64 11.04 9.77 10.92C9.88 10.81 10.02 10.63 10.14 10.49C10.26 10.34 10.3 10.24 10.38 10.08C10.46 9.92 10.42 9.77 10.36 9.66C10.3 9.54 9.8 8.34 9.6 7.84C9.39 7.36 9.19 7.43 9.03 7.42C8.88 7.42 8.71 7.33 8.53 7.33Z"/></svg>
                    WhatsApp Comercial Directo
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer('landing');
