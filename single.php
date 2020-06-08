<?php
get_header();
?>

<article id="post-content" class="content">

	<?php
	while ( have_posts() ) : the_post();
		the_content();
		get_template_part( 'parts/loop/post-feed' );
	endwhile;
	?>

</article>

<?php
get_footer();
