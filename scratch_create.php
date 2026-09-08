<?php
require_once('wp-load.php');
$post_id = wp_insert_post(array(
  'post_title'    => 'Confecciones Especiales y Desarrollo a Medida',
  'post_name'     => 'confecciones-especiales',
  'post_status'   => 'publish',
  'post_type'     => 'producto',
  'post_content'  => 'Soluciones personalizadas y confecciones a medida para hardware industrial, estructuras especiales, wearables y radiocomunicación.',
));
if($post_id){
  echo "Created product ID: $post_id\n";
  update_post_meta($post_id, 'rolbag_image', 'confecciones_especiales/main.jpg');
} else {
  echo "Failed to create product.\n";
}
