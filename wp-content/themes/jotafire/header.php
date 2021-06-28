<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header">
		<figure class="header__logo">
		<img src="<?php echo get_template_directory_uri()."/src/images/logo-jotafire_2x.png"?>" alt="<?php bloginfo('description'); ?>" class="hedaer__header-image">
		</figure>
		<nav class="nav">
			<ul class="nav__items">
				<li class="nav__item">
					<a href="" class="nav__link">Home</a>
				</li>
				<li class="nav__item">
					<a href="" class="nav__link">Sobre</a>
				</li>
				<li class="nav__item">
					<a href="" class="nav__link">Serviços</a>
				</li>
				<li class="nav__item">
					<a href="" class="nav__link">Estudos de Caso</a>
				</li>
				<li class="nav__item">
					<a href="" class="nav__link">Contato</a>
				</li>
			</ul>
		</nav>
	</header>

