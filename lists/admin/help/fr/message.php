Dans le champ r&eacute;serv&eacute; au texte de votre message, vous pouvez utiliser des "variables" qui seront remplac&eacute;es par les valeurs correspondant &agrave; chaque destinataire :
<br />Les variables doivent appara&icirc;tre sous la forme suivante: <b>[NOM]</b> o&ugrave;
 NOM peut &ecirc;tre remplac&eacute; par le nom de l\'un de vos attributs. <br />Par exemple, si vous avez un attribut "Mon Prenom" mettez [MON PRENOM] dans le message quelque part, l&agrave; o&ugrave;
 vous voulez que la valeur pour "Mon Prenom" soit ins&eacute;r&eacute;e. </p><p>Vous avez d&eacute;fini les attributs suivants :
<?php

print listPlaceHolders();

if (phplistPlugin::isEnabled('rssmanager')) {
    ?>

<p>Vous pouvez mettre en place des mod&egrave;les de messages pour des articles RSS. Pour ce faire, cliquez sur l\'onglet "Envoi programm&eacute;" et s&eacute;lectionnez la fr&eacute;quence d\'envoi du message. Le message sera ensuite utilis&eacute; pour envoyer la liste des articles aux destinataires sur les listes qui ont choisi cette fr&eacute;quence d\'envoi. Il faut utiliser le code-raccourci [RSS] dans le corps de votre message pour indiquer l\'endroit o&ugrave;
 la liste doit appara&icirc;tre. </p>

<?php 
}
?>
<p>Pour envoyer les contenus d\'une page web, ajoutez la ligne suivante dans le corps du message :<br/>
<b>[URL:</b>http://www.exemple.org/chemin/vers/lefichier.html<b>]</b></p>
<p>Vous pouvez inclure des informations de base du destinataire dans cet URL, mais pas d\'information des attributs :</br>
<b>[URL:</b>http://www.exemple.org/profildestinataire.php?email=<b>[</b>email<b>]]</b><br/>
</p>
