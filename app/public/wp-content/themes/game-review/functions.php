<?php

// Zet thema-functies aan
function gamereview_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
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