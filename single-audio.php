<?php
/**
 * The template for displaying all single posts.
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>

<div class="site-post main-content">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row justify-content-center">
			<div class="col-12 col-md-7 padding">
				<div class="post-content-main">
					<!--start-->

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php jumtechWP_article_nav(); ?>

					<?php endwhile; // end of the loop. ?>
					<!-- end-->

				</div><!--.page-content-main-->

			</div><!--.col-->
		</div>
				
		<?php tutsplus_related_posts(); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) : ?>
			<div class="row justify-content-center">
				<div class="col-md-7 padding">
					<div class="comment-box">
						
						<?php comments_template(); ?>

					</div>
				</div>
			</div>
		<?php endif; ?>

	</div>
</div><!--.page .main-content-->

<?php get_template_part('global-templates/footer-two'); ?>

<?php get_footer(); ?>
