<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');


function register_my_menu(){
    register_nav_menu( 'huvudmeny', 'Meny toppen av sidan');
    register_nav_menu( 'socialmediameny', 'Sociala medier-meny längst ner');
    register_nav_menu( 'hogermeny', 'Meny på höger sida');
    register_nav_menu( 'bloggmeny', 'Meny på höger sida på bloggen');
}


register_sidebar(
    [
        'name' => 'BloggSidebar',
        'Desription' => 'Sidebar på bloggsidan',
        'id' => 'bloggsidebar'
    ]
    );

register_sidebar(
    [
        'name' => 'SocialMediaBottomSidebar',
        'Desription' => 'Social Media-länkar i botten',
        'id' => 'socialmediasidebar'
    ]
    );

register_sidebar(
    [
        'name' => 'KontaktaOssSidebar',
        'Desription' => 'Kontakta oss i botten',
        'id' => 'kontaktaosssidebar'
    ]
    );

register_sidebar(
    [
        'name' => 'OmOssSidebar',
        'Desription' => 'Om oss i botten',
        'id' => 'omosssidebar'
    ]
    );



add_action('after_setup_theme', 'register_my_menu');

add_action('wp_engueue_scripts', 'lab_theme_enqueue_styles');

function lab_theme_enqueue_styles(){
    wp_register_style('temastil', get_template_directory_uri().'/style.css');
    wp_enqueue_style('temastil');
}

?>