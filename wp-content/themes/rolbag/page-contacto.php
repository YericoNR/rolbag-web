<?php
/**
 * Template Name: Contacto y Cotizaciones
 *
 * Página oficial de contacto comercial y cotizaciones corporativas ROLBAG.
 *
 * @package Rolbag
 */

get_header('landing');

$pre_linea   = isset( $_GET['linea'] ) ? sanitize_text_field( wp_unslash( $_GET['linea'] ) ) : '';
$pre_nombre  = isset( $_GET['nombre'] ) ? sanitize_text_field( wp_unslash( $_GET['nombre'] ) ) : '';
$pre_empresa = isset( $_GET['empresa'] ) ? sanitize_text_field( wp_unslash( $_GET['empresa'] ) ) : '';
$pre_email   = isset( $_GET['email'] ) ? sanitize_email( wp_unslash( $_GET['email'] ) ) : '';
$pre_tel     = isset( $_GET['telefono'] ) ? sanitize_text_field( wp_unslash( $_GET['telefono'] ) ) : '';
$pre_modelo  = isset( $_GET['modelo'] ) ? sanitize_text_field( wp_unslash( $_GET['modelo'] ) ) : '';
$pre_cant    = isset( $_GET['cantidad'] ) ? intval( $_GET['cantidad'] ) : '';
$pre_msg     = isset( $_GET['mensaje'] ) ? sanitize_textarea_field( wp_unslash( $_GET['mensaje'] ) ) : '';

$whatsapp_number = '569318360416';
$wa_url = 'https://wa.me/' . $whatsapp_number . '?text=' . urlencode( 'Hola ROLBAG, quisiera solicitar asesoría y cotización comercial.' );
?>

<main id="primary" class="site-main rb-contact-page">

    <!-- Hero de Contacto -->
    <section class="rb-hero-editorial" style="min-height: 420px; padding: 90px 0 80px 0;">
        <div class="rb-hero-editorial__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/generated/ops_logistica_1787700573166.jpg' ); ?>');"></div>
        <div class="rb-hero-editorial__overlay"></div>
        <div class="rb-container rb-hero-editorial__container">
            <div class="rb-hero-editorial__content">
                <span class="rb-eyebrow rb-text-mono rb-text-cyan">CANAL COMERCIAL OFICIAL</span>
                <h1 class="rb-h1">Contacto y Solicitud de Cotización</h1>
                <p class="rb-hero-lead">Comunícate directamente con nuestro equipo de confección y ventas para cotizar fundas protectoras, valijas o coordinar muestras a medida.</p>
            </div>
        </div>
    </section>

    <!-- Contenido Principal: Grid Formulario + Info de Contacto -->
    <section class="rb-section" style="background-color: var(--color-bg-light);">
        <div class="rb-container">
            <div class="rb-contact-grid">
                
                <!-- Columna Izquierda: Información de Contacto Directo -->
                <div class="rb-contact-info-panel" style="display: flex; flex-direction: column; gap: 20px;">
                    
                    <!-- Tarjeta WhatsApp Directo -->
                    <div class="rb-quote-card" style="border-top-color: #25d366; padding: 28px 24px;">
                        <span class="rb-badge" style="background-color: #25d366; margin-bottom: 12px;">Respuesta Inmediata</span>
                        <h3 class="rb-h3 rb-text-primary" style="margin-bottom: 8px;">WhatsApp Comercial</h3>
                        <p class="rb-text-muted" style="font-size: 0.92rem; margin-bottom: 16px;">Atención rápida para consultas técnicas, confirmación de modelos y envío de fotografías de equipos.</p>
                        <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer" class="rb-btn rb-btn--whatsapp" style="width: 100%;">
                            <svg viewBox="0 0 24 24" width="22" height="22" style="fill:currentColor; margin-right:8px; vertical-align:middle;"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8.01 12.27C8.14 12.44 9.76 14.94 12.24 16C12.83 16.27 13.28 16.42 13.64 16.53C14.23 16.72 14.77 16.69 15.2 16.63C15.68 16.56 16.67 16.03 16.88 15.45C17.08 14.87 17.08 14.38 17.02 14.28C16.96 14.17 16.8 14.11 16.56 13.99C16.32 13.86 15.12 13.28 14.9 13.2C14.67 13.11 14.51 13.08 14.35 13.32C14.18 13.57 13.71 14.11 13.56 14.28C13.42 14.45 13.27 14.47 13.03 14.35C12.79 14.24 11.99 13.97 11.04 13.13C10.3 12.47 9.8 11.66 9.66 11.42C9.51 11.18 9.64 11.04 9.77 10.92C9.88 10.81 10.02 10.63 10.14 10.49C10.26 10.34 10.3 10.24 10.38 10.08C10.46 9.92 10.42 9.77 10.36 9.66C10.3 9.54 9.8 8.34 9.6 7.84C9.39 7.36 9.19 7.43 9.03 7.42C8.88 7.42 8.71 7.33 8.53 7.33Z"/></svg>
                            +56 9 3183 6041
                        </a>
                    </div>

                    <!-- Tarjeta Taller y Datos Corporativos -->
                    <div class="rb-quote-card" style="padding: 28px 24px;">
                        <h3 class="rb-h3 rb-text-primary" style="margin-bottom: 16px;">Taller y Oficina Central</h3>
                        
                        <div style="display: flex; flex-direction: column; gap: 14px; font-size: 0.92rem; color: #475569;">
                            <div>
                                <strong style="display: block; color: var(--color-brand-primary); margin-bottom: 2px;">Ubicación del Taller:</strong>
                                <span>Santiago Centro, Región Metropolitana, Chile.</span>
                            </div>
                            <div>
                                <strong style="display: block; color: var(--color-brand-primary); margin-bottom: 2px;">Horario de Atención:</strong>
                                <span>Lunes a Viernes: 09:00 a 18:00 hrs.</span>
                            </div>
                            <div>
                                <strong style="display: block; color: var(--color-brand-primary); margin-bottom: 2px;">Correo Electrónico:</strong>
                                <span>contacto@rolbag.cl / ventas@rolbag.cl</span>
                            </div>
                            <div>
                                <strong style="display: block; color: var(--color-brand-primary); margin-bottom: 2px;">Cobertura y Despachos:</strong>
                                <span>Envíos coordinados a todas las regiones de Chile.</span>
                            </div>
                        </div>
                    </div>

                    <!-- Aviso de Muestra 48h -->
                    <div class="rb-process-notice" style="padding: 16px 18px;">
                        <div class="rb-notice-icon">!</div>
                        <div class="rb-notice-text" style="font-size: 0.88rem; line-height: 1.5;">
                            <strong>Muestra en 48 hrs:</strong> Para modelos no listados en el catálogo, coordinamos la recepción de tu dispositivo en nuestro taller para confeccionar la muestra física.
                        </div>
                    </div>

                </div>

                <!-- Columna Derecha: Formulario Formal de Cotización -->
                <div class="rb-quote-box" style="margin: 0; max-width: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
                    <div class="rb-quote-box__header">
                        <span class="rb-eyebrow rb-text-mono rb-text-accent">FORMULARIO DE CONTACTO</span>
                        <h2 class="rb-h2">Solicitud Formal de Cotización</h2>
                        <p class="rb-section-subtitle">Completa el siguiente formulario con el detalle de tu requerimiento para preparar una propuesta comercial a la medida.</p>
                    </div>

                    <form id="rb-main-contact-form" class="rb-quote-form" action="" method="POST">
                        <div id="rb-form-alert" style="display:none; padding:16px; border-radius:6px; margin-bottom:20px; font-size:0.95rem;"></div>

                        <div class="rb-form-grid">
                            <div class="rb-form-group">
                                <label for="c-nombre">Nombre y Apellido *</label>
                                <input type="text" id="c-nombre" name="c_nombre" required value="<?php echo esc_attr( $pre_nombre ); ?>" placeholder="Tu nombre completo" class="rb-input" />
                            </div>

                            <div class="rb-form-group">
                                <label for="c-empresa">Empresa / Razón Social *</label>
                                <input type="text" id="c-empresa" name="c_empresa" required value="<?php echo esc_attr( $pre_empresa ); ?>" placeholder="Nombre de la empresa" class="rb-input" />
                            </div>

                            <div class="rb-form-group">
                                <label for="c-email">Correo Electrónico Corporativo *</label>
                                <input type="email" id="c-email" name="c_email" required value="<?php echo esc_attr( $pre_email ); ?>" placeholder="correo@empresa.cl" class="rb-input" />
                            </div>

                            <div class="rb-form-group">
                                <label for="c-telefono">Teléfono / WhatsApp *</label>
                                <input type="tel" id="c-telefono" name="c_telefono" required value="<?php echo esc_attr( $pre_tel ); ?>" placeholder="+56 9 1234 5678" class="rb-input" />
                            </div>

                            <div class="rb-form-group">
                                <label for="c-linea">Línea de Interés *</label>
                                <select id="c-linea" name="c_linea" required class="rb-input" style="height: 44px;">
                                    <option value="">Selecciona una línea de producto...</option>
                                    <option value="Fundas para Capturadores" <?php selected( $pre_linea, 'Fundas para Capturadores' ); ?>>Fundas para Capturadores de Datos</option>
                                    <option value="Fundas para Tablets" <?php selected( $pre_linea, 'Fundas para Tablets' ); ?>>Fundas para Tablets Industriales</option>
                                    <option value="Fundas para Impresoras" <?php selected( $pre_linea, 'Fundas para Impresoras' ); ?>>Fundas para Impresoras Portátiles</option>
                                    <option value="Valijas de Seguridad" <?php selected( $pre_linea, 'Valijas de Seguridad' ); ?>>Valijas de Seguridad y Transporte</option>
                                    <option value="Candados de Seguridad" <?php selected( $pre_linea, 'Candados de Seguridad' ); ?>>Candados Especiales Igualados y Amaestrados</option>
                                    <option value="Desarrollo a Medida" <?php selected( $pre_linea, 'Desarrollo a Medida' ); ?>>Desarrollo Exclusivo / Modelo Nuevo</option>
                                    <option value="Otra Consulta" <?php selected( $pre_linea, 'Otra Consulta' ); ?>>Otra consulta o asesoría técnica</option>
                                </select>
                            </div>

                            <div class="rb-form-group">
                                <label for="c-cantidad">Cantidad Estimada de Unidades *</label>
                                <input type="number" id="c-cantidad" name="c_cantidad" required min="1" value="<?php echo esc_attr( $pre_cant ); ?>" placeholder="Ej. 25" class="rb-input" />
                            </div>

                            <div class="rb-form-group rb-form-group--full">
                                <label for="c-modelo">Marca y Modelo(s) de Hardware o Dimensiones de Valija *</label>
                                <input type="text" id="c-modelo" name="c_modelo" required value="<?php echo esc_attr( $pre_modelo ); ?>" placeholder="Ej: Zebra TC58 / Honeywell CT45 / Valija 45x35x20 cm" class="rb-input" />
                            </div>

                            <div class="rb-form-group rb-form-group--full">
                                <label for="c-mensaje">Detalles adicionales del requerimiento</label>
                                <textarea id="c-mensaje" name="c_mensaje" rows="4" placeholder="Especifica si cuentas con accesorios pistol grip, soporte de grúa horquilla, bordado de logotipo corporativo o plazos objetivo de entrega..." class="rb-textarea"><?php echo esc_textarea( $pre_msg ); ?></textarea>
                            </div>
                        </div>

                        <div class="rb-form-submit text-center" style="margin-top: 24px;">
                            <button type="submit" id="rb-submit-btn" class="rb-btn rb-btn--primary rb-btn--lg" style="width:100%;">Enviar Solicitud de Cotización</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('rb-main-contact-form');
    const alertBox = document.getElementById('rb-form-alert');
    const submitBtn = document.getElementById('rb-submit-btn');

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const nombre = document.getElementById('c-nombre').value;
            const empresa = document.getElementById('c-empresa').value;
            const email = document.getElementById('c-email').value;
            const telefono = document.getElementById('c-telefono').value;
            const linea = document.getElementById('c-linea').value;
            const modelo = document.getElementById('c-modelo').value;
            const cantidad = document.getElementById('c-cantidad').value;
            const mensaje = document.getElementById('c-mensaje').value;

            submitBtn.disabled = true;
            submitBtn.innerText = 'Enviando solicitud...';

            setTimeout(function() {
                alertBox.style.display = 'block';
                alertBox.style.backgroundColor = '#ecfdf5';
                alertBox.style.color = '#065f46';
                alertBox.style.border = '1px solid #a7f3d0';
                alertBox.innerHTML = '<strong>¡Solicitud recibida con éxito!</strong> Estimado/a <strong>' + nombre + '</strong> (' + empresa + '), hemos registrado tu solicitud de cotización para <strong>' + cantidad + ' unidades</strong> de <strong>' + linea + '</strong> (' + modelo + '). Un asesor comercial se pondrá en contacto contigo en breve.';
                
                form.reset();
                submitBtn.disabled = false;
                submitBtn.innerText = 'Enviar otra cotización';

                // Scroll suave a la alerta
                alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 600);
        });
    }
});
</script>

<?php
get_footer('landing');
