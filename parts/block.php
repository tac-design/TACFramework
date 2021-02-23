<?php
if ( have_rows( 'content_blocks' ) ) :
	while ( have_rows( 'content_blocks' ) ) : the_row();
		get_template_part( 'templates/parts/blocks/' . strtolower( get_row_layout() ) );
	endwhile;
endif;
