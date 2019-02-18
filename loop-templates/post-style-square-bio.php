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

                <!-- display meta key value -->
                <?php if ( get_post_meta(get_the_ID(), 'biography_info', true ) ) : ?>
                  <span class="post-meta">
                    <?php echo get_post_meta(get_the_ID(), 'biography_info', true ); ?>
                  </span>
                <?php endif; ?>

              </div>
              <a class="link-overlay" href="<?php the_permalink(); ?>"></a>
            </div>