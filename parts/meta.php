<?php
/**
 * Meta
 *
 * Gets the meta data for a post. Delete as appropriate.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

?>

<time datetime="<?php echo the_time( 'Y-m-d' ); ?>"><?php the_time( 'l jS F' ); ?></time>


<?php
// Show the post categories as an unordered list without links. ?>
<ul>
  <?php
  foreach (get_categories() as $category){
    echo "<li>";
    echo $category->name;
    echo "</li>";
  } ?>
</ul>


<?php
// As an alternative, show only the first category.
$categories = get_the_category();
 
if ( ! empty( $categories ) ) {
    echo '<p>' . esc_html( $categories[0]->name ) . '</p>';   
}


// Show the values for a custom taxonomy called 'tax' in an unordered list.
$terms = wp_get_object_terms( $post->ID,  'custom' );
if ( ! empty( $terms ) ) :
	if ( ! is_wp_error( $terms ) ) :
		echo '<ul>';
			foreach( $terms as $term ) :
				echo '<li>' . esc_html( $term->name ) . '</li>'; 
			endforeach;
		echo '</ul>';
	endif;
endif;


// The author of the post. ?>
<p>Written by: <?php the_author(); ?></p>
