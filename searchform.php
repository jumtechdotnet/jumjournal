<?php
/**
 * The template for displaying search forms
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<form method="get" id="searchform" class="site-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'jumtechWP' ); ?></label>
	<div class="input-group">
		<input class="field form-control" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Type here &hellip;', 'jumtechWP' ); ?>" value="<?php the_search_query(); ?>" required >
		<input class="submit" id="searchsubmit" name="submit" type="submit"
			value="<?php esc_attr_e( 'Search', 'jumtechWP' ); ?>">
	</div>
</form>
