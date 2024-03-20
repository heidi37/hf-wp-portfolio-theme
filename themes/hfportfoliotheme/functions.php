<?php

// Default blog banner image
define('DEFAULT_BANNER_IMAGE', get_theme_file_uri('/images/default-blog-banner.jpg'));


//Sets up support for title tags & post thumbnails
function custom_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');

//Adjust the default query for number of projects showing on listing page(archive-project.php)
function custom_post_per_page( $query ) {
  // Check if on the custom post type archive page and the main query
  if ( !is_admin() AND is_post_type_archive( 'project' ) && $query->is_main_query() ) {
      // Set the number of items per page
      $query->set( 'posts_per_page', 4 );
      $query->set( 'meta_key', 'project_year');
      $query->set( 'orderby', 'date');
      $query->set( 'order', 'DSC');
  }
}
add_action( 'pre_get_posts', 'custom_post_per_page' );

//Enqueue external resources
function hf_portfolio_files()
{
  wp_enqueue_style('boot_strap_styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3');
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');

  wp_enqueue_style('hf_portfolio_styles', get_stylesheet_uri(), array(), null);
}
add_action('wp_enqueue_scripts', 'hf_portfolio_files');

function load_google_fonts()
{
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'load_google_fonts');

function enqueue_custom_scripts()
{
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/index.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function enqueue_bootstrap_js() {
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.2.3', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_js');

//Don't think I am using this.
function is_last_post() {
  global $wp_query;
  return $wp_query->current_post + 1 === $wp_query->post_count;
}
