<?php

// Debug settings
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );


// Enqueue theme styles
function theme_styles() {
    wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Raleway' );
    wp_enqueue_style( 'bootstrap_reboot_css', get_template_directory_uri() . '/css/bootstrap-reboot.min.css' );
    wp_enqueue_style( 'bootstrap_grid_css', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles');


// Register menus
function register_menus() {
    register_nav_menus( array(
        'header_menu' => __('Header Menu'),
    ) );
}
add_action('init', 'register_menus');