
<h3>Comunidad PHPlist</h3>
<p><b>&Uacute;ltima versi&oacute;n</b><br/>
Cuando vaya a presentar una notificaci&oacute;n de errores
aseg&uacute;rese de que tiene la &uacute;ltima versi&oacute;n.<br/>
<?php
ini_set('user_agent', NAME.' (PHPlist version '.VERSION.')');
ini_set('default_socket_timeout', 5);
if ($fp = @fopen('http://www.phplist.com/files/LATESTVERSION', 'r')) {
    $latestversion = fgets($fp);
    $thisversion = VERSION;
    $thisversion = str_replace('-dev', '', $thisversion);
    if (versionCompare($thisversion, $latestversion)) {
        print '<span class="highlight">Enhorabuena, est&aacute; utilizando la &uacute;ltima versi&oacute;n</span>';
    } else {
        print '<span class="highlight">No est&aacute; utilizando la &uacute;ltima versi&oacut;n</span>';
        print '<br/>Su versi&oacut;n: <b>'.$thisversion.'</b>';
        print '<br/>&Uacute;ltima versi&oacute;n: <b>'.$latestversion.'</b>  ';
        print '<a href="http://www.phplist.com/files/changelog">Ver los cambios</a>&nbsp;&nbsp;';
        print '<a href="http://www.phplist.com/files/phplist-'.$latestversion.'.tgz">Descargar</a>';
    }
} else {
    print '<br/>Ver cu&aacute;l es la &uacute;ltima versi&oacute;n: <a href=http://www.phplist.com/files>aqu&iacute;</a>';
}
?>
<p>PHPlist naci&oacute; a principios del a&ntilde;o 2000 como un
peque&ntilde;o programa para el <a
href="http://www.nationaltheatre.org.uk" target="_blank">National
Theatre</a>, la compa&ntilde;&iacute;a de teatro nacional de Gran
Breta&ntilde;a. Desde entonces ha crecido hasta convertirse en un
completo sistema de gesti&oacute;n de relaciones con los clientes, y
el n&uacute;mero de sitios web que lo utilizan ha aumentado
enormemente. El c&oacute;digo lo mantiene de momento una sola persona,
pero est&aacute; comenzando a ser muy complejo, y va a hacer falta la
contribuci&oacute;n de mucha m&aacute;s gente para mantener la calidad.</p>
<p>Para evitar bloquear el buz&oacute;n de los programadores, se les
ruega que no env&iacute;en preguntas directamente a <a
href="http://tincan.co.uk" target="_blank">Tincan</a>, sino que usen
alg&uacute;n otro de los medios de comunicaci&oacute;n
disponibles. Esto no solo deja a los programadores m&aacute;s tiempo
libre para desarrollar el sistema, sino que crea un historial de
preguntas que puede servir a los usuarios nuevos para que se
familiaricen con &eacute;l.</p>
<p>Hay distintas opciones para ayudar a la comunidad PHPlist:
<ul>
<li>Los <a href="http://www.phplist.com/forums/" target="_blank">Foros</a></li>
<li>El <a href="#bugtrack">Bug Tracker</a> (seguimiento de errores)</li>
</ul>
</p><hr/>
<h3>C&oacute;mo puede ayudar</h3>
<p>Si usted <b>utiliza PHPlist habitualmente</b> y cree haber
descubierto la mayor parte de sus recovecos puede ayudar respondiendo
a las preguntas de otros usuarios.</p>
<p>Si usted <b>empieza ahora con PHPlist</b> y est&aacute; teniendo
problemas para instalarlo en su sitio web puede ayudar intentando
primeramente encontrar la soluci&oacute;n a sus problemas en los
lugares mencionados m&aacute;s arriba, antes de colgar un mensaje tipo
&#171;esto no funciona&#187;. Los problemas a menudo est&aacute;n
relacionados con el entorno en el que est&aacute; funcionando su
instalaci&oacute;n de PHPlist. El tener un &uacute;nico programador en
PHPlist tiene la desventaja de que no se puede probar el sistema en
todas las plataformas ni con todas las versiones de PHP.</p>
<h3>Otras cosas que puede hacer para ayudar</h3>
<ul>
<li><p>Si PHPlist le resulta &uacute;til, podr&iacute;a ayudar a
difundirlo. Probablemente realiz&oacute; un cierto esfuerzo para
encontrarlo y tomar la decisi&oacute;n de utilizarlo despu&eacute;s de
haberlo comparado con otros programas similares. Podr&iacute;a ayudar a otras personas a beneficiarse de su experiencia.</p>

<p>Para ello <?php echo PageLink2('vote', 'Vote')?> por PHPlist, o
escriba rese&ntilde;as en los sitios que enumeran este tipo de
programas. Tambi&eacute;n puede informar sobre el programa
directamente a otras personas.
</li>
<li><p>Puede <b>Traducir</b> PHPlist a su idioma y compartir la
traducci&oacute;n. Esperamos mejorar la internacionalizaci&oacute;n,
pero de momento solo tiene que traducir el fichero <i>english.inc</i>.</p>
</li>
<li>
<p>Puede <b>Probar</b> todas las funciones de PHPlist y comprobar si
le sirven para sus necesidades. Por favor informe sobre los resultados
de sus pruebas en los <a href="http://www.phplist.com/forums/" target="_blank">Foros</a>.</p></li>
<li>
<p>Puede usar PHPlist para sus clientes de pago (por ejemplo si usted
mantiene servidores web) y demostrarles que el sistema es una
herramienta estupenda para sus objetivos. Si le piden cambios puede
<b>encargar nuevas funciones</b> que pagar&iacute;an sus clientes. Si
quiere saber cu&aacute;nto costar&iacute;a a&ntilde;adir funciones a PHPlist <a href="mailto:phplist@tincan.co.uk?subject=request for quote to change PHPlist">preg&uacute;ntenos</a>.
La mayor parte de las nuevas funciones de PHPlist las a&ntilde;adimos
por solicitud de clientes de pago. Se beneficia usted pagando una
peque&ntilde;a cantidad para lograr sus objetivos, se beneficia la
comunidad obteniendo nuevas funciones, y se benefician los
programadores recibiendo dinero por una parte del trabajo que hacen en
PHPlist :-)</p></li>
<li><p>Si utiliza PHPlist habitualmente y tiene <b>una cantidad
relativamente importante de abonados</b> (m&aacute;s de 1000), nos
interesa conocer las especificaciones t&eacute;cnicas de su sistema, y sus
estad&iacute;sticas de env&iacute;o. Por defecto PHPlist env&iacute;a
estad&iacute;sticas a <a
href="mailto:phplist-stats@tincan.co.uk">phplist-stats@tincan.co.uk</a>,
pero no env&iacute;a detalles del sistema. Si quiere ayudar a que todo
funcione mejor ser&iacute;a estupendo que nos comunicase las
especificaciones t&eacute;cnicas de su sistema, y dejase que la
estad&iacute;sticas fuesen, como por defecto, a la direcci&oacute;n
que acabamos de dar. Esa direcci&oacute;n no es m&aacute;s que un
buz&oacute;n dep&oacute;sito, no lo lee ninguna persona, pero lo
analizaremos para ver qu&eacute; tal est&aacute; funcionando PHPlist.</p></li>
</ul>

<hr/>
<p><b><a name="lists"></a>Lista de correo</b><br/>
PHPlist sol&iacute;a tener una lista de correo, pero ahora
est&aacute; cerrada. Aun se pueden leer los archivos. Si necesita
ayuda con PHPlist puede probar en los <a href="#forums">foros</a>.
<li>Puede consultar <a href="http://lists.cupboard.org/archive/tincan.co.uk" target="_blank">los archivos de la lista de correos</a>
</ul>
</p>
<p><b><a name="bugtrack"></a>Bugtrack</b><br/>
Para informar de un error vaya a <a href="http://mantis.phplist.com/" target="_blank">http://mantis.tincan.co.uk</a>
y cr&eacute;ese una cuenta de usuario. Obtendr&aacute; una
contrase&ntilde;a por correo electr&oacute;nico.<br/>
Acto seguido puede entrar en el sistema &#171;mantis&#187; y presentar
un informe de errores.</p>
<p>Los detalles de su sistema son:</p>
<ul>
<li>Versi&oacute;n PHPlist: <?php echo VERSION?></li>
<li>Versi&oacute;n PHP: <?php echo phpversion()?></li>
<li>Servidor web: <?php echo getenv('SERVER_SOFTWARE')?></li>
<li>Sitio web: <a href="http://<?php echo getConfig('website')."$pageroot"?>"><?php echo getConfig('website')."$pageroot"?></a></li>
<li>Informaci&oacute;n de MySQL: <?php echo mysql_get_server_info();?></li>
<li>M&oacute;dulos de PHP:<br/><ul>
<?php
$le = get_loaded_extensions();
foreach ($le as $module) {
    print "<LI>$module\n";
}
?>
</ul></li>
</ul>
<p>Tambi&eacute;n puede usar este sistema para solicitar nuevas funciones.</p>
<p>Por favor tenga en cuenta que se har&aacute; caso omiso de los
mensajes que no utilicen este sistema o el foro.</p>
