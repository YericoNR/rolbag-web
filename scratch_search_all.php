<?php
require 'wp-load.php';

global $wpdb;

// Search posts
$posts = $wpdb->get_results("SELECT ID, post_title, post_type FROM $wpdb->posts WHERE post_title LIKE '%REORGANIZAR%' OR post_content LIKE '%REORGANIZAR%'");
if($posts) {
    foreach($posts as $p) {
        echo "POST: {$p->ID} - {$p->post_title} ({$p->post_type})\n";
    }
}

// Search terms
$terms = $wpdb->get_results("SELECT term_id, name FROM $wpdb->terms WHERE name LIKE '%REORGANIZAR%' OR slug LIKE '%reorganizar%'");
if($terms) {
    foreach($terms as $t) {
        echo "TERM: {$t->term_id} - {$t->name}\n";
    }
}

// Search options
$options = $wpdb->get_results("SELECT option_name FROM $wpdb->options WHERE option_value LIKE '%REORGANIZAR%'");
if($options) {
    foreach($options as $o) {
        echo "OPTION: {$o->option_name}\n";
    }
}

// Search postmeta
$meta = $wpdb->get_results("SELECT post_id, meta_key, meta_value FROM $wpdb->postmeta WHERE meta_value LIKE '%REORGANIZAR%'");
if($meta) {
    foreach($meta as $m) {
        echo "META (Post {$m->post_id}): {$m->meta_key} - {$m->meta_value}\n";
    }
}
