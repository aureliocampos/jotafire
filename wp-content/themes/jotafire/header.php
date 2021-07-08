<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()."/src/images/favicon-branco_32x32.png"?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()."/src/images/favicon-branco_16x16.png"?>">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="desktop__subheader">
			<div class="header__subheader-infos">
				<p class="header__subheader-text">Fale conosco:</p>
				<div class="header__phones">
					<a href="tel:+55212532-8712" class="header__phone-links">(21) 2532 - 8712</a>
					<a href="tel:+552198522-6449" class="header__phone-links">(21) 98522 - 6449</a>
				</div>
			</div>
		</div>
    <div class="header__container">
     <div class="header__responsive">
			<figure class="header__logo">
				<img src="<?php echo get_template_directory_uri()."/src/images/jotafire-white-logo.png"?>" alt="<?php bloginfo('description'); ?>" class="header__logo-image">
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

				<div class="mobile__subheader">
					<div class="header__subheader-infos">
						<p class="header__subheader-text">Fale conosco:</p>
						<div class="header__phones">
							<a href="tel:+55212532-8712" class="header__phone-links">(21) 2532 - 8712</a>
							<a href="tel:+552198522-6449" class="header__phone-links">(21) 98522 - 6449</a>
						</div>
					</div>
				</div>
      </div>
      
    </div>
  </header>

