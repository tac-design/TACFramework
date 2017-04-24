<?php
/**
 * Footer
 *
 * The template for the site footer.
 *
 * @package TAC Framework
 * @since Tac Framework 1.0
 */

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		the_title();
		the_content();
	}
}

get_footer();
