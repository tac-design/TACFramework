<?php

// Add support for post thumbnails
add_theme_support( 'post-thumbnails' );


// Add HTML5 theme support
function tac_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'tac_after_setup_theme' );


// Remove unused meta boxes
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);	
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

// Remove unused post fields
function remove_extra_meta_boxes() {
	remove_meta_box( 'postcustom' , 'post' , 'normal' ); // custom fields for posts
	remove_meta_box( 'revisionsdiv' , 'post' , 'normal' ); // custom fields for posts	
	remove_meta_box( 'postcustom' , 'page' , 'normal' ); // custom fields for pages
	remove_meta_box( 'commentsdiv' , 'page' , 'normal' ); // recent comments for pages	
	remove_meta_box( 'tagsdiv-post_tag' , 'page' , 'side' ); // page tags
	remove_meta_box( 'trackbacksdiv' , 'post' , 'normal' ); // post trackbacks
	remove_meta_box( 'trackbacksdiv' , 'page' , 'normal' ); // page trackbacks	
	remove_meta_box('slugdiv','post','normal'); // post slug
	remove_meta_box('slugdiv','page','normal'); // page slug
}
add_action( 'admin_menu' , 'remove_extra_meta_boxes' );

// Remove unused menu items
function remove_menus () {
global $menu;
	$restricted = array(__('Links'),__('Comments'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');

?>