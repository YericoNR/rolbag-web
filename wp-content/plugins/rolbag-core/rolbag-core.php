<?php
/**
 * Plugin Name: ROLBAG Core
 * Description: Plugin central para la funcionalidad del sitio ROLBAG (Custom Post Types, Taxonomías, Meta Boxes autoadministrables).
 * Version: 1.1.0
 * Author: ROLBAG
 * Text Domain: rolbag-core
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * 1. Registra Custom Post Type: Producto
 */
function rolbag_register_cpt_producto() {
    $labels = array(
        'name'                  => _x( 'Productos / Líneas', 'Post type general name', 'rolbag-core' ),
        'singular_name'         => _x( 'Línea de Producto', 'Post type singular name', 'rolbag-core' ),
        'menu_name'             => _x( 'Líneas de Productos', 'Admin Menu text', 'rolbag-core' ),
        'name_admin_bar'        => _x( 'Línea de Producto', 'Add New on Toolbar', 'rolbag-core' ),
        'add_new'               => __( 'Añadir nueva línea', 'rolbag-core' ),
        'add_new_item'          => __( 'Añadir nueva línea de producto', 'rolbag-core' ),
        'new_item'              => __( 'Nueva línea de producto', 'rolbag-core' ),
        'edit_item'             => __( 'Editar línea de producto', 'rolbag-core' ),
        'view_item'             => __( 'Ver línea de producto', 'rolbag-core' ),
        'all_items'             => __( 'Todas las líneas', 'rolbag-core' ),
        'search_items'          => __( 'Buscar líneas', 'rolbag-core' ),
        'not_found'             => __( 'No se encontraron líneas de productos.', 'rolbag-core' ),
        'not_found_in_trash'    => __( 'No se encontraron productos en la papelera.', 'rolbag-core' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'productos', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => 'productos',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-shield',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'producto', $args );
}
add_action( 'init', 'rolbag_register_cpt_producto' );

/**
 * 2. Registra Taxonomía: Categoría de Producto
 */
function rolbag_register_tax_categoria_producto() {
    $labels = array(
        'name'              => _x( 'Categorías de Producto', 'taxonomy general name', 'rolbag-core' ),
        'singular_name'     => _x( 'Categoría de Producto', 'taxonomy singular name', 'rolbag-core' ),
        'search_items'      => __( 'Buscar Categorías', 'rolbag-core' ),
        'all_items'         => __( 'Todas las Categorías', 'rolbag-core' ),
        'parent_item'       => __( 'Categoría Padre', 'rolbag-core' ),
        'parent_item_colon' => __( 'Categoría Padre:', 'rolbag-core' ),
        'edit_item'         => __( 'Editar Categoría', 'rolbag-core' ),
        'update_item'       => __( 'Actualizar Categoría', 'rolbag-core' ),
        'add_new_item'      => __( 'Añadir nueva Categoría', 'rolbag-core' ),
        'new_item_name'     => __( 'Nuevo nombre de Categoría', 'rolbag-core' ),
        'menu_name'         => __( 'Categorías', 'rolbag-core' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categoria-producto' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'categoria_producto', array( 'producto' ), $args );
}
add_action( 'init', 'rolbag_register_tax_categoria_producto' );

/**
 * 3. Registra Taxonomía: Marca (compatible)
 */
function rolbag_register_tax_marca() {
    $labels = array(
        'name'              => _x( 'Marcas Compatibles', 'taxonomy general name', 'rolbag-core' ),
        'singular_name'     => _x( 'Marca Compatible', 'taxonomy singular name', 'rolbag-core' ),
        'search_items'      => __( 'Buscar Marcas', 'rolbag-core' ),
        'all_items'         => __( 'Todas las Marcas', 'rolbag-core' ),
        'edit_item'         => __( 'Editar Marca', 'rolbag-core' ),
        'update_item'       => __( 'Actualizar Marca', 'rolbag-core' ),
        'add_new_item'      => __( 'Añadir nueva Marca', 'rolbag-core' ),
        'new_item_name'     => __( 'Nuevo nombre de Marca', 'rolbag-core' ),
        'menu_name'         => __( 'Marcas Compatibles', 'rolbag-core' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'marca' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'marca', array( 'producto' ), $args );
}
add_action( 'init', 'rolbag_register_tax_marca' );

/**
 * 4. Meta Box Autoadministrable para la Ficha Técnica de Producto
 */
function rolbag_add_producto_meta_boxes() {
    add_meta_box(
        'rolbag_producto_details',
        __( 'Ficha Técnica y Configuración de la Línea (ROLBAG)', 'rolbag-core' ),
        'rolbag_render_producto_meta_box',
        'producto',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'rolbag_add_producto_meta_boxes' );

function rolbag_render_producto_meta_box( $post ) {
    wp_nonce_field( 'rolbag_save_producto_meta', 'rolbag_producto_meta_nonce' );

    $short_title      = get_post_meta( $post->ID, 'rolbag_short_title', true );
    $materiales       = get_post_meta( $post->ID, 'rolbag_materiales', true );
    $image_filename   = get_post_meta( $post->ID, 'rolbag_image', true );
    $gallery_json     = get_post_meta( $post->ID, 'rolbag_gallery', true );
    $gallery_arr      = $gallery_json ? json_decode( $gallery_json, true ) : array();
    $gallery_text     = is_array( $gallery_arr ) ? implode( ', ', $gallery_arr ) : $gallery_json;

    // Características (JSON o array a texto por líneas)
    $caract_meta = get_post_meta( $post->ID, 'rolbag_caracteristicas', true );
    $caract_arr  = json_decode( $caract_meta, true );
    $caract_text = is_array( $caract_arr ) ? implode( "\n", $caract_arr ) : $caract_meta;

    // Beneficios (JSON o array a texto por líneas)
    $benef_meta = get_post_meta( $post->ID, 'rolbag_beneficios', true );
    $benef_arr  = json_decode( $benef_meta, true );
    $benef_text = is_array( $benef_arr ) ? implode( "\n", $benef_arr ) : $benef_meta;

    // Marcas y Modelos (JSON)
    $brands_meta = get_post_meta( $post->ID, 'rolbag_brands_models', true );
    if ( is_string( $brands_meta ) && ! empty( $brands_meta ) ) {
        $decoded = json_decode( $brands_meta, true );
        if ( json_last_error() === JSON_ERROR_NONE ) {
            $brands_pretty = json_encode( $decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE );
        } else {
            $brands_pretty = $brands_meta;
        }
    } else {
        $brands_pretty = '';
    }
    ?>
    <style>
        .rolbag-admin-field { margin-bottom: 20px; }
        .rolbag-admin-field label { display: block; font-weight: 600; margin-bottom: 6px; color: #1e293b; }
        .rolbag-admin-field input[type="text"], .rolbag-admin-field textarea { width: 100%; border: 1px solid #cbd5e1; border-radius: 4px; padding: 8px 12px; font-size: 13px; }
        .rolbag-admin-field textarea { font-family: monospace; }
        .rolbag-admin-desc { font-size: 12px; color: #64748b; margin-top: 4px; }
        .rolbag-admin-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    </style>

    <div class="rolbag-admin-field">
        <label for="rolbag_short_title"><?php _e( 'Título Corto / Nombre de la Línea', 'rolbag-core' ); ?></label>
        <input type="text" id="rolbag_short_title" name="rolbag_short_title" value="<?php echo esc_attr( $short_title ); ?>" placeholder="Ej: Fundas para Capturadores" />
        <p class="rolbag-admin-desc"><?php _e( 'Utilizado en títulos de tarjetas, migas de pan y formularios de cotización.', 'rolbag-core' ); ?></p>
    </div>

    <div class="rolbag-admin-grid">
        <div class="rolbag-admin-field">
            <label for="rolbag_image"><?php _e( 'Archivo de Imagen Principal', 'rolbag-core' ); ?></label>
            <input type="text" id="rolbag_image" name="rolbag_image" value="<?php echo esc_attr( $image_filename ); ?>" placeholder="bento_capturador_1787700291965.jpg" />
            <p class="rolbag-admin-desc"><?php _e( 'Nombre del archivo de imagen en assets/images/generated/ o URL.', 'rolbag-core' ); ?></p>
        </div>

        <div class="rolbag-admin-field">
            <label for="rolbag_gallery"><?php _e( 'Galería de Vistas Adicionales', 'rolbag-core' ); ?></label>
            <input type="text" id="rolbag_gallery" name="rolbag_gallery" value="<?php echo esc_attr( $gallery_text ); ?>" placeholder="img1.jpg, img2.jpg, img3.jpg" />
            <p class="rolbag-admin-desc"><?php _e( 'Nombres de archivos de imágenes separados por comas para el visor interactivo.', 'rolbag-core' ); ?></p>
        </div>
    </div>

    <div class="rolbag-admin-field">
        <label for="rolbag_materiales"><?php _e( 'Materiales y Confección Técnica', 'rolbag-core' ); ?></label>
        <textarea id="rolbag_materiales" name="rolbag_materiales" rows="3"><?php echo esc_textarea( $materiales ); ?></textarea>
        <p class="rolbag-admin-desc"><?php _e( 'Descripción de telas sintéticas, capas amortiguadoras EVA, PVC y herrajes.', 'rolbag-core' ); ?></p>
    </div>

    <div class="rolbag-admin-grid">
        <div class="rolbag-admin-field">
            <label for="rolbag_caracteristicas"><?php _e( 'Características Técnicas (1 por línea)', 'rolbag-core' ); ?></label>
            <textarea id="rolbag_caracteristicas" name="rolbag_caracteristicas" rows="6"><?php echo esc_textarea( $caract_text ); ?></textarea>
            <p class="rolbag-admin-desc"><?php _e( 'Escribe una característica técnica en cada renglón.', 'rolbag-core' ); ?></p>
        </div>

        <div class="rolbag-admin-field">
            <label for="rolbag_beneficios"><?php _e( 'Beneficios Operacionales (1 por línea)', 'rolbag-core' ); ?></label>
            <textarea id="rolbag_beneficios" name="rolbag_beneficios" rows="6"><?php echo esc_textarea( $benef_text ); ?></textarea>
            <p class="rolbag-admin-desc"><?php _e( 'Escribe un beneficio operacional en cada renglón.', 'rolbag-core' ); ?></p>
        </div>
    </div>

    <div class="rolbag-admin-field">
        <label for="rolbag_brands_models"><?php _e( 'Marcas y Modelos Compatibles (Formato Estructurado JSON)', 'rolbag-core' ); ?></label>
        <textarea id="rolbag_brands_models" name="rolbag_brands_models" rows="10"><?php echo esc_textarea( $brands_pretty ); ?></textarea>
        <p class="rolbag-admin-desc"><?php _e( 'Estructura {"Marca": ["Modelo 1", "Modelo 2"]}. Permite que el buscador de modelos en la ficha filtre en tiempo real.', 'rolbag-core' ); ?></p>
    </div>
    <?php
}

/**
 * 5. Guarda los Metadatos del Producto
 */
function rolbag_save_producto_meta( $post_id ) {
    if ( ! isset( $_POST['rolbag_producto_meta_nonce'] ) || ! wp_verify_nonce( $_POST['rolbag_producto_meta_nonce'], 'rolbag_save_producto_meta' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Título Corto
    if ( isset( $_POST['rolbag_short_title'] ) ) {
        update_post_meta( $post_id, 'rolbag_short_title', sanitize_text_field( $_POST['rolbag_short_title'] ) );
    }

    // Materiales
    if ( isset( $_POST['rolbag_materiales'] ) ) {
        update_post_meta( $post_id, 'rolbag_materiales', sanitize_textarea_field( $_POST['rolbag_materiales'] ) );
    }

    // Imagen Principal
    if ( isset( $_POST['rolbag_image'] ) ) {
        update_post_meta( $post_id, 'rolbag_image', sanitize_text_field( $_POST['rolbag_image'] ) );
    }

    // Galería
    if ( isset( $_POST['rolbag_gallery'] ) ) {
        $raw_gallery = sanitize_text_field( $_POST['rolbag_gallery'] );
        $gallery_items = array_filter( array_map( 'trim', explode( ',', $raw_gallery ) ) );
        update_post_meta( $post_id, 'rolbag_gallery', wp_json_encode( array_values( $gallery_items ) ) );
    }

    // Características
    if ( isset( $_POST['rolbag_caracteristicas'] ) ) {
        $raw = sanitize_textarea_field( $_POST['rolbag_caracteristicas'] );
        $lines = array_filter( array_map( 'trim', explode( "\n", str_replace( "\r", "", $raw ) ) ) );
        update_post_meta( $post_id, 'rolbag_caracteristicas', wp_json_encode( array_values( $lines ), JSON_UNESCAPED_UNICODE ) );
    }

    // Beneficios
    if ( isset( $_POST['rolbag_beneficios'] ) ) {
        $raw = sanitize_textarea_field( $_POST['rolbag_beneficios'] );
        $lines = array_filter( array_map( 'trim', explode( "\n", str_replace( "\r", "", $raw ) ) ) );
        update_post_meta( $post_id, 'rolbag_beneficios', wp_json_encode( array_values( $lines ), JSON_UNESCAPED_UNICODE ) );
    }

    // Marcas y Modelos
    if ( isset( $_POST['rolbag_brands_models'] ) ) {
        $raw_json = wp_unslash( $_POST['rolbag_brands_models'] );
        $decoded = json_decode( $raw_json, true );
        if ( json_last_error() === JSON_ERROR_NONE && is_array( $decoded ) ) {
            update_post_meta( $post_id, 'rolbag_brands_models', wp_json_encode( $decoded, JSON_UNESCAPED_UNICODE ) );
        } elseif ( empty( trim( $raw_json ) ) ) {
            update_post_meta( $post_id, 'rolbag_brands_models', '' );
        }
    }

    // 4 Vistas Técnicas Autoadministrables
    $views = array( 'vista_frontal', 'vista_lateral', 'vista_posterior', 'vista_detalle' );
    foreach ( $views as $view_key ) {
        if ( isset( $_POST[ 'rolbag_' . $view_key ] ) ) {
            update_post_meta( $post_id, 'rolbag_' . $view_key, sanitize_text_field( $_POST[ 'rolbag_' . $view_key ] ) );
        }
    }
}
add_action( 'save_post_producto', 'rolbag_save_producto_meta' );

/**
 * 6. Catálogo Global de Galerías por Marca (Fotos Reales y Autoadministrables)
 */
function rolbag_get_brand_galleries_catalog() {
    $theme_uri = get_template_directory_uri();
    
    return array(
        'zebra' => array(
            'title'        => 'Fundas de Protección para Equipos Zebra Technologies',
            'subtitle'     => 'Confección nacional en Nylon Balístico 1680D para terminales táctiles (TC58/TC21) y modelos con empuñadura Pistol Grip (TC7x/MC9300).',
            'has_real_photos' => true,
            'badge'        => 'Fotos Reales de Confección ROLBAG',
            'views'        => array(
                array(
                    'id'          => 'frontal',
                    'name'        => 'Vista Frontal',
                    'desc'        => 'Acceso directo a pantalla táctil protegida por mica transparente de alta sensibilidad y visor de escáner superior libre.',
                    'url'         => $theme_uri . '/assets/images/galeria/zebra-sin-mango/vista_01.webp'
                ),
                array(
                    'id'          => 'perfil',
                    'name'        => 'Vista Lateral / Perfil',
                    'desc'        => 'Perfil aerodinámico con acceso a botones PTT amarillos, anillas D de acero inoxidable y acolchado de impacto EVA.',
                    'url'         => $theme_uri . '/assets/images/galeria/zebra-sin-mango/vista_02.webp'
                ),
                array(
                    'id'          => 'posterior',
                    'name'        => 'Vista Posterior / Sujeción',
                    'desc'        => 'Handstrap ergonómico elástico ajustable con velcro industrial para operación intensiva con una sola mano.',
                    'url'         => $theme_uri . '/assets/images/galeria/zebra-sin-mango/vista_03.webp'
                ),
                array(
                    'id'          => 'pistol_grip',
                    'name'        => 'Versión Pistol Grip',
                    'desc'        => 'Calce reforzado para mango ergonómico con bota de protección de gatillo de lectura de código de barras.',
                    'url'         => $theme_uri . '/assets/images/galeria/zebra-con-mango/vista_01.webp'
                )
            ),
            'specs'        => array(
                'Material'       => 'Nylon Balístico 1680D Impermeable + Espuma EVA 4mm',
                'Protección'     => 'Mica Cristal Anti-Rayas + Bisel Antichoque',
                'Fijación'       => 'Handstrap elástico con velcro + Pasador para cinturón',
                'Compatibilidad' => 'Zebra TC53/TC58, TC52/TC57, TC21/TC26, TC72/TC77, MC9300'
            )
        ),
        'honeywell' => array(
            'title'        => 'Fundas de Protección para Equipos Honeywell',
            'subtitle'     => 'Confección de alta resistencia para terminales industriales con teclado físico alfanumérico (CK65 / Dolphin) y terminales táctiles (CT40/CT45).',
            'has_real_photos' => true,
            'badge'        => 'Fotos Reales de Confección ROLBAG',
            'views'        => array(
                array(
                    'id'          => 'frontal',
                    'name'        => 'Vista Frontal',
                    'desc'        => 'Ventana de protección integral sobre pantalla y teclado numérico/alfanumérico sin pérdida de respuesta táctil.',
                    'url'         => $theme_uri . '/assets/images/galeria/honeywell-ck65/vista_01.webp'
                ),
                array(
                    'id'          => 'perfil',
                    'name'        => 'Vista Lateral / Robustez',
                    'desc'        => 'Costuras reforzadas de 6 hebras con remaches metálicos para soportar caídas en bodegas y centros de distribución.',
                    'url'         => $theme_uri . '/assets/images/galeria/honeywell-ck65/vista_02.webp'
                ),
                array(
                    'id'          => 'posterior',
                    'name'        => 'Vista Posterior',
                    'desc'        => 'Banda elástica de sujeción ancha para manos enguantadas en cuartos fríos y logística de frío.',
                    'url'         => $theme_uri . '/assets/images/galeria/honeywell-ck65/vista_03.webp'
                ),
                array(
                    'id'          => 'detalle',
                    'name'        => 'Detalle Operativo',
                    'desc'        => 'Apertura inferior para cambio de batería o carga en cuna sin necesidad de desarmar la funda.',
                    'url'         => $theme_uri . '/assets/images/galeria/honeywell-ck65/vista_04.webp'
                )
            ),
            'specs'        => array(
                'Material'       => 'Nylon 1680D alta tenacidad + Refuerzo de esquinas',
                'Protección'     => 'Teclado y pantalla bajo mica transparente sellada',
                'Fijación'       => 'Correa de mano industrial + Argollas D de fijación',
                'Compatibilidad' => 'Honeywell CK65, CK3X, CT40, CT45, CT60, EDA51, EDA52'
            )
        ),
        'bixolon' => array(
            'title'        => 'Fundas para Impresoras Portátiles Bixolon / Zebra',
            'subtitle'     => 'Diseñadas para emisión de boleta electrónica e impresión térmica en ruta con apertura frontal directa.',
            'has_real_photos' => true,
            'badge'        => 'Fotos Reales de Confección ROLBAG',
            'views'        => array(
                array(
                    'id'          => 'frontal',
                    'name'        => 'Vista Frontal / Salida Ticket',
                    'desc'        => 'Apertura frontal para expulsión de ticket o etiqueta térmica y botón de encendido accesible.',
                    'url'         => $theme_uri . '/assets/images/galeria/impresoras-portatiles/vista_01.webp'
                ),
                array(
                    'id'          => 'perfil',
                    'name'        => 'Vista Lateral / Anillas',
                    'desc'        => 'Anillas de acero reforzadas en los laterales para correa de hombro ajustable para repartidores.',
                    'url'         => $theme_uri . '/assets/images/galeria/impresoras-portatiles/vista_02.webp'
                ),
                array(
                    'id'          => 'posterior',
                    'name'        => 'Vista Posterior / Cinturón',
                    'desc'        => 'Pasador de cinturón reforzado con broches de alta seguridad para fijación en cintura.',
                    'url'         => $theme_uri . '/assets/images/galeria/impresoras-portatiles/vista_03.webp'
                ),
                array(
                    'id'          => 'recarga',
                    'name'        => 'Apertura de Recarga',
                    'desc'        => 'Tapa superior con velcro para recarga rápida de rollo de papel térmico sin sacar la impresora.',
                    'url'         => $theme_uri . '/assets/images/galeria/impresoras-portatiles/vista_04.webp'
                )
            ),
            'specs'        => array(
                'Material'       => 'Nylon Balístico impermeable repelente al agua y polvo',
                'Acceso'         => 'Ventana frontal para salida de papel + tapa de recarga',
                'Transporte'     => 'Correa de hombro regulable + Pasador de cinturón',
                'Compatibilidad' => 'Bixolon SPP-R200/R310/R410, Zebra ZQ511/ZQ521, Epson Mobilink'
            )
        ),
        'datalogic' => array(
            'title'        => 'Fundas de Protección para Equipos Datalogic',
            'subtitle'     => 'Confección a medida para terminales Memor y Skorpio de captura logística.',
            'has_real_photos' => true,
            'badge'        => 'Fotos Reales de Confección ROLBAG',
            'views'        => array(
                array(
                    'id'          => 'frontal',
                    'name'        => 'Vista Frontal',
                    'desc'        => 'Protección frontal con mica de alta transparencia y visor libre para cabezal de lectura 2D.',
                    'url'         => $theme_uri . '/assets/images/galeria/modelos-adicionales/vista_01.webp'
                ),
                array(
                    'id'          => 'perfil',
                    'name'        => 'Vista Lateral',
                    'desc'        => 'Estructura amortiguadora con refuerzos perimetrales antichoque para trabajo intensivo.',
                    'url'         => $theme_uri . '/assets/images/galeria/modelos-adicionales/vista_02.webp'
                ),
                array(
                    'id'          => 'posterior',
                    'name'        => 'Vista Posterior',
                    'desc'        => 'Handstrap de seguridad para evitar caídas durante el picking y despacho.',
                    'url'         => $theme_uri . '/assets/images/galeria/modelos-adicionales/vista_03.webp'
                ),
                array(
                    'id'          => 'detalle',
                    'name'        => 'Acabados y Costura',
                    'desc'        => 'Ribete perimetral y costura de alta tenacidad con hilos resistentes a la abrasión.',
                    'url'         => $theme_uri . '/assets/images/galeria/modelos-adicionales/vista_04.webp'
                )
            ),
            'specs'        => array(
                'Material'       => 'Nylon Balístico 1680D + Acolchado protector',
                'Protección'     => 'Mica flexible antichoque y bordes reforzados',
                'Fijación'       => 'Handstrap de mano + D-rings para correa',
                'Compatibilidad' => 'Datalogic Memor 1, Memor 10, Memor 20, Skorpio X5'
            )
        )
    );
}

/**
 * 7. Flush rewrite rules on plugin activation
 */
function rolbag_core_activate() {
    rolbag_register_cpt_producto();
    rolbag_register_tax_categoria_producto();
    rolbag_register_tax_marca();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'rolbag_core_activate' );

/**
 * 8. Flush rewrite rules on plugin deactivation
 */
function rolbag_core_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'rolbag_core_deactivate' );

