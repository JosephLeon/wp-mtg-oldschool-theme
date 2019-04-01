<?php get_header(); ?>

<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <h1>Latest Posts</h1>
    <?php
      $args = array( 'post_type' => 'event', 'posts_per_page' => 10 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="post<?php if (($wp_query->current_post +1) == ($wp_query->post_count)) { print ' last'; } ?>">
          <h3>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <div class="">
            <p class="small"><em>Posted by <?php the_author(); ?> on <?php the_time('m/d/y'); ?></em></p>
          </div>
          <div class="post-content">
            <?php the_excerpt(); ?>
          </div>
          <div class="continue">
            <p><a href="<?php the_permalink(); ?>">Continue reading &#187;</a></p>
          </div>
        </div>
    <?php
      endwhile;
    ?>
    <?php if (paginate_links()) : ?>
      <p>
        <?php echo paginate_links(); ?>
      </p>
    <?php endif; ?>
  </main>
</section>

<?php get_footer();
