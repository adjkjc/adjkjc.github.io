<p>Na tej stronie możesz przygotować wiadomość, która będzie wysłana z późniejszą datą.
 Mżesz określić wszystkie informacje wymagane w wiadomości oprócz
list, do których ma zostać wysłana. Następnie, w momencie wysyłania (przygotowanej wiadomości) możesz
określić listy i przygotowana wiadomość zoastanie wysłana.</p>
<p>
 Przygotowana wiadomość jest trwała, więc nie zniknie gdy zostanie
wysłana, lecz może być wybrana wiele razy. Uważaj ponieważ przez to
możesz wysłać tą samą wiadomość so użytkowników kilka razy.
</p>
<p>
Ta funkcjonalność jest zaprojektowana szczególnie dla wielu administratorów.
Jesli główny administrator przygoruje wiadomości, inny administrator może wysłać je do własnych list. W tym przypadku 
możesz dodać symbole do wiadomości: adtybuty administratorów.
</p>
<p>Na przykład jeśli masz atrybud <b>Imie</b> dla administratorów, możesz dodać symbol [LISTOWNER.IMIE],
który zostanie zamieniony z <b>Imie</b> właściciela listy, do której wiadomość jest wysyłanathe message is sent to.
Jest to niezależne od tego kto wyśle wiadomość. Więc jeśli główny administratod wysyła wiadomość do listy, której
właścicielem jest ktoś inny, symbole [LISTOWNER] zostana zamienione z wartościami właściciela listy a nie z wartością
głównego administratora.
</P>
<p>Tylko dla zapamiętania:
<br/>
Format symboli [LISTOWNER] to <b>[LISTOWNER.ATRYBUT]</b><br/>
<p>Aktualnie zdefiniowano następujące atrybuty administratora:
<table border=1><tr><td><b>Atrybut</b></td><td><b>Symbol</b></td></tr>
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
