<?php

// Project Custom Post Type
// Step 1: Register Custom Post Type

function portfolio_post_types() {

  register_post_type('project', array(
    'public' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'projects'),
    'has_archive' => true,
    'labels' => array(
      'name' => 'Projects',
      'add_new' => 'Add New Project',
      'edit_item' => 'Edit Project',
      'all_items' => 'All Projects',
      'singular_name' => 'Project'
    ),
    'menu_icon' => 'dashicons-portfolio',
  ));

}

add_action('init', 'portfolio_post_types');

?>
