<?php
/**
 * Search results partial template.
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<!-- <?php //if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">

				<?php //jumtechWP_posted_on(); ?>

			</div>

		<?php //endif; ?> -->

	</header><!-- .entry-header -->

	<div class="entry-summary">

		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->

	<footer class="entry-footer">

		<?php jumtechWP_post_meta(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
