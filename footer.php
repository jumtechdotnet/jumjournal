<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'jumtechWP_container_type' );
?>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

