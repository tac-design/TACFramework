<?php
/**
 * Reusable part that can be used in main index or archive
 * Outputs post title, date/time and excerpt
 **/
?>

<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<time datetime="<?php echo the_time("Y-m-d"); ?>">Date: <?php the_time("Y-m-d"); ?></time>
<?php the_excerpt(); ?>