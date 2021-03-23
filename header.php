<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php
		wp_head();
		?>

	</head>
	
	<body <?php body_class(); ?>>

		<div class="site-overlay"></div>

		<header id="masthead" class="site-head">
			<a class="site-logo" href="<?php echo esc_html( site_url() ); ?>">
				<img src="<?php echo esc_html( get_stylesheet_directory_uri() ); ?>/img/logo.svg" alt="<?php bloginfo( 'name' );?>">
			</a>
			<nav id="main-nav" class="main-nav hide-for-small">

				<?php
				wp_nav_menu( array(
					'theme_location' => 'main',
				) );
				?>

			</nav>
			<button class="menu-btn">Menu</button>
		</header>

		<nav id="mobile-navigation" class="mobile-nav pushy pushy-right">
			<button class="menu-btn">Close</button>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'main',
				'container' => false,
			) );
			?>
			
		</nav>

		<main id="main" class="site-main">
