<?php 
add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css', array(), time() );
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array(), null, true );
  add_theme_support( 'post-thumbnails');

});

?>