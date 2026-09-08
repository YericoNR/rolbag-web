<?php
require_once('wp-load.php');
$posts = get_posts(array('post_type' => 'producto', 'post_status' => 'publish', 'posts_per_page' => -1));
foreach($posts as $post) {
    echo $post->post_title . ' -> ' . $post->post_name . "\n";
}
