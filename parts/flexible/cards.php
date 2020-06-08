<?php
if ( have_rows( 'card' ) ) :
	?>

	<section>
		<div class="grid">

			<?php
			while ( have_rows( 'card' ) ) : the_row();
				?>

				<div class="col">
					<div class="card">

						<?php
						$image = get_sub_field( 'image' );

						if ( $image ) :
							$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true );
							?>

							<img <?php tac_acf_responsive_image( get_sub_field( 'image' ), 'card', '600px' ); ?>  alt="<?php echo esc_html( $image_alt ); ?>" /> 

						<?php
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
				</div>

			<?php
			endwhile;
			?>

		</div>
	</section>

<?php
endif;
