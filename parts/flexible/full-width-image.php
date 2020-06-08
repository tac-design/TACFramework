<?php
$is_full_bleed = get_sub_field( 'full_bleed' );
$image = get_sub_field( 'image' );
?>

<figure>

	<?php
	if ( ! $is_full_bleed ) :
		?>

		<div class="grid">
			<div class="col">

	<?php
	endif;

	if ( $image ) :
		$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true ); 
		?>

		<img <?php tac_acf_responsive_image( get_sub_field( 'image' ), 'full-width', '1800px' ); ?>  alt="<?php echo esc_html( $image_alt ); ?>" /> 

	<?php
	endif;

	if ( ! $is_full_bleed ) : ?>

			</div>
		</div>

	<?php
	endif;
	?>

</figure>
