<p>In questa pagina potete creare un messaggio da spedire in una data successiva. Potete specificare tutte le informazioni necessarie per il messaggio, fatta eccezione per l'effettiva lista(e) a cui deve deve essere inviato. In seguito, al momento dell'invio (di un messaggio precedentemente creato) potete selezionare la o le liste alle quali verr&agrave inviato.</p>
<p>Il vostro messaggio sar&agrave; salvato , cos&igrave; non sparir&agrave; dopo l'invio, ma potr&agrave; essere selezionato molte altre volte. Fate attenzione, perch&eacute; questo pu&ograve; comportare che lo stesso messaggio venga inviato agli utenti per molte volte.</p>
<p>Questa funzionalit&agrave; &egrave; stata progettata tenendo a mente specialmente gli &ldquo;amministratori multipli&bdquo; . Se i messaggi vengono preparati da un amministratore principale, gli amministratori secondari possono inviarli alle loro proprie liste. In questo caso potete aggiungere i contenuti supplementari al vostro messaggio: gli attributi dei amministratori.</p>
<p>Per esempio se avete un attributo <b>Nome</b> per gli amministratori potete aggiungere [LISTOWNER.NAME] come segnalibro, questo sar&agrave; sostituito dal <b>Nome</b> del proprietario della lista, a cui il messaggio sar&agrave; inviato. Questo avverr&agrave; a prescindere da chi invia il messaggio. Cos&igrave; se l'amministratore principale trasmette il messaggio ad una lista che &egrave; di propriet&agrave; di qualcun'altro, i segnaposti [LISTOWNER] saranno sostituiti con i valori del proprietario della lista, e non con i valori dell'amministratore principale.</p>
<p>Riferimenti:
<br/>
Il formato dei segnalibri  [LISTOWNER] &egrave; <b>[LISTOWNER.ATTRIBUTE]</b><br/>
<p>Al momento gli attributi definiti sono i seguenti:
<table border=1><tr><td><b>Attributi</b></td><td><b>Segnalibro</b></td></tr>
<?php
$req = Sql_query("select name from {$tables['adminattribute']} order by listorder");
if (!Sql_Affected_Rows()) {
    print '<tr><td colspan=2>None</td></tr>';
}

while ($row = Sql_Fetch_Row($req)) {
    if (strlen($row[0]) < 20) {
        printf('<tr><td>%s</td><td>[LISTOWNER.%s]</td></tr>', $row[0], strtoupper($row[0]));
    }
}

?>