<?php


/**
 * Create custom posts
 * 
 * Creates a post type 'name'
 * All dashicons listed at https://developer.wordpress.org/resource/dashicons
 */
function tac_create_post_type() {

	register_post_type( 'custom-post',
		array(
			'labels' => array(
				'name' => __( 'Name' ),
				'singular_name' => __( 'Name' ),
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array(
				'slug' => 'custom-post',
			),
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
			'menu_icon' => 'dashicons-desktop',
		)
	);
}

add_action( 'init', 'tac_create_post_type' );





/**
 * Create custom taxonomies.
 * 
 * Creates a taxonomy called 'custom' and attaches it to 'post'.
 */
function tac_create_taxonomy() {

	register_taxonomy(
		'custom',
		'post',
		array(
			'label' => __( 'Custom Tax' ),
			'rewrite' => array( 'slug' => 'custom' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'tac_create_taxonomy' );
