<?php
get_header();
?>

<article id="page-content" class="content">

	<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'parts/banner' );
		the_content();
	endwhile;
	?>

</article>

<?php
get_footer();
