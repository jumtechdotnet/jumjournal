<?php
/**
 *
 * This template part as footer style one
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'jumtechWP_container_type' );
?>
<!-- footer -->
  <div class="footer type-one">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">

        <?php if ( is_active_sidebar( 'footerfull' ) ) : ?>
          <?php dynamic_sidebar( 'footerfull' ); ?>
        <?php endif; ?>

        <div class="col-md-12">
          <div class="content-inner center copyright">
            
            <p>&copy; 2017-<?php echo get_the_date('Y'); ?> Jumjournal</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--.footer-->

  <div id="support-center" class="support-center">
    <i class="fas fa-medkit"></i>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>support-center">
      Support <br> center
    </a>
  </div>