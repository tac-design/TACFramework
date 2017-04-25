<?php
/**
 * Archive Post
 *
 * A part file that can be used to display individual post date inside a loop.
 *
 * @package TAC Framework
 * @since Tac Framework 1.0
 */

?>

<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<time datetime="<?php echo the_time( 'Y-m-d' ); ?>">Date: <?php the_time( 'Y-m-d' ); ?></time>
<?php the_excerpt(); ?>
