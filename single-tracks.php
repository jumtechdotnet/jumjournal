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

<div class="site-post main-content tracks">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="post-content-main">

					<!--loop start-->
					<?php while ( have_posts() ) : the_post(); ?>

						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

							<div class="row">
								<div class="col-md-4">
									
									<div class="track-cover">

										<?php if ( ! has_post_thumbnail() ) { ?> <img src="<?php echo get_template_directory_uri(); ?>/images/post-images/image-size-one.jpg" alt="post image"> <?php } else { echo get_the_post_thumbnail( $post->ID, 'medium' ); } ?>
										
									</div>

								</div>

								<div class="col-md-8">

									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

									<div class="track-artist">
										<?php echo get_post_meta(get_the_ID(), 'track_artist', true ); ?>
									</div>

									<div class="listen-now-button">
										<?php echo do_shortcode( get_post_meta(get_the_ID(), 'track_play', true ) ); ?>
									</div>

								</div>

							</div>

							<div class="row">

								<div class="col-md-12">

								<table class="table tracks-table">
									
									<tbody>
										<tr>
											<td>Title</td>
											<td><?php the_title(); ?></td>
										</tr>
										<tr>
											<td>Artist</td>
											<td><?php echo get_post_meta(get_the_ID(), 'track_artist', true ); ?></td>
										</tr>
										<tr>
											<td>Album</td>
											<td><?php echo get_post_meta(get_the_ID(), 'track_album', true ); ?></td>
										</tr>
										<tr>
											<td>Genre</td>
											<td><?php echo get_post_meta(get_the_ID(), 'track_genre', true ); ?></td>
										</tr>
										<tr>
											<td>Year</td>
											<td><?php echo get_post_meta(get_the_ID(), 'track_year', true ); ?></td>
										</tr>
										<tr>
											<td>Composer</td>
											<td><?php echo get_post_meta(get_the_ID(), 'track_composer', true ); ?></td>
										</tr>
										<tr>
											<td>Language</td>
											<td><?php echo get_post_meta(get_the_ID(), 'track_lang', true ); ?></td>
										</tr>
										<tr>
											<td>Country</td>
											<td><?php echo get_post_meta(get_the_ID(), 'track_country', true ); ?></td>
										</tr>

									</tbody>
								</table>

								</div>

							</div>
							<!-- .row -->


						</article><!-- #post-## -->

						<?php jumtechWP_article_nav(); ?>

					<?php endwhile; // end of the loop. ?>
					<!-- end-->

				</div><!--.page-content-main-->

			</div><!--.col-->
		</div>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( ( comments_open() || get_comments_number() ) && ! has_post_format() ) : ?>
			<div class="row justify-content-center">
				<div class="col-md-10 padding">
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
