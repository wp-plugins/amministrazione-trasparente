<?php

/* =========== Settings Menu ============ */


if ( is_admin() ){ // admin actions
  add_action('admin_menu', 'at_setting_menu');
  add_action('admin_menu', 'at_menu');
  add_action('admin_init', 'at_reg_settings');
} else {
  // non-admin enqueues, actions, and filters
}

function at_reg_settings() {
	register_setting( 'at_options_group', 'at_option_id', 'intval');
	register_setting( 'at_options_group', 'at_option_love', 'intval');
	register_setting( 'at_options_group', 'at_option_widget');
	register_setting( 'at_options_group', 'at_pasw_developer', 'intval');
	register_setting( 'at_options_group', 'at_breadcrumb_single', 'intval');
	register_setting( 'at_options_group', 'at_categorization_disable', 'intval');
	register_setting( 'at_options_group', 'at_wpatt_option_enable', 'intval');
	register_setting( 'at_options_group', 'at_mapcap_option_enable', 'intval');
	register_setting( 'at_options_group', 'at_option_showarchivedesc', 'intval');
	//register_setting( 'at_options_group', 'at_option_sblocca_tipologie', 'intval');
}

function at_setting_menu()
{
    add_submenu_page('edit.php?post_type=amm-trasparente', 'Impostazioni', 'Impostazioni', 'manage_options', 'at_settings', 'at_settings_menu');
}

function at_settings_menu()
{

	if(isset($_POST['FlushButton'])) {
		flush_rewrite_rules();
	}

    if(isset($_POST['Submit'])) {
		$at_option_get_id = $_POST["at_option_id_n"];
        update_option( 'at_option_id', $at_option_get_id );

		if(isset($_POST['at_option_love_n'])){
			update_option( 'at_option_love', '1' );
		} else {
			update_option( 'at_option_love', '0' );
		}
		
		if(isset($_POST['at_categorization_enable_n'])){
			update_option( 'at_categorization_enable', '1' );
		} else {
			update_option( 'at_categorization_enable', '0' );
		}
		
		if(isset($_POST['at_pasw_developer_n'])){
			update_option( 'at_pasw_developer', '1' );
		} else {
			update_option( 'at_pasw_developer', '0' );
		}

		if(isset($_POST['at_breadcrumb_single_n'])){
			update_option( 'at_breadcrumb_single', '1' );
		} else {
			update_option( 'at_breadcrumb_single', '0' );
		}
		
		if (isset($_POST['at_wpatt_option_enable_n'])){
			update_option('at_wpatt_option_enable', '1');
        } else {
			update_option('at_wpatt_option_enable', '0');
        }
		
		if (isset($_POST['at_mapcap_option_enable_n'])){
			update_option('at_mapcap_option_enable', '1');
        } else {
			update_option('at_mapcap_option_enable', '0');
        }
		
		if (isset($_POST['at_option_showarchivedesc_n'])){
			update_option('at_option_showarchivedesc', '0'); //Invertito
        } else {
			update_option('at_option_showarchivedesc', '1');
        }
		
		if (isset($_POST['at_option_sblocca_tipologie_n'])){
			update_option('at_option_sblocca_tipologie', '1');
        } else {
			update_option('at_option_sblocca_tipologie', '0');
        }
	}
	
	echo '<div class="wrap">';
	screen_icon();
	echo '<h2>Impostazioni</h2>';
	echo '<div id="welcome-panel" class="welcome-panel">';
	echo '<form method="post" name="options" target="_self">';
	settings_fields( 'at_option_group' );	
	echo '
	<table class="form-table">
	
		<p class="submit"><input type="submit" class="button-primary" name="FlushButton" value="Aggiorna Permalink" />
        Se visualizzi l\'errore 404 su alcune pagine generate dal plugin (tipologie o voci singole) clicca per aggiornare i permalink</p>
	
        <hr><tr valign="top">
        <th scope="row">ID Pagina Amministrazione Trasparente</th>
        <td><input type="text" name="at_option_id_n" value="';
	echo get_option('at_option_id');
	echo '" />&nbsp;Inserisci qui l\'id della pagina in cui è stato inserito un tag head/list (serve per attivare correttamente il link "Torna al Sommario" e le impostazioni widget</td></tr>';
	
	echo '<tr><th scope="row">Abilita Categorie<br/><div style="background-color:red;color:white;padding:1px;">Funzione sperimentale</div></th>
        <td><input type="checkbox" name="at_categorization_enable_n" ';
	$get_at_categorization_enable = get_option('at_categorization_enable');
	if ($get_at_categorization_enable == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta questa casella per abilitare la possibilità di associare le categorie degli articoli alle voci di Amministrazione Trasparente (può causare problemi alle query)<br/>Dopo l\'abilitazione, aggiorna la pagina e comparirà un nuovo menù: <b>Trasparenza -> Categorie</td></tr>';
	
	echo '<tr><th scope="row">Abilita Ruoli<br/><div style="background-color:red;color:white;padding:1px;">Funzione sperimentale</div></th>
        <td><input type="checkbox" name="at_mapcap_option_enable_n" ';
	$get_at_mapcap_option_enable = get_option('at_mapcap_option_enable');
	if ($get_at_mapcap_option_enable == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta questa casella per abilitare la possibilità di impostare permessi di gestione delle voci avanzati (può rallentare il sito)<br/>Dopo l\'abilitazione, aggiorna la pagina e comparirà un nuovo menù: <b>Trasparenza -> Ruoli</td></tr>';
	
	//Opzione per visualizzare subito la descrizione nella vis. Archivio
	echo '<tr><th scope="row">Abilita riferimento normativo espanbile</th>
        <td><input type="checkbox" name="at_option_showarchivedesc_n" ';
	$get_at_option_showarchivedesc = get_option('at_option_showarchivedesc');
	if ($get_at_option_showarchivedesc == '0') { //Invertiamo
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta questa casella per abilitare la possibilità di espandere e ridurre la sezione dei riferimenti normativi nella visualizzazione di archivio. (standard: Attivo)</td></tr>';
	
	//Opzione per abilitare la modifica delle tipologie
	//echo '<tr><th scope="row">Sblocca "Tipologie"</th>
    //   <td><input type="checkbox" name="at_option_sblocca_tipologie_n" ';
	//$get_at_option_sblocca_tipologie = get_option('at_option_sblocca_tipologie');
	//if ($get_at_option_sblocca_tipologie== '1') {
	//	echo 'checked=\'checked\'';
	//}
	//echo '/>&nbsp;Spunta questa casella per abilitare la possibilità di modificare le sezioni e le sottosezioni di Amministrazione Trasparente</td></tr>';
	
	echo '<tr><th scope="row">Mostra "Un po\' di amore"</th>
        <td><input type="checkbox" name="at_option_love_n" ';
	$get_show_love = get_option('at_option_love');
	if ($get_show_love == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta questa casella per mostrare un link al plugin in fondo alla pagina [at-list] e [at-table]</td>';
	echo '</tr></table><hr>';

	echo '<div style="float:right;"><img src="' . plugin_dir_url(__FILE__) . 'includes/wpa.png" width="240px"/></div>';
	echo '<br/><table class="form-table"><tr><h3>Impostazioni WP Attachments</h3></tr>';

	echo '<tr><th scope="row">Abilita</th>
    		<td><input type="checkbox" name="at_wpatt_option_enable_n" ';
	$get_at_wpatt_option_enable = get_option('at_wpatt_option_enable');
	if ($get_at_wpatt_option_enable == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta questa casella se vuoi abilitare il plugin WP Attachments integrato in Amministrazione Trasparente per la <b>visualizzazione automatica degli allegati</b> (se usi un altro plugin per la gestione degli allegati e abiliti questa funzione potresti visualizzare due differenti liste degli stessi allegati sotto i contenuti.<br/>Dopo l\'abilitazione, aggiorna la pagina e comparirà un nuovo menù: <b>Trasparenza -> WP Attachments</b>
	</td></tr>';
	echo '</table><hr>';
	
	echo '<div style="float:right;"><img src="' . plugin_dir_url(__FILE__) . 'includes/pab.png" width="240px"/></div>';
	echo '<br/><table class="form-table"><tr><h3>Impostazioni Pasw 2013</h3></tr><tr>Un set di opzioni aggiuntive sviluppate appositamente per i siti che utilizzano il tema della comunità di pratica Porte Aperte sul Web</tr>
		<tr><th scope="row">Forza template PASW</th>
    		<td><input type="checkbox" name="at_pasw_developer_n" ';
	$get_pasw_developer = get_option('at_pasw_developer');
	if ($get_pasw_developer == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta casella se vuoi forzare l\'utilizzo dei template archive/single ottimizzati per PASW2013 (attenzione: abilitare <b>solo</b> se il tema attivo è una versione <b>precedente</b> al 2013 o se è stato cambiato il nome del tema!)</td></tr>';

	echo '<tr><th scope="row">Visualizza Breadcrumb per voci singole?</th>
    		<td><input type="checkbox" name="at_breadcrumb_single_n" ';
	$get_at_breadcrumb_single = get_option('at_breadcrumb_single');
	if ($get_at_breadcrumb_single == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta casella per visualizzare le briciole di pane del plugin NavXT (se abilitato) sulle pagine delle voci singole di amm. trasparente.<br/>Per conoscere come configurare al meglio Breadcrumb NavXT visita la pagina <a href="http://wordpress.org/plugins/amministrazione-trasparente/installation/" target="_blank">wordpress.org/plugins/amministrazione-trasparente/installation/</a></td></tr>';

	
	echo '</table><p class="submit"><input type="submit"  class="button-primary" name="Submit" value="Aggiorna Impostazioni" /></p>';
	echo '</form></div></div>';

}

/* =========== Credits Menu ============ */
function at_menu()
{
    add_submenu_page('edit.php?post_type=amm-trasparente', 'Info & Aiuto', 'Info & Aiuto', 'manage_options', 'at_credits', 'at_credits_menu');
}

function at_credits_menu()
{
    echo '<div class="wrap"><h2>Amministrazione Trasparente per Wordpress</h2>Soluzione completa per la pubblicazione online dei documenti ai sensi del D.lgs. n. 33 del 14/03/2013, riguardante il riordino della disciplina degli obblighi di pubblicità, trasparenza e diffusione di informazioni da parte delle pubbliche amministrazioni, in attuazione dell’art. 1, comma 35, della legge n. 190/2012.<br/><br/>Versione <b>3.5</b><br/>Autore: <b>Marco Milesi</b><br/>Supporto & Feedback: <b><a href="http://wordpress.org/extend/plugins/amministrazione-trasparente/" title="Wordpress Support" target="_blank">www.wordpress.org/extend/plugins/amministrazione-trasparente</a><br/><br/><h3>Installazione</h3>Dopo avere attivato il plugin, per visualizzare la sezione contenente i link delle varie sezioni è sufficiente creare una nuova pagina (es. "Amministrazione Trasparente"), inserendo al suo interno il tag "<b>[at-list]</b>" oppure "<b>[at-table]</b>" per ottenere, rispettivamente, una lista dei link a pagina intera oppure una lista divisa su 2 colonne.
	Per l\'utilizzo dei tag nel template, usare rispettivamente <#?php echo do_shortcode(\'[at-list]\') ?#> oppure <#?php echo do_shortcode(\'[at-table]\') ?#> (senza il carattere #)<br/>
	Per informazioni e supporto, consultare il blog ufficiale oppure la pagina dedicata su Wordpress.org.<br/><br/><h3>Segnalazione BUG - Miglioramento Proattivo</h3>Nel caso in cui si riscontrino anomalie o imperfezioni durante l\'utilizzo di questo modulo, si prega di compilare una segnalazione e di inviarla a <b>milesimarco@outlook.com</b>. In questo modo, oltre a mantenere il plugin sempre aggiornato e privo di problemi per tutti, contribuisci in modo consapevole ad ottenere un prodotto gratuito e sempre aggiornato su cui poter contare. Allo stesso modo, se pensi che questo plugin debba implementare altre funzioni, contatta l\'autore o lascia un commento nella pagina su Wordpress.org!<br/><br/>Grazie per utilizzare Amministrazione Trasparente per Wordpress!<br/>Marco';
}
?>