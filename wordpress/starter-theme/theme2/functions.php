<?php

function mytheme_load_styles(){
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'mytheme_load_styles');

function mytheme_load_js(){
    wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), '4.5.3', true);
    wp_enqueue_script('my-js', get_template_directory_uri() . '/assets/js/script.js',array(), '1.0',true);
}
add_action('wp_enqueue_scripts', 'mytheme_load_js');

//Dynamically adds title
add_theme_support('title-tag');

//Adds Menus
add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => __('Primary Menu')
    )
);
//Add custom logo
add_theme_support('custom-logo');

//Add Thumbnails
add_theme_support('post-thumbnails');

//image sizes
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


//register widgets
register_sidebar(
    array(
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'before_widget' => '',
        'after_widget' => '',
        'name' => 'Sidebar Area',
        'id' => 'sidebar-1',
        'description' => 'Sidebar Widget'
    )
);
?>