<?php
/**
 * Ramanandi Devi Orphanage Theme Functions
 */

// Enqueue styles and scripts
function ramanandi_orphanage_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('ramanandi-style', get_stylesheet_uri(), array(), '1.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@300;400;600;700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'ramanandi_orphanage_scripts');

// Theme setup
function ramanandi_orphanage_setup() {
    // Add theme support for title tag
    add_theme_support('title-tag');
    
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Add theme support for HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'ramanandi_orphanage_setup');

// Set content width
if (!isset($content_width)) {
    $content_width = 1200;
}

// Remove default WordPress styles that might interfere
function ramanandi_remove_default_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'ramanandi_remove_default_styles', 100);

// Customize excerpt length
function ramanandi_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'ramanandi_excerpt_length');

// Customize excerpt more text
function ramanandi_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'ramanandi_excerpt_more');
?>
