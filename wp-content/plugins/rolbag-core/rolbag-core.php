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
}
add_action( 'save_post_producto', 'rolbag_save_producto_meta' );

/**
 * 6. Flush rewrite rules on plugin activation
 */
function rolbag_core_activate() {
    rolbag_register_cpt_producto();
    rolbag_register_tax_categoria_producto();
    rolbag_register_tax_marca();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'rolbag_core_activate' );

/**
 * 7. Flush rewrite rules on plugin deactivation
 */
function rolbag_core_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'rolbag_core_deactivate' );
