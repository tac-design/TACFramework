<?php
/**
 * Pagination
 *
 * Links to previous and next posts.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */


// Only show pagination links if there are multiple pages of posts.
if ( tac_is_paginated() ) :

	// The pagination links.
	next_posts_link( '&lt; Previous' );
	previous_posts_link( 'Next &gt;' );

endif;
