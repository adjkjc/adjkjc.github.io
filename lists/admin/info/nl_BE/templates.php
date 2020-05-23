<p>Hier kan u de templates aanmaken die gebruikt kunnen worden voor het verzenden van berichten. Een template is
een HTML pagina waarin er ergens de <i>PlaceHolder</i> <b>[CONTENT]</b> staat. Hier zal de tekst van de email worden ingevoegd.</p>
<p>Optioneel kan u, net zoals bij [CONTENT], ook [FOOTER] en [SIGNATURE] toevoegen om de footer informatie en de handtekening van een bericht in te voegen.</p>
<p>Afbeeldingen in het template worden ingesloten in de email. Als u afbeeldingen toevoegd aan de inhoud van je berichten (als u ze verzend), dan moeten deze worden ingesloten via een volledige URL want deze worden niet ingesloten bij de email.</p>
<p><b>Gebruiker Tracking</b></p>
<p>Om Gebruiker tracking te gebruiken, kan je [USERID] toevoegen aan uw template. Deze zal worden vervangen met een identifier voor een gebruiker en 
werkt enkel bij HTML mail. U kunt dan een URL opzetten die deze ID ontvangt en verwerkt. Als alternatief kan u de ingebouwde Gebruiker tracking van <?php echo NAME?> gebruiken. Om dit te doen voegt u [USERTRACK] toe aan uw template. Dan zal er een onzichtbare link worden toegevoegd aan de mail om het aantal bekeken email te kunnen traceren.</p>
<p><b>Afbeeldingen</b></p>
<p>Elke referentie naar een afbeelding die niet begint met "http://" kan (en zou) moeten worden geladen bij de mail. Het is aangeraden om maar enkele afbeeldingen te gebruiken en om ze zeer klein te maken. Als u uw template upload, dan heeft u de mogelijkheid om de afbeeldingen toe te voegen. Referenties naar afbeeldingn die ingesloten moeten worden, moeten van dezelfde map zijn, bv &lt;img&nbsp;src=&quot;afbeelding.jpg&quot;&nbsp;......&nbsp;&gt; en niet &lt;img&nbsp;src=&quot;/een/map/ergens/afbeelding.jpg&quot;&nbsp;..........&nbsp;&gt;</p>
