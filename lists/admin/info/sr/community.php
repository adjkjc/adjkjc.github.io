
<h3>phplist zajednica</h3>
<p><b>Najnovija verzija</b><br/>
Molimo proverite da li koristite najnoviju verziju pre prijave greške (bug-a).</p>
<?php
ini_set('user_agent', NAME.' (phplist version '.VERSION.')');
ini_set('default_socket_timeout', 5);
if ($fp = @fopen('http://www.phplist.com/files/LATESTVERSION', 'r')) {
    $latestversion = fgets($fp);
    $thisversion = VERSION;
    $thisversion = str_replace('-dev', '', $thisversion);
    if (versionCompare($thisversion, $latestversion)) {
        print '<span class="highlight">Čestitamo, koristite najnoviju verziju</span>';
    } else {
        print '<span class="highlight">Ne koristite najnoviju verziju</span>';
        print '<br/>Vaša verzija: <b>'.$thisversion.'</b>';
        print '<br/>najnovija verzija: <b>'.$latestversion.'</b>  ';
        print '<a href="http://www.phplist.com/files/changelog">Pregledajte izmene</a>&nbsp;&nbsp;';
        print '<a href="http://www.phplist.com/files/phplist-'.$latestversion.'.tgz">Preuzmi</a>';
    }
} else {
    print '<br/>Proverite koja je najnovija verzija: <a href=http://www.phplist.com/files>ovde</a>';
}
?>
<p><i>phplist</i> je napravljen rane 2000. godine kao mala aplikacija za
<a href="http://www.nationaltheatre.org.uk" target="_blank">National Theatre</a>.
Tokom vremena je porastao u dosta obiman bilten sistem i 
broj sajtova koji ga koristi je naglo porastao. Iako izvorni kod primarno održava
jedna osoba, počinje da bude veoma kompleksan, i obezbeđivanje njegovog
kvaliteta će zahtevati ulaganje mnogo više ljudi.</p>
<p>Da bi izbegli zagušivanje email sandučića programera, ljubazno vas
molimo da ne šaljete upite direktno <a href="http://tincan.co.uk" target="_blank">Tincan-u</a>, i
umesto toga koristite druge dostupne metode komunikacije. Ne samo da ovo oslobađa
vreme za nastavak razvoja, već i stvara istoriju pitanja, koja može biti
iskorišćena od strane korisnika da se upoznaju sa sistemom.</p>
<p>Za olakšanje phplist zajednici, postoji nekoliko opcija:</p>
<ul>
<li><a href="http://docs.phplist.com" target="_blank">Wiki dokumentacija</a>. Sajt dokumentacije je uglavnom za referencu, i ne bi trebalo ostavljati pitanja na njemu.<br/><br/></li>
<li><a href="http://forums.phplist.com/" target="_blank">Forumi</a>. Forumi su mesto za ostavljanje vaših pitanja i mesto za druge da na njih odgovore.<br/><br/></li>
<li><a href="#bugtrack">Mantis</a>. Mantis je dnevnik za praćenje pitanja/problema. On se može koristiti za zahtev novih opcija i prijavu grešaka. Ne može se koristiti za helpdesk pitanja.<br/><br/></li>
</ul>
<hr/>
<h3>Šta možete učiniti da pomognete</h3>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick" />
<input type="hidden" name="business" value="donate@phplist.com" />
<input type="hidden" name="item_name" value="phplist version <?php echo VERSION?> for <?php echo $_SERVER['HTTP_HOST']?>" />
<input type="hidden" name="no_note" value="1" />
<input type="hidden" name="currency_code" value="GBP" />
<input type="hidden" name="tax" value="0" />
<input type="hidden" name="bn" value="PP-DonationsBF" />
<input type="image" class="noborder" src="images/paypal.gif" name="submit" alt="Plaćajte sa PayPal-om - brzo, besplatno i sigurno!" />
</form>
<p>Ako ste <b>redovan phplist korisnik</b> i mislite da imate iskustva sa većinom njegovih pitanja,
možete pomoći <a href="http://forums.phplist.com/" target="_blank">odgovaranjem na pitanja
drugih korisnika</a>, ili pisanjem strana na <a href="#docscontrib">sajtu za dokumentaciju</a>.</p>
<p>Ako ste <b>novi phplist korisnik</b> i imate problema sa podešavanjem rada sistema na
vašem sajtu, možete pomoći tako što ćete prvo probati da nađete rešenje na lokacijama iznad, pre
postavljanja "to ne radi" poruke. Često su problemi koje imate vezani za okruženje
na kome je pokrenuta vaša phplist instalacija. Nedostatak rada samo jednog programera na
unapređenju phplist sistema je da on ne može biti temeljno testiran na svakoj platformi
i svakoj verziji PHP-a.</p>
<h3>Druge stvari koje možete učiniti da pomognete</h3>
<ul class="otherhelp">
<li><p>Ako mislite da vam je phplist velika pomoć, zašto ne bi obavestili više ljudi
o njegovom postojanju. Verovatno ste uložili priličan trud da ga pronađete i odlučite koristiti posle
upoređivanja sa ostalim sličnim aplikacijama, pa možete pomoći drugim ljudima da iskoriste 
vaše iskustvo.</p>

<p>Da to uradite, možete <?php echo PageLink2('vote', 'Glasati')?> za phplist, ili napisati recenzije na
sajtovima koji izlistavaju aplikacije. Možete takođe reći ostalim ljudima da znate o njemu.</p>
</li>
<li><p>Možete <b>Prevesti</b> phplist u vaš jezik i podneti prevod.
Da pomognete posetite <a href="http://docs.phplist.com/PhplistTranslation">Strane prevoda</a> na Wiki-ju.</p>
</li>
<li>
<p>Možete <b>Isprobati</b> sve opcije phplist sistema i proveriti da li rade kod vas.
Molimo napišite vaša zapažanja na <a href="http://forums.phplist.com/" target="_blank">Forumu</a>.</p>
</li>
<li>
<p>Možete koristiti phplist za vaše klijente (na primer ako ste veb prodavnica) i ubedite ih
da je sistem odličan alat za postizanje njihovih ciljeva. Onda ako žele neke izmene na sistemu
možete <b>naručiti nove funkcije</b> koje će platiti vaši klijenti. Ako želite da znate
koliko bi koštalo dodavanje novih fukncija u phplist sistem, <a href="mailto:phplist2@tincan.co.uk?subject=Request%20for%20quote%20to%20change%20phplist">stupite u kontakt</a>.
Većina novih phplist funkcija je dodato zahtevom od strane plaćajućih klijenata. Od ovoga ćete imati koristi
vi tako što ćete platiti malu cenu za postizanje vaših ciljeva, imaće koristi zajednica tako što će dobiti nove
funkcije, i imaće koristi programeri tako što će biti plaćeni za rad na phplist sistemu :-)</p>
</li>
<li>
<p>Ako redovno koristite phplist i imate <b>veoma veliki broj pretplatnika</b> (1000+),
zainteresovani smo za specifikaciju vašeg sistema i statistiku slanja. phplist podrazumevano šalje
statistiku na <a href="mailto:phplist-stats@tincan.co.uk">phplist-stats@tincan.co.uk</a>, ali neće
poslati detalje sistema. Ako želite da pomognete da stvari rade bolje, bilo bi sjajno
kad bi nam rekli specifikacije vašeg sistema, i ostavite da se podrazumevana statistika šalje na gore pomenutu adresu.
Adresa služi samo kao primalac, ne otvaraju je ljudi, ali ćemo je analizirati da bi shvatili
koliko dobro funkcioniše phplist sistem.</p>
</li>
</ul>

<p><b><a name="bugtrack"></a>Mantis</b><br/>
<a href="http://mantis.phplist.com/" target="_blank">Mantis</a> je mesto za slanje pitanja/problema koje pronađete
u phplist sistemu. Vaše pitanje može biti bilo šta vezano za phplist, komentari i sugestije kako ga unaprediti 
ili izveštaj o grešci (bug-u). Ako prijavljujete grešku, postarajte se da navedete što je više informacija moguće kako
bi olakšali programerima u rešavanju problema.</p>
<p>Minimalni zahtevi za prijavljivanje greške su detalji vašeg sistema:</p>

<?php if (!stristr($_SERVER['HTTP_USER_AGENT'], 'firefox')) {
    ?>
<p>Ako imate problema, molimo probajte da koristite Firefox i vidite da li to rešava problem.
<a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=131358&amp;t=81"><img border="0" alt="Preuzmi Firefox!" title="Preuzmi Firefox!" src="images/getff.gif"/></a></p>
<?php 
} ?>

<p class="information">Detalji vašeg sistema su:</p>
<div class="systemdetails">
<ul>
<li>phplist verzija: <?php echo VERSION?></li>
<li>PHP verzija: <?php echo phpversion()?></li>
<li>Veb čitač: <?php echo $_SERVER['HTTP_USER_AGENT']?></li>
<li>Veb server: <?php echo $_SERVER['SERVER_SOFTWARE']?></li>
<li>Veb sajt: <a href="http://<?php echo getConfig('website')."$pageroot"?>"><?php echo getConfig('website')."$pageroot"?></a></li>
<li>Mysql Info: <?php echo mysql_get_server_info();?></li>
<li>PHP moduli:<br/><ul class="modules">
<?php
$le = get_loaded_extensions();
foreach ($le as $module) {
    print "         <li>$module</li>";
}
?>
</ul></li>
</ul>
</div>
<p>Molimo obratite pažnju, email-ovi koji ne koriste ovaj sistem ili forume će biti ignorisani.</p>

<p><b><a name="docscontrib"></a>Doprinos dokumentaciji</b><br/>
Ako želite da pomognete u pisanju dokumentacije, molimo da se prijavite na <a href="http://www.phplist.com/mailing_lists">Programersku  Mail listu</a>. U ovom trenutku pisci dokumentacije i programeri dele jednu mail listu, zato što im se interesi preklapaju i korisno je za deljenje informacija. <br/>
Pre početka pisanja, prodiskutujte bitna pitanja na mail listi i pošto su ideje utvrđene možete početi sa pisanjem.
</p>