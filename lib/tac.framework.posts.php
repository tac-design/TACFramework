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
 * Creates a post type 'services'
 * All dashicons listed at https://developer.wordpress.org/resource/dashicons
 */
function tac_create_post_type() {

	register_post_type( 'services',
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
