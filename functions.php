<?php

if ( ! function_exists( 'jazzicons_ss_setup' ) ) :
 
  function jazzicons_ss_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
      'menu_top' => 'Top Menu',
      'menu_bottom' => 'Bottom Menu',
    ) );
  }
 
endif;
 
add_action( 'after_setup_theme', 'jazzicons_ss_setup' );
 
function jazzicons_ss_scripts_styles(){
  wp_enqueue_style(
    'jazzicons_ss_style',
    get_stylesheet_uri(),
    array(),
    time()
  );
  wp_enqueue_style(
    'myfirsttheme_google_fonts',
    'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lora:wght@400;700',
    array(),
    null
  );
}
 
add_action( 'wp_enqueue_scripts', 'jazzicons_ss_scripts_styles' );