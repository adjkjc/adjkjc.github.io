Można użyć trzech róznych metod aby ustawić linię "Od":
<ul>
<li>Jeden wyraz: zostanie przekształcony w &lt;wyraz&gt;@<?php echo $domain?>
<br>Na przykład: <b>biuro</b> będzie wyświetlony jako <b>biuro@<?php echo $domain?></b>
<br>W większości programów pocztowych zostanie to wyświetlone jako <b>biuro@<?php echo $domain?></b>
<li>Dwa lub więcej wyrazów: zostanie przekształcone w <i>wyrazy ktore wpiszesz</i> &lt;biuro@<?php echo $domain?>&gt;
<br>Na przykład: <b>wykaz informacji</b> będzie wyświetlony jako <b>wykaz informacji &lt;biuro@<?php echo $domain?>&gt; </b>
<br>W wiekszości programów pocztowych zostanie to wyświetlone jako <b>wykaz informacji</b>
<li>Zero lub więcej wyrazów oraz adres email: zostanie przekształcone w <i>Wyrazy</i> &lt;adresemail&gt;
<br>Na przykład: <b>Moje Nazwisko moj@email.pl</b> będzie wyświetlony jako <b>Moje Nazwisko &lt;moj@email.pl&gt;</b>
<br>W wiekszości programów pocztowych zostanie to wyświetlone jako <b>Moje Nazwisko</b>
