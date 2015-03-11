<?php

add_action( 'admin_menu', 'register_at_wpgov_menu_page' );

function register_at_wpgov_menu_page(){
    add_menu_page('Impostazioni soluzioni WPGOV.IT', 'WPGov.it', 'manage_options', 'impostazioni-wpgov', 'at_wpgov_settings', 'dashicons-share-alt', 40);
}

function at_wpgov_settings () {
    
    $date1 = date('Y-m-d', time());
    $date2 = date('Y-m-d', strtotime(get_option('wpgov_ddate')) );
    if ( floor( (strtotime($date1)-strtotime($date2))/(60*60*24) ) > 6 ) {
        update_option('wpgov_ddate', $date1);
        include(plugin_dir_path(__FILE__) . 'dona.php');
    } else {
        include(plugin_dir_path(__FILE__) . 'dispatcher.php');
    }
}

?>
