<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');


function register_my_menu(){
    register_nav_menu( 'huvudmeny', 'Meny toppen av sidan');
    register_nav_menu( 'socialmediameny', 'Sociala medier-meny längst ner');
    register_nav_menu( 'bloggmeny', 'Meny på höger sida på bloggen');
    register_nav_menu( 'sidebarmeny', 'Meny på höger sida');
}


register_sidebar(
    [
        'name' => 'Blogg Sidebar',
        'Desription' => 'Sidebar på bloggsidan',
        'id' => 'bloggsidebar',
    ]
    );

register_sidebar(
    [
        'name' => 'Social Media botten-sidebar',
        'Desription' => 'Social Media-länkar i botten',
        'id' => 'socialmediasidebar',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => false,
    ]
    );

register_sidebar(
    [
        'name' => 'Kontakta oss botten-sidebar',
        'Desription' => 'Kontakta oss i botten',
        'id' => 'kontaktaosssidebar',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => false,
    ]
    );

register_sidebar(
    [
        'name' => 'Om oss botten-sidebar ',
        'Desription' => 'Om oss i botten',
        'id' => 'omosssidebar',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => false,
    ]
    );

/* add_image_size() */

add_action('after_setup_theme', 'register_my_menu');

add_action('wp_engueue_scripts', 'lab_theme_enqueue_styles');

function lab_theme_enqueue_styles(){
    wp_register_style('temastil', get_template_directory_uri().'/style.css');
    wp_enqueue_style('temastil');
}

?>