<?php
/**
 * Search form
 *
 * The template for displaying a search form.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_html( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html( 'Search for:', 'label' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
