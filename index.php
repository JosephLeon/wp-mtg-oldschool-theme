<?php get_header(); ?>

<section id="primary" class="content-area">
  <main id="main" class="site-main">

        <h2>Latest Posts</h2>
        <?php
          while(have_posts()) {
            the_post(); ?>
            <div class="post">
              <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <div class="post-content">
                <?php the_content(); ?>
              </div>
            </div>
          <?php }
        ?>

  </main>
</section>

<?php get_footer();
