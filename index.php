<?php
get_header();
?>

<div id="archive" class="archive">
	<div class="grid">
		<div class="col">

			<?php
			the_archive_title( '<h1>', '</h1>' );
			?>

		</div>

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				?>

				<div class="col">

					<?php
					get_template_part( 'parts/loop/post-card' );
					?>

				</div>

			<?php
			endwhile;
		else :
			?>

			<div class="grid">
				<div class="col">
					<p>No posts to display</p>
				</div>
			</div>

		<?php
		endif;
		?>

	</div>
</div>

<?php
get_footer();
