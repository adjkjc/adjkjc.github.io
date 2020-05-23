<h3>Format of the message</h3>
If you use "auto detect" the message will be classified as HTML as soon as one HTML tag (&lt; ... &gt;) has been found.
</p><p><b>It is safe to leave this checked as "Auto detect"</b></p><p>
If you are not sure that "auto detect" works and the message you are pasting has been formatted in HTML choose "HTML".
External references to resources (eg images) will need to have the complete URL, ie starting with http:// (unlike the template images).
For the rest you are fully responsible for the formatting of the text.
<p>If you want to force the message to be plain text, check "Text".
</p><p>
This information is used to create the text only version of a HTML formatted message or the HTML version of a Text formatted message.
This formatting will be as follows:<br/>
Original is HTML -&gt; text<br/>
<ul>
<li><b>Bold</b> text will be enclosed with <b>*-signs</b>, <b>italic</b> text with <b>/-signs</b></li>
<li>Links around text will be replaced with the text, followed by the URL in brackets</li>
<li>Large blocks of text will be word-wrapped at column 70</li>
</ul>
Original is Text -&gt; HTML<br/>
<ul>
<li>Double newlines will be replaced by a &lt;p&gt; (paragraph)</li>
<li>Single newlines will be replaced by a &lt;br /&gt; (line break)</li>
<li>Email addresses will be made clickable</li>
<li>URLs will be made clickable. URLs can be in any of the following forms:<br/>
<ul><li>http://some.website.url/some/path/somefile.html
<li>www.websiteurl.com
</ul>
The created links will have the stylesheet class "url" and target "_blank".
</ul>
<b>Warning</b>: indicating that your message is text, but pasting a HTML text in the box will cause plain text HTML to be sent to users who want to receive Text emails.
