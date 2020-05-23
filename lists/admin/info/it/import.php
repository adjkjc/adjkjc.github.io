<?php return; ?>
<p>

<h3>Importa indirizzi email nelle liste esistenti</h3>

Ci sono quattro modi per importare i dati:

<ul>
<li><?php echo PageLink2('import2', 'Importa le email con differenti valori per gli attributi');?>. L'elenco delle email pu&ograve; avere attributi non ancora definiti. Questi saranno creati automaticamente come attributi di testo. Dovreste usare questa opzione se state importando un elenco da un foglio di calcolo/file CSV che ha attributi per gli utenti nelle colonne e un utente per linea.<br/><br/></li>
<li><?php echo PageLink2('import1', 'Importa le email con gli stessi valori per gli attributi');?>. La lista delle email deve soddisfare la struttura precedentemente definita in <?php echo NAME?>. Potete usare questa opzione se state importando una semplice lista di email. In seguito potete specificare i valori degli attributi per ogni record. Questi valori saranno uguali per tutti i record che state importando.<br/><br/></li>
<li><?php echo PageLink2('import3', 'Importa le email da un account IMAP');?>. Con questa opzione le email verranno cercate nell'account IMAP. In questo modo si associa solo l'attributo riguardante il nome della persona.<br/><br/></li>
<li><?php echo PageLink2('import4', 'Importa le email da un altro database');?>.</li>
</ul>

</p>
