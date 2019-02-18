<?php
/**
 * Template Name: Audio Archive
 *
 * This template will be used as Bangla blog homepage
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>



<?php get_template_part('global-templates/footer-one'); ?>

<?php get_footer(); ?>
