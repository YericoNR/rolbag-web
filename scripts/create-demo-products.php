<?php
// Ensure this is run via WP-CLI
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
    die( 'Must be run via WP-CLI' );
}

$demo_products = [
    [
        'title' => '[DEMO] Funda Zebra TC52',
        'content' => 'Funda industrial de alta resistencia para capturador de datos Zebra TC52. Fabricada en nylon balístico con costuras reforzadas.',
        'excerpt' => 'Protección extrema para tu Zebra TC52.',
        'meta' => [
            '_sku' => 'DEMO-TC52-01',
            '_price' => '45.00'
        ],
        'terms' => [
            'categoria_producto' => 'Fundas para Capturadores',
            'marca' => 'Zebra'
        ]
    ],
    [
        'title' => '[DEMO] Funda Honeywell CT40',
        'content' => 'Funda premium diseñada específicamente para el Honeywell CT40. Incluye anclajes para correa y acceso completo a puertos.',
        'excerpt' => 'Diseño ergonómico y resistente para Honeywell CT40.',
        'meta' => [
            '_sku' => 'DEMO-CT40-02',
            '_price' => '48.00'
        ],
        'terms' => [
            'categoria_producto' => 'Fundas para Capturadores',
            'marca' => 'Honeywell'
        ]
    ],
    [
        'title' => '[DEMO] Valija de Seguridad Industrial',
        'content' => 'Valija rígida de alta resistencia para transporte de equipos delicados. Resistente a impactos, agua y polvo (IP67).',
        'excerpt' => 'Máxima protección para equipos críticos en terreno.',
        'meta' => [
            '_sku' => 'DEMO-VAL-03',
            '_price' => '120.00'
        ],
        'terms' => [
            'categoria_producto' => 'Valijas de Seguridad',
            'marca' => 'Genérica'
        ]
    ],
    [
        'title' => '[DEMO] Funda Impresora ZQ521',
        'content' => 'Funda protectora para impresora móvil Zebra ZQ521. Permite la impresión continua sin retirar la funda.',
        'excerpt' => 'Protección y operatividad para tu impresora Zebra.',
        'meta' => [
            '_sku' => 'DEMO-ZQ521-04',
            '_price' => '55.00'
        ],
        'terms' => [
            'categoria_producto' => 'Fundas para Impresoras',
            'marca' => 'Zebra'
        ]
    ],
    [
        'title' => '[DEMO] Candado de Seguridad Heavy-Duty',
        'content' => 'Candado industrial de acero endurecido con cable de seguridad trenzado. Diseñado para asegurar equipamiento valioso.',
        'excerpt' => 'Seguridad física industrial de grado superior.',
        'meta' => [
            '_sku' => 'DEMO-CAND-05',
            '_price' => '35.00'
        ],
        'terms' => [
            'categoria_producto' => 'Accesorios de Seguridad',
            'marca' => 'Genérica'
        ]
    ],
];

foreach ( $demo_products as $product ) {
    // Check if post already exists
    $existing = get_page_by_title( $product['title'], OBJECT, 'producto' );
    
    if ( $existing ) {
        WP_CLI::log( "Skipping: {$product['title']} (Already exists)" );
        continue;
    }
    
    $post_id = wp_insert_post( [
        'post_title'   => $product['title'],
        'post_content' => $product['content'],
        'post_excerpt' => $product['excerpt'],
        'post_status'  => 'publish',
        'post_type'    => 'producto',
    ] );
    
    if ( is_wp_error( $post_id ) ) {
        WP_CLI::error( "Error creating: {$product['title']}" );
    } else {
        // Add meta
        foreach ( $product['meta'] as $key => $value ) {
            update_post_meta( $post_id, $key, $value );
        }
        
        // Add terms
        foreach ( $product['terms'] as $taxonomy => $term_name ) {
            if ( ! term_exists( $term_name, $taxonomy ) ) {
                wp_insert_term( $term_name, $taxonomy );
            }
            wp_set_object_terms( $post_id, $term_name, $taxonomy, true );
        }
        
        WP_CLI::success( "Created: {$product['title']} (ID: $post_id)" );
    }
}
