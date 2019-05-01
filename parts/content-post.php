<?php
/**
 * Content - Post
 *
 * The main post content.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

?>

<section class="block block--first spacing spacing--bottom-only">
	<div class="grid">
		<div class="col col-8">

			<?php
			// Depending on whether meta is displayed consistently in archives and on single post templates, this template part may need to be extended.
			get_template_part( 'parts/meta' );
			
			the_content(); ?>

		</div>
	</div>
</section>
