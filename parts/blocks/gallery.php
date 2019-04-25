<?php
/**
 * Flexible - Gallery
 *
 * Template part for displaying an image gallery.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

$images = get_sub_field( 'gallery_items' );
$size = 'gallery';

if( $images ):
	foreach( $images as $image ):
		echo wp_get_attachment_image( $image['ID'], $size );
    endforeach;
endif;
