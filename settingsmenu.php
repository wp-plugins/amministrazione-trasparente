<?php
/* =========== Credits Menu ============ */
function at_setting_menu()
{
    add_submenu_page('edit.php?post_type=amm-trasparente', 'Impostazioni', 'Impostazioni', 'manage_options', 'at_settings', 'at_settings_menu');
}
add_action('admin_menu', 'at_setting_menu');
function at_settings_menu()
{
    echo '<div class="wrap">Nessuna opzione modificabile. Per il momento...</div>';
}
/* =========== Credits Menu ============ */
function at_menu()
{
    add_submenu_page('edit.php?post_type=amm-trasparente', 'Informazioni', 'Informazioni', 'manage_options', 'at_credits', 'at_credits_menu');
}
add_action('admin_menu', 'at_menu');
function at_credits_menu()
{
    echo '<div class="wrap"><h2>Amministrazione Trasparente per Wordpress</h2>Soluzione completa per la pubblicazione online dei documenti ai sensi del D.lgs. n. 33 del 14/03/2013, riguardante il riordino della disciplina degli obblighi di pubblicità, trasparenza e diffusione di informazioni da parte delle pubbliche amministrazioni, in attuazione dell’art. 1, comma 35, della legge n. 190/2012.<br/><br/>Versione <b>1.1.1.1</b><br/>Autore: <b>Marco Milesi</b><br/>Blog: <b><a href="http://amministrazioneaperta.wordpress.com/" title="Ammininistrazione Trasparente for Wordpress - Official Website" target="_blank">www.amministrazioneaperta.wordpress.com</a></b><br/>Supporto & Feedback: <b><a href="http://wordpress.org/extend/plugins/amministrazione-trasparente/" title="Wordpress Support" target="_blank">www.wordpress.org/extend/plugins/amministrazione-trasparente</a><br/><br/><h3>Installazione</h3>Dopo avere attivato il plugin, per visualizzare la sezione contenente i link delle varie sezioni è sufficiente creare una nuova pagina (es. "Amministrazione Trasparente"), inserendo al suo interno il tag "<b>[at-list]</b>" oppure "<b>[at-table]</b>" per ottenere, rispettivamente, una lista dei link a pagina intera oppure una lista divisa su 2 colonne. Per informazioni e supporto, consultare il blog ufficiale oppure la pagina dedicata su Wordpress.org.<br/><br/><h3>Segnalazione BUG - Miglioramento Proattivo</h3>Nel caso in cui si riscontrino anomalie o imperfezioni durante l\'utilizzo di questo modulo, si prega di compilare una segnalazione e di inviarla a <b>milesimarco@outlook.com</b>. In questo modo, oltre a mantenere il plugin sempre aggiornato e privo di problemi per tutti, contribuisci in modo consapevole ad ottenere un prodotto gratuito e sempre aggiornato su cui poter contare. Allo stesso modo, se pensi che questo plugin debba implementare altre funzioni, contatta l\'autore o lascia un commento nella pagina su Wordpress.org!<br/><br/>Grazie per utilizzare Amministrazione Trasparente per Wordpress!<br/>Marco';
}
?>