<?php
/**
 * Header
 *
 * The template for the site header. Displays everything up to the main content.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>

		<header id="masthead" class="site-head" role="banner">
			<a href="<?php echo esc_html( site_url() ); ?>">
				<img src="<?php echo esc_html( get_stylesheet_directory_uri() ); ?>/img/logo.svg" alt="<?php bloginfo( 'name' );?>">
			</a>
			
			<nav class="main-nav">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main',
				) ); ?>
			</nav>

		</header>
