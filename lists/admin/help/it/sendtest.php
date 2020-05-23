
<h3>Inviare un messaggio di prova</h3>

<p>Inserite un indirizzo e-mail valido nella casella e cliccate sul pulsante.
<i>L'indirizzo che inserite deve appartenere ad un utente del database.</i></p>
<p>Vi consigliamo fortemente di inviare un messaggio di prova al fine di assicurarvi che esso arrivi correttamente. Tuttavia, molti dei vostri utenti useranno appicativi diversi per controllare le e-mail, quindi potrebbe non arrivare a tutti uguale. Il miglior modo per accertarvi che il messaggio sia leggibile e visibile a tutti gli utenti &egrave; di usare un codice HTML semplice.</p>

<?php

if (SEND_ONE_TESTMAIL) {
    ?>

<p>Riceverete un messaggio all'indirizzo indicato. Questo messaggio sar&agrave; in formato testo o HTML, a seconda delle impostazioni del profilo.</p>

<?php

} else {
    ?>

<p><strong>Riceverete due messaggi all'indirizzo inserito.</strong>Uno di essi sar&agrave; la <strong>versione testo</strong> del vostro messaggio e l'altro la <strong>versione HTML</strong>.</p>

<p>I vostri utenti riceveranno solo un messaggio. La versione che gli arriver&agrave; dipende dalle impostazioni del profilo dell'utente.</p>

<?php 
} ?>



         