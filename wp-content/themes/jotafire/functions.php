<?php 

function load_scripts($hook) {
 
  // create my own version codes
  $js_version  = date("ymd-Gis", filemtime( get_template_directory() . '/dist/js/bundle.js' ));
  // $css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));
    
  // 
  wp_enqueue_script( 'bundle', get_template_directory_uri() . '/dist/js/bundle.js', array(), $js_version, true );
  // wp_register_style( 'my_css',    plugins_url( 'style.css',    __FILE__ ), false,   $my_css_ver );
  // wp_enqueue_style ( 'my_css' );
 
}
add_action('wp_enqueue_scripts', 'load_scripts');


// add_filter( 'script_loader_tag', function ( $tag, $handle ) {

//   if ( 'wp-embed-js' === $handle )
//       return $tag;

//   return str_replace( ' src', ' async src', $tag );
// }, 10, 2 );
