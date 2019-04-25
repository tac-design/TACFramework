<?php
/**
 * Meta
 *
 * Gets the meta data for a post. Delete as appropriate.
 *
 * @package TAC Framework 1.0
 * @since TAC Framework 1.0
 */

?>

<time datetime="<?php echo the_time( 'Y-m-d' ); ?>"><?php the_time( 'l jS F' ); ?></time>


<?php
// Show the post categories as an unordered list with links.
echo get_the_category_list();


// As an alternative, show only the first category.
$categories = get_the_category();
 
if ( ! empty( $categories ) ) {
    echo esc_html( $categories[0]->name );   
}


// Show the values for a custom taxonomy called 'tax'.

echo get_the_term_list( $post->ID, 'tax', 'Title: ', ', ' );


// The author of the post, with a link to their archive.
the_author();
