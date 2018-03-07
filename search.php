<?php
/**
 * Search
 *
 * The template for displaying search results.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

get_header(); ?>

<main id="main" class="site-main">

	<?php if ( have_posts() ) : ?>
		<h1>Search Results for '<?php echo get_search_query(); ?>'</h1>	
		
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'parts/archive-post' );
			the_excerpt();
		endwhile;

	else : ?>
		<p>No results found for '<?php echo get_search_query(); ?>'</p>
	<?php endif; ?>

</main>

<?php
get_footer();
