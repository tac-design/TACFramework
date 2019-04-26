<?php
/**
 * Index
 *
 * The template for the blog index.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

get_header(); ?>

<main id="main" class="site-main">

	<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'parts/archive-post' );
	endwhile;
	else : ?>

	<p>No posts to display</p>

	<?php
	endif; ?>

</main>

<?php
get_footer();
