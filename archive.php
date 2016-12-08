<?php get_header(); ?>

<?php if ( have_posts() ):

	/**
	* Loop to control the archive title
	* Outputs cat, tag, author, month, year
	**/

	if (is_category()) { ?>
		<h1><?php single_cat_title(); ?></h1>
	<?php
	} elseif (is_tag()) { ?>
		<h1>Tags: <?php single_tag_title(); ?></h1>
	<?php
	} elseif (is_author()) { ?>
		<h1>Author: <?php get_the_author_meta('display_name'); ?></h1>
	<?php
	} elseif (is_month()) { ?>
		<h1>Monthly Archives: <?php the_time('F Y'); ?></h1>
	<?php
	} elseif (is_year()) { ?>
		<h1>Year: <?php the_time('Y'); ?></h1>
	<?php } ?>

	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php get_template_part( 'parts/archive-post' ); ?>

	<?php endwhile; else: ?>

		<p>No posts to display</p>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer();
