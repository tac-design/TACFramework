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
			get_template_part( 'parts/meta' );
			
			the_content(); ?>

		</div>
	</div>
</section>
