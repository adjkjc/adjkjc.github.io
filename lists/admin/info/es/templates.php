<p>Aqu&iacute; puede definir plantillas que despu&eacute;s puede
utilizar para enviar correos a las listas. Una plantilla es una
p&aacute;gina HTML en la que est&aacute; inclu&iacute;do el
<i>Marcador</i> <b>[CONTENT]</b>. En este lugar se insertar&aacute; el
texto del mensaje. </P>
<p>Adem&aacute;s de [CONTENT], puede incluir [FOOTER] y [SIGNATURE]
para insertar un pie de mensaje y una firma, respectivamente. Estos
marcadores son opcionales.</p>
<p>Las im&aacute;genes que sean parte de la plantilla se incluir&aacute;n en sus
mensajes. Si adem&aacute;s a&ntilde;ade im&aacute;genes al contenido
de su mensaje (al enviarlo) tiene que porporcionar la URL completa,
pero no se enviar&aacute;n con el mensaje.</p>
<p><b>Seguimiento de usuarios</b></p>
<p>Para facilitar el seguimiento de los usuarios puede a&ntilde;adir
[USERID] a su plantilla. Este marcador ser&aacute; reemplazado por
un identificador del usuario. Esto solo funciona cuando se
env&iacute;a correo HTML. Tiene que configurar una URL para recibir la
ID. Otra posibilidad es utilizar el sistema de seguimiento de usuarios
incorporado en <?php echo NAME?>. Para ello a&ntilde;ada [USERTRACK] a
su plantilla, y se incluir&aacute; un enlace invisible en el
mensaje, que permite llevar la cuenta de las veces que se visualiza el
mensaje.</p>
<p><b>Im&aacute;genes</b></p>
<p>Cualquier referencia a una imagen que no comience por "http://"
puede (y debe) ser cargada para incluir en el mensaje. Se recomienda
usar pocas im&aacute;genes y que sean muy peque&ntilde;as. Si carga su
plantilla podr&aacute; a&ntilde;adir sus im&aacute;genes. Las
referencias a las im&aacute;genes que hay que incluir deben ser del
mismo directorio, por ejemplo &lt;img&nbsp;src=&quot;imagen.jpg&quot;&nbsp;......&nbsp;&gt; y no &lt;img&nbsp;src=&quot;/alg&uacute;n/otro/directorio/imagen.jpg&quot;&nbsp;..........&nbsp;&gt;</p>
