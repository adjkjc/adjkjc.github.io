<?php return; ?>
<p>

<h3>Import emails into existing lists</h3>

There are four ways to import existing information:

<ul>
<li><?php echo PageLink2('import2', 'Import emails with different values for attributes');?>. The list of emails can have attributes not already defined. They will be created automatically as "textline" attributes. You should use this option, if you are importing a spreadsheet/CSV file that has the attributes for the users in the columns and one user per line. <br/><br/>
<li><?php echo PageLink2('import1', 'Import emails with the same values for attributes');?>. The list of emails will have to comply with the structure you have already set up in <?php echo NAME?>. You should use this option if you are importing a simple list of emails. You can then specify the values for the attributes for each entry. They will be the same for everyone you are importing.<br/><br/>
<li><?php echo PageLink2('import3', 'Import emails from an IMAP account');?>. This will search emails in your IMAP folders and add them. Only the Name of the person can be found as an attribute.<br/><br/>
<li><?php echo PageLink2('import4', 'Import emails from another database');?>.
</ul>

</p>
