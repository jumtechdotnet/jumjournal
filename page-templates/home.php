<?php
/**
 * Template Name: Homepage
 *
 * This template will be used as homepage
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>

	<div class="jumjournal-hero page-header type-three">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">
        <div class="col-md-12">
          <div class="content-inner center">
            <div class="leader">
              <img src="<?php echo get_template_directory_uri(); ?>/images/the-leader.png" alt="Leader" class="img-responsive">
            </div>
            
            <h1 class="heading">Jumjournal Story</h1>
            <h3 class="moto">Jumjournal is an leading online community and archive based on Chittagong Hill Tracts raising voice of marginalized people to reach across the whole world. It’s an amazing platform to share and explore new ideas and thoughts representing diverse views of diverse people from different communities. </h3>
            <div class="btn-btn">
              <a href="get-involved.html" class="site-btn white">Get involved</a>
              <a href="submit.html" class="site-btn white">Submit</a>
            </div>
          </div>
          <div id="fav" class="fav">
            <a href="#target"><i class="fas fa-angle-down"></i></a>
          </div>

        </div>
      </div>
    </div>
  </div><!--.page-header-->

  <div id="target" class="home-nav-box">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">
        <div class="col-md-12">
          <div class="content-inner center">
            <a class="nav-box-link" href="<?php echo esc_url( home_url( '/' ) ); ?>bangla-blog">
              <div class="nav-box">
                <i class="fas fa-file-alt"></i>
                <span>Bangla blog</span>
              </div>
            </a>
            <a class="nav-box-link" href="<?php echo esc_url( home_url( '/' ) ); ?>english-blog">
              <div class="nav-box">
                <i class="far fa-file-alt"></i>
                <span>English blog</span>
              </div>
            </a>
            <a class="nav-box-link" href="<?php echo esc_url( home_url( '/' ) ); ?>photo-gallery">
              <div class="nav-box">
                <i class="fas fa-camera-retro"></i>
                <span>Photo Gallery</span>
              </div>
            </a>
            <a class="nav-box-link" href="<?php echo esc_url( home_url( '/' ) ); ?>library">
              <div class="nav-box">
                <i class="fas fa-book"></i>
                <span>Library</span>
              </div>
            </a>
            <a class="nav-box-link" href="<?php echo esc_url( home_url( '/' ) ); ?>audio-archive">
              <div class="nav-box">
                <i class="fas fa-headphones-alt"></i>
                <span>Audio Archive</span>
              </div>
            </a>
            <a class="nav-box-link" href="<?php echo esc_url( home_url( '/' ) ); ?>video-archive">
              <div class="nav-box">
                <i class="fas fa-video"></i>
                <span>Video Archive</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div><!--.home-nav-box-->

  <div class="site-features">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">
        <div class="col-md-12">
          <div class="frame-design">
            <div class="frame-text one">
              <h2>
                Learn
              </h2>
              <p>
                Let’s explore what’s on Jumjournal.There are lot's of stuff regarding our  own history, culture, people,lifestyle and struggle.
              </p>
            </div>
            <div class="frame-text two">
              <h2>
                Entertain
              </h2>
              <p>
                Let's make it even better. Jumjournal is comitted to build a great platform of online resources.Be a part of this initiative.
              </p>
            </div>
            <div class="frame-text three">
              <h2>
                Contribute
              </h2>
              <p>
                Feel Your  Identity. Photos, videos and musics are organized at one place to enjoy and feel them even more better.
              </p>
            </div>

          </div>

          <div class="daba"></div>

        </div>
      </div>
    </div>
  </div>

<?php get_template_part('global-templates/footer-sub'); ?>
<?php get_template_part('global-templates/footer-one'); ?>

<?php get_footer(); ?>
