<?php
/**
 * Page
 *
 * The template for single posts.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

get_header(); ?>

<article id="post" class="content">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'parts/content', 'post' );

		get_template_part( 'parts/post-feed' );

	endwhile; ?>

</main>

<?php
get_footer();
