
<h3>La communaut&eacute; PHPlist</h3>
<p><b>Derni&egrave;re Version</b><br/>
V&eacute;rifiez que vous utilisez la derni&egrave;re version de PHPlist avant de soumettre un rapport de bug. <br/>
<?php
ini_set('user_agent', NAME.' (PHPlist version '.VERSION.')');
ini_set('default_socket_timeout', 5);
if ($fp = @fopen('http://www.phplist.com/files/LATESTVERSION', 'r')) {
    $latestversion = fgets($fp);
    $thisversion = VERSION;
    $thisversion = str_replace('-dev', '', $thisversion);
    if (versionCompare($thisversion, $latestversion)) {
        print '<span class="highlight">F&eacute;licitations, vous utilisez la derni&egrave;re version de PHPlist</span>';
    } else {
        print '<span class="highlight">Vous n\'utilisez pas la derni&egrave;re version de PHPlist</span>';
        print '<br/>Votre version: <b>'.$thisversion.'</b>';
        print '<br/>La derni&egrave;re version disponible: <b>'.$latestversion.'</b>  ';
        print '<a href="http://www.phplist.com/files/changelog">Pour voir ce qui a chang&eacute;</a>&nbsp;&nbsp;';
        print '<a href="http://www.phplist.com/files/phplist-'.$latestversion.'.tgz">T&eacute;l&eacute;charger</a>';
    }
} else {
    print '<br/>T&eacute;l&eacute;charger la derni&egrave;re version de PHPlist: <a href=http://www.phplist.com/files>ici</a>';
}
?>
<p>PHPlist a &eacute;t&eacute; cr&eacute;&eacute; d&eacute;but 2000 sous la forme d'un petit logiciel pour le
<a href="http://www.nationaltheatre.org.uk" target="_blank">National Theatre</a> &amp;agrave; Londres. Avec le temps, c'est devenu un syst&egrave;me de Gestion des Relations-Client&egrave;le assez complet, et le nombre de sites qui utilisent PHPlist a rapidement augment&eacute;. M&amp;ecirc;me si l'essentiel du code continue d'&amp;ecirc;tre d&eacute;velopp&eacute; par une seule personne, le logiciel devient de plus en plus complexe, et en garantir le bon fonctionnement exige des retours et des contributions de la part de beaucoup de monde. </p>
<p>Afin d'eviter de remplir les boîtes aux lettres des d&eacute;veloppeurs, ayez la gentillesse de ne pas envoyer de questions directement &amp;agrave; <a href="http://tincan.co.uk" target="_blank">Tincan</a>, et optez plut&amp;ocirc;t pour les autres moyens de communication disponibles. Non seulement cela lib&egrave;re du temps pour que les d&eacute;veloppeurs puissent continuer &amp;agrave; am&eacute;liorer PHPlist, mais cela permet &eacute;galement de cr&eacute;er une archive des questions qui peuvent servir aux autres abonn&eacute;s, ou aux futurs abonn&eacute;s. </a>. </p>
<p>Pour faire partie de &amp;agrave; la communaut&eacute; PHPlist, vous avez plusieurs options &amp;agrave; votre disposition:
<ul>
<li>Les <a href="http://www.phplist.com/forums/" target="_blank">Forums de discussion</a></li>
<li>Le <a href="#bugtrack">Bug Tracker</a> (pour les rapports de bugs)</li>
</ul>
</p><hr/>
<h3>Ce que vous pouvez faire pour aider</h3>
<p>Si vous &amp;ecirc;tes un <b>abonn&eacute; habitu&eacute; &amp;agrave; travailler avec PHPlist</b> et que vous pensez avoir compris la plupart des probl&egrave;mes que l'on peut rencontrer, vous pouvez aider en r&eacute;pondant aux questions d'autres abonn&eacute;s moins exp&eacute;riment&eacute;s. </p>
<p>Si vous &amp;ecirc;tes un <b>nouvel abonn&eacute; de PHPlist</b> et vous avez des probl&egrave;mes pour le mettre en route sur votre site, essayez d'abord de trouver la solution &amp;agrave; votre probl&egrave;me en allant sur les sites mentionn&eacute;s ci-dessus, avant d'envoyer un message disant "bon sang, &amp;ccedil;a marche pas!". Tr&egrave;s souvent, les probl&egrave;mes sur lesquels vous butez sont d&ucirc;s &amp;agrave; l'environnement dans lequel vous travaillez. Avoir un seul d&eacute;veloppeur pour PHPlist a un d&eacute;savantage majeur : c'est de ne pas pouvoir tester le syst&egrave;me &amp;agrave; fond sur d'autres plateformes ou avec toutes les versions de PHP. </p>
<h3>D'autres choses que vous pouvez faire pour aider</h3>
<ul>
<li><p>Si vous pensez que PHPlist vous est d'une grande utilit&eacute;, pourquoi ne pas en faire la pub autour de vous?  Vous avez probablement fait un effort pour trouver ce logiciel et vous avez bien r&eacute;fl&eacute;chi avant de d&eacute;cider de l'utiliser apr&egrave;s l'avoir compar&eacute; &amp;agrave; d'autres logiciels similares. Vous pouvez faire profiter d'autres personnes de votre exp&eacute;rience. </p>
<p>Pour ce faire, vous pouvez <?php echo PageLink2('vote', 'Voter')?> pour PHPlist, ou &eacute;crire des revues de presse sur les sites qui parlent de logiciels. Vous pouvez &eacute;galement dire aux gens autour de vous que vous connaissez ce logiciel. </li>
<li><p>Vous pouvez <b>Traduire</b> PHPlist dans votre langue et soumettre votre traduction. Nous esp&eacute;rons pouvoir am&eacute;liorer l'internationalisation de PHPlist, mais pour le moment, il vous suffit de traduire le fichier <i>english.inc</i>. </p>
</li>
<li>
<p>Vous pouvez <b>Tester</b> toutes les fonctionnalit&eacute;s de PHPlist et v&eacute;rifier si elles vous conviennent. Merci de mettre en ligne le r&eacute;sultat de vos exp&eacute;rimentations sur les <a href="http://www.phplist.com/forums/" target="_blank">Forums</a>. </p></li>
<li>
<p>Vous pouvez utiliser PHPlist pour vos clients commerciaux (si votre entreprise est sur internet) et les convaincre que ce syst&egrave;me est un bon outil de travail. Et si vos clients veulent quelques changements, vous pouvez <b>demander la cr&eacute;ation de nouvelles fonctionnalit&eacute;s</b> que vous pouvez facturer &amp;agrave; vos clients. Pour savoir combien cela co&ucirc;te d'ajouter des fonctionnalit&eacute;s &amp;agrave; PHPlist, <a href="mailto:phplist@tincan.co.uk?subject=request for quote to change PHPlist">contactez-nous</a>. La plupart des nouvelles fonctionnalit&eacute;s de PHPlist ont &eacute;t&eacute; le fait de clients commerciaux. En travaillant ainsi, tout le monde profite de nouvelles fonctionnalit&eacute;s &amp;agrave; prix r&eacute;duit: vous pourrez atteindre vos objectifs, la communaut&eacute; des abonn&eacute;s profitera &eacute;galement des nouvelles fonctionnalit&eacute;s, et cela aidera &eacute;galement les d&eacute;veloppeurs &amp;agrave; continuer de travailler sur PHPlist :-)</p></li>
<li><p>Si vous utilisez PHPlist r&eacute;guli&egrave;rement, et que vous avez <b>un assez grand nombre d'abonn&eacute;s</b> (1000+), nous aimerions connaître vos sp&eacute;cifications techniques, et les statistiques sur les envois (send-statistics). Par defaut, PHPlist  enverra des statistiques &amp;agrave; <a href="mailto:phplist-stats@tincan.co.uk">phplist-stats@tincan.co.uk</a>, mais le logiciel n'enverra aucun d&eacute;tail sur votre syst&egrave;me. Si vous voulez nous aider &amp;agrave; am&eacute;liorer le logiciel, &amp;ccedil;a serait vraiment bien de nous envoyer les sp&eacute;cifications de votre syst&egrave;me, et autoriser l'envoi des statistiques &amp;agrave; l'adresse ci-dessus. L'adresse est juste une boîte aux lettres, personne ne lira le courrier, mais tout est analys&eacute; pour juger de la performance de PHPlist. </p></li>
</ul>

<hr/>
<p><b><a name="lists"></a>Liste de diffusion</b><br/>
PHPlist a eu, en son temps, une liste de diffusion, mais elle a &eacute;t&eacute; &eacute;limin&eacute;e. Mais vous pouvez consulter les archives de cette liste. Pour mieux utiliser PHPlist, vous pouvez plut&amp;ocirc;t regarder ce qui se passe dans les <a href="#forums">forums</a>. <li>Pour lire les archives de la liste de diffusion, cliquez <a href="http://lists.cupboard.org/archive/tincan.co.uk" target="_blank">ici</a>
</ul>
</p>
<p><b><a name="bugtrack"></a>Bugtrack</b><br/>
Pour signaler un bug, allez sur <a href="http://mantis.tincan.co.uk/" target="_blank">http://mantis.tincan.co.uk</a>
et cr&eacute;&eacute;z-vous un compte. Vous recevrez un mot de passe par email. <br/>
Vous pouvez ensuite rentrer dans le syst&egrave;me "mantis" et soumettre votre rapport. </p>
<p>Voici les informations sur votre syst&egrave;me:</p>
<ul>
<li>PHPlist version: <?php echo VERSION?></li>
<li>PHP version: <?php echo phpversion()?></li>
<li>Serveur Web : <?php echo getenv('SERVER_SOFTWARE')?></li>
<li>Site Internet : <a href="http://<?php echo getConfig('website')."$pageroot"?>"><?php echo getConfig('website')."$pageroot"?></a></li>
<li>Information sur la version Mysql utilis&eacute;e : <?php echo mysql_get_server_info();?></li>
<li>Modules PHP : affichage des modules utilis&eacute;s<br/><ul>
<?php
$le = get_loaded_extensions();
foreach ($le as $module) {
    print "<LI>$module\n";
}
?>
</ul></li>
</ul>
<p>Vous pouvez &eacute;galement utiliser ces informations pour demander que de nouvelles fonctionnalit&eacute;s soient install&eacute;es. </p>
<p>Veuillez noter que tout e-mail qui n'utilise pas ce syst&egrave;me de r&eacute;f&eacute;rence, ou qui ne profite pas des informations contenues sur les forums sera ignor&eacute;. </p>