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

			the_sub_field( 'content' );
			?>

		</div>
	</div>
</section>
