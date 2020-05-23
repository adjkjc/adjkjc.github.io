Voc&ecirc; pode utilistmasterlizar tr&ecirc;s diferentes m&eacute;todos para definir o campo de:
<ul>
<li>Uma palavra: ser&aacute; reformatado como &lt;a palavra&gt;@<?php echo $domain?>
<br>Por exemplo: <b>informa&ccedil;&atilde;o</b> se tornar&aacute; <b>informa&ccedil;&atilde;o@<?php echo $domain?></b>
<br>Na maioria dos programas de email aparacer&aacute; como sendo de <b>informa&ccedil;&atilde;o@<?php echo $domain?></b>
<li>Duas ou mais palavras: ser&aacute reformatado como <i>as palavras que voc&ecirc; digita</i> &lt;listaprincipal@<?php echo $domain?>&gt;
<br>Por exemplo: <b>lista de informa&ccedil;&atilde;o</b> se tornar&aacute; <b>lista de informa&ccedil;&atilde;o &lt;listaprincipal@<?php echo $domain?>&gt; </b>
<br>Na maioria dos programas aparecer&aacute; como sendo de <b>lista de informa&ccedil;&atilde;o</b>
<li>Nenhuma ou mais palavras e um endere&ccedil;o de email: ser&aacute reformatado como <i>Palavras</i> &lt;endere&ccedil;o de email&gt;
<br>Por exemplo: <b>Meu Nome meu@email.com</b> se tornar&aacute; <b>Meu Nome &lt;meu@email.com&gt;</b>
<br>Na maioria dos programas aparecer&aacute; como de <b>Meu Nome</b>
