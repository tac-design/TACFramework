<?php
get_header();

while ( have_posts() ) : the_post();
	?>

	<article id="post-content" class="content">

		<?php
		the_content();
		?>

	</article>

	<?php
	get_template_part( 'parts/components/post-feed' );
endwhile;

get_footer();
