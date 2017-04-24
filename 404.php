<?php
/**
 * 404
 *
 * The default 404 template used in the theme.
 *
 * @package TAC Framework
 * @since Tac Framework 1.0
 */

get_header(); ?>

<h1>404 - Page Not Found!</h1>
<p>Sorry, the page you were looking for could not be found. It could be that you've typed the address incorrectly or that the page has been removed.</p>
<h2>Try searching:</h2>

<?php get_search_form( $echo ); ?>

<?php get_footer();
