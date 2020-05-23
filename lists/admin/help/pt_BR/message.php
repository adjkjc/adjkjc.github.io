No campo mensagem voc&ecirc; pode usar "vari&aacute;veis", as quais ser&atilde;o substitu&iacute;das pelos valores para um usu&acute;rio:
<br />As vari&aacute;veis precisam estar no formato <b>[NAME]</b> onde NAME pode ser substitu&acute;do com o nome de um dos seus atributos.
<br />Por exemplo se voc&ecirc; tem um atributo "Primeiro Nome" ponha [FIRST NAME] em algum lugar da mensagem para identificar o local onde o valor "Primeiro Nome" do destinat&aacute;rio deve ser inserido.
</p><p>Atualmente voc&ecirc; tem os seguinte atributos defindos:
<?php

print listPlaceHolders();

if (phplistPlugin::isEnabled('rssmanager')) {
    ?>
  <p>Voc&ecirc; pode definir modelos para as mensagens que possuem elementos RSS. Para fazer isso clique na orelha "Scheduling" e indique a frequ&ecirc;ncia para a mensagem. A mensagem ser&aacute; usada para enviar uma lista de &iacute;tens para os usu&acute;rios das listas, que tiveram a frequ&ecirc;ncia configurada. Voc&ecirc; precisa usar os marcadores [RSS] nas suas mensagens para identificar para quais lista deve ser enviadas.</p>
<?php 
}
?>

<p>Para enviar o conte&uacute;do de uma p&aacute;gina web, adicione o c&oacute;digo abaixo no conte&uacute;do da mensagem::<br/>


<b>[URL:</b>http://www.exemplo.org/caminho/para/arquivo.html<b>]</b></p>
<p>Voc&ecirc pode incluir informa&ccedil;&otilde;es b&aacutesicas do usu&aacute;rio nesta URL, mas n&atilde;o informa&ccedil;&otilde;o de atributo:</br>
<b>[URL:</b>http://www.exemplo.org/perfildousuario.php?email=<b>[</b>email<b>]]</b><br/>
</p>
