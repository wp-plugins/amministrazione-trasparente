<?php /* Display a thankyou notice */
add_action('admin_notices', 'at_admin_messages');
function at_admin_messages() {
    global $current_user ;
        $user_id = $current_user->ID;

        delete_user_meta($user_id, 'at_iavcp_ignore_notice');
        delete_option( 'at_wpatt_option_enable' );

        if ( isset($_GET['at_wpa'])) {
             update_option( 'at_wpatt_option_enable', '0' );
        }

    $get_at_option_id = get_option('at_option_id');
    if ($get_at_option_id == '0') { /* Se  non è stato compilato l'url per "Torna al Sommario", informiamo brutalmente l'admin fino a quando non provvede :-) */
        echo '<div class="error"><h4>AMMINISTRAZIONE TRASPARENTE</h4><p>';
        printf(__('Per iniziare devi inserire in <strong>WPGov.it >> Amministrazione Trasparente</strong> l\'id della pagina che intendi usare come indice di Amministrazione Trasparente (dove inserisci gli shortcode)'));
        echo "</p></div>";
    }
}
?>
