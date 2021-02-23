<?php
if ( have_rows( 'card' ) ) :
	?>

	<div class="block">

		<?php
		while ( have_rows( 'card' ) ) : the_row();
			?>

			<div class="card">

				<?php 
				$image = get_sub_field( 'image' );
				$size = 'thumbnail';
				if( $image ) :
					echo wp_get_attachment_image( $image, $size );
				endif;
				?>

				<h2><?php the_sub_field( 'title' ); ?></h2>

				<?php
				$has_content = get_sub_field( 'content' );

				if ( $has_content ) :
					the_sub_field( 'content' );
				endif;

				$has_link = get_sub_field( 'link' );

				if ( $has_link ) :
					?>

					<a href="<?php the_sub_field( 'link' ); ?>">Read more</a>

				<?php
				endif;
				?>

			</div>

		<?php
		endwhile;
		?>

	</div>

<?php
endif;
