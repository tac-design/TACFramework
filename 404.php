<?php
/**
 * 404
 *
 * The default 404 template used in the theme.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

get_header(); ?>

<article id="error" class="content spacing spacing--bottom-only">
	<div class="grid">
		<div class="col">
			<h1>Page Not Found</h1>
			<p>Sorry, the page you were looking for could not be found. It could be that you've typed the address incorrectly or that the page has been moved.</p>
			<p>To help you find what you are looking for, you can:</p>
			<ul>
				<li>Return to the <a href="<?php echo esc_html( site_url() ); ?>">home page</a></li>
				<li>Find out how to contact us</li>
			</ul>
			<h2>Search</h2>

			<?php
			get_search_form(); ?>

		</div>
	</div>
</article>

<?php
get_footer();
