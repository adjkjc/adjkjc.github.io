
<h3>A phplist közösség</h3>
<p><b>Legújabb verzió</b><br/>
Kérjük, hogy hiba bejelentésekor győződjön meg róla, hogy a legújabb verziót használja-e.<br/>
<?php
ini_set('user_agent', NAME.' (phplist version '.VERSION.')');
ini_set('default_socket_timeout', 5);
if ($fp = @fopen('http://www.phplist.com/files/LATESTVERSION', 'r')) {
    $latestversion = fgets($fp);
    $thisversion = VERSION;
    $thisversion = str_replace('-dev', '', $thisversion);
    if (versionCompare($thisversion, $latestversion)) {
        print '<span class="highlight">Gratulálunk! Ön a legújabb verziót használja</span>';
    } else {
        print '<span class="highlight">Ön nem a legújabb verziót használja</span>';
        print '<br/>Az Ön verziója: <b>'.$thisversion.'</b>';
        print '<br/>A legújabb verzió: <b>'.$latestversion.'</b>  ';
        print '<a href="http://www.phplist.com/files/changelog">Tekintse meg, mi változott</a>&nbsp;&nbsp;';
        print '<a href="http://www.phplist.com/files/phplist-'.$latestversion.'.tgz">Letöltés</a>';
    }
} else {
    print '<br/>A legújabb verzió ellenőrzése: <a href=http://www.phplist.com/files/>itt</a>';
}
?>
<p>A <i>phplist</i> 2000. elején a 
<a href="http://www.nationaltheatre.org.uk" target="_blank">Brit Nemzeti színház</a> számára készített kis 
alkalmazásként indult. Azóta meglehetősen széleskörű  hírlevélrendszerré
nőtte ki magát, s megszaporodott az azt használó webhelyek száma. 
Noha a kódalapot elsősorban egy személy tartja karban, nagyon összetetté kezd válni, és
a minőség bizrosítása sok ember közreműködését fogja megkövetelni.</p>
<p>A fejlesztők postaládája megtelésémek elkerülése végett tisztelettel kérjük,
hogy az érdeklődéseket ne közvetlenül a <a href="http://tincan.co.uk" target="_blank">Tincan</a> részére küldjék, hanem
a rendelkezésre álló egyéb kommunikációs lehetőségeket vegyék igénybe. Ez nem csak 
a fejlesztésre fordítható időt szabadít fel, hanem kérdések előzményét is eredményezi, amin keresztül 
az új felhasználók megismerkedhetnek ezzel a rendszerrel</a>.</p>
<p>A phplist közösség tevékenységének elősegítésére több lehetőség áll rendelkezésre:
<ul>
<li><a href="http://docs.phplist.com" target="_blank">Dokumentációs wiki</a>. A dokumentációs webhely leginkább tájékoztató jellegű, ahol nem lehet kérdéseket beküldeni.<br/><br/></li>
<li><a href="http://forums.phplist.com/" target="_blank">Fórum</a>. A fórum az a hely, ahol felteheti a kérdéseit, s a többiek megválaszolják őket.<br/><br/></li>
<li><a href="#bugtrack">Mantis</a>. A Mantis egy hibakövető. Ez használható a funkciókérések beküldéséhez és a hibák bejelentéséhez. Ügyfélszolgálati kérdésekhez nem használható.<br/><br/></li>
</ul>
</p><hr/>
<h3>Miben segíthet?</h3>
<p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="donate@phplist.com">
<input type="hidden" name="item_name" value="phplist version <?php echo VERSION?> for <?php echo $_SERVER['HTTP_HOST']?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="bn" value="PP-DonationsBF">
<input type="image" src="images/paypal.gif" border="0" name="submit" alt="Adományok a PayPalen keresztül - gyors, ingyenes és biztonságos!">
</form></p>
<p>Ha Ön a <b>phplist rendszeres használója</b>, s úgy gondolja, hogy alaposan kiismerte,
<a href="http://forums.phplist.com/" target="_blank">a többi felhasználó kérdéseinek megválaszolásával</a>. vagy a <a href="#docscontrib">dokumentáció</a> kiegészítésével segíthet.</p>
<p>Ha Ön <b>új phplist-felhasználó</b>, s problémái vannak a webhelyén történő telepítésével vagy használatával,
a fenti helyeken próbálkozhat a megoldás felkutatásával, mielőtt beküldené a "nem működik" 
hozzászólást. A felmerülő problémák gyakran a phplist telepítést futtató környezettel kapcsolatosak. 
Mivel a phplistnek csak egy fejlesztője van, ez azzal a hátránnyal jár, hogy a rendszert 
nem lehet minden környezetben és minden PHP-verzióval alaposan letesztelni.</p>
<h3>Egyéb dolgok, melyekben segíthet</h3>
<ul>
<li><p>Ha úgy gondolja, hogy bevált Önnek a phplist, miért nem értesíti róla
az ismerőseit? Bizonyára sokat fáradozott, amíg megtalálta, s a használata mellett döntött,
miután összehasonlította más hasonló alkalmazásokkal, szóval az Ön tapasztalata
segíthet másoknak.</p>

<p>Ezt úgy teheti meg, ha <?php echo PageLink2('vote', 'szavaz')?> a phplistre, vagy megírja a véleményét
a szkriptgyűjteményekben. Ismerőseinek is nyugodtan beszélhet róla.
</li>
<li><p><b>Lefordíthatja</b> a phplistet az Ön nyelvére, s beküldheti a fordítást.
A besegítéshez keresse fel a <a href="http://docs.phplist.com/PhplistTranslation">fordítási oldalakat</a> a wikiben.
</p>
</li>
<li>
<p>A PHPlist valamennyi funkcióját <b>kipróbálhatja</b>, s leellenőrizheti, hogy megfelelőek-e az Ön számára.
Kérjük, hogy észrevételeit küldje be a <a href="http://forums.phplist.com/" target="_blank">fórumban</a>.</p></li>
<li>
<p>A phplistet használhatja fizetős ügyfelei számára (ha Ön például webfejlesztő), s meggyőzheti őket arról,
hogy ez egy kiváló rendszer a céljaik megvalósításában. Aztán ha ők módosításokat akarnak,
Ön <b>kidolgozhat új funkciókat</b>, melyekért az Ön ügyfelei fizetnek. Ha meg szeretné tudni, hogy
mennyibe kerülne funkciók hozzáadása a phplisthez, <a href="mailto:phplist2@tincan.co.uk?subject=request for quote to change phplist">lépjen velünk kapcsolatba</a>.
A phplist legtöbb új funkciója fizetős ügyfelek kérésére készül. Ez megéri Önnek, 
mert egy kis összeget fizet ki a céljai elérésére, megéri a közösségnek, mert új funkciókat kapnak, 
s megéri a fejlesztőknek, mert a phplisten végzett munkáért anyagi juttatást kapnak :-)</p></li>
<li><p>Ha rendszeresen használja a phplistet, s <b>meglehetősen nagy feliratkozója van</b> (1000+), érdekelnek
minket az Ön rendszerspecifikációi és küldési statisztikái. A phplist alapértelmezésként elküldi a statisztikát
a <a href="mailto:phplist-stats@tincan.co.uk">phplist-stats@tincan.co.uk</a> címre, a rendszer adatait viszont
nem küldi el. Ha szeretne segíteni a rendszer tökéletesítésében, nagyon örülnénk neki,
ha megírná nekünk a rendszerinformációkat, s változatlanul hagyná a statisztika fenti, alapértelmezett címét.
A fenti címre érkező küldeményeket az emberek nem olvashatják el, mi viszont kielemezzük, 
hogy mennyire teljesít jól a phplist.</p></li>
</ul>

</p>
<p><b><a name="bugtrack"></a>Mantis</b><br/>
A <a href="http://mantis.phplist.com/" target="_blank">Mantis</a> az a hely, ahol bejelentheti a phplist használata során felmerülő problémákat. A bejelentés bármi lehet, ami a phplisttel kapcsolatos, észrevételek és javaslatok a továbbfejlesztéséhez, vagy hibabejelentések. Hibabejelentés esetén bizonyosodjon meg róla, hogy a lehető legtöbb információt adta-e meg, megkönnyítve a fejlesztők munkáját a probléma megoldásában.</p>
<p>A hibabejelentés minimális követelménye a rendszerinformációk megadása:</p>

<?php if (!stristr($_SERVER['HTTP_USER_AGENT'], 'firefox')) {
    ?>
<p>Ha problémákba ütközik, kérjük, győződjön meg róla, hogy Firefox böngészőt használ-e, ugyanis ez megoldhatja a problémát.
<a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=131358&amp;t=81"><img border="0" alt="Get Firefox!" title="Get Firefox!" src="images/getff.gif"/></a>
<?php 
} ?>

</p>
<p>Az Ön rendszeradatai:</p>

<ul>
<li>phplist verzió: <?php echo VERSION?></li>
<li>PHP-verzió: <?php echo phpversion()?></li>
<li>Böngésző: <?php echo $_SERVER['HTTP_USER_AGENT']?></li>
<li>Webkiszolgáló: <?php echo $_SERVER['SERVER_SOFTWARE']?></li>
<li>Webhely: <a href="http://<?php echo getConfig('website')."$pageroot"?>"><?php echo getConfig('website')."$pageroot"?></a></li>
<li>MySQL-információ: <?php echo mysql_get_server_info();?></li>
<li>PHP-modulok:<br/><ul>
<?php
$le = get_loaded_extensions();
foreach ($le as $module) {
    print "<LI>$module\n";
}
?>
</ul></li>
</ul>
<p>Ne feledje, e-mailek nem használják ezt a rendszert, vagy a fórumok figyelmen kívül lesznek hagyva.</p>

<p><b><a name="docscontrib"></a>Közreműködés a dokumentációban</b><br/>
Ha be szeretne segíteni a dokumentáció írásába, kérjük, jelentkezzen a <a href="http://tincan.co.uk/?lid=878">fejlesztői levelező listára</a>. A dokumentációsoknak és a fejlesztőknek pillanatnyilag közös levelező listájuk van, mert érdekeltségeik fedik egymást, s az információk megosztása hasznos dolog. <br/>
Mielőtt bármit is tesz, vitassa meg a problémákat a levelező listán, s az ötletek kidolgozása után távozhat és elvégezheti a dolgát.

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
