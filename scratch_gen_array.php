<?php
$base_dir = 'C:\Users\Global Service - i7\Documents\ROLBAG\wp-content\themes\rolbag\assets\images\galeria\\';
$folders = array(
  'especiales_01' => 'Estructuras Especiales',
  'especiales_02' => 'Para Antebrazos y Muñecas (Wearables)',
  'especiales_03' => 'Radios y Comunicación',
  'especiales_04' => 'Equipos Especiales'
);
$out = "  } elseif ( \$product_slug === 'confecciones-especiales' ) {\n      \$real_gallery = array(\n";
foreach($folders as $dir => $title) {
  $files = glob($base_dir . $dir . '/*.*');
  foreach($files as $file) {
    $name = basename($file);
    $url = '$theme_uri . \'/assets/images/galeria/' . $dir . '/' . $name . '\'';
    // Pathinfo to just grab the filename without extension if wanted, or we can just leave it clean
    $clean_name = ucfirst(str_replace(['_', '-'], ' ', pathinfo($name, PATHINFO_FILENAME)));
    $out .= "          array( 'url' => $url, 'title' => '$title - ' . '$clean_name' ),\n";
  }
}
$out .= "      );\n";
echo $out;
