/**
 * ROLBAG Master Motion & Interaction Controller
 * Powered by GSAP & ScrollTrigger
 */

document.addEventListener('DOMContentLoaded', () => {

    // ==========================================================================
    // 0. VERIFICAR PREFERENCIA DE MOVIMIENTO REDUCIDO
    // ==========================================================================
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ==========================================================================
    // 1. GSAP SCROLLTRIGGER REGISTRATION & INITIALIZATION
    // ==========================================================================
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined' && !prefersReducedMotion) {
        gsap.registerPlugin(ScrollTrigger);

        // --- HERO ENTRANCE TIMELINE ---
        const heroTl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 0.9 } });
        
        heroTl
            .fromTo('.rb-hero-editorial__bg', 
                { scale: 1.08, opacity: 0 }, 
                { scale: 1.02, opacity: 1, duration: 1.4 }
            )
            .fromTo('.rb-hero-editorial__content .rb-eyebrow', 
                { y: 20, opacity: 0 }, 
                { y: 0, opacity: 1 }, 
                '-=0.9'
            )
            .fromTo('.rb-hero-editorial .rb-h1', 
                { y: 30, opacity: 0 }, 
                { y: 0, opacity: 1 }, 
                '-=0.7'
            )
            .fromTo('.rb-hero-lead', 
                { y: 25, opacity: 0 }, 
                { y: 0, opacity: 1 }, 
                '-=0.7'
            )
            .fromTo('.rb-hero-actions .rb-btn', 
                { y: 20, opacity: 0, scale: 0.96 }, 
                { y: 0, opacity: 1, scale: 1, stagger: 0.15 }, 
                '-=0.6'
            )
            .fromTo('.rb-hero-badges',
                { y: 20, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.7 },
                '-=0.5'
            )
            .fromTo('.rb-hero-editorial__showcase',
                { y: 30, opacity: 0, scale: 0.96 },
                { y: 0, opacity: 1, scale: 1, duration: 1.0, ease: 'power3.out' },
                '-=0.9'
            );

        // --- SECTION HEADERS FADE UP ---
        gsap.utils.toArray('.rb-section-header').forEach(header => {
            gsap.fromTo(header, 
                { y: 35, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: header,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        // --- ABOUT SECTION (QUIÉNES SOMOS) ---
        const aboutImg = document.querySelector('.rb-about-image-wrapper');
        if (aboutImg) {
            gsap.fromTo(aboutImg,
                { opacity: 0, scale: 0.94, y: 30 },
                {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: aboutImg,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        const aboutStats = document.querySelector('.rb-about-editorial__stats');
        if (aboutStats) {
            gsap.fromTo(aboutStats.querySelectorAll('.rb-stat-editorial'),
                { opacity: 0, y: 25 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    stagger: 0.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: aboutStats,
                        start: 'top 88%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        const mvItems = document.querySelectorAll('.rb-mv-item');
        if (mvItems.length > 0) {
            gsap.fromTo(mvItems,
                { opacity: 0, y: 20 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    stagger: 0.15,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rb-mission-vision-grid',
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // --- MACRO INGENIERÍA (TECH ITEMS & MATERIAL SPECS) ---
        const techItems = document.querySelectorAll('.rb-tech-item');
        if (techItems.length > 0) {
            gsap.fromTo(techItems,
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    stagger: 0.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rb-tech-list',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        const specItems = document.querySelectorAll('.rb-spec-item');
        if (specItems.length > 0) {
            gsap.fromTo(specItems,
                { opacity: 0, y: 20 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    stagger: 0.12,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rb-materials-specs',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        const macroImg = document.querySelector('.rb-macro-image-wrapper');
        if (macroImg) {
            gsap.fromTo(macroImg,
                { opacity: 0, scale: 0.95, y: 30 },
                {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    duration: 0.9,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: macroImg,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // --- BENEFITS TABLE ---
        const benefitCells = document.querySelectorAll('.rb-benefit-cell');
        if (benefitCells.length > 0) {
            gsap.fromTo(benefitCells,
                { opacity: 0, y: 25 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    stagger: 0.12,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rb-benefits-table',
                        start: 'top 88%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // --- BENTO GRID PRODUCTS ---
        const bentoCards = document.querySelectorAll('.rb-bento-card');
        if (bentoCards.length > 0) {
            gsap.fromTo(bentoCards,
                { opacity: 0, y: 40, scale: 0.98 },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 0.8,
                    stagger: 0.14,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rb-products-bento',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // --- TIMELINE PROCESS ---
        const processSteps = document.querySelectorAll('.rb-process-step');
        if (processSteps.length > 0) {
            gsap.fromTo(processSteps,
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    stagger: 0.15,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rb-process-timeline',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // --- SECTORES DE OPERACIÓN ---
        const opPanel = document.querySelector('.rb-operations-panel');
        if (opPanel) {
            gsap.fromTo(opPanel,
                { opacity: 0, y: 35 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: opPanel,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // --- COMPATIBILITY & QUOTE CARDS ---
        const compatCards = document.querySelectorAll('.rb-compat-card');
        if (compatCards.length > 0) {
            gsap.fromTo(compatCards,
                { opacity: 0, y: 20 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    stagger: 0.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rb-compat-grid',
                        start: 'top 88%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        const quoteCards = document.querySelectorAll('.rb-quote-card');
        if (quoteCards.length > 0) {
            gsap.fromTo(quoteCards,
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    stagger: 0.18,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.rb-quote-grid',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }
    }

    // ==========================================================================
    // 2. HEADER SCROLL & ELEVATION
    // ==========================================================================
    const header = document.querySelector('.rb-header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 30) {
                header.classList.add('rb-header--scrolled');
            } else {
                header.classList.remove('rb-header--scrolled');
            }
        }, { passive: true });
    }

    // ==========================================================================
    // 3. MENÚ MOBILE ACCESIBLE
    // ==========================================================================
    const toggleBtn = document.getElementById('rb-mobile-menu-toggle');
    const mobileNav = document.getElementById('rb-mobile-nav');
    const mobileCloseBtn = document.getElementById('rb-mobile-menu-close');
    const mobileOverlay = document.getElementById('rb-mobile-overlay');
    const mobileLinks = document.querySelectorAll('.rb-mobile-menu__link, .rb-mobile-menu__cta a');

    function openMobileMenu() {
        if (!mobileNav) return;
        mobileNav.classList.add('active');
        if (mobileOverlay) mobileOverlay.classList.add('active');
        if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'true');
        mobileNav.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        if (!mobileNav) return;
        mobileNav.classList.remove('active');
        if (mobileOverlay) mobileOverlay.classList.remove('active');
        if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'false');
        mobileNav.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            const isOpen = mobileNav && mobileNav.classList.contains('active');
            if (isOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    if (mobileCloseBtn) mobileCloseBtn.addEventListener('click', closeMobileMenu);
    if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobileMenu);

    // Acordeón mobile para Productos
    const mobileProdToggle = document.getElementById('rb-mobile-prod-toggle');
    const mobileProdList = document.getElementById('rb-mobile-prod-list');
    if (mobileProdToggle && mobileProdList) {
        mobileProdToggle.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            const isExpanded = mobileProdList.style.display === 'block';
            mobileProdList.style.display = isExpanded ? 'none' : 'block';
            mobileProdToggle.textContent = isExpanded ? '+' : '−';
            mobileProdToggle.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
        });
    }

    mobileLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileNav && mobileNav.classList.contains('active')) {
            closeMobileMenu();
            if (toggleBtn) toggleBtn.focus();
        }
    });

    // ==========================================================================
    // 4. SECTORES DE OPERACIÓN INTERACTIVOS (CROSSFADE DINÁMICO)
    // ==========================================================================
    const opTabs = document.querySelectorAll('.rb-op-item');
    const opImg = document.getElementById('rb-op-dynamic-img');
    const opTitle = document.getElementById('rb-op-dynamic-title');
    const opDesc = document.getElementById('rb-op-dynamic-desc');

    if (opTabs.length > 0 && opImg && opTitle && opDesc) {
        function activateSector(tab) {
            opTabs.forEach(t => {
                t.classList.remove('rb-op-item--active');
                t.setAttribute('aria-selected', 'false');
                t.setAttribute('tabindex', '-1');
            });

            tab.classList.add('rb-op-item--active');
            tab.setAttribute('aria-selected', 'true');
            tab.setAttribute('tabindex', '0');

            const newImg = tab.getAttribute('data-img');
            const newTitle = tab.getAttribute('data-title');
            const newDesc = tab.getAttribute('data-desc');

            if (typeof gsap !== 'undefined' && !prefersReducedMotion) {
                gsap.to([opImg, opTitle, opDesc], {
                    opacity: 0,
                    y: -8,
                    duration: 0.18,
                    ease: 'power2.in',
                    onComplete: () => {
                        opImg.src = newImg;
                        opTitle.textContent = newTitle;
                        opDesc.textContent = newDesc;
                        gsap.fromTo([opImg, opTitle, opDesc], 
                            { opacity: 0, y: 10 },
                            { opacity: 1, y: 0, duration: 0.35, ease: 'power2.out' }
                        );
                    }
                });
            } else {
                opImg.src = newImg;
                opTitle.textContent = newTitle;
                opDesc.textContent = newDesc;
            }
        }

        opTabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                activateSector(tab);
            });

            tab.addEventListener('keydown', (e) => {
                let targetIndex = -1;
                if (e.key === 'ArrowDown' || e.key === 'ArrowRight') {
                    targetIndex = (index + 1) % opTabs.length;
                } else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') {
                    targetIndex = (index - 1 + opTabs.length) % opTabs.length;
                } else if (e.key === 'Home') {
                    targetIndex = 0;
                } else if (e.key === 'End') {
                    targetIndex = opTabs.length - 1;
                }

                if (targetIndex !== -1) {
                    e.preventDefault();
                    opTabs[targetIndex].focus();
                    activateSector(opTabs[targetIndex]);
                }
            });
        });
    }

    // ==========================================================================
    // 5. SMOOTH SCROLL PARA ANCHORS CON OFFSET
    // ==========================================================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId.length < 2) return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                const headerOffset = 76;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: prefersReducedMotion ? 'auto' : 'smooth'
                });
            }
        });
    });

    // ==========================================================================
    // 6. ECOSISTEMA DE MARCAS COMPATIBLES (FRONT-PAGE)
    // ==========================================================================
    const brandTabs = document.querySelectorAll('.rb-brand-tab');
    const brandCards = document.querySelectorAll('.rb-brand-card-item');
    const brandSearchInput = document.getElementById('rb-brands-search');
    const brandContainer = document.getElementById('rb-brands-container');
    const mobileToggleBtn = document.getElementById('rb-brands-toggle-mobile-btn');

    if (brandTabs.length > 0 && brandCards.length > 0) {
        let activeFilter = 'all';

        const filterBrandCards = () => {
            const query = brandSearchInput ? brandSearchInput.value.toLowerCase().trim() : '';

            brandCards.forEach(card => {
                const category = card.getAttribute('data-category') || '';
                const brandName = card.getAttribute('data-name') || '';
                const models = card.getAttribute('data-models') || '';
                const cardTitle = (card.querySelector('.rb-brand-card-item__title')?.textContent || '').toLowerCase();

                // Verificar categoría
                const matchesCategory = (activeFilter === 'all' || category.includes(activeFilter));

                // Verificar búsqueda
                let matchesSearch = true;
                if (query) {
                    matchesSearch = brandName.includes(query) || 
                                    models.includes(query) || 
                                    cardTitle.includes(query);
                }

                if (matchesCategory && matchesSearch) {
                    card.style.display = '';
                    if (typeof gsap !== 'undefined' && !prefersReducedMotion) {
                        gsap.to(card, { opacity: 1, y: 0, duration: 0.3, overwrite: 'auto' });
                    }
                } else {
                    card.style.display = 'none';
                }
            });

            // Si hay filtro o búsqueda en móvil, asegurar que se vean todos los resultados
            const mobileToggleWrap = document.querySelector('.rb-brands-mobile-toggle-wrap');
            if (mobileToggleWrap) {
                if (activeFilter !== 'all' || query !== '') {
                    if (brandContainer) brandContainer.classList.add('rb-brands-grid--expanded');
                    mobileToggleWrap.style.display = 'none';
                } else {
                    mobileToggleWrap.style.display = '';
                }
            }
        };

        if (mobileToggleBtn && brandContainer) {
            mobileToggleBtn.addEventListener('click', () => {
                const isExpanded = brandContainer.classList.toggle('rb-brands-grid--expanded');
                mobileToggleBtn.classList.toggle('expanded', isExpanded);
                mobileToggleBtn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
                const textSpan = mobileToggleBtn.querySelector('.rb-brands-toggle-text');
                if (textSpan) {
                    textSpan.textContent = isExpanded 
                        ? 'Mostrar menos marcas ↑' 
                        : 'Ver todas las marcas compatibles (+14 fabricantes)';
                }
            });
        }

        brandTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                brandTabs.forEach(t => {
                    t.classList.remove('active');
                    t.setAttribute('aria-selected', 'false');
                });
                tab.classList.add('active');
                tab.setAttribute('aria-selected', 'true');
                activeFilter = tab.getAttribute('data-filter');
                filterBrandCards();
            });
        });

        if (brandSearchInput) {
            brandSearchInput.addEventListener('input', filterBrandCards);
        }
    }

    /* --------------------------------------------------------------------------
       PRE-COTIZADOR RÁPIDO B2B (WIDGET EN #COTIZAR)
       -------------------------------------------------------------------------- */
    const initQuickQuoteWidget = () => {
        const qqWidget = document.getElementById('cotizador-rapido');
        if (!qqWidget) return;

        const qqPills = qqWidget.querySelectorAll('.rb-qq-pill');
        const qqLineInput = document.getElementById('rb-qq-selected-line');
        const qqModelInput = document.getElementById('rb-qq-model');
        const qqQtyInput = document.getElementById('rb-qq-qty');
        const qqWhatsAppBtn = document.getElementById('rb-qq-whatsapp-btn');
        const qqEmailBtn = document.getElementById('rb-qq-email-btn');

        const updateQuickQuoteLinks = () => {
            const line = qqLineInput ? (qqLineInput.value || 'Fundas para Capturadores') : 'Fundas para Capturadores';
            const model = qqModelInput ? qqModelInput.value.trim() : '';
            const qty = qqQtyInput && qqQtyInput.value ? qqQtyInput.value : '10';

            const modelText = model ? ` para el equipo/medida ${model}` : '';
            const msg = `Hola ROLBAG, quisiera cotizar ${qty} unidades de ${line}${modelText}.`;
            if (qqWhatsAppBtn) {
                qqWhatsAppBtn.href = `https://wa.me/569318360416?text=${encodeURIComponent(msg)}`;
            }

            if (qqEmailBtn) {
                const params = new URLSearchParams();
                params.set('linea', line);
                if (model) params.set('modelo', model);
                params.set('cantidad', qty);
                qqEmailBtn.href = `/contacto?${params.toString()}`;
            }
        };

        window.selectQuickQuoteLine = function(selectedElement) {
            if (!selectedElement) return;
            const allPills = document.querySelectorAll('.rb-qq-pill');
            allPills.forEach(p => p.classList.remove('active'));
            selectedElement.classList.add('active');

            const lineName = selectedElement.getAttribute('data-line') || selectedElement.textContent.trim();
            if (qqLineInput) {
                qqLineInput.value = lineName;
            }

            const placeholder = selectedElement.getAttribute('data-placeholder');
            if (placeholder && qqModelInput) {
                qqModelInput.setAttribute('placeholder', placeholder);
            }

            updateQuickQuoteLinks();
        };

        qqPills.forEach(pill => {
            pill.addEventListener('click', (e) => {
                e.preventDefault();
                window.selectQuickQuoteLine(pill);
            });
        });

        // Event delegation sobre el contenedor de pills
        const pillsContainer = document.getElementById('rb-qq-pills-container');
        if (pillsContainer) {
            pillsContainer.addEventListener('click', (e) => {
                const targetPill = e.target.closest('.rb-qq-pill');
                if (targetPill) {
                    e.preventDefault();
                    window.selectQuickQuoteLine(targetPill);
                }
            });
        }

        if (qqModelInput) {
            qqModelInput.addEventListener('input', updateQuickQuoteLinks);
        }
        if (qqQtyInput) {
            qqQtyInput.addEventListener('input', updateQuickQuoteLinks);
        }

        // Inicializar enlaces
        updateQuickQuoteLinks();
    };

    initQuickQuoteWidget();

});
