<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'jumtechWP_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'jumtechWP' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'jumtechWP' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new jumtechWP_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
	
	<!-- header -->
  <div class="site-header header-type-one">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">
        <div class="col-2 d-md-none d-lg-none d-xl-none">
          <!-- left mobile menu icon -->
          <div id="mbmenuleftxp" class="mobile-sidebar-expand left header-icon-mobile hidden-md-up">
            <i class="fas fa-bars"></i>
          </div>
        </div>
        <div class="col-6 col-md-2 col-lg-3">
          <div class="logo">
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

            <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

          <?php } else {
          the_custom_logo();
          } ?><!-- end custom logo -->

          </div>
        </div>

        <div class="col-2 col-md-5 col-lg-5">
          <div class="header-icon-mobile d-md-none d-lg-none d-xl-none">
            <a href="#" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a>
          </div>
          <!-- modal for search -->
          <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="site-search">
                      <form method="get" class="site-searchform" action="" role="search">
                        <input class="searchform-control" name="s" type="text" placeholder="Type here…" value="">
                        <input class="searchform-searchbtn" name="submit" type="submit" value="Search">
                      </form>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="site-search hidden-sm-down">
            <?php get_search_form(); ?>
          </div>
        </div>

        <div class="col-2 col-md-5 col-lg-4">
          <div class="user-navigation hidden-sm-down">

            <!-- user menu: header -->
            <?php wp_nav_menu(
              array(
                'theme_location'  => 'user-menu',
                'menu_class'      => 'user-nav',
                'fallback_cb'     => '',
                'menu_id'         => 'user-nav',
                'depth'           => 2,
              )
            ); ?>

          </div><!--.user-navigation-->

          <!-- Right mobile menu icon -->
          <div id="mbmenurightxp" class="mobile-sidebar-expand right header-icon-mobile  d-md-none d-lg-none d-xl-none">
            <i class="fas fa-ellipsis-v"></i>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div id="site-div-nav" class="site-div-nav hidden-sm-down">
    <div class="<?php echo esc_attr( $container ); ?>">
      <div class="row">
        <div class="col-md-12">
          <div id="div-nav-control" class="div-nav-control">
            <i class="fas fa-bars"></i>
            <span>Menu</span>
          </div>
          <nav>

            <!-- header menu: main menu -->
            <?php wp_nav_menu(
              array(
                'theme_location'  => 'header-menu',
                'container_class' => 'con-class',
                'container_id'    => 'con-id',
                'menu_class'      => 'div-nav',
                'fallback_cb'     => '',
                'menu_id'         => 'div-nav',
                'depth'           => 2,
                //'walker'          => new jumtechWP_WP_Bootstrap_Navwalker(),
              )
            ); ?>

          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- header-end -->
