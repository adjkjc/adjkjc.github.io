<p>
U polju za poruku možete koristiti "promenljive", koje će biti zamenjene sa odgovaralućom vrednošću za pretplatnika:
<br />Promenljive moraju biti u formatu <strong>[IME]</strong> gde se IME može zameniti sa imenom vaših atributa.
<br />Na primer, ako imate atribut "Ime" stavite [IME] negde u poruci da identifikujete gde je potrebno ubaciti vrednost "Ime" nekog primaoca.</p>
<p>Takođe možete dodati neki tekst koji će se koristiti, ako pretplatnik nema vrednost za taj atribut. Da bi to uradili, koristite sledeću sintaksu:
<br/><strong>[ZAMENSKITEKST%%Rezervne reči]</strong>
<br/>Na primer, možete početi vaš bilten sa:
<br/><i>Dragi [IME%%Prijatelju],</i>
<br/>i ubaciće IME za one pretplatnike koji imaju tu vrednost, a "Prijatelju" za sve druge.
</p>

<p>Trenutno imate sledeće atribute definisane:
<?php

print listPlaceHolders();

if (phplistPlugin::isEnabled('rssmanager')) {
    ?>
  <p>Možete podesiti obrasce za poruke koje se šalju sa RSS stavkama. Da bi to uradili, kliknite na "Raspored slanja" jezičak i naznačite
  učestalost poruke. Poruka će se onda koristiti za slanje liste stavki korisnicima
  liste, koji imaju podešenu tu učestalost. Morate koristiti [RSS] zamenski tekst u vašoj poruci
  da bi identifikovali gde lista treba da ide.</p>
<?php 
}
?>

<p>Da pošaljete sadržaj veb strane, dodajte sledeće u  tekst vaše poruke:<br/>
<b>[URL:</b>http://www.example.org/path/to/file.html<b>]</b></p>
<p>Možete ubaciti osnovne korisničke informacije u ovom URL-u, ali ne informacije iz atributa:</br>
<b>[URL:</b>http://www.example.org/userprofile.php?email=<b>[</b>email<b>]]</b><br/>
</p>
