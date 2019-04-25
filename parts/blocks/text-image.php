<?php
/**
 * Flexible - Text & Image
 *
 * Template part for show text areas with an image in a fleixble layout.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */


// Get the image.
$image = get_sub_field( 'image' );

if ( $image ) :

	// Get the ID of the image and use it to get the alt text.
	$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>

	<img <?php tac_acf_responsive_image( get_sub_field( 'image' ), 'text-image', '1000px' ); ?>  alt="<?php echo esc_html( $image_alt ); ?>" /> 

<?php
endif;

the_sub_field( 'text' );
