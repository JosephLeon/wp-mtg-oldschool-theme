<?php get_header(); ?>

<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="">
      <?php
        // load the title and intro paragraph
        while(have_posts()) {
          the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        <?php }
      ?>
    </div>
    <div class="container-2-a">
      <div class="grid-item">
        <h2>Latest Posts</h2>
        <?php
          $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <h3>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="entry-content">
              <?php the_excerpt(); ?>
            </div>
        <?php
          endwhile;
        ?>
      </div>
      <div class="grid-item">
        <h2>Upcoming Events</h2>
        <?php
          $args = array( 'post_type' => 'event', 'posts_per_page' => 3 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <h3>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="entry-content">
              <?php the_excerpt(); ?>
            </div>
        <?php
          endwhile;
        ?>
      </div>
    </div>
  </main>
</section>

<?php get_footer();
