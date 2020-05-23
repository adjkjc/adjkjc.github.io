Puede usar tres m&eacute;todos diferentes para establecer la l&iacute;nea &#171;de&#187;:
<ul>
<li>Una palabra: esto ser&aacute; reformateado y quedar&aacute; as&iacute;: &lt;la palabra&gt;@<?php echo $domain?>
<br>Por ejemplo: <b>informacion</b> se convertir&aacute; en <b>informacion@<?php echo $domain?></b>
<br>En la mayor&iacute;a de los programas lectores de correo el mensaje aparecer&aacute; enviado por <b>informacion@<?php echo $domain?></b>
<li>Dos o m&aacute;s palabras: esto ser&aacute; reformateado y quedar&aacute; as&iacute;: <i>las palabras que escriba</i> &lt;listmaster@<?php echo $domain?>&gt;
<br>Por ejemplo: <b>informaci&oacute;n sobre la lista</b> se convertir&aacute; en <b>informaci&oacute;n sobre la lista &lt;listmaster@<?php echo $domain?>&gt; </b>
<br>En la mayor&iacute;a de los programas lectores de correo el mensaje aparecer&aacute; enviado por <b>informaci&oacute;n sobre la lista</b>
<li>Ninguna o m&aacute;s palabras y una direcci&oacute;n de correo: esto ser&aacute; reformateado y quedar&aacute; as&iacute;: <i>Palabras</i> &lt;direcciondecorreo&gt;
<br>Por ejemplo: <b>Mi Nombre mi@email.com</b> se convertir&aacute; en <b>Mi Nombre &lt;mi@email.com&gt;</b>
<br>En la mayor&iacute;a de los programas lectores de correo el mensaje aparecer&aacute; enviado por <b>Mi Nombre</b>
