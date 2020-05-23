In het bericht veld kan u "variabelen" gebruiken, die zullen worden vervangen met de overeenkomstige info voor een gebruiker:
<br />De variabelen moeten van de vorm <b>[NAAM]</b> zijn, waar NAAM kan worden vervangen met de naam van een van je attributen.
<br />Bijvoorbeeld als u een attribuut "Voornaam" heeft, plaats [VOORNAAM] ergens in het bericht om aan te duiden waar de "Voornaam" waarde van de ontvangers moet worden ingevoegd.
</p><p>Momenteel heeft u de volgende attributen ingesteld:
<?php

print listPlaceHolders();

if (ENABLE_RSS) {
    ?>
  <p>U kan een templates aanmaken voor berichten die worden verzonden met RSS items. Om dit te doen, klik op de "Tijdsschema" tab en duid de frequentie 
  voor het bericht aan. Het bericht zal dan worden gebruikt om de lijst met items naar gebruikers op de lijst te verzenden, die deze frequentie hebben ingesteld. 
  U moet het veld (of placeholder) [RSS] in je bericht gebruiken om aan te duiden waar de lijst moet komen.</p>
<?php 
}
?>

<p>Om de inhoud van een webpagina te verzenden, voeg de volgende toe aan de inhoud van je bericht:<br/>
<b>[URL:</b>http://www.voorbeeld.be/pad/naar/bestand.html<b>]</b></p>
<p>U kan eenvoudige gebruikers info toevoegen aan deze URL, geen attribuut informatie:</br>
<b>[URL:</b>http://www.voorbeeld.org/gebruikersprofiel.php?email=<b>[</b>email<b>]]</b><br/>
</p>
