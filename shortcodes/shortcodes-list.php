<?php

//Disposizioni Generali
echo '<a id="disposizionigenerali"><h3>' . 'Disposizioni Generali' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Programma per la Trasparenza e l'Integrità"; //L'output del nome qui sotto è impostato per togliere lo spazio tra l'#integrità
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Atti generali";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Oneri informativi per cittadini e imprese";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Organizzazione
echo '<a id="organizzazione"><h3>' . 'Organizzazione' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Organi di indirizzo politico-amministrativo";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Sanzioni per mancata comunicazione dei dati";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Rendiconti gruppi consiliari regionali/provinciali";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Articolazione degli uffici";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Telefono e posta elettronica";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Consulenti e collaboratori
echo '<a id="consulentiecollaboratori"><h3>' . 'Consulenti e collaboratori' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Consulenti e collaboratori";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Personale
echo '<a id="personale"><h3>' . 'Personale' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Incarichi amministrativi di vertice";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Dirigenti";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Posizioni organizzative";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Dotazione organica";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Personale non a tempo indeterminato";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Tassi di assenza";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Incarichi conferiti e autorizzati ai dipendenti";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Contrattazione collettiva";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Contrattazione integrativa";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "OIV";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Bandi di Concorso
echo '<a id="bandidiconcorso"><h3>' . 'Bandi di Concorso' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Bandi di Concorso";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Performance
echo '<a id="performance"><h3>' . 'Performance' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Piano della Performance";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Relazione sulla Performance";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Ammontare complessivo dei premi";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Dati relativi ai premi";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Benessere organizzativo";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Enti controllati
echo '<a id="enticontrollati"><h3>' . 'Enti controllati' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Enti pubblici vigilati";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Società partecipate";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Enti di diritto privato controllati";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Rappresentazione grafica";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Attività e procedimenti
echo '<a id="attivitaeprocedimenti"><h3>' . 'Attività e procedimenti' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Dati aggregati attività amministrativa";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Tipologie di procedimento";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Monitoraggio tempi procedimentali";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Dichiarazioni sostitutive e acquisizione d'ufficio dei dati";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Provvedimenti
echo '<a id="provvedimenti"><h3>' . 'Provvedimenti' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Provvedimenti organi indirizzo-politico";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Provvedimenti dirigenti";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Controlli sulle imprese
echo '<a id="controllisulleimprese"><h3>' . 'Controlli sulle imprese' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Controlli sulle imprese";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Bandi di gara e contratti
echo '<a id="bandidigaraecontratti"><h3>' . 'Bandi di gara e contratti' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Bandi di gara e contratti";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Sovvenzioni, contributi, sussidi, vantaggi economici
echo '<a id="sovvenzionicontributisussidivantaggieconomici"><h3>' . 'Sovvenzioni, contributi, sussidi, vantaggi economici' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Criteri e modalità";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Atti di concessione";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Bilanci
echo '<a id="bilanci"><h3>' . 'Bilanci' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Bilancio preventivo e consuntivo";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Piano degli indicatori e risultati attesi di bilancio";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Beni immobili e gestione patrimonio
echo '<a id="beniimmobiliegestionepatrimonio"><h3>' . 'Beni immobili e gestione patrimonio' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Patrimonio immobiliare";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Canoni di locazione o affitto";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Controlli e rilievi sull'amminiztrazione
echo '<a id="controllierilievisullamministrazione"><h3>' . 'Controlli e rilievi sull\'amministrazione' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Controlli e rilievi sull'amministrazione";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Servizi erogati
echo '<a id="servizierogati"><h3>' . 'Servizi erogati' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Carta dei servizi e standard di qualità";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Costi contabilizzati";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Tempi medi di erogazione dei servizi";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Liste di attesa";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Pagamenti dell' amministrazione
echo '<a id="pagamentidellamministrazione"><h3>' . 'Pagamenti dell\'amministrazione' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Indicatore di tempestività dei pagamenti";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "IBAN e pagamenti informatici";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Opere pubbliche
echo '<a id="operepubbliche"><h3>' . 'Opere pubbliche' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Opere pubbliche";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Pianificazione e governo del territorio
echo '<a id="pianificazioneegovernodelterritorio"><h3>' . 'Pianificazione e governo del territorio' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Pianificazione e governo del territorio";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Informazioni ambientali
echo '<a id="informazioniambientali"><h3>' . 'Informazioni ambientali' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Informazioni ambientali";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Strutture sanitarie private accreditate
echo '<a id="strutturesanitarieprivateaccreditate"><h3>' . 'Strutture sanitarie private accreditate' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Strutture sanitarie private accreditate";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Interventi straordinari e di emergenza
echo '<a id="interventistraordinariediemergenza"><h3>' . 'Interventi straordinari e di emergenza' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Interventi straordinari e di emergenza";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul>';

//Altri contenuti
echo '<a id="altricontenuti"><h3>' . 'Altri contenuti' . '</h3></a>';
echo '<ul>';
$nome_tipologia = "Altri contenuti";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
echo '</ul><div class="clear"></div><br/>';

$get_show_love = get_option('at_option_love');
if ($get_show_love == '1') {
	echo '<hr><div style="font-size:0.8em;">Questo sito utilizza il modulo Wordpress <a href="http://wordpress.org/plugins/amministrazione-trasparente/" rel="nofollow" title="Plugin Amministrazione Trasparente per Wordpress">Amministrazione Trasparente</a></div>';
}

?>