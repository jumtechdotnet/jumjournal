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

<div class="col-6 col-md-4" id="post-<?php the_ID(); ?>">
	<div class="post-single">
		<div class="post-image">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</div>
		<div class="post-content">
			<a href="<?php echo esc_url( get_permalink() ); ?>"><h2><?php the_title(); ?></h2></a>
			<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'jumtechWP' ) );
			if ( $tags_list ) {
				/* translators: %s: Tags of current post */
				printf( '<span class="tag-links">' . esc_html__( '%s', 'jumtechWP' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
			?>
		</div>
	</div>
</div>
