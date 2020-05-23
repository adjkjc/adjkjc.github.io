
<h3>Het verzenden van een testbericht</h3>

<p>Voer een geldig e-mail adres in en bedien de knop "Verzend een testbericht". <em>Het e-mail adres dat je invoert moet in het bestand van phpList voor komen.</em></p>
<p>Het sturen van een testbericht wordt sterk aangeraden om na te gaan of het bericht zo aankomt als bedoeld. Toch zullen, door het gebruik van verschillende e-mail programma's door de abonnees, de berichten er niet overal hetzelfde uitzien zoals het testbericht er na ontvangst uit ziet. De beste manier om er voor te zorgen dat de berichten worden gelezen en zichtbaar is voor alle abonnees is door gebruik te maken van een eenvoudige HTML-opmaak.</p>

<?php

if (SEND_ONE_TESTMAIL) {
    ?>

<p>Eer zal één bericht worden verzonden naar het emailadres dat je hebt ingevoerd. Dit bericht zal in tekstopmaak of HTML-opmaak worden verzonden, afhankelijk van het gekozen profiel.</p>

<?php

} else {
    ?>

<p><strong>Er zullen twee berichten worden verzonden naar het emailadres dat je hebt ingevoerd.</strong> Het ene bericht zal worden verzonden in de tekst opmaak, het andere in de HTML opmaak.</p>

<p>De abonnees zullen uiteindelijk één bericht ontvangen. De versie die ze zullen ontvangen is afhankelijk van de instellingen in het abonnee profiel.</p>

<?php 
} ?>



