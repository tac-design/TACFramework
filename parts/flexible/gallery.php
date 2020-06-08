<?php
$images = get_sub_field( 'gallery_items' );
$size = 'gallery';

if( $images ) :
	?>

	<section class="block spacing spacing--bottom-only">
		<div class="grid">

			<?php
			foreach( $images as $image ):
				?>

				<div class="col">

					<?php
					echo wp_get_attachment_image( $image['ID'], $size ); ?>

				</div>

	    	<?php
	    	endforeach;
	    	?>

	    </div>
	</section>

<?php
endif;
