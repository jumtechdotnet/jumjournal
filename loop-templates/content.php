<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="col-6 col-md-4" id="post-<?php the_ID(); ?>" >
	<div class="post-single">
		<div class="post-image">
			<?php if ( ! has_post_thumbnail() ) { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/post-images/image-size-one.jpg" alt="post image">
			<?php } else {
				echo get_the_post_thumbnail( $post->ID, 'medium' ); 
			} ?>
		</div>
		<div class="post-content">
			<h2 class="post-title">
				<a class="article-popup" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<span class="post-meta">
				<?php jumtechWP_post_tags(); ?>
			</span>
		</div>
	</div>
</div>
