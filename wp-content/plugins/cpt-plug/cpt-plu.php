<?php
/*
    Plugin name: Custom Post Type Plugin
 */

 add_action('init', 'registrera_anpassad_post');
 

 function registrera_anpassad_post(){

    $post_argument = [
        'public' => true,
        'label' => 'Anpassad post'
    ];

    register_post_type('anpassad_post', $post_argument);

 }
 