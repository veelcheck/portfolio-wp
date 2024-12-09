<?php

function theme_scripts_method(){
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array (), 1.0, false);
}

add_action( 'wp_enqueue_scripts', 'theme_scripts_method');

add_filter( 'auto_update_plugin', '__return_true' );

add_theme_support( 'post-thumbnails' );

if ( function_exists('register_sidebar') )

register_sidebar();

// Allow SVG uploads
function allow_svg_uploads($mime_types) {
  $mime_types['svg'] = 'image/svg+xml'; // Add SVG to allowed mime types
  return $mime_types;
}
add_filter('upload_mimes', 'allow_svg_uploads');

// Fix for SVG preview in media library
function fix_svg_preview() {
  echo '<style>
      .attachment-266x266, .thumbnail img {
          width: 100% !important;
          height: auto !important;
      }
  </style>';
}
add_action('admin_head', 'fix_svg_preview');


?>