<?php

require_once 'acf.php';

add_action( 'after_setup_theme', function() {
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', [
        'height'      => 190,
        'width'       => 190,
        'flex-width'  => false,
        'flex-height' => false,
        'header-text' => '',
    ] );
    register_nav_menu( 'primary_header', 'Header Menu' );
    register_nav_menu( 'primary_footer', 'Footer Menu' );
});
add_filter( 'excerpt_more', '__return_empty_string' );

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' , [], '1.0.0' );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', [], '1.0.0', true );
} );

add_action('latest_posts' , function($args)  {
    $posts = get_posts( [
        'numberposts' => 3,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'suppress_filters' => true,
    ] );
    return get_template_part('template-parts/latest-posts' , null, ['posts' => $posts]);
});

add_action('list_posts' , function($args)  {
    $posts = get_posts( [
        'numberposts' => $args['count'],
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'suppress_filters' => true,
    ] );
    return get_template_part('template-parts/list-posts' , null, ['posts' => $posts]);
});
