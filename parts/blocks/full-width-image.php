<?php
/**
 * Flexible - Full Width Image
 *
 * Template part for show text areas in a fleixble layout.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */


$is_full_bleed = get_sub_field( 'full_bleed' );

// Get the image.
$image = get_sub_field( 'image' ); ?>

<figure class="block spacing spacing--bottom-only">

	<?php
	if ( ! $is_full_bleed ) : ?>

		<div class="grid">
			<div class="col col-12">

	<?php
	endif; ?>

		<?php
		if ( $image ) :

			// Get the ID of the image and use it to get the alt text.
			$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>

			<img <?php tac_acf_responsive_image( get_sub_field( 'image' ), 'full-width', '1800px' ); ?>  alt="<?php echo esc_html( $image_alt ); ?>" /> 

		<?php
		endif; ?>

	<?php
	if ( ! $is_full_bleed ) : ?>

			</div>
		</div>

	<?php
	endif; ?>

</figure>
