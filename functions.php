<?php 

function mediplus_script_enqueue() {
  /*===  Register Styles ===*/
  // wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], false, 'all');
  
  /* Mediplus CSS  */
  // wp_register_style( 'normalize-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/assets/css/normalize.css'));
  // wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/assets/css/style.css'));
  // wp_register_style( 'responsive-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/assets/css/responsive.css'));
  
  /*===  Register Scripts ===*/
  // wp_register_script('main-js', get_template_directory_uri( ) . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js'), true );

  /*===  Enqueue Styles ===*/
  // wp_enqueue_style('normalize-css');
  // wp_enqueue_style('style-css');
  // wp_enqueue_style('bootstrap-css');

  /*===  Enqueue Scripts ===*/
}
add_action('wp_enqueue_scripts', 'mediplus_script_enqueue');

/*  post-thumbnails */
if(function_exists('add_theme_support')){
  add_theme_support( 'post-thumbnails' );
}