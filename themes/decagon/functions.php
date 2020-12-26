<?php

function jb_decagon_scripts()
{
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


function tj_strength_post_types() {
    register_post_type('strength', array(
        'public' => true,
        'labels' => array(
            'name' => 'Strengths',
            'add_new_item' => 'Add New Strength',
            'edit_item' => 'Edit Strength',
            'all_items' => 'All Strengths',
            'singular_name' => 'Strength'
        ),
        'menu_icon' => 'dashicons-rest-api'
    ));
}

add_action('init', 'tj_strength_post_types');

function jb_decagon_nav_menu()
{
    register_nav_menu('mainMenu', 'main Menu');
    register_nav_menu('footerMenu', 'footer Menu');
}
add_action('after_setup_theme', 'jb_decagon_nav_menu');



function jb_add_menu_link_class($atts, $item, $args)
{

    if ($args->theme_location == 'mainMenu') {

        if ($atts['href'] == site_url('/contact.php')) {
            $atts['class'] = 'nav-link nav-item nav-btn';

        } else {
            $atts['class'] = 'nav-link nav-item';
        }

    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'jb_add_menu_link_class', 1, 3);


function jb_decagon_custom_logo_setup()
{
    $defaults = array(
        'height' => 37,
        'width' => 155,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('decagon', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'jb_decagon_custom_logo_setup');
