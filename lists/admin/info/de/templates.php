<p>Hier k&ouml;nnen Sie Templates f&uuml;r Nachrichten definieren, die Sie sp&auml;ter an die Abonnenten Ihrer Listen senden.
Ein Template ist eine HTML-Seite, die irgendwo den Platzhalter <b>[CONTENT]</b> enth&auml;lt.
An dieser Stelle wird dann beim Versand der Nachrichtentext eingef&uuml;gt.</p>

<p>Nebst <b>[CONTENT]</b> k&ouml;nnen Sie auch die Platzhalter <b>[FOOTER]</b> und <b>[SIGNATURE]</b> benutzen,
welche entsprechend die Fusszeile und die Grusszeile in die Nachricht einf&uuml;gen; diese beiden Platzhalter sind allerdings optional.</p>

<p>Bilder, die in Ihrem Template enthalten sind, werden beim Versand in die E-Mails integriert.
Bilder die Sie im Nachrichtentext hinzuf&uuml;gen, m&uuml;ssen eine vollst&auml;ndige URL besitzen, und sie werden nicht in die E-Mails integriert.</p>

<p><b>User Tracking</b></p>

<p>Um das User Tracking zu vereinfachen k&ouml;nnen Sie den Platzhalter <b>[USERID]</b> in Ihr Template integrieren, der dann durch eine Abonnenten-ID ersetzt wird.
Dies funktioniert allerdings nur bei E-Mails im HTML-Format.
Zudem m&uuml;ssen Sie dann selbst eine URL einrichten, welche die ID empf&auml;ngt.</p>

<p>Als Alternative k&ouml;nnen Sie das eingebaute User Tracking von PHPlist benutzen.
Hierzu f&uuml;gen Sie den Platzhalter <b>[USERTRACK]</b> in Ihr Template ein, wodurch den E-Mails ein unsichtbarer Link
hinzugef&uuml;gt wird, um die Anzahl der ge&ouml;ffneten E-Mails zu erfassen.</p>

<p><b>Bilder</b></p>

<p>Jedes referenzierte Bild, dessen Pfad nicht mit "http://" beginnt, muss auf den Server geladen werden, damit es in die E-Mails integriert werden kann.
Es empfiehlt sich, nur wenige und kleine Bilder zu verwenden.
Wenn Sie Ihr Template uploaden, haben Sie Gelegenheit, auch Bilder hinzuzuf&uuml;gen.
Bildreferenzen sollten sich auf dasselbe Verzeichnis beziehen, z.B. &lt;img&nbsp;src=&quot;meinbild.jpg&quot;&gt; und nicht &lt;img&nbsp;src=&quot;/irgend/ein/verzeichnis/meinbild.jpg&quot;&gt;.</p>
