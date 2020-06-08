<section>
	<div class="grid">
		<div class="col">

			<?php
			$has_title = get_sub_field( 'title' );
			if ( $has_title ) :
				?>
				
				<h2><?php the_sub_field( 'title' ); ?></h2>

			<?php
			endif;

			if ( have_rows( 'accordion_items' ) ) :
				?>

				<dl class="js-accordion accordion">

					<?php
					while ( have_rows( 'accordion_items' ) ) : the_row();
						?>

						<dt>
							<a href="#"><?php the_sub_field( 'title' ); ?></a>
						</dt>
						<dd>

							<?php
							the_sub_field( 'content' );
							?>

						</dd>

					<?php
					endwhile;
					?>

				</dl>

			<?php
			endif;
			?>

		</div>
	</div>
</section>
