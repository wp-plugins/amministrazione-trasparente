<?php

/* =========== Settings Menu ============ */


if ( is_admin() ){ // admin actions
  add_action('admin_menu', 'at_setting_menu');
  add_action('admin_init', 'at_reg_settings');
} else {
  // non-admin enqueues, actions, and filters
}

function at_reg_settings() {
	register_setting( 'at_options_group', 'at_version_number'); update_option( 'at_version_number', '3.9' );
	register_setting( 'at_options_group', 'at_option_id', 'intval');
	register_setting( 'at_options_group', 'at_option_love', 'intval');
	register_setting( 'at_options_group', 'at_option_widget');
	register_setting( 'at_options_group', 'at_pasw_developer', 'intval');
	register_setting( 'at_options_group', 'at_breadcrumb_single', 'intval');
	register_setting( 'at_options_group', 'at_categorization_disable', 'intval');
	register_setting( 'at_options_group', 'at_wpatt_option_enable', 'intval');
	register_setting( 'at_options_group', 'at_ruoli_option_enable', 'intval');
	register_setting( 'at_options_group', 'at_option_showarchivedesc', 'intval');
	register_setting( 'at_options_group', 'at_option_tag', 'intval');
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
		
		if (isset($_POST['at_ruoli_option_enable_n'])){
			update_option('at_ruoli_option_enable', '1');
        } else {
			update_option('at_ruoli_option_enable', '0');
        }
		
		if (isset($_POST['at_option_showarchivedesc_n'])){
			update_option('at_option_showarchivedesc', '0'); //Invertito
        } else {
			update_option('at_option_showarchivedesc', '1');
        }
		
		if (isset($_POST['at_option_tag_n'])){
			update_option('at_option_tag', '0'); //Invertito
        } else {
			update_option('at_option_tag', '1');
        }
		
		if (isset($_POST['at_option_sblocca_tipologie_n'])){
			update_option('at_option_sblocca_tipologie', '1');
        } else {
			update_option('at_option_sblocca_tipologie', '0');
        }
	}
	
	echo '<div class="wrap">';
	screen_icon();
	echo '<div style="float:right;">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="F2JK36SCXKTE2">
<input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - Il metodo rapido, affidabile e innovativo per pagare e farsi pagare.">
<img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>
</div>';
	$plugin_data = get_plugin_data( __FILE__ );
	echo '<h2>Amministrazione Trasparente ' . get_option('at_version_number') . ' <a href="http://wordpress.org/plugins/amministrazione-trasparente/installation/" target="_blank" class="add-new-h2">Installazione</a><a href="http://supporto.marcomilesi.ml/" target="_blank" class="add-new-h2">Forum di Supporto</a><a href="http://wordpress.org/plugins/amministrazione-trasparente/changelog/" target="_blank" class="add-new-h2">CHANGELOG</a></h2>';
	echo '<form method="post" name="options" target="_self">';
	settings_fields( 'at_option_group' );	
	
	echo '<div class="postbox-container" style="width: 100%">
        <div class="metabox-holder">
	
	<div class="postbox" id="second">
        <h3 class="hndle"><span>Impostazioni Generali</span></h3>
        <div class="inside">
		<table class="form-table"><tbody>';
		
	echo '<input type="submit" class="add-new-h2" name="FlushButton" value="Se visualizzi l\'errore 404 su alcune pagine generate dal plugin (tipologie o voci singole) clicca qui per aggiornare i permalink" />';
		
    echo '<tr><th scope="row">ID Pagina Amministrazione Trasparente</th>
        <td><input type="text" name="at_option_id_n" value="';
	echo get_option('at_option_id');
	echo '" />&nbsp;Inserisci qui l\'id della pagina in cui è stato inserito un tag head/list (serve per attivare correttamente il link "Torna al Sommario" e le impostazioni widget</td></tr>';
	
	echo '<tr><th scope="row">Abilita Categorie<br/></th>
        <td><input type="checkbox" name="at_categorization_enable_n" ';
	$get_at_categorization_enable = get_option('at_categorization_enable');
	if ($get_at_categorization_enable == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta questa casella per abilitare la possibilità di associare le categorie degli articoli alle voci di Amministrazione Trasparente (può causare problemi alle query)<br/>Dopo l\'abilitazione, aggiorna la pagina e comparirà un nuovo menù: <b>Trasparenza -> Categorie</td></tr>';
	
	echo '<tr><th scope="row">Abilita Tag<br/></th>
        <td><input type="checkbox" name="at_option_tag_n" ';
	$get_at_option_tag = get_option('at_option_tag');
	if ($get_at_option_tag == '0') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta questa casella per abilitare la possibilità di associare alcuni TAG agli articoli alle voci di Amministrazione Trasparente<br/>Dopo l\'abilitazione, aggiorna la pagina e comparirà un nuovo menù: <b>Trasparenza -> Tag</td></tr>';
	
	//Opzione per visualizzare subito la descrizione nella vis. Archivio
	echo '<tr><th scope="row">Abilita riferimento normativo espanbile</th>
        <td><input type="checkbox" name="at_option_showarchivedesc_n" ';
	$get_at_option_showarchivedesc = get_option('at_option_showarchivedesc');
	if ($get_at_option_showarchivedesc == '0') { //Invertiamo
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta questa casella per abilitare la possibilità di espandere e ridurre la sezione dei riferimenti normativi nella visualizzazione di archivio. (standard: Attivo)</td></tr>';
	
	echo '<tr><th scope="row">Mostra "Un po\' di amore"</th>
        <td><input type="checkbox" name="at_option_love_n" ';
	$get_show_love = get_option('at_option_love');
	if ($get_show_love == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta questa casella per mostrare un link al plugin in fondo alla pagina [at-list] e [at-table]</td>';
		
	echo '</tbody></table></div></div>';

	echo '<div class="postbox-container" style="width: 100%">
        <div class="metabox-holder">
	
	<div class="postbox" id="second">
        <h3 class="hndle"><span>Ruoli & Permessi</span></h3>
        <div class="inside">
		<table class="form-table"><tbody>';

	echo '<tr><th scope="row">Mappa le meta capacità</th>
    		<td><input type="checkbox" name="at_ruoli_option_enable_n" ';
	$get_at_ruoli_option_enable = get_option('at_ruoli_option_enable');
	if ($get_at_ruoli_option_enable == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Le voci di A.T. ereditano i permessi di pubblicazione/modifica/eliminazione degli articoli. Se vuoi avere un maggior controllo abilita questa opzione e segui <a href="http://supporto.marcomilesi.ml/?p=571" target="_blank" title="Istruzioni per la configurazione di Ruoli & Permessi">questo tutorial</a></b>
	</td></tr>';
	
	echo '</tbody></table></div></div>';
	
	echo '<div class="postbox-container" style="width: 100%">
        <div class="metabox-holder">
	
	<div class="postbox" id="second">
        <div style="float:right;"><img src="' . plugin_dir_url(__FILE__) . 'includes/pab.png" width="240px"/></div><h3 class="hndle"><span>Impostazioni PASW</span></h3>
        <div class="inside">
		<table class="form-table"><tbody>';

	echo '<tr>Alcune personalizzazioni aggiuntive sviluppate per i siti che utilizzano il tema della comunità di pratica Porte Aperte sul Web</tr>
		<tr><th scope="row">Forza template PASW</th>
    		<td><input type="checkbox" name="at_pasw_developer_n" ';
	$get_pasw_developer = get_option('at_pasw_developer');
	if ($get_pasw_developer == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta casella se vuoi forzare l\'utilizzo dei template archive/single ottimizzati per PASW2013 (attenzione: abilitare <b>solo</b> se il tema attivo è una versione <b>precedente</b> al 2013 o se è stato cambiato il nome del tema!)<br/>L\'impostazione è ereditata anche dal plugin <b>AVCP</b> (se installato).</td></tr>';

	echo '<tr><th scope="row">Visualizza Breadcrumb per voci singole?</th>
    		<td><input type="checkbox" name="at_breadcrumb_single_n" ';
	$get_at_breadcrumb_single = get_option('at_breadcrumb_single');
	if ($get_at_breadcrumb_single == '1') {
		echo 'checked=\'checked\'';
	}
	echo '/>&nbsp;Spunta casella per visualizzare le briciole di pane del plugin NavXT (se abilitato) sulle pagine delle voci singole di amm. trasparente.<br/>Per conoscere come configurare al meglio Breadcrumb NavXT visita la pagina <a href="http://wordpress.org/plugins/amministrazione-trasparente/installation/" target="_blank">wordpress.org/plugins/amministrazione-trasparente/installation/</a></td></tr>';
	
	echo '</tbody></table></div></div>';

	
	echo '<p class="submit"><input type="submit"  class="button-primary" name="Submit" value="Aggiorna Impostazioni" /></p>';
	echo '</form></div>';
	
	echo '<center><h3>Scopri gli altri plugin pensati per la Pubblica Amministrazione</h3>
	
	<hr/>
	<a href="http://wordpress.org/plugins/amministrazione-aperta/" target="_blank" title="Plugin Wordpress per la gestione di Spese, Contributi, Concessioni, Incarichi...">
	<img src="' . plugin_dir_url(__FILE__) . 'includes/aa.png"/></a>
	<hr/>
	<a href="http://wordpress.org/plugins/avcp/" target="_blank" title="Plugin Wordpress per la pubblicazione dei bandi di gara e creazione del dataset xml per l\'Autorità per la Vigilanza sui Contratti Pubblici di Lavori, Servizi e Forniture.">
	<img src="' . plugin_dir_url(__FILE__) . 'includes/av.png"/></a>
	
	<hr/>
	<center><h3>...E altre soluzioni per rendere più efficiente Wordpress!</h3>
	
	<hr/>
	<a href="http://wordpress.org/plugins/wp-attachments/" target="_blank" title="Plugin Wordpress per la visualizzazione automatica degli allegati nel sito">
	<img src="' . plugin_dir_url(__FILE__) . 'includes/wpa.png"/></a><a href="http://wordpress.org/plugins/e-mail-login/" target="_blank" title="Plugin Wordpress per il login tramite indirizzo e-mail">
	<img src="' . plugin_dir_url(__FILE__) . 'includes/mail.png"/></a>
	
	<hr/>
	Sviluppo e ideazione Wordpress a cura di <a href="http://marcomilesi.ml" target="_blank" title="www.marcomilesi.ml">Marco Milesi</a><br/><small>Per la preparazione di questo programma sono state impiegate diverse ore a titolo volontario. Se vuoi, puoi effettuare una piccola donazione utilizzando il link che trovi in alto a destra.<br/>Per qualsiasi informazione e per segnalare un problema è attivo il forum di supporto su <a href="http://supporto.marcomilesi.ml" target="_blank" title="www.marcomilesi.ml/supporto">www.marcomilesi.ml/supporto</a></small></center></div>';

}
?>