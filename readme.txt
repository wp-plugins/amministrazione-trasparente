=== Amministrazione Trasparente ===
Contributors: Milmor
Tags: amministrazione, aperta, trasparente, documenti, atti, spese, comuni, pa, amministrazioni, locali, pubblicazione, online, imprese, enti, scuola, università, comunità, montana, valle, modulo, software, gratuito, disposizioni, obbligo, legge, comune, modulo, decreto, 14 marzo, 2013, sovvenzioni, pubblici, pubblico, marco, milesi
Requires at least: 3.3
Tested up to: 3.6
Version: 3
Stable tag: 3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Soluzione completa per la pubblicazione dei documenti ai sensi del D.lgs. n. 33 del 14/03/2013: pubblicità, trasparenza e diffusione di informazioni.


== Description ==
= Premessa =

Soluzione **gratuita** e **completa** per la pubblicazione online dei documenti ai sensi del D.lgs. n. 33 del 14/03/2013, riguardante il riordino della disciplina degli obblighi di pubblicità, trasparenza e diffusione di informazioni da parte delle pubbliche amministrazioni, in attuazione dell’art. 1, comma 35, della legge n. 190/2012.

A chi si rivolge questo software? La normativa richiede l'utilizzo del software a enti locali e pubbliche amministrazioni: comuni, province, comunità montane, istituti scolastici (scuole, università) e associazioni pubbliche.

= Perchè scegliere "Amministrazione Trasparente" per Wordpress? =

Amministrazione Trasparente è stato sviluppato seguendo tre criteri: **Flessibilità**, **Semplicità** e **Velocità di inserimento**.

L'intero modulo gestisce infatti ogni voce come singolo articolo permettendo una comodità di aggiornamento senza pari! In particolare in ogni voce è possibile inserire file, immagini, testi, link o anche effettuare un reindirizzamento automatico a un'altra pagina. Per esempio, per inserire i recapiti telefonici non è necessario scriverli in Microsoft Word per poi caricare il file, ma basta semplicemente scriverlo!

> [DEMO](http://amministrazionetrasparente.marcomilesi.ml) | [INSTALLAZIONE](http://wordpress.org/plugins/amministrazione-trasparente/installation/) | [GUIDA PDF PER UFFICI](http://amministrazionetrasparente.marcomilesi.ml/guida_amministrazionetrasparente.pdf)

> Esempi: [Comune di San Pellegrino Terme](http://www.comune.sanpellegrinoterme.bg.it/comune/trasparenza/)

= Caratteristiche del Plugin =
* Aggiornamenti periodici (**aggiornate sempre per garantirvi continui miglioramenti e nuove funzioni!**)
* Inserimento flessibile, intuitivo e veloce
* Soluzione ideale per ogni tipo di informazione
* Gestione completa di tutte le 56 categorie richieste dalla legge
* Ogni documento è gestito singolarmente
* Permessi di pubblicazione ereditati degli articoli (autore, editore,...)
* Funzione di reindirizzamento delle voci
* Codice leggero, commentato e facilmente modificabile
* Doppia visualizzazione a scelta grazie a 2 shortcode: modalità lista e modalità tabella (2 colonne)
* Funzione di redirect automatico per ogni articolo
* Visualizzazione automatica degli allegati caricati nella pagina
* Widget personalizzabile con 2 modalità di visualizzazione
* Compatibilità completa per **Pasw2013** (visualizzazione archivio/singola modificate appositamente)

= CONTATTI & SUPPORTO =
Per qualsiasi informazione, per segnalare problemi o per suggerire nuove funzioni, inoltra il Tuo suggerimento a [milesimarco@outlook.com](mailto:milesimarco@outlook.com) oppure via Skype: milesimarco94

http://www.youtube.com/watch?v=qWj9hvzNSlg

== Installation ==

http://www.youtube.com/watch?v=qWj9hvzNSlg

1. Carica il contenuto estratto nella cartella `/wp-content/plugins/`
2. Attiva il plugin dal menu 'Plugins' in WordPress
3. Inserire in una pagina o in un articolo i seguenti tag disponibili:

* [at-head] => Mostra un sommario delle voci cliccabili. Da usare nella stessa pagina di [at-list] o [at-table]
* [at-desc] => Mostra la descrizione di Amministrazione Trasparente.
* [at-list] => Visualizza una lista di tutte le voci/sottovoci di A.T.
* [at-table] => Visualizza una lista a 2 colonne di A.T.

Una buona pagina potrebbe contenere i seguenti tag:

* [at-desc]
* [at-head]
* [at-list] oppure [at-table]

Ogni tag può essere inserito nel template utilizzando una funzione del tipo: `<?php echo do_shortcode('[at-list]') ?>`

4. A questo punto basta inserire le voci selezionando, dal menù di amministrazione, Trasparenza > Nuova Voce
5. Questo plugin funziona bene con la maggior parte dei temi Wordpress. Il plugin usa automaticamente template personalizzati per chi usa PASW2013!

= Modifica Template Archivio - [+] Info Normativa • Torna al sommario =
Chi non utilizza il tema Pasw2013 può comunque abilitare la visualizzazione della descrizione espandibile e il link 'Torna al sommario' sotto il titolo degli archivi dei documenti modificando il file archive.php (il nome può cambiare) dalla cartella contenente i file del tema attivo.

Per abilitarla, aprire il file aggiungendo '<?php if (function_exists('at_archive_buttons')) { at_archive_buttons(); } ?>' subito sotto al codice che genera il titolo.

== Screenshots ==
1. Menù Laterale
2. Pagina di inserimento Documento
3. Esempio visualizzazione in modalità tabella
4. Box di selezione della tipologia
5. Comoda opzione di Redirect
6. Visualizzazione Archivio Personalizzata (automatica su PASW2013; da aggiungere nel template negli altri temi con la funzione '<?php at_archive_buttons(); ?>')


== Changelog ==
> Questa è la lista completa di tutti gli aggiornamenti, test e correzioni. Ogni volta che una nuova versione viene rilasciata assicuratevi di aggiornare il prima possibile per usufruire delle ultime migliorie!

= Versione 3  =
* Aggiunta opzione **WIDGET** "Visualizza solo sulle pagine archivio e singole dei documenti"
* Aggiunto file **single.php** con visualizzazione tipologia [SOLO PASW2013]
* Aggiunta funzione utilizzabile in tutti i temi per mostrare la descrizione della tipologia e il pulsante "Torna al Sommario"(vedi [Installazione](http://wordpress.org/plugins/amministrazione-trasparente/installation/))
* Abilitato **supporto per i TAG**
* Aggiunta opzione per forzare l'utilizzo dei template PASW2013 (abilitare se è installata una versione precedente o se è stato cambiato il nome del tema (vedi impostazioni plugin)
* Aggiunto avviso di mancato inserimento ID per l'impostazione "Torna alla lista" - rimozione del campo 'URL'
* Nuova **Guida PDF** per gli uffici [scaricabile gratuitamente](http://wordpress.org/plugins/amministrazione-trasparente/)

* **Migliorato filtraggio** documenti nella gestione web (codice + snello & visualizzazione più pulita)
* Migliorata suddivisione logica dei file del plugin
* Modificata stringa "Torna alla lista" in "Torna al sommario"
* Migliorato CSS widget: testo e 'pulsanti [+]' sono più piccoli
* Riscritto pannello informazioni del plugin
* Riscritto file ReadMe

* BugFix - Forzato aggiornamento automatico dei Permalink all'attivazione/disattivazione del plugin
* BugFix - Migliorata la funzione di switch template per pasw2013
* BugFix - Sostituzione funzione deprecata get_current_theme() con wp_get_theme()
* BugFix - Sistemata posizione link "Questo sito utilizza il modulo Wordpress Amministrazione Trasparente" in [at-table]

= Versione 2.2.1 27/07/2013 =
* BugFix - Eliminata visualizzazione template personaizzato in tutti gli archivi

= Versione 2.2 26/07/2013 =
* Visualizzazione automatica di tutti i formati di allegati

= Versione 2.1.3 24/07/2013 =
* Aggiunto aggiornamento automatico dei Permalink all'attivazione
* BugFix - Correzione stringa Copyright (se attiva in at-list)

= Versione 2.1.2 23/07/2013 =
* Correzione stringa Metabox Redirect
* BugFix - Risolto problema che causava l'apparizione dello shortcode sempre in alto

= Versione 2.1.1 23/07/2013 =
* Risolto Problema changelog
* Aggiunti screenshot per wordpress.org

= Versione 2.1 23/07/2013 =
* I titoli dei documenti nell'archivio PASW2013 sono ora in h3
* Aggiunta possibilità di usare i riassunti
* Aggiunto possibilità di usare le revisioni
* Aggiunta slug /trasparenza/ al post di /tipologie/
* Aggiunta paginazione archivio /page/2
* Metabox per il reindirizzamento più visibile (sopra il riquadro "Pubblica")
* BugFix - Risolta mancata attivazione archivio PASW2013 in configurazioni "Case-Sensitive"

= Versione 2.0 22/07/2013 =
* Nuovo tag [at-head] per mostrare un sommario delle voci
* Nuovo tag [at-desc] per mostare la descrizione dell'iniziativa Amministrazione Trasparente
* Nuova funzione per reindirizzare gli articoli a pagine già esistenti o esterne
* Nuovo Widget con tutte le categorie (possibilità di categorie espandibili)
* Aggiunta visualizzazione numero post e tipologie in "Stato Attuale" (bacheca wp-admin)
* Template archivio speciale per PASW2013 (+riferimenti normativi +pulsante "Torna alla lista" - da specificare nelle impostazioni!)
* BugFix - Sistemato spazio # stringa "Programma per la Trasparenza e l'#Integrità"

= Versione 1.2.1 08/07/2013 =
* Miglioramento strutturale del codice (Accessibilità L.Stanca 2004 e successive)

= Versione 1.2 05/07/2013 =
* Possibilità di filtrare i documenti (back-end)
* Modifica pagina "Informazioni" in "Info & Aiuto", con più dettagli

= Versione 1.1.1.2 04/07/2013 =
* Modifica file ReadMe

= Versione 1.1.1.1 =
* Modifica file ReadMe

= Versione 1.1.1 =
* Correzione Stable Tag repository wordpress
* Correzione CSS background (back-end)
* Correzione stringhe front-end (list/table)

= Versione 1.1 =
* Aggiunta testo introduttivo - front-end
* Integrazione PressTrends - I/O
* Visualizzazione automatica file allegati

= Versione 1.0 03/07/2013 =
* Prima release

= Versione 0.1-0.2 =
* Lancio del Progetto
* Programmazione funzionalità

(!) = Aggiornamento Importante (Sicurezza/Stabilità)