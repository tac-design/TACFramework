<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<h1>Search Results for '<?php echo get_search_query(); ?>'</h2>	
	
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'parts/archive-post' ); ?>
		<?php the_excerpt(); ?>
	<?php endwhile; ?>

<?php else: ?>
	<p>No results found for '<?php echo get_search_query(); ?>'</p>
<?php endif; ?>

<?php get_footer();
