<p>Ezen az oldalon egy későbbi időpontban küldendő üzenetet készíthet elő.
 Megadhat minden, az üzenethez szükséges információt, a tényleges listák kivételével,
melyre ki kell mennie. Majd (az előkészített üzenet) küldésének pillanatában 
beazonosíthatja a listá(ka)t és az előkészített üzenet elküldésre kerül.</p>
<p>
 Az előkészített üzenet itt marad, vagyis nem tűnik el a küldés után, de sok
más alkalommal kiválasztható. Legyen óvatos vele, mert ennek lehet olyan hatása,
hogy több alkalommal küldi el ugyanazt az üzenetet
a felhasználóinak.
</p>
<p>
Ezt a szolgáltatást főleg a "több adminisztrátor" funkcióra gondolva terveztük.
Ha egy főadminisztrátor készíti elő az üzeneteket, a segédadminisztrátorok kiküldhetik a saját listáiknak. Ebben az esetben
további helyőrzőket tehet be az üzenetbe: az adminisztrátorok tulajdonságait.
</p>
<p>Ha az adminisztrátoroknak például van <b>Név</b> tulajdonságuk, akkor helyőrzőként beszúrhatja a [LISTOWNER.NAME] változót,
ami annak a listatulajdonosnak a <b>Név</b> tulajdonságával kerül behelyettesítésre, ahová 
az üzenet küldése történik. Ez nincs tekintettel arra, hogy ki küldi ki az üzenetet. Vagyis, ha 
a főadminisztrátor küldi ki egy olyan listának az üzenetet, melynek más a tulajdonosa, akkor a [LISTOWNER] helyőrzők a lista tulajdonosának értékeivel kerülnek behelyettesítésre, 
nem a főadminisztrátor értékeivel.
</P>
<p>Csak tájékoztatásul:
<br/>
A [LISTOWNER] helyőrzők formátuma <b>[LISTOWNER.ATTRIBUTE]</b><br/>
<p>Ön jelenleg a következő, meghatározott adminisztrátori tulajdonságokat használhatja:
<table border=1><tr><td><b>Tulajdonság</b></td><td><b>Helyőrző</b></td></tr>
<?php
$req = Sql_query("select name from {$tables['adminattribute']} order by listorder");
if (!Sql_Affected_Rows()) {
    print '<tr><td colspan=2>Nincs</td></tr>';
}

while ($row = Sql_Fetch_Row($req)) {
    if (strlen($row[0]) < 20) {
        printf('<tr><td>%s</td><td>[LISTOWNER.%s]</td></tr>', $row[0], strtoupper($row[0]));
    }
}

?>
