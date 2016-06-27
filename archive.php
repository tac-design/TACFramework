<?php get_header(); ?>

<?php if ( have_posts() ): ?>
		
<?php if (is_category()) { ?>
	<h1><?php single_cat_title(); ?></h1>
<?php } elseif (is_tag()) { ?>
	<h1>Tags: <?php single_tag_title(); ?></h1>
<?php } elseif (is_author()) { ?>
	<h1>Author: <?php get_the_author_meta('display_name'); ?></h1>
<?php } elseif (is_day()) { ?>
	<h1>Date: <?php the_time('l, F j, Y'); ?></h1>
<?php } elseif (is_month()) { ?>
	<h1>Monthly Archives: <?php the_time('F Y'); ?></h1>
<?php } elseif (is_year()) { ?>
	<h1>Year: <?php the_time('Y'); ?></h1>
<?php } ?>
	
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