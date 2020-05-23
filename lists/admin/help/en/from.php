You can use three different methods to set the from line:
<ul>
<li>One word: this will be reformatted as &lt;the word&gt;@<?php echo $domain?>
<br>For example: <b>information</b> will become <b>information@<?php echo $domain?></b>
<br>In most email programs this will show up as being from <b>information@<?php echo $domain?></b>
<li>Two or more words: this will be reformatted as <i>the words you type</i> &lt;listmaster@<?php echo $domain?>&gt;
<br>For example: <b>list information</b> will become <b>list information &lt;listmaster@<?php echo $domain?>&gt; </b>
<br>In most email programs this will show up as being from <b>list information</b>
<li>Zero or more words and an email address: this will be reformatted as <i>Words</i> &lt;emailaddress&gt;
<br>For example: <b>My Name my@email.com</b> will become <b>My Name &lt;my@email.com&gt;</b>
<br>In most email programs this will show up as being from <b>My Name</b>
