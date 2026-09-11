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
    $gallery_raw      = get_post_meta( $post->ID, 'rolbag_gallery', true );
    if ( is_array( $gallery_raw ) ) {
        $gallery_arr = $gallery_raw;
    } elseif ( is_string( $gallery_raw ) ) {
        $decoded = json_decode( $gallery_raw, true );
        $gallery_arr = is_array( $decoded ) ? $decoded : array_filter( array_map('trim', explode(',', $gallery_raw)) );
    } else {
        $gallery_arr = array();
    }
    $gallery_text     = implode( ',', $gallery_arr );

    // Características (JSON o array a texto por líneas)
    $caract_meta = get_post_meta( $post->ID, 'rolbag_caracteristicas', true );
    $caract_arr  = is_string($caract_meta) ? json_decode( $caract_meta, true ) : (is_array($caract_meta) ? $caract_meta : array());
    $caract_text = is_array( $caract_arr ) ? implode( "\n", $caract_arr ) : (is_string($caract_meta) ? $caract_meta : '');

    // Beneficios (JSON o array a texto por líneas)
    $benef_meta = get_post_meta( $post->ID, 'rolbag_beneficios', true );
    $benef_arr  = is_string($benef_meta) ? json_decode( $benef_meta, true ) : (is_array($benef_meta) ? $benef_meta : array());
    $benef_text = is_array( $benef_arr ) ? implode( "\n", $benef_arr ) : (is_string($benef_meta) ? $benef_meta : '');

    // Marcas y Modelos (JSON)
    $brands_meta = get_post_meta( $post->ID, 'rolbag_brands_models', true );
    if ( is_array( $brands_meta ) ) {
        $brands_pretty = json_encode( $brands_meta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE );
    } elseif ( is_string( $brands_meta ) && ! empty( $brands_meta ) ) {
        $decoded = json_decode( $brands_meta, true );
        if ( json_last_error() === JSON_ERROR_NONE ) {
            $brands_pretty = json_encode( $decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE );
        } else {
            $brands_pretty = $brands_meta;
        }
    } else {
        $brands_pretty = '';
    }

    // Galerías por Sección (JSON)
    $special_meta = get_post_meta( $post->ID, 'rolbag_special_galleries', true );
    if ( is_array( $special_meta ) ) {
        $special_pretty = json_encode( $special_meta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE );
    } elseif ( is_string( $special_meta ) && ! empty( $special_meta ) ) {
        $decoded = json_decode( $special_meta, true );
        if ( json_last_error() === JSON_ERROR_NONE ) {
            $special_pretty = json_encode( $decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE );
        } else {
            $special_pretty = $special_meta;
        }
    } else {
        $special_pretty = '';
    }
    ?>
    <style>
        .rb-meta-panel { background: #fff; border: 1px solid #e2e8f0; border-radius: 4px; padding: 20px; margin-bottom: 20px; }
        .rb-meta-panel h3 { margin-top: 0; padding-bottom: 10px; border-bottom: 1px solid #e2e8f0; font-size: 15px; color: #0f172a; margin-bottom: 20px; }
        .rolbag-admin-field { margin-bottom: 20px; }
        .rolbag-admin-field label { display: block; font-weight: 600; margin-bottom: 6px; color: #1e293b; }
        .rolbag-admin-field input[type="text"], .rolbag-admin-field textarea { width: 100%; border: 1px solid #cbd5e1; border-radius: 4px; padding: 8px 12px; font-size: 13px; }
        .rolbag-admin-field textarea { font-family: inherit; }
        .rolbag-admin-desc { font-size: 12px; color: #64748b; margin-top: 4px; }
        .rolbag-admin-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        /* Nuevos estilos para la galería visual */
        .rolbag-gallery-container { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 10px; }
        .rolbag-gallery-item { position: relative; width: 100px; height: 100px; border: 1px solid #ddd; border-radius: 4px; overflow: hidden; background: #f0f0f0; cursor: move; }
        .rolbag-gallery-item img { width: 100%; height: 100%; object-fit: cover; }
        .rolbag-gallery-remove { position: absolute; top: 2px; right: 2px; background: red; color: white; border: none; border-radius: 50%; width: 20px; height: 20px; font-size: 12px; cursor: pointer; display: flex; align-items: center; justify-content: center; line-height: 1; padding: 0;}
        .rolbag-gallery-add { display: inline-block; padding: 8px 15px; background: #2271b1; color: white; text-decoration: none; border-radius: 4px; cursor: pointer; border: none; font-size: 13px;}
        .rolbag-gallery-add:hover { background: #135e96; color: white; }
    </style>

    <div class="rb-meta-panel">
        <h3>Información General e Imágenes</h3>
        <div class="rolbag-admin-field">
            <label for="rolbag_short_title"><?php _e( 'Título Corto / Nombre de la Línea', 'rolbag-core' ); ?></label>
            <input type="text" id="rolbag_short_title" name="rolbag_short_title" value="<?php echo esc_attr( $short_title ); ?>" placeholder="Ej: Fundas para Capturadores" />
            <p class="rolbag-admin-desc"><?php _e( 'Utilizado en títulos de tarjetas, migas de pan y formularios de cotización.', 'rolbag-core' ); ?></p>
        </div>

        <div class="rolbag-admin-grid">
            <div class="rolbag-admin-field">
                <label for="rolbag_image"><?php _e( 'Archivo de Imagen Principal (Fallback)', 'rolbag-core' ); ?></label>
                <input type="text" id="rolbag_image" name="rolbag_image" value="<?php echo esc_attr( $image_filename ); ?>" placeholder="bento_capturador_1787700291965.jpg" />
                <p class="rolbag-admin-desc"><?php _e( 'Nombre del archivo local. Recomendación: Usa la "Imagen Destacada" de WordPress para esto.', 'rolbag-core' ); ?></p>
            </div>

            <div class="rolbag-admin-field">
                <label for="rolbag_gallery"><?php _e( 'Galería de Vistas Adicionales (Visual)', 'rolbag-core' ); ?></label>
                
                <div class="rolbag-gallery-container" id="rolbag-gallery-container">
                    <?php 
                    // Extraer IDs existentes
                    $gallery_ids = array_filter( array_map('trim', explode(',', $gallery_text)) );
                    foreach ( $gallery_ids as $attachment_id ) {
                        if ( is_numeric($attachment_id) ) {
                            $img_url = wp_get_attachment_image_url( $attachment_id, 'thumbnail' );
                            if ( $img_url ) {
                                echo '<div class="rolbag-gallery-item" data-id="'.esc_attr($attachment_id).'">
                                        <img src="'.esc_url($img_url).'" />
                                        <button class="rolbag-gallery-remove" type="button" onclick="rolbagRemoveGalleryItem(this)">&times;</button>
                                      </div>';
                            }
                        }
                    }
                    ?>
                </div>
                
                <input type="hidden" id="rolbag_gallery" name="rolbag_gallery" value="<?php echo esc_attr( $gallery_text ); ?>" />
                <button type="button" class="rolbag-gallery-add" id="rolbag-gallery-add-btn"><?php _e( 'Añadir Imágenes a la Galería', 'rolbag-core' ); ?></button>
                <p class="rolbag-admin-desc"><?php _e( 'Arrastra y ordena las imágenes directamente aquí.', 'rolbag-core' ); ?></p>

                <script>
                jQuery(document).ready(function($){
                    var mediaUploader;
                    $('#rolbag-gallery-add-btn').click(function(e) {
                        e.preventDefault();
                        if (mediaUploader) { mediaUploader.open(); return; }
                        mediaUploader = wp.media({
                            title: 'Seleccionar Imágenes para la Galería',
                            button: { text: 'Añadir a la galería' },
                            multiple: true
                        });
                        mediaUploader.on('select', function() {
                            var attachments = mediaUploader.state().get('selection').map(function(attachment) {
                                attachment.toJSON();
                                return attachment;
                            });
                            
                            var container = $('#rolbag-gallery-container');
                            var input = $('#rolbag_gallery');
                            var currentIds = input.val() ? input.val().split(',') : [];
                            
                            attachments.forEach(function(attachment) {
                                var id = attachment.get('id');
                                var url = attachment.get('sizes') && attachment.get('sizes').thumbnail ? attachment.get('sizes').thumbnail.url : attachment.get('url');
                                
                                // Prevent duplicates
                                if (currentIds.indexOf(id.toString()) === -1) {
                                    currentIds.push(id);
                                    container.append('<div class="rolbag-gallery-item" data-id="'+id+'"><img src="'+url+'" /><button class="rolbag-gallery-remove" type="button" onclick="rolbagRemoveGalleryItem(this)">&times;</button></div>');
                                }
                            });
                            input.val(currentIds.join(','));
                        });
                        mediaUploader.open();
                    });
                    
                    // Activar arrastrar y soltar para reordenar si sortable está cargado
                    if($.fn.sortable) {
                        $('#rolbag-gallery-container').sortable({
                            update: function(event, ui) {
                                var ids = [];
                                $('#rolbag-gallery-container .rolbag-gallery-item').each(function() {
                                    ids.push($(this).data('id'));
                                });
                                $('#rolbag_gallery').val(ids.join(','));
                            }
                        });
                    }
                });

                function rolbagRemoveGalleryItem(button) {
                    var item = jQuery(button).closest('.rolbag-gallery-item');
                    var id = item.data('id');
                    item.remove();
                    
                    var input = jQuery('#rolbag_gallery');
                    var currentIds = input.val().split(',');
                    var index = currentIds.indexOf(id.toString());
                    if (index > -1) {
                        currentIds.splice(index, 1);
                    }
                    input.val(currentIds.join(','));
                }
                </script>
            </div>
        </div>
    </div>

    <div class="rb-meta-panel">
        <h3>Ficha Técnica y Beneficios</h3>
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
    </div>

    <div class="rb-meta-panel">
        <label><?php _e( 'Marcas y Modelos Compatibles', 'rolbag-core' ); ?></label>
        <p class="rolbag-admin-desc"><?php _e( 'Añade las marcas y los modelos soportados. Permite que el buscador de modelos en la ficha filtre en tiempo real.', 'rolbag-core' ); ?></p>
        
        <div id="rolbag-brands-container"></div>
        <button type="button" class="button" id="rolbag-add-brand-btn"><?php _e( '+ Añadir Marca', 'rolbag-core' ); ?></button>
        
        <input type="hidden" id="rolbag_brands_models" name="rolbag_brands_models" value="<?php echo esc_attr( $brands_pretty ); ?>" />
        
        <style>
            #rolbag-brands-container { margin-bottom: 15px; }
            .rb-brand-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 4px; padding: 15px; margin-bottom: 15px; }
            .rb-brand-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
            .rb-brand-header input { width: 300px; max-width: 100%; font-weight: bold; }
            .rb-remove-brand { color: #dc2626; cursor: pointer; text-decoration: underline; font-size: 13px; }
            .rb-models-container { display: flex; flex-direction: column; gap: 8px; margin-left: 20px; margin-bottom: 10px; border-left: 2px solid #cbd5e1; padding-left: 15px; }
            .rb-model-row { display: flex; align-items: center; gap: 10px; }
            .rb-model-row input { flex: 1; max-width: 280px; }
            .rb-remove-model { color: #94a3b8; cursor: pointer; background: none; border: none; font-size: 18px; padding: 0 5px; }
            .rb-remove-model:hover { color: #dc2626; }
            .rb-add-model-btn { font-size: 12px; margin-left: 20px; }
        </style>

        <script>
        jQuery(document).ready(function($){
            var container = $('#rolbag-brands-container');
            var hiddenInput = $('#rolbag_brands_models');
            
            // Inicializar datos
            var initialData = {};
            try {
                if(hiddenInput.val()) {
                    initialData = JSON.parse(hiddenInput.val());
                }
            } catch(e) { console.error('Error parseando JSON de marcas', e); }
            
            function renderBrands() {
                container.empty();
                for (var brand in initialData) {
                    if (initialData.hasOwnProperty(brand)) {
                        addBrandUI(brand, initialData[brand]);
                    }
                }
            }
            
            function addBrandUI(brandName, models) {
                var brandIndex = $('.rb-brand-card').length;
                var html = '<div class="rb-brand-card" data-index="'+brandIndex+'">';
                html += '<div class="rb-brand-header">';
                html += '<input type="text" class="rb-brand-name" value="'+escapeHtml(brandName)+'" placeholder="Nombre de la Marca (ej: Zebra)" />';
                html += '<span class="rb-remove-brand">Eliminar Marca</span>';
                html += '</div>';
                
                html += '<div class="rb-models-container">';
                if(models && models.length > 0) {
                    models.forEach(function(model) {
                        html += getModelRowHtml(model);
                    });
                } else {
                    html += getModelRowHtml('');
                }
                html += '</div>';
                
                html += '<button type="button" class="button rb-add-model-btn">+ Añadir Modelo</button>';
                html += '</div>';
                
                container.append(html);
            }
            
            function getModelRowHtml(val) {
                return '<div class="rb-model-row"><input type="text" class="rb-model-name" value="'+escapeHtml(val)+'" placeholder="Nombre del Modelo (ej: TC52)" /><button type="button" class="rb-remove-model" title="Eliminar modelo">&times;</button></div>';
            }
            
            function escapeHtml(text) {
                if (typeof text !== 'string') return '';
                return text.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
            }
            
            function updateHiddenInput() {
                var data = {};
                $('.rb-brand-card').each(function(){
                    var brandName = $(this).find('.rb-brand-name').val().trim();
                    if(brandName) {
                        var models = [];
                        $(this).find('.rb-model-name').each(function(){
                            var modelName = $(this).val().trim();
                            if(modelName) models.push(modelName);
                        });
                        data[brandName] = models;
                    }
                });
                hiddenInput.val(JSON.stringify(data));
            }
            
            // Events
            $('#rolbag-add-brand-btn').click(function(e){
                e.preventDefault();
                addBrandUI('', ['']);
                updateHiddenInput();
            });
            
            container.on('click', '.rb-add-model-btn', function(e){
                e.preventDefault();
                $(this).siblings('.rb-models-container').append(getModelRowHtml(''));
                updateHiddenInput();
            });
            
            container.on('click', '.rb-remove-brand', function(e){
                e.preventDefault();
                if(confirm('¿Eliminar esta marca y todos sus modelos?')) {
                    $(this).closest('.rb-brand-card').remove();
                    updateHiddenInput();
                }
            });
            
            container.on('click', '.rb-remove-model', function(e){
                e.preventDefault();
                var modelsContainer = $(this).closest('.rb-models-container');
                $(this).closest('.rb-model-row').remove();
                if(modelsContainer.find('.rb-model-row').length === 0) {
                    modelsContainer.append(getModelRowHtml(''));
                }
                updateHiddenInput();
            });
            
            container.on('input', 'input', function(){
                updateHiddenInput();
            });
            
            // Inicializar
            renderBrands();
            
            // Si el form se envía, asegurar update (aunque el on input ya lo hace)
            $('form#post').on('submit', function() {
                updateHiddenInput();
            });
        });
        </script>

    <!-- Galerías por Sección -->
    <div class="rb-meta-panel" id="rb-special-galleries-panel">
        <h3>Galerías por Sección</h3>
        <p class="rolbag-admin-desc" style="margin-bottom: 20px;">Permite crear múltiples secciones, cada una con su título, descripción y galería propia de imágenes.</p>
        
        <div id="rolbag-special-container"></div>
        <input type="hidden" id="rolbag_special_galleries" name="rolbag_special_galleries" value="<?php echo esc_attr( $special_pretty ); ?>" />
        
        <button type="button" class="button button-primary" id="rolbag-add-special-btn">+ Añadir Nueva Sección</button>
        
        <script>
        jQuery(document).ready(function($){
            var specialDataRaw = $('#rolbag_special_galleries').val();
            var specialData = [];
            try { if(specialDataRaw) specialData = JSON.parse(specialDataRaw); } catch(e){}
            if(!Array.isArray(specialData)) specialData = [];
            
            var container = $('#rolbag-special-container');
            var hiddenInput = $('#rolbag_special_galleries');
            
            function renderSpecialGalleries() {
                container.empty();
                specialData.forEach(function(section, index){
                    addSpecialUI(section, index);
                });
            }
            
            function addSpecialUI(section, index) {
                var title = section.title || '';
                var desc = section.desc || '';
                var images = section.images || [];
                
                var html = '<div class="rb-brand-card rb-special-card-ui" style="background: #f8fafc; border: 1px solid #cbd5e1; padding: 15px; border-radius: 4px; margin-bottom: 15px; position:relative;">';
                html += '<button type="button" class="rb-remove-special" style="position:absolute; top:15px; right:15px; background:#ef4444; color:#fff; border:none; padding:5px 10px; border-radius:4px; cursor:pointer;" title="Eliminar sección">&times; Eliminar Sección</button>';
                html += '<div style="margin-bottom:15px; margin-right: 120px;">';
                html += '<label style="display:block; font-weight:600; margin-bottom:5px;">Título de la Sección</label>';
                html += '<input type="text" class="rb-special-title" value="'+escapeHtml(title)+'" style="width:100%; margin-bottom:10px;" placeholder="Ej: ESTRUCTURAS ESPECIALES" />';
                html += '<label style="display:block; font-weight:600; margin-bottom:5px;">Descripción Breve</label>';
                html += '<input type="text" class="rb-special-desc" value="'+escapeHtml(desc)+'" style="width:100%;" placeholder="Ej: Fundas de alta rigidez estructural..." />';
                html += '</div>';
                
                // Galería de la sección
                html += '<div style="margin-top:15px; border-top:1px solid #e2e8f0; padding-top:15px;">';
                html += '<label style="display:block; font-weight:600; margin-bottom:10px;">Imágenes de la Sección</label>';
                html += '<div class="rb-special-gallery-wrap" style="display:flex; flex-wrap:wrap; gap:10px; margin-bottom:10px;">';
                images.forEach(function(imgData){
                    html += '<div class="rolbag-gallery-item" data-id="'+escapeHtml(String(imgData.id))+'">';
                    html += '<img src="'+escapeHtml(imgData.url)+'" />';
                    html += '<button class="rolbag-gallery-remove rb-remove-special-img" type="button" title="Eliminar imagen">&times;</button>';
                    html += '</div>';
                });
                html += '</div>';
                html += '<button type="button" class="button rb-add-special-img-btn">Añadir Imágenes a esta Sección</button>';
                html += '</div>';
                
                html += '</div>';
                container.append(html);
            }
            
            function escapeHtml(text) {
                if (typeof text !== 'string') return '';
                return text.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
            }
            
            function updateSpecialHidden() {
                var data = [];
                container.find('.rb-special-card-ui').each(function(){
                    var sec = {
                        title: $(this).find('.rb-special-title').val().trim(),
                        desc: $(this).find('.rb-special-desc').val().trim(),
                        images: []
                    };
                    $(this).find('.rolbag-gallery-item').each(function(){
                        sec.images.push({
                            id: $(this).data('id'),
                            url: $(this).find('img').attr('src')
                        });
                    });
                    if(sec.title !== '' || sec.images.length > 0) {
                        data.push(sec);
                    }
                });
                hiddenInput.val(JSON.stringify(data));
            }
            
            // Events
            $('#rolbag-add-special-btn').click(function(e){
                e.preventDefault();
                addSpecialUI({title:'', desc:'', images:[]}, specialData.length);
                updateSpecialHidden();
            });
            
            container.on('click', '.rb-remove-special', function(e){
                e.preventDefault();
                if(confirm('¿Eliminar esta sección completa?')) {
                    $(this).closest('.rb-special-card-ui').remove();
                    updateSpecialHidden();
                }
            });
            
            container.on('click', '.rb-remove-special-img', function(e){
                e.preventDefault();
                $(this).closest('.rolbag-gallery-item').remove();
                updateSpecialHidden();
            });
            
            container.on('input', 'input', function(){
                updateSpecialHidden();
            });
            
            // WP Media Uploader for Section Galleries
            container.on('click', '.rb-add-special-img-btn', function(e){
                e.preventDefault();
                var btn = $(this);
                var wrap = btn.siblings('.rb-special-gallery-wrap');
                
                var uploader = wp.media({
                    title: 'Seleccionar Imágenes para la Sección',
                    button: { text: 'Añadir a la sección' },
                    multiple: true
                });
                
                uploader.on('select', function() {
                    var attachments = uploader.state().get('selection').map(function(a) { return a.toJSON(); });
                    attachments.forEach(function(att){
                        var thumbUrl = att.sizes && att.sizes.thumbnail ? att.sizes.thumbnail.url : att.url;
                        var html = '<div class="rolbag-gallery-item" data-id="'+att.id+'">';
                        html += '<img src="'+thumbUrl+'" />';
                        html += '<button class="rolbag-gallery-remove rb-remove-special-img" type="button" title="Eliminar imagen">&times;</button>';
                        html += '</div>';
                        wrap.append(html);
                    });
                    updateSpecialHidden();
                });
                uploader.open();
            });
            
            // Init
            renderSpecialGalleries();
            
            $('form#post').on('submit', function() {
                updateSpecialHidden();
            });
        });
        </script>
    </div>
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

    // Galerías por Sección (Special Galleries)
    if ( isset( $_POST['rolbag_special_galleries'] ) ) {
        $raw_json = wp_unslash( $_POST['rolbag_special_galleries'] );
        $decoded = json_decode( $raw_json, true );
        if ( json_last_error() === JSON_ERROR_NONE && is_array( $decoded ) ) {
            update_post_meta( $post_id, 'rolbag_special_galleries', wp_json_encode( $decoded, JSON_UNESCAPED_UNICODE ) );
        } elseif ( empty( trim( $raw_json ) ) ) {
            update_post_meta( $post_id, 'rolbag_special_galleries', '' );
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
            'subtitle'     => 'Confección a medida para terminales Memor, Falcon y Skorpio de captura logística.',
            'has_real_photos' => true,
            'badge'        => 'Fotos Reales de Confección ROLBAG',
            'views'        => array(
                array(
                    'id'          => 'frontal',
                    'name'        => 'Vista Frontal',
                    'desc'        => 'Protección frontal con mica de alta transparencia y visor libre para cabezal de lectura 2D.',
                    'url'         => $theme_uri . '/assets/images/galeria/datalogic-falcon/vista_01.webp'
                ),
                array(
                    'id'          => 'perfil',
                    'name'        => 'Vista Lateral',
                    'desc'        => 'Estructura amortiguadora con refuerzos perimetrales antichoque para trabajo intensivo.',
                    'url'         => $theme_uri . '/assets/images/galeria/datalogic-falcon/vista_02.webp'
                ),
                array(
                    'id'          => 'posterior',
                    'name'        => 'Vista Posterior',
                    'desc'        => 'Handstrap de seguridad para evitar caídas durante el picking y despacho.',
                    'url'         => $theme_uri . '/assets/images/galeria/datalogic-falcon/vista_03.webp'
                ),
                array(
                    'id'          => 'detalle',
                    'name'        => 'Pistol Grip / Gatillo',
                    'desc'        => 'Apertura reforzada para mango tipo pistola y accionamiento suave del gatillo.',
                    'url'         => $theme_uri . '/assets/images/galeria/datalogic-falcon/vista_04.webp'
                )
            ),
            'specs'        => array(
                'Material'       => 'Nylon Balístico 1680D + Acolchado protector EVA',
                'Protección'     => 'Mica flexible antichoque y bordes reforzados',
                'Fijación'       => 'Handstrap de mano + D-rings para correa',
                'Compatibilidad' => 'Datalogic Memor 1/10/20, Skorpio X5, Falcon X3+/X4'
            )
        ),
        'unitech' => array(
            'title'        => 'Fundas de Protección para Equipos Unitech',
            'subtitle'     => 'Protección de alto estándar para terminales portátiles y PDA robustas Unitech.',
            'has_real_photos' => true,
            'badge'        => 'Fotos Reales de Confección ROLBAG',
            'views'        => array(
                array(
                    'id'          => 'frontal',
                    'name'        => 'Vista Frontal',
                    'desc'        => 'Mica protectora de alta claridad para pantalla táctil y teclado.',
                    'url'         => $theme_uri . '/assets/images/galeria/capturadores-otros/vista_01.webp'
                ),
                array(
                    'id'          => 'perfil',
                    'name'        => 'Vista Lateral',
                    'desc'        => 'Argollas D de acero para correa cruzada y acolchado perimetral.',
                    'url'         => $theme_uri . '/assets/images/galeria/capturadores-otros/vista_02.webp'
                ),
                array(
                    'id'          => 'posterior',
                    'name'        => 'Vista Posterior',
                    'desc'        => 'Correa elástica trasera para agarre seguro durante la jornada.',
                    'url'         => $theme_uri . '/assets/images/galeria/capturadores-otros/vista_03.webp'
                ),
                array(
                    'id'          => 'detalle',
                    'name'        => 'Detalle de Construcción',
                    'desc'        => 'Costura reforzada y remaches anti-desgarro para trabajo pesado.',
                    'url'         => $theme_uri . '/assets/images/galeria/filtradas/vista_01.webp'
                )
            ),
            'specs'        => array(
                'Material'       => 'Nylon Balístico 1680D Impermeable',
                'Protección'     => 'Mica Cristalina + Bisel de protección perimetral',
                'Fijación'       => 'Handstrap ergonómico + D-Rings',
                'Compatibilidad' => 'Unitech EA630, PA760, HT730, WD200'
            )
        ),
        'point-mobile' => array(
            'title'        => 'Fundas para Terminales Point Mobile',
            'subtitle'     => 'Confección precisa para PDAs y capturadores compactos e industriales Point Mobile.',
            'has_real_photos' => true,
            'badge'        => 'Fotos Reales de Confección ROLBAG',
            'views'        => array(
                array(
                    'id'          => 'frontal',
                    'name'        => 'Vista Frontal',
                    'desc'        => 'Mica de alta respuesta táctil con marco protector sellado.',
                    'url'         => $theme_uri . '/assets/images/galeria/filtradas/vista_02.webp'
                ),
                array(
                    'id'          => 'perfil',
                    'name'        => 'Vista Lateral',
                    'desc'        => 'Acceso despejado a escáner de código de barras y botones laterales.',
                    'url'         => $theme_uri . '/assets/images/galeria/filtradas/vista_03.webp'
                ),
                array(
                    'id'          => 'posterior',
                    'name'        => 'Vista Posterior',
                    'desc'        => 'Sujeción de mano antideslizante con ajuste de velcro.',
                    'url'         => $theme_uri . '/assets/images/galeria/filtradas/vista_04.webp'
                ),
                array(
                    'id'          => 'detalle',
                    'name'        => 'Refuerzo de Esquinas',
                    'desc'        => 'Esquinas con doble capa de amortiguación para impactos por caída.',
                    'url'         => $theme_uri . '/assets/images/galeria/filtradas/vista_05.webp'
                )
            ),
            'specs'        => array(
                'Material'       => 'Nylon 1680D de alta densidad + Espuma antichoque',
                'Protección'     => 'Mica frontal sellada resistente a polvo y salpicaduras',
                'Fijación'       => 'Handstrap trasero ajustable',
                'Compatibilidad' => 'Point Mobile PM85, PM90, PM75, PM67, PM30'
            )
        ),
        'urovo' => array(
            'title'        => 'Fundas de Protección para Equipos Urovo',
            'subtitle'     => 'Diseño ergonómico para terminales móviles y handhelds Urovo en logística y retail.',
            'has_real_photos' => true,
            'badge'        => 'Fotos Reales de Confección ROLBAG',
            'views'        => array(
                array(
                    'id'          => 'frontal',
                    'name'        => 'Vista Frontal',
                    'desc'        => 'Visor frontal transparente con ajuste exacto al bisel de la pantalla.',
                    'url'         => $theme_uri . '/assets/images/galeria/filtradas/vista_06.webp'
                ),
                array(
                    'id'          => 'perfil',
                    'name'        => 'Vista Lateral',
                    'desc'        => 'Perfil reforzado con acceso a conectores y botonera.',
                    'url'         => $theme_uri . '/assets/images/galeria/filtradas/vista_07.webp'
                ),
                array(
                    'id'          => 'posterior',
                    'name'        => 'Vista Posterior',
                    'desc'        => 'Banda de sujeción ergonómica para turnos de trabajo prolongados.',
                    'url'         => $theme_uri . '/assets/images/galeria/filtradas/vista_08.webp'
                ),
                array(
                    'id'          => 'detalle',
                    'name'        => 'Costuras Industriales',
                    'desc'        => 'Ribeteado de nylon y costuras de alta tensión para máxima durabilidad.',
                    'url'         => $theme_uri . '/assets/images/galeria/capturadores-otros/vista_02.webp'
                )
            ),
            'specs'        => array(
                'Material'       => 'Nylon Balístico 1680D + Acolchado EVA',
                'Protección'     => 'Mica protectora flexible anti-rayas',
                'Fijación'       => 'Handstrap elástico + Anclajes metálicos D-Ring',
                'Compatibilidad' => 'Urovo DT50, DT40, RT40, CT48, CT58'
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

/**
 * 9. Botón "Publicar Sitio" en el Admin Bar
 */
function rolbag_add_deploy_button($wp_admin_bar) {
    if ( ! current_user_can( 'manage_options' ) ) return;

    $args = array(
        'id'    => 'rolbag-deploy',
        'title' => '<span style="background:#000;color:#fff;padding:4px 12px;border-radius:4px;font-weight:bold;display:inline-block;line-height:22px;margin-top:2px;border:1px solid #333;">🚀 Publicar a Producción</span>',
        'href'  => '#',
        'meta'  => array(
            'class' => 'rolbag-deploy-btn',
            'onclick' => 'rolbagDeploySite(event)'
        )
    );
    $wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'rolbag_add_deploy_button', 999);

/**
 * 10. Script JS para el botón de Deploy y estilos
 */
function rolbag_deploy_scripts() {
    if ( ! current_user_can( 'manage_options' ) ) return;
    ?>
    <script>
    function rolbagDeploySite(e) {
        e.preventDefault();
        if(!confirm('¿Estás seguro de que deseas compilar el sitio y publicarlo a Vercel? Esto tomará unos segundos.')) return;
        
        let btn = document.querySelector('#wp-admin-bar-rolbag-deploy a');
        let oldHtml = btn.innerHTML;
        btn.innerHTML = 'Publicando... ⏳';
        btn.style.pointerEvents = 'none';
        
        fetch(ajaxurl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'action=rolbag_deploy_vercel'
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                alert(data.data + '\n\nPuedes revisar el progreso en scripts/deploy.log');
                console.log(data.data);
            } else {
                alert('Hubo un error al iniciar la publicación:\n' + (data.data || 'Error desconocido'));
            }
        })
        .catch(err => {
            alert('Error de red al intentar publicar.');
            console.error(err);
        })
        .finally(() => {
            btn.innerHTML = oldHtml;
            btn.style.pointerEvents = 'auto';
        });
    }
    </script>
    <?php
}
add_action('admin_footer', 'rolbag_deploy_scripts');
add_action('wp_footer', 'rolbag_deploy_scripts');

/**
 * 11. Endpoint AJAX para ejecutar el Deploy
 */
function rolbag_ajax_deploy_vercel() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_send_json_error('No tienes permisos.');
    }
    
    // Obtener ruta base del proyecto ROLBAG
    $project_root = dirname(dirname(dirname(dirname(__FILE__)))); 
    $project_root_win = str_replace('/', '\\', $project_root);
    
    // Ejecutar despliegue en segundo plano (asíncrono) para evitar bloqueos del servidor PHP
    $cmd = 'start /B cmd /C "cd /d ' . escapeshellarg($project_root_win) . ' && python scripts\deploy.py > scripts\deploy.log 2>&1"';
    pclose(popen($cmd, "r"));
    
    wp_send_json_success("Despliegue iniciado en segundo plano. Los cambios estaran visibles en Vercel pronto.");
}
add_action('wp_ajax_rolbag_deploy_vercel', 'rolbag_ajax_deploy_vercel');

/**
 * 12. Cargar scripts de Medios para el Metabox y UI sortable
 */
function rolbag_admin_enqueue_scripts($hook) {
    global $typenow;
    if ( $typenow == 'producto' ) {
        wp_enqueue_media();
        wp_enqueue_script( 'jquery-ui-sortable' );
    }
}
add_action( 'admin_enqueue_scripts', 'rolbag_admin_enqueue_scripts' );


