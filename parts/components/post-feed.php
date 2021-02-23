<aside id="post-feed">
			
	<?php
	$this_post = $post->ID;

	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 4,
		'post__not_in' => array( $this_post ),
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();
				get_template_part( 'parts/loop/card-post' );
		endwhile;
	endif;

	wp_reset_postdata();
	?>

</aside>
