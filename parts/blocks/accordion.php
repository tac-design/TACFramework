<?php
/**
 * Flexible - Accordion
 *
 * Template part for displaying a repeating group of content in an accordion.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

?>

<section class="block spacing spacing--bottom-only">
	<div class="grid">
		<div class="col col-8">

			<?php
			$has_title = get_sub_field( 'title' );

			if ( $has_title ) : ?>

				
				<h2><?php the_sub_field( 'title' ); ?></h2>

			<?php
			endif;

			// Check if this group has any items.
			if ( have_rows( 'accordion_items' ) ) : ?>

				<dl class="js-accordion accordion">

					<?php
					// Loop through the rows of data.
					while ( have_rows( 'accordion_items' ) ) : the_row(); ?>

						<dt>
							<a href="#"><?php the_sub_field( 'title' ); ?></a>
						</dt>
						<dd>

							<?php
							the_sub_field( 'content' ); ?>

						</dd>

					<?php
					endwhile; ?>

				</dl>

			<?php
			endif; ?>

		</div>
	</div>
</section>
