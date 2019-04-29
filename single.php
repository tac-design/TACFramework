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

<article id="post" class="content">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'parts/content', 'post' );

	endwhile; ?>

</main>

<?php
get_footer();
