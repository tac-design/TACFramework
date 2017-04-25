<?php
/**
 * Page
 *
 * The template for default pages.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			// Get the relevant template part to display the content.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; ?>

	</main>
</div>

<?php
get_footer();
