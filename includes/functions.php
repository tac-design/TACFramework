<?php


/**
 * Add theme support for:
 *
 * 1. Post thumbnails.
 * 2. The correct implementation of the <title> tag.
 * 3. HTML5 fields in the default search form.
 * 4. Valid HTML <script> tags (no 'type' attribute).
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form' ) );
add_theme_support( 'html5', [ 'script', 'style' ] );





/**
 * Enqueue project CSS files.
 */
function tac_css_enqueuer() {
	wp_register_style( 'tac_main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'tac_main' );
}
add_action( 'wp_enqueue_scripts', 'tac_css_enqueuer' );





/**
 * Enqueue project JS files.
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
 * Include favicons and touch icons.
 */
function tac_add_favicon() {
	?>
	<link rel="shortcut icon" href="<?php echo esc_html( get_stylesheet_directory_uri() ); ?>/img/favicon.png"/>
	<link rel="apple-touch-icon" href="<?php echo esc_html( get_stylesheet_directory_uri() ); ?>/img/apple-touch-icon.png">
<?php
}

add_action( 'wp_head' , 'tac_add_favicon' );





/**
 * Register menus.
 */
register_nav_menus( array(
	'main' => 'Main Menu',
	'footer' => 'Footer Menu',
) );





/**
 * Add image sizes.
 *
 * Includes a set of optimal responsive sizes for 100% width images and and a set for 50%
 * width (see https://bit.ly/3dAQxwp). Also includes fixed ratio size used by cards throughout
 * the app, which will be smaller and therefore not as many sizes are needed.
 */
add_image_size( 'full', 1920, 9999, false );
add_image_size( 'full-xl', 1600, 9999, false );
add_image_size( 'full-l', 1366, 9999, false );
add_image_size( 'full-m', 1024, 9999, false );
add_image_size( 'full-s', 768, 9999, false );
add_image_size( 'full-xs', 640, 9999, false );

add_image_size( 'half', 960, 9999, false );
add_image_size( 'half-xl', 800, 9999, false );
add_image_size( 'half-l', 683, 9999, false );
add_image_size( 'half-m', 512, 9999, false );
add_image_size( 'half-s', 384, 9999, false );
add_image_size( 'half-xs', 320, 9999, false );

add_image_size( 'card', 800, 600, true );
add_image_size( 'card-m', 600, 450, true );
add_image_size( 'card-s', 400, 300, true );





/**
 * Check if more than one page of posts exist.
 *
 * This function makes sure that we don't show pagination elements, for example the container
 * around the next/prev links generated by WP, unless there's more than one page of posts returned
 * by the current query.
 */
function tac_is_paginated() {
	global $wp_query;
	return ( $wp_query->max_num_pages > 1 );
}





/**
 * Custom excerpt length.
 */
function tac_custom_excerpt_length( $length ) {
	return 15;
}

add_filter( 'excerpt_length', 'tac_custom_excerpt_length', 999 );





/**
 * Customise the excerpt text.
 */
function tac_new_excerpt_more( $more ) {
	return '...';
}

add_filter( 'excerpt_more', 'tac_new_excerpt_more' );






/**
 * Customise the Gravity Forms submit button.
 */
function tac_form_submit_button( $button, $form ) {
	return "<button id='gform_submit_button_{$form['id']}'>Submit form</button>";
}


add_filter( 'gform_submit_button', 'tac_form_submit_button', 10, 2 );
