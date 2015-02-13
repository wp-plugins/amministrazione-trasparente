<?php

add_action( 'admin_menu', 'register_at_wpgov_menu_page' );

function register_at_wpgov_menu_page(){
    add_menu_page('Impostazioni soluzioni WPGOV.IT', 'WPGov.it', 'manage_options', 'impostazioni-wpgov', 'at_wpgov_settings', 'dashicons-share-alt', 40);
}

function at_wpgov_settings () {
    include(plugin_dir_path(__FILE__) . 'dispatcher.php');
}
?>
