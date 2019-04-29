<?php
/**
 * Template Name: Template
 *
 * A basic file for a page template.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

get_header(); ?>

<article id="page" class="content">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'parts/banner' );

		get_template_part( 'parts/content', 'page' );

	endwhile; ?>

</article>

<?php
get_footer();
