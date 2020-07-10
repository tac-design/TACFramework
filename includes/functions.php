<?php


/**
 * Add theme support
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form' ) );
add_theme_support( 'html5', [ 'script', 'style' ] );





/**
 * Enqueue CSS
 */
function tac_css_enqueuer() {
	wp_register_style( 'tac_main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'tac_main' );
}
add_action( 'wp_enqueue_scripts', 'tac_css_enqueuer' );





/**
 * Enqueue JS
 */
function tac_script_enqueuer() {
	if ( ! is_admin() ) {
		// Site.
		wp_register_script( 'tac_main', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'tac_main' );
	};
}
add_action( 'wp_enqueue_scripts', 'tac_script_enqueuer' );






/**
 * Include schema markup
 */
function tac_add_schema() {
	get_template_part( 'parts/schema' );
}

add_action( 'wp_footer' , 'tac_add_schema' );





/**
 * Include favicons and touch icons
 */
function tac_add_favicon() {
	?>
	<link rel="shortcut icon" href="<?php echo esc_html( get_stylesheet_directory_uri() ); ?>/img/favicon.png"/>
	<link rel="apple-touch-icon" href="<?php echo esc_html( get_stylesheet_directory_uri() ); ?>/img/apple-touch-icon.png">
<?php
}

add_action( 'wp_head' , 'tac_add_favicon' );





/**
 * Register menus
 */
register_nav_menus( array(
	'main' => 'Main Navigation',
) );





/**
 * Add image sizes
 */
add_image_size( 'banner', 1800, 600, true );
add_image_size( 'text-image', 900, 600, true );
add_image_size( 'card', 400, 300, true );





/**
 * ACF responsive images
 */
function tac_acf_responsive_image( $image_id, $image_size, $max_width ) {

	// Check the image ID is not blank.
	if ( '' !== $image_id ) {

		// Set the default src image size.
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// Set the srcset with various image sizes.
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// Generate the markup for the responsive image.
		echo 'src="' . $image_src . '" srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, ' . $max_width . '"';
	}
}





/**
 * Check if more than one page of posts exist
 */
function tac_is_paginated() {
	global $wp_query;
	return ( $wp_query->max_num_pages > 1 );
}





/**
 * Custom excerpt length
 */
function tac_custom_excerpt_length( $length ) {
	return 15;
}

add_filter( 'excerpt_length', 'tac_custom_excerpt_length', 999 );





/**
 * Customise the excerpt text
 */
function tac_new_excerpt_more( $more ) {
	return '...';
}

add_filter( 'excerpt_more', 'tac_new_excerpt_more' );
