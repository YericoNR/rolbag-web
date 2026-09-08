<?php
require 'wp-load.php';

global $wpdb;
$results = $wpdb->get_results("SELECT ID, post_title, post_type FROM $wpdb->posts WHERE post_title LIKE '%reorganizar%'");
foreach ($results as $row) {
    echo "Found: " . $row->ID . ' - ' . $row->post_title . ' (' . $row->post_type . ")\n";
    wp_delete_post($row->ID, true);
}
