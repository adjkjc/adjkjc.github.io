Er zijn drie verschillende manieren om de afzender in te stellen:<br />
<ul>
<ul>
  <li>Een woord: dit zal worden aangepast als &lt;het woord&gt;@<?php echo $domain?>
    <br>
    Bijvoorbeeld: <b>informatie</b> wordt: <b>informatie@<?php echo $domain?></b>
    <br>
    Bij de meeste e-mail programma's zal worden aangeven dat het bericht afkomstig is van <b>informatie@<?php echo $domain?></b>
  </li>
  <li>Twee of meer woorden: dit zal worden aangepast als <i>de gewenste woorden</i> &lt;lijstbeheerder@<?php echo $domain?>&gt;
    <br>Bijvoorbeeld: <b>lijst beheerder</b> wordt <b>lijst beheerder &lt;lijstbeheerder@<?php echo $domain?>&gt; </b>
    <br>
    Bij de meeste e-mail  programma's zal worden aangeven dat het bericht afkomstig is van <b>lijst beheerder</b>
  </li>
  <li>Nul of meer woorden en een e-mail adres: dit zal worden aangepast als <i>Woorden</i> &lt;emailaddres&gt;
    <br>
    Bijvoorbeeld: <b>Mijn Naam mijn@email.nl</b> zal worden <b>Mijn Naam &lt;mijn@email.nl&gt;</b>
    <br>
    Bij de meeste e-mail  programma's zal worden aangeven dat het bericht afkomstig is van <b>Mijn Naam</b>
  </li>
</ul>
