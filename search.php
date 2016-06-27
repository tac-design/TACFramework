<?php get_header(); ?>

<?php if ( have_posts() ): ?>
<h1>Search Results for '<?php echo get_search_query(); ?>'</h2>	
<?php while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<time datetime="<?php the_time( 'Y-m-D' ); ?>"><?php the_date(); ?> <?php the_time(); ?></time>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<p>No results found for '<?php echo get_search_query(); ?>'</p>
<?php endif; ?>

<?php get_header(); ?>