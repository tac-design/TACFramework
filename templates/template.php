<?php
/**
 * Template Name: Template
 *
 * An example page template.
 *
 * @package TAC Framework
 * @since Tac Framework 1.0
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		the_title();
		the_content();
	}
}

get_footer();
