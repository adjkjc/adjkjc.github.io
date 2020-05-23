<p>Nesta p&aacute;gina voc&ecir; pode elaborar uma mensagem para ser enviada mais tarde.
 Voc&ecir; pode especifiar todas as informa&ccedil;otilde;es necess&aacute;rias para sua mensagem, exceto para que lista ou listas ela ser&aacute; enviada.</p>
<p>
 Quando voc&ecirc; elabora uma mensagem aqui, ela n&atilde;o &eacute; eliminada quando &eacute; enviada e pode ser utilizada diversas vezes. Cuidado com isso, pois voc&ecirc; pode enviar a mesma mensagem muitas vezes para os mesmos usu&aacute;rios.
</p>
<p>
Essa caracter&iacute;stica foi desenvolvida tendo em mente a caracter&iacute;stica de "multiplos administradores".
Se um administrador principal elabora a mensagem, sub-administradores podem envi&acute;-la para suas listas. Neste caso voc&ecirc; pode adicionar marcadores em sua mensagem: os atributos dos administradores.
</p>
<p>Por exemplo, se voc&ecirc; possui o atributo <b>Nome</b> para os administradores, voc&ecirc; pode adicionar o marcador [LISTOWNER.NAME] (que significa nome do admin da lista), que por sua vez ser&aacute; substitu&iacute;do pelo <b>Nome</b> do Admin da Lista na mensagem que ser&aacute; enviada. Isso independentemente de quem envia a mensagem. Logo, se o administrador principal envia uma mensagem para uma lista na qual o admin é uma outra pessoa, o marcador [LISTOWNER] substitu&iacute;ra os valores pelo nome do admin da lista e n&atilde;o utilizar&acute; os valores do amin principal.
</P>
<p>Refer&ecirc;ncias:
<br/>
O formato do marcador [LISTOWNER] &eacute; <b>[LISTOWNER.ATTRIBUTE]</b><br/>
<p>Atualmente voc&ecirc; tem definido os seguintes atributos do admin:
<table border=1><tr><td><b>Atributo</b></td><td><b>Marcador</b></td></tr>
<?php
$req = Sql_query("select name from {$tables['adminattribute']} order by listorder");
if (!Sql_Affected_Rows()) {
    print '<tr><td colspan=2>None</td></tr>';
}

while ($row = Sql_Fetch_Row($req)) {
    if (strlen($row[0]) < 20) {
        printf('<tr><td>%s</td><td>[LISTOWNER.%s]</td></tr>', $row[0], strtoupper($row[0]));
    }
}

?>
