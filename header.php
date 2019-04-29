<?php
/**
 * Header
 *
 * The template for the site header. Displays everything up to the main content.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php
		wp_head(); ?>

	</head>
	
	<body <?php body_class(); ?>>

		<!-- Site overlay to darken and block main content when pushy menu is open. -->
		<div class="site-overlay"></div>

		<!-- Start mobile navigation, which is initially concealed. -->
		<nav id="mobile-navigation" class="mobile-nav pushy pushy-right">
			<a class="menu-btn mobile-nav__close"></a>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'mobile',
				'container' => false,
			) ); ?>
			
		</nav><!-- /#mobile-navigation. -->

		<!-- Start site header. -->
		<header id="masthead" class="site-head">
			<div class="grid grid-end">
				<div class="col">
					<a class="site-logo" href="<?php echo esc_html( site_url() ); ?>">
						<img src="<?php echo esc_html( get_stylesheet_directory_uri() ); ?>/img/logo.svg" alt="<?php bloginfo( 'name' );?>">
					</a>
				</div>
				<div class="col">
			
					<!-- Start main nav. -->
					<nav id="main-nav" class="main-nav hide-for-small">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'main',
						) ); ?>
					</nav><!-- /#main-nav. -->

					<a href="#" class="menu-btn show-for-small">Menu</a>

				</div>
			</div>
		</header><!-- /#masthead. -->

		<main id="main" class="site-main">
