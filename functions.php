<?php
/*
 * Enqueue styles and scripts.
 */
function mytheme_enqueue_scripts() {
  // Load theme style.
  wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );

/*
 * Setup Mytheme theme.
 */
function mytheme_setup_theme() {
  // Enable support for menus.
  register_nav_menu( 'header-navigation', 'Header navigation' );


  // Enable support for Post Thumbnails.
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 760, 300, true );
}
add_action( 'after_setup_theme', 'mytheme_setup_theme' );

/*
 * Register sidebar
 */
function mytheme_widgets_init() {
  // Register main sidebar
  register_sidebar( array(
    'name'          => 'Main Sidebar',
    'id'            => 'sidebar-main',
    'description'   => 'Add widgets you want to display in sidebar.',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>',
  ) );
}

add_action( 'widgets_init', 'mytheme_widgets_init' );
