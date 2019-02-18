<?php
/**
 * Template Name: Survey
 *
 * This template will be used as privacy policy page
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>


<div class="page main-content" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

      <div class="col-md-12">

        <?php echo do_shortcode('[contact-form-7 id="5697" title="Contact form 1"]'); ?>

      </div>

    </div><!-- .row -->

  </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_template_part('global-templates/footer-two'); ?>

<?php get_footer(); ?>