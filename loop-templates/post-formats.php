<?php $meta = get_post_custom($post->ID); ?>

<?php if ( has_post_format( 'aside' ) ): // aside as book ?>
  <div class="row">
    <div class="col-md-4">
      
      <div class="book-cover">
        <?php if ( ! has_post_thumbnail() ) { ?> <img src="<?php echo get_template_directory_uri(); ?>/images/post-images/image-size-one.jpg" alt="post image"> <?php } else { echo get_the_post_thumbnail( $post->ID, 'medium' ); } ?>

        <a href="get-involved.html" class="site-btn">Read Now</a>
        
      </div>

    </div>

    <div class="col-md-8">

      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      <div class="book-author">
				<?php echo get_post_meta(get_the_ID(), 'book_author', true ); ?>
      </div>

      <div class="book-description">
        <?php the_content(); ?>
      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-md-12">

    <table class="table books-table">
      
      <tbody>
        <tr>
          <td>Title</td>
          <td><?php the_title(); ?></td>
        </tr>
        <tr>
          <td>Author</td>
          <td><?php echo get_post_meta(get_the_ID(), 'book_author', true ); ?></td>
        </tr>
        <tr>
          <td>Publisher</td>
          <td><?php echo get_post_meta(get_the_ID(), 'book_publisher', true ); ?></td>
        </tr>
        <tr>
          <td>Edition</td>
          <td><?php echo get_post_meta(get_the_ID(), 'book_edition', true ); ?></td>
        </tr>
        <tr>
          <td>ISBN</td>
          <td><?php echo get_post_meta(get_the_ID(), 'book_isbn', true ); ?></td>
        </tr>
        <tr>
          <td>Number of pages</td>
          <td><?php echo get_post_meta(get_the_ID(), 'book_pages', true ); ?></td>
        </tr>
        <tr>
          <td>Country</td>
          <td><?php echo get_post_meta(get_the_ID(), 'book_country', true ); ?></td>
        </tr>
        <tr>
          <td>Translator</td>
          <td><?php echo get_post_meta(get_the_ID(), 'book_translator', true ); ?></td>
        </tr>
        <tr>
          <td>Language</td>
          <td><?php echo get_post_meta(get_the_ID(), 'book_lang', true ); ?></td>
        </tr>

      </tbody>
    </table>

    </div>

  </div>
  <!-- .row -->
<?php endif; // end of book ?>

<?php if ( has_post_format( 'audio' ) ): // Audio @fromfull ?>

  <div class="row">
    <div class="col-md-4">
      
      <div class="track-cover">
        <?php if ( ! has_post_thumbnail() ) { ?> <img src="<?php echo get_template_directory_uri(); ?>/images/post-images/image-size-one.jpg" alt="post image"> <?php } else { echo get_the_post_thumbnail( $post->ID, 'medium' ); } ?>
        
      </div>

    </div>

    <div class="col-md-8">

      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      <div class="track-artist">
				<?php echo get_post_meta(get_the_ID(), 'book_author', true ); ?>
      </div>

      <div class="track-description">
        <?php the_content(); ?>
      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-md-12">

    <table class="table tracks-table">
      
      <tbody>
        <tr>
          <td>Track</td>
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

<?php endif; //end of audio ?>

<?php if ( has_post_format( 'gallery' ) ): // Gallery ?>

  	<div class="post-format">
  		<?php $images = hu_post_images(); if ( !empty($images) ): ?>
  		<script type="text/javascript">
  			// Check if first slider image is loaded, and load flexslider on document ready
  			jQuery( function($){
  			 var firstImage = $('#flexslider-<?php echo the_ID(); ?>').find('img').filter(':first'),
  				checkforloaded = setInterval(function() {
  					var image = firstImage.get(0);
  					if (image.complete || image.readyState == 'complete' || image.readyState == 4) {
  						clearInterval(checkforloaded);
  						$('#flexslider-<?php echo the_ID(); ?>').flexslider({
  							animation: '<?php echo wp_is_mobile() ? "slide" : "fade"; ?>',
                rtl: <?php echo json_encode( is_rtl() ) ?>,
  							slideshow: true,
  							directionNav: true,
  							controlNav: true,
  							pauseOnHover: true,
  							slideshowSpeed: 7000,
  							animationSpeed: 600,
  							smoothHeight: true,
  							touch: <?php echo apply_filters('hu_flexslider_touch_support' , true); ?>
  						});
  					}
  				}, 20);
  			});
  		</script>
  		<div class="flex-container">
  			<div class="flexslider" id="flexslider-<?php the_ID(); ?>">
  				<ul class="slides">
  					<?php foreach ( $images as $image ): ?>
  						<li>
  							<?php $imageid = wp_get_attachment_image_src($image->ID,'large'); ?>
  							<img src="<?php echo esc_attr( $imageid[0] ); ?>" alt="<?php echo esc_attr( $image->post_title ); ?>">

  							<?php if ( $image->post_excerpt ): ?>
  								<div class="image-caption"><?php echo $image->post_excerpt; ?></div>
  							<?php endif; ?>
  						</li>
  					<?php endforeach; ?>
  				</ul>
  			</div>
  		</div>
  		<?php endif; ?>
  	</div>

<?php endif; ?>

<?php if ( has_post_format( 'image' ) ): // Image ?>

  	<div class="post-format">
  		<div class="image-container">
  			<?php if ( has_post_thumbnail() ) {
  				hu_the_post_thumbnail('thumb-large', '', false);//no attr, no placeholder
  				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
  				if ( isset($caption) && $caption ) echo '<div class="image-caption">'.$caption.'</div>';
  			} ?>
  		</div>
	</div>

<?php endif; ?>

<?php if ( has_post_format( 'video' ) ): // Video @fromfull ?>
  	 <div class="post-format">
      <?php
        if ( isset($meta['_video_url'][0]) && !empty($meta['_video_url'][0]) ) {
          global $wp_embed;
          $video = $wp_embed->run_shortcode('[embed]'.$meta['_video_url'][0].'[/embed]');
          echo $video;
        }
      ?>
    </div>
<?php endif; ?>

<?php if ( has_post_format( 'quote' ) ): // Quote @fromfull ?>
    <div class="post-format">
      <div class="format-container pad">
        <i class="fas fa-quote-right"></i>
        <blockquote><?php echo isset($meta['_quote'][0])?wpautop($meta['_quote'][0]):''; ?></blockquote>
        <p class="quote-author"><?php echo (isset($meta['_quote_author'][0])?'&mdash; '.$meta['_quote_author'][0]:''); ?></p>
      </div>
    </div>
<?php endif; ?>

<?php if ( has_post_format( 'chat' ) ): // Chat @fromfull?>
  	<div class="post-format">
      <div class="format-container pad">
        <i class="far fa-comments"></i>
        <blockquote>
          <?php echo (isset($meta['_chat'][0])?wpautop($meta['_chat'][0]):''); ?>
        </blockquote>
      </div>
    </div>
<?php endif; ?>

<?php if ( has_post_format( 'link' ) ): // Link @fromfull ?>
  	<div class="post-format">
      <div class="format-container pad">
        <p><a href="<?php echo (isset($meta['_link_url'][0])?$meta['_link_url'][0]:'#'); ?>">
          <i class="fas fa-link"></i>
          <?php echo (isset($meta['_link_title'][0])?$meta['_link_title'][0]:get_the_title()); ?> &rarr;
        </a></p>
      </div>
    </div>
<?php endif; ?>
