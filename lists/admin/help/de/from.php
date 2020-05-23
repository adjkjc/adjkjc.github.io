Es gibt drei verschiedene Methoden, um den Absender zu erfassen:
<ol>
	<li><b>Ein einzelnes Wort</b><br />
		In diesem Fall wird das Wort als Kontoname der E-Mail-Adresse benutzt, w&auml;hrend die Domain gem&auml;ss dem aktuellen Server (<?php echo $domain?>) gesetzt wird.<br />
		Beispiel: <tt>information</tt> ergibt <tt>information@<?php echo $domain?></tt>.<br />
		Die meisten E-Mail-Programme werden den Absender als <tt>information@<?php echo $domain?></tt> anzeigen.<br />&nbsp;&nbsp;
	</li>
	<li><b>Mehrere W&ouml;rter</b><br />
		In diesem Fall werden die W&ouml;rter als Absender<b>name</b> benutzt, w&auml;hrend die Absender<b>adresse</b> <tt>listmaster@<?php echo $domain?></tt> lauten wird.<br />
		Beispiel: <tt>PHPlist Newsletter</tt> ergibt <tt>PHPlist Newsletter &lt;listmaster@<?php echo $domain?>&gt;</tt>.<br />
		Die meisten E-Mail-Programme werden den Absender als <tt>PHPlist Newsletter</tt> anzeigen.<br />&nbsp;&nbsp;
	</li>
	<li><b>Beliebige Anzahl W&ouml;rter plus E-Mail-Adresse</b><br />
		In diesem Fall werden die W&ouml;rter als Absender<b>name</b> und die E-Mail-Adresse als Absender<b>adresse</b> benutzt.<br />
		Beispiel: <tt>Mein Name meine@email.com</tt> ergibt <tt>Mein Name &lt;meine@email.com&gt;</tt>.<br />
		Die meisten E-Mail-Programme werden den Absender als <tt>Mein Name</tt> anzeigen.
	</li>
</ol>
