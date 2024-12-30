<?php

function theme_scripts_method(){
  // Enqueue the default styles.css file
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  // Enqueue the additional sites.css file
  wp_enqueue_style('sites-style', get_stylesheet_directory_uri() . '/sites.css', array('style'), '1.0', 'all');
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

function my_wp_nav_menu_objects( $items, $args ) {
  // Loop through each menu item
  foreach( $items as &$item ) {
      
      // Get the custom field (e.g., 'ikony_menu') for this menu item
      $icon_class = get_field('ikony_menu', $item);  // Assuming ACF is being used
      
      // If there's an icon class, add the <i> tag to the item
      if( $icon_class ) {
          // Append icon <i> tag before the link text
          $item->title = '<i class="' . esc_attr($icon_class) . '" style="font-size: 30px; color: rgb(37, 56, 41)"></i> ';
      }
  }
  
  return $items;
}
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2 );
?>