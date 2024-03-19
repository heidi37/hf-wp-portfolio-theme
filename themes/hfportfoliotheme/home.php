<?php

get_header();

?>
<div class="container">
  <h1>blog</h1>

  <?php

  while (have_posts()) {
    the_post(); ?>
    <div class="blog-list-items">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>

      <div class="blog-info-box">
        <p><?php the_time('n.j.y'); ?> - <?php echo get_the_category_list(', ') ?></p>
      </div>

      <div class="blog-generic-content">
        <div>
          <?php the_excerpt() ?>
          <p>
            <a href="<?php the_permalink(); ?>">Continue reading &raquo;</a>
          </p>
        </div>
        <?php if (has_post_thumbnail()) { ?>
          <div class="the_post_thumbnail()"><?php the_post_thumbnail() ?></div>
        <?php } else { ?>
          <div class="the_post_thumbnail()"><img src="<?php echo DEFAULT_BANNER_IMAGE; ?>"></div>
        <?php } ?>

      </div>
    </div>

  <?php
  }
  ?>

</div>

<div class="pagination container">
  <?php echo paginate_links(); ?>
</div>

<?php

get_footer();

?>
