<?php
/**
 * Flexible - Text
 *
 * Template part for displaying text areas in a fleixble layout.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

?>

<section class="block spacing background-primary margin margin--bottom-only">
	<div class="grid">
		<div class="col col-8">

			<?php
			// Check if there's a title and if there is display it.
			$has_title = get_sub_field( 'title' );

			if ( $has_title ) : ?>

				<h2><?php the_sub_field( 'title' ); ?></h2>

			<?php
			endif; ?>

			<?php
			the_sub_field( 'content' ); ?>

		</div>
	</div>
</section>
