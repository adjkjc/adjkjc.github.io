
<h1>De PHPlist ontwikkelaars</h1>
<p><b>Laatste Versie</b><br/>
Alvorens een fout te rapporteren, zorg ervoor dat u over de laatste versie beschikt.<br/>
<?php
ini_set('user_agent', NAME.' (PHPlist versie '.VERSION.')');
ini_set('default_socket_timeout', 5);
if ($fp = @fopen('http://www.phplist.com/files/LATESTVERSION', 'r')) {
    $latestversion = fgets($fp);
    $thisversion = VERSION;
    $thisversion = str_replace('-dev', '', $thisversion);
    if (versionCompare($thisversion, $latestversion)) {
        print '<font color=green size=2>Proficiat, u beschikt over de recentste versie</font>';
    } else {
        print '<font color=green size=2>Momenteel gebruikt u niet de recentste versie</font>';
        print '<br/>Uw versie: <b>'.$thisversion.'</b>';
        print '<br/>Recentste versie: <b>'.$latestversion.'</b>  ';
        print '<a href="http://www.phplist.com/files/changelog">Bekijk wat er werd aangepast</a>&nbsp;&nbsp;';
        print '<a href="http://www.phplist.com/files/phplist-'.$latestversion.'.tgz">Download</a>';
    }
} else {
    print '<br/>Controleer op de laatste versie: <a href=http://www.phplist.com/files>hier</a>';
}
?>
<p>PHPlist werd begin 2000 geboren als een klein project voor het
<a href="http://www.nationaltheatre.org.uk" target="_blank">National Theatre</a>. Door de jaren heen
is het uitgegroeid tot een redelijk uitgebreid nieuwsbrief systeem waarbij het aantal
gebruikers zeer snel aangroeid. Desondanks dat de coding voornamelijk maar door één persoon
onderhouden wordt, begint het toch een redelijk complex geheel te vormen. Om dit project te kunnen blijven
onderhouden is hulp van andere personen zeker gewenst.</p>
<p>Om een overvolle mailbox van de ontwikkelaar te vermijden vraag ik u vriendelijk
om geen problemen rechtstreeks te sturen naar <a href="http://tincan.co.uk" target="_blank">Tincan</a>, maar
andere communicatiemethodes te gebuiken zoals de forum. Dit zorgt ervoor dat er niet alleen extra tijd vrij
komt om de ontwikkeling verder te kunnen zetten, maar deze lijst met vragen kan dan ook door  
nieuwe gebruikers aangewend worden om het mailingsysteem beter te leren kennen.</a>.</p>
<p>Om het gemakkelijker te maken voor de gemeenschap zijn er verschillende mogelijkheden beschikbaar:
<ul>
<li>De <a href="http://docs.phplist.com" target="_blank">Documentatie Wiki</a>. De documentatie site is vooral te gebruiken als referentie. Hier wordt het algemeen gebruik van PhpList uit de doeken gedaan.<br/><br/></li>
<li>De <a href="http://www.phplist.com/forums/" target="_blank">Forums</a>. Op de forums moet u zijn om vragen te stellen! Andere gebruikers zullen u graag bijstaan om deze voor u op te lossen.<br/><br/></li>
<li><a href="#bugtrack">Mantis</a>. Mantis geeft een overzicht van gekende problemen en fouten. Ook nieuwe wensen voor PhpList kunnen hier worden opgeven. Hier worden er geen vragen toegelaten!<br/><br/></li>
</ul>
</p><hr>
<h1>Wat kan u doen om te helpen?</h1>
<p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="donate@phplist.com">
<input type="hidden" name="item_name" value="phplist version <?php echo VERSIE?> for <?php echo $_SERVER['HTTP_HOST']?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="bn" value="PP-DonationsBF">
<input type="image" src="images/paypal.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form></p>
<p>Als u een <b>regelmatige gebruiker bent van PHPlist</b> en u denkt dat u de meeste problemen heeft kunnen oplossen, dan kan u helpen door
 <a href="http://www.phplist.com/forums/" target="_blank">vragen van andere gebruikers te beantwoorden</a>, of enkele paginas te schrijven op de <a href="#docscontrib">documentatie site</a>.</p>
<p>Als u <b>nieuw bent voor PHPlist</b> en u heeft problemen om dit project werkende te krijgen voor
uw site, dan kan u helpen door eerst een oplossing te gaan zoeken op bovenstaande locaties alvorens
een "het werkt niet" bericht te posten op het forum. Vaak is het probleem gelinkt met de omgeving
waarop PhpList werd geinstalleerd. Doordat er maar grotendeels één ontwikkelaar zich met dit project
bezig houd, kan het systeem niet op alle mogelijke platformen en PHP versies worden uitgetest.</p>
<h1>U kan nog meer doen om te helpen</h1>
<ul>
<li>
<p>Als u denkt dat PHPlist een grote hulp is voor u, kan u helpen door het project kenbaar te maken aan anderen.
Waarschijnlijk bent u wel al even aan't rondzoeken geweest naar een soortgelijk project en heeft u nu beslist om het
te gaan gebruiken na vergelijking met andere programma's. Ook met deze ervaring kan u reeds andere personen helpen!</p>

<p>Hiervoor kan u <?php echo PageLink2('stemmen', 'Vote')?> voor PHPlist, of een verslagje schrijven op de verschillende
websites die soortgelijke programma's aanbieden. U kan ook andere personen informeren dat je PhpList kent.</p></li>
<li>
<p>U kan ook PhpList <b>vertalen</b> en doorsturen zodat andere gebruikers er ook baat bij hebben.
Controleer hiervoor de <a href="http://docs.phplist.com/PhplistTranslation">Translation Pages</a> in de Wiki.</p></li>
<li>
<p>U kan de verschillende mogelijkheden van PhpList <b>uitproberen</b> en controleren of deze wel allemaal naar behoren werken op uw installatie.
Post ons uw bevindingen op het <a href="http://www.phplist.com/forums/" target="_blank">Forum</a>.</p></li>
<li>
<p>U kan PHPlist gebruiken voor uw betalende klanten (als u sites ontwikkeld) en hen overtuigen dat dit een 
handig programma is om hun doel te berijken, en als zij graag enkele extra mogelijkheden wensen te zien, kan u 
een <b>gesubsidieerde nieuwe uitbreiding</b>, betaald door uw klant, aanvragen. U kan 
mij een bericht sturen <a href="mailto:phplist2@tincan.co.uk?subject=request for quote to change PHPlist">als u hier
meer over wilt weten</a>. De meeste nieuwe mogelijkheden van PhpList worden op vraag van betalende klanten toegevoegd.
Deze klanten worden dan voor een kleine prijs bediend, en de gemeenschap is weer een optie rijker, terwijl de
ontwikkelaars er gedeeltelijk voor betaald worden! :-)</p></li>
<li>
<p>Als u PhpList regelmatig gebruikt en u heeft een <b>redelijk groot aantal inschrijvingen</b> (1000+), dan zijn wij
geintereseerd in uw systeem specificaties, alsook uw verzendings-statistieken. PHPlist zal deze statistieken standaard
opsturen naar <a href="mailto:phplist-stats@tincan.co.uk">phplist-stats@tincan.co.uk</a>, maar verzend hierbij geen
systeem gegevens. Indien u mee wilt helpen om de werking te verbeteren, dan zou het nuttig zijn om ons deze gegevens
te bezorgen op bovenstaand adres. De automatische verzendingen worden niet gelezen door ons, maar lauter geinterpreteerd om
een idee te kunnen vormen over de prestaties en het gebruik van PhpList.</p></li>
</ul>

</p>
<p><b><a name="bugtrack"></a>Mantis</b><br/>
<a href="http://mantis.phplist.com/" target="_blank">Mantis</a> is de verzamelplaats om iets te melden over PhpList.
Dit kan gaan van commentaar, suggesties, verbeteringen of fouten. Indien u een fout opmerkt is het raadzaam om
zoveel mogelijk relevante informatie mee te geven om het de ontwikkelaars gemakkelijker te maken om het probleem op te kunnen lossen.</p>
<p>Begin alvast om uw systeemgegevens te vermelden:</p>

<?php if (!stristr($_SERVER['HTTP_USER_AGENT'], 'firefox')) {
    ?>
<p>Indien u problemen ondervindt, probeer dan eerst eens om FireFox te gebruiken ipv je huidige browser. Dit kan uw probleem soms al oplossen.
<a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=131358&amp;t=81"><img border="0" alt="Get Firefox!" title="Get Firefox!" src="images/getff.gif"/></a>
<?php 
} ?></p>

<p>Uw systeemgegevens zijn:</p>

<ul>
<li>PHPlist versie: <?php echo VERSION?></li>
<li>PHP versie: <?php echo phpversion()?></li>
<li>Browser: <?php echo $_SERVER['HTTP_USER_AGENT']?></li>
<li>Webserver: <?php echo $_SERVER['SERVER_SOFTWARE']?></li>
<li>Website: <a href="http://<?php echo getConfig('website')."$pageroot"?>"><?php echo getConfig('website')."$pageroot"?></a></li>
<li>Mysql Info: <?php echo mysql_get_server_info();?></li>
<li>PHP Modules:<br/><ul>
<?php
$le = get_loaded_extensions();
foreach ($le as $module) {
    print "<LI>$module\n";
}
?>
</ul></li>
</ul>
<p>Opgelet! Alle mails of forum-post die bovenvermelde regels niet respecteren, zullen worden genegeerd.</p>

<p><b><a name="docscontrib"></a>Meewerken aan de documentatie</b><br/>
Als u mee wilt helpen om de documentatie, schrijf u dan in op de <a href="http://tincan.co.uk/?lid=878">Developers Mailinglist</a>.
Op dit moment worden alle medewerkers in een lijst gegroepeerd om hen te kunnen informeren zodat ze niet allemaal hetzelfde werk zouden doen.<br/>
Dus alvoren iets te beginnen, bespreek eerst even allemaal samen jullie ideeen via deze nieuwsbrief!
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></p>
