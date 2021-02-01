<?php
$path = $_SERVER['DOCUMENT_ROOT'];

include_once $path . '/decagon-wordpress/wp-includes/wp-db.php';
include_once $path . '/decagon-wordpress/wp-config.php';
include_once $path . '/decagon-wordpress/wp-load.php';


global $wpdb;



$table = $wpdb->prefix . 'contact_data';

if(isset($_POST['post_id'])){
    
   $id = $_POST['post_id'];

   if($wpdb->delete($table, array('id' => $id))){
       echo 1;
       exit;
   }

   echo 0;
   exit;
}

echo 0;
exit;
