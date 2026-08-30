<?php
/**
 * Setup All Required ROLBAG Corporate Pages & Assign Templates
 */
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
    die( 'Must be run via WP-CLI' );
}

$pages = array(
    array(
        'title'    => 'Sobre Nosotros',
        'slug'     => 'nosotros',
        'template' => 'page-nosotros.php',
        'content'  => 'Página institucional de ROLBAG: Historia, Trayectoria, Taller de Confección y Misión.',
    ),
    array(
        'title'    => 'Soluciones a Medida',
        'slug'     => 'soluciones-a-medida',
        'template' => 'page-soluciones-a-medida.php',
        'content'  => 'Servicio exclusivo de patronaje y desarrollo de fundas a medida con muestra física en 48 horas.',
    ),
    array(
        'title'    => 'Contacto y Cotizaciones',
        'slug'     => 'contacto',
        'template' => 'page-contacto.php',
        'content'  => 'Formulario de cotización comercial directa, WhatsApp y ubicación del taller central en Santiago Centro.',
    ),
    array(
        'title'    => 'Términos y Condiciones de Servicio',
        'slug'     => 'terminos-y-condiciones',
        'template' => 'page-legal.php',
        'content'  => '<h2>1. Condiciones Generales</h2>
<p>Las presentes condiciones regulan la cotización, fabricación y comercialización de fundas protectoras, valijas de seguridad y accesorios industriales confeccionados por <strong>ROLBAG (Rolando Álvarez Diéguez, RUT 14.706.840-9)</strong>.</p>

<h2>2. Proceso de Cotización y Validez de Ofertas</h2>
<p>Todas las cotizaciones emitidas por ROLBAG cuentan con una validez estándar de <strong>30 días corridos</strong> desde su emisión, sujeta a disponibilidad de insumos técnicos y variaciones arancelarias de materiales importados.</p>

<h2>3. Desarrollo a Medida y Muestras Físicas (48 Horas)</h2>
<p>Para la confección de modelos nuevos o adaptaciones que no formen parte del catálogo regular, el cliente deberá facilitar una unidad física del equipamiento durante un lapso de <strong>48 horas hábiles</strong> en nuestro taller central de Santiago Centro. Esta muestra permite realizar el patronaje milimétrico y elaborar una muestra real para aprobación técnica previa a la fabricación del lote.</p>

<h2>4. Plazos de Entrega y Despacho</h2>
<p>Los plazos de confección se calculan según el volumen de unidades y la complejidad del diseño. ROLBAG realiza despachos a todo el territorio nacional a través de empresas de transporte y logística acordadas con el cliente.</p>

<h2>5. Garantía de Fabricación</h2>
<p>Nuestros productos cuentan con garantía directa de fabricación contra fallas en costuras, broches y materiales sintéticos bajo condiciones normales de uso industrial y logístico.</p>',
    ),
    array(
        'title'    => 'Política de Privacidad',
        'slug'     => 'politica-de-privacidad',
        'template' => 'page-legal.php',
        'content'  => '<h2>1. Compromiso de Confidencialidad Corporativa</h2>
<p>En <strong>ROLBAG</strong> entendemos que la información provista por nuestros clientes corporativos (modelos de hardware, volúmenes de flota, logotipos y datos de contacto) reviste carácter estrictamente confidencial.</p>

<h2>2. Uso de la Información Recopilada</h2>
<p>Los datos solicitados a través de nuestros formularios de cotización y canales de WhatsApp son utilizados exclusivamente para:</p>
<ul>
    <li>Elaborar y enviar propuestas técnico-comerciales a la medida.</li>
    <li>Coordinar el retiro, recepción y entrega de muestras físicas de hardware.</li>
    <li>Gestionar la facturación y despacho de pedidos a lo largo de Chile.</li>
</ul>

<h2>3. No Divulgación a Terceros</h2>
<p>ROLBAG no vende, arrienda ni transfiere bases de datos ni información comercial a terceras partes. Los logotipos y marcas proporcionados para bordados o impresiones en valijas y fundas son utilizados únicamente para la confección del lote autorizado por el cliente titular.</p>

<h2>4. Contacto sobre Datos Personales</h2>
<p>Para cualquier consulta respecto al tratamiento de tus datos corporativos, puedes escribirnos directamente a <strong>contacto@rolbag.cl</strong>.</p>',
    ),
);

foreach ( $pages as $p ) {
    $existing = get_page_by_path( $p['slug'] );
    
    if ( $existing ) {
        wp_update_post( array(
            'ID'           => $existing->ID,
            'post_title'   => $p['title'],
            'post_content' => $p['content'],
            'post_status'  => 'publish',
        ) );
        update_post_meta( $existing->ID, '_wp_page_template', $p['template'] );
        WP_CLI::success( "Página actualizada: {$p['title']} (/{$p['slug']}) con template {$p['template']}" );
    } else {
        $page_id = wp_insert_post( array(
            'post_title'   => $p['title'],
            'post_name'    => $p['slug'],
            'post_content' => $p['content'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ) );
        if ( ! is_wp_error( $page_id ) ) {
            update_post_meta( $page_id, '_wp_page_template', $p['template'] );
            WP_CLI::success( "Página creada: {$p['title']} (/{$p['slug']}) con template {$p['template']}" );
        } else {
            WP_CLI::error( "Error al crear: {$p['title']}" );
        }
    }
}

// Actualizar enlaces permanentes (Permalinks)
global $wp_rewrite;
$wp_rewrite->set_permalink_structure( '/%postname%/' );
flush_rewrite_rules();
WP_CLI::success( "Reglas de reescritura de WordPress actualizadas." );
