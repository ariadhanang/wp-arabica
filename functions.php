<?php

// Navigation Menu
function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
     )
   );
 }
 add_action( 'init', 'register_menus' );

// Stylesheet
 wp_enqueue_style( 'style', get_stylesheet_uri() );