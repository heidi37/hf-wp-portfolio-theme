<?php

get_header(); ?>

<div class="header--hero text-center">
  <div class="img--headshot-wrapper">
    <img src="<?php echo get_theme_file_uri('./images/heidi-fryzell-headshot.png') ?>" alt="Heidi Fryzell" class="img--headshot" />
  </div>

  <div class="header-hero-col-2 mt-4">
    <h1>Hello, I'm Heidi.</h1>
    <p class="px-5">
      I am a frontend developer and web production specialist.
    </p>
    <a href="<?php echo site_url('/contact') ?>" class="button d-inline-block">Contact Me &raquo;</a>
  </div>
</div>
</div>

<!-- Featured Project Post -->
<div class="featured-project-outer">
  <div class="container">
    <h2 class="mb-1 text-center">featured project</h2>
    <?php
    $homepageProjects = new WP_Query(array(
      'posts_per_page' => 1,
      'post_type' => 'project',
      'orderby' => 'date',
      'order' => 'DSC'
    ));
    while ($homepageProjects->have_posts()) {
      $homepageProjects->the_post(); ?>
      <div class="featured-project mt-5">
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
    <?php }
    ?>
    <div class="text-end"><a href="<?php echo get_post_type_archive_link('project') ?>" class="nav-link">More Projects &raquo;</a>
    </div>
  </div>
</div>

<!-- Featured Blog Post
<div class="featured-blog-outer">
  <div class="container">
    <h2 class="mb-5">from the blog</h2>
    <?php
    $homepageProjects = new WP_Query(array(
      'posts_per_page' => 1,
      'post_type' => 'post',
      'orderby' => 'date',
      'order' => 'DSC'
    ));
    while ($homepageProjects->have_posts()) {
      $homepageProjects->the_post(); ?>
      <div class="featured-project">
        <div class="featured-first-col">
        <span class="post-image-rounded"><a href="<?php the_permalink() ?>">
        <?php if (has_post_thumbnail()) { ?>
          <?php the_post_thumbnail() ?>
        <?php } else { ?>
          <img src="<?php echo DEFAULT_BANNER_IMAGE; ?>">
        <?php } ?>
      </a></span>
        </div>
        <div class="featured-second-col">
          <h3><?php the_title(); ?></h3>
          <div>
            <span class="year-pill"><?php echo get_the_date(); ?></span>
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
            <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
          </p>
        </div>
      </div>
    <?php }
    ?>
    <div class="text-end"><a href="<?php echo site_url('/blog') ?>" class="nav-link">More Blog Posts &raquo;</a>
    </div>
  </div>
</div> -->

<!-- controlled by the Block Editor -->
<!-- <div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
    while (have_posts()) : the_post();
      the_content();
    endwhile;
    ?>
  </main>
</div> -->

<?php get_footer(); ?>
