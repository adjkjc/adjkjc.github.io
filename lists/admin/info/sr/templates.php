<p>Ovde možete definisati obrasce koji se mogu koristiti za slanje email-ova na liste. Obrazac je
HTML stranica na kojoj se negde nalazi <i>zamenski tekst</i> <b>[CONTENT]</b>. Ovo će biti mesto gde
će se umetnuti tekst za email. </P>
<p>Pored [CONTENT], možete dodati [FOOTER] i [SIGNATURE] da ubacite informacije za podnožje email-a i potpis, ali su oni neobavezni.</p>
<p>Slike u vašem obrascu će biti uključene u email-ovima. Ako dodate slike u sadržaj vaše poruke (kada je šaljete), moraju sadržati kompletan URL, i neće biti uključene u email.</p>
<p><b>Praćenje korisnika</b></p>
<p>Da olakšate praćenje korisnika, možete dodati [USERID] u vaš obrazac koji će biti zamenjeni identifikator korisnika. Ovo će raditi samo kad se email šalje kao HTML. Morate podesiti neku URL adresu koja će primiti ID. Alternativno možete koristiti ugrađene mogućnosti praćena u <?php echo NAME?>. Da bi to uradili dodajte [USERTRACK] u vašem obrascu i nevidljivi link će biti dodat u email da bi se pratio pregled tog email-a.</p>
<p><b>Slike</b></p>
<p>Bilo koja referenca na sliku koja ne počinje sa "http://" može (i trebalo bi) biti otpremljenja za uključivanje u email. Preporučljivo je koristiti samo nekoliko slika i napraviti ih veoma malim. Ako otpremite vaš obrazac, moći ćete da dodate svoje slike. Reference na slike uključene u obrazac bi trebalo biti iz istog direktorijuma, npr. &lt;img&nbsp;src=&quot;image.jpg&quot;&nbsp;......&nbsp;&gt; a ne &lt;img&nbsp;src=&quot;/some/directory/location/image.jpg&quot;&nbsp;..........&nbsp;&gt;</p>
