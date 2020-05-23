<p>In deze pagina kan u een bericht voorbereiden om later te verzenden.
 U kan alle info die u voor het bericht nodig heeft vastleggen, uitgezonderd de lijst(en) 
 waar het naartoe moet worden verzonden. Wanneer u het bericht gaat verzenden (het voorbereide bericht) kan u
 de lijst(en) aanduiden en zal het voorbereide bericht worden verzonden.</p>
<p>
 Uw voorbereide bericht is stationair, dus het zal niet verdwijnen als het verzonden is, 
 het kan verschillende malen worden gebruikt. Pas hier mee op, omdat 
 het kan gebeuren dat u zo het zelfde bericht verschillende malen naar je gebruikers verzend.
</p>
<p>
Deze functionaliteit is ontworpen met de "meerdere beheerders" functionaliteit in het vooruitzicht.
Als een hoofd beheerder een bericht voorbereid dan kunnen sub-beheerders het bericht naar hun eigen lijsten sturen. In dit geval kan u 
bijkomende markeringen op het bericht plaatsen: de attributen van beheerders.
</p>
<p>Bijvoorbeeld als u een attribuut <b>Naam</b> hebt, dan kunnen beheerders [LISTOWNER.NAME] toevoegen als markering.
Deze zal dan worden vervangen door de <b>Naam</b> van de beheerder van de lijst waarnaar het bericht werd verzonden. Dit heeft
niets te maken met wie het bericht heeft verzonden. Dus als de hoofd beheerder het bericht verzend naar een lijst die in het bezit is van iemand
anders, dan zullen de [LISTOWNER] markeringen worden vervangen met de waarden van de eigenaar van de lijst, niet de waarden van de hoofd beheerder.
</P>
<p>Enkel voor verwijzing:
<br/>
Het formaat van de [LISTOWNER] markering is <b>[LISTOWNER.ATTRIBUTE]</b><br/>
<p>Momenteel heeft u de volgende beheerders attributen ingesteld:
<table border=1><tr><td><b>Attribuut</b></td><td><b>Placeholder</b></td></tr>
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
