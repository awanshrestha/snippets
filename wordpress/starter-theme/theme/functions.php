<?php

function load_css(){
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-css');
    wp_register_style('my-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('my-css');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js(){
    wp_register_script('jquery-js', get_template_directory_uri() . '/js/jquery-3.5.1.js');
    wp_enqueue_script('jquery-js');
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
    wp_enqueue_script('bootstrap-js');
    wp_register_script('my-js', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_script('my-js');
}
add_action('wp_enqueue_scripts', 'load_js');



add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);
add_theme_support('post-thumbnails');

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

?>