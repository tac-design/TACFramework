<?php

/**
 * Example function to customise query
 * First if statement does nothing
 * Second if statement sets posts per page to 9 if the page is a post archive
 **/
function tac_customise_query( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( is_post_type_archive( 'post' ) ) {
        $query->set( 'posts_per_page', 9 );
        return;
    }
}
add_action( 'pre_get_posts', 'tac_customise_query', 1 );
