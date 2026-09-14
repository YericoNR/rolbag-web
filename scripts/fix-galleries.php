<?php
require_once __DIR__ . '/../wp-load.php';

$slugs = array(
    'fundas-para-capturadores',
    'fundas-para-impresoras',
    'fundas-para-pos-moviles',
    'fundas-para-tablets',
    'valijas-de-seguridad',
    'candados-especiales'
);

foreach ($slugs as $slug) {
    $post = get_page_by_path( $slug, OBJECT, 'producto' );
    if ($post) {
        delete_post_meta($post->ID, 'rolbag_gallery');
        echo "Eliminado rolbag_gallery para: $slug\n";
    }
}
echo "Proceso finalizado.\n";
