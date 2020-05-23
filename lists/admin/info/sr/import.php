<?php return; ?>
<p>

<h3>Uvezi email adrese u postojeće liste</h3>

Ima četiri načina da uvezete postojeće informacije:

<ul>
<li><?php echo PageLink2('import2', 'Uvezi email adrese sa različitim vrednostima za atribute');?>. Lista email adresa može imati atribute koji još nisu definisani. Oni će biti automatski napravljeni kao "textline" atributi. Trebalo bi da koristite ovu opciju ako uvozite tabelarni/CSV fajl koji ima korisničke atribute u kolonama i jednog korisnika po liniji. <br/><br/>
<li><?php echo PageLink2('import1', 'Uvezi email adrese sa istim vrednostima za atribute');?>. Lista email adresa mora biti u skladu sa strukturom koju ste podesili u <?php echo NAME?>. Trebalo bi da koristite ovu opciju ako uvozite jednostavnu listu email adresa. Tada možete navesti vrednosti atributa za svaki unos. Biće isti za svaki unos.<br/><br/>
<li><?php echo PageLink2('import3', 'Uvezi email adrese sa IMAP naloga');?>. Ovo će pretražiti email adrese u vašim IMAP folderima i dodati ih. Samo Ime osobe može biti pronađeno kao atribut.<br/><br/>
<li><?php echo PageLink2('import4', 'Uvezi email adrese iz druge baze podataka');?>.
</ul>

</p>
