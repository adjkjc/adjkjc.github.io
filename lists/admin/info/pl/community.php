
<h1>The phplist community</h1>
<p><b>Latest Version</b><br/>
Please make sure you are using the latest version when submitting a bugreport.<br/>
<?php
ini_set('user_agent', NAME.' (phplist version '.VERSION.')');
ini_set('default_socket_timeout', 5);
if ($fp = @fopen('http://www.phplist.com/files/LATESTVERSION', 'r')) {
    $latestversion = fgets($fp);
    $thisversion = VERSION;
    $thisversion = str_replace('-dev', '', $thisversion);
    if (versionCompare($thisversion, $latestversion)) {
        print '<font color=green size=2>Congratulations, you are using the latest version</font>';
    } else {
        print '<font color=green size=2>You are not using the latest version</font>';
        print '<br/>Your version: <b>'.$thisversion.'</b>';
        print '<br/>Latest version: <b>'.$latestversion.'</b>  ';
        print '<a href="http://www.phplist.com/files/changelog">View what has changed</a>&nbsp;&nbsp;';
        print '<a href="http://www.phplist.com/files/phplist-'.$latestversion.'.tgz">Download</a>';
    }
} else {
    print '<br/>Check for the latest version: <a href=http://www.phplist.com/files>here</a>';
}
?>
<p><i>phplist</i> started early 2000 as a small application for the
<a href="http://www.nationaltheatre.org.uk" target="_blank">National Theatre</a>. Over time it has
grown into a fairly comprehensive newsletter system and the
number of sites using it has grown rapidly. Even though the codebase is primarily
maintained by one person, it is starting to become very complex, and ensuring the
quality will require the input of many other people.</p>
<p>In order to avoid clogging up the mailbox of the developers, you are kindly
requested not to send queries directly to <a href="http://tincan.co.uk" target="_blank">Tincan</a>, but
instead to use other methods of communication available. Not only does this free up
time to continue development, but it also creates a history of questions, that can be
used by new users to get acquainted with the system</a>.</p>
<p>To facilitate the phplist community several options are available:
<ul>
<li>The <a href="http://docs.phplist.com" target="_blank">The Documentation Wiki</a>. The documentation site is mostly for reference, and no questions should be posted to it.<br/><br/></li>
<li>The <a href="http://forums.phplist.com/" target="_blank">Forums</a>. The forums are the place to post your questions and for others to answer them.<br/><br/></li>
<li><a href="#bugtrack">Mantis</a>. Mantis is an issue tracker. This can be used to post feature requests and to report bugs. It can not be used for helpdesk questions.<br/><br/></li>
</ul>
</p><hr>
<h1>What you can do to help</h1>
<p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="donate@phplist.com">
<input type="hidden" name="item_name" value="phplist version <?php echo VERSION?> for <?php echo $_SERVER['HTTP_HOST']?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="bn" value="PP-DonationsBF">
<input type="image" src="images/paypal.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form></p>
<p>If you are a <b>regular user of phplist</b> and you think you have cracked most of it's issues
you can help out by <a href="http://forums.phplist.com/" target="_blank">answering the questions of other users</a>. or writing pages in the <a href="#docscontrib">documentation site</a>.</p>
<p>If you are <b>new to phplist</b> and you are having problems with setting it up to work for
your site, you can help by trying to find the solution in the above locations first, before
immediately posting a "it does not work" message. Often the problems you may have are related
to the environment your phplist installation is running in. Only having one developer for
phplist has the disadvantage that the system cannot be tested thoroughly on every platform
and every version of PHP.</p>
<h1>Other things you can do to help</h1>
<ul>
<li><p>If you think phplist is a great help for you, why not help to let other people know about
it's existence. You probably made quite an effort to find it and to decide to use if after
having compared it to other similar applications, so you could help other people benefit
from your experience.</p>

<p>To do so, you can <?php echo PageLink2('vote', 'Vote')?> for phplist, or write reviews on the
sites that list applications. You can also tell other people you know about it.
</li>
<li><p>You can <b>Translate</b> phplist into your language and submit the translation.
To help out check the <a href="http://docs.phplist.com/PhplistTranslation">Translation Pages</a> in the Wiki.
</p>
</li>
<li>
<p>You can <b>Try out</b> all the different features of phplist and check whether they work ok for you.
Please post your findings on the <a href="http://forums.phplist.com/" target="_blank">Forums</a>.</p></li>
<li>
<p>You can use phplist for your paying clients (if you are a web-outfit for example) and convince them
that the system is a great tool to achieve their goals. Then if they want some changes
you can <b>commission new features</b> that are paid for by your clients. If you want to know
how much it would be to add features to phplist, <a href="mailto:phplist2@tincan.co.uk?subject=request for quote to change phplist">get in touch</a>.
Most of the new features of phplist are added by request from paying clients. This will benefit
you for paying a small price to achieve your aims, it will benefit the community for getting new
features, and it will benefit the developers for getting paid for some of the work on phplist :-)</p></li>
<li><p>If you use phplist regularly and you have a <b>fairly large amount of subscribers</b> (1000+), we are
interested in your system specification, and send-statistics. By default phplist will send
statistics to <a href="mailto:phplist-stats@tincan.co.uk">phplist-stats@tincan.co.uk</a>, but it will
not send system details. If you want to help out making things work better, it would be great
if you could tell us your system specs, and leave the default of the stats to go to the above address.
The address is just a drop, it is not being read by people, but we will analyse it to figure out
how well phplist is performing.</p></li>
</ul>

</p>
<p><b><a name="bugtrack"></a>Mantis</b><br/>
<a href="http://mantis.phplist.com/" target="_blank">Mantis</a> is the place to report issues you find with phplist. Your issue can be be anything related to phplist, comments and suggestions how to improve it or reports of a bug. If you report a bug, make sure to include as much information as possible to facilitate the developers in solving the problem.</p>
<p>The minimum requirements for reporting a bug are your system details:</p>

<?php if (!stristr($_SERVER['HTTP_USER_AGENT'], 'firefox')) {
    ?>
<p>If you experience problems, please make sure to use Firefox to see if that solves the problem.
<a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=131358&amp;t=81"><img border="0" alt="Get Firefox!" title="Get Firefox!" src="images/getff.gif"/></a>
<?php 
} ?>

</p>
<p>Your system details are:</p>

<ul>
<li>phplist version: <?php echo VERSION?></li>
<li>PHP version: <?php echo phpversion()?></li>
<li>Browser: <?php echo $_SERVER['HTTP_USER_AGENT']?></li>
<li>Webserver: <?php echo $_SERVER['SERVER_SOFTWARE']?></li>
<li>Website: <a href="http://<?php echo getConfig('website')."$pageroot"?>"><?php echo getConfig('website')."$pageroot"?></a></li>
<li>Mysql Info: <?php echo mysql_get_server_info();?></li>
<li>PHP Modules:<br/><ul>
<?php
$le = get_loaded_extensions();
foreach ($le as $module) {
    print "<LI>$module\n";
}
?>
</ul></li>
</ul>
<p>Please note, emails not using this system, or the forums will be ignored.</p>

<p><b><a name="docscontrib"></a>Contributing to the documentation</b><br/>
If you want to help out writing documentation, please sign up to the <a href="http://tincan.co.uk/?lid=878">Developers Mailinglist</a>. At the moment the documentors and the developers share a mailinglist, because their interests overlap and it is useful to share information. <br/>
Before doing anything, discuss the issues on the mailinglist and once the ideas have been established you can go off and do your stuff.

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
