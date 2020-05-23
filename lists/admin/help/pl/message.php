W polu wiadomości można używać "zmiennych", które zostaną zastąpione przez wartość odpowiednią dla użytkownika:
<br />Zmienne muszą być w formacie <b>[NAZWA]</b> gdzie NAZWA może być zastąpiona przez nzawę jednego z atrybutów.
<br />Na przykład gdy masz atrybut "Imie uzytkownika" wpisz [IMIE UZYTKOWNIKA] gdzieś w wiadomości aby oznaczyć miejsce, w którym ma zostać wstawiona wartość "Imie uzytkownika".
</p><p>Aktualnie zdefiniowałes następujące atrybuty:
<?php

print listPlaceHolders();

if (ENABLE_RSS) {
    ?>
  <p>Możesz ustawić szablony wiadomości, które bedą wysyłane z elementami RSS. Aby to zrobić klliknij zakładkę Harmonogram i wkaż
  częstotliwoś wysyłania wiadomości. Wtedy wiadomośc zostanie użyta aby wysłć listę elementów do użytkowników
  na listach, którzy mają ustawioną częstotliwość. Musisz użyć symbolu [RSS] w wiadomości
  w celu okreslenia gdzie lista ma zostać rozesłana.</p>
<?php 
}
?>

<p>Aby wysłać zawartość strony internetowej, należy dodać następującą treść w wiadomości:<br/>
<b>[URL:</b>http://www.przyklad.pl/sciezka/do/pliku.html<b>]</b></p>
<p>W tym adresie możesz dołączyć podstawowe informacje o użytkowniku, nie atrybut informacja:</br>
<b>[URL:</b>http://www.przyklad.pl/userprofile.php?email=<b>[</b>email<b>]]</b><br/>
</p>
