<?php
/**
 * Archive Post
 *
 * A part file that can be used to display individual post date inside a loop.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

?>

<article class="archive-post">
	<a href="<?php the_permalink(); ?>" title="Read '<?php the_title(); ?>'">
		<h2><?php the_title(); ?></h2>

		<?php
		// Depending on whether meta is displayed consistently in archives and on single post templates, this template part may need to be extended.
		get_template_part( 'parts/meta' );

		the_excerpt(); ?>

	</a>
</article>
