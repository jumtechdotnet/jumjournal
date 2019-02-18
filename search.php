<?php
/**
 * The template for displaying search results pages.
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'jumtechWP_container_type' );

?>

<div class="page main-content search-results" id="search-results">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row justify-content-center">

			<div class="col-md-8">

				<main class="post-content-main no-padding no-margin" id="main">

					<?php if ( have_posts() ) : ?>

						<div class="searched-for">

							<h1 class="query-title">
								<?php
								printf(
									/* translators: %s: query term */
									esc_html__( 'Search Results for: %s', 'jumtechWP' ),
									'<span>' . get_search_query() . '</span>'
								);
								?>
							</h1>

					</div>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'loop-templates/content', 'search' );
							?>

						<?php endwhile; ?>

						<!-- The pagination component -->
						<div class="theme-pagination">
							<?php jumtechWP_pagination(); ?>
						</div>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>

				</main><!-- #main -->

			</div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php get_template_part('global-templates/footer-one'); ?>

<?php get_footer(); ?>
