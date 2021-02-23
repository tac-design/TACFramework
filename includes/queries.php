<?php


/**
 * Example modified query.
 */
function tac_customise_query( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}


	/**
	 * Show 9 posts on archive pages for the 'Post' post type.
	 */
	if ( is_post_type_archive( 'post' ) ) {
		$query->set( 'posts_per_page', 9 );
		return;
	}
}

add_action( 'pre_get_posts', 'tac_customise_query', 1 );
