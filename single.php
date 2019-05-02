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

		// The main post content.
		get_template_part( 'parts/content', 'post' );

		// Get a feed of more posts to avoid dead ends.
		get_template_part( 'parts/post-feed' );

	endwhile; ?>

</main>

<?php
get_footer();
