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

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<h1>Page Not Found</h1>
		<p>Sorry, the page you were looking for could not be found. It could be that you've typed the address incorrectly or that the page has been moved.</p>
		<p>To help you find what you are looking for, you can:</p>
		<ul>
			<li>Return to the <a href="<?php echo esc_html( site_url() ); ?>">home page</a></li>
			<li>Find out how to contact us</li>
			<li>Search the website using the form below</li>
		</ul>

		<?php
		get_search_form( $echo ); ?>

	</main>
</div>

<?php get_footer();
