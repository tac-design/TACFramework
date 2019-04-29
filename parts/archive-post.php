<?php
/**
 * Archive Post
 *
 * A part file that can be used to display individual post date inside a loop.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

?>

<article class="archive-post">
	<a href="<?php the_permalink(); ?>" title="Read '<?php the_title(); ?>'">
		<h2><?php the_title(); ?></h2>

		<?php
		get_template_part( 'parts/meta' );

		the_excerpt(); ?>

	</a>
</article>
