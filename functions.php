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
  // Enable support for Post Thumbnails.
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 760, 300, true );
}
add_action( 'after_setup_theme', 'mytheme_setup_theme' );
