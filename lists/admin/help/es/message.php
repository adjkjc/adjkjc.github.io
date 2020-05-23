En el campo del mensaje puede utilizar &#171;variables&#187;, que ser&aacute;n sustitu&iacute;das por el valor que convenga a cada usuario:
<br />Las variables deben tener el formato <b>[NOMBRE]</b>, sabiendo que NOMBRE	ser&aacute; sustitu&iacute;do por el nombre de alguno de sus atributos.
<br />Por ejemplo, si tiene un atributo llamado &#171;Nombre de pila&#187;, coloque [NOMBRE DE PILA] en alg&uacute;n lugar del mensaje, donde quiera que aparezca el nombre de pila del destinatario.
</p><p>Actualmente tiene definidos los siguientes atributos:
<?php

print listPlaceHolders();

if (phplistPlugin::isEnabled('rssmanager')) {
    ?>
  <p>Puede crear plantillas para los mensajes que se env&iacute;an con elementos RSS. Para ello pinche en la pesta&ntilde;a &#171;Calendario&#187; e indique la frecuencia del mensaje. El mensaje se utilizar&aacute; para enviar la lista de elementos a aquellos usuarios de las listas que hayan escojido esta frecuencia. Debe utilizar el marcador [RSS] en su mensaje para indicar el lugar en el que ir&aacute; la lista de elementos.</p>
<?php 
}
?>

<p>Para enviar el contenido de una p&aacute;gina web a&ntilde;ada lo que sigue al mensaje:<br/>
<b>[URL:</b>http://www.ejemplo.org/direcci&oacute;n/al/fichero.html<b>]</b></p>
<p>Puede incluir la siguiente informaci&oacute;n del usuario en esta URL: email, foreignkey, id y uniqid.</br>
<b>[URL:</b>http://www.ejemplo.org/perfilusuario.php?email=<b>[</b>email<b>]]</b><br/>
</p>
