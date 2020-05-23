
<h3>Send a test message</h3>

<p>Enter a valid email address in the box and click the button. 
<i>The address you enter needs to be a subscriber in the database.</i></p>
<p>Sending a test is strongly advised to make sure that your campaign arrives fine. However, many of your subscribers will use different applications to view their email
so it may not arrive in the same way for each of them, as you receive it. The best way to make sure that your campaign is read and visible to all your subscribers is to use basic and plain HTML in your campaigns. Please consider that messages sent using this option can not be forwarded using the [FORWARDURL] in the footer, that because this is still a draft campaign. </p>

<?php

if (SEND_ONE_TESTMAIL) {
    ?>

<p>You will receive one message at the address you entered. This message will be either text or HTML, depending on the settings of the corresponding profile.</p>

<?php

} else {
    ?>

<p><strong>You will receive two messages at the address you entered.</strong> One of them will be the <strong>text version</strong> of your campaign and the other the <strong>HTML version</strong> of your campaign.</p>

<p>Your subscribers will only receive one message. The version they receive will depend on the (text or HTML) setting of the subscriber profile.</p>

<?php 
} ?>



