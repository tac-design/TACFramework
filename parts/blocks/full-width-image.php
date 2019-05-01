<?php
/**
 * Flexible - Full Width Image
 *
 * Template part for show text areas in a fleixble layout.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */


// Check if this image has been marked to display full bleed.
$is_full_bleed = get_sub_field( 'full_bleed' );

// Get the image.
$image = get_sub_field( 'image' ); ?>

<figure class="block spacing spacing--bottom-only">

	<?php
	// If the image has NOT been set up full bleed, output the grid elements. Else do nothing.
	if ( ! $is_full_bleed ) : ?>

		<div class="grid">
			<div class="col col-12">

	<?php
	endif; ?>

		<?php
		// Check that there is an image and if there is display it using the ACF responsive image function defined in tac.framework.setup.php.
		if ( $image ) :

			// Get the ID of the image and use it to get the alt text.
			$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>

			<img <?php tac_acf_responsive_image( get_sub_field( 'image' ), 'full-width', '1800px' ); ?>  alt="<?php echo esc_html( $image_alt ); ?>" /> 

		<?php
		endif; ?>

	<?php
	// If the image is NOT set to full bleed, close the elements opened above.
	if ( ! $is_full_bleed ) : ?>

			</div>
		</div>

	<?php
	endif; ?>

</figure>
