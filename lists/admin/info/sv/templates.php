<p>Här kan du definiera mallar som kan användas för att sända utskick till listorna. En mall är
en HTML-sida med <i>platshållaren</i> <b>[CONTENT]</b> någonstans. Där kommer
utskickstexten att infogas. </P>
<p>Förutom [CONTENT] kan du valfritt lägga till [FOOTER] och [SIGNATURE] för att infoga meddelandefot och signatur till meddelandet.</p>
<p>Bilder i din mall kommer inkluderas i utskicken. Om du lägger till bilder till utskicksinnehållet (när du sänder dem) måste de inkludera en komplett URL-adress och inte inkluderas i utskicket.</p>
<p><b>Medlemsspårning</b></p>
<p>För att underlätta medlemsspårning kan du lägga till [USERID] i mallen, vilket ersätts av en medlemsindikator. Detta fungerar endast när utskicket sänds som HTML. Du behöver ställa in en URL-adress där ID-numret tas emot. Alternativt kan du använda den inbyggda medlemsspårningen i <?php echo NAME?>. För att göra detta, lägg till [USERTRACK] i mallen så skapas en osynlig länk i utskicket för att hålla koll på antalet visningar.</p>
<p><b>Bilder</b></p>
<p>En referens till en bild som inte börjar med "http://" kan (och bör) laddas upp för inlagring i utskicket. Det rekommenderas att bara ett fåtal bilder används och att de är väldigt små. Om du laddar upp mallen kommer du kunna lägga till dina bilder. Referenser till bilder som ska inlagras bör vara från samma mapp, det vill säga &lt;img&nbsp;src=&quot;bild.jpg&quot;&nbsp;......&nbsp;&gt; och inte &lt;img&nbsp;src=&quot;/någon/mapp/plats/bild.jpg&quot;&nbsp;..........&nbsp;&gt;</p>
