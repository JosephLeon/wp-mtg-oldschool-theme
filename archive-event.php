<?php get_header(); ?>

<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <h1>Events</h1>

    <?php

      // The Query
      $i = 0;
      $args = array( 'post_type' => 'event', 'posts_per_page' => 10 );
      $query = new WP_Query( $args );

      // The Loop
      if ( $query->have_posts() ) {
      	while ( $query->have_posts() ) {
      		$query->the_post();
          $i++;
          ?>
            <div class="post<?php if ($wp_query->post_count == $i) { print ' last'; } ?>">
              <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <div class="">
                <p class="small"><em>Posted by <?php the_author(); ?> on <?php the_time('m/d/y'); ?></em></p>
              </div>
              <div class="post-content">
                <?php the_excerpt(); ?>
              </div>
            </div>
          <?php
      	}
      	/* Restore original Post Data */
      	wp_reset_postdata();
      } else {
      	// no posts found
      }
      ?>


    <?php if (paginate_links()) : ?>
      <p>
        <?php echo paginate_links(); ?>
      </p>
    <?php endif; ?>
  </main>
</section>

<?php get_footer();
