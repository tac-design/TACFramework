<section>
	<div class="grid">
		<div class="col">

			<?php
			$image = get_sub_field( 'image' );
			if ( $image ) :

				$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true ); ?>

				<img <?php tac_acf_responsive_image( get_sub_field( 'image' ), 'text-image', '1000px' ); ?>  alt="<?php echo esc_html( $image_alt ); ?>" /> 

			<?php
			endif;
			?>

		</div>
		<div class="col">

			<?php
			the_sub_field( 'content' );
			?>

		</div>
	</div>
</section>
