<p>In this page you can prepare a message to be sent at a later date.
 You can specify all information required for the message, except for the actual
list(s) it has to go to. Then, at moment of sending (of a prepared message) you can
identify the list(s) and the prepared message will be sent.</p>
<p>
 Your prepared message is stationary, so it will not disappear when it has been
sent, but can be selected many different times. Be careful with this, because
this may have the effect that you send the same message to your users several
times.
</p>
<p>
This functionality is particularly designed with the "multiple administators" functionality in mind.
If a main administrator prepares messages, sub-admins can send them to their own lists. In this case you
can add additional placeholders to your message: the attributes of administrators.
</p>
<p>For example if you have an attribute <b>Name</b> for administrators you can add [LISTOWNER.NAME] as a placeholder,
which will be replaced by the <b>Name</b> of the List Owner of the list, the message is sent to. This is
regardless of who sends the message. So if the main administrator sends the message to a list that is
owned by someone else, the [LISTOWNER] placeholders will be replaced with the values for the Owner of
the list, not of the values of the main administrator.
</P>
<p>Just for reference:
<br/>
The format of the [LISTOWNER] placeholders is <b>[LISTOWNER.ATTRIBUTE]</b><br/>
<p>Currently you have the following admin attributes defined:
<table border=1><tr><td><b>Attribute</b></td><td><b>Placeholder</b></td></tr>
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
