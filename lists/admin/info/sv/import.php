
<p>

<h3>Importera e-postadresser till befintliga listor</h3>

Det finns fyra sätt att importera e-postadresser.

<ul>
<li><?php echo PageLink2('import2', 'Importera e-postadresser med olika attributvärden');?>. Listan över e-postadresser kan ha attribut som inte redan är definierade. De kommer skapas automatiskt som "textrad"-attribut. Du bör använda den här möjligheten om du importerar en kalkylblads-/CSV-fil som har attributen för användarna i kolumner och en användare per rad. <br/><br/>
<li><?php echo PageLink2('import1', 'Importera e-postadresser med samma attributvärden');?>. Listan över e-postadresser måste överensstämma med strukturen som du redan har ställt in i <?php echo NAME?>. Du bör använda den här möjligheten om du importerar en enkel lista över e-postadresser. Du kan sedan specifiera attributvärdena på för varje post. De kommer ha samma värde för varje adress som importeras.<br/><br/>
<li><?php echo PageLink2('import3', 'Importera e-postadresser från ett IMAP-konto');?>. Dina IMAP-mappar kommer sökas igenom efter e-postadresser som läggs till i databasen. Endast namnet på personen kan hittas som attribut.<br/><br/>
<li><?php echo PageLink2('import4', 'Importera e-postadresser från en annan databas');?>.
</ul>

</p>
