<?php
/**
 * Single
 *
 * The default template for single posts.
 *
 * @package TAC Framework
 * @since Tac Framework 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<time datetime="<?php echo the_time( 'Y-m-d' ); ?>">Date: <?php the_time( 'Y-m-d' ); ?></time>
		<?php
		comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' );
		the_content();
		comments_template( '', true );
	}
}

get_sidebar();

get_footer();
