<section>
	<div class="grid">
		<div class="col">

			<?php 
			$image = get_sub_field( 'image' );
			$size = 'thumbnail';
			if( $image ) :
				echo wp_get_attachment_image( $image, $size );
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
