<?php/* Display a thankyou notice */add_action('admin_notices', 'at_admin_messages');function at_admin_messages() {	global $current_user ;        $user_id = $current_user->ID;	if ( ! get_user_meta($user_id, 'at_thankyou_ignore_notice') ) {        echo '<div class="updated"><p>';         printf(__('Grazie per avere installato Amministrazione Trasparente!<br/>Per la gestione delle spese dai un\'occhiata a <a href="http://wordpress.org/plugins/amministrazione-aperta/" target="_blank">Amministrazione Aperta</a> | <a href="%1$s">Nascondi</a>'), '?at_thankyou_nag_ignore=0');        echo "</p></div>";	}		if ( ! get_user_meta($user_id, 'at_wpatt_ignore_notice') ) {        echo '<div class="updated"><p>';         printf(__('Amministrazione Trasparente integra WP Attachments, che può visualizzare automaticamente i file che caricati negli articoli e nelle pagine di Wordpress, in modo leggero e automatico! Per maggiori informazioni e <b>abilitare</b> questa funzione accedere a Trasparenza>Impostazioni e spuntare la casella di WP Attachments. | <a href="%1$s">Nascondi</a>'), '?at_wpatt_nag_ignore=0');        echo "</p></div>";	}}add_action('admin_init', 'at_admin_messages_ignore');function at_admin_messages_ignore() {	global $current_user;        $user_id = $current_user->ID;        /* If user clicks to ignore the notice, add that to their user meta */        if ( isset($_GET['at_thankyou_nag_ignore']) && '0' == $_GET['at_thankyou_nag_ignore'] ) {             add_user_meta($user_id, 'at_thankyou_ignore_notice', 'true', true);		}		if ( isset($_GET['at_wpatt_nag_ignore']) && '0' == $_GET['at_wpatt_nag_ignore'] ) {             add_user_meta($user_id, 'at_wpatt_ignore_notice', 'true', true);		}}//Se  non è stato compilato l'url per "Torna al Sommario", informiamo brutalmente l'admin fino a quando non provvede :-)add_action('admin_init', 'admin_notice_ALERT1');function admin_notice_ALERT1() {	if (get_option('at_option_id') == '0') {		echo '<div id="message" class="error"><p>'; 		printf(__('Attenzione! Inserisci l\'id della pagina in cui è presente il tag [at-list] o [at-table] in Trasparenza > Impostazioni'));		echo "</p></div>";	}}?>