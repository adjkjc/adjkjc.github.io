<p>In het bericht veld kun je "variabelen" gebruiken, die zullen worden vervangen met de  informatie van de desbetreffende abonnee.
  De variabelen moeten een opbouw als volgt hebben: <b>[NAAM]</b>, waar NAAM kan worden vervangen met de naam van een van je velden. Als je bijvoorbeeld als je een veld "Voornaam" hebt, plaats dan [VOORNAAM] in het bericht om aan te duiden waar de voornaam-waarde van de abonnee moet worden ingevoegd.
  </p>
</p>
<p>Je kunt ook tekst toevoegen wat zal worden gebruikt als de abonnee geen waarde heeft ingevoerd voor het veld. Om dit te verwezenlijken moet je de volgende opbouw gebruiken: [VELD%%tekst als er geen waarde bestaat]. Je kunt bijvoorbeeld je nieuwsbrief beginnen met<em> Beste [FIRSTNAME%%meneer of mevrouw]</em>, de instelling zal er voor zorgen dat de voornaam wordt ingevoegd bij gebruikers die deze waarde hebben ingevuld, en "meneer of mevrouw" bij de rest.</p>
<p>Momenteel zijn de volgende attributen ingesteld:
  <?php

print listPlaceHolders();

if (ENABLE_RSS) {
    ?>
<p>Je kunt een sjabloon maken voor berichten die worden verzonden met RSS opmaak. Om dit te doen, klik op de "Tijdschema" tab en geef de frequentie van het bericht
   aan. Het bericht zal dan worden gebruikt om de lijst met items naar abonnees op de verzendlijst te verzenden, die deze frequentie hebben ingesteld. 
  Je moet het veld (ook wel: placeholder) [RSS] in je bericht gebruiken om aan te duiden waar de lijst moet komen.</p>
<?php 
}
?>

<p>Om de inhoud van een webpagina te verzenden, voeg je het volgende toe aan de inhoud van je bericht:<br/>
<b>[URL:</b>http://www.voorbeeld.nl/pad/naar/bestand.html<b>]</b></p>
<p>Je kunt eenvoudige gebruikers informatie toevoegen aan deze URL, maar geen veld informatie:</br>
<b>[URL:</b>http://www.voorbeeld.org/gebruikersprofiel.php?email=<b>[</b>email<b>]]</b><br/>
</p>
