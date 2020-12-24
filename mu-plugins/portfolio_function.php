<?php

function portfolio_post_types() {
    register_post_type('portfolio', array(
        'public' => true,
        'labels' => array(
            'name' => 'Portfolios',
            'add_new_item' => 'Add New Portfolio',
            'edit_item' => 'Edit Portfolio',
            'all_items' => 'All Portfolios',
            'singular_name' => 'Portfolio'
        ),
        'menu_icon' => 'dashicons-buddicons-buddypress-logo'
    ));
}

add_action('init', 'portfolio_post_types');