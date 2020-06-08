		</main>

		<footer id="site-foot" class="site-foot">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
		</footer>

		<?php
		get_template_part( 'parts/schema' );
		wp_footer();
		?>

	</body>
</html>
