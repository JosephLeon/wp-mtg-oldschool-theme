<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */

 get_header();
?>
<div class="main">
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

<?php
  get_footer();
