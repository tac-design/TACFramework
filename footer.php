<?php
/**
 * Footer
 *
 * The template for the site footer.
 *
 * @package TAC Framework
 * @since TAC Framework 2.0
 */

?>

			<footer id="site-foot" class="site-foot spacing">
				<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
			</footer>

		</main>

		<?php
		// Get the scheme markup.
		get_template_part( 'parts/schema' );

		// An example modal window. Called from a button in parts/banner.php.
		get_template_part( 'parts/modal' );

		wp_footer(); ?>

	</body>
</html>
