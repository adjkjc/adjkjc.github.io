<p>En esta p&aacute;gina puede preparar un mensaje para enviar m&aacute;s tarde. Puede especificar toda la informaci&oacute;n necesaria para el mensaje, excepto la(s) lista(s) a las que enviarlo. Esto lo puede indicar en el momento de enviar el mensaje previamente preparado.</p>
<p>
Su mensaje preparado permanece a&uacute;n despu&eacute;s de enviado, de modo que lo puede reutilizar tantas veces como quiera. Cuidado con esto, porque por descuido puede acabar enviando el mismo mensaje a sus usuarios varias veces.</p>
<p>
Esta funcionalidad est&aacute; pensada especialmente para el caso de que haya m&uacute;ltiples administradores. Si un administrador principal prepara un mensaje, los subadministradores pueden enviarlo a sus propias listas. En este caso puede a&ntilde;adir marcadores adicionales a sus mensajes: los atributos de los administradores.
</p>
<p>Por ejemplo, si tiene un atributo para los administradores llamado <b>Nombre</b> puede a&ntilde;adir [LISTOWNER.NOMBRE] como marcador, y esto ser&aacute; sustitu&iacute;do por el <b>Nombre</b> del due&ntilde;o de la lista a la que se env&iacute;a el mensaje, independientemente de qui&eacute;n lo env&iacute;e. De modo que si el administrador principal env&iacute;a el mensaje a una lista cuyo due&ntilde;o es otra persona los marcadores [LISTOWNER] ser&aacute;n sustitu&iacute;dos por los valores correspondientes al due&ntilde;o de la lista, no al administrador principal.
</P>
<p>N&oacute;tese:
<br/>
El formato de los marcadores [LISTOWNER] es <b>[LISTOWNER.ATRIBUTO]</b><br/>
<p>Actualmente tiene definidos los siguientes atributos de administrador:
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
