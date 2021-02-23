<?php


/**
 * Remove dashboard widgets that aren't needed.
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
 * Remove meta boxes on post editor screens that aren't needed.
 */
function tac_remove_extra_meta_boxes() {
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
add_action( 'admin_menu' , 'tac_remove_extra_meta_boxes' );





/**
 * Remove dashboard menu items that aren't needed.
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
 * Allow editors to manage menus.
 */
$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );





/**
 * Remove access to the Themes, Widgets and Customize menu items under Appearance.
 */
function tac_hide_menu() {
 
	// Hide theme selection page
	remove_submenu_page( 'themes.php', 'themes.php' );
 
	// Hide widgets page
	remove_submenu_page( 'themes.php', 'widgets.php' );
 
	// Hide customize page
	global $submenu;
	unset($submenu['themes.php'][6]);
 
}
 
add_action( 'admin_head', 'tac_hide_menu' );





/**
 * Add ACF Gmaps API Key.
 */
function tac_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyAR0Jwn0qzSvQSSQcwYEAhpziovJshfMog');
}

add_action( 'acf/init', 'tac_acf_init' );





/**
 * Remove post type support that we don't need.
 */
function tac_remove_content_editor() {
	remove_post_type_support( 'page', 'thumbnail' );
	remove_post_type_support( 'page', 'page-attributes' );
	remove_post_type_support( 'page', 'editor' );
}

add_action( 'init', 'tac_remove_content_editor' );





/**
 * Move the Gravity Forms menu item to a more suitable place.
 */
function tac_gform_menu_position( $position ) {
	return 50;
}

add_filter( 'gform_menu_position', 'tac_gform_menu_position' );





/**
 * Set up ACF options blocks.
 *
 * As a default, there's one options block for adding content for archive pages
 * and one for centrally stored company info, contact details etc.
 */
function tac_acf_op_init() {

	// Check function exists.
	if( function_exists( 'acf_add_options_page' ) ) {

		// Register options pages.
		$option_page = acf_add_options_page(array(
			'page_title'    => __( 'Archive Pages' ),
			'menu_title'    => __( 'Archive Pages' ),
			'menu_slug'     => 'archive-pages',
			'capability'    => 'edit_posts',
			'icon_url' 		=> 'dashicons-book',
			'redirect'      => false
		));

		// Register options pages.
		$option_page = acf_add_options_page(array(
			'page_title'    => __( 'Company Info' ),
			'menu_title'    => __( 'Company Info' ),
			'menu_slug'     => 'company-info',
			'capability'    => 'edit_posts',
			'icon_url' 		=> 'dashicons-building',
			'redirect'      => false
		));

	}
}
add_action( 'acf/init', 'tac_acf_op_init' );





/**
 * Customise the position of ACF options pages in the dashboard menu.
 */
function custom_menu_order( $menu_ord ) {  
	
	if ( !$menu_ord ) return true;  
	
	// Menu items to reposition.
	$archive = 'archive-pages';
	$company = 'company-info';
	
	// Remove from current menu.
	$menu_ord = array_diff( $menu_ord, array( $archive, $company ) );
	
	// Add back in a better position.
	array_splice( $menu_ord, 9, 0, array( $archive, $company ) );
	
	// Return the new menu.
	return $menu_ord;
}  
add_filter( 'custom_menu_order', 'custom_menu_order' );
add_filter( 'menu_order', 'custom_menu_order', 99 );
