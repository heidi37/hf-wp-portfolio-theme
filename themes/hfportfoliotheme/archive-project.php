<?php

get_header(); ?>

<div class="container">
  <h1>projects</h1>
  <?php
  while (have_posts()) {
    the_post(); ?>
    <div class="featured-project mt-5 mb-5">
      <div class="featured-first-col">
        <span class="post-image-rounded"><a href="<?php the_field('project_url') ?>"><?php the_post_thumbnail(); ?></a></span>
      </div>
      <div class="featured-second-col">
        <h3><?php the_title(); ?></h3>
        <div class="mt-2">
          <span class="year-pill"><?php
                                  $projectDate = new DateTime(get_field('project_year'));
                                  echo $projectDate->format('Y')
                                  ?></span>
          <span class="project-type"><?php the_field('project_type') ?></span>
        </div>
        <p class="mt-2">
          <?php
          if (has_excerpt()) {
            echo get_the_excerpt();
          } else {
            echo wp_trim_words(get_the_content(), 25);
          } ?>
        </p>
        <p class="mt-2">
          <a href="<?php the_permalink(); ?>">Learn more &raquo;</a>
        </p>
      </div>
    </div>

  <?php
  } ?>

  <div class="pagination container">
    <?php echo paginate_links(); ?>
  </div>

</div>

<?php

get_footer();

?>
