<p>Tutaj możesz zdefiniować szablony, których będzie można użyć podczas wysyłania wiadomości do list wysyłkowych. Szablon jest 
stroną HTML z umieszczonym <i>Symbolem</i> <b>[CONTENT]</b>. To będzie miejsce gdzie
zostanie wstawiona treść wiadomości. </P>
<p>Dodatkowo oprócz [CONTENT], możesz dodać [FOOTER] oraz [SIGNATURE] aby wstawić stopkę oraz podpis wiadomości, ale nie jest to konieczne.</p>
<p>Obrazy z szblonów zostaną umieszczone w wiadomości. Jeśli dodasz obrazy w treści wiadomości (podczas redagowania), będą one musiały zawierać kopletny URL i nie będą dołączone do wiadomości.</p>
<p><b>Śledzenie użytkowników</b></p>
<p>Aby ułatwić śledzenie użytkowników, możesz dodać [USERID] do szablonu, co zostanie zastąpione identyfikatorem użytkownika. To zadziała tylo przy wysyłaniu wiadomości email w formacie HTML. Musisz skonfigurować adres URL, do otrzymywania ID. Ewentualnie możesz uzyć wbudowanego w <?php echo NAME?> śledzenia użytkowników. Aby to zrobić, dodaj [USERTRACK] do szablonu co spowoduje dodanie niewidocznego linku do wiadomości w celu śledzenia wyświetleń wiadomości.</p>
<p><b>Obrazy</b></p>
<p>Każde odniesienie do obrazu, które nie zaczyna sie od "http://" może (i powinno) zostać dołączone do wiadomości. Zaleca się korzystać z kilku bardzo małych obrazów. Jeśli prześlesz szablon, będziesz mógł dodać zdjęcia. Odniesienia do pbrazów, które mają być dołączone powinny być z tego samego katalogu, tj. &lt;img&nbsp;src=&quot;image.jpg&quot;&nbsp;......&nbsp;&gt; a nie &lt;img&nbsp;src=&quot;/lokalizacja/jakiegoś/katalogu/obraz.jpg&quot;&nbsp;..........&nbsp;&gt;</p>
