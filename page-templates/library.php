<?php
/**
 * Template Name: Library
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

<div class="page-header type-two">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content-inner center">
						<h1 class="heading">Jumjournal Story</h1>
						<h3 class="moto">Jumjournal is an leading online community and archive based on Chittagong Hill Tracts raising voice of marginalized people to reach across the whole world. It’s an amazing platform to share and explore new ideas and thoughts representing diverse views of diverse people from different communities. </h3>

					</div>

				</div>
			</div>
		</div>
	</div>
	<!--.page-header-->

	<div class="book-category book-category-name">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="block-inner">
						<div class="header">
							<h1 class="category-type">Literature Books</h1>
							<a href="" class="more-books-btn">More Books</a>
						</div>
						<div class="body-content">
							<div class="book-section owl-carousel owl-theme">
								
								<?php
									$args = array(
										// Arguments for your query.
										'category_name' => 'books',
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
											get_template_part( 'loop-templates/content', get_post_format() );
										}
									
									}
									// Restore original post data.
									wp_reset_postdata();
								?>

							</div>
						</div>
					</div>
					<!-- .book-inner -->

				</div>
			</div>
		</div>
	</div>

<?php get_template_part('global-templates/footer-one'); ?>

<?php get_footer(); ?>
