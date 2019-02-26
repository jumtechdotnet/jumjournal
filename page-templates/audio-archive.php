<?php
/**
 * Template Name: Audio Archive
 *
 * This template will be used for audio archive homepage
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>

  <div class="page-header type-four">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">
        <div class="col-md-12">
          <div class="content-inner center">
          
          </div>

        </div>
      </div>
    </div>
  </div><!--.page-header-->


<?php get_template_part('global-templates/footer-one'); ?>

<?php get_footer(); ?>