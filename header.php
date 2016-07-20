<!DOCTYPE HTML>
<html class="no-js" lang="en">
	
	<head>
		<title><?php wp_title( '|' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png"/>
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png"/>

		<?php wp_head(); ?>

	</head>
	
	<body <?php body_class(); ?>>

		<header class="site-head">

			<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="<?php bloginfo( 'name' );?>"></a>

			<nav class="main-nav">

				<?php 
				wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			</nav>

		</header>

		<main class="content">