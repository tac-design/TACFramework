<?php
/**
 * Content - Page
 *
 * The main page content.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

?>

<section class="block block--first spacing spacing--bottom-only">
	<div class="grid">
		<div class="col col-8">

			<?php
			the_content(); ?>

		</div>
	</div>
</section>

<?php
// Get the flexible content blocks.
get_template_part( 'parts/content', 'flexible' );
