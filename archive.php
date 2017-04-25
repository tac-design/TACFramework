<?php
/**
 * Archive
 *
 * The default archive template used in the theme.
 * Page titles are displayed dependent on the type of archive being shown.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'parts/archive-post' );
		endwhile;
		else : ?>

		<p>No posts to display</p>

		<?php
		endif; ?>

	</main>
</div>

<?php
get_sidebar();
get_footer();
