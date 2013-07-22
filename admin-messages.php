<?php

/* Display a notice that can be dismissed */

add_action('admin_notices', 'example_admin_notice');
function example_admin_notice() {
	global $current_user ;
        $user_id = $current_user->ID;
        /* Check that the user hasn't already clicked to ignore the message */
	if ( ! get_user_meta($user_id, 'example_ignore_notice') ) {
        echo '<div class="updated"><p>'; 
        printf(__('Grazie per avere installato Amministrazione Trasparente!<br/>Per la gestione delle spese dai un\'occhiata a <a href="http://wordpress.org/plugins/amministrazione-aperta/" target="_blank">Amministrazione Aperta</a> | <a href="%1$s">Nascondi</a>'), '?example_nag_ignore=0');
        echo "</p></div>";
	}
}

add_action('admin_init', 'example_nag_ignore');
function example_nag_ignore() {
	global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['example_nag_ignore']) && '0' == $_GET['example_nag_ignore'] ) {
             add_user_meta($user_id, 'example_ignore_notice', 'true', true);
	}
}

?>