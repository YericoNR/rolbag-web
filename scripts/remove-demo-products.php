<?php
// Ensure this is run via WP-CLI
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
    die( 'Must be run via WP-CLI' );
}

// Find all products starting with [DEMO]
$args = [
    'post_type'      => 'producto',
    'post_status'    => 'any',
    'posts_per_page' => -1,
    's'              => '[DEMO]'
];

$query = new WP_Query( $args );

if ( ! $query->have_posts() ) {
    WP_CLI::log( "No demo products found." );
    return;
}

$count = 0;
while ( $query->have_posts() ) {
    $query->the_post();
    
    // Extra safety check: title must start with [DEMO]
    if ( strpos( get_the_title(), '[DEMO]' ) === 0 ) {
        wp_delete_post( get_the_ID(), true ); // true to bypass trash
        WP_CLI::success( "Deleted: " . get_the_title() );
        $count++;
    }
}

wp_reset_postdata();

WP_CLI::success( "Finished. Deleted $count demo products." );
