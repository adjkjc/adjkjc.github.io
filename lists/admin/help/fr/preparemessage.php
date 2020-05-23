<p>Ici, vous pouvez pr&eacute;parer un message qui peut &amp;ecirc;tre envoy&eacute; &amp;agrave; une date ult&eacute;rieure. Vous pouvez sp&eacute;cifier toute l'information requise pour ce message, sauf les listes auxquelles il faudra envoyer le message. Puis, au moment d'envoyer le message (pr&eacute;par&eacute;) vous pouvez s&eacute;lectionner la/les liste(s) et le message pr&eacute;par&eacute; sera envoy&eacute;. </p>
<p>
Votre message pr&eacute;par&eacute; est stationnaire, ce qui fait qu'il ne disparaîtra pas une fois qu'il aura &eacute;t&eacute; envoy&eacute;, mais il peut &amp;ecirc;tre r&eacute;utilis&eacute; plusieurs fois. Attention avec cela, car du coup vous risquez d'envoyer le m&amp;ecirc;me message &amp;agrave; vos destinataires plusieurs fois. </p>
<p>
Cette fonctionnalit&eacute; est particuli&egrave;rement utile lorsque vous tirez parti de la fonctionnalit&eacute; "administrateurs multiples". Si un administrateur central pr&eacute;pare les messages, les sous-administrateurs peuvent les envoyer sur leurs propres listes. Dans ce cas, vous pouvez ajouter des codes-raccourcis dans le corps de votre message: les attributs des administrateurs. </p>
<p>Par exemple, si vous avez un attribut <b>Nom</b> pour les administrateurs, vous pouvez ajouter [LISTOWNER.NOM] (listowner = propri&eacute;taire de liste) comme code-raccourci, qui sera remplac&eacute; par le <b>Nom</b> du propri&eacute;taire de la liste qui va recevoir le message. Ceci, quelque soit la personne qui envoie le message. Alors si l'administrateur central envoie le message &amp;agrave; une liste qui appartient &amp;agrave; quelqu'un d'autre, les codes-raccourcis [LISTOWNER] seront remplac&eacute;s par les valeurs pour le Propri&eacute;taire de la liste, pas les valeurs de l'administrateur central. </P>
<p>Rappel:
<br/>
Le format des codes-raccourcis [LISTOWNER] est le suivant:  <b>[LISTOWNER.ATTRIBUT]</b><br/>
<p>Vous avez d&eacute;fini les attributs pour administrateurs suivants:
<table border=1><tr><td><b>Attribut</b></td><td><b>Code-raccourci</b></td></tr>
<?php
$req = Sql_query("select name from {$tables['adminattribute']} order by listorder");
if (!Sql_Affected_Rows()) {
    print '<tr><td colspan=2>Aucun</td></tr>';
}

while ($row = Sql_Fetch_Row($req)) {
    if (strlen($row[0]) < 20) {
        printf('<tr><td>%s</td><td>[LISTOWNER. %s]</td></tr>', $row[0], strtoupper($row[0]));
    }
}

?>
