<?php
/**
 * Template Name: Template
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'parts/banner' );
	?>

	<div id="page-content" class="content">

		<?php
		the_content();
		get_template_part( 'parts/blocks' );
		?>

	</div>

	<?php
endwhile;

get_footer();

