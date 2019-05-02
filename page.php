<?php
/**
 * Page
 *
 * The template for default pages.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

get_header(); ?>

<article id="page" class="content">

	<?php
	while ( have_posts() ) : the_post();

		// Get a default page banner.
		get_template_part( 'parts/banner' );

		// Get the main page content.
		get_template_part( 'parts/content', 'page' );

	endwhile; ?>

</article>

<?php
get_footer();
