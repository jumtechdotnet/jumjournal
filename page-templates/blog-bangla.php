<?php
/**
 * Template Name: Blog Bangla
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

  <!-- slider -->
	<div class="posts-block block-one">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="feature-post-slider post-style-slider slider-one">
						<div class="cat-tilte style-one color-one">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/literature">Literature</a>
						</div>

						<div class="post-slider-container owl-carousel owl-theme">

							<?php
								$args = array(
									// Arguments for your query.
									'cat' => '10',
									'posts_per_page' => '6',
									'order' => 'DESC',
									'orderby' => 'date',
									'ignore_sticky_posts' => true,
									'post_type' => 'post',
									'post_status' => 'publish'
								);

								// Custom query.
								$query = new WP_Query( $args );
								
								// Check that we have query results.
								if ( $query->have_posts() ) {
								
									// Start looping over the query results.
									while ( $query->have_posts() ) {

										$query->the_post();
										
										// Contents of the queried post results go here.
										get_template_part( 'loop-templates/post-style-slider' );

									}
								
								}
								// Restore original post data.
								wp_reset_postdata();
							?>

						</div>
						<!-- .post-slider-container -->

					</div>
					<!--.feature-post-slider-->
				</div>

				<div class="col-md-3 offset-md-1">
					<div class="cat-tilte style-one color-two">
						<a href="">Personality</a>
					</div>
					<div class="post-style-square biography">

						<?php
							$args = array(
								// Arguments for your query.
								'cat' => '93',
								'posts_per_page' => '2',
								'order' => 'DESC',
								'orderby' => 'date',
								'ignore_sticky_posts' => true,
								'post_type' => 'post',
								'post_status' => 'publish'
							);

							// Custom query.
							$query = new WP_Query( $args );
							
							// Check that we have query results.
							if ( $query->have_posts() ) {
							
								// Start looping over the query results.
								while ( $query->have_posts() ) {

									$query->the_post();
									
									// Contents of the queried post results go here.
									get_template_part( 'loop-templates/post-style-square-bio' );

								}
							
							}
							// Restore original post data.
							wp_reset_postdata();
						?>

					</div>
				</div>

			</div>
			<!--.row-->
		</div>
	</div>

	<!-- category: history -->
	<div class="posts-block post-style-one">
		<div class="<?php echo esc_attr( $container ); ?>">
			<div class="row">
				<div class="col-12">
					<div class="cat-tilte style-one color-three">
						<a href="">History</a>
					</div>
				</div>

        <?php
          $args = array(
            // Arguments for your query.
            'cat' => '3',
            'posts_per_page' => '4',
            'order' => 'DESC',
            'orderby' => 'date',
            'ignore_sticky_posts' => true,
            'post_type' => 'post',
            'post_status' => 'publish'
          );

          // Custom query.
          $query = new WP_Query( $args );
          
          // Check that we have query results.
          if ( $query->have_posts() ) {
          
            // Start looping over the query results.
            while ( $query->have_posts() ) {

              $query->the_post();
              
              // Contents of the queried post results go here.
              
              get_template_part( 'loop-templates/post-style-one' );

            }
          
          }
          // Restore original post data.
          wp_reset_postdata();
        ?>

			</div>
			<!--.row-->
		</div>
	</div>

	<!-- cat: art & culture -->
	<div class="posts-block post-style-two">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-12">
							<div class="cat-tilte style-one color-four">
								<a href="">Art & Culture And others</a>
							</div>
						</div>
					</div>

          <?php
            $args = array(
              // Arguments for your query.
              'cat' => '9',
              'posts_per_page' => '6',
              'order' => 'DESC',
              'orderby' => 'date',
              'ignore_sticky_posts' => true,
              'post_type' => 'post',
              'post_status' => 'publish'
            );

            // Custom query.
            $query = new WP_Query( $args );
            
            // Check that we have query results.
            if ( $query->have_posts() ) {
            
              // Start looping over the query results.
              while ( $query->have_posts() ) {

                $query->the_post();
                
                // Contents of the queried post results go here.
                
                get_template_part( 'loop-templates/post-style-two' );

              }
            
            }
            // Restore original post data.
            wp_reset_postdata();
          ?>

				</div>
				<!--.col-6-->


				<div class="col-md-6">
					<div class="row">
						<div class="col-12">
							<div class="cat-tilte style-one color-five">
								<a href="">Politics</a>
							</div>
						</div>
					</div>

          <?php
            $args = array(
              // Arguments for your query.
              'cat' => '7',
              'posts_per_page' => '6',
              'order' => 'DESC',
              'orderby' => 'date',
              'ignore_sticky_posts' => true,
              'post_type' => 'post',
              'post_status' => 'publish'
            );

            // Custom query.
            $query = new WP_Query( $args );
            
            // Check that we have query results.
            if ( $query->have_posts() ) {
            
              // Start looping over the query results.
              while ( $query->have_posts() ) {

                $query->the_post();
                
                // Contents of the queried post results go here.
                get_template_part( 'loop-templates/post-style-two' );

              }
            
            }
            // Restore original post data.
            wp_reset_postdata();
          ?>

				</div>
				<!--.col-6-->

			</div>
		</div>
	</div>
	<!--cat-end-->

	<!-- cat: report & slider -->
	<div class="posts-block block-one">
		<div class="container">
			<div class="row">
				<div class="col-md-3">

					<div class="cat-tilte style-one color-six">
						<a href="">Interview</a>
					</div>

					<div class="post-style-square cat-interview">
						<?php
							$args = array(
								// Arguments for your query.
								'cat' => '89',
								'posts_per_page' => '2',
								'order' => 'DESC',
								'orderby' => 'date',
								'ignore_sticky_posts' => true,
								'post_type' => 'post',
								'post_status' => 'publish'
							);

							// Custom query.
							$query = new WP_Query( $args );
							
							// Check that we have query results.
							if ( $query->have_posts() ) {
							
								// Start looping over the query results.
								while ( $query->have_posts() ) {

									$query->the_post();
									
									// Contents of the queried post results go here.
									get_template_part( 'loop-templates/post-style-square' );

								}
							
							}
							// Restore original post data.
							wp_reset_postdata();
						?>
					</div>

				</div>
				<div class="col-md-8 offset-md-1">
					<div class="post-style-slider slider-two">
						<div class="cat-tilte style-one color-seven">
							<a href="">Report</a>
						</div>
						
						<div class="post-slider-container owl-carousel owl-theme">

							<?php
								$args = array(
									// Arguments for your query.
									'cat' => '4',
									'posts_per_page' => '6',
									'order' => 'DESC',
									'orderby' => 'date',
									'ignore_sticky_posts' => true,
									'post_type' => 'post',
									'post_status' => 'publish'
								);

								// Custom query.
								$query = new WP_Query( $args );
								
								// Check that we have query results.
								if ( $query->have_posts() ) {
								
									// Start looping over the query results.
									while ( $query->have_posts() ) {

										$query->the_post();
										
										// Contents of the queried post results go here.
										get_template_part( 'loop-templates/post-style-slider-two' );

									}
								
								}
								// Restore original post data.
								wp_reset_postdata();
							?>

						</div>
						<!-- .post-slider-container -->

					</div>
					<!--.feature-post-slider-->
				</div>
			</div>
			<!--.row-->
		</div>
	</div>
	<!--cat:report & .slider-->

	<!-- category: education -->
	<div class="posts-block post-style-one">
		<div class="container">
			<div class="row">
				<div class="col-6 col-12">
					<div class="cat-tilte style-one color-eight">
						<a href="">Education</a>
					</div>
				</div>
				
        <?php
          $args = array(
            // Arguments for your query.
            'cat' => '8',
            'posts_per_page' => '4',
            'order' => 'DESC',
            'orderby' => 'date',
            'ignore_sticky_posts' => true,
            'post_type' => 'post',
            'post_status' => 'publish'
          );

          // Custom query.
          $query = new WP_Query( $args );
          
          // Check that we have query results.
          if ( $query->have_posts() ) {
          
            // Start looping over the query results.
            while ( $query->have_posts() ) {

              $query->the_post();
              
              // Contents of the queried post results go here.
							get_template_part( 'loop-templates/post-style-one' );
							
            }
          
          }
          // Restore original post data.
          wp_reset_postdata();
        ?>

			</div>
			<!--.row-->
		</div>
	</div>
	<!--cat:education-->

<?php get_template_part('global-templates/footer-one'); ?>

<?php get_footer(); ?>
