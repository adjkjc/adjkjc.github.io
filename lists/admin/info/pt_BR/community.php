
<h3>Comunidade PHPlist</h3>
<p><b>&Uacute;ltima vers&atilde;o</b><br/>
Por favor, certifique-se que voc&ecirc; est&aacute; utilizando a &uacute;ltima vers&atilde;o antes de enviar um relat&oacute;rio de erro.<br/>
<?php
ini_set('user_agent', NAME.' (PHPlist version '.VERSION.')');
ini_set('default_socket_timeout', 5);
if ($fp = @fopen('http://www.phplist.com/files/LATESTVERSION', 'r')) {
    $latestversion = fgets($fp);
    $thisversion = VERSION;
    $thisversion = str_replace('-dev', '', $thisversion);
    if (versionCompare($thisversion, $latestversion)) {
        print '<span class="highlight">Parab&eacute;ns, voc&ecirc; est&aacute; utilizando a &uacute;ltima vers&atilde;o</span>';
    } else {
        print '<span class="highlight">voc&ecirc; n&atilde;o est&aacute; utilizando a &uacute;ltima vers&atilde;o</span>';
        print '<br/>Sua vers&atilde;o: <b>'.$thisversion.'</b>';
        print '<br/>&Uacute;ltima vers&atilde;o: <b>'.$latestversion.'</b>  ';
        print '<a href="http://www.phplist.com/files/changelog">Veja o que mudou</a>&nbsp;&nbsp;';
        print '<a href="http://www.phplist.com/files/phplist-'.$latestversion.'.tgz">Baixar</a>';
    }
} else {
    print '<br/>Veja se h&aacute; uma nova vers&atilde;o: <a href=http://www.phplist.com/files>clicando aqui</a>';
}
?>
<p>O PHPlist come&ccedil;ou em 2000 como uma pequena aplica&ccedil;&atilde;o para o
<a href="http://www.nationaltheatre.org.uk" target="_blank">Teatro Nacional [<i>National Theatre</i>]</a>. Com o passar do tempo cresceu e se tornou um f&aacute;cil sistema de Gerenciamento de Rela&ccedil;&atilde;o com o Cliente e o n&uacute;mero de sites usando o aplicativo aumentou rapidamente. Mesmo o c&oacute;digo base &eacute; fundamentalmente mantido por uma pessoa, ele tem se tornado muito complexo e para garantir a sua qualidade ser&aacute; necess&aacute;rio integrar outras v&aacute;rias pessoas.</p>

<p>Para evitar que se lote as caixas de mensagens dos desenvolvedores, pedimos que n&atilde;o encaminhem suas d&uacute;vidas diretamente para  <a href="http://tincan.co.uk" target="_blank">Tincan</a>, ao inv&eacute;s disso usem outros m&eacute;todos de comunica&ccedil;&atilde;o dispon&iacute;veis. Isso n&atilde;o somente liberar&aacute; tempo para a continuidade do desenvolvimento, mas tamb&eacute;m criar&aacute; um hist&oacute;rico de quest&otilde;es, que poder&aacute; ser usado por novos usu&aacute;rios para aprender como funciona o sistema.
</a>.</p>
<p>Para facilitar o trabalho da comunidade PHPlist existem diversas op&ccedil;&otilde;es dispon&iacute;is:
<ul>
<li><a href="http://www.phplist.com/forums/" target="_blank">F&oacute;runs</a></li>
<li><a href="#bugtrack">Rastreador de Erros</a></li>
</ul>
</p><hr/>
<h3>O que voc&ecirc; pode fazer para ajudar</h3>
<p>Se voc&ecirc; &eacute; um <b>usu&aacute;rio comum do PHPlist</b> e acha que j&aacute; o conhece bem, voc&ecirc; pode ajudar respondendo &agrave;s quest&otilde;es de outros usu&aacute;rios.</p>
<p>Se voc&ecirc; &eacute; <b>novo no PHPlist</b> e tem tido dificuldades em configur&aacute;-lo para funcionar em seu site, voc&ecirc; pode ajudar tentando procurar a solu&ccedil;&atilde;o atrav&eacute;s das op&ccedil;&otilde;es acima, depois postando imediatamente a mensagem "n&atilde;o funciona". Geralmente os problemas que voc&ecirc; possa ter est&atilde;o relacionados ao ambiente em que a sua  insta&ccedil;&atilde;o do PHPlist est&aacute; rodando.
Ter somente um desenvolvedor para o PHPlist tem a desvantagem de n&atilde;o poder ser testado em todas as plataformas e em todas as vers&otilde;es do PHP.</p>
<h3>Outras coisas que voc&ecirc; pode fazer para ajudar</h3>
<ul>
<li><p>Se voc&ecirc; acha que a PHPlist &eacute; de grande ajuda, por qu&ecirc; n&atilde;o fazer com que os outros saibam de sua exist&ecirc;ncia? Provavelmente voc&ecirc; teve que correr atr&aacute;s para encontr&aacute;-lo e decidir us&aacute;-lo, depois de ter comparado com outras aplica&ccedil;&otilde;es similares, ent&atilde;o voc&ecirc; poderia ajudar outras pessoas com a sua experi&ecirc;ncia.</p>

<p>Para faz&ecirc;-lo, voc&ecirc; pode <?php echo PageLink2('vote', 'Votar')?> no PHPlist, ou escrever a sua opini&atilde;o em sites de aplicativos. Voc&ecirc; tamb&eacute;m pode contar a outras pessoas que voc&ecirc; conhece o programa.
</li>
<li><p>Voc&ecirc; pode fazer a <b>Tradu&ccedil;&atilde;o</b> do PHPlist no seu idioma e nos envi&aacute;-la. Espero melhorar a internacionaliza&ccedil;&tilde;o, mas neste momento, voc&ecirc; pode simplesmente traduzir o arquivo <i>english.inc</i>.</p>
</li>
<li>
<p>Voc&ecirc; pode <b>Testar</b> todas as diferentes caracter&iacute;sticas do PHPlist e verificar se elas est&atilde;o funcionando corretamente.
Por favor, publique suas opini&otilde;es nos <a href="http://www.phplist.com/forums/" target="_blank">F&oacute;runs</a>.</p></li>
<li>
<p>Voc&ecirc; pode usar o PHPlist para seus clientes pagos (se voc&ecirc &eacute; faz parte de uma equipe de web, por exemplo) e mostre que o sistema &eacute; uma grande ferramente para atingir os seus objetivos. Ent&atilde;o, se eles quiserem algumas mudan&ccedil;as, voc&ecirc; pode <b>encomendar novas caracter&iacute;sticas</b> que s&aeo; pagas pelos seus clientes. Se voc&ecirc; quiser saber quanto custaria para incluir novas caracter&iacute;sticas &agrave;o PHPlist, <a href="mailto:phplist@tincan.co.uk?subject=request for quote to change PHPlist">entre em contato</a>.
A maioria das novas caracter&iacute;sticas do PHPlist s&atilde;o adicionadas a pedidos de clientes pagos. Voc&ecirc; ser&aacute; beneficiado pagando uma pequena quantia para alcan&ccedil;ar seus objetivos, e tamb&eacute;m beneficiar&aacute; a comunidade que ganhar&aacute; com as novas caracter&iacute;sticas e ainda contribuir&aacute; com os desenvolvedores para ganhar algum dinheiro trabalhando no PHPlist :-)</p></li>
<li><p>Se voc&ecirc; usa o PHPlist regularmente e tem uma <b>grande quantidade de inscritos</b> (mais de 1000), n&oacute;s estamos interessados nas caracter&iacute;sticas do seus sistema e no envio de estat&iacute;sticas. Como op&ccedil;&atilde;o padr&atilde;o o PHPlist enviar&aacute; estatist&iacute;sticas para <a href="mailto:phplist-stats@tincan.co.uk">phplist-stats@tincan.co.uk</a>, mas n&atilde;o enviar&aacute; detalhes do seu sistema. Se voc&ecirc; quer contribuir para que a aplica&ccedil;&atilde;o funcione melhor, seria &oacute;timo que voc&ecirc; pudesse nos enviar as informa&ccedil;&otilde;es sobre seu sistema, assim como deixar ativada a op&ccedil;&atilde;o para enviar as estat&iacute;sticas ao endere&ccedil;o acima.
As suas informa&ccedil;&otilde;es n&atilde;o estar&atilde;o dispon&iacute;veis para as pessoas, mas n&oacute;s as analisaremos para ter uma id&eacute;ia se o PHPlist tem funcionado bem.</p></li>
</ul>

<hr/>
<p><b><a name="lists"></a>Lista de Discuss&atilde;o</b><br/>
O PHPlist costumava ter uma lista de discus&atilde;o, mas foi encerrada. Voc&ecirc; ainda pode ler os arquivos da lista. Para suporte ao PHPlist tente os <a href="#forums">f&oacute;runs</a>.
<li>Para acessar os arquivos da lista de discuss&atilde;o <a href="http://lists.cupboard.org/archive/tincan.co.uk" target="_blank">clique aqui</a>
</ul>
</p>
<p><b><a name="bugtrack"></a>Rastreador de Erro</b><br/>
Para enviar um relat&oacute;rio de erro, acesse <a href="http://mantis.phplist.com/" target="_blank">http://mantis.tincan.co.uk</a>
e crie a sua conta. Voc&ecirc; receber&aacute; uma senha por email.<br/>
Voc&ecirc; pode entrar no sistema "mantis" e enviar o seu relat&oacute;io de erro.</p>
<p>Os detalhes do seu sistema s&atilde;o:</p>
<ul>
<li>Vers&atilde;o do PHPlist: <?php echo VERSION?></li>
<li>Vers&atilde;o do PHP: <?php echo phpversion()?></li>
<li>Servido Web: <?php echo getenv('SERVER_SOFTWARE')?></li>
<li>Site: <a href="http://<?php echo getConfig('website')."$pageroot"?>"><?php echo getConfig('website')."$pageroot"?></a></li>
<li>Informa&ccedil;&otilde;es do Mysql: <?php echo mysql_get_server_info();?></li>
<li>M&oacute;dulos PHP:<br/><ul>
<?php
$le = get_loaded_extensions();
foreach ($le as $module) {
    print "<LI>$module\n";
}
?>
</ul></li>
</ul>
<p>Voc&ecirc; pode tamb&eacute;m usar este sistema para pedir novas caracter&iacute;sticas.</p>
<p>Por favor, preste aten&ccedil;&atilde;o, os email que n&atilde;o forem enviados para este sistema ou para os f&oacute;runs ser&atilde;o ignorados.</p>
