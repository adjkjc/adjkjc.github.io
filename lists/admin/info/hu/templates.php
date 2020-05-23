<p>Itt hozhatja létre a listákra küldendő e-mailekben használt sablonokat. A sablon
egy HTML oldal, melyben megtalálható valahol a <b>[CONTENT]</b> <i>helyőrző</i>. Ez az a hely, ahová
beszúrásra kerül az e-mail szövege. </P>
<p>A [CONTENT] helyőrzőn kívül használhatja a [FOOTER] és a [SIGNATURE] helyőrzőt az üzenet láblécének és aláírásának beszúrásához, azonban ezek elhagyhatóak.</p>
<p>A sablonban lévő képek beágyazásra kerülnek az e-mailekbe. Ha az üzenet tartalmát képekkel illusztrálja (küldéskor), akkor ezek teljes URL-címére lesz szükség, s nem kerülnek beágyazásra az e-mailbe.</p>
<p><b>A felhasználók követése</b></p>
<p>A felhasználók követésének elősegítéséhez beteheti a [USERID] helyőrzőt a sablonba, mely a felhasználó azonosítójával kerül behelyettesítésre. Ez csak a HTML formátumú e-mailek küldésekor használható. Meg kell majd adnia néhány URL-címet, mely fogadni fogja az azonosítókat. A <?php echo NAME?> saját felhasználó-követőjét is használhatja. Ehhez a [USERTRACK] helyőrzőt szúrja be a sablonba, amivel egy láthatatlan hivatkozást adhat hozzá az e-mailhez, mellyel követheti az e-mail elolvasásainak számát.</p>
<p><b>Képek</b></p>
<p>Egy képre mutató bármilyen hivatkozás, mely nem a "http://" előtaggal kezdődik, feltölthető (és fel is kell tölteni), hogy tartalmazza az e-mail. Csak néhány, és nagyon kicsi kép használata javasolt. Ha feltölti a sablont, hozzá tudja adni a képeket. A tartalmazandó képek hivatkozásainak ugyanabból a könyvtárból kell lennie, pl. &lt;img&nbsp;src=&quot;kep.jpg&quot;&nbsp;......&nbsp;&gt; és nem &lt;img&nbsp;src=&quot;/valamilyen/konyvtar/utvonala/kep.jpg&quot;&nbsp;..........&nbsp;&gt;</p>
