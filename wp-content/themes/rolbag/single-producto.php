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
$caracteristicas = json_decode( $caracteristicas_meta, true );
if ( ! is_array( $caracteristicas ) && ! empty( $caracteristicas_meta ) ) {
    $caracteristicas = array_filter( array_map( 'trim', explode( "\n", str_replace( "\r", "", $caracteristicas_meta ) ) ) );
}

// Beneficios
$beneficios_meta = get_post_meta( $post_id, 'rolbag_beneficios', true );
$beneficios = json_decode( $beneficios_meta, true );
if ( ! is_array( $beneficios ) && ! empty( $beneficios_meta ) ) {
    $beneficios = array_filter( array_map( 'trim', explode( "\n", str_replace( "\r", "", $beneficios_meta ) ) ) );
}

// Materiales
$materiales = get_post_meta( $post_id, 'rolbag_materiales', true );

// Marcas y Modelos
$brands_models_meta = get_post_meta( $post_id, 'rolbag_brands_models', true );
$brands_models = is_string( $brands_models_meta ) ? json_decode( $brands_models_meta, true ) : $brands_models_meta;
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

// Imágenes
$main_image = get_post_meta( $post_id, 'rolbag_image', true );
$gallery_meta = get_post_meta( $post_id, 'rolbag_gallery', true );
$gallery = json_decode( $gallery_meta, true );
if ( ! is_array( $gallery ) && ! empty( $gallery_meta ) ) {
    $gallery = array_filter( array_map( 'trim', explode( ',', $gallery_meta ) ) );
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
                <!-- Columna Izquierda: Galería -->
                <div class="rb-product-gallery-col">
                    <div class="rb-product-main-img-wrap">
                        <?php if ( $main_image ) : ?>
                            <img id="rb-main-view" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/' . $main_image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="rb-product-main-img" />
                        <?php else : ?>
                            <?php the_post_thumbnail( 'large', array( 'class' => 'rb-product-main-img' ) ); ?>
                        <?php endif; ?>
                    </div>
                    <?php if ( ! empty( $gallery ) && count( $gallery ) > 1 ) : ?>
                        <div class="rb-product-thumbs">
                            <?php foreach ( $gallery as $idx => $img_file ) : ?>
                                <button type="button" class="rb-thumb-btn <?php echo ( $idx === 0 ) ? 'active' : ''; ?>" data-img="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/' . $img_file ); ?>" aria-label="Ver vista <?php echo $idx + 1; ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/' . $img_file ); ?>" alt="<?php echo esc_attr( get_the_title() . ' vista ' . ($idx + 1) ); ?>" />
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

    <!-- Compatibilidad de Marcas y Modelos (Chips Técnicos) -->
    <?php if ( ! empty( $brands_models ) ) : 
        $num_brands = count( $brands_models );
        $is_few_brands = ( $num_brands <= 2 );
    ?>
        <section class="rb-section rb-compat-section" id="compatibilidad">
            <div class="rb-container">
                <div class="rb-section-header text-center">
                    <span class="rb-eyebrow rb-text-mono rb-text-accent">PROFUNDIDAD DE CATÁLOGO</span>
                    <h2 class="rb-h2">Compatibilidad y Modelos Desarrollados</h2>
                    <p class="rb-section-subtitle">Disponemos de patrones de confección probados para cada modelo y sistema operativo.</p>
                    
                    <?php if ( $total_models_count > 6 ) : ?>
                        <div class="rb-model-search-wrap">
                            <input type="text" id="rb-model-filter" placeholder="Buscar modelo o marca (ej. Zebra, TC58, Honeywell, ET40, ZQ630)..." aria-label="Filtrar modelos compatibles" class="rb-search-input" />
                        </div>
                    <?php endif; ?>
                </div>

                <div class="rb-compat-brands-grid <?php echo $is_few_brands ? 'rb-compat-brands-grid--compact' : ''; ?>">
                    <?php foreach ( $brands_models as $brand => $models ) : 
                        $brand_count = is_array( $models ) ? count( $models ) : 1;
                    ?>
                        <div class="rb-brand-card" data-brand="<?php echo esc_attr( strtolower( $brand ) ); ?>">
                            <div class="rb-brand-card__header">
                                <h3 class="rb-brand-name"><?php echo esc_html( $brand ); ?></h3>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Galería interactiva
    const mainView = document.getElementById('rb-main-view');
    const thumbBtns = document.querySelectorAll('.rb-thumb-btn');
    if (mainView && thumbBtns.length > 0) {
        thumbBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                thumbBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                mainView.src = this.getAttribute('data-img');
            });
        });
    }

    // Buscador interactivo de modelos (Chips)
    const filterInput = document.getElementById('rb-model-filter');
    if (filterInput) {
        filterInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            const brandCards = document.querySelectorAll('.rb-brand-card');
            
            brandCards.forEach(card => {
                let hasVisible = false;
                const chips = card.querySelectorAll('.rb-model-chip');
                const brandName = card.getAttribute('data-brand');
                
                if (brandName && brandName.includes(query)) {
                    chips.forEach(chip => chip.style.display = '');
                    hasVisible = true;
                } else {
                    chips.forEach(chip => {
                        const modelText = chip.getAttribute('data-model');
                        if (modelText && modelText.includes(query)) {
                            chip.style.display = '';
                            hasVisible = true;
                        } else {
                            chip.style.display = 'none';
                        }
                    });
                }
                card.style.display = hasVisible ? '' : 'none';
            });
        });
    }
});
</script>

<?php
get_footer('landing');
