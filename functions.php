<?php
/**
 * Functions
 *
 * The theme functions file.
 * This file links to four files in the lib directors that should be removed if necessary.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */




/**
 * Include files from the lib directory
 */
require_once( 'lib/tac.framework.posts.php' );
require_once( 'lib/tac.framework.setup.php' );
require_once( 'lib/tac.framework.queries.php' );
require_once( 'lib/tac.framework.utilities.php' );




/**
 * Enqueue CSS
 * Main CSS file
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
 * Include favicons and touch icons
 * Only include favicon png and max size apple-touch-icon as per HTML5 Boilerplate
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
 * Main and Mobile
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
 * Check if more than one page of posts exist.
 */
function tac_is_paginated() {
	global $wp_query;
	return ( $wp_query->max_num_pages > 1 );
}




/**
 * Custom excerpt length.
 *
 * @param name $length is excerpt length.
 */
function tac_custom_excerpt_length( $length ) {
	return 15;
}

add_filter( 'excerpt_length', 'tac_custom_excerpt_length', 999 );




/**
 * Customise the excerpt text.
 *
 * @param name $more is the text that immediately follows the excerpt.
 */
function tac_new_excerpt_more( $more ) {
	return '...';
}

add_filter( 'excerpt_more', 'tac_new_excerpt_more' );
