<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<header class="header">
    <div class="header__container">

     <div class="header__responsive">
			<figure class="header__logo">
				<img src="<?php echo get_template_directory_uri()."/src/images/logo_jotafire_white_1x.jpeg"?>" alt="<?php bloginfo('description'); ?>" class="header__logo-image">
			</figure>
      <div class="menu-hamburguer">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
     </div>

      <div class="header__content">
				<?php wp_nav_menu( array( 
					'container'       => 'nav',
					'container_class' => 'nav',
					'menu_class'      => 'nav__items',
					'echo'            => true,
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					'theme_location'  => '',
					) );
				?> 
      </div>
      
    </div>
  </header>

