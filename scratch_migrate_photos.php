<?php
require_once('wp-load.php');
require_once(ABSPATH . 'wp-admin/includes/media.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/image.php');

$theme_dir = get_template_directory();

$mapping = array(
    'fundas-para-capturadores' => array(
        $theme_dir . '/assets/images/galeria/capturadores/honeywell_ck65_lateral.webp',
        $theme_dir . '/assets/images/galeria/capturadores/honeywell_ck65_frontal.webp',
        $theme_dir . '/assets/images/galeria/capturadores/zebra_frontal.webp',
        $theme_dir . '/assets/images/galeria/capturadores/pistol_grip_lateral.webp',
        $theme_dir . '/assets/images/galeria/capturadores/pistol_grip_frontal.webp',
        $theme_dir . '/assets/images/galeria/capturadores/zebra_lateral.webp'
    ),
    'fundas-para-impresoras' => array(
        $theme_dir . '/assets/images/galeria/impresoras/impresora_01.webp',
        $theme_dir . '/assets/images/galeria/impresoras/impresora_02.webp',
        $theme_dir . '/assets/images/galeria/impresoras/impresora_03.webp',
        $theme_dir . '/assets/images/galeria/impresoras/impresora_04.webp',
        $theme_dir . '/assets/images/galeria/impresoras/impresora_05.webp'
    ),
    'fundas-para-pos-moviles' => array(
        $theme_dir . '/assets/images/galeria/pos_moviles/pos_02.webp',
        $theme_dir . '/assets/images/galeria/pos_moviles/pos_01.webp'
    ),
    'fundas-para-tablets' => array(
        $theme_dir . '/assets/images/galeria/tablets/tablet_01.webp',
        $theme_dir . '/assets/images/galeria/tablets/tablet_02.webp',
        $theme_dir . '/assets/images/galeria/tablets/tablet_03.webp'
    )
);

function upload_image_to_wp($filepath) {
    if (!file_exists($filepath)) {
        echo "File not found: $filepath\n";
        return false;
    }
    $filename = basename($filepath);
    $upload_file = wp_upload_bits($filename, null, file_get_contents($filepath));
    if (!$upload_file['error']) {
        $wp_filetype = wp_check_filetype($filename, null);
        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
            'post_content' => '',
            'post_status' => 'inherit'
        );
        $attachment_id = wp_insert_attachment($attachment, $upload_file['file']);
        if (!is_wp_error($attachment_id)) {
            $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);
            wp_update_attachment_metadata($attachment_id, $attachment_data);
            return $attachment_id;
        }
    }
    return false;
}

foreach ($mapping as $slug => $images) {
    $post = get_page_by_path($slug, OBJECT, 'producto');
    if (!$post) {
        echo "Product not found: $slug\n";
        continue;
    }
    
    echo "Processing $slug...\n";
    
    $gallery_ids = array();
    $first = true;
    foreach ($images as $img_path) {
        $att_id = upload_image_to_wp($img_path);
        if ($att_id) {
            if ($first) {
                set_post_thumbnail($post->ID, $att_id);
                $first = false;
                echo "  Set featured image: $att_id\n";
            } else {
                $gallery_ids[] = $att_id;
                echo "  Added to gallery: $att_id\n";
            }
        }
    }
    
    if (!empty($gallery_ids)) {
        update_post_meta($post->ID, 'rolbag_gallery', $gallery_ids);
        echo "  Updated gallery meta.\n";
    }
}
echo "Done.\n";
?>
