<p>
Nel campo del messaggio potete usare delle "variabili" che saranno sostituite dai rispettivi valori di un utente:
<br />Le variabili devono essere nel form <b>[NAME]</b> dove NAME pu&ograve; essere sostituito con il nome di uno dei tuoi attributi.
<br />Per esempio, se avete un attributo "Nome" mettere [NOME] da qualche parte nel messaggio al fine di identificare dove si trova il valore del "Nome" ed il campo in cui va inserito.</p>
<p>Potete anche aggiungere un testo da usare, se l'utente non ha alcun valore per questo attributo. Per farlo utilizzare la seguente sintassi:
<br/><strong>[SEGNALIBRO%%Altro]</strong>
<br/>Ad esempio potete iniziare il vostro messaggio con: 
<br/><i>Caro [NOME%%Amico],</i>
<br/> e il sistema inserir&agrave; il NOME per tutti gli utenti che hanno questo valore, e "Amico" per tutti gli altri.
</p>

<p>Al momento sono definiti i seguenti attributi:
<?php

print listPlaceHolders();

if (phplistPlugin::isEnabled('rssmanager')) {
    ?>
 <p>Potete impostare dei modelli per i messaggi che vengono spediti con elementi RSS. Per fare questo clicca su "Programmazione" e indica la frequenza per il messaggio. Il messaggio sar&agrave; poi usato per spedire la lista degli elementi agli utenti sulle liste che hanno impostato questa frequenza. Devete usare il segnalibro [RSS] nel messaggio per definire dove deve andare la lista.</p>
<?php 
}
?>
<p>Per spedire il contenuto di una pagina web, aggiungete i seguenti codici al messaggio:<br/>
<b>[URL:</b>http://www.esempio.org/nome_file.html<b>]</b></p>
<p>In questo URL potete includere informazioni sull'utente, ma non informazioni sugli attributi:<br/>
<b>[URL:</b>http://www.esempio.org/profiloutente.php?email=<b>[</b>email<b>]]</b><br/>
</p>
