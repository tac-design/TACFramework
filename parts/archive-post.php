<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<time datetime="<?php echo gmdate("Y-m-d\TH:i:s", $timestamp); ?>"><?php echo gmdate("d/m/Y", $timestamp); ?></time>
<?php the_content(); ?>