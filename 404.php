<?php
get_header();
?>

<article id="404" class="content">
	<div class="grid">
		<div class="col">
			<h1>Page Not Found</h1>
			<p>Sorry, the page you were looking for could not be found. It could be that you've typed the address incorrectly or that the page has been moved.</p>
			<p>To help you find what you are looking for, you can:</p>
			<ul>
				<li>Return to the <a href="<?php echo esc_html( site_url() ); ?>">home page</a></li>
			</ul>
		</div>
	</div>
</article>

<?php
get_footer();
