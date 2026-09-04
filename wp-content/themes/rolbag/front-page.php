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
                            <span class="rb-hero-badge-val">+28</span>
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
                <p class="rb-section-subtitle">Conoce nuestras 6 líneas especializadas de confección nacional para hardware móvil y transporte seguro.</p>
            </div>
            
            <div class="rb-products-bento-v2">
                <!-- Fila Superior: Línea Insignia (2/3) + Tablets (1/3) -->
                <div class="rb-bento-row rb-bento-row--top">
                    <!-- Línea 01: Capturadores (Dominante) -->
                    <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-bento-card rb-bento-card--lead">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/capturador_zebra_principal_portada.webp' ); ?>');"></div>
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
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/bento_tablet_1787700308321.jpg' ); ?>');"></div>
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
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/funda_impresora_principal_01.webp' ); ?>');"></div>
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
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/funda_pos_movil_principal.jpg' ); ?>');"></div>
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
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/hero_valija_3d_1787700281649.jpg' ); ?>');"></div>
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
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/bento_candado_1787700534442.jpg' ); ?>');"></div>
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
                        <input type="text" id="rb-brands-search" placeholder="Buscar fabricante (ej. Zebra, Honeywell, Sunmi, Bixolon, Samsung, PAX)..." aria-label="Buscar marcas o fabricantes compatibles">
                    </div>
                </div>

                <!-- Grid de Tarjetas de Marcas -->
                <div class="rb-brands-grid" id="rb-brands-container">
                    <!-- Zebra -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets impresoras" data-name="zebra" style="--brand-color: #16191F; --brand-color-light: rgba(22, 25, 31, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16L6 20h14"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Líder Global Industrial</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Zebra Technologies</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Líneas compatibles:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-zebra' ) ); ?>" class="rb-brand-line-pill">Capturadores &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets/#marca-zebra' ) ); ?>" class="rb-brand-line-pill">Tablets &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-zebra' ) ); ?>" class="rb-brand-line-pill">Impresoras &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-zebra' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Honeywell -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets impresoras" data-name="honeywell" style="--brand-color: #EE3124; --brand-color-light: rgba(238, 49, 36, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4v16M19 4v16M5 12h14"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Movilidad & Logística</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Honeywell</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Líneas compatibles:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-honeywell' ) ); ?>" class="rb-brand-line-pill">Capturadores &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets/#marca-honeywell' ) ); ?>" class="rb-brand-line-pill">Tablets &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-honeywell' ) ); ?>" class="rb-brand-line-pill">Impresoras &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-honeywell' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Datalogic -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="datalogic" style="--brand-color: #E2001A; --brand-color-light: rgba(226, 0, 26, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 7V5a2 2 0 0 1 2-2h2M17 3h2a2 2 0 0 1 2 2v2M21 17v2a2 2 0 0 1-2 2h-2M7 21H5a2 2 0 0 1-2-2v-2"/><circle cx="12" cy="12" r="3"/><path d="M7 12h2M15 12h2"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Captura & Almacén</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Datalogic</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-datalogic' ) ); ?>" class="rb-brand-line-pill">Capturadores de Datos &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-datalogic' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Samsung -->
                    <div class="rb-brand-card-item" data-category="tablets" data-name="samsung" style="--brand-color: #1428A0; --brand-color-light: rgba(20, 40, 160, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="3"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Tablets Rugged & Enterprise</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Samsung</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets/#marca-samsung' ) ); ?>" class="rb-brand-line-pill">Tablets Industriales &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets/#marca-samsung' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Urovo -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets impresoras" data-name="urovo" style="--brand-color: #FF6600; --brand-color-light: rgba(255, 102, 0, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Terminales, Tablets & RFID</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Urovo</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Líneas compatibles:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-urovo' ) ); ?>" class="rb-brand-line-pill">Capturadores &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets/#marca-urovo' ) ); ?>" class="rb-brand-line-pill">Tablets &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-urovo' ) ); ?>" class="rb-brand-line-pill">Impresoras &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-urovo' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Newland -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="newland" style="--brand-color: #0072CE; --brand-color-light: rgba(0, 114, 206, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19L19 4M8 20l12-12M4 12L12 4"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Capturadores & Almacén</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Newland</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-newland' ) ); ?>" class="rb-brand-line-pill">Capturadores de Datos &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-newland' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Unitech -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets impresoras" data-name="unitech" style="--brand-color: #005BAC; --brand-color-light: rgba(0, 91, 172, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4v10a6 6 0 0 0 12 0V4"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Movilidad, Tablets & RFID</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Unitech</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Líneas compatibles:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-unitech' ) ); ?>" class="rb-brand-line-pill">Capturadores &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets/#marca-unitech' ) ); ?>" class="rb-brand-line-pill">Tablets &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-unitech' ) ); ?>" class="rb-brand-line-pill">Impresoras &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-unitech' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Bixolon -->
                    <div class="rb-brand-card-item" data-category="impresoras" data-name="bixolon" style="--brand-color: #EA5404; --brand-color-light: rgba(234, 84, 4, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Impresión Térmica & RFID</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Bixolon</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-bixolon' ) ); ?>" class="rb-brand-line-pill">Impresoras Portátiles &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-bixolon' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- CipherLab -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="cipherlab" style="--brand-color: #004F9F; --brand-color-light: rgba(0, 79, 159, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 2v20M17 5H9.5a4.5 4.5 0 0 0 0 9H14a4.5 4.5 0 0 1 0 9H7"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Terminales de Almacén</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">CipherLab</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-cipherlab' ) ); ?>" class="rb-brand-line-pill">Capturadores de Datos &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-cipherlab' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Sunmi -->
                    <div class="rb-brand-card-item" data-category="pos" data-name="sunmi" style="--brand-color: #FF5E00; --brand-color-light: rgba(255, 94, 0, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="3"/><line x1="3" y1="10" x2="21" y2="10"/><path d="M7 15h2M12 15h2"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Smart POS & Cobro Móvil</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Sunmi</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles/#marca-sunmi' ) ); ?>" class="rb-brand-line-pill">Terminales POS Móviles &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles/#marca-sunmi' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- PAX (Mercado Libre) -->
                    <div class="rb-brand-card-item" data-category="pos" data-name="pax mercado libre" style="--brand-color: #0066B3; --brand-color-light: rgba(0, 102, 179, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/><circle cx="7" cy="15" r="1"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Terminales de Pago en Ruta</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">PAX Technology</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles/#marca-pax-mercado-libre' ) ); ?>" class="rb-brand-line-pill">Terminales POS Móviles &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles/#marca-pax-mercado-libre' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Castles Technology -->
                    <div class="rb-brand-card-item" data-category="pos" data-name="castles" style="--brand-color: #C8102E; --brand-color-light: rgba(200, 16, 46, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Cobro & Certificación Bancaria</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Castles Technology</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles/#marca-castles' ) ); ?>" class="rb-brand-line-pill">Terminales POS Móviles &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles/#marca-castles' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- TUU -->
                    <div class="rb-brand-card-item" data-category="pos" data-name="tuu" style="--brand-color: #4F46E5; --brand-color-light: rgba(79, 70, 229, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="4" x2="12" y2="20"/><line x1="4" y1="4" x2="20" y2="4"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Smart POS & Delivery</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">TUU</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles/#marca-tuu' ) ); ?>" class="rb-brand-line-pill">Terminales POS Móviles &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles/#marca-tuu' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Sewoo -->
                    <div class="rb-brand-card-item" data-category="impresoras" data-name="sewoo" style="--brand-color: #00629B; --brand-color-light: rgba(0, 98, 155, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Impresoras de Recibos</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Sewoo</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-sewoo' ) ); ?>" class="rb-brand-line-pill">Impresoras Portátiles &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-sewoo' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Star Micronics -->
                    <div class="rb-brand-card-item" data-category="impresoras" data-name="star micronics" style="--brand-color: #004B97; --brand-color-light: rgba(0, 75, 151, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Facturación en Terreno</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Star Micronics</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-star-micronics' ) ); ?>" class="rb-brand-line-pill">Impresoras Portátiles &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-star-micronics' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Wepoy -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="wepoy" style="--brand-color: #0093DD; --brand-color-light: rgba(0, 147, 221, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Captura Intensiva & RFID</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Wepoy</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-wepoy' ) ); ?>" class="rb-brand-line-pill">Capturadores de Datos &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-wepoy' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Chainway -->
                    <div class="rb-brand-card-item" data-category="capturadores tablets" data-name="chainway" style="--brand-color: #0A60C2; --brand-color-light: rgba(10, 96, 194, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">PDA Industrial & RFID</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Chainway</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Líneas compatibles:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-chainway' ) ); ?>" class="rb-brand-line-pill">Capturadores &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets/#marca-chainway' ) ); ?>" class="rb-brand-line-pill">Tablets &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-chainway' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Bluebird -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="bluebird" style="--brand-color: #0082C8; --brand-color-light: rgba(0, 130, 200, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 16v1a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v1"/><path d="M18 8h4a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-4"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Terminales Empresariales</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Bluebird</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-bluebird' ) ); ?>" class="rb-brand-line-pill">Capturadores de Datos &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-bluebird' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- M3 Mobile -->
                    <div class="rb-brand-card-item" data-category="capturadores" data-name="m3 mobile" style="--brand-color: #0054A6; --brand-color-light: rgba(0, 84, 166, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16M4 4h16M4 12h16"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Cámaras de Frío & Logística</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">M3 Mobile</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-m3-mobile' ) ); ?>" class="rb-brand-line-pill">Capturadores de Datos &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores/#marca-m3-mobile' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Panasonic -->
                    <div class="rb-brand-card-item" data-category="tablets capturadores" data-name="panasonic toughbook" style="--brand-color: #003896; --brand-color-light: rgba(0, 56, 150, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Línea Toughbook Rugged</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Panasonic Toughbook</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Líneas compatibles:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets/#marca-panasonic' ) ); ?>" class="rb-brand-line-pill">Tablets Rugged &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets/#marca-panasonic' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Epson -->
                    <div class="rb-brand-card-item" data-category="impresoras" data-name="epson" style="--brand-color: #003399; --brand-color-light: rgba(0, 51, 153, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><rect x="6" y="14" width="12" height="8"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Facturación & Boleta Móvil</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Epson</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Línea compatible:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-epson' ) ); ?>" class="rb-brand-line-pill">Impresoras Portátiles &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras/#marca-epson' ) ); ?>" class="rb-brand-main-btn">
                                <span>Ver Ficha Técnica</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Otras Marcas Especializadas -->
                    <div class="rb-brand-card-item" data-category="impresoras capturadores" data-name="brother barpos idprt point mobile handheld idata" style="--brand-color: #00A3E0; --brand-color-light: rgba(0, 163, 224, 0.08);">
                        <div class="rb-brand-card-item__top">
                            <div class="rb-brand-emblem" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                            </div>
                            <span class="rb-brand-badge-cat">Fabricantes Especializados</span>
                        </div>
                        <h4 class="rb-brand-card-item__title">Otras Marcas Especializadas</h4>
                        <div class="rb-brand-lines-wrap">
                            <span class="rb-brand-lines-label">Fabricantes soportados:</span>
                            <div class="rb-brand-line-pills">
                                <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-brand-line-pill">Barpos &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-brand-line-pill">Brother &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-brand-line-pill">iDPRT &rarr;</a>
                                <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-brand-line-pill">Point Mobile &rarr;</a>
                            </div>
                        </div>
                        <div class="rb-brand-card-item__action">
                            <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-brand-main-btn">
                                <span>Explorar Catálogo</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Botón Expansor para Mobile (Evita fatiga de scroll de 22 tarjetas) -->
                <div class="rb-brands-mobile-toggle-wrap">
                    <button type="button" id="rb-brands-toggle-mobile-btn" class="rb-brands-mobile-btn" aria-expanded="false">
                        <span class="rb-brands-toggle-text">Ver todas las marcas compatibles (+14 fabricantes)</span>
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
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
                            <div class="rb-qq-pills" role="radiogroup" aria-label="Seleccionar Línea">
                                <button type="button" class="rb-qq-pill active" data-line="Fundas para Capturadores">Capturadores / PDA</button>
                                <button type="button" class="rb-qq-pill" data-line="Fundas para Tablets">Tablets Industriales</button>
                                <button type="button" class="rb-qq-pill" data-line="Fundas para Impresoras">Impresoras Portátiles</button>
                                <button type="button" class="rb-qq-pill" data-line="Fundas para POS Móviles">POS Móviles</button>
                                <button type="button" class="rb-qq-pill" data-line="Valijas de Seguridad">Valijas de Seguridad</button>
                                <button type="button" class="rb-qq-pill" data-line="Candados Especiales">Candados Especiales</button>
                            </div>
                            <input type="hidden" id="rb-qq-selected-line" value="Fundas para Capturadores">
                        </div>

                        <div class="rb-qq-grid-fields">
                            <div class="rb-qq-field">
                                <label for="rb-qq-model" class="rb-qq-label"><span class="rb-qq-step-num">2</span> Marca, Modelo o Medidas:</label>
                                <input type="text" id="rb-qq-model" placeholder="Ej: Zebra TC58 con pistol grip / Valija 40L..." class="rb-qq-input">
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
