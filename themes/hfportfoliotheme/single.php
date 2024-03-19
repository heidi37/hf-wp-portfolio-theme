<?php

get_header(); ?>

<div class="container">

  <?php

  while (have_posts()) {
    the_post(); ?>
    <div class="blog-page-banner">

      <?php if (has_post_thumbnail()) { ?>
        <div class="blog-page-banner__bg-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);"></div>
      <?php } else { ?>
        <!-- default banner image is sent in functions.php -->
        <div class="blog-page-banner__bg-image" style="background-image: url(<?php echo DEFAULT_BANNER_IMAGE; ?>);"></div>
      <?php } ?>

    </div>

    <div class="blog-page-content container">

      <ul class="breadcrumbs mb-3">
        <li><a href="<?php echo site_url('/') ?>">Home</a></li>
        <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
        <li><?php the_title(); ?></li>
      </ul>

      <h1><?php the_title() ?></h1>
      <p><?php the_content() ?></p>
    </div>

  <?php } ?>
</div>

<?php

get_footer();

?>
