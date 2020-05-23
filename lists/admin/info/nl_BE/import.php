
<p>

<h1>Importeer emails in bestaande lijsten</h1>

Er zijn vier manieren om bestaande informatie te importeren:

<ul>
<li><?php echo PageLink2('import2', 'Importeer emails met verschillende waarden voor attributen');?>. De lijst van emails kan attributen hebben die nog niet zijn vastgelegd. Ze zullen automatisch worden aangemaakt als "textlijn" attributen. Je kunt best deze optie gebruiken als je een spreadsheet/CSV bestand wilt importeren dat de attributen voor de gebruikers in kolommen heeft en een gebruiker per lijn.<br/><br/>
<li><?php echo PageLink2('import1', 'Importeer emails met dezelfde waarde voor attributen');?>. De lijst van emails zal moeten overeenkomen met de structuur die u al heeft opgezet in <?php echo NAME?>. U kan deze optie best gebruiken om een eenvoudige lijst met emails te importeren. U kan daarna de waarden voor de attributen voor elke email ingeven. Ze zullen hetzelfde zijn voor iedereen die u importeerd.<br/><br/>
<li><?php echo PageLink2('import3', 'Importeer emails van een IMAP account');?>. Dit zal naar emails in uw IMAP mappen zoeken en ze toevoegen. Enkel de Naam van de persoon kan als een attribuut worden gevonden.<br/><br/>
<li><?php echo PageLink2('import4', 'Importeer emails van een andere database');?>.
</ul>

</p>
