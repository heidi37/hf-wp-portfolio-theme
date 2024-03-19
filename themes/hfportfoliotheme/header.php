<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/x-icon" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/x-icon" />

  <?php wp_head(); ?>
</head>

<body>
<!--  -->
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Heidi Fryzell</a> -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-auto">
              <?php if(is_page('home')){  ?>
                <a class="nav-link active"
              <?php }
              else { ?>
                <a class="nav-link"
              <?php } ?>
              href="<?php echo site_url('/') ?>">home</a>
            </li>
            <li class="nav-item mx-auto">
            <?php if(get_post_type() == 'project'){  ?>
                <a class="nav-link active"
              <?php }
              else { ?>
                <a class="nav-link"
              <?php } ?>
              href="<?php echo get_post_type_archive_link('project') ?>">projects</a>
            </li>
            <li class="nav-item mx-auto">
            <?php if(get_post_type() == 'post'){  ?>
                <a class="nav-link active"
              <?php }
              else { ?>
                <a class="nav-link"
              <?php } ?>
              href="<?php echo site_url('/blog') ?>">blog</a>
            </li>
            <li class="nav-item mx-auto">
            <?php if(is_page('contact')){  ?>
                <a class="nav-link active"
              <?php }
              else { ?>
                <a class="nav-link"
              <?php } ?>
              href="<?php echo site_url('/contact') ?>">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>
