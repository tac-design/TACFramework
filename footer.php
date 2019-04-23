<?php
/**
 * Footer
 *
 * The template for the site footer.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

?>

		<footer id="site-foot" class="site-foot">
			<div class="site-foot__info">
				<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
			</div>
		</footer>

		<?php
		get_template_part( 'parts/schema' );

		wp_footer(); ?>

	</body>
</html>
