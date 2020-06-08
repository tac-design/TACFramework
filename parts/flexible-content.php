<?php
if ( have_rows( 'content_blocks' ) ) :
	while ( have_rows( 'content_blocks' ) ) : the_row();
		if ( get_row_layout() === 'text_area' ) :
			get_template_part( 'parts/flexible/text-area' );
		elseif ( get_row_layout() === 'text_image' ) :
			get_template_part( 'parts/flexible/text-image' );
		elseif ( get_row_layout() === 'cards' ) :
			get_template_part( 'parts/flexible/cards' );
		elseif ( get_row_layout() === 'accordion' ) :
			get_template_part( 'parts/flexible/accordion' );
		elseif ( get_row_layout() === 'full_width_image' ) :
			get_template_part( 'parts/flexible/full-width-image' );
		elseif ( get_row_layout() === 'gallery' ) :
			get_template_part( 'parts/flexible/gallery' );
		endif;
	endwhile;
endif;
