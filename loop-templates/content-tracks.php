<div class="single-track" id="post-<?php the_ID(); ?>">

  <div class="track-play-btn">
    <?php echo do_shortcode( get_post_meta(get_the_ID(), 'track_play', true ) ); ?>
  </div>
  
  <div class="track-title">
    <?php the_title(); ?>
  </div>

  <div class="track-artist">
    <?php echo get_post_meta(get_the_ID(), 'track_artist', true ); ?>
  </div>

  <div class="track-album">
    <?php echo get_post_meta(get_the_ID(), 'track_album', true ); ?>
  </div>

  <div class="track-genre">
    <?php echo get_post_meta(get_the_ID(), 'track_genre', true ); ?>
  </div>

</div>