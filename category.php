<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'jumtechWP_container_type' );

// Retrieve the currently-queried object.
$category = get_queried_object();
?>

<div class="category-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/banners/lake-bg-1x.jpg);">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-12">
				<h1 class="category-name">
					<?php echo $category->name; ?>
				</h1>

				<?php
					if ( $category->description ) { 
				?>
					<p class="category-description"> 
						<?php echo $category->description; ?>
					</p>
				<?php
					};

					if ( $category->category_count > 1 ) { 
				?>
					<p class="total-posts"> 
						<?php echo $category->category_count; ?> posts in this category
					</p>
				<?php
					};
				?>

			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main post-style-one" id="main">

				<div class="row">

					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'loop-templates/content', get_post_format() );
							?>

						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>

				</div>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php jumtechWP_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- .row -->

	</div><!-- #content -->

	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
