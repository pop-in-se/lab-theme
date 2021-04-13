<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');


add_action('wp_engueue_scripts', 'assets_funktion');

function assets_function(){
    wp_register_style('temastil', get_template_directory_uri().'/style.css');
    wp_enqueue_style('temastil');
}

?>