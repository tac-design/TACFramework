<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<h2><?php the_title(); ?></h2>
<time datetime="<?php echo gmdate("Y-m-d\TH:i:s", $timestamp); ?>"><?php echo gmdate("d/m/Y", $timestamp); ?></time>
<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
<?php the_content(); ?>
<?php comments_template( '', true ); ?>
<?php endwhile; ?>
		
<?php get_sidebar(); ?>

<?php get_footer(); ?>