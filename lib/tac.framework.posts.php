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


require_once( 'Custom-Meta-Boxes/custom-meta-boxes.php' );

add_filter( 'cmb_meta_boxes', 'tac_metaboxes' );

function tac_metaboxes( array $meta_boxes ) {

	$meta_boxes[] = array(
		'title' => 'Questions',
		'pages' => 'page',
		'fields' => array(
			array( 'id' => 'field-1',  'name' => 'Text input field', 'type' => 'text', 'repeatable' => true, ),
		)
	);
	return $meta_boxes; 
}

?>