/**
 * ROLBAG Master Bilingual Engine (Spanish <-> English)
 * 100% Full-Site Content Translation: Headers, Heros, Paragraphs, Checklists,
 * Bento Cards, Engineering Specs, Benefits, Operational Sectors, Quote Guide,
 * Forms, Placeholders, Compatibility Badges, Internal Pages, and Footer.
 */

(function() {
    'use strict';

    // Selective DOM block replacements for Landing and Main Pages
    const LANDING_TRANSLATIONS = {
        es: {
            // Hero
            hero_eyebrow: 'PROTECCIÓN & CONTINUIDAD OPERATIVA EN TODO CHILE',
            hero_h1: 'Soluciones de protección para equipos portátiles y valijas de seguridad',
            hero_lead: 'Fabricamos fundas, valijas y accesorios industriales a medida. Desde 2006 asegurando la protección del hardware crítico en almacenes, bodegajes y operaciones logísticas a lo largo de todo Chile.',
            hero_btn_products: 'Ver Líneas de Productos',
            hero_btn_quote: 'Solicitar Cotización',

            // About / Trayectoria
            about_eyebrow: 'HISTORIA Y TRAYECTORIA',
            about_h2: 'Confección Nacional y Desarrollo a Medida',
            about_p1: '<strong>ROLBAG</strong> fue fundada por Rolando Álvarez en el año 2006 a partir de una sólida trayectoria en la confección artesanal de calzado, bolsos y estuches especiales. Con el tiempo, la experiencia adquirida nos permitió dar el salto al sector corporativo, respondiendo a las exigencias de clientes empresariales que requerían resguardar sus operaciones.',
            about_p2: 'Incursionamos con gran éxito en la fabricación de <strong>valijas de seguridad</strong> para el transporte de valores y documentación confidencial, contando con el privilegio de atender históricamente a grandes empresas como <strong>CENCOSUD, LA POLAR, CORREOS DE CHILE, IRON MOUNTAIN y FEDEX</strong>.',
            about_p3: 'Posteriormente, ampliamos nuestras soluciones hacia la protección de equipos portátiles de alto valor (capturadores de datos, tablets e impresoras industriales), sumando a la fecha <strong>más de 300 modelos de fundas desarrollados</strong> con calce milimétrico para el control de mercancías en almacenes, bodegajes y logística en todo Chile.',
            about_stat1_num: '+28',
            about_stat1_label: 'Años de experiencia en el rubro',
            about_stat2_num: '+300',
            about_stat2_label: 'Modelos de fundas desarrollados',
            about_mision: '<strong class="rb-mv-title">Nuestra Misión:</strong><p class="rb-mv-text">Confeccionar productos exclusivos que tengan una mayor durabilidad y calidad para proteger la inversión de nuestros clientes.</p>',
            about_vision: '<strong class="rb-mv-title">Nuestra Visión:</strong><p class="rb-mv-text">Satisfacer los requerimientos especiales y exclusivos que requieran las empresas, liderando el desarrollo de fundas y accesorios a medida.</p>',
            about_btn_more: 'Conocer más sobre la empresa &rarr;',

            // Engineering / Materiales
            eng_eyebrow: 'INGENIERÍA APLICADA',
            eng_h2: 'Transformamos la seguridad de los equipos en continuidad operativa',
            eng_lead: 'Diseño funcional orientado a resguardar la tecnología móvil y evitar cuellos de botella por hardware inhabilitado en almacenes y bodegas.',
            eng_item1_h3: 'Ingeniería Anatómica a Medida',
            eng_item1_p: 'Cada funda se diseña según el contorno exacto del equipo. Permite una adecuada manipulación de comandos, botones, gatillos (pistol grip), pantallas táctiles y puertos de conexión, sin entorpecer el escaneo láser.',
            eng_item2_h3: 'Materiales de Alta Durabilidad',
            eng_item2_p: 'Confección en telas sintéticas impermeables de alta resistencia (Cordura / Nylon balístico), capas interiores de espuma EVA de alta densidad y láminas plásticas estructurales diseñadas para soportar impactos y abrasión continua.',
            eng_item3_h3: 'Resguardo Operacional Corporativo',
            eng_item3_p: 'Orientados a operaciones intensivas en almacenes, bodegajes y logística. Nuestras soluciones disminuyen radicalmente la tasa de fallas por caídas, protegiendo terminales costosos y asegurando turnos sin interrupciones.',

            // Materials Specs
            mat_eyebrow: 'COMPOSICIÓN TÉCNICA',
            mat_h2: 'Materiales para la máxima exigencia',
            mat_p: 'Utilizamos insumos técnicos testeados para resistir el trato riguroso de operarios y condiciones de almacenaje.',
            mat_spec1_label: 'Capa Exterior',
            mat_spec1_desc: 'Telas sintéticas repelentes al agua de alta resistencia al roce y desgarro, con costuras industriales de hilo continuo reforzado.',
            mat_spec2_label: 'Núcleo Amortiguador',
            mat_spec2_desc: 'Espuma EVA termoformada de alta densidad y forros acolchados interiores que absorben la energía de impactos y caídas directas.',
            mat_spec3_label: 'Visibilidad y Estructura',
            mat_spec3_desc: 'Láminas de PVC transparente de alto calibre para visualización nítida y protección de pantallas, combinadas con placas internas de polímero indeformable.',
            mat_spec4_label: 'Cintas y Herrajes',
            mat_spec4_desc: 'Cintas tejidas de nylon de 30 mm y 40 mm con terminales plásticos de alto impacto (tipo tip-top) o metálicos regulables para porte cómodo a la cintura o al hombro.',

            // Benefits Table
            ben_eyebrow: 'IMPACTO OPERACIONAL',
            ben_h2: 'Beneficios comprobados para tu operación',
            ben1_h4: 'Extensión de Vida Útil',
            ben1_p: 'Protege los equipos de rayones, caídas e impactos, manteniéndolos en óptimo estado durante años de servicio.',
            ben2_h4: 'Reducción de Costos',
            ben2_p: 'Disminuye drásticamente los gastos recurrentes por reemplazo de carcasas rotas, pantallas trizadas y servicio técnico.',
            ben3_h4: 'Ergonomía Operativa',
            ben3_p: 'Correas cosidas y regulables que facilitan el porte continuo durante jornadas de 8 a 12 horas, previniendo caídas accidentales.',
            ben4_h4: 'Disponibilidad 24/7',
            ben4_p: 'Garantiza que el personal cuente siempre con sus herramientas de captura activas, evitando retrasos en despacho e inventario.',

            // Products Bento
            prod_eyebrow: 'CATÁLOGO OFICIAL',
            prod_h2: 'Líneas de Productos ROLBAG',
            prod_subtitle: 'Conoce nuestras 5 líneas especializadas de confección nacional para hardware móvil y transporte seguro.',
            bento_badge_main: 'Línea Principal (+120 modelos)',
            bento_title_main: 'Fundas para Capturadores de Datos',
            bento_desc_main: 'Confeccionadas en material impermeable de alta duración con acceso libre a comandos, teclado y puertos. Compatibles para versiones con y sin pistol grip.',
            bento_link_main: 'Ver ficha y modelos compatibles &rarr;',
            bento_sub1: 'Fundas para Tablets',
            bento_sub2: 'Fundas para Impresoras',
            bento_sub3: 'Valijas de Seguridad',
            bento_sub4: 'Candados Especiales',
            bento_all_btn: 'Ver Catálogo Completo de Líneas &rarr;',

            // Custom Process
            proc_eyebrow: 'SOLUCIONES EXCLUSIVAS',
            proc_h2: '¿No encuentras una funda para tu equipo?',
            proc_highlight: 'La desarrollamos a la medida exacta de tu empresa.',
            proc_desc: 'Confeccionamos productos totalmente exclusivos según la aprobación del cliente. Desarrollamos fundas especiales para cualquier modelo nuevo o accesorios de sujeción (ejemplo: soportes para grúa horquilla).',
            step1_title: 'Cuéntanos',
            step1_desc: 'Indica la marca, modelo de hardware, códigos y cantidad de unidades requeridas.',
            step2_title: 'Analizamos',
            step2_desc: 'Evaluamos la ergonomía de uso, manipulación de puertos y materiales sintéticos recomendados.',
            step3_title: 'Desarrollamos',
            step3_desc: 'Patronaje a medida y confección de muestra física para prueba de calce y aprobación técnica.',
            step4_title: 'Cotizamos',
            step4_desc: 'Enviamos la propuesta formal con valores escalonados por volumen y tiempos de entrega.',
            proc_notice: '<strong>Requisito para modelos nuevos:</strong> Para modelos nuevos e independientes de la marca, es necesario disponer del equipo físico durante un lapso de <strong>48 horas</strong> para su respectivo diseño, patronaje y posterior aprobación.',

            // Sectores
            sec_eyebrow: 'APLICACIONES REALES',
            sec_h2: 'Sectores de Operación',
            sec_subtitle: 'Nuestras fundas y valijas operan diariamente en los entornos de trabajo intensivo en todo Chile.',
            sec_tab1_title: 'Almacenes',
            sec_tab1_sub: 'Control interno de mercancía y lectura en altura.',
            sec_tab2_title: 'Bodegajes',
            sec_tab2_sub: 'Picking intensivo y manipulación en turnos continuos.',
            sec_tab3_title: 'Logística y Distribución',
            sec_tab3_sub: 'Despacho en terreno, transporte y cross docking.',
            compat_box_title: 'Marcas y Compatibilidad Desarrollada',
            compat_box_desc: 'Diseñamos fundas a la medida de los principales fabricantes de tecnología corporativa móvil:',
            compat_cat1: 'Capturadores / Terminales',
            compat_cat2: 'Tablets Industriales',
            compat_cat3: 'Impresoras Portátiles',

            // Quote Guide
            qg_eyebrow: 'GUÍA DE COTIZACIÓN',
            qg_h2: 'Información Requerida para tu Solicitud',
            qg_subtitle: 'Para entregarte una respuesta ágil y precisa, por favor considera los siguientes datos según tu requerimiento:',
            qg_card1_badge: 'Fundas Protectoras',
            qg_card1_title: 'Para cotizar Fundas',
            qg_c1_li1: '<strong>Marca y Modelo:</strong> Indicación exacta del equipo (ej. Zebra TC58, Honeywell CT45, Samsung Active5).',
            qg_c1_li2: '<strong>Códigos / Accesorios:</strong> Especificar si cuenta con accesorio pistol grip (gatillo), batería extendida o cuna de carga.',
            qg_c1_li3: '<strong>Cantidad solicitada:</strong> Volumen estimado de unidades requeridas.',
            qg_c1_li4: '<strong>Tiempo de entrega:</strong> Plazo aproximado objetivo de implementación.',
            qg_c1_li5: '<strong>Modelo nuevo:</strong> Se requiere disponer del equipo durante 48 horas para su diseño y posterior aprobación.',
            qg_card2_badge: 'Seguridad',
            qg_card2_title: 'Para cotizar Valijas',
            qg_c2_li1: '<strong>Medidas en Litros / Volumen:</strong> Dimensiones exteriores requeridas (Ancho, Largo y Alto en cm).',
            qg_c2_li2: '<strong>Cantidad solicitada:</strong> Número de valijas para confección.',
            qg_c2_li3: '<strong>Color corporativo:</strong> Preferencia de color de tela y cierres.',
            qg_c2_li4: '<strong>Logotipo corporativo:</strong> Formato en alta resolución (vectorial o imagen nítida).',
            qg_c2_li5: '<strong>Valijas especiales:</strong> Disponibles bajo previo acuerdo: valija sobre, valija con carro o compartimento para GPS.',

            // Final CTA
            cta_eyebrow: 'ATENCIÓN DIRECTA',
            cta_h2: 'Asegura la continuidad de tu operación',
            cta_lead: 'Comunícate hoy con nuestro equipo comercial para evaluar la solución de protección adecuada para tu empresa.',
            cta_btn_quote: 'Solicitar Cotización Formal',
            cta_btn_wa: 'WhatsApp Comercial Directo',

            // Footer
            footer_desc: 'Fabricación técnica nacional de fundas industriales y valijas de seguridad a medida para empresas en todo Chile.',
            footer_col1: 'Navegación',
            footer_col2: 'Líneas de Productos',
            footer_col3: 'Contacto Directo',
            footer_rights: 'Todos los derechos reservados.',
            footer_terms: 'Términos y Condiciones',
            footer_privacy: 'Política de Privacidad'
        },

        en: {
            // Hero
            hero_eyebrow: 'PROTECTION & OPERATIONAL CONTINUITY ACROSS CHILE',
            hero_h1: 'Protective Solutions for Mobile Enterprise Devices & Security Transit Bags',
            hero_lead: 'We manufacture custom industrial cases, security bags, and technical accessories. Since 2006 protecting critical hardware in warehouses, distribution centers, and logistics across Chile.',
            hero_btn_products: 'Explore Product Lines',
            hero_btn_quote: 'Request a Quote',

            // About / Trayectoria
            about_eyebrow: 'HERITAGE & EXPERIENCE',
            about_h2: 'National Craftsmanship and Custom Engineering',
            about_p1: '<strong>ROLBAG</strong> was founded by Rolando Álvarez in 2006, rooted in extensive artisanal craftsmanship in custom footwear, leather goods, and specialized cases. Over time, our deep manufacturing expertise enabled a strategic transition into the enterprise sector, meeting the demanding standards of corporate clients seeking to safeguard critical operations.',
            about_p2: 'We achieved significant success manufacturing <strong>security transit bags</strong> for cash-in-transit and confidential document transport, privileged to serve premier national and international corporations including <strong>CENCOSUD, LA POLAR, CORREOS DE CHILE, IRON MOUNTAIN, and FEDEX</strong>.',
            about_p3: 'Subsequently, we expanded our portfolio into protecting high-value mobile enterprise hardware (mobile computers, barcode scanners, rugged tablets, and portable thermal printers), currently boasting <strong>over 300 custom-engineered case models</strong> with millimeter precision for warehouse inventory, fulfillment, and logistics nationwide.',
            about_stat1_num: '+28',
            about_stat1_label: 'Years of industry manufacturing experience',
            about_stat2_num: '+300',
            about_stat2_label: 'Custom case models developed',
            about_mision: '<strong class="rb-mv-title">Our Mission:</strong><p class="rb-mv-text">To manufacture exclusive protective products engineered for superior durability and quality, safeguarding our clients\' enterprise hardware investments.</p>',
            about_vision: '<strong class="rb-mv-title">Our Vision:</strong><p class="rb-mv-text">To satisfy specialized and custom enterprise requirements, leading the industry in tailored protective cases and industrial accessories.</p>',
            about_btn_more: 'Learn more about our company &rarr;',

            // Engineering / Materiales
            eng_eyebrow: 'APPLIED ENGINEERING',
            eng_h2: 'Transforming Hardware Safety into Uninterrupted Operational Continuity',
            eng_lead: 'Functional industrial design engineered to shield mobile technology and eliminate bottlenecks caused by disabled hardware in warehouses and fulfillment centers.',
            eng_item1_h3: 'Custom Anatomical Engineering',
            eng_item1_p: 'Each protective case is custom-molded to the exact contour of the device. Ensures unhindered access to buttons, triggers (pistol grip), touchscreens, cameras, and docking ports, without obstructing laser barcode scanning.',
            eng_item2_h3: 'High-Durability Industrial Materials',
            eng_item2_p: 'Constructed from heavy-duty waterproof synthetic textiles (Cordura / Ballistic Nylon), high-density EVA shock-absorbing foam cores, and rigid structural polymer plates built to withstand drops and abrasive friction.',
            eng_item3_h3: 'Enterprise Operational Protection',
            eng_item3_p: 'Engineered for intensive 24/7 shifts in warehouses, cross-docking, and distribution hubs. Our cases drastically reduce screen and housing breakage, protecting costly terminals and preventing shift downtime.',

            // Materials Specs
            mat_eyebrow: 'TECHNICAL COMPOSITION',
            mat_h2: 'Industrial-Grade Materials for Demanding Environments',
            mat_p: 'We use laboratory-tested technical components built to withstand harsh warehouse and field operating conditions.',
            mat_spec1_label: 'Outer Shell',
            mat_spec1_desc: 'Water-repellent synthetic textiles with maximum tear and abrasion resistance, assembled with reinforced continuous bonded industrial nylon stitching.',
            mat_spec2_label: 'Shock-Absorbing Core',
            mat_spec2_desc: 'High-density thermoformed EVA foam and padded internal linings that dissipate impact energy from direct drops onto industrial concrete.',
            mat_spec3_label: 'Visibility & Structure',
            mat_spec3_desc: 'Heavy-gauge transparent optical PVC film for crystal-clear screen view and touch responsiveness, reinforced with non-deformable internal polymer plates.',
            mat_spec4_label: 'Straps & Hardware',
            mat_spec4_desc: '30mm and 40mm high-tenacity woven nylon webbing with heavy-duty quick-release plastic clips (tip-top) or adjustable metal buckles for ergonomic waist or shoulder carry.',

            // Benefits Table
            ben_eyebrow: 'OPERATIONAL IMPACT',
            ben_h2: 'Proven Benefits for Enterprise Operations',
            ben1_h4: 'Extended Hardware Lifespan',
            ben1_p: 'Protects expensive mobile scanners and tablets against scratches, drops, and impacts, keeping them in pristine working condition for years.',
            ben2_h4: 'Significant Cost Reduction',
            ben2_p: 'Drastically reduces recurring expenses from broken housings, cracked digitizers, trigger repairs, and costly third-party technical servicing.',
            ben3_h4: 'Field Ergonomics & Comfort',
            ben3_p: 'Reinforced adjustable waist and cross-body shoulder straps facilitate comfortable 8 to 12-hour continuous shifts, preventing accidental slips.',
            ben4_h4: '24/7 Device Availability',
            ben4_p: 'Ensures warehouse personnel always have operational scanning tools ready, eliminating delays in order picking, dispatch, and physical inventory audits.',

            // Products Bento
            prod_eyebrow: 'OFFICIAL CATALOG',
            prod_h2: 'ROLBAG Product Lines',
            prod_subtitle: 'Explore our 5 specialized national manufacturing lines for enterprise mobile hardware and secure logistics transport.',
            bento_badge_main: 'Flagship Line (+120 models)',
            bento_title_main: 'Mobile Computer & Barcode Scanner Cases',
            bento_desc_main: 'Manufactured from high-durability waterproof textiles with direct access to triggers, keypads, and charging ports. Fully compatible with standard and pistol grip configurations.',
            bento_link_main: 'View specs & compatible models &rarr;',
            bento_sub1: 'Industrial Tablet Cases',
            bento_sub2: 'Portable Printer Cases',
            bento_sub3: 'Security Transit Bags',
            bento_sub4: 'Special Padlocks',
            bento_all_btn: 'View Full Product Catalog &rarr;',

            // Custom Process
            proc_eyebrow: 'CUSTOM SOLUTIONS',
            proc_h2: 'Can\'t find a case for your specific hardware?',
            proc_highlight: 'We engineer it to your exact specifications.',
            proc_desc: 'We craft completely exclusive products upon client approval. We develop custom holsters and cases for newly launched device models or special vehicle mounting attachments (e.g. forklift mounting brackets).',
            step1_title: 'Tell Us',
            step1_desc: 'Specify the hardware brand, model number, accessories, and required unit quantity.',
            step2_title: 'We Analyze',
            step2_desc: 'We evaluate operational ergonomics, button and port clearance, and recommend optimal synthetic textiles.',
            step3_title: 'We Develop',
            step3_desc: 'Custom pattern-making and physical prototype fabrication for fit verification and technical sign-off.',
            step4_title: 'We Quote',
            step4_desc: 'We submit a formal commercial proposal with tiered volume pricing and scheduled delivery timelines.',
            proc_notice: '<strong>Requirement for new models:</strong> For newly released or uncatalogued models, we require the physical device for <strong>48 hours</strong> at our workshop for precise pattern-making, prototyping, and approval.',

            // Sectores
            sec_eyebrow: 'REAL-WORLD APPLICATIONS',
            sec_h2: 'Operational Sectors',
            sec_subtitle: 'Our protective cases and security bags operate daily across high-intensity industrial and logistics hubs in Chile.',
            sec_tab1_title: 'Warehouses',
            sec_tab1_sub: 'Internal inventory management and high-rack scanning.',
            sec_tab2_title: 'Distribution Centers',
            sec_tab2_sub: 'Intensive picking and multi-shift material handling.',
            sec_tab3_title: 'Logistics & Transit',
            sec_tab3_sub: 'Field delivery, transport custody, and cross-docking.',
            compat_box_title: 'Compatible Brands & Supported Hardware',
            compat_box_desc: 'We engineer custom protective cases tailored to major enterprise mobile hardware manufacturers:',
            compat_cat1: 'Mobile Computers / Barcode Terminals',
            compat_cat2: 'Rugged Industrial Tablets',
            compat_cat3: 'Mobile Thermal Printers',

            // Quote Guide
            qg_eyebrow: 'QUOTATION GUIDE',
            qg_h2: 'Information Required for Your Request',
            qg_subtitle: 'To provide a fast and accurate proposal, please consider the following information according to your project requirements:',
            qg_card1_badge: 'Protective Cases',
            qg_card1_title: 'To Quote Protective Cases',
            qg_c1_li1: '<strong>Brand and Model:</strong> Exact device model (e.g. Zebra TC58, Honeywell CT45, Samsung Active5).',
            qg_c1_li2: '<strong>Accessories / Options:</strong> Indicate if the unit has a pistol grip, extended battery pack, or charging cradle needs.',
            qg_c1_li3: '<strong>Requested Quantity:</strong> Estimated total units required for the rollout.',
            qg_c1_li4: '<strong>Delivery Schedule:</strong> Target implementation timeline.',
            qg_c1_li5: '<strong>New Model:</strong> Device sample needed for 48 hours for prototype engineering and approval.',
            qg_card2_badge: 'Security & Custody',
            qg_card2_title: 'To Quote Security Bags',
            qg_c2_li1: '<strong>Volume / Dimensions:</strong> Required external measurements in cm (Width, Length, and Height) or liters.',
            qg_c2_li2: '<strong>Requested Quantity:</strong> Number of security bags required.',
            qg_c2_li3: '<strong>Corporate Color:</strong> Preferred textile and zipper color palette.',
            qg_c2_li4: '<strong>Corporate Logo:</strong> High-resolution vector or image file for embroidery or screen printing.',
            qg_c2_li5: '<strong>Special Configurations:</strong> Available upon request: flat envelope bag, rolling wheeled bag, or hidden GPS tracking pocket.',

            // Final CTA
            cta_eyebrow: 'DIRECT CONTACT',
            cta_h2: 'Ensure the Continuity of Your Operation',
            cta_lead: 'Connect with our commercial sales engineering team today to assess the ideal protective solution for your enterprise.',
            cta_btn_quote: 'Request Formal Quotation',
            cta_btn_wa: 'Direct Commercial WhatsApp',

            // Footer
            footer_desc: 'Chilean specialized manufacturing of custom industrial cases and security transit bags for enterprises nationwide.',
            footer_col1: 'Navigation',
            footer_col2: 'Product Lines',
            footer_col3: 'Direct Contact',
            footer_rights: 'All rights reserved.',
            footer_terms: 'Terms & Conditions',
            footer_privacy: 'Privacy Policy'
        }
    };

    function translateLandingDOM(lang) {
        const d = LANDING_TRANSLATIONS[lang];
        if (!d) return;

        // 1. Hero
        setTxt('.rb-hero-editorial .rb-eyebrow', d.hero_eyebrow);
        setTxt('.rb-hero-editorial .rb-h1', d.hero_h1);
        setTxt('.rb-hero-editorial .rb-hero-lead', d.hero_lead);
        setTxt('.rb-hero-actions a.rb-btn--primary', d.hero_btn_products);
        setTxt('.rb-hero-actions a.rb-btn--secondary', d.hero_btn_quote);

        // 2. About / Trayectoria
        setTxt('#nosotros .rb-eyebrow', d.about_eyebrow);
        setTxt('#nosotros .rb-h2', d.about_h2);
        const aboutParas = document.querySelectorAll('#nosotros .rb-about-editorial__content-col > p.rb-paragraph');
        if (aboutParas.length >= 3) {
            aboutParas[0].innerHTML = d.about_p1;
            aboutParas[1].innerHTML = d.about_p2;
            aboutParas[2].innerHTML = d.about_p3;
        }
        const statLabels = document.querySelectorAll('#nosotros .rb-stat-editorial__label');
        if (statLabels.length >= 2) {
            statLabels[0].textContent = d.about_stat1_label;
            statLabels[1].textContent = d.about_stat2_label;
        }
        const mvItems = document.querySelectorAll('#nosotros .rb-mv-item');
        if (mvItems.length >= 2) {
            mvItems[0].innerHTML = d.about_mision;
            mvItems[1].innerHTML = d.about_vision;
        }
        setTxt('#nosotros a.rb-btn--outline', d.about_btn_more);

        // 3. Engineering
        setTxt('.rb-engineering-list .rb-eyebrow', d.eng_eyebrow);
        setTxt('.rb-engineering-list .rb-h2', d.eng_h2);
        setTxt('.rb-engineering-list .rb-lead-dark', d.eng_lead);
        const techItems = document.querySelectorAll('.rb-tech-item');
        if (techItems.length >= 3) {
            setTxt(techItems[0].querySelector('h3'), d.eng_item1_h3);
            setTxt(techItems[0].querySelector('p'), d.eng_item1_p);
            setTxt(techItems[1].querySelector('h3'), d.eng_item2_h3);
            setTxt(techItems[1].querySelector('p'), d.eng_item2_p);
            setTxt(techItems[2].querySelector('h3'), d.eng_item3_h3);
            setTxt(techItems[2].querySelector('p'), d.eng_item3_p);
        }

        // Materials Specs
        setTxt('.rb-materials-editorial .rb-eyebrow', d.mat_eyebrow);
        setTxt('.rb-materials-editorial .rb-h2', d.mat_h2);
        setTxt('.rb-materials-editorial .rb-materials-editorial__text > p.rb-text-muted', d.mat_p);
        const specs = document.querySelectorAll('.rb-spec-item');
        if (specs.length >= 4) {
            setTxt(specs[0].querySelector('.rb-spec-label'), d.mat_spec1_label);
            setTxt(specs[0].querySelector('.rb-spec-desc'), d.mat_spec1_desc);
            setTxt(specs[1].querySelector('.rb-spec-label'), d.mat_spec2_label);
            setTxt(specs[1].querySelector('.rb-spec-desc'), d.mat_spec2_desc);
            setTxt(specs[2].querySelector('.rb-spec-label'), d.mat_spec3_label);
            setTxt(specs[2].querySelector('.rb-spec-desc'), d.mat_spec3_desc);
            setTxt(specs[3].querySelector('.rb-spec-label'), d.mat_spec4_label);
            setTxt(specs[3].querySelector('.rb-spec-desc'), d.mat_spec4_desc);
        }

        // Benefits Table
        setTxt('.rb-benefits-section .rb-eyebrow', d.ben_eyebrow);
        setTxt('.rb-benefits-section .rb-h2', d.ben_h2);
        const benefits = document.querySelectorAll('.rb-benefit-cell');
        if (benefits.length >= 4) {
            setTxt(benefits[0].querySelector('.rb-benefit-title'), d.ben1_h4);
            setTxt(benefits[0].querySelector('p'), d.ben1_p);
            setTxt(benefits[1].querySelector('.rb-benefit-title'), d.ben2_h4);
            setTxt(benefits[1].querySelector('p'), d.ben2_p);
            setTxt(benefits[2].querySelector('.rb-benefit-title'), d.ben3_h4);
            setTxt(benefits[2].querySelector('p'), d.ben3_p);
            setTxt(benefits[3].querySelector('.rb-benefit-title'), d.ben4_h4);
            setTxt(benefits[3].querySelector('p'), d.ben4_p);
        }

        // 4. Products Bento
        setTxt('#productos .rb-eyebrow', d.prod_eyebrow);
        setTxt('#productos .rb-h2', d.prod_h2);
        setTxt('#productos .rb-section-subtitle', d.prod_subtitle);
        setTxt('.rb-bento-card--main .rb-badge', d.bento_badge_main);
        setTxt('.rb-bento-card--main .rb-bento-title', d.bento_title_main);
        setTxt('.rb-bento-card--main .rb-bento-desc', d.bento_desc_main);
        setHtml('.rb-bento-card--main .rb-bento-link', d.bento_link_main);

        const subTitles = document.querySelectorAll('.rb-bento-sub-title');
        if (subTitles.length >= 4) {
            setTxt(subTitles[0], d.bento_sub1);
            setTxt(subTitles[1], d.bento_sub2);
            setTxt(subTitles[2], d.bento_sub3);
            setTxt(subTitles[3], d.bento_sub4);
        }
        document.querySelectorAll('.rb-bento-card--side .rb-bento-link').forEach(link => {
            link.innerHTML = lang === 'en' ? 'View models &rarr;' : 'Ver modelos &rarr;';
        });
        setTxt('.rb-products-all-link a.rb-btn--outline', d.bento_all_btn);

        // 5. Custom Process
        setTxt('#soluciones .rb-eyebrow', d.proc_eyebrow);
        setTxt('#soluciones .rb-h2', d.proc_h2);
        setTxt('#soluciones .rb-custom-highlight', d.proc_highlight);
        setTxt('#soluciones .rb-custom-process__intro > p.rb-text-muted', d.proc_desc);
        const steps = document.querySelectorAll('.rb-process-step');
        if (steps.length >= 4) {
            setTxt(steps[0].querySelector('.rb-step-title'), d.step1_title);
            setTxt(steps[0].querySelector('.rb-step-desc'), d.step1_desc);
            setTxt(steps[1].querySelector('.rb-step-title'), d.step2_title);
            setTxt(steps[1].querySelector('.rb-step-desc'), d.step2_desc);
            setTxt(steps[2].querySelector('.rb-step-title'), d.step3_title);
            setTxt(steps[2].querySelector('.rb-step-desc'), d.step3_desc);
            setTxt(steps[3].querySelector('.rb-step-title'), d.step4_title);
            setTxt(steps[3].querySelector('.rb-step-desc'), d.step4_desc);
        }
        const noticeEl = document.querySelector('#soluciones .rb-process-notice .rb-notice-text');
        if (noticeEl) noticeEl.innerHTML = d.proc_notice;

        // 6. Sectores
        setTxt('#sectores .rb-eyebrow', d.sec_eyebrow);
        setTxt('#sectores .rb-h2', d.sec_h2);
        setTxt('#sectores .rb-section-subtitle', d.sec_subtitle);
        const opItems = document.querySelectorAll('.rb-op-item');
        if (opItems.length >= 3) {
            setTxt(opItems[0].querySelector('strong'), d.sec_tab1_title);
            setTxt(opItems[0].querySelector('p'), d.sec_tab1_sub);
            setTxt(opItems[1].querySelector('strong'), d.sec_tab2_title);
            setTxt(opItems[1].querySelector('p'), d.sec_tab2_sub);
            setTxt(opItems[2].querySelector('strong'), d.sec_tab3_title);
            setTxt(opItems[2].querySelector('p'), d.sec_tab3_sub);
        }
        setTxt('.rb-compatibility-box .rb-compat-title', d.compat_box_title);
        setTxt('.rb-compatibility-box > p.rb-text-muted', d.compat_box_desc);
        const compatCats = document.querySelectorAll('.rb-compat-cat');
        if (compatCats.length >= 3) {
            setTxt(compatCats[0], d.compat_cat1);
            setTxt(compatCats[1], d.compat_cat2);
            setTxt(compatCats[2], d.compat_cat3);
        }

        // 7. Quote Guide
        setTxt('#cotizar .rb-eyebrow', d.qg_eyebrow);
        setTxt('#cotizar .rb-h2', d.qg_h2);
        setTxt('#cotizar .rb-section-subtitle', d.qg_subtitle);
        const qCards = document.querySelectorAll('.rb-quote-card');
        if (qCards.length >= 2) {
            setTxt(qCards[0].querySelector('.rb-badge'), d.qg_card1_badge);
            setTxt(qCards[0].querySelector('.rb-quote-card__title'), d.qg_card1_title);
            const lis1 = qCards[0].querySelectorAll('li');
            if (lis1.length >= 5) {
                lis1[0].innerHTML = d.qg_c1_li1;
                lis1[1].innerHTML = d.qg_c1_li2;
                lis1[2].innerHTML = d.qg_c1_li3;
                lis1[3].innerHTML = d.qg_c1_li4;
                lis1[4].innerHTML = d.qg_c1_li5;
            }

            setTxt(qCards[1].querySelector('.rb-badge'), d.qg_card2_badge);
            setTxt(qCards[1].querySelector('.rb-quote-card__title'), d.qg_card2_title);
            const lis2 = qCards[1].querySelectorAll('li');
            if (lis2.length >= 5) {
                lis2[0].innerHTML = d.qg_c2_li1;
                lis2[1].innerHTML = d.qg_c2_li2;
                lis2[2].innerHTML = d.qg_c2_li3;
                lis2[3].innerHTML = d.qg_c2_li4;
                lis2[4].innerHTML = d.qg_c2_li5;
            }
        }

        // 8. Final CTA
        setTxt('.rb-cta-editorial .rb-eyebrow', d.cta_eyebrow);
        setTxt('.rb-cta-editorial .rb-cta-title', d.cta_h2);
        setTxt('.rb-cta-editorial .rb-cta-lead', d.cta_lead);
        setTxt('.rb-cta-actions a.rb-btn--primary', d.cta_btn_quote);

        // 9. Footer
        setTxt('.rb-footer__brand p', d.footer_desc);
        const footTitles = document.querySelectorAll('.rb-footer__col-title');
        if (footTitles.length >= 3) {
            setTxt(footTitles[0], d.footer_col1);
            setTxt(footTitles[1], d.footer_col2);
            setTxt(footTitles[2], d.footer_col3);
        }
        setTxt('.rb-footer__legal-text', `© ${new Date().getFullYear()} ROLBAG SpA. ${d.footer_rights}`);
        const legalLinks = document.querySelectorAll('.rb-footer__legal-links a');
        if (legalLinks.length >= 2) {
            setTxt(legalLinks[0], d.footer_terms);
            setTxt(legalLinks[1], d.footer_privacy);
        }

        // 10. Navigation (Header & Mobile)
        translateNav(lang);

        // 11. Internal Pages & Forms
        translateInternalPages(lang);
    }

    function translateNav(lang) {
        const isEn = lang === 'en';
        
        const navMap = {
            'Inicio': 'Home',
            'Empresa': 'About Us',
            'Productos': 'Products',
            'Soluciones': 'Solutions',
            'Contacto': 'Contact',
            'Solicitar Cotización': 'Request a Quote',
            'Fundas para Capturadores': 'Mobile Computer Cases',
            'Fundas para Tablets': 'Industrial Tablet Cases',
            'Fundas para Impresoras': 'Portable Printer Cases',
            'Valijas de Seguridad': 'Security & Transit Bags',
            'Candados de Seguridad': 'Security Padlocks',
            'Candados Especiales': 'Special Padlocks'
        };

        const navLinks = document.querySelectorAll('.rb-nav__link, .rb-dropdown-menu a, .rb-mobile-menu__link, .rb-mobile-submenu__link, .rb-header__cta a, .rb-mobile-menu__cta a');
        navLinks.forEach(link => {
            const current = link.textContent.trim();
            for (const [esKey, enVal] of Object.entries(navMap)) {
                if (isEn && (current === esKey || current.startsWith(esKey))) {
                    link.textContent = current.replace(esKey, enVal);
                    break;
                } else if (!isEn && (current === enVal || current.startsWith(enVal))) {
                    link.textContent = current.replace(enVal, esKey);
                    break;
                }
            }
        });
    }

    function translateInternalPages(lang) {
        const isEn = lang === 'en';

        // Contact Page Forms & Labels
        const formLabels = {
            'Nombre y Apellido *': 'Full Name *',
            'Empresa / Razón Social *': 'Company Name *',
            'Correo Electrónico *': 'Business Email *',
            'Teléfono de Contacto *': 'Phone Number *',
            'Línea de Producto de Interés': 'Product Line of Interest',
            'Marca y Modelo del Dispositivo': 'Device Brand & Model',
            'Cantidad Estimada de Unidades': 'Estimated Quantity',
            'Requerimientos Específicos / Mensaje': 'Specific Requirements / Message',
            'Enviar Solicitud de Cotización': 'Submit Quotation Request',
            'WhatsApp Comercial': 'Commercial WhatsApp',
            'Taller y Oficina Central': 'Workshop & Headquarters',
            'Muestra en 48 hrs:': '48h Prototype:'
        };

        document.querySelectorAll('label, .rb-btn, .rb-badge, h1, h2, h3, h4').forEach(el => {
            const text = el.textContent.trim();
            for (const [es, en] of Object.entries(formLabels)) {
                if (isEn && text === es) {
                    el.textContent = en;
                } else if (!isEn && text === en) {
                    el.textContent = es;
                }
            }
        });

        // Search inputs
        const searchInput = document.getElementById('rb-model-search');
        if (searchInput) {
            searchInput.placeholder = isEn
                ? 'Search by brand or model (e.g. Zebra TC22, Honeywell CT45, RT10)...'
                : 'Buscar por marca o modelo (ej. Zebra TC22, Honeywell CT45, RT10)...';
        }

        // Solutions tabs (01, 02, 03)
        const solTabMap = {
            'Almacenes': 'Warehouses',
            'Bodegajes': 'Distribution Centers',
            'Logística': 'Logistics'
        };
        document.querySelectorAll('.rb-sol-tab-label').forEach(tab => {
            const current = tab.textContent.trim();
            for (const [es, en] of Object.entries(solTabMap)) {
                if (isEn && current === es) {
                    tab.textContent = en;
                } else if (!isEn && current === en) {
                    tab.textContent = es;
                }
            }
        });
    }

    // Helper utilities
    function setTxt(selectorOrEl, text) {
        if (!text) return;
        const el = typeof selectorOrEl === 'string' ? document.querySelector(selectorOrEl) : selectorOrEl;
        if (el) el.textContent = text;
    }

    function setHtml(selectorOrEl, html) {
        if (!html) return;
        const el = typeof selectorOrEl === 'string' ? document.querySelector(selectorOrEl) : selectorOrEl;
        if (el) el.innerHTML = html;
    }

    function getSavedLanguage() {
        return localStorage.getItem('rolbag_lang') || 'es';
    }

    function setLanguage(lang) {
        if (lang !== 'es' && lang !== 'en') lang = 'es';
        localStorage.setItem('rolbag_lang', lang);
        document.documentElement.setAttribute('lang', lang);

        // Update active switch buttons state
        document.querySelectorAll('.rb-lang-btn').forEach(btn => {
            const btnLang = btn.getAttribute('data-lang');
            const isActive = btnLang === lang;
            btn.classList.toggle('active', isActive);
            btn.setAttribute('aria-pressed', isActive ? 'true' : 'false');
        });

        // Translate full Landing DOM
        translateLandingDOM(lang);
    }

    function initLanguageSwitcher() {
        const currentLang = getSavedLanguage();

        document.addEventListener('click', function(e) {
            const btn = e.target.closest('.rb-lang-btn');
            if (!btn) return;
            e.preventDefault();
            const lang = btn.getAttribute('data-lang');
            if (lang) {
                setLanguage(lang);
            }
        });

        if (currentLang === 'en') {
            setLanguage('en');
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLanguageSwitcher);
    } else {
        initLanguageSwitcher();
    }

    window.rolbagI18n = {
        setLanguage: setLanguage,
        getLanguage: getSavedLanguage
    };

})();
