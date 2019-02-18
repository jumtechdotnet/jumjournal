<?php
/**
 * Template Name: Support Center
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

	<div class="page-header type-four with-bg">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="content-inner center">
            <h1 class="heading">
              Support Center
            </h1>
            <h3 class="moto">Everything you need to know, all in one place.</h3>
          </div>
        </div>

      </div>
    </div>
  </div><!--.page-header-->

  <div class="page main-content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="page-content-main">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>how-to">
              <div class="support-section section-item">
                <div class="icon">
                  <i class="fas fa-question-circle"></i>
                </div>
                <div class="content">
                  <h2>How to... (FAQ) </h2>
                  <p>Freequently asked questions</p>
                </div>
              </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">
              <div class="support-section section-item">
                <div class="icon">
                  <i class="fas fa-user-lock"></i>
                </div>
                <div class="content">
                  <h2>Privacy policy </h2>
                  <p>Information we collect and how it's used</p>
                </div>
              </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-and-conditions">
              <div class="support-section section-item">
                <div class="icon">
                  <i class="fas fa-gavel"></i>
                </div>
                <div class="content">
                  <h2>Terms and conditions </h2>
                  <p>What isn't allowed and report abuse</p>
                </div>
              </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>feedback">
              <div class="support-section section-item">
                <div class="icon">
                  <i class="fas fa-comment-alt"></i>
                </div>
                <div class="content">
                  <h2>Give feedback </h2>
                  <p>Suggestions & oppinions to improve Jumjournal</p>
                </div>
              </div>
            </a>

          </div><!--.page-content-main-->
        </div>

        <div class="col-md-3">
          <div class="page-content-sidebar sidebar">
            <div class="sidebar-widget widget dashed">
              <h2 class="heading">Quick links</h2>
              <ul class="ul-none quick-links">
                <li>
                  <a href="">
                    <i class="fas fa-file-alt"></i> Articles
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fas fa-camera-retro"></i> Photos
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fas fa-book"></i> eBooks
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fas fa-headphones-alt"></i> Audio files
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fas fa-video"></i> Video files
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fas fa-flag-checkered"></i> Report
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div><!--.page .main-content-->

<?php get_template_part('global-templates/footer-two'); ?>

<?php get_footer(); ?>
