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

<div class="book-single" id="post-<?php the_ID(); ?>" >
	<a href="<?php the_permalink(); ?>">
		<div class="book-cover">
			<?php if ( ! has_post_thumbnail() ) { ?> <img src="<?php echo get_template_directory_uri(); ?>/images/post-images/image-size-one.jpg" alt="post image"> <?php } else { echo get_the_post_thumbnail( $post->ID, 'medium' ); } ?>
		</div>
		<div class="book-name">
			<?php the_title(); ?>
		</div>

		<!-- display meta key value -->
		<?php if ( get_post_meta(get_the_ID(), 'book_author', true ) ) : ?>
		<div class="book-author">
				<?php echo get_post_meta(get_the_ID(), 'book_author', true ); ?>
		</div>
		<?php endif; ?>

	</a>
</div>
