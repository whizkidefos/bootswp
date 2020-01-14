<?php

// Load styles & scripts
function load_css() {
  wp_register_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all' );
  wp_enqueue_style( 'bootstrap-css' );

  wp_register_style( 'main-css', get_template_directory_uri().'/css/main.css', array(), false, 'all' );
  wp_enqueue_style( 'main-css' );
}

function load_js() {
  wp_enqueue_script( 'jquery' );
  wp_register_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', false, true );
  wp_enqueue_script( 'bootstrap-js' );
}

add_action( 'wp_enqueue_scripts', 'load_css');
add_action( 'wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

// Register Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location'
  )
);

//Register Sidebars
function boots_sidebar () {
  register_sidebar(
    array (
      'name'          => 'Page Sidebar',
      'id'            => 'page-sidebar',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );

  register_sidebar(
    array (
      'name'          => 'Blog Sidebar',
      'id'            => 'blog-sidebar',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
}

add_action( 'widgets_init', 'boots_sidebar' );

// Register Custom Post Type & Taxonomy
function cars_post_type() {

  $args = array(
    'labels' => array (
      'name' => 'Cars',
      'singular_name' => 'Car'
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_icon' => 'dashicons-backup',
    'hierarchical' => true
  );

  register_post_type( 'cars', $args );
}

function custom_taxonomy() {

  $args = array(
    'labels' => array (
      'name' => 'Brands',
      'singular_name' => 'Brand'
    ),
    'public' => true,
    'hierarchical' => true
  );

  register_taxonomy( 'brands', array('cars'), $args );
}

add_action( 'init', 'cars_post_type' );
add_action( 'init', 'custom_taxonomy' );
