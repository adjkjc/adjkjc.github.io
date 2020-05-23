<h3>Az üzenet formátuma</h3>
Az "automatikus felismerés" használatakor az üzenet HTML-ként kerül besorolásra, amint egy HTML címkét (&lt; ... &gt;) talál.
</p><p><b>Nyugodtan bejelöltként hagyhatja az "Automatikus felismerés" lehetőséget</b></p><p>
Ha nem biztos benne, hogy működik-e az "automatikus felismerés", és a beillesztendő üzenet HTML-ben formázott-e, válassza a "HTML" lehetőséget.
Erőforrások (pl. képek) külső hivatkozásaihoz szükség van a teljes URL-címre, pl. a http:// előtaggal kezdődve (a sablon képeitől eltérően).
A többi esetén teljesen Ön felelős a szöveg formázásáért.
<p>Ha az üzenetet egyszerű szövegként akarja kényszeríteni, jelölje be a "Szöveg" lehetőséget.
</p><p>
Ez az információ egy HTML formátumú üzenet csak szöveges változatának, vagy egy Szöveg formátumú üzenet HTML-változatának létrehozásához kerül felhasználásra.
Ez a formázás a következő lesz:<br/>
Az eredeti HTML -&gt; text<br/>
<ul>
<li>A <b>félkövér</b> szöveget a <b>*szimbólum közé teszi</b>, a <b>dőlt</b> szöveget <b>/ szimbólum közé</b></li>
<li>A szöveg körüli hivatkozásokat szövegre fogja cserélni, melyet zárójelben követ az URL-cím</li>
<li>A nagy szövegblokkokat a 70. oszlopnál tördeli új sorba</li>
</ul>
Az eredeti Szöveg -&gt; HTML<br/>
<ul>
<li>A kétszeres új sorokat &lt;p&gt; (bekezdés) helyettesíti be</li>
<li>Az egyszeres új sorokat &lt;br /&gt; (sortörés) helyettesíti be</li>
<li>Kattinthatóak lesznek az e-mail címek</li>
<li>Kattinthatóak lesznek az URL-címek. Az URL-címek a következő formák bármelyikében lehetnek:<br/>
<ul><li>http://vmilyen.webhely.url/eleresi/ut/vmilyenfajl.html
<li>www.webhelyurl.com
</ul>
A hivatkozásokat az "url" stíluslap osztállyal és a "_blank" célla hozza létre.
</ul>
<b>Figyelmeztetés</b>: jelzi, hogy az üzenet szöveg, de HTML-szöveg beillesztése a panelbe a felhasználóknak elküldendő egyszerű szöveges HTML-t fog eredményezni, akik szöveges e-maileket akarnak kapni.
