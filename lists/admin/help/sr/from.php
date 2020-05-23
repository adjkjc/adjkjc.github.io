Možete koristiti tri različite metode da podesite liniju pošiljaoca:
<ul>
<li>Jedna reč: ovo će biti preformatisano kao &lt;reč&gt;@<?php echo $domain?>
<br>Primer: <b>informacija</b> će postati <b>informacija@<?php echo $domain?></b>
<br>U većini email programa email će se prikazati kao da je stigao od <b>informacija@<?php echo $domain?></b>
<li>Dve ili više reči: ovo će biti preformatisano kao <i>reči koje unesete</i> &lt;listmaster@<?php echo $domain?>&gt;
<br>Primer: <b>informacija o listi</b> će postati <b>informacija o listi &lt;listmaster@<?php echo $domain?>&gt; </b>
<br>U večini email programa email će se prikazati kao da je stigao od <b>informacija o listi</b>
<li>Nula ili više reči i email adresa: ovo će biti preformatisano kao <i>Reči</i> &lt;emailadresa&gt;
<br>Primer: <b>Moje Ime moj@email.com</b> će postati <b>Moje Ime &lt;moj@email.com&gt;</b>
<br>U večini email programa email će se prikazati kao da je stigao od <b>Moje Ime</b>
