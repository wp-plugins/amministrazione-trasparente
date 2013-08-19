<?php

/* Display a notice that can be dismissed */

add_action('admin_notices', 'at_admin_notice');
function at_admin_notice() {
	global $current_user ;
        $user_id = $current_user->ID;
        /* Check that the user hasn't already clicked to ignore the message */
	if ( ! get_user_meta($user_id, 'pasw_alert_ignore_notice') ) {
        echo '<div class="updated"><p>'; 
        printf(__('Grazie per avere installato Amministrazione Trasparente!<br/>Per la gestione delle spese dai un\'occhiata a <a href="http://wordpress.org/plugins/amministrazione-aperta/" target="_blank">Amministrazione Aperta</a> | <a href="%1$s">Nascondi</a>'), '?pasw_alert_ignore_notice=0');
        echo "</p></div>";
	}
}
add_action('admin_init', 'at_nag_ignore');
function at_nag_ignore() {
	global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['at_nag_ignore']) && '0' == $_GET['at_nag_ignore'] ) {
             add_user_meta($user_id, 'pasw_alert_ignore_notice', 'true', true);
	}
}
//Se  non è stato compilato l'url per "Torna al Sommario", informiamo brutalmente l'admin fino a quando non provvede :-)add_action('admin_init', 'admin_notice_ALERT1');function admin_notice_ALERT1() {	if (get_option('at_option_id') == '0') {		echo '<div id="message" class="error"><p>'; 		printf(__('Attenzione! Inserisci l\'id della pagina in cui è presente il tag [at-list] o [at-table] in Trasparenza > Impostazioni'));		echo "</p></div>";	}}
?>