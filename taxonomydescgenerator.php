<?php

//Disposizioni Generali
$term = get_term_by('name','Programma per la Trasparenza e l\'Integrità','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=> '
<b>Articolo 10, comma 8, lettera a</b>
Ogni amministrazione ha l\'obbligo di pubblicare sul proprio sito istituzionale nella sezione: «Amministrazione trasparente» di cui all\'articolo 9:<br/>
a) il Programma triennale per la trasparenza e l\'integrità ed il relativo stato di attuazione.
'));
$term = get_term_by('name','Atti generali','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 12, comma 1 e 2</b> - Obblighi di pubblicazione concernenti gli atti di carattere normativo e amministrativo generale<br/>
1. Fermo restando quanto previsto per le pubblicazioni nella Gazzetta Ufficiale della Repubblica italiana dalla legge 11 dicembre 1984, n. 839, e dalle relative norme di attuazione, le pubbliche amministrazioni pubblicano sui propri siti istituzionali i riferimenti normativi con i relativi link alle norme di legge statale pubblicate nella banca dati «Normattiva» che ne regolano l\'istituzione, l\'organizzazione e l\'attività. Sono altresì pubblicati le direttive, le circolari, i programmi e le istruzioni emanati dall\'amministrazione e ogni atto che dispone in generale sulla organizzazione, sulle funzioni, sugli obiettivi, sui procedimenti ovvero nei quali si determina l\'interpretazione di norme giuridiche che le riguardano o si dettano disposizioni per l\'applicazione di esse, ivi compresi i codici di condotta.<br/>
2. Con riferimento agli statuti e alle norme di legge regionali, che regolano le funzioni, l\'organizzazione e lo svolgimento delle attività di competenza dell\'amministrazione, sono pubblicati gli estremi degli atti e dei testi ufficiali aggiornati.
'));
$term = get_term_by('name','Oneri informativi per cittadini e imprese','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 34, comma 1 e 2</b> - Trasparenza degli oneri informativi<br/>
1. I regolamenti ministeriali o interministeriali, nonché i provvedimenti amministrativi a carattere generale adottati dalle amministrazioni dello Stato per regolare l\'esercizio di poteri autorizzatori, concessori o certificatori, nonché l\'accesso ai servizi pubblici ovvero la concessione di benefici, recano in allegato l\'elenco di tutti gli oneri informativi gravanti sui cittadini e sulle imprese introdotti o eliminati con gli atti medesimi. Per onere informativo si intende qualunque obbligo informativo o adempimento che comporti la raccolta, l\'elaborazione, la trasmissione, la conservazione e la produzione di informazioni e documenti alla pubblica amministrazione.<br/>
2. Ferma restando, ove prevista, la pubblicazione nella Gazzetta Ufficiale, gli atti di cui al comma 1 sono pubblicati sui siti istituzionali delle amministrazioni, secondo i criteri e le modalità definite con il regolamento di cui all\'articolo 7, commi 2 e 4, della legge 11 novembre 2011, n. 180. Art. 13 - Obblighi di pubblicazione concernenti l\'organizzazione delle pubbliche amministrazioni.
Note
Per onere informativo si intende qualunque obbligo informativo o adempimento che comporti la raccolta, l’elaborazione, la trasmissione, la conservazione e la produzione di informazioni e documenti alla P.A.
'));
$term = get_term_by('name','Attestazioni OIV o struttura analoga','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
Come previsto dalla delibera <b>CiVIT n. 71/2013</b> "Attestazioni OIV sull’assolvimento di specifici obblighi di pubblicazione per l’anno 2013 e attività di vigilanza e controllo della Commissione" sono disponibili in allegato:
 
1. Il documento di attestazione del Nucleo di valutazione sull’assolvimento di specifici obblighi di pubblicazione;
2. La griglia di attestazione.
'));

//Organizzazione
$term = get_term_by('name','Organi di indirizzo politico-amministrativo','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Art. 14</b> - Obblighi di pubblicazione concernenti i componenti degli organi di indirizzo politico<br/>
1. Con riferimento ai titolari di incarichi politici, di carattere elettivo o comunque di esercizio di poteri di indirizzo politico, di livello statale regionale e locale, le pubbliche amministrazioni pubblicano con riferimento a tutti i propri componenti, i seguenti documenti ed informazioni:<br/>
a) l\'atto di nomina o di proclamazione, con l\'indicazione della durata dell\'incarico o del mandato elettivo;<br/>
b) il curriculum;<br/>
c) i compensi di qualsiasi natura connessi all\'assunzione della carica; gli importi di viaggi di servizio e missioni pagati con fondi pubblici;<br/>
d) i dati relativi all\'assunzione di altre cariche, presso enti pubblici o privati, ed i relativi compensi a qualsiasi titolo corrisposti;<br/>
e) gli altri eventuali incarichi con oneri a carico della finanza pubblica e l\'indicazione dei compensi spettanti;<br/>
f) le dichiarazioni di cui all\'articolo 2, della legge 5 luglio 1982, n. 441, nonché le attestazioni e dichiarazioni di cui agli articoli 3 e 4 della medesima legge, come modificata dal presente decreto, limitatamente al soggetto, al coniuge non separato e ai parenti entro il secondo grado, ove gli stessi vi consentano. Viene in ogni caso data evidenza al mancato consenso. Alle informazioni di cui alla presente lettera concernenti soggetti diversi dal titolare dell\'organo di indirizzo politico non si applicano le disposizioni di cui all\'articolo 7.<br/>
2. Le pubbliche amministrazioni pubblicano i dati cui al comma 1 entro tre mesi dalla elezione o dalla nomina e per i tre anni successivi dalla cessazione del mandato o dell\'incarico dei soggetti, salve le informazioni concernenti la situazione patrimoniale e, ove consentita, la dichiarazione del coniuge non separato e dei parenti entro il secondo grado, che vengono pubblicate fino alla cessazione dell\'incarico o del mandato. Decorso il termine di pubblicazione ai sensi del presente comma le informazioni e i dati concernenti la situazione patrimoniale non vengono trasferiti nelle sezioni di archivio.
'));
$term = get_term_by('name','Sanzioni per mancata comunicazione dei dati','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Art. 47</b> - Sanzioni per casi specifici<br/>
1. La mancata o incompleta comunicazione delle informazioni e dei dati di cui all\'articolo 14, concernenti la situazione patrimoniale complessiva del titolare dell\'incarico al momento dell\'assunzione in carica, la titolarità di imprese, le partecipazioni azionarie proprie, del coniuge e dei parenti entro il secondo grado, nonché tutti i compensi cui da diritto l\'assunzione della carica, dà luogo a una sanzione amministrativa pecuniaria da 500 a 10.000 euro a carico del responsabile della mancata comunicazione e il relativo provvedimento è pubblicato sul sito internet dell\'amministrazione o organismo interessato.<br/>
2. La violazione degli obblighi di pubblicazione di cui all\'articolo 22, comma 2, dà luogo ad una sanzione amministrativa pecuniaria da 500 a 10.000 euro a carico del responsabile della violazione. La stessa sanzione si applica agli amministratori societari che non comunicano ai soci pubblici il proprio incarico ed il relativo compenso entro trenta giorni dal conferimento ovvero, per le indennità di risultato, entro trenta giorni dal percepimento.
'));
$term = get_term_by('name','Rendiconti gruppi consiliari regionali/provinciali','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Art. 28 c. 1</b> - Pubblicità dei rendiconti dei gruppi consiliari regionali e provinciali<br/>
1. Le regioni, le province autonome di Trento e Bolzano e le province pubblicano i rendiconti di cui all\'articolo 1, comma 10, del decreto-legge 10 ottobre 2012, n. 174, convertito, con modificazioni, dalla legge 7 dicembre 2012, n. 213, dei gruppi consiliari regionali e provinciali, con evidenza delle risorse trasferite o assegnate a ciascun gruppo, con indicazione del titolo di trasferimento e dell\'impiego delle risorse utilizzate. Sono altresì pubblicati gli atti e le relazioni degli organi di controllo.
'));
$term = get_term_by('name','Articolazione degli uffici','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Art. 13 c. 1 lett. b,c</b> - Obblighi di pubblicazione concernenti l\'organizzazione delle pubbliche amministrazioni<br/>
1. Le pubbliche amministrazioni pubblicano e aggiornano le informazioni e i dati concernenti la propria organizzazione, corredati dai documenti anche normativi di riferimento. Sono pubblicati, tra gli altri, i dati relativi:<br/>
b) all\'articolazione degli uffici, le competenze e le risorse a disposizione di ciascun ufficio, anche di livello dirigenziale non generale, i nomi dei dirigenti responsabili dei singoli uffici;<br/>
c) all\'illustrazione in forma semplificata, ai fini della piena accessibilità e comprensibilità dei dati, dell\'organizzazione dell\'amministrazione, mediante l\'organigramma o analoghe rappresentazioni grafiche.
'));
$term = get_term_by('name','Telefono e posta elettronica','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Art. 13, c. 1 lett. d</b> - Obblighi di pubblicazione concernenti l\'organizzazione delle pubbliche amministrazioni<br/>
1. Le pubbliche amministrazioni pubblicano e aggiornano le informazioni e i dati concernenti la propria organizzazione, corredati dai documenti anche normativi di riferimento. Sono pubblicati, tra gli altri, i dati relativi:<br/>
d) all\'elenco dei numeri di telefono nonché delle caselle di posta elettronica istituzionali e delle caselle di posta elettronica certificata dedicate, cui il cittadino possa rivolgersi per qualsiasi richiesta inerente i compiti istituzionali.
'));

//Consulenti e Collaboratori   ================== MANCA LA DESCRIZIONE DETTAGLIATA
$term = get_term_by('name','Consulenti e collaboratori','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Personale
$term = get_term_by('name','Incarichi amministrativi di vertice','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Dirigenti','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 15 , comma 1,2,5</b> - Obblighi di pubblicazione concernenti i titolari di incarichi dirigenziali e di collaborazione o consulenza<br/>
1 -  Fermi restando gli obblighi di comunicazione di cui all\'articolo 17, comma 22, della legge 15 maggio 1997, n. 127, le pubbliche amministrazioni pubblicano e aggiornano le seguenti informazioni relative ai titolari di incarichi amministrativi di vertice e di incarichi dirigenziali, a qualsiasi titolo conferiti, nonche\' di collaborazione o consulenza:<br/>
a) gli estremi dell\'atto di conferimento dell\'incarico;<br/>
b) il curriculum vitae;<br/>
c) i dati relativi allo svolgimento di incarichi o la titolarita\' di cariche in enti di diritto privato regolati o finanziati dalla pubblica amministrazione o lo svolgimento di attivita\' professionali;<br/>
d) i compensi, comunque denominati, relativi al rapporto di lavoro, di consulenza o di collaborazione, con specifica evidenza delle eventuali componenti variabili o legate alla valutazione del risultato.<br/>
2 - La pubblicazione degli estremi degli atti di conferimento di incarichi dirigenziali a soggetti estranei alla pubblica amministrazione, di collaborazione o di consulenza a soggetti esterni a qualsiasi titolo per i quali è previsto un compenso, completi di indicazione dei soggetti percettori, della ragione dell\'incarico e dell\'ammontare erogato, nonche\' la comunicazione alla Presidenza del Consiglio dei Ministri - Dipartimento della funzione pubblica dei relativi dati ai sensi dell\'articolo 53, comma 14, secondo periodo, del decreto legislativo 30 marzo 2001, n. 165 e successive modificazioni, sono condizioni per l\'acquisizione dell\'efficacia dell\'atto e per la liquidazione dei relativi compensi. Le amministrazioni pubblicano e mantengono aggiornati sui rispettivi siti istituzionali gli elenchi dei propri consulenti indicando l\'oggetto, la durata e il compenso dell\'incarico. Il Dipartimento della funzione pubblica consente la consultazione, anche per nominativo, dei dati di cui al presente comma.<br/>
5 - Le pubbliche amministrazioni pubblicano e mantengono aggiornato l\'elenco delle posizioni dirigenziali, integrato dai relativi titoli e curricula, attribuite a persone, anche esterne alle pubbliche amministrazioni, individuate discrezionalmente dall\'organo di indirizzo politico senza procedure pubbliche di selezione, di cui all\'articolo 1, commi 39 e 40, della legge 6 novembre 2012, n. 190.
'));
$term = get_term_by('name','Posizioni organizzative','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 10 , comma 8, lettera d</b><br/>
8 - Ogni amministrazione ha l\'obbligo di pubblicare sul proprio sito istituzionale nella sezione: «Amministrazione trasparente»
d) i curricula e i compensi dei soggetti di cui all\'articolo 15, comma 1, nonche\' i curricula dei titolari di posizioni organizzative, redatti in conformita\' al vigente modello europeo.'));
$term = get_term_by('name','Dotazione organica','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 16 , comma 1,2</b> - Obblighi di pubblicazione concernenti la dotazione organica e il costo del personale con rapporto di lavoro a tempo indeterminato<br/>
1. Le pubbliche amministrazioni pubblicano il conto annuale del personale e delle relative spese sostenute, di cui all\'articolo 60, comma 2, del decreto legislativo 30 marzo 2001, n. 165, nell\'ambito del quale sono rappresentati i dati relativi alla dotazione organica e al personale effettivamente in servizio e al relativo costo, con l\'indicazione della sua distribuzione tra le diverse qualifiche e aree professionali, con particolare riguardo al personale assegnato agli uffici di diretta collaborazione con gli organi di indirizzo politico.<br/>
2. Le pubbliche amministrazioni, nell\'ambito delle pubblicazioni di cui al comma 1, evidenziano separatamente, i dati relativi al costo complessivo del personale a tempo indeterminato in servizio, articolato per aree professionali, con particolare riguardo al personale assegnato agli uffici di diretta collaborazione con gli organi di indirizzo politico.'));
$term = get_term_by('name','Personale non a tempo indeterminato','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 17 , comma 1,2</b> - Obblighi di pubblicazione dei dati relativi al personale non a tempo indeterminato<br/>
1. Le pubbliche amministrazioni pubblicano annualmente, nell\'ambito di quanto previsto dall\'articolo 16, comma 1, i dati relativi al personale con rapporto di lavoro non a tempo indeterminato, con la indicazione delle diverse tipologie di rapporto, della distribuzione di questo personale tra le diverse qualifiche e aree professionali, ivi compreso il personale assegnato agli uffici di diretta collaborazione con gli organi di indirizzo politico. La pubblicazione comprende l\'elenco dei titolari dei contratti a tempo determinato.<br/>
2. Le pubbliche amministrazioni pubblicano trimestralmente i dati relativi al costo complessivo del personale di cui al comma 1, articolato per aree professionali, con particolare riguardo al personale assegnato agli uffici di diretta collaborazione con gli organi di indirizzo politico.
'));
$term = get_term_by('name','Tassi di assenza','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 16 , comma 3</b> - Obblighi di pubblicazione concernenti la dotazione organica e il costo del personale con rapporto di lavoro a tempo indeterminatoa<br/>
3. Le pubbliche amministrazioni pubblicano trimestralmente i dati relativi ai tassi di assenza del personale distinti per uffici di livello dirigenziale.
'));
$term = get_term_by('name','Incarichi conferiti e autorizzati ai dipendenti','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 18, comma 1</b> - Obblighi di pubblicazione dei dati relativi agli incarichi conferiti ai dipendenti pubblici<br/>
1. Le pubbliche amministrazioni pubblicano l\'elenco degli incarichi conferiti o autorizzati a ciascuno dei propri dipendenti, con l\'indicazione della durata e del compenso spettante per ogni incarico.
'));
$term = get_term_by('name','Contrattazione collettiva','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Art. 21, comma 1</b> - Obblighi di pubblicazione concernenti i dati sulla contrattazione collettiva<br/>
1. Le pubbliche amministrazioni pubblicano i riferimenti necessari per la consultazione dei contratti e accordi collettivi nazionali, che si applicano loro, nonché le eventuali interpretazioni autentiche.
'));
$term = get_term_by('name','Contrattazione integrativa','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 21, comma 2</b>  - Obblighi di pubblicazione concernenti i dati sulla contrattazione collettiva<br/>
2. Fermo restando quanto previsto dall\'articolo 47, comma 8, del decreto legislativo 30 marzo 2001, n. 165, le pubbliche amministrazioni pubblicano i contratti integrativi stipulati, con la relazione tecnico-finanziaria e quella illustrativa certificate dagli organi di controllo di cui all\'articolo 40-bis, comma 1, del decreto legislativo n. 165 del 2001, nonché le informazioni trasmesse annualmente ai sensi del comma 3 dello stesso articolo. La relazione illustrativa, fra l\'altro, evidenzia gli effetti attesi in esito alla sottoscrizione del contratto integrativo in materia di produttività ed efficienza dei servizi erogati, anche in relazione alle richieste dei cittadini.
'));
$term = get_term_by('name','OIV','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 10, comma 8, lettera c</b> - Programma triennale per la trasparenza e l\'integrità<br/>
8. Ogni amministrazione ha l\'obbligo di pubblicare sul proprio sito istituzionale nella sezione: Amministrazione trasparente
c) i nominativi ed i curricula dei componenti degli organismi indipendenti di valutazione di cui all\'articolo 14 del decreto legislativo n. 150 del 2009;
'));

//Bandi di Concorso   ================== MANCA LA DESCRIZIONE DETTAGLIATA
$term = get_term_by('name','Bandi di Concorso','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Performance
$term = get_term_by('name','Piano della Performance','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Relazione sulla Performance','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Dlgs 33/2013 - Articolo 10, comma 8, lettera b</b> - Programma triennale per la trasparenza e l\'integrità<br/>
8. Ogni amministrazione ha l\'obbligo di pubblicare sul proprio sito istituzionale nella sezione: "Amministrazione trasparente" di cui all\'articolo 9:<br/>
b) il Piano e la Relazione di cui all\'articolo 10 del decreto legislativo 27 ottobre 2009, n. 150
'));
$term = get_term_by('name','Ammontare complessivo dei premi','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Dlgs 33/2013 - Articolo 20, comma 1</b> - Obblighi di pubblicazione dei dati relativi alla valutazione della performance e alla distribuzione dei premi al personale<br/>
1. Le pubbliche amministrazioni pubblicano i dati relativi all\'ammontare complessivo dei premi collegati alla performance stanziati e l\'ammontare dei premi effettivamente distribuiti.
'));
$term = get_term_by('name','Dati relativi ai premi','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Dlgs 33/2013 - Articolo 20, comma 2</b> - Obblighi di pubblicazione dei dati relativi alla valutazione della performance e alla distribuzione dei premi al personale<br/>
2. Le pubbliche amministrazioni pubblicano i dati relativi all\'entità del premio mediamente conseguibile dal personale dirigenziale e non dirigenziale, i dati relativi alla distribuzione del trattamento accessorio, in forma aggregata, al fine di dare conto del livello di selettività utilizzato nella distribuzione dei premi e degli incentivi, nonché i dati relativi al grado di differenziazione nell\'utilizzo della premialità sia per i dirigenti sia per i dipendenti.
'));
$term = get_term_by('name','Benessere organizzativo','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Dlgs 33/2013 - Articolo 20, comma 3</b> - Obblighi di pubblicazione dei dati relativi alla valutazione della performance e alla distribuzione dei premi al personale<br/>
3. Le pubbliche amministrazioni pubblicano, altresì, i dati relativi ai livelli di benessere organizzativo.
'));

//Enti controllati   ================== MANCA LA DESCRIZIONE DETTAGLIATA
$term = get_term_by('name','Enti pubblici vigilati','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 22, comma 1, lettera a – Articolo 22 , comma 2, 3</b> - Obblighi di pubblicazione dei dati relativi agli enti pubblici vigilati, e agli enti di diritto privato in controllo pubblico, nonché alle partecipazioni in società di diritto privato<br/>
'));
$term = get_term_by('name','Società partecipate','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 22, comma 1, lettera a – Articolo 22 , comma 2, 3</b> - Obblighi di pubblicazione dei dati relativi agli enti pubblici vigilati, e agli enti di diritto privato in controllo pubblico, nonché alle partecipazioni in società di diritto privato<br/>
'));
$term = get_term_by('name','Enti di diritto privato controllati','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 22, comma 1, lettera a – Articolo 22 , comma 2, 3</b> - Obblighi di pubblicazione dei dati relativi agli enti pubblici vigilati, e agli enti di diritto privato in controllo pubblico, nonché alle partecipazioni in società di diritto privato<br/>
'));
$term = get_term_by('name','Rappresentazione grafica','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Articolo 22, comma 1, lettera a – Articolo 22 , comma 2, 3</b> - Obblighi di pubblicazione dei dati relativi agli enti pubblici vigilati, e agli enti di diritto privato in controllo pubblico, nonché alle partecipazioni in società di diritto privato<br/>
'));

//Attività e procedimenti
$term = get_term_by('name','Dati aggregati attività amministrativa','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Dlgs 33/2013 - Articolo 24, comma 1</b> - Obblighi di pubblicazione dei dati aggregati relativi all\'attività amministrativa<br/>
1. Le pubbliche amministrazioni che organizzano, a fini conoscitivi e statistici, i dati relativi alla propria attività amministrativa, in forma aggregata, per settori di attività, per competenza degli organi e degli uffici, per tipologia di procedimenti, li pubblicano e li tengono costantemente aggiornati.
'));
$term = get_term_by('name','Tipologie di procedimento','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>'
<b>Dlgs 33/2013 - Articolo 35, comma 1 e 2</b> - Obblighi di pubblicazione relativi ai procedimenti amministrativi e ai controlli sulle dichiarazioni sostitutive e l\'acquisizione d\'ufficio dei dati<br/>
1. Le pubbliche amministrazioni pubblicano i dati relativi alle tipologie di procedimento di propria competenza. Per ciascuna tipologia di procedimento sono pubblicate le seguenti informazioni:<br/>
a) una breve descrizione del procedimento con indicazione di tutti i riferimenti normativi utili;<br/>
b) l\'unità organizzativa responsabile dell\'istruttoria;<br/>
c) il nome del responsabile del procedimento, unitamente ai recapiti telefonici e alla casella di posta elettronica istituzionale, nonché, ove diverso, l\'ufficio competente all\'adozione del provvedimento finale, con l\'indicazione del nome del responsabile dell\'ufficio, unitamente ai rispettivi recapiti telefonici e alla casella di posta elettronica istituzionale;<br/>
d) per i procedimenti ad istanza di parte, gli atti e i documenti da allegare all\'istanza e la modulistica necessaria, compresi i fac-simile per le autocertificazioni, anche se la produzione a corredo dell\'istanza è prevista da norme di legge, regolamenti o atti pubblicati nella Gazzetta Ufficiale, nonché gli uffici ai quali rivolgersi per informazioni, gli orari e le modalità di accesso con indicazione degli indirizzi, dei recapiti telefonici e delle caselle di posta elettronica istituzionale, a cui presentare le istanze;
e) le modalità con le quali gli interessati possono ottenere le informazioni relative ai procedimenti in corso che li riguardino;<br/>
f ) il termine fissato in sede di disciplina normativa del procedimento per la conclusione con l\'adozione di un provvedimento espresso e ogni altro termine procedimentale rilevante;<br/>
g) i procedimenti per i quali il provvedimento dell\'amministrazione può essere sostituito da una dichiarazione dell\'interessato, ovvero il procedimento può concludersi con il silenzio assenso dell\'amministrazione;<br/>
h) gli strumenti di tutela, amministrativa e giurisdizionale, riconosciuti dalla legge in favore dell\'interessato, nel corso del procedimento e nei confronti del provvedimento finale ovvero nei casi di adozione del provvedimento oltre il termine predeterminato per la sua conclusione e i modi per attivarli;<br/>
i) il link di accesso al servizio on line, ove sia già disponibile in rete, o i tempi previsti per la sua attivazione;<br/>
l) le modalità per l\'effettuazione dei pagamenti eventualmente necessari, con le informazioni di cui all\'articolo 36;<br/>
m) il nome del soggetto a cui è attribuito, in caso di inerzia, il potere sostitutivo, nonché le modalità per attivare tale potere, con indicazione dei recapiti telefonici e delle caselle di posta elettronica istituzionale;<br/>
n) i risultati delle indagini di customer satisfaction condotte sulla qualità dei servizi erogati attraverso diversi canali, facendone rilevare il relativo andamento.<br/>
2. Le pubbliche amministrazioni non possono richiedere l\'uso di moduli e formulari che non siano stati pubblicati; in caso di omessa pubblicazione, i relativi procedimenti possono essere avviati anche in assenza dei suddetti moduli o formulari. L\'amministrazione non può respingere l\'istanza adducendo il mancato utilizzo dei moduli o formulari o la mancata produzione di tali atti o documenti, e deve invitare l\'istante a integrare la documentazione in un termine congruo.
'));
$term = get_term_by('name','Monitoraggio tempi procedimentali','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Dichiarazioni sostitutive e acquisizione d\'ufficio dei dati','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Provvedimenti
$term = get_term_by('name','Provvedimenti organi indirizzo-politico','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Provvedimenti dirigenti','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Controlli sulle imprese
$term = get_term_by('name','Controlli sulle imprese','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Bandi di gara e contratti
$term = get_term_by('name','Bandi di gara e contratti','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Sovvenzioni, contributi, sussidi, vantaggi economici
$term = get_term_by('name','Criteri e modalità','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Atti di concessione','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Bilanci
$term = get_term_by('name','Bilancio preventivo e consuntivo','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Piano degli indicatori e risultati attesi di bilancio','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Beni immobili e gestione patrimonio
$term = get_term_by('name','Patrimonio immobiliare','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Canoni di locazione o affitto','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Controlli e rilievi sull'amministrazione
$term = get_term_by('name','Controlli e rilievi sull\'amministrazione','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Servizi erogati
$term = get_term_by('name','Carta dei servizi e standard di qualità','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Costi contabilizzati','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Tempi medi di erogazione dei servizi','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','Liste di attesa','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Pagamenti dell' amministrazione
$term = get_term_by('name','Indicatore di tempestività dei pagamenti','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));
$term = get_term_by('name','IBAN e pagamenti informatici','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Opere pubbliche
$term = get_term_by('name','Opere pubbliche','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Pianificazione e governo del territorio
$term = get_term_by('name','Pianificazione e governo del territorio','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Informazioni ambientali
$term = get_term_by('name','Informazioni ambientali','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Strutture sanitarie private accreditate
$term = get_term_by('name','Strutture sanitarie private accreditate','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Interventi straordinari e di emergenza
$term = get_term_by('name','Interventi straordinari e di emergenza','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

//Altri contenuti
$term = get_term_by('name','Altri contenuti','tipologie');	
wp_update_term($term->term_id, 'tipologie', array('description'=>''));

?>