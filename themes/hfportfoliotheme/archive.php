<?php

get_header(); ?>

<div class="container">
  <h1><?php single_cat_title() ;?></h1>
      <?php
      while (have_posts()) {
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="blog-info-box">
          <p><?php the_time('n.j.y'); ?> - <?php echo get_the_category_list(', ') ?></p>
        </div>
        <div class="blog-generic-content">
          <p><?php the_excerpt() ?>
          <p>
          <div class="the_post_thumbnail()"><?php the_post_thumbnail() ?></div>
        </div>
        <p><a class="button" href="<?php the_permalink(); ?>">Continue Reading &raquo;</a></p>

      <?php
        if (!is_last_post()) {
          echo '<hr>';
        }
      } ?>

</div>

<?php

get_footer();

?>
