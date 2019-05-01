<?php
/**
 * Flexible - Gallery
 *
 * Template part for displaying an image gallery.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

// Get the gallery images.
$images = get_sub_field( 'gallery_items' );

// Choose the size to display them at.
$size = 'gallery';

if( $images ) : ?>

	<section class="block spacing spacing--bottom-only">
		<div class="grid">

			<?php
			// Loop through each image returned and display it in a 25% width column.
			foreach( $images as $image ): ?>

				<div class="col col-3">

					<?php
					// Display the image.
					echo wp_get_attachment_image( $image['ID'], $size ); ?>

				</div>

	    	<?php
	    	endforeach; ?>

	    </div>
	</section>

<?php
endif;
