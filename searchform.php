<?php
/**
 * The template for displaying our custom search form.
 *
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package Deep_Happiness
 */

?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
		<label class="sr-only" for="sidebar-search">Search the blog</label>
		<input type="search" class="search-field"
				id="sidebar-search"
				placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>"
				value="<?php echo get_search_query() ?>" name="s"
				title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</div><!-- .form-group -->
	<div class="form-group">
		<button type="submit" class="search-submit submit btn btn-primary btn-block">
			<i class="fa fa-search" aria-hidden="true"></i> <?php echo esc_attr_x( 'Search', 'submit button' ) ?>
		</button>
	</div><!-- .form-group -->
</form>