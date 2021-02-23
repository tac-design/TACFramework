<div class="block">

	<?php 
	$image = get_sub_field( 'image' );
	$size = 'thumbnail';
	if( $image ) :
		?>

		<figure>

			<?php
			echo wp_get_attachment_image( $image, $size );
			?>

		</figure>

		<?php
	endif;
	?>

	<div>

		<?php
		the_sub_field( 'content' );
		?>

	</div>
</div>
