<?php

function tac_create_post_type() {

	register_post_type( 'services',
		array(
			'labels' => array(
				'name' => __( 'Name' ),
				'singular_name' => __( 'Name' )
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'name'),
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon' => 'dashicons-desktop',
		)
	);
}

add_action( 'init', 'tac_create_post_type' );

?>