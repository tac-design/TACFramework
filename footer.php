<?php
/**
 * Footer
 *
 * The template for the site footer.
 *
 * @package TAC Framework
 * @since Tac Framework 1.0
 */

?>

		<footer id="site-foot" class="site-foot" role="contentinfo">
			<div class="site-info">
				<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
