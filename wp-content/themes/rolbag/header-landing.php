<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Favicon & Brand Icons -->
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand/favicon-32x32.png' ); ?>" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand/apple-touch-icon.png' ); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.ico' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class('rb-main'); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<header id="masthead" class="rb-header">
		<div class="rb-container rb-header__inner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rb-header__logo" rel="home" aria-label="ROLBAG - Inicio">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand/logo-white.png' ); ?>" alt="ROLBAG" class="rb-header__logo-img" />
            </a>

			<!-- Navegación Desktop -->
			<nav id="site-navigation" class="rb-nav" aria-label="Navegación principal">
				<ul class="rb-nav__list">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rb-nav__link <?php echo is_front_page() ? 'active' : ''; ?>">Inicio</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/empresa' ) ); ?>" class="rb-nav__link <?php echo is_page( 'empresa' ) ? 'active' : ''; ?>">Empresa</a></li>
                    
                    <!-- Dropdown Productos -->
                    <li class="rb-nav__item--dropdown">
                        <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-nav__link <?php echo ( is_post_type_archive( 'producto' ) || is_singular( 'producto' ) ) ? 'active' : ''; ?>" aria-haspopup="true" aria-expanded="false">
                            Productos
                            <svg viewBox="0 0 16 16" width="12" height="12" style="fill:currentColor; margin-left:4px; vertical-align:middle;"><path d="M4.5 6L8 9.5 11.5 6z"/></svg>
                        </a>
                        <ul class="rb-dropdown-menu" aria-label="Líneas de Productos">
                            <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>">Fundas para Capturadores</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets' ) ); ?>">Fundas para Tablets</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras' ) ); ?>">Fundas para Impresoras</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles' ) ); ?>">Fundas para POS Móviles</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/productos/valijas-de-seguridad' ) ); ?>">Valijas de Seguridad</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/productos/candados-especiales' ) ); ?>">Candados de Seguridad</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo esc_url( home_url( '/soluciones' ) ); ?>" class="rb-nav__link <?php echo is_page( 'soluciones' ) ? 'active' : ''; ?>">Soluciones</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="rb-nav__link <?php echo is_page( 'contacto' ) ? 'active' : ''; ?>">Contacto</a></li>
                </ul>
			</nav>

            <div class="rb-header__actions" style="display: flex; align-items: center; gap: 14px;">
                <!-- Selector de Idioma Desktop (ES / EN) -->
                <div class="rb-lang-switch" role="group" aria-label="Seleccionar idioma / Select language">
                    <button type="button" class="rb-lang-btn active" data-lang="es" aria-pressed="true">ES</button>
                    <span class="rb-lang-divider">/</span>
                    <button type="button" class="rb-lang-btn" data-lang="en" aria-pressed="false">EN</button>
                </div>

                <div class="rb-header__cta">
                    <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="rb-btn rb-btn--primary">Solicitar Cotización</a>
                </div>
            </div>

            <!-- Botón Hamburguesa Mobile -->
            <button type="button" class="rb-mobile-toggle" id="rb-mobile-menu-toggle" aria-controls="rb-mobile-nav" aria-expanded="false" aria-label="Abrir menú de navegación">
                <span class="rb-mobile-toggle__bar"></span>
                <span class="rb-mobile-toggle__bar"></span>
                <span class="rb-mobile-toggle__bar"></span>
            </button>
		</div>
	</header>

    <!-- Menú Desplegable Mobile -->
    <div id="rb-mobile-nav" class="rb-mobile-menu" aria-hidden="true">
        <div class="rb-mobile-menu__inner">
            <div class="rb-mobile-menu__header">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand/logo-white.png' ); ?>" alt="ROLBAG" class="rb-mobile-menu__logo" />
                <button type="button" class="rb-mobile-menu__close" id="rb-mobile-menu-close" aria-label="Cerrar menú">
                    &times;
                </button>
            </div>

            <!-- Selector de Idioma Mobile (ES / EN) -->
            <div class="rb-mobile-menu__lang" style="margin: 16px 0 20px 0; display: flex; justify-content: center;">
                <div class="rb-lang-switch rb-lang-switch--mobile" role="group" aria-label="Seleccionar idioma / Select language">
                    <button type="button" class="rb-lang-btn active" data-lang="es" aria-pressed="true">Español (ES)</button>
                    <span class="rb-lang-divider">|</span>
                    <button type="button" class="rb-lang-btn" data-lang="en" aria-pressed="false">English (EN)</button>
                </div>
            </div>

            <ul class="rb-mobile-menu__list">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rb-mobile-menu__link">Inicio</a></li>
                <li><a href="<?php echo esc_url( home_url( '/empresa' ) ); ?>" class="rb-mobile-menu__link">Empresa</a></li>
                
                <li class="rb-mobile-menu__item--accordion">
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>" class="rb-mobile-menu__link" style="flex-grow:1;">Productos</a>
                        <button type="button" class="rb-mobile-subtoggle" id="rb-mobile-prod-toggle" aria-expanded="false" aria-label="Ver líneas de productos" style="background:none; border:none; color:white; padding:8px 12px; font-size:1.2rem; cursor:pointer;">
                            +
                        </button>
                    </div>
                    <ul class="rb-mobile-submenu" id="rb-mobile-prod-list" style="display:none; list-style:none; padding-left:16px; margin: 6px 0 12px 0;">
                        <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-capturadores' ) ); ?>" class="rb-mobile-submenu__link">Fundas para Capturadores</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-tablets' ) ); ?>" class="rb-mobile-submenu__link">Fundas para Tablets</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-impresoras' ) ); ?>" class="rb-mobile-submenu__link">Fundas para Impresoras</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos/fundas-para-pos-moviles' ) ); ?>" class="rb-mobile-submenu__link">Fundas para POS Móviles</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos/valijas-de-seguridad' ) ); ?>" class="rb-mobile-submenu__link">Valijas de Seguridad</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/productos/candados-especiales' ) ); ?>" class="rb-mobile-submenu__link">Candados de Seguridad</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo esc_url( home_url( '/soluciones' ) ); ?>" class="rb-mobile-menu__link">Soluciones</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="rb-mobile-menu__link">Contacto</a></li>
            </ul>
            <div class="rb-mobile-menu__cta">
                <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="rb-btn rb-btn--primary" style="width:100%;">Solicitar Cotización</a>
                <a href="https://wa.me/569318360416?text=<?php echo urlencode('Hola ROLBAG, quisiera realizar una consulta comercial.'); ?>" target="_blank" rel="noopener noreferrer" class="rb-btn rb-btn--whatsapp" style="width:100%; margin-top:12px;">
                    <svg viewBox="0 0 24 24" width="20" height="20" style="fill:currentColor; margin-right:8px; vertical-align:middle;"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8.01 12.27C8.14 12.44 9.76 14.94 12.24 16C12.83 16.27 13.28 16.42 13.64 16.53C14.23 16.72 14.77 16.69 15.2 16.63C15.68 16.56 16.67 16.03 16.88 15.45C17.08 14.87 17.08 14.38 17.02 14.28C16.96 14.17 16.8 14.11 16.56 13.99C16.32 13.86 15.12 13.28 14.9 13.2C14.67 13.11 14.51 13.08 14.35 13.32C14.18 13.57 13.71 14.11 13.56 14.28C13.42 14.45 13.27 14.47 13.03 14.35C12.79 14.24 11.99 13.97 11.04 13.13C10.3 12.47 9.8 11.66 9.66 11.42C9.51 11.18 9.64 11.04 9.77 10.92C9.88 10.81 10.02 10.63 10.14 10.49C10.26 10.34 10.3 10.24 10.38 10.08C10.46 9.92 10.42 9.77 10.36 9.66C10.3 9.54 9.8 8.34 9.6 7.84C9.39 7.36 9.19 7.43 9.03 7.42C8.88 7.42 8.71 7.33 8.53 7.33Z"/></svg>
                    WhatsApp Directo
                </a>
            </div>
        </div>
    </div>
    <div id="rb-mobile-overlay" class="rb-mobile-overlay" aria-hidden="true"></div>
