<p>Na ovoj strani možete pripremiti poruku koja će biti poslata kasnijeg datuma.
 Možete navesti sve potrebne informacije za poruku, osim aktuelnih
listi na koje se šalje. Onda, u trenutku slanja (pripremljene poruke) možete
identifikovati liste i pripremljena poruka će biti poslata.</p>
<p>
 Vaša pripremljena poruka je obrazac, tako da neće nestati kada bude
poslata, ali može biti izabrana više različitih puta. Budite oprezni sa ovim, zato što
ovo može biti uzrok višestrukog slanja iste poruke vašim korisnicima.
</p>
<p>
Ova funkcionalnost je posebno dizajnirana sa funkcijom "višestrukih administratora" na umu.
Ako glavni administrator pripremi poruke, pod-administratori mogu da ih pošalju na svoje liste. Uovom slučaju
možete dodati dodatne zamenske tekstove u vašoj poruci: atribute administratora.
</p>
<p>Na primer, ako imate atribut <b>Name</b> za administratore, možete dodati [LISTOWNER.NAME] kao zamenski tekst,
koji će biti zamenjen sa <b>Name</b> vlasnika liste, kojoj je poslata poruka. Ovo važi bez
obzira ko pošalje poruku. Ako glavni administrator pošalje poruku listi koja je u vlasništvu
druge osobe, [LISTOWNER] zamenski tekstovi će biti zamenjeni sa vrednostima za vlasnika 
te liste, a ne vrednostima za glavnog administratora.
</P>
<p>Samo za referencu:
<br/>
Format [LISTOWNER] zamenskih tekstova je <b>[LISTOWNER.ATTRIBUTE]</b><br/>
<p>Trenutno imate definisane sledeće administratorske atribute:
<table border=1><tr><td><b>Atribut</b></td><td><b>Zamenski tekst</b></td></tr>
<?php
$req = Sql_query("select name from {$tables['adminattribute']} order by listorder");
if (!Sql_Affected_Rows()) {
    print '<tr><td colspan=2>Nijedan</td></tr>';
}

while ($row = Sql_Fetch_Row($req)) {
    if (strlen($row[0]) < 20) {
        printf('<tr><td>%s</td><td>[LISTOWNER.%s]</td></tr>', $row[0], strtoupper($row[0]));
    }
}

?>
