<?php
$images = get_sub_field( 'gallery_items' );
$size = 'gallery';

if( $images ) :
	?>

	<div class="block">

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

<?php
endif;
