<p>Here you can define templates that can be used to send the emails to the lists. A template is
an HTML page with somewhere the <i>PlaceHolder</i> <b>[CONTENT]</b>. This will be the place where
the text for the email will be inserted. </P>
<p>Additionally to [CONTENT], you can add [FOOTER] and [SIGNATURE] to insert the footer information and the signature of the message, but they are optional.</p>
<p>Images in your template will be included in the emails. If you add images to the content of your messages (when you send it), they need to include a complete URL, and will not be included in the email.</p>
<p><b>User Tracking</b></p>
<p>To facilitate user tracking, you can add [USERID] to your template which will be replaced by an identifier for a user. This will only work when sending the email as HTML. You will need to set up some URL that will receive the ID. Alternatively you can use the builtin usertracking of <?php echo NAME?>. To do this add [USERTRACK] to your template and an invisible link will be added to the email to keep track of Views of the email.</p>
<p><b>Images</b></p>
<p>Any reference to an image that does not start with "http://" can (and should) be uploaded for inclusion in the email. It is advised to use only few images and make them very small. If you upload your template, you will be able to add your images. References to images to be included should be from the same directory, ie &lt;img&nbsp;src=&quot;image.jpg&quot;&nbsp;......&nbsp;&gt; and not &lt;img&nbsp;src=&quot;/some/directory/location/image.jpg&quot;&nbsp;..........&nbsp;&gt;</p>
