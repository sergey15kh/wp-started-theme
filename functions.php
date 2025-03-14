<?php
define( '_S_VERSION', '1.0.0' );

add_action( 'after_setup_theme', function () {
  load_theme_textdomain( 'start-theme', get_template_directory() . '/languages' );

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );

  register_nav_menus( [
    'menu-1' => esc_html__( 'Primary Menu', 'start-theme' ),
  ] );

  add_theme_support( 'html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ] );

  add_theme_support( 'custom-logo', [
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
  ] );
} );

add_action( 'widgets_init', function () {
  register_sidebar( [
    'name'          => esc_html__( 'Sidebar', 'start-theme' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'start-theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ] );
} );

add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/app.css', [], _S_VERSION );
  wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/app.js', [], _S_VERSION, true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
} );
