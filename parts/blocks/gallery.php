<?php
$images = get_sub_field( 'gallery_items' );
$size = 'gallery';

if( $images ) :
	?>

	<div class="block">

		<?php
		foreach( $images as $image ):
			?>

			<?php
			echo wp_get_attachment_image( $image['ID'], $size ); ?>

    	<?php
    	endforeach;
    	?>

    </div>

<?php
endif;
