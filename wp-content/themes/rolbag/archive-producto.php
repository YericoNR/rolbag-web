<?php
/**
 * Archive Producto Template - Catálogo de Líneas Oficiales ROLBAG
 *
 * @package Rolbag
 */

get_header('landing');
?>

<main id="primary" class="site-main rb-catalog-page">

    <section class="rb-section rb-catalog-hero">
        <div class="rb-container text-center">
            <span class="rb-eyebrow rb-text-mono rb-text-accent">CATÁLOGO CORPORATIVO</span>
            <h1 class="rb-h1">Líneas de Productos ROLBAG</h1>
            <p class="rb-section-subtitle" style="max-width:760px; margin:0 auto;">Soluciones profesionales de protección y seguridad diseñadas a la medida de la tecnología móvil en almacenes, bodegas y logística en todo Chile.</p>
        </div>
    </section>

    <section class="rb-section rb-catalog-grid-section" style="padding-top: 0;">
        <div class="rb-container">
            <div class="rb-catalog-grid">
                <?php
                $official_lines = new WP_Query( array(
                    'post_type'      => 'producto',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order title',
                    'order'          => 'ASC'
                ) );

                if ( $official_lines->have_posts() ) :
                    while ( $official_lines->have_posts() ) :
                        $official_lines->the_post();
                        $post_id = get_the_ID();
                        $short_title = get_post_meta( $post_id, 'rolbag_short_title', true ) ?: get_the_title();
                        $image = get_post_meta( $post_id, 'rolbag_image', true );
                        $brands_models_meta = get_post_meta( $post_id, 'rolbag_brands_models', true );
                        $brands_models = is_array( $brands_models_meta ) ? $brands_models_meta : ( ( is_string( $brands_models_meta ) && json_decode( $brands_models_meta, true ) ) ? json_decode( $brands_models_meta, true ) : array() );
                        $total_models = 0;
                        if ( is_array( $brands_models ) ) {
                            foreach ( $brands_models as $b => $m ) {
                                if ( is_array( $m ) ) {
                                    $total_models += count( $m );
                                }
                            }
                        }

                        $card_slug = get_post_field( 'post_name', $post_id );
                        $card_img_url = '';

                        // 1. Intentar usar la Imagen Destacada (Featured Image)
                        if ( has_post_thumbnail( $post_id ) ) {
                            $card_img_url = get_the_post_thumbnail_url( $post_id, 'large' );
                        }

                        // 2. Si no hay destacada, intentar obtener la primera imagen de la galería dinámica
                        if ( empty($card_img_url) ) {
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
                            
                            if ( count($dynamic_gallery_ids) > 0 ) {
                                $first_img_id = reset($dynamic_gallery_ids);
                                if ( is_numeric($first_img_id) ) {
                                    $card_img_url = wp_get_attachment_image_url( $first_img_id, 'large' );
                                }
                            }
                        }

                        // 3. Fallback a hardcoded si sigue vacío (mientras migra)
                        if ( empty($card_img_url) ) {
                            if ( $card_slug === 'fundas-para-capturadores' ) {
                                $card_img_url = get_template_directory_uri() . '/assets/images/galeria/capturadores/honeywell_ck65_lateral.webp';
                            } elseif ( $card_slug === 'fundas-para-tablets' ) {
                                $card_img_url = get_template_directory_uri() . '/assets/images/galeria/tablets/tablet_05.webp';
                            } elseif ( $card_slug === 'fundas-para-impresoras' ) {
                                $card_img_url = get_template_directory_uri() . '/assets/images/galeria/impresoras/impresora_01.webp';
                            } elseif ( $card_slug === 'fundas-para-pos-moviles' ) {
                                $card_img_url = get_template_directory_uri() . '/assets/images/galeria/pos_moviles/pos_02.webp';
                            } elseif ( $card_slug === 'confecciones-especiales' ) {
                                $card_img_url = get_template_directory_uri() . '/assets/images/galeria/confecciones_especiales/estructuras/1.png';
                            } elseif ( $image ) {
                                $card_img_url = get_template_directory_uri() . '/assets/images/generated/' . $image;
                            }
                        }
                        ?>
                        <article class="rb-catalog-card">
                            <div class="rb-catalog-card__img-wrap">
                                <?php if ( $card_img_url ) : ?>
                                    <img src="<?php echo esc_url( $card_img_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="rb-catalog-card__img" />
                                <?php else : ?>
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'rb-catalog-card__img' ) ); ?>
                                <?php endif; ?>
                                <div class="rb-catalog-card__badge-wrap">
                                    <span class="rb-badge"><?php echo ( $total_models > 0 ) ? '+' . $total_models . ' modelos' : 'Fabricación a medida'; ?></span>
                                </div>
                            </div>
                            <div class="rb-catalog-card__body">
                                <h2 class="rb-catalog-card__title"><?php echo esc_html( $short_title ); ?></h2>
                                <p class="rb-catalog-card__desc"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
                                
                                <?php if ( ! empty( $brands_models ) ) : ?>
                                    <div class="rb-catalog-card__brands">
                                        <strong>Marcas compatibles:</strong>
                                        <span><?php echo esc_html( implode( ', ', array_slice( array_keys( $brands_models ), 0, 5 ) ) ); ?><?php echo ( count( $brands_models ) > 5 ) ? '...' : ''; ?></span>
                                    </div>
                                <?php endif; ?>

                                <div class="rb-catalog-card__footer">
                                    <a href="<?php the_permalink(); ?>" class="rb-btn rb-btn--primary" style="width:100%; text-align:center;">Ver ficha y compatibilidad &rarr;</a>
                                </div>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center">No se encontraron líneas de productos activas.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Banner CTA a Medida -->
    <section class="rb-section rb-custom-banner" style="background-color: var(--color-brand-primary-dark); color: #fff; padding: 64px 0;">
        <div class="rb-container text-center">
            <span class="rb-eyebrow rb-text-mono rb-text-cyan">SOLUCIONES EXCLUSIVAS</span>
            <h2 class="rb-h2 rb-text-white">¿No encuentras el modelo de tu equipamiento?</h2>
            <p class="rb-text-muted" style="max-width:680px; margin:0 auto 24px auto;">Fabricamos fundas y accesorios a medida para cualquier modelo o marca en 48 horas tras disponer de la muestra del dispositivo.</p>
            <a href="/contacto" class="rb-btn rb-btn--primary rb-btn--lg">Solicitar Desarrollo a Medida</a>
        </div>
    </section>

</main>

<?php
get_footer('landing');
