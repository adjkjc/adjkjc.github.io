<p>Op deze pagina kun je een bericht opmaken welke je op een later tijdstip wilt verzenden.
 Je kan alle informatie die je voor het bericht nodig hebt invoeren, met uitzondering van  de verzendlijst(en) 
 waar het bericht naartoe moet worden verzonden. Wanneer je het bericht gaat verzenden kun je
 de verzendlijst(en) aanvinken en zal het voorbereide bericht worden verzonden.</p>
<p>
 Het bericht dat later dient te worden verzonden wordt opgeslagen, en het zal dus niet verdwijnen als het verzonden is. 
 Het bericht kan meerdere keren worden gebruikt. Pas hier mee op, omdat 
 het kan gebeuren dat je zo hetzelfde bericht meerdere keren naar je abonnees verzend.
</p>
<p>
De functionaliteit is ontworpen voor het samenwerken tussen meerdere beheerders.
Als een hoofdbeheerder een bericht voorbereid dan kunnen subbeheerders het bericht naar hun eigen verzendlijsten sturen. Je zou in dit geval velden (attributen) van beheerders als veld kunnen gebruiken.
</p>
<p>Als je bijvoorbeeld een veld <b>Naam</b> hebt, dan kunnen beheerders  [LISTOWNER.NAME] toevoegen als veld,
wat zal worden ingevuld met de naam van de beheerder van de verzendlijstlijst waarnaar het bericht werd verzonden. Dit heeft
niets te maken met wie het bericht heeft verzonden. Dus als de hoofdbeheerder het bericht verzend naar een verzendlijstlijst die in het bezit is van iemand
anders, dan zal het [LISTOWNER] veld worden ingevuld met de naam van de beheerder van de lijst, niet met de naam van de hoofdbeheerder.
</P>
<p>Referentie:<br/>
Het formaat van het [LISTOWNER] veld is <b>[LISTOWNER.ATTRIBUTE]</b><br/>
<p>Momenteel heb je de volgende beheerdersvelden ingesteld:
<table border=1><tr><td><b>Veld</b></td><td><b>Placeholder</b></td></tr>
<?php
$req = Sql_query("select name from {$tables['adminattribute']} order by listorder");
if (!Sql_Affected_Rows()) {
    print '<tr><td colspan=2>None</td></tr>';
}

while ($row = Sql_Fetch_Row($req)) {
    if (strlen($row[0]) < 20) {
        printf('<tr><td>%s</td><td>[LISTOWNER.%s]</td></tr>', $row[0], strtoupper($row[0]));
    }
}

?>
