<?php get_header(); ?>
<div class="">
  <div class="">
    <?php
      while(have_posts()) {
        the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      <?php }
    ?>
  </div>
</div>
<?php get_footer(); ?>
