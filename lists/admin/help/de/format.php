<h3>Nachrichtenformat</h3>

<p>Wenn Sie "Auto detect" benutzen wird die Nachricht als HTML-Format eingestuft, sobald mindestens ein HTML-Tag (&lt; ... &gt;) gefunden wird.</p>

<p><b>Es wird empfohlen, die "Auto detect"-Funktion zu benutzen.</b></p>

<p>Falls Sie unsicher sind, ob "Auto detect" funktioniert, und Sie eine HTML-formatierte Nachricht einf&uuml;gen, dann w&auml;hlen Sie "HTML".
Referenzen auf externe Ressourcen (z.B. Bilder) m&uuml;ssen eine vollst&auml;ndige URL besitzen, d.h. sie muss mit http:// beginnen.
(Dies im Unterschied zu den Bildern des Templates.)
Ansonsten sind Sie selbst verantwortlich f&uuml;r die Formatierung des Texts.</p>

<p>Falls Sie erzwingen wollen, dass die Nachricht als Text interpretiert wird, dann w&auml;hlen Sie "Text".</p>

<p>
Die folgenden Regeln werden benutzt um die Textversion einer HTML-formatierten Nachricht bzw. die HTML-Version einer reinen Textnachricht zu erzeugen:<br/>

HTML-Format -&gt; Text-Format<br/>
<ul>
	<li><b>Fetter Text</b> wird mit Sternchen (<b>*</b>) gekennzeichnet, <i>kursiver Text</i> mit Schr&auml;gstrichen (<b>/</b>).</li>
	<li>Bei Links wird zun&auml;chst der Link-Text, anschliessend die Link-URL in Klammern angegeben.</li>
	<li>L&auml;ngere Abs&auml;tze werden bei Spalte 70 umbrochen.</li>
</ul>
Text-Format -&gt; HTML-Format<br/>
<ul>
	<li>Ein doppelter Zeilenumbruch wird durch &lt;p&gt; ersetzt.</li>
	<li>Ein einfacher Zeilenumbruch wird durch &lt;br /&gt; ersetzt.</li>
	<li>E-Mail-Adressen werden klickbar gemacht (mailto:-Link).</li>
	<li>URLs werden klickbar gemacht, sofern Sie eine der folgenden Formen haben:<br/>
		<ul>
			<li>http://eine.domain.com/ein/verzeichnis/eine_datei.html</li>
			<li>www.domain.com</li>
		</ul>
	Die erzeugten Links haben die Stylesheet-Klasse "url" und das Link-Target "_blank".</li>
</ul>

<b>Achtung:</b>: Wenn Sie Ihre Nachricht als Text kennzeichnen und trotzdem HTML-Code einf&uuml;gen, dann erhalten Abonnenten, die Text-Mails w&uuml;nschen, den rohen HTML-Code zugeschickt.
</p>