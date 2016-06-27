<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
	<title><?php wp_title( '|' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<a href="/"><?php bloginfo( 'name' ); ?></a>
<nav class="main">
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav>