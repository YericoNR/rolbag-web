<?php
/**
 * ROLBAG Theme functions and definitions
 */

if ( ! function_exists( 'rolbag_setup' ) ) :
	function rolbag_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		) );
		
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'rolbag' ),
			'footer' => esc_html__( 'Footer', 'rolbag' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'rolbag_setup' );

function rolbag_scripts() {
    // Fonts
    wp_enqueue_style( 'rolbag-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );
    
    // Main stylesheet (Carga global para la landing heredada y resto del sitio)
	wp_enqueue_style( 'rolbag-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Design System (Carga Aislada solo para la página de Preview)
    if ( is_page_template( 'page-design-system.php' ) ) {
        wp_enqueue_style( 'rolbag-ds-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;700&display=swap', array(), null );
        wp_enqueue_style( 'rolbag-design-system', get_template_directory_uri() . '/assets/css/design-system-main.css', array(), wp_get_theme()->get( 'Version' ) );
    }

    // Enqueue Master Design System & Assets for entire site
    wp_enqueue_style( 'rolbag-tech-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;700&display=swap', array(), null );
    wp_enqueue_style( 'rolbag-landing', get_template_directory_uri() . '/assets/css/landing.css', array(), wp_get_theme()->get( 'Version' ) );

    // Enqueue GSAP & Interaction Scripts
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), '3.12.2', true );
    wp_enqueue_script( 'rolbag-landing-js', get_template_directory_uri() . '/assets/js/landing.js', array('gsap', 'gsap-scrolltrigger'), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'rolbag-i18n-js', get_template_directory_uri() . '/assets/js/i18n.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'rolbag_scripts' );

// Desactivar emojis innecesarios para performance
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
