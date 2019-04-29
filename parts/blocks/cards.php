<?php
/**
 * Flexible - Cards
 *
 * Template part for displaying a repeating group of cards in a grid.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

// Check if this group has any items.
if ( have_rows( 'card' ) ) : ?>

	<section class="block spacing spacing--bottom-only">
		<div class="grid">

			<?php
			// Loop through the rows of data.
			while ( have_rows( 'card' ) ) : the_row(); ?>

				<div class="col col-4">
					<div class="card">

						<?php
						// Get the image.
						$image = get_sub_field( 'image' );

						if ( $image ) :

							// Get the ID of the image and use it to get the alt text.
							$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>

							<img <?php tac_acf_responsive_image( get_sub_field( 'image' ), 'card', '600px' ); ?>  alt="<?php echo esc_html( $image_alt ); ?>" /> 

						<?php
						endif; ?>

						<h2><?php the_sub_field( 'title' ); ?></h2>

						<?php
						// Check if this card has paragraph content and if it does display it.
						$has_content = get_sub_field( 'content' );

						if ( $has_content ) :
							the_sub_field( 'content' );
						endif;

						// Check if this card has a link and if it does display it.
						$has_link = get_sub_field( 'link' );

						if ( $has_link ) : ?>

							<a href="<?php the_sub_field( 'link' ); ?>"><button>Read more</button></a>

						<?php
						endif; ?>

					</div>
				</div>

			<?php
			endwhile; ?>

		</div>
	</section>

<?php
endif;
