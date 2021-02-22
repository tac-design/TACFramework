<?php
get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'parts/banner' );
	?>

	<div id="page-content" class="content">

		<?php
		the_content();
		?>

	</div>

	<?php
endwhile;

get_footer();
