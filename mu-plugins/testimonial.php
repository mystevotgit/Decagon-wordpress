<?php
/**
 * Plugin Name: Testimonials
 * Description: this is a must use plugin for the testimonial section of the decagon website.
 * Author:      Team D decagon Website
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

function jb_decagon_testimonials_post_types()
{
    register_post_type('testimonial', array(
        'public' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonials'),
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Testimonials', 
            'singular_name' => 'Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonials',
            'featured_image'        => 'Testimonial Cover Image', 
            'set_featured_image'    => 'Set cover image', 
            'remove_featured_image' => 'Remove cover image', 
            'use_featured_image'    => 'Use as cover image', 
        ),
        'supports' => array('title','editor','thumbnail', 'custom-fields'),
        'menu_icon'   => 'dashicons-buddicons-groups',
    ));
}

add_action('init', 'jb_decagon_testimonials_post_types');


 // Add the filter to manage the p tags
function jb_decagon_remove_default_ptag_from_testimonial_content($content)
{
    global $post;
    // Check for testimonial post type and remove
    if ($post->post_type === 'testimonial') {
        $content = strip_tags($content);
    }

    return $content;
}

add_filter('the_content', 'jb_decagon_remove_default_ptag_from_testimonial_content', 1);




