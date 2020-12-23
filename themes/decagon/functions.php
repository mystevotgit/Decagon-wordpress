<?php

function jb_decagon_scripts(){
    wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js',
     null, '1.0', true);
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', null, '1.0', true);
    wp_enqueue_script('slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
    null, '1.0', true);
    wp_enqueue_script('custom-js', get_theme_file_uri('/assets/js/script.js'), null, '1.0', true);
    wp_enqueue_style('bootstrap1', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('bootstrap2', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Mulish:wght@400;600;700;800&display=swap');
    wp_enqueue_style('decagon-assets', get_theme_file_uri('/assets/css/style.min.css'));
}

add_action('wp_enqueue_scripts', 'jb_decagon_scripts');
