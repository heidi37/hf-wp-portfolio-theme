<?php

get_header(); ?>

<div class="container">

<ul class="breadcrumbs">
  <li><a href="<?php echo site_url('/') ?>">Home</a></li>
  <li><a href="<?php echo get_post_type_archive_link('project') ?>">Projects</a></li>
  <li><?php the_title(); ?></li>
</ul>

<?php
  while (have_posts()) {
    the_post(); ?>

    <div class="featured-project mt-5">
      <div class="featured-first-col">
        <a href="<?php the_field('project_url') ?>"><?php the_post_thumbnail(); ?></a>
        <div class="project-tech-pills">
          <h4 class="mt-3 mb-1">Tech Stack</h4>
          <?php
          $checkbox_values = get_field('project_tech');

          if ($checkbox_values) {
            echo '<ul class="project-tech-list">';
            foreach ($checkbox_values as $value) {
              echo '<li class="project-tech-item">' . $value . '</li>';
            }
            echo '</ul>';
          }
          ?>

        </div>
      </div>
      <div class="featured-second-col">
        <h3><a class="project-image-link" href="<?php the_field('project_url') ?>"><?php the_title(); ?></a></h3>
        <div>
          <span class="year-pill"><?php
                                  $projectDate = new DateTime(get_field('project_year'));
                                  echo $projectDate->format('Y')
                                  ?></span>
          <span class="project-type"><?php the_field('project_type') ?></span>
        </div>
        <p class="mt-2">
          <?php the_content(); ?>
        </p>
        <p class="mt-2">
          <a href="<?php the_field('project_url') ?>">View Project &raquo;</a>
        </p>
      </div>

    </div>
  <?php } ?>

</div>

<?php

get_footer();

?>
