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
		<nav id="mobile-navigation" class="mobile-nav pushy pushy-right">
			<a class="menu-btn mobile-nav__close"></a>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'main',
				'container' => false,
			) );
			?>
			
		</nav>
		<header id="masthead" class="site-head">
			<div class="grid grid-end">
				<div class="col">
					<a class="site-logo" href="<?php echo esc_html( site_url() ); ?>">
						<img src="<?php echo esc_html( get_stylesheet_directory_uri() ); ?>/img/logo.svg" alt="<?php bloginfo( 'name' );?>">
					</a>
				</div>
				<div class="col">
					<nav id="main-nav" class="main-nav hide-for-small">

						<?php
						wp_nav_menu( array(
							'theme_location' => 'main',
						) );
						?>

					</nav>
					<button class="menu-btn">Menu</button>
				</div>
			</div>
		</header>

		<main id="main" class="site-main">
