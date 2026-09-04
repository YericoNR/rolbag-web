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
?>

<main id="primary" class="site-main rb-main">

    <!-- ==============================================
         MACRO 1: HERO / PROPUESTA PRINCIPAL
         ============================================== -->
    <section class="rb-hero-editorial">
        <div class="rb-hero-editorial__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/hero_industrial_clean.jpg' ); ?>');"></div>
        <div class="rb-hero-editorial__overlay"></div>
        <div class="rb-container rb-hero-editorial__container">
            <div class="rb-hero-editorial__grid">
                <!-- Columna Izquierda: Propuesta de Valor y CTAs -->
                <div class="rb-hero-editorial__content">
                    <span class="rb-eyebrow rb-text-mono">PROTECCIÓN & CONTINUIDAD OPERATIVA EN TODO CHILE</span>
                    <h1 class="rb-h1">Soluciones de protección para equipos portátiles y valijas de seguridad</h1>
                    <p class="rb-hero-lead">Fabricamos fundas, valijas y accesorios industriales a medida. Desde 2006 asegurando la protección del hardware crítico en almacenes, bodegajes y operaciones logísticas a lo largo de todo Chile.</p>
                    <div class="rb-hero-actions">
                        <a href="#productos" class="rb-btn rb-btn--primary rb-btn--lg">Ver Líneas de Productos</a>
                        <a href="#cotizar" class="rb-btn rb-btn--secondary rb-btn--lg">Solicitar Cotización</a>
                    </div>
                    <!-- Badges de Confianza Industrial -->
                    <div class="rb-hero-badges">
                        <div class="rb-hero-badge-item">
                            <span class="rb-hero-badge-val">+300</span>
                            <span class="rb-hero-badge-lbl">Modelos a Medida</span>
                        </div>
                        <div class="rb-hero-badge-divider"></div>
                        <div class="rb-hero-badge-item">
                            <span class="rb-hero-badge-val">100%</span>
                            <span class="rb-hero-badge-lbl">Confección Nacional</span>
                        </div>
                        <div class="rb-hero-badge-divider"></div>
                        <div class="rb-hero-badge-item">
                            <span class="rb-hero-badge-val">20+</span>
                            <span class="rb-hero-badge-lbl">Años de Trayectoria</span>
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
                    <div class="rb-about-image-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/historia_taller_rolbag.jpg' ); ?>" alt="Taller de Confección ROLBAG" class="rb-about-editorial__img" loading="eager" />
                        <div class="rb-about-image-badge">
                            <span class="rb-about-image-badge__title">Taller de Confección</span>
                            <span class="rb-about-image-badge__subtitle">Santiago Centro, Chile</span>
                        </div>
                    </div>
                </div>
                <!-- Columna Derecha: Narrativa Institucional -->
                <div class="rb-about-editorial__content-col">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">HISTORIA Y TRAYECTORIA</span>
                    <h2 class="rb-h2">Confección Nacional y Desarrollo a Medida</h2>
                    
                    <p class="rb-paragraph"><strong>ROLBAG</strong> fue fundada por Rolando Álvarez en el año 2006 a partir de una sólida trayectoria en la confección artesanal de calzado, bolsos y estuches especiales. Con el tiempo, la experiencia adquirida nos permitió dar el salto al sector corporativo, respondiendo a las exigencias de clientes empresariales que requerían resguardar sus operaciones.</p>
                    
                    <p class="rb-paragraph">Incursionamos con gran éxito en la fabricación de <strong>valijas de seguridad</strong> para el transporte de valores y documentación confidencial, contando con el privilegio de atender históricamente a grandes empresas como <strong>CENCOSUD, LA POLAR, CORREOS DE CHILE, IRON MOUNTAIN y FEDEX</strong>.</p>
                    
                    <p class="rb-paragraph">Posteriormente, ampliamos nuestras soluciones hacia la protección de equipos portátiles de alto valor (capturadores de datos, tablets e impresoras industriales), sumando a la fecha <strong>más de 300 modelos de fundas desarrollados</strong> con calce milimétrico para el control de mercancías en almacenes, bodegajes y logística en todo Chile.</p>

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
                <p class="rb-section-subtitle">Conoce nuestras 5 líneas especializadas de confección nacional para hardware móvil y transporte seguro.</p>
            </div>
            
            <div class="rb-products-bento">
                <!-- Línea 01: Capturadores (Dominante 55%) -->
                <a href="/productos/fundas-para-capturadores" class="rb-bento-card rb-bento-card--main">
                    <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/capturador_zebra_principal_portada.webp' ); ?>');"></div>
                    <div class="rb-bento-card__overlay"></div>
                    <div class="rb-bento-card__content">
                        <span class="rb-badge">Línea Principal (+120 modelos)</span>
                        <h3 class="rb-bento-title">Fundas para Capturadores de Datos</h3>
                        <p class="rb-bento-desc">Confeccionadas en material impermeable de alta duración con acceso libre a comandos, teclado y puertos. Compatibles para versiones con y sin pistol grip.</p>
                        <span class="rb-bento-link">Ver ficha y modelos compatibles &rarr;</span>
                    </div>
                </a>
                
                <!-- Secundarias (Grid 2x2 45%) -->
                <div class="rb-products-bento__sidebar">
                    <!-- Línea 02: Tablets -->
                    <a href="/productos/fundas-para-tablets" class="rb-bento-card rb-bento-card--side">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/bento_tablet_1787700308321.jpg' ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 02</span>
                            <h4 class="rb-bento-sub-title">Fundas para Tablets</h4>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>

                    <!-- Línea 03: Impresoras -->
                    <a href="/productos/fundas-para-impresoras" class="rb-bento-card rb-bento-card--side">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/funda_impresora_principal_01.webp' ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 03</span>
                            <h4 class="rb-bento-sub-title">Fundas para Impresoras</h4>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>

                    <!-- Línea 04: POS Móviles -->
                    <a href="/productos/fundas-para-pos-moviles" class="rb-bento-card rb-bento-card--side">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/funda_pos_movil_principal.jpg' ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 04</span>
                            <h4 class="rb-bento-sub-title">Fundas para POS Móviles</h4>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>

                    <!-- Línea 05: Valijas -->
                    <a href="/productos/valijas-de-seguridad" class="rb-bento-card rb-bento-card--side">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/hero_valija_3d_1787700281649.jpg' ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 05</span>
                            <h4 class="rb-bento-sub-title">Valijas de Seguridad</h4>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>

                    <!-- Línea 06: Candados -->
                    <a href="/productos/candados-especiales" class="rb-bento-card rb-bento-card--side">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/bento_candado_1787700534442.jpg' ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 06</span>
                            <h4 class="rb-bento-sub-title">Candados Especiales</h4>
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
            
            <!-- ==============================================
                 SECCIÓN ESTRUCTURADA: ECOSISTEMA DE MARCAS COMPATIBLES
                 ============================================== -->
            <div class="rb-brands-ecosystem" id="marcas">
                <div class="rb-brands-ecosystem__header text-center">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">ECOSISTEMA MULTIMARCA (+300 MODELOS DESARROLLADOS)</span>
                    <h3 class="rb-h2">Marcas Compatibles y Fabricantes Soportados</h3>
                    <p class="rb-section-subtitle" style="max-width: 800px; margin: 0 auto 28px auto;">Confeccionamos fundas protectoras con calce milimétrico para el hardware industrial de los principales fabricantes del mundo.</p>
                </div>

                <!-- Filtros por Categoría de Hardware -->
                <div class="rb-brands-filter-wrap">
                    <div class="rb-brands-filter-tabs" role="tablist" aria-label="Filtrar marcas por categoría de equipamiento">
                        <button type="button" class="rb-brand-tab active" data-filter="all" role="tab" aria-selected="true">
                            <span>Todas las Marcas</span>
                            <span class="rb-brand-tab__count">22</span>
                        </button>
                        <button type="button" class="rb-brand-tab" data-filter="capturadores" role="tab" aria-selected="false">
                            <span>Capturadores & PDA</span>
                            <span class="rb-brand-tab__count">11</span>
                        </button>
                        <button type="button" class="rb-brand-tab" data-filter="tablets" role="tab" aria-selected="false">
                            <span>Tablets Industriales</span>
                            <span class="rb-brand-tab__count">6</span>
                        </button>
                        <button type="button" class="rb-brand-tab" data-filter="impresoras" role="tab" aria-selected="false">
                            <span>Impresoras Portátiles</span>
                            <span class="rb-brand-tab__count">7</span>
                        </button>
                        <button type="button" class="rb-brand-tab" data-filter="pos" role="tab" aria-selected="false">
                            <span>Terminales POS Móviles</span>
                            <span class="rb-brand-tab__count">4</span>
                        </button>
                    </div>
                </div>

                <!-- Buscador predictivo de marcas -->
                <div class="rb-brands-search-wrap">
                    <div class="rb-brands-search-inner">
                        <svg class="rb-search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                        <input type="text" id="rb-brands-search" placeholder="Buscar fabricante o modelo (ej. Zebra, Honeywell, Sunmi, Bixolon, TC58, PAX)..." aria-label="Buscar marcas o modelos compatibles">
                    </div>
                </div>

                <!-- Grid de Tarjetas de Marcas -->
                <div class="rb-brands-grid" id="rb-brands-container">
                    <!-- Zebra -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets impresoras" data-name="zebra" data-models="tc22 tc26 tc27 tc53 tc58 tc53e tc58e tc73 tc78 mc3300 mc3400 mc9400 et40 et45 et60 et80 zq200 zq320 zq511 zq521 zq630">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Líder Global Industrial</span>
                            <span class="rb-brand-models-badge">+39 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Zebra Technologies</h4>
                        <p class="rb-brand-card-item__desc">Terminales móviles de almacén, tablets rugerizadas e impresoras térmicas portátiles.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">TC58 / TC53</span>
                            <span class="rb-tag">MC9400 / MC3300</span>
                            <span class="rb-tag">ET40 / ET45</span>
                            <span class="rb-tag">ZQ630 / ZQ521</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos Zebra &rarr;</a>
                        </div>
                    </div>

                    <!-- Honeywell -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets impresoras" data-name="honeywell" data-models="ct30 ct37 ct45 ct47 ct60 eda51 eda52 eda56 ck62 ck65 ck75 eda61k cw45 rt10a eda10a rp2f rp4f lnx3">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Movilidad & Logística</span>
                            <span class="rb-brand-models-badge">+27 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Honeywell</h4>
                        <p class="rb-brand-card-item__desc">Terminales de captura intensiva, tablets ScanPal e impresoras de recibos y etiquetas.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">CT45 XP / CT47</span>
                            <span class="rb-tag">CK65 Industrial</span>
                            <span class="rb-tag">RT10A / EDA10</span>
                            <span class="rb-tag">RP4F / LNX3</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos Honeywell &rarr;</a>
                        </div>
                    </div>

                    <!-- Datalogic -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="datalogic" data-models="memor 30 memor 35 memor 20 memor 11 memor k skorpio x5 skorpio x4 falcon x4 falcon x3 lynx elf">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Captura & Distribución</span>
                            <span class="rb-brand-models-badge">17 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Datalogic</h4>
                        <p class="rb-brand-card-item__desc">Terminales para picking, logística pesada, distribución y gestión de inventario en bodega.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">Memor 30 / 35</span>
                            <span class="rb-tag">Skorpio X5 / X4</span>
                            <span class="rb-tag">Falcon X4</span>
                            <span class="rb-tag">Memor 11 / K</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos Datalogic &rarr;</a>
                        </div>
                    </div>

                    <!-- Samsung -->
                    <div class="rb-brand-card-item" data-category="tablets" data-name="samsung" data-models="galaxy tab active5 active5 5g tab s11 s11 ultra tab s10 fe tab s10 tab a">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Tablets Rugged & Enterprise</span>
                            <span class="rb-brand-models-badge">5 Líneas</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Samsung</h4>
                        <p class="rb-brand-card-item__desc">Tablets de alta resistencia IP68/MIL-STD y productividad para supervisión y terreno.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">Tab Active5 5G (8")</span>
                            <span class="rb-tag">Tab S10 FE / FE+</span>
                            <span class="rb-tag">Tab S11 Ultra</span>
                            <span class="rb-tag">Galaxy Tab A</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets' ) ); ?>" class="rb-brand-link">Ver modelos Samsung &rarr;</a>
                        </div>
                    </div>

                    <!-- Urovo -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets impresoras" data-name="urovo" data-models="dt40 dt50 dt50 5g dt66 dt630 ct48 ct58s rt30 rt40s dt610 rfid dt50p p8100 k329 k419">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Terminales, Tablets & RFID</span>
                            <span class="rb-brand-models-badge">19 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Urovo</h4>
                        <p class="rb-brand-card-item__desc">Dispositivos móviles de alta relación precio-resistencia, tablets rugerizadas e impresoras.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">DT50 5G / DT40</span>
                            <span class="rb-tag">RT40S Industrial</span>
                            <span class="rb-tag">P8100 Rugged 8"/10"</span>
                            <span class="rb-tag">K329 / K419</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos Urovo &rarr;</a>
                        </div>
                    </div>

                    <!-- Newland -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="newland" data-models="mt65 beluga iv beluga lite mt67 sei mt90 orca pro mt93 megattera mt95 kambur n7 cachalot">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Capturadores & Almacén</span>
                            <span class="rb-brand-models-badge">12 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Newland</h4>
                        <p class="rb-brand-card-item__desc">Terminales PDA con teclado físico y táctil para logística, bodegas y trabajo en terreno.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">MT90 Orca Pro II</span>
                            <span class="rb-tag">MT95 Kambur Pro</span>
                            <span class="rb-tag">MT65 Beluga IV</span>
                            <span class="rb-tag">N7 Cachalot Pro</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos Newland &rarr;</a>
                        </div>
                    </div>

                    <!-- Unitech -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets impresoras" data-name="unitech" data-models="ea530 ea660 pa768 pa768e ht330 ht380 ht730 rt112 tb170 tb85 sp320">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Movilidad & RFID</span>
                            <span class="rb-brand-models-badge">22 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Unitech</h4>
                        <p class="rb-brand-card-item__desc">Smartphones industriales, terminales con teclado numérico, tablets Windows/Android e impresoras.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">EA660 5G / EA530</span>
                            <span class="rb-tag">PA768 Rugged 6"</span>
                            <span class="rb-tag">HT730 Logística</span>
                            <span class="rb-tag">RT112 / TB170</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos Unitech &rarr;</a>
                        </div>
                    </div>

                    <!-- Bixolon -->
                    <div class="rb-brand-card-item" data-category="impresoras" data-name="bixolon" data-models="spp-c200 spp-c300 spp-r200 spp-r310 spp-r410 spp-l310 spp-l410 spp-l3000 xm7-20 xm7-30 xm7-40">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Impresión Térmica & RFID</span>
                            <span class="rb-brand-models-badge">11 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Bixolon</h4>
                        <p class="rb-brand-card-item__desc">Línea líder en impresoras móviles de 2", 3" y 4" para recibos, tickets y etiquetas con codificación RFID.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">SPP-R310 / R410</span>
                            <span class="rb-tag">SPP-L310 Etiquetas</span>
                            <span class="rb-tag">XM7-40 RFID</span>
                            <span class="rb-tag">SPP-C300 Compacta</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras' ) ); ?>" class="rb-brand-link">Ver modelos Bixolon &rarr;</a>
                        </div>
                    </div>

                    <!-- CipherLab -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="cipherlab" data-models="rk96 rs38 rs38h rs36 rk26 rk95 hera51 rs51 rs35 rk25 9700 rs50 rs31">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Terminales de Almacén</span>
                            <span class="rb-brand-models-badge">13 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">CipherLab</h4>
                        <p class="rb-brand-card-item__desc">Terminales robustos con teclado físico y táctil para centros de distribución y faenas logísticas.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">RK96 / RK95</span>
                            <span class="rb-tag">RS38 / RS38H</span>
                            <span class="rb-tag">RK26 / RK25</span>
                            <span class="rb-tag">RS35 / RS51</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos CipherLab &rarr;</a>
                        </div>
                    </div>

                    <!-- Sunmi -->
                    <div class="rb-brand-card-item" data-category="pos" data-name="sunmi" data-models="sunmi v3 plus v3e v3 mix v2 pro v2s plus v2s">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Smart POS & Cobro Móvil</span>
                            <span class="rb-brand-models-badge">7 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Sunmi</h4>
                        <p class="rb-brand-card-item__desc">Terminales inteligentes de punto de venta móvil con impresora integrada para retail y delivery.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">V3 PLUS / V3 MIX</span>
                            <span class="rb-tag">V2 PRO con Escáner</span>
                            <span class="rb-tag">V2s PLUS</span>
                            <span class="rb-tag">V3 Family</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles' ) ); ?>" class="rb-brand-link">Ver fundas Sunmi &rarr;</a>
                        </div>
                    </div>

                    <!-- PAX (Mercado Libre) -->
                    <div class="rb-brand-card-item" data-category="pos" data-name="pax mercado libre" data-models="pax a920 a920 pro a910s a77 a50 a50s a8900">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Terminales de Pago en Ruta</span>
                            <span class="rb-brand-models-badge">6 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">PAX Technology</h4>
                        <p class="rb-brand-card-item__desc">Terminales de cobro bancario y comercial más utilizados en Chile (Mercado Pago, Transbank).</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">A920 Pro</span>
                            <span class="rb-tag">A910S Alta Velocidad</span>
                            <span class="rb-tag">A77 Bolsillo</span>
                            <span class="rb-tag">A50 / A50S</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles' ) ); ?>" class="rb-brand-link">Ver fundas PAX &rarr;</a>
                        </div>
                    </div>

                    <!-- Castles Technology -->
                    <div class="rb-brand-card-item" data-category="pos" data-name="castles" data-models="castles s1e2 s1f3 s1p vega3000 mp200 saturn1000">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Cobro & Certificación Bancaria</span>
                            <span class="rb-brand-models-badge">6 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Castles Technology</h4>
                        <p class="rb-brand-card-item__desc">Terminales POS inteligentes de alta seguridad y conectividad continua para pagos electrónicos.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">S1F3 Smart POS</span>
                            <span class="rb-tag">VEGA3000</span>
                            <span class="rb-tag">Saturn1000</span>
                            <span class="rb-tag">S1P Portátil</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles' ) ); ?>" class="rb-brand-link">Ver fundas Castles &rarr;</a>
                        </div>
                    </div>

                    <!-- TUU -->
                    <div class="rb-brand-card-item" data-category="pos" data-name="tuu" data-models="tuu pro 2 pro 2 s pro tuu se mini mini s p2 p2 se">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Smart POS & Delivery</span>
                            <span class="rb-brand-models-badge">8 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">TUU</h4>
                        <p class="rb-brand-card-item__desc">Terminales de cobro táctiles compactos para comercios en terreno, delivery y restaurantes.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">TUU Pro 2 / Pro 2 S</span>
                            <span class="rb-tag">TUU Mini S</span>
                            <span class="rb-tag">TUU SE</span>
                            <span class="rb-tag">TUU P2 SE</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles' ) ); ?>" class="rb-brand-link">Ver fundas TUU &rarr;</a>
                        </div>
                    </div>

                    <!-- Sewoo -->
                    <div class="rb-brand-card-item" data-category="impresoras" data-name="sewoo" data-models="lk-p25 lk-p34 lk-p41 lk-p43 lk-p21 lk-p400">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Impresoras de Recibos</span>
                            <span class="rb-brand-models-badge">6 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Sewoo</h4>
                        <p class="rb-brand-card-item__desc">Impresoras portátiles de 2", 3" y 4" para recibos, tickets, documentos de entrega y etiquetas.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">LK-P43 / LK-P41 (4")</span>
                            <span class="rb-tag">LK-P34 (3")</span>
                            <span class="rb-tag">LK-P25 / LK-P21</span>
                            <span class="rb-tag">LK-P400 Logística</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras' ) ); ?>" class="rb-brand-link">Ver modelos Sewoo &rarr;</a>
                        </div>
                    </div>

                    <!-- Star Micronics -->
                    <div class="rb-brand-card-item" data-category="impresoras" data-name="star micronics" data-models="l200 sm-l300 sm-s230i sm-t300 sm-t300i sm-t400i">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Impresión en Terreno</span>
                            <span class="rb-brand-models-badge">5 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Star Micronics</h4>
                        <p class="rb-brand-card-item__desc">Impresión portátil ultra liviana y resistente para facturación móvil y comprobantes de ruta.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">SM-T300 / T300i (3")</span>
                            <span class="rb-tag">SM-T400i (4")</span>
                            <span class="rb-tag">SM-L300</span>
                            <span class="rb-tag">SM-S230i Compacta</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras' ) ); ?>" class="rb-brand-link">Ver modelos Star &rarr;</a>
                        </div>
                    </div>

                    <!-- Wepoy -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="wepoy" data-models="wepoy dt30 dt40 dt50b dt50s ct48 dt50u ct58s rt40 dt630 dt610 dt66">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Captura Intensiva & RFID</span>
                            <span class="rb-brand-models-badge">11 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Wepoy</h4>
                        <p class="rb-brand-card-item__desc">Terminales PDA industriales tipo smartphone para logística, inventarios y lectura masiva RFID.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">DT50S / DT50B</span>
                            <span class="rb-tag">CT48 / CT58S</span>
                            <span class="rb-tag">RT40 Industrial</span>
                            <span class="rb-tag">DT50U / DT610 RFID</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos Wepoy &rarr;</a>
                        </div>
                    </div>

                    <!-- Chainway -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets" data-name="chainway" data-models="chainway c61 c63 c66 c70 c71 c72 c75 c90 c6000 mc21 mc50 mc51 mc62 mc95 p100 p80">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">PDA Industrial, 5G & RFID</span>
                            <span class="rb-brand-models-badge">22 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Chainway</h4>
                        <p class="rb-brand-card-item__desc">Terminales de alta tecnología con opciones de escaneo de largo alcance, RFID UHF y tablets rugged.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">C66 / C61 Teclado</span>
                            <span class="rb-tag">C72 / C75 Impresora</span>
                            <span class="rb-tag">MC50 / MC51 5G</span>
                            <span class="rb-tag">P100 / P80 Tablets</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos Chainway &rarr;</a>
                        </div>
                    </div>

                    <!-- Bluebird -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="bluebird" data-models="bluebird s70 s70 explosion proof ef551 ef550r ef550 ef501 ef501r bp30 ek430 vx500 vf550 hf550x">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Terminales & Anti-Explosión</span>
                            <span class="rb-brand-models-badge">13 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Bluebird</h4>
                        <p class="rb-brand-card-item__desc">Terminales empresariales coreanos de alta fiabilidad, versiones ATEX para ambientes exigentes y mPOS.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">EF551 / EF550R</span>
                            <span class="rb-tag">S70 Anti-Explosión</span>
                            <span class="rb-tag">VX500 PTT</span>
                            <span class="rb-tag">BP30 / EK430</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos Bluebird &rarr;</a>
                        </div>
                    </div>

                    <!-- M3 Mobile -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="m3 mobile" data-models="m3 mobile sm30 sm20 sm20f sm15x sl20 sl20k sl20p ul20 ul20f ul20fx ul20x ul30f sm15">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Cámaras de Frío & Logística</span>
                            <span class="rb-brand-models-badge">17 Modelos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">M3 Mobile</h4>
                        <p class="rb-brand-card-item__desc">Especialistas en terminales industriales para faenas en frío extremo, logística pesada y bodegaje.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">SM20F Congelados</span>
                            <span class="rb-tag">UL20X / UL30F Frío</span>
                            <span class="rb-tag">SL20K con Teclado</span>
                            <span class="rb-tag">SM30 Smartphone</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-brand-link">Ver modelos M3 &rarr;</a>
                        </div>
                    </div>

                    <!-- Panasonic -->
                    <div class="rb-brand-card-item" data-category="tablets capturadores" data-name="panasonic toughbook" data-models="panasonic toughbook fz-g1 fz-g2 fz-n1 fz-t1">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Línea Toughbook Rugged</span>
                            <span class="rb-brand-models-badge">Modelos Rugged</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Panasonic Toughbook</h4>
                        <p class="rb-brand-card-item__desc">Tablets y terminales de resistencia militar extrema para industrias de minería, energía y transporte.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">Toughbook Tablets</span>
                            <span class="rb-tag">Handhelds FZ</span>
                            <span class="rb-tag">Minería & Terreno</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets' ) ); ?>" class="rb-brand-link">Ver modelos Panasonic &rarr;</a>
                        </div>
                    </div>

                    <!-- Epson -->
                    <div class="rb-brand-card-item" data-category="impresoras" data-name="epson" data-models="epson tm-p80 tm-p20 tm-p60">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Facturación & Boleta Móvil</span>
                            <span class="rb-brand-models-badge">Línea TM-P</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Epson</h4>
                        <p class="rb-brand-card-item__desc">Impresoras térmicas portátiles para emisión inmediata de comprobantes y recibos móviles en terreno.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">TM-P80 (3")</span>
                            <span class="rb-tag">TM-P20 (2")</span>
                            <span class="rb-tag">Boleta Electrónica</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras' ) ); ?>" class="rb-brand-link">Ver modelos Epson &rarr;</a>
                        </div>
                    </div>

                    <!-- Otras Marcas Especializadas -->
                    <div class="rb-brand-card-item" data-category="impresoras capturadores" data-name="brother barpos idprt point mobile handheld idata" data-models="brother barpos t3 idprt imove 3 pro unitech sp320 point mobile handheld idata">
                        <div class="rb-brand-card-item__top">
                            <span class="rb-brand-badge-cat">Marcas Especializadas</span>
                            <span class="rb-brand-models-badge">+10 Fabricantes</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Otras Marcas</h4>
                        <p class="rb-brand-card-item__desc">Fabricamos fundas para Barpos, Brother, iDPRT, Point Mobile, Handheld, iData, Motorola y Symbol.</p>
                        <div class="rb-brand-card-item__tags">
                            <span class="rb-tag">BARPOS T3</span>
                            <span class="rb-tag">iDPRT iMOVE 3 Pro</span>
                            <span class="rb-tag">Point Mobile</span>
                            <span class="rb-tag">Symbol / Motorola</span>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-brand-link">Explorar catálogo &rarr;</a>
                        </div>
                    </div>
                </div>

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
