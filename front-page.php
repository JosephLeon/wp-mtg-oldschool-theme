<?php get_header(); ?>

<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="">
      <h1>Welcome to the Tampa Baytogs</h1>
      <p>Introductory paragraph; will end up being a customization on the theme; Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="container-2">
      <div class="">
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
      </div>
      <div class="">
        <h2>Upcoming Events</h2>
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
      </div>
    </div>
  </main>
</section>

<?php get_footer();
