Az üzenet mezőben használhat "változókat", melyek lecserélésre kerülnek a megfelelő értékre egy felhasználónál:
<br />A változókat <b>[NAME]</b> formában kell megadni, ahol a NAME lecserélhető az egyik tulajdonság nevével.
<br />Ha például van egy "First Name" nevű tulajdonság, akkor az üzenetben valahol tegye be a [FIRST NAME] változót annak a helynek a beazonosítására, ahová a címzett "First Name" értékét kell beszúrni.
</p><p>Ön jelenleg a következő tulajdonságokat határozta meg:
<?php

print listPlaceHolders();

if (ENABLE_RSS) {
    ?>
  <p>Az RSS-elemekkel kimenő üzenetekhez sablonokat adhat meg. Végrehajtásához kattintson az "Ütemterv" fülre, s adja meg
  az üzenet gyakoriságát. Az üzenet aztán az elemlista felhasználóknak történő küldésére kerül felhasználásra
  a listákon, akik azt a gyakoriságot adták meg. Az [RSS] helyőrzőt kell használnia az üzenetben
  annak beazonosításához, hogy hova kerüljön a lista.</p>
<?php 
}
?>

<p>Egy weboldal tartalmának küldéséhez tegye be a következőt az üzenet tartalmába:<br/>
<b>[URL:</b>http://www.pelda.hu/eleresi/ut/fajl.html<b>]</b></p>
<p>Ez az URL-cím alapvető felhasználói adatokat tartalmazhat, nem tulajdonság információt:</br>
<b>[URL:</b>http://www.pelda.hu/userprofile.php?email=<b>[</b>e-mail<b>]]</b><br/>
</p>
