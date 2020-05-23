<p>
In the message field you can use "variables", which will be replaced by the appropriate value for a subscriber:
<br />The variables need to be in the form <strong>[NAME]</strong> where NAME can be replaced with the name of one of your attributes.
<br />For example if you have an attribute "First Name" put [FIRST NAME] in the message somewhere to identify the location where the "First Name" value of the recipient needs to be inserted.</p>
<p>You can also add some text that will be used, if the subscriber has no value for this attribute. To do this, use the following syntax:
<br/><strong>[PLACEHOLDER%%Fallback words]</strong>
<br/>For example, you can start your newsletter with:
<br/><i>Dear [FIRSTNAME%%Friend],</i>
<br/>and it will insert the FIRSTNAME for those subscribers that have this value, and "Friend" for all others.
</p>

<p>Currently you have the following attributes defined:
<?php

print listPlaceHolders();

if (phplistPlugin::isEnabled('rssmanager')) {
    ?>
  <p>You can set up templates for messages that go out with RSS items. In order to do that click the "Scheduling" tab and indicate
  the frequency for the message. The message will then be used to send the list of items to users
  on the lists, who have that frequency set. You need to use the placeholder [RSS] in your message
  to identify where the list needs to go.</p>
<?php 
}
?>

<p> Some place holders that may be useful when creating a template for use in phpList:
<ul>
<li>[SUBJECT] - adds the subject of the email within the newsletter text;</li>
<li>[CONTENT] - a mandatory placeholder for the message's content (body)that will be entered;</li>
<li>[FOOTER] - The message footer;</li>
<li>[SIGNATURE] - prints the phpList image signature;</li>
<li>[FORWARDURL] - is replaced with the personalised URL only;</li>
<li>[PREFERENCESURL] - allows the recipient to edit their subscribe preferences, for example update their email or the number of lists they belong to -- <strong>This essentially allows them to maintain your list up to date for you and is an invaluable feature</strong>;</li>
<li>[UNSUBSCRIBEURL] - a mandatory placeholder that allows the recipient to totally unsubscribe from all your lists;</li>
<li>[DOMAIN] - Prints your domain as listed in your configuration settings;</li>
<li>[EMAIL] - Prints the subscribers email address;</li>
<li>[LOGO] - Prints the logo added on your settings.</li>
</ul>
</p>

<p>You can also use system placeholders such as:
<ul>
<li>[CONFIRMED]</li>
<li>[BLACKLISTED]</li>
<li>[BOUNCECOUNT]</li>
<li>[ENTERED]</li>
<li>[MODIFIED]</li>
<li>[UNIQID]</li>
<li>[HTMLEMAIL]</li>
<li>[WEBSITE]</li>
</ul> 
</p>
<p>To send the contents of a webpage, add the following to the content of the message:<br/>
<b>[URL:</b>https://www.example.org/path/to/file.html<b>]</b></p>
<p>You can include basic user information in this URL, not attribute information:</br>
<b>[URL:</b>https://www.example.org/userprofile.php?email=<b>[</b>email<b>]]</b><br/>
</p>
