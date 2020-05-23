
<p>

<h1>Importeer emails in bestaande lijsten</h1>

Er zijn vier manieren  om bestaande informatie te importeren:

<ul>
<li><?php echo PageLink2('import2', 'Importeer emails met verschillende waarden voor attributen');?>. De lijst van emails kan attributen hebben die nog niet zijn vastgelegd. Ze zullen automatisch worden aangemaakt als "textlijn" attributen. Je kunt best deze optie gebruiken als je een spreadsheet/CSV bestand wilt importeren dat de attributen voor de gebruikers in kolommen heeft en een gebruiker per lijn. <br/><br/>
<li><?php echo PageLink2('import1', 'Importeer emails met dezelfde waarde voor attributen');?>. De lijst van emails zal moeten overeenkomen met de structuur die je al hebt opgezet in <?php echo NAME?>. Je kan deze optie best gebruiken als je een eenvoudige lijst met emails wilt importeren. Je kan daarnaa de waarden voor de attributen voor elke email ingeven. Ze zullen hetzelfde zijn voor iedereen die je importeerd.<br/><br/>
<li><?php echo PageLink2('import3', 'Importeer emails van een IMAP account');?>. Dit zal naar emails in jou IMAP mappen zoeken en ze toevoegen. Enkel de Naam van de persoon kan als een attribuut worden gevonden.<br/><br/>
<li><?php echo PageLink2('import4', 'Importeer emails van een andere database');?>.
</ul>

</p>
