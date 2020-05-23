<p>Auf dieser Seite k&ouml;nnen Sie eine Nachricht vorbereiten, die erst zu einem sp&auml;teren Zeitpunkt verschickt werden soll.
Sie k&ouml;nnen alle erforderlichen Angaben erfassen - ausser an welche Liste(n) die Nachricht versendet werden soll.
Dies geschieht erst in dem Moment, wo Sie eine vorbereitete Nachricht tats&auml;chlich versenden.</p>

<p>Eine vorbereitete Nachricht verschwindet nicht, wenn sie einmal verschickt wurde,
sondern bleibt als Vorlage erhalten und kann mehrfach f&uuml;r einen Nachrichtenversand benutzt werden.
Bitte seien Sie vorsichtig mit dieser Funktion, denn es k&ouml;nnte leicht passieren,
dass Sie versehentlich dieselbe Nachricht mehrfach an dieselben Emfp&auml;nger senden.</p>

<p>Die M&ouml;glichkeit, Nachrichten vorzubereiten und als Vorlagen zu benutzen,
wurde insbesondere im Hinblick auf Systeme mit mehrere Administratoren entwickelt.
Wenn der Haupt-Administrator eine Nachricht vorbereitet,
kann sie anschliessend von Sub-Administratoren an deren jeweiligen Listen versendet werden.
In diesem Fall k&ouml;nnen Sie zus&auml;tzliche Platzhalter in Ihre Nachricht einf&uuml;gen: die Administratoren-Attribute.</p>

<p>Wenn Sie beispielsweise ein Administratoren-Attribut <b>Name</b> definiert haben,
dann k&ouml;nnen Sie [LISTOWNER.NAME] als Platzhalter verwenden.
In diesem Fall wird der Platzhalter durch den Namen des Besitzers derjenigen Liste ersetzt,
an welche die Nachricht verschickt wird.
Dies gilt unabh&auml;ngig davon, wer die Nachricht effektiv verschickt:
Wenn also der Haupt-Administrator eine Nachricht an eine Liste verschickt, deren Besitzer ein anderer Administrator ist,
so werden die [LISTOWNER]-Platzhalter trotzdem mit den Daten des jeweiligen Besitzers ersetzt
(und nicht mit den Daten des Haupt-Administrators).
</p>

<p>Das Format f&uuml;r [LISTOWNER]-Platzhalter ist <b>[LISTOWNER.ATTRIBUT]</b></p>

<p>Zur Zeit sind folgende Administratoren-Attribute im System definiert:

<table border=1 cellspacing=0 cellpadding=2>
	<tr>
		<td><b>Attribut</b></td>
		<td><b>Platzhalter</b></td>
	</tr>
<?php
$req = Sql_query("select name from {$tables['adminattribute']} order by listorder");
if (!Sql_Affected_Rows()) {
    print '<tr><td colspan=2>-</td></tr>';
}
while ($row = Sql_Fetch_Row($req)) {
    if (strlen($row[0]) < 20) {
        printf('<tr><td>%s</td><td>[LISTOWNER.%s]</td></tr>', $row[0], strtoupper($row[0]));
    }
}
?>
</table>
