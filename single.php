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

<?php if ( ! has_post_format() ): ?>
	<!-- post featured image via bg-image -->
	<div class="post-feature-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></div>
<?php endif; ?>

<div class="site-post main-content">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row justify-content-center">
			<div class="col-12 <?php if ( ! has_post_format() ): echo 'col-md-7'; else: echo 'col-md-10'; endif; ?>">
				<div class="post-content-main <?php if ( ! has_post_format() ): echo 'article-margin'; endif; ?> ">

					<!--loop start-->
					<?php while ( have_posts() ) : the_post(); ?>

						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

							<!-- check if standard post -->
							<?php if ( ! has_post_format() ): // standard posts: articles ?>

								<header class="entry-header">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
									<p class="post-time">
										<?php echo get_the_date( 'j F, Y' ); ?>
									</p>
								</header>

								<div class="entry-content">
									<?php the_content(); ?>
								</div>

							<?php endif; //end ofstandard posts: articles ?>


							<!-- check if book, photo, audio or video -->
							<?php if( get_post_format() ) { get_template_part('loop-templates/post-formats'); } ?>

						</article><!-- #post-## -->

						<?php jumtechWP_article_nav(); ?>

					<?php endwhile; // end of the loop. ?>
					<!-- end-->

				</div><!--.page-content-main-->

			</div><!--.col-->
		</div>
				
		<?php jumjournal_related_books(); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( ( comments_open() || get_comments_number() ) && ! has_post_format() ) : ?>
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
