
<h3>Il pi&egrave; di pagina</h3>

<p>Il pi&egrave; di pagina del messaggio serve a diversi scopi ed &egrave; molto importante. Quando il messaggio viene inoltrato a qualche altro inidirizzo e-mail, il pi&egrave; di pagina verr&agrave; cambiato apposta per indicare che si tratta di un "messaggio inoltrato". Questo vi permetter&agrave; di specificare un contenuto diverso per le persone che non sono iscritte alla vostra newsletter, per esempio potete invitarle ad iscriversi.</p>

<p>Potete impostare il pi&egrave; di pagina di predefinito dalla 
<?php

## i traduttori, potete tradurre la parola "configurazione" di sotto
echo PageLink2('configure&id=messagefooter', 'Configurazione');
?>
 </p>

<p>Potete impostare molti segnalibri, che aiuteranno gli utenti ad identificare le e-mail che ricevono e cosa possono fare con esse.

<ul>
<li><b>[UNSUBSCRIBEURL]</b> - il link diretto per cancellarsi dalla newsletter</li>
<li><b>[PREFERENCESURL]</b> - il link diretto per modificare i dettagli dell'utente</li>
<li><b>[FORWARDURL]</b> - il link diretto per consentire agli utenti di inoltrare il messaggio ad altre persone</li>
<li><b>[EMAIL]</b> - l'indirizzo e-mail che ha ricevuto questo messaggio</li>
<li><b>[USERID]</b> - una parola unica per questo utente</li>
<li><b>[USERTRACK]</b> - il tracciamento utenti per "Visti"</li>
</ul>
</p>

<h3>Pi&egrave; di pagina consigliato</h3>
<div class="suggestion">
<pre>
--
&lt;h2&gt;Questo messaggio &egrave; stato inviato a [EMAIL] da <?php echo getConfig('message_from_name').' '.getConfig('admin_address')?>&lt;/h2&gt;

&lt;h3&gt;&lt;a href="[UNSUBSCRIBEURL]"&gt;Cancella iscrizione&lt;/a&gt;&lt;/h3&gt;
&lt;h3&gt;&lt;a href="[PREFERENCESURL]"&gt;Cambia preferenze&lt;/a&gt;&lt;/h3&gt;
&lt;h3&gt;&lt;a href="[FORWARDURL]"&gt;Inoltra questo messaggio&lt;/a&gt;&lt;/h&gt;
[USERTRACK]
&lt;br/>Our Marketing dept | 1000 Marketing Road | Suite 16 | Market Town | ST | 00000
</pre>
</div>

<h3>Formattazione</h3>
<p>Potete usare l'HTML nel pi&egrave; di pagina. Cercate di tenerlo piuttosto semplice. Il pi&egrave; di pagina per le e-mail di testo verr&agrave; generato dall'HTML, toglienfo le tag HTML. Se non utilizzate l'HTML nel pi&egrave; di pagina, questa versione sar&agrave; generata aggiungendo &lt;br/&gt; alle linee finali.</p>


</p> 
