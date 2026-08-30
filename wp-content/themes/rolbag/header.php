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
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo-link">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand/logo.png' ); ?>" alt="ROLBAG" class="site-logo-img" style="height: 36px; width: auto;" />
                </a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" aria-label="Navegación principal">
				<ul class="nav-list" style="display:flex; list-style:none; gap:24px; margin:0; padding:0;">
                    <li><a href="<?php echo esc_url( home_url( '/#nosotros' ) ); ?>">Nosotros</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/productos' ) ); ?>">Productos</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#sectores' ) ); ?>">Sectores</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#soluciones' ) ); ?>">A Medida</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>">Contacto</a></li>
                </ul>
			</nav><!-- #site-navigation -->

            <div class="header-cta">
                <a href="<?php echo esc_url( home_url( '/#cotizar' ) ); ?>" class="btn btn-primary">Solicitar Cotización</a>
            </div>
		</div>
	</header><!-- #masthead -->
