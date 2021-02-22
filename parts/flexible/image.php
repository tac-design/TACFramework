<?php
$is_full_bleed = get_sub_field( 'full_bleed' );
$image = get_sub_field( 'image' );
$size = 'thumbnail';
?>

<figure>

	<?php
	if ( ! $is_full_bleed ) :
		?>

		<div class="grid">
			<div class="col">

	<?php
	endif;
							
	if( $image ) :
		echo wp_get_attachment_image( $image, $size );
	endif;

	if ( ! $is_full_bleed ) : ?>

			</div>
		</div>

	<?php
	endif;
	?>

</figure>
