A feladó megadásához háromféle módszer közül választhat:
<ul>
<li>Egy szó: Ez újra fogja formázni mint &lt;a szo&gt;@<?php echo $domain?>
<br>Például: Az <b>informacio</b> <b>informacio@<?php echo $domain?></b> lesz
<br>A legtöbb levelezőprogramban ez <b>informacio@<?php echo $domain?></b> feladóként jelenik meg
<li>Két vagy több szó: Ezt újra fogja formázni mint <i>az Ön által beírt szavak</i> &lt;listmaster@<?php echo $domain?>&gt;
<br>Például: A <b>lista informacio</b> <b>lista informacio &lt;listmaster@<?php echo $domain?>&gt; </b> lesz
<br>A legtöbb levelezőprogramban ez <b>lista informacio</b> feladóként jelenik meg
<li>Nulla vagy több szó és egy e-mail cím: Ezt újra fogja formázni, mint <i>Szavak</i> &lt;emailcim&gt;
<br>Például: <b>A Nevem my@email.com</b> <b>A Nevem &lt;my@email.com&gt;</b> lesz
<br>A legtöbb levelezőprogramban ez  <b>A Nevem</b> feladóként jelenik meg
