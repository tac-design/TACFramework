<?php

// External files
require_once( 'lib/tac.framework.posts.php' );
require_once( 'lib/tac.framework.setup.php' );
require_once( 'lib/tac.framework.queries.php' );
require_once( 'lib/tac.framework.utilities.php' );


// Actions and filters
add_action( 'init', 'script_enqueuer' ); 


// Enqueue CSS
function tac_css_enqueuer() {
        wp_register_style( 'tac_main', get_stylesheet_directory_uri().'/style.css' );
        wp_enqueue_style( 'tac_main' );
        wp_register_style( 'tac_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    	wp_enqueue_style( 'tac_fontawesome' );
    }
add_action( 'wp_enqueue_scripts', 'tac_css_enqueuer' );


// Enqueue JS
function tac_script_enqueuer() {
	if( ! is_admin() ) {
		// Carousel
		wp_register_script( 'tac_carousel', get_stylesheet_directory_uri().'/js/owl.carousel.js', array( 'jquery' ) );
		wp_enqueue_script( 'tac_carousel' );
		// matchHeight
		wp_register_script( 'tac_match_height', get_stylesheet_directory_uri().'/js/jquery.matchHeight.js', array( 'jquery' ) );
		wp_enqueue_script( 'tac_match_height' );
		// Modernizr
		wp_register_script( 'tac_modernizr', get_stylesheet_directory_uri().'/js/modernizr.js', array( 'jquery' ) );
		wp_enqueue_script( 'tac_modernizr' );
		// Site
		wp_register_script( 'tac_site', get_stylesheet_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'tac_site' );
	};
}
add_action( 'wp_enqueue_scripts', 'tac_script_enqueuer' );


// Widgets
function tac_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Widget Area' ),
		'id' => 'widget-area',
		'description' => __( 'The widget area' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'tac_widgets_init' );


// Menus
register_nav_menus( array(
	'main' => 'Main Navigation',
	'mobile' => 'Mobile Navigation',
) );

?>