<?php

function register_post_type_name() {

	$labels = array(
		'name'                => 'Products',
		'singular_name'       => 'Product',
		'menu_name'           => 'Products',
		'parent_item_colon'   => 'Parent Product:',
		'all_items'           => 'All Products',
		'view_item'           => 'View Product',
		'add_new_item'        => 'Add New Product',
		'add_new'             => 'New Product',
		'edit_item'           => 'Edit Product',
		'update_item'         => 'Update Product',
		'search_items'        => 'Search products',
		'not_found'           => 'No products found',
		'not_found_in_trash'  => 'No products found in Trash',
	);
	$args = array(
		'label'               => 'product',
		'description'         => 'Product information pages',
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-aside',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'product', $args );
}
add_action( 'init', 'register_post_type_name', 0 );

require_once( 'Custom-Meta-Boxes/custom-meta-boxes.php' );

add_filter( 'cmb_meta_boxes', 'metaboxes' );

function metaboxes( array $meta_boxes ) {

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