<p>Im Nachrichtentext k&ouml;nnen Sie Platzhalter benutzen, welche dann beim Versand durch die Daten des jeweiligen Empf&auml;ngers ersetzt werden.</p>

<p>Platzhalter haben die Form <b>[EIN_TEXT]</b>, wobei EIN_TEXT der Name eines im System definierten Attributs sein muss.
Wenn es beispielsweise ein Attribut "Vorname" gibt, so f&uuml;gen Sie den Platzhalter [VORNAME] an jener Stelle
in den Nachrichtentext ein, an welcher der Vorname des jeweiligen Empf&auml;ngers erscheinen soll.
</p>

<p>Zur Zeit sind folgende Attribute im System definiert:

<?php
print listPlaceHolders();

if (phplistPlugin::isEnabled('rssmanager')) {
    ?>
  <p>Sie k&ouml;nnen Templates definieren f&uuml;r Nachrichten, die Meldungen aus RSS-Feeds enthalten.
  Zu diesem Zweck wechseln Sie zuerst auf das Register "Termine" und definieren dort,
  wie h&auml;ufig eine Nachricht mit den neuen Meldungen aus dem RSS-Feed verschickt werden soll.
  Die Nachricht wird dann f&uuml;r den Versand von RSS-Meldungen an diejenigen Abonnenten benutzt,
  welche die entsprechende Frequenz gew&auml;hlt haben.
  Verwenden Sie anschliessend den Platzhalter [RSS] in Ihrer Nachricht,
  um die RSS-Meldungen an der gew&uuml;nschten Stelle einzuf&uuml;gen.</p>
<?php 
}
?>

<p>Um eine ganze Web-Seite als Nachricht zu versenden benutzen Sie den folgenden Platzhalter:<br/>
<b>[URL:</b>http://www.domain.com/verzeichnis/datei.html<b>]</b></p>

<p>Sie k&ouml;nnen auch elementare Abonnenten-Daten (aber keine Attributwerte) in die URL integrieren:</br>
<b>[URL:</b>http://www.domain.com/benutzerprofil.php?email=<b>[</b>email<b>]]</b><br/>
</p>
