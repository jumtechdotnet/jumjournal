<?php
/**
 *
 * This template part as footer style two
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'jumtechWP_container_type' );
?>

<!-- footer two -->
  <div class="footer type-two">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">
        <div class="col-md-12">
          <div class="content-inner center">
            
            <div class="center-line foo-line-one">
              <div class="line line-one"></div>
              <div class="line line-two"></div>
            </div>

            <ul class="ul-none horizontal footer-nav nav-two">
              <li><a href="">About Jumjournal</a></li>
              <li><a href="">Get involved</a></li>
              <li><a href="">How to submit</a></li>
              <li><a href="">Support center</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-12">
          <div class="content-inner center copyright">
            <div class="center-line foo-line-two">
              <div class="line line-one"></div>
              <div class="line line-two"></div>
            </div>
            <p> &copy; 2017-<?php echo get_the_date( 'Y' ); ?> Jumjournal</p>
          </div>
        </div>
      </div>
    </div>
  </div><!--.footer .type-two-->