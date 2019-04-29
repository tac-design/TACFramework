<?php
/**
 * Search
 *
 * The template for displaying search results.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

get_header(); ?>

<article id="search-results" class="content">

	<?php
	if ( have_posts() ) : ?>

		<h1>Search Results for '<?php echo get_search_query(); ?>'</h1>	
		
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'parts/archive-post' );
		endwhile;

	else : ?>

		<p>No results found for '<?php echo get_search_query(); ?>'</p>

	<?php endif; ?>

</main>

<?php
get_footer();
