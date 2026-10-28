<?php

// Zet thema-functies aan en koppel menu
function gamereview_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => 'Hoofdmenu',
    ) );
}
add_action( 'after_setup_theme', 'gamereview_setup' );

// Laad style.css
function gamereview_enqueue_assets() {
    wp_enqueue_style(
        'game-review-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );
}
add_action( 'wp_enqueue_scripts', 'gamereview_enqueue_assets' );

// Widget-gebied in de footer
function gamereview_widgets_init() {
    register_sidebar( array(
        'name'          => 'Footer widgets',
        'id'            => 'footer-widgets',
        'description'   => 'Widgets die onderaan elke pagina getoond worden.',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'gamereview_widgets_init' );
