<?php
/**
 * Page
 *
 * The template for single posts.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

get_header(); ?>

<main id="main" class="site-main">

	<?php
	while ( have_posts() ) : the_post();

		// Get the relevant template part to display the content.
		get_template_part( 'parts/content', 'post' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; ?>

</main>

<?php
get_sidebar();
get_footer();
