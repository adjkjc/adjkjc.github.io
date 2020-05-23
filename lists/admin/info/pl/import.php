
<p>

<h1>Importowanie adresów email do istniejących list</h1>

Istnieją cztery sposoby aby zaimportować istniejące informacje:

<ul>
<li><?php echo PageLink2('import2', 'Import adresów z różnymi wartościami dla atrybutów');?>. Lista adresów email może mieć niezdefiniowane atrybuty. Zostaną one utworzone automatycznie jako "pole tekstowe". Powienieneś użyć tego sposobu, jeśli importujesz plik arkusza kalkulacyjnego / CSV, który ma atrybuty dla użytkowników w kolumnach oraz jednego użytkownika na wiersz. <br/><br/>
<li><?php echo PageLink2('import1', 'Import adresów z tymi samymi wartościami dla atrybutów');?>. Lista adresów email będzie musiała odpowiadać strukturze, którą już ustawiłeś w <?php echo NAME?>. Powienieneś użyć tego sposobu, jeśli importujesz prostą listę adresów email. Możesz potem spracyzować wartości atrybutów dla każdego wpisu. Będą one takie same dla wszystkich importowanych adresów.<br/><br/>
<li><?php echo PageLink2('import3', 'Import adresów z konta IMAP');?>. Ten sposób umożliwia odszukanie adresów email w Twoich folderach IMAP i dodanie ich. Tylko Nazwa osoby może być podana jako atrybut.<br/><br/>
<li><?php echo PageLink2('import4', 'Import adresów z innej bazy danych');?>.
</ul>

</p>
