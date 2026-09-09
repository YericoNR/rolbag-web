<?php
require_once('wp-load.php');
require_once(ABSPATH . 'wp-admin/includes/media.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/image.php');

$slug = 'fundas-para-capturadores';
$filepath = 'C:/Users/Global Service - i7/.gemini/antigravity-ide/brain/b9aa4182-b5f0-47e8-9a48-cc1d209f7038/.user_uploaded/media_1788925544107.jpg';

function upload_image_to_wp($filepath) {
    if (!file_exists($filepath)) {
        echo "File not found: $filepath\n";
        return false;
    }
    // Copiar el archivo temporalmente al directorio de WP para que tenga un nombre amigable
    $friendly_name = 'funda-capturador-amarillo.jpg';
    $tmp_path = wp_upload_dir()['path'] . '/' . $friendly_name;
    copy($filepath, $tmp_path);

    $upload_file = wp_upload_bits($friendly_name, null, file_get_contents($tmp_path));
    if (!$upload_file['error']) {
        $wp_filetype = wp_check_filetype($friendly_name, null);
        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => 'Funda para Capturador de Datos',
            'post_content' => '',
            'post_status' => 'inherit'
        );
        $attachment_id = wp_insert_attachment($attachment, $upload_file['file']);
        if (!is_wp_error($attachment_id)) {
            $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);
            wp_update_attachment_metadata($attachment_id, $attachment_data);
            unlink($tmp_path);
            return $attachment_id;
        }
    }
    @unlink($tmp_path);
    return false;
}

$post = get_page_by_path($slug, OBJECT, 'producto');
if (!$post) {
    echo "Product not found: $slug\n";
    exit;
}

$att_id = upload_image_to_wp($filepath);
if ($att_id) {
    // 1. Establecemos como imagen destacada
    set_post_thumbnail($post->ID, $att_id);
    echo "Set featured image: $att_id\n";
    
    // 2. La agregamos también al principio de la galería existente por si acaso
    $gallery_ids = get_post_meta($post->ID, 'rolbag_gallery', true);
    if (!is_array($gallery_ids)) {
        $gallery_ids = array();
    }
    // Asegurarnos de que no haya duplicados si se corre varias veces
    if (!in_array($att_id, $gallery_ids)) {
        array_unshift($gallery_ids, $att_id);
        update_post_meta($post->ID, 'rolbag_gallery', $gallery_ids);
    }
    
    echo "Successfully updated $slug.\n";
} else {
    echo "Failed to upload image.\n";
}
?>
