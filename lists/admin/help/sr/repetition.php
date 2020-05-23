<p>Ponavljanje kampanje vam omogućava da automatski šaljete kopiju kampanje u regularnim intervalima. 
Ova kampanja će biti poslata svim pretplatnicima odabrane liste, tako da je ovaj pristup koristan samo kada kampanja ima
dinamički sadržaj, kao što je slanje veb strane ili za RSS kampanju.
</p>
<p>Morate izabrati:
<ul><li>"Interval ponavljanja" -  sat, dan, nedelja, dve nedelje ili četiri nedelje. </li>
<li>"Ponavljaj do" datum/vreme posle kog će phplist prestati da ponavlja kampanju.</li>
<li>Embargo vreme - ovo je datum/vreme kada će kampanja poslati prvi put ali bi trebalo da odražava
i vreme u toku dana/dan u nedelji kada želite da se redovno šalju nove kampanje.</li>
</ul>
<p>Kada je kampanja završila sa slanjem, phplist će napraviti kopiju kampanje i povećati embargo vreme za vrednost intervala ponavljanja.
<br>Ako je interval ponavljanja 'sat' onda će embargo vreme ostati na istom minutu u toku sata,
npr. prva kampanja će biti poslata u 08:30, a sledeća u 09:30 itd.
<br>Ako je interval ponavljanja 'dan' onda će embargo vreme ostati na istom satu i minutu u toku dana,
npr. prva kampanja će biti poslata 15. Marta u 08:30, a sledeća 16. Marta u 08:30 itd.
<br>Ako je interval ponavljanja 'nedelja', 'dve nedelje' ili 'četiri nedelje' onda će embargo vreme ostati na istom danu u nedelji, istom satu i minutu u toku dana,
npr. prva kampanja će biti poslata 15. Marta u 08:30, a sledeća 22. Marta u 08:30 itd.
</p>
<p>Takođe možete naznačiti datume kada ne bi trebalo slati ponovljenu poruku. 
Pogledajte <a href="https://resources.phplist.com/system/config/use_repetition" target="_blank">USE_REPETITION dokumentaciju</a> za ostala podešavanja.
Ako je embargo vreme za ponovljenu kampanju izostavljeno, phplist će ga povećati za interval ponavljanja.
</p>. 
