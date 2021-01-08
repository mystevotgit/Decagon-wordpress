<?php

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

    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

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
        ;

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

        if($wpdb->insert($table_name, $data, $format)){
            $_SESSION['jb_contact_plugin_success'] = 'We have Received your Message. Thank You';
        }

    }
}

add_action('wp_head', 'jb_process_contact_plugin_form');
