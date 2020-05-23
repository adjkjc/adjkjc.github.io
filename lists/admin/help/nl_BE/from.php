Je kan drie verschillende manieren gebruiken om de Van lijn in te stellen:
<ul>
<li>Een woord: dit zal worden aangepast als &lt;het woord&gt;@<?php echo $domain?>
<br>Bijvoorbeeld: <b>informatie</b> zal worden: <b>informatie@<?php echo $domain?></b>
<br>Bij de meeste email programma&acute;s zal dit aangeven dat het bericht is van <b>information@<?php echo $domain?></b>
<li>Twee of meer woorden: dit zal worden aangepast als <i>de gewenste woorden</i> &lt;listmaster@<?php echo $domain?>&gt;
<br>Bijvoorbeeld: <b>lijst informatie</b> wordt <b>lijst informatie &lt;listmaster@<?php echo $domain?>&gt; </b>
<br>Bij de meeste email  programma&acute;s zal dit aangeven dat het bericht is van <b>lijst informatie</b>
<li>Nul of meer woorden en een email adres: dit zal worden aangepast als <i>Woorden</i> &lt;emailaddres&gt;
<br>Bijvoorbeeld: <b>Mijn Naam mijn@email.be</b> zal worden<b>Mijn Naam &lt;mijn@email.be&gt;</b>
<br>>Bij de meeste email  programma&acute;s zal dit aangeven dat het bericht is van <b>Mijn Naam</b>
