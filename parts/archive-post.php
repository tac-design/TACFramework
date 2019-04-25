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

<article>
	<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

	<?php
	get_template_part( 'parts/meta' );

	the_excerpt(); ?>

</article>
