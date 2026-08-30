<?php
/**
 * Template Name: Página Legal / Términos y Privacidad
 *
 * Plantilla formal y elegante para Términos y Condiciones y Política de Privacidad de ROLBAG.
 *
 * @package Rolbag
 */

get_header('landing');
?>

<main id="primary" class="site-main rb-legal-page">

    <!-- Hero Legal -->
    <section class="rb-hero-editorial" style="min-height: 360px; padding: 80px 0 70px 0;">
        <div class="rb-hero-editorial__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/ops_logistica_1787700573166.jpg' ); ?>');"></div>
        <div class="rb-hero-editorial__overlay"></div>
        <div class="rb-container rb-hero-editorial__container">
            <div class="rb-hero-editorial__content">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">INFORMACIÓN INSTITUCIONAL</span>
                <h1 class="rb-h1"><?php the_title(); ?></h1>
                <p class="rb-hero-lead">Marco normativo, condiciones comerciales de fabricación y políticas de protección de información corporativa.</p>
            </div>
        </div>
    </section>

    <!-- Contenido Legal -->
    <section class="rb-section" style="background-color: #ffffff;">
        <div class="rb-container" style="max-width: 860px;">
            <div class="rb-legal-content" style="color: #334155; font-size: 1rem; line-height: 1.8;">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>

            <div class="rb-compat-note" style="margin-top: 48px;">
                <p><strong>¿Dudas sobre nuestras condiciones comerciales o acuerdos de confidencialidad?</strong> Comunícate con nuestra administración a través de <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" style="color:var(--color-brand-accent); font-weight:600;">nuestro formulario de contacto</a> o al correo <strong>contacto@rolbag.cl</strong>.</p>
            </div>
        </div>
    </section>

</main>

<?php
get_footer('landing');
