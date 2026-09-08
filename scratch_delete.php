<?php
require 'wp-load.php';

$posts = get_posts(['post_type' => 'any', 'posts_per_page' => -1]);
foreach($posts as $p) {
    if(stripos($p->post_title, 'REORGANIZAR') !== false) {
        echo "Found and deleting: " . $p->ID . ' - ' . $p->post_title . "\n";
        wp_delete_post($p->ID, true);
    }
}
