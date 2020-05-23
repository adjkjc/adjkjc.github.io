
<h3>La comunit&agrave; di PHPlist</h3>
<p><b>Ultima Versione</b><br/>
Accertatevi di utilizzare l'ultima versione prima di segnalare un bug.</p>
<?php
ini_set('user_agent', NAME.' (phplist version '.VERSION.')');
ini_set('default_socket_timeout', 5);
if ($fp = @fopen('http://www.phplist.com/files/LATESTVERSION', 'r')) {
    $latestversion = fgets($fp);
    $thisversion = VERSION;
    $thisversion = str_replace('-dev', '', $thisversion);
    if (versionCompare($thisversion, $latestversion)) {
        print '<span class="highlight">Congratulazioni, state usando l\'ultima versione</span>';
    } else {
        print '<span class="highlight">Non state usando l\'ultima versione</span>';
        print '<br/>La tua versione: <b>'.$thisversion.'</b>';
        print '<br/>Ultima versione: <b>'.$latestversion.'</b>  ';
        print '<a href="http://www.phplist.com/files/changelog">Visualizza cosa &egrave; cambiato</a>&nbsp;&nbsp;';
        print '<a href="http://www.phplist.com/files/phplist-'.$latestversion.'.tgz">Download</a>';
    }
} else {
    print "<br/>Controlla l'ultima versione: <a href=http://www.phplist.com/files>Qui</a>";
}
?>
<p><i>PHPlist</i> &egrave; stata creata agli inizi del 2000 come una piccola applicazione per il <a href="http://www.nationaltheatre.org.uk" target="_blank">Royal National Theatre di Londra</a>. Col tempo si &egrave; sviluppato come un sistema abbastanza completo per l'invio di newsletter e il numero di siti che lo utilizzano &egrave; cresciuto rapidamente. Sebbene il codice base sia principalmente mantenuto da una persona, sta diventando gradulamente molto complesso e al fine assicurare la qualit&agrave; sar&agrave necessaria la partecipazione di pi&ugrave; persone.</p>
<p>Per evitare di intasare la caselle postali degli sviluppatori, siete gentilmente pregati di non inviare le vostre richieste direttamente a <a href="http://tincan.co.uk" target="_blank">Tincan</a>, ma di utilizzare gli altri metodi di comunicazione disponibili. Questo, non solo permette di lasciare pi&ugrave; tempo allo sviluppo dell'applicazione, ma permette anche di creare uno storico delle domande, che possono essere usate dai nuovi utenti per familiarizzare col sistema</a>.</p>
<p>Per agevolare la comunit&agrave; PHPlist sono disponibili diverse risorse:</p>
<ul>
<li>La <a href="http://docs.phplist.com" target="_blank">Documentazione Wiki</a>. Il sito della documentazione serve principalemnte per la consultazione, non potete quindi inviare richieste a questa fonte.<br/><br/></li>
<li>I <a href="http://www.phplist.com/forums/" target="_blank">Forums</a>. Dal momento che ci sar&agrave; qualcuno a rispondervi, i Forum sono il posto ideale per inviare le vostre domande.<br/><br/></li>
<li><a href="#bugtrack">Mantis</a>. Mantis &egrave; un indicatore di traccia. Pu&ograve; essere usato per inviare domande specifiche e per segnalare bug. Non pu&ograve; essere usato per richieste di supporto o di assistenza.<br/><br/></li>
</ul>
<hr/>
<h3>Cosa potete fare per aiutarci</h3>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick" />
<input type="hidden" name="business" value="donate@phplist.com" />
<input type="hidden" name="item_name" value="phplist version <?php echo VERSION?> for <?php echo $_SERVER['HTTP_HOST']?>" />
<input type="hidden" name="no_note" value="1" />
<input type="hidden" name="currency_code" value="GBP" />
<input type="hidden" name="tax" value="0" />
<input type="hidden" name="bn" value="PP-DonationsBF" />
<input type="image" class="noborder" src="images/paypal.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
</form>
<p>Se siete <b>utenti abituali di PHPlist</b> e pensate di essere riusciti a risolvere la maggior parte dei problemi, potete aiutarci <a href="http://www.phplist.com/forums/" target="_blank">rispondendo alle domande di altri utenti</a> o scrivendo nuove pagine nel <a href="#docscontrib">sito della documentazione</a>.</p>
<p>Se siete <b>nuovi utenti di PHPlist</b> e avete problemi nel far funzionare la configurazione sul vostro sito, potete provare a cercare la soluzione nelle fonti sopracitate prima di inviare un messaggio "non funziona". Spesso i problemi che avete possono essere relativi all'ambiente su cui la vostra installazione di PHPlist sta funzionando. Avere solamente uno sviluppatore per PHPlist presenta lo svantaggio che il sistema non pu&ograve; essere testato su ogni piattaforma e su ogni versione di PHP.</p>
<h3>Altre cose che potete fare per aiutarci</h3>
<ul class="otherhelp">

<li><p>Se pensate che PHPlist sia di grande aiuto, perch&egrave; non ci aiutate ad informare gli altri della sua esistenza? Probabilmente avete fatto un grosso sforzo per trovarlo e decidere di utilizzarlo, dopo averlo confrontato con altre applicazioni simili, quindi la vostra esperienza pu&ograve essere di beneficio ad altre persone.</p><p>Per fare questo, puoi <?php echo PageLink2('vote', 'Votare')?> per PHPlist, o scrivere una recensione nei siti che elencano questo tipo di applicazioni. Potete inoltre parlarne alle persone che conoscete.</p></li>
<li><p>Potete <b>Tradurre</b> PHPlist nella vostra lingua e inviarci la traduzione. Per aiutarci controlla le <a href="http://docs.phplist.com/PhplistTranslation">Pagine di traduzione</a> sul Wiki.</p></li>
<li><p>Potete <b>Provare</b> tutte le varie caratteristiche di PHPlist e controllare che funzionino bene. Inviate i vostri risultati nei <a href="http://www.phplist.com/forums/" target="_blank">Forums</a>.</p></li>
<li><p>Potete usare PHPlist a pagamento per i vostri clienti (Se siete una agenzia-web per esempio) e convincerli che questo &egrave un ottimo strumento per raggiungere i loro obiettivi. In seguito, se desiderano alcuni cambiamenti potete <b>commissionare nuove caratteristiche</b> che saranno pagate dai vostri clienti. Se desiderate sapere quanto costerebbe aggiungere caratteristiche a PHPlist, <a href="mailto:phplist2@tincan.co.uk?subject=request for quote to change PHPlist">Basta cliccare qui</a>. La maggior parte delle nuove caratteristiche di PHPlist sono state aggiunte su richiesta di clienti paganti. Da questo trarrete vantaggio voi, pagando solo una piccola somma per realizzare i vostri obiettivi,la comunit&agrave;, ottenendo nuove caratteristiche, e gli sviluppatori venendo pagati per il lavoro svolto su PHPlist :-)</p></li>
<li><p>Se usate PHPlist abitualmente e avete un <b>numero discretamente grande di iscritti</b> (1000+), siamo interessati alle specifiche del vostro sistema, e a ricevere le vostre statistiche. Per default PHPlist trasmetter&agrave; le statistiche a <a href="mailto:phplist-stats@tincan.co.uk">phplist-stats@tincan.co.uk</a>, ma non viene inviato nessun dettaglio del sistema. Se desiderate aiutarci al fine di migliorare il sistema, sarebbe ottimo se ci comunicaste le specifiche, e lasciaste di default l'invio della statistica al suddetto indirizzo. L'indirizzo serve solo a ricevere i dati, non viene letto da persone, che saranno analizzati per capire la qualit&agrave; del rendimento di PHPlist.</p></li>
</ul>
<p><b><a name="bugtrack"></a>Mantis</b><br/>
<a href="http://mantis.tincan.co.uk/" target="_blank">Mantis</a> &egrave; il sito in cui potete riportare i problemi che avete riscontrato in phplist. Oltre a questp, potete riportare qualsiasi cosa relativa a phplist, commenti e sugerimenti su come migliorarlo o il resoconto di un bug. Se inserite il resoconto di un bug, assicuratevi di includere pi&ugrave; informazioni possibili per facilitare gli sviluppatori nel risolvere il problema.</p>
<p>I requisiti minimi per riportare un bug sono i dettagli del vostro sistema:</p>
<?php if (!stristr($_SERVER['HTTP_USER_AGENT'], 'firefox')) {
    ?>
<p>Se trovate dei problemi, provate a usare Firefox per vedere se cos&igrave; il problema &egrave risolto.
<a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=131358&amp;t=81"><img border="0" alt="Get Firefox!" title="Get Firefox!" src="images/getff.gif"/></a></p>
<?php 
} ?>
<p class="information">I dettagli del vostro sistema sono:</p>
<div class="systemdetails">
<ul>
<li>phplist version: <?php echo VERSION?></li>
<li>PHP version: <?php echo phpversion()?></li>
<li>Browser: <?php echo $_SERVER['HTTP_USER_AGENT']?></li>
<li>Webserver: <?php echo $_SERVER['SERVER_SOFTWARE']?></li>
<li>Website: <a href="http://<?php echo getConfig('website')."$pageroot"?>"><?php echo getConfig('website')."$pageroot"?></a></li>
<li>Mysql Info: <?php echo mysql_get_server_info();?></li>
<li>PHP Modules:<br/><ul class="modules">
<?php
$le = get_loaded_extensions();
foreach ($le as $module) {
    print "         <li>$module</li>";
}
?>
</ul></li>
</ul>
</div>
<p>Attenzione, le emails che non utilizzano questo sistema, o i forum saranno ignorati.</p>

<p><b><a name="docscontrib"></a>Contribuite alla documentazione</b><br/>
Se volete aiutare scrivendo la documentazione, iscrivetevi a <a href="http://tincan.co.uk/?lid=878">Mailinglist Sviluppatori</a>. In questo momento documentatori e sviluppatori condividono la mailinglist, perch&egrave; i loro interessi coincidono e condividere le informazioni &egrave utile. <br/>
Prima di fare qualsiasi cosa, discutetene nella mailinglist e una volta che l'idea &egrave; stata valuta potrete realizzarla.</p>
</p>
