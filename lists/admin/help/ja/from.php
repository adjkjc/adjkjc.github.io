from行に設定するために３つの異なる方法が利用できます:
<ul>
<li>one word: これは、&lt;the word&gt;@<?php echo $domain?>として再フォーマットします。
<br>例: <b>information</b>は、<b>information@<?php echo $domain?></b>になるでしょう。
<br>ほとんどの電子メールプログラムで、これは from <b>information@<?php echo $domain?></b>となって表されます。
<li>Two or more words: これは、<i>入力した単語</i>として再フォーマットされます。 &lt;listmaster@<?php echo $domain?>&gt;
<br>例: <b>list information</b>は、<b>list information &lt;listmaster@<?php echo $domain?>&gt; </b>となります。
<br>ほとんどの電子メールプログラムで、これは、from <b>list information</b>となって表されます。
<li>Zero or more words and an email address: これは、<i>単語</i> &lt;emailaddress&gt;として再フォーマットされます。
<br>例: <b>My Name my@email.com</b>は、<b>My Name &lt;my@email.com&gt;</b>となります。
<br>ほとんどの電子メールプログラムで、これは、from <b>My Name</b>となって表されます。
