<?php
require_once('wp-load.php');

function print_gallery($slug) {
    $args = array('name' => $slug, 'post_type' => 'producto', 'post_status' => 'publish', 'posts_per_page' => 1);
    $posts = get_posts($args);
    if(empty($posts)) { return; }
    $post = $posts[0];
    echo "Product: " . $post->post_title . " (ID: " . $post->ID . ")\n";
    
    $meta = get_post_meta($post->ID);
    foreach ($meta as $key => $values) {
        if (strpos($key, 'galeria') !== false || strpos($key, 'foto') !== false || strpos($key, 'imag') !== false || strpos($key, 'gallery') !== false) {
            echo "Meta $key: " . print_r($values, true) . "\n";
            // If it contains serialized array
            $unserialized = @unserialize($values[0]);
            if (is_array($unserialized)) {
                echo "  Unserialized: " . print_r($unserialized, true) . "\n";
                foreach($unserialized as $id) {
                    echo "    ID $id -> " . wp_get_attachment_url($id) . "\n";
                }
            }
        }
    }
}

print_gallery('fundas-para-tablets');
print_gallery('fundas-para-tablets-de-uso-industrial');
print_gallery('fundas-para-pos-moviles');
print_gallery('fundas-para-pos-moviles-y-terminales-de-pago');
