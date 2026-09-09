<?php
/**
 * Single Producto Template - Ficha de Línea Oficial de Producto ROLBAG
 *
 * Muestra la información técnica, galería fotográfica interactiva, características,
 * beneficios operacionales, composición de materiales, visualizador de compatibilidad
 * con chips técnicos de modelos por marca, y formulario de cotización directa.
 *
 * @package Rolbag
 */

get_header('landing');

$post_id = get_the_ID();
$short_title = get_post_meta( $post_id, 'rolbag_short_title', true ) ?: get_the_title();

// Características
$caracteristicas_meta = get_post_meta( $post_id, 'rolbag_caracteristicas', true );
$caracteristicas = is_array( $caracteristicas_meta ) ? $caracteristicas_meta : json_decode( $caracteristicas_meta, true );
if ( ! is_array( $caracteristicas ) && ! empty( $caracteristicas_meta ) ) {
    $caracteristicas = array_filter( array_map( 'trim', explode( "\n", str_replace( "\r", "", $caracteristicas_meta ) ) ) );
}

// Beneficios
$beneficios_meta = get_post_meta( $post_id, 'rolbag_beneficios', true );
$beneficios = is_array( $beneficios_meta ) ? $beneficios_meta : json_decode( $beneficios_meta, true );
if ( ! is_array( $beneficios ) && ! empty( $beneficios_meta ) ) {
    $beneficios = array_filter( array_map( 'trim', explode( "\n", str_replace( "\r", "", $beneficios_meta ) ) ) );
}

// Materiales
$materiales = get_post_meta( $post_id, 'rolbag_materiales', true );

// Marcas y Modelos
$brands_models_meta = get_post_meta( $post_id, 'rolbag_brands_models', true );
$brands_models = is_array( $brands_models_meta ) ? $brands_models_meta : json_decode( $brands_models_meta, true );
if ( ! is_array( $brands_models ) ) {
    $brands_models = array();
}

// Contar total de modelos compatibles
$total_models_count = 0;
foreach ( $brands_models as $b_name => $b_models ) {
    if ( is_array( $b_models ) ) {
        $total_models_count += count( $b_models );
    } else {
        $total_models_count += 1;
    }
}

// Construcción inteligente de la Galería de Fotos Reales con Fondo Blanco de Estudio
$theme_uri = get_template_directory_uri();
$product_slug = get_post_field( 'post_name', $post_id );
$is_confecciones_especiales = ( $product_slug === 'confecciones-especiales' );

$real_gallery = array();
$special_galleries = array();

// 1. INTENTAR LEER GALERÍA DINÁMICA (NUEVO MÉTODO AUTOADMINISTRABLE)
$has_dynamic_gallery = false;

// A. Si el usuario subió una Imagen Destacada (Featured Image), la usamos como la primera de la galería.
if ( has_post_thumbnail( $post_id ) ) {
    $real_gallery[] = array(
        'url'   => get_the_post_thumbnail_url( $post_id, 'large' ),
        'title' => get_the_title() . ' - Principal'
    );
    $has_dynamic_gallery = true; // Ya tenemos contenido propio, ignoramos el fallback hardcoded.
}

// B. Leer la Galería de Vistas Adicionales
$gallery_meta = get_post_meta( $post_id, 'rolbag_gallery', true );
$dynamic_gallery_ids = array();
if ( is_array( $gallery_meta ) ) {
    $dynamic_gallery_ids = $gallery_meta;
} elseif ( is_string( $gallery_meta ) ) {
    $decoded = json_decode( $gallery_meta, true );
    if ( is_array( $decoded ) ) {
        $dynamic_gallery_ids = $decoded;
    } else {
        $dynamic_gallery_ids = array_filter( array_map('trim', explode(',', $gallery_meta)) );
    }
}

if ( ! $is_confecciones_especiales && count($dynamic_gallery_ids) > 0 ) {
    foreach ( $dynamic_gallery_ids as $att_id ) {
        if ( is_numeric($att_id) ) {
            // Usamos tamaño 'large' o 'full' para que el zoom funcione bien
            $img_url = wp_get_attachment_image_url( $att_id, 'large' );
            if ( $img_url ) {
                $real_gallery[] = array(
                    'url'   => $img_url,
                    'title' => get_the_title() . ' - Vista ' . (count($real_gallery) + 1)
                );
                $has_dynamic_gallery = true;
            }
        }
    }
}

// 2. FALLBACK A LÓGICA ANTIGUA (Si no hay ni destacada ni galería dinámica)
if ( ! $has_dynamic_gallery ) {
    if ( $product_slug === 'fundas-para-capturadores' ) {
        $real_gallery = array(
            array(
                'url'   => $theme_uri . '/assets/images/galeria/capturadores/honeywell_ck65_lateral.webp',
                'title' => 'Funda para Capturador Honeywell CK65 - Vista Lateral'
            ),
            array(
                'url'   => $theme_uri . '/assets/images/galeria/capturadores/honeywell_ck65_frontal.webp',
                'title' => 'Funda para Capturador Honeywell CK65 - Vista Frontal'
            ),
            array(
                'url'   => $theme_uri . '/assets/images/galeria/capturadores/zebra_frontal.webp',
                'title' => 'Funda para Capturador Zebra TC58 TC21 - Vista Frontal'
            ),
            array(
                'url'   => $theme_uri . '/assets/images/galeria/capturadores/pistol_grip_lateral.webp',
                'title' => 'Funda para Capturador con Pistol Grip Zebra MC9300 - Vista Lateral'
            ),
            array(
                'url'   => $theme_uri . '/assets/images/galeria/capturadores/pistol_grip_frontal.webp',
                'title' => 'Funda para Capturador con Pistol Grip Zebra MC9300 - Vista Frontal'
            ),
            array(
                'url'   => $theme_uri . '/assets/images/galeria/capturadores/zebra_lateral.webp',
                'title' => 'Funda para Capturador Zebra TC58 TC21 - Vista Lateral'
            )
        );
    } elseif ( $product_slug === 'fundas-para-impresoras' ) {
        $real_gallery = array(
            array( 'url' => $theme_uri . '/assets/images/galeria/impresoras/impresora_01.webp', 'title' => 'Funda para Impresora Portátil Bixolon Zebra - Vista Frontal' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/impresoras/impresora_02.webp', 'title' => 'Funda para Impresora Portátil Bixolon Zebra - Vista Lateral' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/impresoras/impresora_03.webp', 'title' => 'Funda para Impresora Portátil Bixolon Zebra - Vista Posterior' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/impresoras/impresora_04.webp', 'title' => 'Funda para Impresora Portátil Bixolon Zebra - Detalle Superior' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/impresoras/impresora_05.webp', 'title' => 'Funda para Impresora Portátil Bixolon Zebra - Detalle Inferior' )
        );
    } elseif ( $product_slug === 'fundas-para-pos-moviles' ) {
        $real_gallery = array(
            array( 'url' => $theme_uri . '/assets/images/galeria/pos_moviles/pos_02.webp', 'title' => 'Funda para POS Móvil Transbank SumUp - Vista Lateral' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/pos_moviles/pos_04.webp', 'title' => 'Funda para POS Móvil Transbank SumUp - Detalle Operativo' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/pos_moviles/pos_03.webp', 'title' => 'Funda para POS Móvil Transbank SumUp - Vista Posterior' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/pos_moviles/pos_01.webp', 'title' => 'Funda para POS Móvil Transbank SumUp - Vista Frontal' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/pos_moviles/pos_06.webp', 'title' => 'Funda para POS Móvil Transbank SumUp - Ángulo 45 Grados' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/pos_moviles/pos_05.webp', 'title' => 'Funda para POS Móvil Transbank SumUp - Detalle Ranura' )
        );
    } elseif ( $product_slug === 'fundas-para-tablets' ) {
        $real_gallery = array(
            array( 'url' => $theme_uri . '/assets/images/galeria/tablets/tablet_05.webp', 'title' => 'Funda para Tablet Industrial Samsung Zebra - Soporte Plegable' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/tablets/tablet_02.webp', 'title' => 'Funda para Tablet Industrial Samsung Zebra - Vista Lateral' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/tablets/tablet_01.webp', 'title' => 'Funda para Tablet Industrial Samsung Zebra - Vista Frontal' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/tablets/tablet_03.webp', 'title' => 'Funda para Tablet Industrial Samsung Zebra - Vista Posterior' ),
            array( 'url' => $theme_uri . '/assets/images/galeria/tablets/tablet_04.webp', 'title' => 'Funda para Tablet Industrial Samsung Zebra - Handstrap' )
        );
    } elseif ( $is_confecciones_especiales ) {
        $special_galleries = array(
            'estructuras' => array(
                'title' => 'ESTRUCTURAS ESPECIALES',
                'desc'  => 'Fundas de alta rigidez estructural y sujeción reforzada para hardware especializado.',
                'items' => array(
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/estructuras/1.png', 'title' => 'Estructuras Especiales - Modelo 01' ),
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/estructuras/2.png', 'title' => 'Estructuras Especiales - Modelo 02' ),
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/estructuras/3.png', 'title' => 'Estructuras Especiales - Modelo 03' ),
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/estructuras/4.png', 'title' => 'Estructuras Especiales - Modelo 04' ),
                ),
            ),
            'wearables' => array(
                'title' => 'SOPORTE DE MUÑECA (WEARABLES)',
                'desc'  => 'Sistemas ergonómicos de sujeción para antebrazos y muñecas para operarios con manos libres.',
                'items' => array(
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/wearables/1.png', 'title' => 'Soporte de Muñeca Wearable - Modelo 01' ),
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/wearables/2.png', 'title' => 'Soporte de Muñeca Wearable - Modelo 02' ),
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/wearables/3.png', 'title' => 'Soporte de Muñeca Wearable - Modelo 03' ),
                ),
            ),
            'radios' => array(
                'title' => 'RADIOS Y COMUNICACION',
                'desc'  => 'Fundas balísticas para radios portátiles VHF/UHF de faena, seguridad y transporte.',
                'items' => array(
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/radios/1.png', 'title' => 'Radios y Comunicación - Modelo 01' ),
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/radios/2.png', 'title' => 'Radios y Comunicación - Modelo 02' ),
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/radios/3.png', 'title' => 'Radios y Comunicación - Modelo 03' ),
                ),
            ),
            'equipos_especiales' => array(
                'title' => 'EQUIPOS ESPECIALES',
                'desc'  => 'Desarrollos personalizados exclusivos según muestra física o plano del fabricante.',
                'items' => array(
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/equipos_especiales/1.png', 'title' => 'Equipos Especiales - Modelo 01' ),
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/equipos_especiales/2.png', 'title' => 'Equipos Especiales - Modelo 02' ),
                    array( 'url' => $theme_uri . '/assets/images/galeria/confecciones_especiales/equipos_especiales/3.png', 'title' => 'Equipos Especiales - Modelo 03' ),
                ),
            ),
        );
        // Portada del hero
        $active_main_image = $special_galleries['estructuras']['items'][0]['url'];
    } else {
        // Fallback general
        $main_image_meta = get_post_meta( $post_id, 'rolbag_image', true );
        if ( $main_image_meta ) {
            $real_gallery[] = array(
                'url'   => $theme_uri . '/assets/images/generated/' . $main_image_meta,
                'title' => get_the_title()
            );
        } elseif ( has_post_thumbnail() ) {
            // Intenta usar la imagen destacada si existe
            $real_gallery[] = array(
                'url'   => get_the_post_thumbnail_url( $post_id, 'large' ),
                'title' => get_the_title()
            );
        }
    }
}

if ( ! $is_confecciones_especiales ) {
    $active_main_image = ! empty( $real_gallery ) ? $real_gallery[0]['url'] : get_the_post_thumbnail_url( $post_id, 'large' );
}

$whatsapp = '569318360416';
$wa_msg = urlencode( 'Hola ROLBAG, quisiera solicitar asesoría y cotización para la línea: ' . get_the_title() );
?>

<main id="primary" class="site-main rb-product-page">

    <!-- Header / Hero de Producto -->
    <section class="rb-product-hero">
        <div class="rb-container">
            <nav class="rb-breadcrumb" aria-label="Migas de pan">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
                <span class="rb-breadcrumb-sep">/</span>
                <a href="<?php echo esc_url( home_url( '/productos' ) ); ?>">Productos</a>
                <span class="rb-breadcrumb-sep">/</span>
                <span class="rb-breadcrumb-current" aria-current="page"><?php echo esc_html( $short_title ); ?></span>
            </nav>
            
            <div class="rb-product-hero__grid">
                <!-- Columna Izquierda: Galería Principal -->
                <div class="rb-product-gallery-col">
                    <div class="rb-product-main-img-wrap" style="background:#ffffff; border-radius:16px; border:1px solid #e2e8f0; padding:12px; display:flex; align-items:center; justify-content:center; height:480px; position:relative; box-shadow:0 8px 24px rgba(0,0,0,0.06); cursor:zoom-in;">
                        <?php if ( $active_main_image ) : ?>
                            <img id="rb-main-view" src="<?php echo esc_url( $active_main_image ); ?>" alt="<?php echo esc_attr( ! empty( $real_gallery ) ? $real_gallery[0]['title'] : get_the_title() ); ?>" class="rb-product-main-img" style="max-height:456px; width:100%; height:100%; object-fit:contain; transition:opacity 0.25s ease;" data-gallery-group="<?php echo $is_confecciones_especiales ? 'estructuras' : 'main'; ?>" data-gallery-index="0" />
                            <span class="rb-zoom-hint" style="position:absolute; bottom:12px; right:12px; background:rgba(15,23,42,0.75); color:#fff; font-size:0.75rem; padding:4px 10px; border-radius:20px; display:flex; align-items:center; gap:5px; pointer-events:none; backdrop-filter:blur(4px);">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg>
                                Click para ampliar
                            </span>
                        <?php else : ?>
                            <?php the_post_thumbnail( 'large', array( 'class' => 'rb-product-main-img', 'alt' => esc_attr( get_the_title() ) ) ); ?>
                        <?php endif; ?>
                    </div>
                    <?php if ( ! $is_confecciones_especiales && ! empty( $real_gallery ) && count( $real_gallery ) > 1 ) : ?>
                        <div class="rb-product-thumbs" style="display:flex; gap:10px; margin-top:14px; overflow-x:auto; padding-bottom:6px;">
                            <?php foreach ( $real_gallery as $idx => $item ) : ?>
                                <button type="button" class="rb-thumb-btn <?php echo ( $idx === 0 ) ? 'active' : ''; ?>" data-img="<?php echo esc_url( $item['url'] ); ?>" data-index="<?php echo $idx; ?>" aria-label="<?php echo esc_attr( $item['title'] ); ?>" style="flex:0 0 76px; height:76px; border-radius:10px; border:2px solid <?php echo ( $idx === 0 ) ? '#00a3e0' : '#e2e8f0'; ?>; background:#ffffff; padding:4px; cursor:pointer; transition:all 0.2s ease;">
                                    <img src="<?php echo esc_url( $item['url'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" style="width:100%; height:100%; object-fit:contain;" />
                                </button>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Columna Derecha: Información Principal & Acciones -->
                <div class="rb-product-info-col">
                    <div style="display:flex; gap:8px; align-items:center; margin-bottom:12px;">
                        <span class="rb-badge">Línea Oficial ROLBAG</span>
                        <?php if ( $total_models_count > 0 ) : ?>
                            <span class="rb-badge" style="background-color:rgba(0,163,224,0.12); color:var(--color-brand-accent);">
                                +<?php echo esc_html( $total_models_count ); ?> Modelos / Sistemas
                            </span>
                        <?php endif; ?>
                    </div>

                    <h1 class="rb-product-title"><?php the_title(); ?></h1>
                    
                    <div class="rb-product-lead">
                        <?php the_content(); ?>
                    </div>

                    <div class="rb-product-highlights">
                        <div class="rb-highlight-item">
                            <strong>Fabricación:</strong> Confección nacional a medida en taller propio
                        </div>
                        <div class="rb-highlight-item">
                            <strong>Tiempo para modelos nuevos:</strong> 48 horas para muestra física de aprobación
                        </div>
                        <div class="rb-highlight-item">
                            <strong>Cobertura:</strong> Despachos a todas las regiones de Chile
                        </div>
                    </div>

                    <div class="rb-product-actions">
                        <a href="#cotizar" class="rb-btn rb-btn--primary rb-btn--lg">Solicitar Cotización</a>
                        <a href="https://wa.me/<?php echo esc_attr( $whatsapp ); ?>?text=<?php echo $wa_msg; ?>" target="_blank" rel="noopener noreferrer" class="rb-btn rb-btn--whatsapp rb-btn--lg">
                            <svg viewBox="0 0 24 24" width="22" height="22" style="fill:currentColor; margin-right:8px; vertical-align:middle;"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8.01 12.27C8.14 12.44 9.76 14.94 12.24 16C12.83 16.27 13.28 16.42 13.64 16.53C14.23 16.72 14.77 16.69 15.2 16.63C15.68 16.56 16.67 16.03 16.88 15.45C17.08 14.87 17.08 14.38 17.02 14.28C16.96 14.17 16.8 14.11 16.56 13.99C16.32 13.86 15.12 13.28 14.9 13.2C14.67 13.11 14.51 13.08 14.35 13.32C14.18 13.57 13.71 14.11 13.56 14.28C13.42 14.45 13.27 14.47 13.03 14.35C12.79 14.24 11.99 13.97 11.04 13.13C10.3 12.47 9.8 11.66 9.66 11.42C9.51 11.18 9.64 11.04 9.77 10.92C9.88 10.81 10.02 10.63 10.14 10.49C10.26 10.34 10.3 10.24 10.38 10.08C10.46 9.92 10.42 9.77 10.36 9.66C10.3 9.54 9.8 8.34 9.6 7.84C9.39 7.36 9.19 7.43 9.03 7.42C8.88 7.42 8.71 7.33 8.53 7.33Z"/></svg>
                            WhatsApp Comercial Directo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if ( $is_confecciones_especiales && ! empty( $special_galleries ) ) : ?>
        <!-- Galerías Separadas de Confecciones Especiales (Agrupadas por Carpeta Oficial) -->
        <section class="rb-section rb-special-galleries-section" style="background:#f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
            <div class="rb-container">
                <div class="rb-section-header text-center" style="margin-bottom: 48px;">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">GALERÍAS DE CONFECCIÓN TÉCNICA</span>
                    <h2 class="rb-h2">Desarrollos por Especialidad</h2>
                    <p class="rb-section-subtitle" style="max-width: 760px; margin: 0 auto;">Explora nuestras soluciones personalizadas organizadas por área técnica. Haz clic en cualquier fotografía para abrir el visor en alta resolución.</p>
                </div>

                <?php foreach ( $special_galleries as $group_key => $group ) : ?>
                    <div class="rb-special-group-block" style="margin-bottom: 56px;" id="galeria-<?php echo esc_attr( $group_key ); ?>">
                        <div class="rb-special-group-header" style="display:flex; justify-content:space-between; align-items:flex-end; border-bottom:2px solid #e2e8f0; padding-bottom:12px; margin-bottom:24px; flex-wrap:wrap; gap:12px;">
                            <div>
                                <h3 class="rb-h3" style="margin:0; color:var(--color-brand-primary); font-size:1.35rem; font-weight:800; letter-spacing:0.02em;"><?php echo esc_html( $group['title'] ); ?></h3>
                                <p style="margin:4px 0 0 0; color:#64748b; font-size:0.92rem;"><?php echo esc_html( $group['desc'] ); ?></p>
                            </div>
                            <span class="rb-badge" style="background:rgba(0,163,224,0.1); color:var(--color-brand-accent); font-weight:700;">
                                <?php echo count( $group['items'] ); ?> Fotografías
                            </span>
                        </div>

                        <div class="rb-special-group-grid" style="display:grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap:22px;">
                            <?php foreach ( $group['items'] as $item_idx => $img_item ) : ?>
                                <div class="rb-special-card" data-gallery-group="<?php echo esc_attr( $group_key ); ?>" data-gallery-index="<?php echo $item_idx; ?>" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:14px; overflow:hidden; box-shadow:0 4px 14px rgba(0,0,0,0.04); cursor:pointer; transition:transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s ease;">
                                    <div class="rb-special-card__img-wrap" style="height:270px; padding:16px; display:flex; align-items:center; justify-content:center; position:relative; background:#ffffff;">
                                        <img src="<?php echo esc_url( $img_item['url'] ); ?>" alt="<?php echo esc_attr( $img_item['title'] ); ?>" style="max-height:100%; max-width:100%; width:auto; height:auto; object-fit:contain; transition:transform 0.25s ease;" />
                                        <span class="rb-card-zoom-badge" style="position:absolute; top:12px; right:12px; background:rgba(15,23,42,0.7); color:#fff; width:34px; height:34px; border-radius:50%; display:flex; align-items:center; justify-content:center; backdrop-filter:blur(4px);">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg>
                                        </span>
                                    </div>
                                    <div class="rb-special-card__footer" style="padding:12px 18px; background:#f8fafc; border-top:1px solid #f1f5f9; display:flex; justify-content:space-between; align-items:center;">
                                        <span style="font-size:0.88rem; font-weight:600; color:#1e293b;"><?php echo esc_html( $group['title'] ); ?> #<?php echo $item_idx + 1; ?></span>
                                        <span style="font-size:0.8rem; color:var(--color-brand-accent); font-weight:700;">Ampliar &rarr;</span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- Características, Beneficios y Materiales -->
    <section class="rb-section rb-product-details">
        <div class="rb-container">
            <div class="rb-details-grid">
                <!-- Características -->
                <?php if ( ! empty( $caracteristicas ) ) : ?>
                    <div class="rb-detail-card">
                        <h2 class="rb-h3 rb-text-primary">Características Técnicas</h2>
                        <ul class="rb-feature-list">
                            <?php foreach ( $caracteristicas as $item ) : ?>
                                <li><?php echo esc_html( $item ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Beneficios -->
                <?php if ( ! empty( $beneficios ) ) : ?>
                    <div class="rb-detail-card">
                        <h2 class="rb-h3 rb-text-primary">Beneficios Operacionales</h2>
                        <ul class="rb-feature-list rb-feature-list--benefits">
                            <?php foreach ( $beneficios as $item ) : ?>
                                <li><?php echo esc_html( $item ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Materiales -->
            <?php if ( ! empty( $materiales ) ) : ?>
                <div class="rb-materials-box">
                    <h3 class="rb-h4 rb-text-primary">Materiales y Confección</h3>
                    <p><?php echo esc_html( $materiales ); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Compatibilidad de Marcas y Modelos (Chips Técnicos y Dimensiones) -->
    <?php if ( ! empty( $brands_models ) ) : 
        $post_slug = get_post_field( 'post_name', $post_id );
        $is_valijas = ( $post_slug === 'valijas-de-seguridad' || strpos( strtolower( get_the_title() ), 'valija' ) !== false );
        $num_brands = count( $brands_models );
        $is_few_brands = ( $num_brands <= 2 );
    ?>
        <section class="rb-section rb-compat-section" id="compatibilidad">
            <div class="rb-container">
                <div class="rb-section-header text-center">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">PROFUNDIDAD DE CATÁLOGO</span>
                    <?php if ( $is_valijas ) : ?>
                        <h2 class="rb-h2">Medidas Estándar, Cubicaje y Modelos</h2>
                        <p class="rb-section-subtitle">Confeccionamos en tela Cordura impermeable con medidas estándar en litros o fabricadas 100% a la medida de tu carga.</p>
                    <?php else : ?>
                        <h2 class="rb-h2">Compatibilidad y Modelos Desarrollados</h2>
                        <p class="rb-section-subtitle">Disponemos de patrones de confección probados para cada modelo y fabricante del mercado.</p>
                    <?php endif; ?>

                    <?php if ( ! $is_valijas && $total_models_count > 6 ) : ?>
                        <!-- Pills Rápidas de Filtrado por Marca -->
                        <div class="rb-brand-filter-pills-wrap">
                            <button type="button" class="rb-brand-pill active" data-brand-filter="all">
                                Todas las Marcas (<?php echo esc_html( $total_models_count ); ?>)
                            </button>
                            <?php foreach ( $brands_models as $brand_name => $m_list ) : 
                                $count_m = is_array( $m_list ) ? count( $m_list ) : 1;
                            ?>
                                <button type="button" class="rb-brand-pill" data-brand-filter="<?php echo esc_attr( strtolower( $brand_name ) ); ?>">
                                    <?php echo esc_html( $brand_name ); ?> (<?php echo esc_html( $count_m ); ?>)
                                </button>
                            <?php endforeach; ?>
                        </div>

                        <!-- Buscador en tiempo real -->
                        <div class="rb-model-search-wrap">
                            <input type="text" id="rb-model-filter" placeholder="Buscar modelo o marca (ej. Zebra, TC58, Honeywell, CT45, Sunmi, ZQ630)..." aria-label="Filtrar modelos compatibles" class="rb-search-input" />
                        </div>
                    <?php endif; ?>
                </div>

                <?php if ( $is_valijas ) : ?>
                    <!-- Vista Especializada de Valijas: Tabla de Medidas y Formatos -->
                    <div class="rb-valijas-models-grid">
                        <?php foreach ( $brands_models as $category_name => $items ) : ?>
                            <div class="rb-valija-card-group">
                                <div class="rb-valija-card-group__header">
                                    <h3 class="rb-valija-group-title"><?php echo esc_html( $category_name ); ?></h3>
                                    <span class="rb-badge rb-badge--light"><?php echo is_array( $items ) ? count( $items ) : 1; ?> opciones</span>
                                </div>
                                <div class="rb-valija-items-grid">
                                    <?php if ( is_array( $items ) ) : ?>
                                        <?php foreach ( $items as $code => $specs ) : ?>
                                            <div class="rb-valija-item-box">
                                                <div class="rb-valija-code"><?php echo esc_html( $code ); ?></div>
                                                <div class="rb-valija-specs"><?php echo esc_html( $specs ); ?></div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <div class="rb-valija-item-box">
                                            <div class="rb-valija-specs"><?php echo esc_html( $items ); ?></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else : ?>
                    <!-- Vista de Grilla de Marcas y Modelos (Chips Técnicos) -->
                    <div class="rb-compat-brands-grid <?php echo $is_few_brands ? 'rb-compat-brands-grid--compact' : ''; ?>" id="rb-compat-grid">
                        <?php foreach ( $brands_models as $brand => $models ) : 
                            $brand_count = is_array( $models ) ? count( $models ) : 1;
                            $brand_key = strtolower( trim( $brand ) );
                        ?>
                            <div class="rb-brand-card" data-brand="<?php echo esc_attr( $brand_key ); ?>" id="marca-<?php echo esc_attr( sanitize_title( $brand ) ); ?>">
                                <div class="rb-brand-card__header">
                                    <div class="rb-brand-title-wrap" style="display:flex; align-items:center; gap:10px; flex-wrap:wrap;">
                                        <h3 class="rb-brand-name"><?php echo esc_html( $brand ); ?></h3>
                                    </div>
                                    <span class="rb-brand-count"><?php echo esc_html( $brand_count ); ?> <?php echo ( $brand_count === 1 ) ? 'opción' : 'modelos'; ?></span>
                                </div>
                                
                                <div class="rb-models-chips-wrap">
                                    <?php if ( is_array( $models ) ) : ?>
                                        <?php foreach ( $models as $m_key => $m_val ) : 
                                            $model_name = is_string( $m_key ) ? $m_key : $m_val;
                                            $model_desc = is_string( $m_key ) ? $m_val : '';
                                        ?>
                                            <div class="rb-model-chip" data-model="<?php echo esc_attr( strtolower( $model_name . ' ' . $model_desc ) ); ?>" title="<?php echo esc_attr( $model_desc ); ?>">
                                                <span class="rb-model-chip__code"><?php echo esc_html( $model_name ); ?></span>
                                                <?php if ( ! empty( $model_desc ) ) : ?>
                                                    <span class="rb-model-chip__desc"><?php echo esc_html( $model_desc ); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <div class="rb-model-chip" data-model="<?php echo esc_attr( strtolower( $models ) ); ?>">
                                            <span class="rb-model-chip__code"><?php echo esc_html( $models ); ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="rb-compat-note">
                    <div style="display:flex; gap:16px; align-items:flex-start;">
                        <div class="rb-notice-icon" style="flex-shrink:0;">!</div>
                        <div>
                            <strong style="color:var(--color-brand-primary); font-size:1rem; display:block; margin-bottom:4px;">¿Tu modelo no aparece en la lista o requieres un diseño exclusivo?</strong>
                            <p style="margin:0; font-size:0.92rem; color:#475569;">Confeccionamos fundas y valijas a la medida exacta de tu equipo. Solo requerimos disponer del dispositivo físico durante <strong>48 horas</strong> en nuestro taller central de Santiago Centro para realizar el patronaje milimétrico y la muestra real de aprobación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Formulario de Cotización Específico -->
    <section id="cotizar" class="rb-section rb-quote-section">
        <div class="rb-container">
            <div class="rb-quote-box">
                <div class="rb-quote-box__header text-center">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">COTIZACIÓN DIRECTA</span>
                    <h2 class="rb-h2">Solicitar Cotización: <?php echo esc_html( $short_title ); ?></h2>
                    <p class="rb-section-subtitle">Completa los datos de tu empresa y el equipamiento que requieres proteger. Te responderemos a la brevedad.</p>
                </div>

                <form class="rb-quote-form" action="<?php echo esc_url( home_url( '/contacto' ) ); ?>" method="GET">
                    <input type="hidden" name="linea" value="<?php echo esc_attr( $short_title ); ?>">
                    <div class="rb-form-grid">
                        <div class="rb-form-group">
                            <label for="q-nombre">Nombre y Apellido *</label>
                            <input type="text" id="q-nombre" name="nombre" required placeholder="Tu nombre" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="q-empresa">Empresa / Razón Social *</label>
                            <input type="text" id="q-empresa" name="empresa" required placeholder="Nombre de tu empresa" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="q-email">Correo Electrónico Corporativo *</label>
                            <input type="email" id="q-email" name="email" required placeholder="correo@empresa.cl" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="q-telefono">Teléfono / WhatsApp *</label>
                            <input type="tel" id="q-telefono" name="telefono" required placeholder="+56 9 1234 5678" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="q-modelo">Marca y Modelo(s) del equipo *</label>
                            <input type="text" id="q-modelo" name="modelo" required placeholder="Ej. Zebra TC58 / 25 unidades" class="rb-input" />
                        </div>
                        <div class="rb-form-group">
                            <label for="q-cantidad">Cantidad estimada de unidades *</label>
                            <input type="number" id="q-cantidad" name="cantidad" required min="1" placeholder="Ej. 50" class="rb-input" />
                        </div>
                        <div class="rb-form-group rb-form-group--full">
                            <label for="q-mensaje">Detalles adicionales o requerimientos especiales</label>
                            <textarea id="q-mensaje" name="mensaje" rows="4" placeholder="Indica si requieres correa de hombro, compatibilidad con pistol grip, soporte de vehículo o bordado corporativo..." class="rb-textarea"></textarea>
                        </div>
                    </div>
                    <div class="rb-form-submit text-center">
                        <button type="submit" class="rb-btn rb-btn--primary rb-btn--lg">Enviar Solicitud de Cotización</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

<!-- LIGHTBOX MODAL DE FOTOGRAFÍAS EN ALTA RESOLUCIÓN (B2B ROLBAG) -->
<div id="rb-lightbox" class="rb-lightbox" aria-hidden="true" role="dialog" style="display:none;">
    <div class="rb-lightbox__backdrop" id="rb-lightbox-backdrop"></div>
    <div class="rb-lightbox__container">
        <button type="button" class="rb-lightbox__close" id="rb-lightbox-close" aria-label="Cerrar visor de fotografía">&times;</button>
        <button type="button" class="rb-lightbox__nav rb-lightbox__prev" id="rb-lightbox-prev" aria-label="Fotografía anterior">&#10094;</button>
        <div class="rb-lightbox__content">
            <div class="rb-lightbox__img-wrap">
                <img id="rb-lightbox-img" src="" alt="Fotografía técnica ROLBAG" class="rb-lightbox__img" />
            </div>
            <div class="rb-lightbox__info">
                <div id="rb-lightbox-caption" class="rb-lightbox__caption"></div>
                <div id="rb-lightbox-counter" class="rb-lightbox__counter"></div>
            </div>
        </div>
        <button type="button" class="rb-lightbox__nav rb-lightbox__next" id="rb-lightbox-next" aria-label="Fotografía siguiente">&#10095;</button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Estructura de Galerías Aisladas para Lightbox
    const allGalleries = {
        <?php if ( $is_confecciones_especiales ) : ?>
            <?php foreach ( $special_galleries as $gk => $grp ) : ?>
                '<?php echo esc_js( $gk ); ?>': <?php echo json_encode( $grp['items'] ); ?>,
            <?php endforeach; ?>
        <?php else : ?>
            'main': <?php echo json_encode( $real_gallery ); ?>,
        <?php endif; ?>
    };

    let currentGalleryGroup = '<?php echo $is_confecciones_especiales ? 'estructuras' : 'main'; ?>';
    let currentImageIndex = 0;

    const lightbox = document.getElementById('rb-lightbox');
    const lightboxImg = document.getElementById('rb-lightbox-img');
    const lightboxCaption = document.getElementById('rb-lightbox-caption');
    const lightboxCounter = document.getElementById('rb-lightbox-counter');
    const lightboxClose = document.getElementById('rb-lightbox-close');
    const lightboxBackdrop = document.getElementById('rb-lightbox-backdrop');
    const lightboxPrev = document.getElementById('rb-lightbox-prev');
    const lightboxNext = document.getElementById('rb-lightbox-next');

    function updateLightbox() {
        const groupItems = allGalleries[currentGalleryGroup] || [];
        if (!groupItems.length) return;
        if (currentImageIndex < 0) currentImageIndex = groupItems.length - 1;
        if (currentImageIndex >= groupItems.length) currentImageIndex = 0;
        
        const item = groupItems[currentImageIndex];
        if (item) {
            lightboxImg.style.opacity = '0.4';
            lightboxImg.src = item.url;
            lightboxImg.alt = item.title;
            lightboxImg.onload = function() {
                lightboxImg.style.opacity = '1';
            };
            lightboxCaption.textContent = item.title;
            lightboxCounter.textContent = (currentImageIndex + 1) + ' / ' + groupItems.length;
        }
    }

    function openLightbox(group, index) {
        if (!allGalleries[group] || !allGalleries[group].length) return;
        currentGalleryGroup = group;
        currentImageIndex = (index >= 0 && index < allGalleries[group].length) ? index : 0;
        updateLightbox();
        lightbox.style.display = 'flex';
        setTimeout(function() {
            lightbox.classList.add('is-open');
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('is-open');
        setTimeout(function() {
            lightbox.style.display = 'none';
            document.body.style.overflow = '';
        }, 220);
    }

    function nextImage() {
        const groupItems = allGalleries[currentGalleryGroup] || [];
        if (groupItems.length <= 1) return;
        currentImageIndex = (currentImageIndex + 1) % groupItems.length;
        updateLightbox();
    }

    function prevImage() {
        const groupItems = allGalleries[currentGalleryGroup] || [];
        if (groupItems.length <= 1) return;
        currentImageIndex = (currentImageIndex - 1 + groupItems.length) % groupItems.length;
        updateLightbox();
    }

    if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
    if (lightboxBackdrop) lightboxBackdrop.addEventListener('click', closeLightbox);
    if (lightboxPrev) lightboxPrev.addEventListener('click', function(e) {
        e.stopPropagation();
        prevImage();
    });
    if (lightboxNext) lightboxNext.addEventListener('click', function(e) {
        e.stopPropagation();
        nextImage();
    });

    // Teclado: ESC para cerrar, Flechas para navegar
    document.addEventListener('keydown', function(e) {
        if (!lightbox || !lightbox.classList.contains('is-open')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'ArrowLeft') prevImage();
    });

    // Soporte táctil / swipe en móvil
    let touchStartX = 0;
    let touchEndX = 0;
    if (lightbox) {
        lightbox.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        lightbox.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            if (touchEndX < touchStartX - 40) nextImage();
            if (touchEndX > touchStartX + 40) prevImage();
        }, { passive: true });
    }

    // 2. Conmutador de Galería en Hero y apertura de Lightbox
    const mainImg = document.getElementById('rb-main-view');
    const mainImgWrap = document.querySelector('.rb-product-main-img-wrap');
    const thumbBtns = document.querySelectorAll('.rb-thumb-btn');

    let activeThumbIndex = 0;

    if (mainImgWrap) {
        mainImgWrap.addEventListener('click', function() {
            const grp = mainImg ? (mainImg.getAttribute('data-gallery-group') || 'main') : 'main';
            openLightbox(grp, activeThumbIndex);
        });
    }

    if (thumbBtns.length > 0) {
        thumbBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const newSrc = this.getAttribute('data-img');
                const newIdx = parseInt(this.getAttribute('data-index'), 10) || 0;
                activeThumbIndex = newIdx;
                if (mainImg && newSrc) {
                    mainImg.style.opacity = '0.3';
                    setTimeout(function() {
                        mainImg.src = newSrc;
                        mainImg.style.opacity = '1';
                    }, 120);
                    thumbBtns.forEach(b => {
                        b.classList.remove('active');
                        b.style.borderColor = '#e2e8f0';
                    });
                    this.classList.add('active');
                    this.style.borderColor = '#00a3e0';
                }
            });
        });
    }

    // 3. Apertura de Lightbox desde tarjetas de Confecciones Especiales
    document.querySelectorAll('.rb-special-card').forEach(card => {
        card.addEventListener('click', function() {
            const grp = this.getAttribute('data-gallery-group');
            const idx = parseInt(this.getAttribute('data-gallery-index'), 10) || 0;
            openLightbox(grp, idx);
        });
    });

    // 4. Buscador interactivo y filtros de marcas (Chips)
    const filterInput = document.getElementById('rb-model-filter');
    const brandPills = document.querySelectorAll('.rb-brand-pill');
    const brandCards = document.querySelectorAll('.rb-brand-card');

    let currentBrandFilter = 'all';

    function applyFilters() {
        const query = filterInput ? filterInput.value.toLowerCase().trim() : '';
        
        brandCards.forEach(card => {
            const cardBrand = card.getAttribute('data-brand');
            const matchesBrand = (currentBrandFilter === 'all' || cardBrand === currentBrandFilter);

            if (!matchesBrand) {
                card.style.display = 'none';
                return;
            }

            if (!query) {
                card.style.display = '';
                card.querySelectorAll('.rb-model-chip').forEach(chip => chip.style.display = '');
                return;
            }

            let hasVisibleChip = false;
            const chips = card.querySelectorAll('.rb-model-chip');

            if (cardBrand && cardBrand.includes(query)) {
                chips.forEach(chip => chip.style.display = '');
                hasVisibleChip = true;
            } else {
                chips.forEach(chip => {
                    const modelText = chip.getAttribute('data-model') || '';
                    if (modelText.includes(query)) {
                        chip.style.display = '';
                        hasVisibleChip = true;
                    } else {
                        chip.style.display = 'none';
                    }
                });
            }
            card.style.display = hasVisibleChip ? '' : 'none';
        });
    }

    if (brandPills.length > 0) {
        brandPills.forEach(pill => {
            pill.addEventListener('click', function() {
                brandPills.forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                currentBrandFilter = this.getAttribute('data-brand-filter');
                applyFilters();
            });
        });
    }

    if (filterInput) {
        filterInput.addEventListener('input', applyFilters);
    }

    // Auto-filtrar por hash (#marca-zebra)
    if (window.location.hash) {
        const hashTarget = window.location.hash.replace('#marca-', '').replace('#', '').toLowerCase();
        const matchingPill = Array.from(brandPills).find(p => p.getAttribute('data-brand-filter') === hashTarget);
        if (matchingPill) {
            matchingPill.click();
            const targetElem = document.getElementById('marca-' + hashTarget);
            if (targetElem) {
                targetElem.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }
});
</script>

<?php
get_footer('landing');
