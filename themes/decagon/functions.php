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


function tj_strength_post_type() {
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

add_action('init', 'tj_strength_post_type');



function jb_decagon_nav_menu()
{
    register_nav_menu('mainMenu', 'main Menu');
    register_nav_menu('footerMenu', 'footer Menu');
}
add_action('after_setup_theme', 'jb_decagon_nav_menu');


//Add nav-link nav-item nav-btn to any link that points to /contact.php
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


// Add custom class to widget navigation menus
function jb_add_footer_link_class($nav_menu_args)
{
    $nav_menu_args['theme_location'] = 'footerMenu';
    $nav_menu_args['menu_class'] = 'footer-links';

    return $nav_menu_args;
}
add_filter('widget_nav_menu_args', 'jb_add_footer_link_class');



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


// Add Thumbnail Support
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1200, 900, true);


function jb_decagon_links_widget()
{

    register_sidebar(array(
        'name' => 'Footer Links widget Area',
        'id' => 'footer_widget_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-heading">',
        'after_title' => '</h4>',
    ));

}
add_action('widgets_init', 'jb_decagon_links_widget');


function jb_decagon_location_widget()
{

    register_sidebar(array(
        'name' => 'Footer Location widget Area',
        'id' => 'footer_widget_2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-heading">',
        'after_title' => '</h4>',
    ));

}
add_action('widgets_init', 'jb_decagon_location_widget');


function jb_decagon_contact_widget()
{

    register_sidebar(array(
        'name' => 'Footer contact widget Area',
        'id' => 'footer_widget_3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-heading">',
        'after_title' => '</h4>',
    ));

}
add_action('widgets_init', 'jb_decagon_contact_widget');



function jb_decagon_social_widget()
{

    register_sidebar(array(
        'name' => 'Footer social widget Area',
        'id' => 'social_widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="footer-heading">',
        'after_title' => '</h4>',
    ));

}
add_action('widgets_init', 'jb_decagon_social_widget');


function jb_decagon_sidebar_widget()
{

    register_sidebar(array(
        'name' => 'Page sidebar widget Area',
        'id' => 'page_sidebar',
        'before_widget' => '<div class="heading mb_small">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-heading">',
        'after_title' => '</h4>',
    ));

}
add_action('widgets_init', 'jb_decagon_sidebar_widget');



// filter out the default widgetText class from text widget
function filter_widget_content($widget)
{
    $content = '';
    ob_start();
    dynamic_sidebar($widget);
    $content = ob_get_clean();
    return $content;
}



function tj_decagon_partners_post_type() {
    register_post_type('partner', array(
        'public' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'partners'),
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Partners', 
            'singular_name' => 'Partner',
            'add_new_item' => 'Add New Partners',
            'edit_item' => 'Edit Partner',
            'all_items' => 'All Partners',
            'featured_image'        => 'Partner Image', 
            'set_featured_image'    => 'Set image', 
            'remove_featured_image' => 'Remove image', 
            'use_featured_image'    => 'Use as partner image', 
        ),
        'supports' => array('title','editor','thumbnail', 'custom-fields'),
        'menu_icon'   => 'dashicons-share-alt',
    ));
}

add_action( 'init', 'tj_decagon_partners_post_type' );



function tj_decagon_customer_post_type() {
    register_post_type('customer', array(
        'public' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'customers'),
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Customers', 
            'singular_name' => 'Customer',
            'add_new_item' => 'Add New Customer',
            'edit_item' => 'Edit Customer',
            'all_items' => 'All Customers',
            'featured_image'        => 'Customer Image', 
            'set_featured_image'    => 'Set image', 
            'remove_featured_image' => 'Remove image', 
            'use_featured_image'    => 'Use as Customer image', 
        ),
        'supports' => array('title','editor','thumbnail', 'custom-fields'),
        'menu_icon'   => 'dashicons-screenoptions',
    ));
}

add_action( 'init', 'tj_decagon_customer_post_type' );