<?php

function jb_contact_plugin_create_db()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'contact_data';

    $sql = "CREATE TABLE " .$table_name. "(
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        role VARCHAR(255) NOT NULL,
        company VARCHAR(255) NOT NULL,
        country VARCHAR(255) NOT NULL,
        need VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        PRIMARY KEY  (id)
    )".$charset_collate.";";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);

}

register_activation_hook(__DIR__.'/contact-form.php', 'jb_contact_plugin_create_db');