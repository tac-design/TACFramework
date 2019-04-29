<?php
/**
 * Flexible - Gallery
 *
 * Template part for displaying an image gallery.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

$images = get_sub_field( 'gallery_items' );
$size = 'gallery';

if( $images ) : ?>

	<section class="block spacing spacing--bottom-only">
		<div class="grid">

			<?php
			foreach( $images as $image ): ?>

				<div class="col col-3">

					<?php
					echo wp_get_attachment_image( $image['ID'], $size ); ?>

				</div>

	    	<?php
	    	endforeach; ?>

	    </div>
	</section>

<?php
endif;
