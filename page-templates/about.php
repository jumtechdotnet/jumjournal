<?php
/**
 * Template Name: About
 *
 * This template will be used as about us page
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>

<div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="content-inner center">
            <h1 class="heading">Jumjournal Story</h1>
            <h3 class="moto">Behind every initiative, there lies a story</h3>
          </div>
        </div>
      </div>
    </div>
  </div><!--.page-header-->

  <div class="page main-content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="page-content-main">
            <p class="text-content type-one">
              Nowadays online blogging is an amazing platform for the people who seek for knowledge, also for the people who want to share their insight views and ideas with everyone in this world. In this modern world online platform is the place where people from all classes, ages, occupations and all mindsets can come along together. Anyone on this planet can learn about many things as well as can share their thoughts with the rest of the world by online blogging. As internet or online world is one of the best source or platform of knowledge and information, we should connect with this open platform. In this way, online medium can be a great way by which we can make people from the various places to know about our beloved Chittagong Hill Tracts as well as it’s self-identifying arts and cultures.
            </p>
          </div><!--.page-content-main-->
        </div>

      </div>
    </div>
  </div><!--.page .main-content-->

  <?php get_template_part('global-templates/footer-two'); ?>

<?php get_footer(); ?>