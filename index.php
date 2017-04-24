<?php
/**
 * Index
 *
 * The template for the blog index.
 *
 * @package TAC Framework
 * @since Tac Framework 1.0
 */

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
		get_template_part( 'parts/archive-post' );
endwhile;
else : ?>

	<p>No posts to display</p>

<?php
endif;

get_sidebar();

get_footer();
