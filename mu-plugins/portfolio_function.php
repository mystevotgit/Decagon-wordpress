<?php
/**
 * Plugin Name: Portfolios
 * Description: this is a must use plugin for the leadership section of the decagon website.
 * Author:      Team D decagon Website
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

function tj_portfolio_post_type() {
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

add_action('init', 'tj_portfolio_post_type');