
<p>

<h3>Importar emails a listas existentes</h3>

Hay cuatro modos de importar informaci&oacute;n externa:

<ul>
<li><?php echo PageLink2('import2', 'Importar emails con valores
distintos en los atributos');?>. La lista de emails puede tener
atributos que aun no se hayan definido. Se crear&aacute;n
autom&aacute;ticamente como atributos tipo &#171;linea de
texto&#187;. Use esta opci&oacute;n si est&aacute; importando una hoja
de c&aacute;lculo/fichero CSV en el que los atributos de los usuarios
est&aacute;n en columnas y cada l&iacute;nea representa a un usuario. <br/><br/>
<li><?php echo PageLink2('import1', 'Importar emails con los mismos
valores en los atributos');?>. La lista de emails tendr&aacute; que
concordar con la estructura que ya ha creado en <?php echo NAME?>. Use esta
opci&oacute;n si est&aacute; importando una simple lista de
emails. Despu&eacute;s puede especificar los valores de los atributos
para cada entrada. Ser&aacute;n los mismos para todos los usuarios importados.<br/><br/>
<li><?php echo PageLink2('import3', 'Importar emails desde una cuenta
IMAP');?>. Esta opci&oacute;n buscar&aacute; emails en sus directorios
IMAP y los a&ntilde;adir&aacute;. El &uacute;nico atributo
v&aacute;lido es el Nombre de la persona.<br/><br/>
<li><?php echo PageLink2('import4', 'Importar emails de otra base de datos');?>.
</ul>

</p>
