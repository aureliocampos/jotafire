<?php 

function custom_block_categories( $categories ) {
  $category_slugs = wp_list_pluck( $categories, 'slug' );
  return in_array( 'jotafire-blocks', $category_slugs, true ) ? $categories : array_merge(
      $categories,
      array(
          array(
              'slug'  => 'jotafire-blocks',
              'title' => __( 'Jotafire - blocos Personalizados', 'jf-plugin' ),
              'icon'  => ' wordpress',
          ),
      )
  );
}
add_filter( 'block_categories', 'custom_block_categories', 5, 2 );


add_action('acf/init', 'acf_init_block_types');

function acf_init_block_types() {
  // Check function exists.
  if( function_exists('acf_register_block_type') ) {


    acf_register_block_type(array(
        'name'              => 'main-primary',
        'title'             => __('Banner Primário'),
        'description'       => __('Banner Primário para páginas comuns.'),
        'render_template'   => 'template-parts/blocks/main/main-primary.php',
        'category'          => 'jotafire-blocks',
        'icon'              => 'admin-comments',
        'align'             => 'full',
        'keywords'          => array( 'Banner', 'main' ),
        'enqueue_style'     => get_template_directory_uri() . '/dist/template-parts/blocks/main/main-primary.css',
    ));

    acf_register_block_type(array(
      'name'              => 'icons',
      'title'             => __('Seção de Ícones'),
      'description'       => __(''),
      'render_template'   => 'template-parts/blocks/icons/icons.php',
      'category'          => 'jotafire-blocks',
      'icon'              => 'admin-comments',
      'align'             => 'full',
      'keywords'          => array( 'Banner', 'main', 'icons' ),
      'enqueue_style'     => get_template_directory_uri() . '/dist/template-parts/blocks/icons/icons.css',
    ));

    // Slides
    acf_register_block_type(array(
      'name'              => 'slides-services',
      'title'             => __('Slide de Serviços'),
      'description'       => __(''),
      'render_template'   => 'template-parts/blocks/slides/slides-services.php',
      'category'          => 'jotafire-blocks',
      'icon'              => 'admin-comments',
      'align'             => 'full',
      'keywords'          => array( 'Slides' ),
      'enqueue_style'     => get_template_directory_uri() . '/dist/template-parts/blocks/slides/slides-services.css',
    ));

    // Seção de cards intercalados (Manutenção)
    acf_register_block_type(array(
      'name'              => 'interleaved-card',
      'title'             => __('Cards Intercalados'),
      'description'       => __(''),
      'render_template'   => 'template-parts/blocks/cards/interleaved-card.php',
      'category'          => 'jotafire-blocks',
      'icon'              => 'admin-comments',
      'align'             => 'full',
      'keywords'          => array( 'Cards' ),
      'enqueue_style'     => get_template_directory_uri() . '/dist/template-parts/blocks/cards/interleaved-card.css',
    ));

    // Seção de cards (Estudos de caso)
    acf_register_block_type(array(
      'name'              => 'content-card',
      'title'             => __('Cards de Conteúdo Estudos de Caso'),
      'description'       => __(''),
      'render_template'   => 'template-parts/blocks/cards/content-card.php',
      'category'          => 'jotafire-blocks',
      'icon'              => 'admin-comments',
      'align'             => 'full',
      'keywords'          => array( 'Cards' ),
      'enqueue_style'     => get_template_directory_uri() . '/dist/template-parts/blocks/cards/content-card.css',
    ));

     // Seção de clientes 
     acf_register_block_type(array(
      'name'              => 'clients-parceiros',
      'title'             => __('Clientes e Parceiros'),
      'description'       => __(''),
      'render_template'   => 'template-parts/blocks/clients/clients.php',
      'category'          => 'jotafire-blocks',
      'icon'              => 'admin-comments',
      'align'             => 'full',
      'keywords'          => array( 'Cards' ),
      'enqueue_style'     => get_template_directory_uri() . '/dist/template-parts/blocks/clients/clients.css',
    ));
  }
}