<?php

function jb_decagon_banner_customizer($wp_customize)
{
    $wp_customize->add_section('decagon_banner_customizer', array(
        'title' => __('Home Banner Setup', 'decagon'),
        'description' => 'This is where you setup the Home page banner',
        'priority' => 20,
    ));

    //first paragraph text input for banner
    $wp_customize->add_setting('decagon_banner_text1', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));

    $wp_customize->add_control('decagon_H1_text', array(
        'label' => __('H1 text', 'decagon'),
        'section' => 'decagon_banner_customizer',
        'settings' => 'decagon_banner_text1',
    ));

    //second paragraph text input for banner
    $wp_customize->add_setting('decagon_banner_text2', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));

    $wp_customize->add_control('decagon_paragraph_text', array(
        'label' => __('Paragraph text', 'decagon'),
        'section' => 'decagon_banner_customizer',
        'settings' => 'decagon_banner_text2',
    ));

    //Banner Button text
    $wp_customize->add_setting('decagon_banner_button', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));

    $wp_customize->add_control('decagon_button_text', array(
        'label' => __('Button text', 'decagon'),
        'section' => 'decagon_banner_customizer',
        'settings' => 'decagon_banner_button',
    ));


    //Banner Button text
$wp_customize->add_setting('decagon_banner_button_slug', array(
    'default' => '#',
    'capability' => 'edit_theme_options',
    'type' => 'option',

));

$wp_customize->add_control('decagon_button_url', array(
    'label' => __('Button slug eg (contact)', 'decagon'),
    'section' => 'decagon_banner_customizer',
    'settings' => 'decagon_banner_button_slug',
));


    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('decagon_banner_background_image', array(
        'default' => 'image.jpg',
        'capability' => 'edit_theme_options',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
        'label' => __('Banner Image', 'decagon'),
        'section' => 'decagon_banner_customizer',
        'settings' => 'decagon_banner_background_image',
    )));

}
add_action('customize_register', 'jb_decagon_banner_customizer');
