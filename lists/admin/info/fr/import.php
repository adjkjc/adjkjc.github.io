
<p>

<h3>Importer des adresses email dans des listes pr&eacute;-existantes</h3>

Il y a quatre m&eacute;thodes pour importer des donn&eacute;es pr&eacute;-existantes:

<ul>
<li><?php echo PageLink2('import2', 'Importer des adresses email avec des attributs diff&eacute;rents de votre syst&egrave;me');?>. La liste d'emails peut contenir des attributs qui ne sont pas encore d&eacute;finis. Ils seront cr&eacute;&eacute;s automatiquement comme des attributs "textline", c'est-&amp;agrave;-dire un champ texte. Utilisez cette option si vous importez d'un fichier CSV ou d'un tableur, en veillant &amp;agrave; mettre les attributs dans les colonnes, un destinataire par ligne, et l'email des destinataires dans la premi&egrave;re colonne (ce qui correspond au premier attribut). <br/><br/>
<li><?php echo PageLink2('import1', 'Importer des adresses email avec les m&ecirc;mes valeurs et attributs que votre syst&egrave;me');?>. La liste d'emails devra correspondre &amp;agrave; la structure que vous avez d&eacute;j&amp;agrave; cr&eacute;&eacute; dans <?php echo NAME?>. Utilisez cette option si vous importez une simple liste d'emails. Vous pouvez ensuite sp&eacute;cifier les valeurs des attributs dans chaque dossier. Les valeurs par d&eacute;faut seront les m&amp;ecirc;mes pour tous les emails que vous importerez. <br/><br/>
<li><?php echo PageLink2('import3', "Importer des adresses emails d'un compte IMAP");?>. Cette option va chercher des emails dans vos dossier IMAP et les ajouter &amp;agrave; votre liste. Seul le Nom de la personne pourra &amp;ecirc;tre r&eacute;cup&eacute;r&eacute; comme attribut. <br/><br/>
<li><?php echo PageLink2('import4', "Importer des adresses email d'une autre base de donn&eacute;es");?>. </ul>

</p>