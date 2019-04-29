<?php
/**
 * Setup
 *
 * A file in which setup and optimisation of the WP CMS is done
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */




/**
 * Add support for post thumbnails
 */
add_theme_support( 'post-thumbnails' );




/**
 * Add support for post title tags
 */
function tac_theme_slug_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'tac_theme_slug_setup' );




/**
 * Add HTML5 support in search form
 */
function tac_after_setup_theme() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'tac_after_setup_theme' );




/**
 * Remove dashboard widgets that aren't needed
 */
function tac_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );
}
add_action( 'wp_dashboard_setup', 'tac_remove_dashboard_widgets' );




/**
 * Remove meta boxes on post editor screens that aren't needed
 */
function remove_extra_meta_boxes() {
	remove_meta_box( 'postcustom' , 'post' , 'normal' ); // custom fields for posts.
	remove_meta_box( 'revisionsdiv' , 'post' , 'normal' ); // custom fields for posts.
	remove_meta_box( 'postcustom' , 'page' , 'normal' ); // custom fields for pages.
	remove_meta_box( 'commentsdiv' , 'page' , 'normal' ); // recent comments for pages.
	remove_meta_box( 'tagsdiv-post_tag' , 'page' , 'side' ); // page tags.
	remove_meta_box( 'trackbacksdiv' , 'post' , 'normal' ); // post trackbacks.
	remove_meta_box( 'trackbacksdiv' , 'page' , 'normal' ); // page trackbacks.
	remove_meta_box( 'slugdiv', 'post', 'normal' ); // post slug.
	remove_meta_box( 'slugdiv', 'page', 'normal' ); // page slug.
}
add_action( 'admin_menu' , 'remove_extra_meta_boxes' );




/**
 * Remove dashboard menu items that aren't needed
 */
function tac_remove_menus() {
	global $menu;
	$restricted = array( __( 'Links' ),__( 'Comments' ) );
	end( $menu );
	while ( prev( $menu ) ) {
		$value = explode( ' ', $menu[ key( $menu ) ] [0] );
		if ( in_array( $value[0] !== null?$value[0] : '' , $restricted ) ) {
			unset( $menu[ key( $menu ) ] );
		}
	}
}
add_action( 'admin_menu', 'tac_remove_menus' );




/**
 * Move the Yoast SEO box to the bottom of the page editor screen.
 */
function tac_yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'tac_yoasttobottom' );




/**
 * Move the SEO box to the bottom of the page editor screen.
 */
function tac_seo_metabox_priority() {
	// Accepts 'high', 'default', 'low'. Default is 'high'.
	return 'low';
}

add_filter( 'the_seo_framework_metabox_priority', 'tac_seo_metabox_priority' );




/**
 * Clean the script tag for enqueued scripts (i.e. remove type="text/javascript" etc)
 *
 * @param string $tag is the script tag.
 * @param string $handle is the handle.
 */
function tac_tidy_scrip_tag( $tag, $handle ) {
	return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

add_filter( 'style_loader_tag', 'tac_tidy_scrip_tag', 10, 2 );
add_filter( 'script_loader_tag', 'tac_tidy_scrip_tag', 10, 2 );




/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar).
 * @param string $image_size the size of the thumbnail image or custom image size.
 * @param string $max_width the max width this image will be shown to build the sizes attribute.
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
