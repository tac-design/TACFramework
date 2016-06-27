<?php

// External files
require_once( 'external/starkers-utilities.php' );

// Actions and filters
add_action( 'init', 'script_enqueuer' ); 
add_filter( 'body_class', 'add_slug_to_body_class' );

// Enqueue CSS
function css_enqueuer() {
        wp_register_style( 'main', get_stylesheet_directory_uri().'/style.css' );
        wp_enqueue_style( 'main' );
    }
add_action( 'wp_enqueue_scripts', 'css_enqueuer' );


// Enqueue JS
function script_enqueuer() {
	if( ! is_admin() ) {
		// Site
		wp_register_script( 'carousel', get_stylesheet_directory_uri().'/js/owl.carousel.js', array( 'jquery' ) );
		wp_enqueue_script( 'carousel' );
		// Modernizr
		wp_register_script( 'modernizr', get_stylesheet_directory_uri().'/js/modernizr.js', array( 'jquery' ) );
		wp_enqueue_script( 'modernizr' );
		// Retina
		wp_register_script( 'retina', get_stylesheet_directory_uri().'/js/retina.js', array( 'jquery' ) );
		wp_enqueue_script( 'retina' );
		// Site
		wp_register_script( 'site', get_stylesheet_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );
	};
}	

// Widgets
function widgets_init() {
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
add_action( 'widgets_init', 'widgets_init' );

// Menus
register_nav_menus( array(
	'primary' => 'Primary Navigation',
) );

?>