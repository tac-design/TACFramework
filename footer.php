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

			<footer id="site-foot" class="site-foot spacing">
				<div class="site-foot__info">
					<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
				</div>
			</footer>

		</main>

		<?php
		get_template_part( 'parts/schema' );

		get_template_part( 'parts/modal' );

		wp_footer(); ?>

	</body>
</html>
