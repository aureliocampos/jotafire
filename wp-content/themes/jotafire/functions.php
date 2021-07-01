<?php 

function load_scripts($hook) {
 
  // create my own version codes
  $js_version  = date("ymd-Gis", filemtime( get_template_directory() . '/dist/bundle.js' ));
  // $css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));
    
  wp_enqueue_script( 'jquery', 'json2', '1.12.4', true );

  wp_enqueue_script( 'slick', get_template_directory_uri() . '/src/vendor/slick/slick.min.js', 'jquery', '1.8.1', true );

  wp_enqueue_script( 'bundle', get_template_directory_uri() . '/dist/bundle.js', array('jquery'), $js_version, true );

  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/src/js/scripts.js', 'jquery', '1.0.0', true );

  wp_register_style( 'slick-css', get_template_directory_uri() . '/src/vendor/slick/slick.css', false, '1.8.1' );

  wp_register_style( 'slick-theme', get_template_directory_uri() . '/src/vendor/slick/slick-theme.css', false, '1.8.1' );

  wp_enqueue_style ( 'slick-css' );
 wp_enqueue_style ( 'slick-theme' );
}
add_action('wp_enqueue_scripts', 'load_scripts');


add_theme_support( 'title-tag' );