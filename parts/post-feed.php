<?php
/**
 * Post feed
 *
 * A template part to show a post feed as a secondary query.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

?>

<aside id="post-feed" class="spacing spacing--bottom-only">
	<div class="grid">
		<div class="col col-12">
			<h2>Related blog posts</h2>
		</div>
			
		<!-- Start archive -->
		<?php // Get the latest 4 published posts.

		$this_post = $post->ID;

		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => 4,
			'post__not_in' => array( $this_post ),
		);

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="col col-3">

					<?php
					get_template_part( 'parts/archive', 'post' ); ?>

				</div>

			<?php
			endwhile;
		endif;

		wp_reset_postdata(); ?>

</div>
