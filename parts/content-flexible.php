<?php
/**
 * Flexible
 *
 * Controls the flexible layout used in the default page template.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */


// Check if the flexible content field has rows of data.
if ( have_rows( 'content_blocks' ) ) :

	// Loop through the rows of data and display the correct block.
	while ( have_rows( 'content_blocks' ) ) : the_row();

		// A simple text area.
		if ( get_row_layout() === 'text_area' ) :

			get_template_part( 'parts/blocks/text-area' );

		// A text & image block.
		elseif ( get_row_layout() === 'text_image' ) :

			get_template_part( 'parts/blocks/text-image' );

		// A repeating grid of cards with links.
		elseif ( get_row_layout() === 'cards' ) :

			get_template_part( 'parts/blocks/cards' );

		// A simple accordion.
		elseif ( get_row_layout() === 'accordion' ) :

			get_template_part( 'parts/blocks/accordion' );

		// A full width image.
		elseif ( get_row_layout() === 'full_width_image' ) :

			get_template_part( 'parts/blocks/full-width-image' );

		// An image gallery.
		elseif ( get_row_layout() === 'gallery' ) :

			get_template_part( 'parts/blocks/gallery' );

		endif;

	endwhile;

endif;
