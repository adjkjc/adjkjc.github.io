<h3>Format wiadomości</h3>
Jesli ustawisz "auto wykrywanie", wiadomość będzie klasyfikowana jako HTML jeśli tylko zostanie w niej znaleziony jeden tag HTML (&lt; ... &gt;) .
</p><p><b>Bezpieczniej jest zostawić włączona funkcję "auto wykrywanie"</b></p><p>
Jeśli nie jesteś pewien, że funkcja "automatyczne wykrywanie" zadziała i wiadomośc, którą wklejasz została zformatowana jako HTML, wybierz "HTML".
Odnośniki do zasobów (np. obrazów) będą musiały mieć pełny adres URL czyli zaczynający się od http:// (w odróżnieniu od obrazów w szblonach).
Jeśli chodzi o pozostałe rzeczy to jesteś w pełni odpowidzialny za formatowanie tekstu.
<p>Jeśli chcesz wymusić aby wiadomość była sformatowana jako czysty teks, zaznacz "Tekst".
</p><p>
Te informacje są wykorzystywane aby utworzyć tekstową wersję wiadomości sformatowanej jako HTML lub aby utworzyć wiadomość HTML z wiadomości sformatowanej jako zwykły tekst.
Formatowanie będzie następujące:<br/>
Oryginalna wiadomość sformatowana w HTML -&gt; tekst<br/>
<ul>
<li><b>Pogrubiony</b> tekst będzie zawarty w <b>* (gwiazdkach)</b>, <b>pochylony</b> tekst w <b>/-ukośnikach</b></li>
<li>Odnośniki zawarte w tekście zostaną zamienione na tekst a ponich w nawiasach będą umieszczone adresy URL</li>
<li>Duże bloki tekstu zostaną zawinięte w kolumny 70</li>
</ul>
Oryginalna wiadomość sformatowana jako zwykły tekst -&gt; HTML<br/>
<ul>
<li>Podwójny znak nowej linii zoatanie zamieniony na &lt;p&gt; (akapit)</li>
<li>Pojedynczy znak nowj linii zostanie zamieniony na &lt;br /&gt; (koniec linii)</li>
<li>Adresy email będą klikalne</li>
<li>Adresy URL będą klikalne. Adresy mogą być w każdej z następujących form:<br/>
<ul><li>http://jakis.adres.strony/jakas/sciezka/jakisplik.html
<li>www.adresstrony.pl
</ul>
Utworzone odnośniki bedą miały arkusz stylów klasy "url" oraz cel "_blank".
</ul>
<b>Ostrzeżenie</b>: wskazanie, że wiadomość ma być zwykłym tekstem i wklejenie HTML do pola, spowoduje wysłanie wiadomości jako zwykły tekst z kodem HTML do użytkowników, którzy chcą odbierać wiadomości tekstowe.
