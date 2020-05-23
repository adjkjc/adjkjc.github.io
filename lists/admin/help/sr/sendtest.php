
<h3>Pošaljite test poruku</h3>

<p>Unesite važeću email adresu u polje i kliknite na dugme. 
<i>Adresa koju unesete mora da bude pretplatnik u bazi podataka.</i></p>
<p>Slanje test poruke se savetuje da bi se postarali da je vaša kampanja uspešno primljena. Međutim, veliki broj vaših pretplatnika će koristiti različite aplikacije da pregledaju svoj email
pa možda neće biti primljena na isti način za svakog od njih, tj. da neće biti u obliku koji vi želite. Najbolji način da se postarate da je vaša kampanja pročitana i vidljiva za sve vaše pretplatnike je da koristite običan i čist HTML u vašim kampanjama.</p>

<?php

if (SEND_ONE_TESTMAIL) {
    ?>

<p>Primićete jednu poruku na adresi koju ste uneli. Ova poruka će biti u tekstualnom ili HTML formatu, u zavisnosti od podešavanja odgovarajućeg profila.</p>

<?php

} else {
    ?>

<p><strong>Primićete dve poruke na adresi koju ste uneli.</strong> jedna od njih će biti <strong>tekstualna verzija</strong> vaše kampanje, a druga će biti <strong>HTML verzija</strong> vaše kampanje.</p>

<p>Vaši pretplatnici će primiti samo jednu poruku. Primljena verzija će zavisiti od (tekst ili HTML) podešavanja pretplatničkog profila.</p>

<?php 
} ?>



