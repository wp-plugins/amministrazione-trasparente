Amministrazione-Trasparente 0.1alpha running on Wordpress 3.5.2
<?php
echo '<br/><b>' . 'Disposizioni Generali' . '</b>';
$nome_tipologia = "Programma per la Trasparenza e l\' Integrità";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Atti generali";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';
$nome_tipologia = "Oneri informativi per cittadini e imprese";
echo '<li><a href="' . get_term_link( $nome_tipologia, 'tipologie' ) . '" alt="' . $nome_tipologia . '">' . $nome_tipologia . '</a></li>';

echo '<br/><b>' . 'Organizzazione' . '</b>';
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
?>