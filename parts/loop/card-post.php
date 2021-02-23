<div class="card">
	<a href="<?php the_permalink(); ?>" title="Read '<?php the_title(); ?>'">
		<h3><?php the_title(); ?></h3>

		<?php
		the_excerpt();
		?>

	</a>
</div>
