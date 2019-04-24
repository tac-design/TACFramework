<?php
/**
 * Flexible - Text
 *
 * Template part for show text areas in a fleixble layout.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */


// Check if there's a title and if there is display it.
$has_title = get_sub_field( 'title' );

if ( $has_title ) : ?>

	<h2><?php the_sub_field( 'title' ); ?></h2>

<?php
endif;

the_sub_field( 'content' ); ?>
