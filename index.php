<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'parts/archive-post' ); ?>

<?php endwhile; else: ?>

<p>No posts to display</p>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>