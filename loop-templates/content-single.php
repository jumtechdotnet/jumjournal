<?php
/**
 * Single post partial template.
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<p class="post-time">
			<?php echo get_the_date( 'j F, Y' ); ?>
		</p>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article><!-- #post-## -->
