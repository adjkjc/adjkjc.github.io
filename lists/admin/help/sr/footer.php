
<h3>Podnožje poruke</h3>

<p>Podnožje poruke ima nekoliko namena i veoma je važno. Kada se poruka prosledi na neku drugu email adresu, podnožje će biti promenjeno da bude ono za "prosleđene poruke", koje će omogućiti
određivanje drugačijeg sadržaja za pojedince koji nisu pretplaćeni na vaš bilten, kako bi ih pozvali da se pretplate.</p>

<p>Možete podesiti podrazumevano podnožje u
<?php

## for translators, you can translater the word "Configuration" below
echo PageLink2('configure&id=messagefooter', 'Konfiguraciji');
?>
 </p>

<p>Možete koristiti nekoliko zamenskih tekstova, koji će pomoći vašim pretplatnicima da identifikuju email koji prime i šta da urade sa njim.

<ul>
<li><b>[UNSUBSCRIBEURL]</b> - personalizovana lokacija za odjavu pretplatnika</li>
<li><b>[PREFERENCESURL]</b> - personalizovana lokacija za promenu podešavanja korisnika</li>
<li><b>[FORWARDURL]</b> - personalizovana lokacija za prosleđene poruke</li>
<li><b>[EMAIL]</b> - email adresa na koju je poslata poruka</li>
<li><b>[USERID]</b> - jedinstveni identifikator za ovog pretplatnika</li>
<li><b>[USERTRACK]</b> - kod za praćenje "otvorenih"</li>
</ul>
</p>

<h3>Predloženo podnožje</h3>
<div class="suggestion">
<pre>
--
&lt;h2&gt;Ova poruka je poslata na [EMAIL] od <?php echo getConfig('message_from_name').' '.getConfig('admin_address')?>&lt;/h2&gt;

&lt;h3&gt;&lt;a href="[UNSUBSCRIBEURL]"&gt;Odjava&lt;/a&gt;&lt;/h3&gt;
&lt;h3&gt;&lt;a href="[PREFERENCESURL]"&gt;Promeni podešavanja&lt;/a&gt;&lt;/h3&gt;
&lt;h3&gt;&lt;a href="[FORWARDURL]"&gt;Prosledi ovu poruku&lt;/a&gt;&lt;/h&gt;
[USERTRACK]
&lt;br/&gt;Our Marketing dept | 1000 Marketing Road | Suite 16 | Market Town | ST | 00000
</pre>
</div>

<h3>Formatiranje</h3>
<p>Možete koristiti HTML u podnožju. Pokušajte da bude jednostavno. Podnožje za tekstualnu verziju email-ova će biti generisano iz HTML-a, uklanjanjem HTML tagova. Ako ne koristite nikakav HTML u podnožju, HTML verzija će biti generisana dodavanjem &lt;br/&gt; za kraj reda.</p>


</p>
