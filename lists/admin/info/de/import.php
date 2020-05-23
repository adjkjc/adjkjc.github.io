<p>PHPlist bietet vier verschiedene Methoden, um Adressdaten von Abonnenten in das System zu importieren:</p>

<ul>
	<li><?php echo PageLink2('import2', 'Import von Adressdaten mit abweichenden Attributen und individuellen Attributwerten');?><br />
	<?php // I prefer to use the same text as in info/import2.php here ?>
	Bei dieser Importmethode d&uuml;rfen die importierten Adressdaten auch Attribute enthalten, die im System noch nicht existieren.
	Diese werden dann beim Import automatisch angelegt und als einzeilige Textattribute definiert.
	Die individuellen Attributwerte der Abonnenten bleiben beim Import erhalten.
	Benutzen Sie diese Option, wenn Sie Daten aus einer Tabellenkalkulation bzw. einer CSV-Datei importieren,
	welche die Attribute spaltenweise und die Abonnenten zeilenweise enthält.
	Die Attributnamen m&uuml;ssen dabei in der ersten Zeile der Datei stehen.
	<br/><br/></li>

	<li><?php echo PageLink2('import1', 'Import von Adressdaten mit &uuml;bereinstimmenden Attributen und einheitlichen Attributwerten');?><br />
	<?php // I prefer to use the same text as in info/import1.php here ?>
	Diese Importmethode empfiehlt sich, wenn Sie eine einfache Liste mit E-Mail-Adressen aus einer Textdatei importieren.
	Sie k&ouml;nnen dabei f&uuml;r jedes im System existierende Attribut einen Standardwert bestimmen,
	der dann f&uuml;r s&auml;mtliche importierten Adressen einheitlich gesetzt wird.
	Allf&auml;llige Daten, die in der Importdatei hinter der E-Mail-Adresse stehen, werden als Attribut "Info" des jeweiligen Benutzers gespeichert.	<br/><br/></li>

	<li><?php echo PageLink2('import3', 'Import von Adressdaten aus einem IMAP-Mail-Konto');?><br />
	<?php // I prefer to use the same text as in lan/import3.php here ?>
	Bei dieser Importmethode werden Mails in IMAP-Konten nach E-Mail-Adressen durchsucht und die gefundenen Adressdaten in die PHPlist-Datenbank importiert.
	Nebst der E-Mail-Adresse wird nur der Name der Person als Attribut gespeichert.
	<br/><br/></li>

	<li><?php echo PageLink2('import4', 'Import von Adressdaten aus einer anderen Datenbank');?><br />
	Diese Importmethode erm&ouml;glicht es, Adressdaten aus einer anderen Datenbank zu importieren.
	<br /><br /></li>

</ul>