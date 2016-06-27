<?php get_header(); ?>

<?php if ( have_posts() ): ?>
<?php while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<time datetime="<?php echo gmdate("Y-m-d\TH:i:s", $timestamp); ?>"><?php echo gmdate("d/m/Y", $timestamp); ?></time>
<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<p>No posts to display</p>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>