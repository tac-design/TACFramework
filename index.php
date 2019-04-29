<?php
/**
 * Index
 *
 * The template for the blog index.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

get_header(); ?>

<section id="archive" class="archive spacing spacing--bottom-only">
	<div class="grid">
		<div class="col col-12">

			<?php
			the_archive_title( '<h1>', '</h1>' ); ?>

		</div>

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>

				<div class="col col-4">

					<?php
					get_template_part( 'parts/archive-post' ); ?>

				</div>

			<?php
			endwhile;
		else : ?>

			<div class="grid">
				<div class="col">
					<p>No posts to display</p>
				</div>
			</div>

		<?php
		endif; ?>

	</div>

</main>

<?php
get_footer();
