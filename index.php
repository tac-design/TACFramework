<?php
get_header();
?>

<div id="archive" class="archive">

	<?php
	the_archive_title( '<h1>', '</h1>' );

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'parts/loop/post-card' );
		endwhile;
	else :
		?>
		
		<p>No posts to display</p>

	<?php
	endif;
	?>

</div>

<?php
get_footer();
