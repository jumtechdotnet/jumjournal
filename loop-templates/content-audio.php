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

<?php the_content(); ?>
