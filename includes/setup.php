<?php


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
