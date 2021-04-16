<?php

// Change all instances of kiiitech_tenex to your theme name.
if ( ! function_exists( 'kiiitech_tenex_setup' ) ) :
 
   function kiiitech_tenex_setup() {
      add_theme_support( 'automatic-feed-links' );
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'custom-logo', array(
         'height'      => 800,
         'width'       => 800,
         'flex-height' => true,
         'flex-width'  => true,
         'header-text' => array( 'site-title', 'site-description' ),
      ) );
   

     register_nav_menus(array(
      'main_menu'    =>    'Main Menu',
      'main_footer'   =>    'Footer Menu',
      'main_social'   =>    'Social Menu'
   ));

   }
 
endif;
 
add_action('after_setup_theme', 'kiiitech_tenex_setup');
 
function kiiitech_tenex_scripts_styles(){
   wp_enqueue_style('kiiitech_tenex_style', get_stylesheet_uri(), array(), time());
   // wp_enqueue_style( 'kiiitech_tenex_google_fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif&family=Spectral+SC:wght@600&family=Spectral:wght@700', array(), null );


   
   // wp_enqueue_style('kiiitech_tenex_google_font', echo get_template_directory_uri(). "wp-includes/fonts', array(), null);

   wp_enqueue_style('kiiitech_tenex_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');

   
   
   wp_enqueue_script('kiiitech_tenex_nav_js', get_template_directory_uri() . '/js/navigation.js', array(), null, true);
  }
 
add_action('wp_enqueue_scripts', 'kiiitech_tenex_scripts_styles');




add_filter( 'excerpt_length', function($length) {
   return 24;
} );