<?php
/**
 * Pagination
 *
 * Links to previous and next posts.
 *
 * @package NNP
 * @since NNP 1.0
 */


// Only show pagination links if there are multiple pages of posts.
if ( tac_is_paginated() ) : ?>

		<?php next_posts_link( '&lt; Previous' ); ?>
		<?php previous_posts_link( 'Next &gt;' ); ?>
	</div>

<?php
endif;
