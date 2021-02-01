<?php

function jb_contact_form_dashboard_css(){
    wp_enqueue_style('main', plugin_dir_url(__FILE__).'assets/css/main.css', null, '1.0', false);
    //wp_enqueue_script('mainjs', plugin_dir_url(__FILE__) . 'assets/js/main.js', null, '1.0', true);

    wp_register_script('mainjs', plugin_dir_url(__FILE__) . 'assets/js/main.js');

wp_localize_script('mainjs', 'jb_decagon_contact_params', array(
    'ajaxurl' => plugin_dir_url(__FILE__) . 'delete.php', // WordPress AJAX

));

wp_enqueue_script('mainjs', null, '1.0', true);

    
}

add_action('admin_enqueue_scripts', 'jb_contact_form_dashboard_css');



function jb_contact_plugin_create_db()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'contact_data';

    $sql = "CREATE TABLE " . $table_name . "(
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        role VARCHAR(255) NOT NULL,
        company VARCHAR(255) NOT NULL,
        country VARCHAR(255) NOT NULL,
        need VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        PRIMARY KEY  (id)
    )" . $charset_collate . ";";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);

}

register_activation_hook(__DIR__ . '/contact-form.php', 'jb_contact_plugin_create_db');

function jb_process_contact_plugin_form()
{
    global $wpdb;
    $table_name = 'wp_contact_data';

    if (isset($_POST['jb_contact_plugin_btn'])) {
        $name = sanitize_text_field($_POST['client_name']);
        $designation = sanitize_text_field($_POST['designation']);
        $company = sanitize_text_field($_POST['company']);
        $country = sanitize_text_field($_POST['country']);
        $needs = sanitize_text_field($_POST['needs']);
        $email = sanitize_text_field($_POST['email']);

        if (!$name || !$designation || !$company || !$country || !$needs) {
            $_SESSION['jb_contact_plugin_error'] = 'Please all fields are required';
        }

        if (!is_email($email)) {
            $_SESSION['jb_contact_plugin_error'] = 'Please Enter a Valid Email address';
        }

        $data = [
            'name' => $name,
            'role' => $designation,
            'company' => $company,
            'country' => $country,
            'need' => $needs,
            'email' => $email,

        ];

        $format = ['%s', '%s', '%s', '%s', '%s', '%s'];
        if (!isset($_SESSION['jb_contact_plugin_error'])) {

            if ($wpdb->insert($table_name, $data, $format)) {
                $_SESSION['jb_contact_plugin_success'] = 'We have Received your Message. Thank You';
            }
        }
    }
}

add_action('wp_head', 'jb_process_contact_plugin_form');

function jb_contact_plugin_notices()
{
    if (isset($_SESSION['jb_contact_plugin_error'])) {
        $notice = "<p class='alert alert-danger' style='color:#000'>" . $_SESSION['jb_contact_plugin_error'] . "</p>";
        unset($_SESSION['jb_contact_plugin_error']);
        return $notice;
        
    }

    if ($_SESSION['jb_contact_plugin_success']) {
        $notice = "<p class='alert alert-success' style='color:green'>" . $_SESSION['jb_contact_plugin_success'] . "</p>";
        unset($_SESSION['jb_contact_plugin_success']);
        return $notice;
    }

}


function jb_add_contact_plugin_menu(){
    add_menu_page('decagon contact form', 'Decagon Contact','manage_options','decagon-contact-form', 'jb_contact_main_menu','dashicons-email-alt',72);
}

add_action('admin_menu', 'jb_add_contact_plugin_menu');

function jb_contact_main_menu(){
    require_once 'form-admin.php';
}


