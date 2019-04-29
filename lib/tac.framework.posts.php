<?php
/**
 * Posts
 *
 * A file in which post types, taxonomies and meta fields are defined.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */




/**
 * Example function to create a custom post type
 * Creates a post type 'name'
 * All dashicons listed at https://developer.wordpress.org/resource/dashicons
 */
function tac_create_post_type() {

	register_post_type( 'name',
		array(
			'labels' => array(
				'name' => __( 'Name' ),
				'singular_name' => __( 'Name' ),
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array(
				'slug' => 'name',
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
 * Create a custom taxonomy
 * Creates a taxonomy called 'custom' and attaches it to 'post'
 */
function tac_create_taxonomy() {
	// create a new taxonomy
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
