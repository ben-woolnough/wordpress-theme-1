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


// Enable post thumbnails
add_theme_support( 'post-thumbnails' ); 


// Register menus
function register_menus() {
    register_nav_menus( array(
        'header_menu' => __('Header Menu'),
    ) );
}
add_action('init', 'register_menus');


// Widget Locations
function init_widgets($id) {
    register_sidebar( array(
        'name' => __('sidebar-right', 'newtheme'),
        'id' => 'side',
        'before_widget' => '<div class="side">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ) );
}
add_action('widgets_init', 'init_widgets');


// Customizer
function theme_customizer_register($wp_customize) {

    // Colours
    $wp_customize->add_section('colours', array(
        'title' => __('Colours', 'newtheme'),
        'description' => sprintf(__('Choose custom colours.', 'newtheme')),
        'priority' => 130
    ));

    // Background colour
    $wp_customize->add_setting('background_colour', array(
        'default' => _x('#f8f8f8', 'newtheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
        $wp_customize,
        'background_colour',
        array(
            'label' => __('Background', 'newtheme'),
            'section' => 'colours',
            'priority' => 1
        ))
    );

    // Theme settings
    $wp_customize->add_section('theme_settings', array(
        'title' => __('Theme Settings', 'newtheme'),
        'priority' => 131
    ));

    // Footer text
    $wp_customize->add_setting('footer_text', array(
        'default' => _x('Footer text', 'newtheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('footer_text', array(
        'type' => 'text',
        'section' => 'theme_settings',
        'label' => __('Footer text')
    ));
}
add_action('customize_register', 'theme_customizer_register');


// Customizer CSS
function theme_customize_css()
{
    ?>
         <style type="text/css">
             body { background-color: <?php echo get_theme_mod('background_colour', '#f8f8f8'); ?>; }
         </style>
    <?php
}
add_action( 'wp_head', 'theme_customize_css');