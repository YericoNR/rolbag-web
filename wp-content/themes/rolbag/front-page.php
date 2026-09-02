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
                                <span class="rb-showcase-chip">Valijas de Seguridad</span>
                            </div>
                        </div>
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

                    <!-- Línea 04: Valijas -->
                    <a href="/productos/valijas-de-seguridad" class="rb-bento-card rb-bento-card--side">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/hero_valija_3d_1787700281649.jpg' ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 04</span>
                            <h4 class="rb-bento-sub-title">Valijas de Seguridad</h4>
                            <span class="rb-bento-link">Ver modelos &rarr;</span>
                        </div>
                    </a>

                    <!-- Línea 05: Candados -->
                    <a href="/productos/candados-especiales" class="rb-bento-card rb-bento-card--side">
                        <div class="rb-bento-card__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/bento_candado_1787700534442.jpg' ); ?>');"></div>
                        <div class="rb-bento-card__overlay"></div>
                        <div class="rb-bento-card__content">
                            <span class="rb-badge rb-badge--light">Línea 05</span>
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
            
            <!-- Resumen de Marcas y Compatibilidad Técnica -->
            <div class="rb-compatibility-box">
                <h3 class="rb-compat-title">Marcas y Compatibilidad Desarrollada</h3>
                <p class="text-center rb-text-muted" style="margin-bottom: 24px; font-size: 0.95rem;">Diseñamos fundas a la medida de los principales fabricantes de tecnología corporativa móvil:</p>
                <div class="rb-compat-grid">
                    <div class="rb-compat-card">
                        <span class="rb-compat-cat">Capturadores / Terminales</span>
                        <p class="rb-compat-brands">Zebra, Honeywell, Datalogic, Urovo, Newland, Unitech, CipherLab, Wepoy, Chainway, Bluebird, M3 Mobile, Sunmi, Motorola, Symbol.</p>
                    </div>
                    <div class="rb-compat-card">
                        <span class="rb-compat-cat">Tablets Industriales</span>
                        <p class="rb-compat-brands">Samsung Galaxy Tab Active, Zebra ET40 / ET45 / ET60 / ET80, Honeywell RT10 / EDA10, Urovo, Unitech, Chainway, Panasonic Toughbook, Lenovo.</p>
                    </div>
                    <div class="rb-compat-card">
                        <span class="rb-compat-cat">Impresoras Portátiles</span>
                        <p class="rb-compat-brands">Zebra ZQ Series, Honeywell RP / LNX, Bixolon SPP / XM7, Sewoo LK-P Series, Star Micronics, Epson, Barpos, iDPRT.</p>
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
