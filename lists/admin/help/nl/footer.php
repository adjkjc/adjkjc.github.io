
<h3>De voet van een bericht</h3>

<p>De voet van een bericht (ook wel: footer) dient verschillende doelen. Als het bericht wordt doorgestuurd naar een ander email adres, dan zal de voet van het bericht worden gewijzigd naar de tekst voor een "doorgestuurd bericht". Hierin is het mogelijk dat je beschrijft hoe iemand die niet is ingeschreven bij jouw verzendlijst zich hiervoor kan opgeven.</p>

<p>Je kunt het standaard bericht voor de voet van een bericht wijzigen in 
<?php

## for translators, you can translater the word "Configuration" below
echo PageLink2('configure&id=messagefooter', 'Configuration');
?>
 </p>

<p>Je kunt diverse aanduidingen gebruiken, die de abonnee in staat stelt een keuze te maken voor een verzendlijst en hoe deze er uit moet zien.

<ul>
<li><b>[UNSUBSCRIBEURL]</b> - de gepersonaliseerde plek voor de abonnee om zich uit te schrijven</li>
<li><b>[PREFERENCESURL]</b> - de gepersonaliseerde plek voor de abonnee om zich in te schrijven</li>
<li><b>[FORWARDURL]</b> - de gepersonaliseerde plek voor de abonnee om een bericht door te sturen</li>
<li><b>[EMAIL]</b> - het email adres waarmee de abonnee mee ingeschreven staat bij een verzendlijst</li>
<li><b>[USERID]</b> - een unieke code voor iedere abonnee</li>
<li><b>[USERTRACK]</b> - de code om een abonnee te volgen</li>
</ul>
</p>

<h3>Voorbeeld van een voet voor een bericht</h3>
<div class="suggestion">
<pre>
--
&lt;h2&gt;Dit bericht werd verzonden naar [EMAIL] door <?php echo getConfig('message_from_name').' '.getConfig('admin_address')?>&lt;/h2&gt;

&lt;h3&gt;&lt;a href="[UNSUBSCRIBEURL]"&gt;Uitschrijven&lt;/a&gt;&lt;/h3&gt;
&lt;h3&gt;&lt;a href="[PREFERENCESURL]"&gt;Instellingen wijzigen&lt;/a&gt;&lt;/h3&gt;
&lt;h3&gt;&lt;a href="[FORWARDURL]"&gt;Stuur dit bericht door&lt;/a&gt;&lt;/h&gt;
[USERTRACK]
&lt;br/>Ons Marketing Bedrijf | Marketingstraat 12 | Marketingdorp | 00000
</pre>
</div>

<h3>Opmaak</h3>
<p>In de voet van een bericht kun je HTML opmaak toepassen. Probeer het simpel te houden. De voet van het bericht met tekst opmaak wordt uit de HTML-opmaak gegenereerd door de HTML tags te verwijderen. Als je geen HTML opmaak in de voet van een bericht toepast, dan zal HTML opmaak worden gegenereerd door  &lt;br/&gt; toe te voegen voor de zinseinden.</p>


</p>
