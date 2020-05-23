
<h1>انجمن phplist</h1>
<p><b>آخرین ویرایش</b><br/>
لطفا هنگامی که میخواهید اشکالات را گزارش کنید، ابتدا اطمینان حاصل کنید که آخرین ویرایش را به کار گرفته اید.<br/>
<?php
ini_set('user_agent', NAME.' (phplist version '.VERSION.')');
ini_set('default_socket_timeout', 5);
if ($fp = @fopen('http://www.phplist.com/files/LATESTVERSION', 'r')) {
    $latestversion = fgets($fp);
    $thisversion = VERSION;
    $thisversion = str_replace('-dev', '', $thisversion);
    if (versionCompare($thisversion, $latestversion)) {
        print '<font color=green size=2>تبریک، شما آخرین ویرایش را به کار میبرید</font>';
    } else {
        print '<font color=green size=2>ویرایش جدیدتری هم وجود دارد</font>';
        print '<br/>ویرایش شما: <b>'.$thisversion.'</b>';
        print '<br/>آخرین ویرایش: <b>'.$latestversion.'</b>  ';
        print '<a href="http://www.phplist.com/files/changelog">مشاهده تغییرات</a>&nbsp;&nbsp;';
        print '<a href="http://www.phplist.com/files/phplist-'.$latestversion.'.tgz">دریافت</a>';
    }
} else {
    print '<br/>برای آخرین ویرایش <a href=http://www.phplist.com/files>اینجا</a> را بررسی کنید';
}
?>
<p><i>phplist</i> از اوایل سال 2000 به عنوان یک برنامه کوچک برای 
<a href="http://www.nationaltheatre.org.uk" target="_blank">تئاتر ملی</a> شروع شد. با گذشت زمان تبدیل به یک سیستم خبرنامه کامل شد و سایتهای زیادی نیز آنرا به کار گرفتندOver time it has
اگرچه کد اصلی تقریبا توسط یک نفر نگهداری میشود، ولی افزایش پیچیدگی روزافزودن و حفظ کیفیت نیازمند همکاری بسیاری افراد دیگر است.</p>
<p>به منظور جلوگیری از انباشته شدن صندوق ایمیل توسعه دهندگان سیستم، تقاضا میشود که درخواستهایتان را مستقیماً به <a href="http://tincan.co.uk" target="_blank">Tincan</a> نفرستید، بلکه راه های ارتباطی دیگر را به کار ببرید.
این کار نه تنها موجب آزاد شدن وقت توسعه دهندگان برای توسعه بیشتر سیستم میشود، بلکه تاریخچه ای از پرسشها نیز میسازد که میتواند موجب آشنایی بیشتر کسانی که به تازگی آغاز به استفاده از سیستم کرده اند نیز میشود.</a>.</p>
<p>برای راحتی بیشتر کاربران phplist راههای مختلفی برای ارتباط در نظر گرفته شده اس:
<ul>
<li><a href="http://docs.phplist.com" target="_blank">ویکی مستندات</a>. سایت مستندات به عنوان مرجع در نظر گرفته میشود، و پرسشها نباید به آنجا فرستاده شوند.<br/><br/></li>
<li><a href="http://forums.phplist.com/" target="_blank">انجمنها</a>. انجمنها مکانی است که شما باید پرسشهایتان را بفرستید و دیگران نیز به آنها پاسخ بگویند.<br/><br/></li>
<li><a href="#bugtrack">مانتیس</a>. مانتیس یک سیستم ردگیری اشکالات است برای درخواست قابلیتهای جدید یا گزارش اشکالات از آن استفاده کنید نه برای پرسیدن سوالات و یا کمک گرفتن برای حل مشکلات.<br/><br/></li>
</ul>
</p><hr>
<h1>شما چگونه میتوانید ما را یاری کنید</h1>
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
<p>اگر شما یک <b>کاربر همیشگی phplist</b> هستید و فکر میکنید که از پس اغلب مشکلات بر می‌آيید مي‌توانید با <a href="http://forums.phplist.com/" target="_blank">پاسخ گفتن به پرسشهای کاربران دیگر</a>. یا نوشتن برگه هایی در <a href="#docscontrib">سایت مستندات</a> کمک کنید.</p>
<p>اگر شما یک <b>کاربر تازه‌کار phplist</b> هستید و برای نصب یا به کار گرفتن PHPlist روی سایت خود با مشکلی روبرو شدید، میتوانید پیش از اینکه فوراً یک پیام "اینکه کار نمیکنه!" برای ما بفرستید، با تلاش برای پیدا کردن راه حل مناسب در مکانهایی که در بالا گفته شده به ما کمک کنید. اغلب مشکل در تنظیمات محیطی است که میخواهید PHPlist را اجرا کنید. داشتن تنها یک توسعه دهنده برای PHPlist این مشکل را هم دارد که نمیتوان آن را در همه محیط ها و برای همه ویرایش های PHP آزمایش کرد.
</p>
<h1>کارهای دیگری که میتوانید برای یاری رساندن انجام دهید</h1>
<ul>
<li><p>اگر فکر میکنید که PHPlist برای شما مفید بوده است، چرا درباره‌اش به دیگران نگویید؟‌ به احتمال زیاد شما برای پیدا کردنش خیلی تلاش کرده اید و بعد از مقایسه‌اش با سیستمهای دیگر تصمیم به استفاده از آن گرفته‌اید، پس می‌توانید با تجربه‌ای که کسب کرده‌اید به دیگران نیز سود برسانید.</p>

<p>برای اینکار، میتوانید به  PHPlist <?php echo PageLink2('رای دهید', 'Vote')?> یا در سایتهایی که نرم افزارها را معرفی میکنند برایش بنویسید. همچنین می‌توانید درباره‌اش به افرادی که می‌شناسید بگویید.
</li>
<li><p>می‌توانید PHPlist را <b>به زبان خودتان برگردانید</b> و برگردان را ارايه دهید.
برای یاری رساندن  <a href="http://docs.phplist.com/PhplistTranslation">برگه های برگردان</a> در ویکی بررسی کنید.
</p>
</li>
<li>
<p>می‌توانید همه قابلیتهای مختلف PHPlist را <b>آزمایش کنید</b> و بررسی کنید که آیا به خوبی کار میکنند یا خیر.
لطفا یافته‌های خود را در <a href="http://forums.phplist.com/" target="_blank">انجمن‌ها</a>گزارش کنید.</p></li>
<li>
<p>
شما می‌توانید PHPlist را برای مشتریان خود به کار بگیرید (اگر کارتان مرتبط با وب است) و به آنها نشان دهید که این سیستم چه ابزار خوبی برای رسیدن به اهدافشان است. سپس اگر آنها تغییراتی خواستند می‌توانید در ازای دریافت دستمزد قابلیتهای جدید را ایجاد کنید. برای آگاهی از هزینه افزودن قابلیتهای جدید  
<a href="mailto:phplist2@tincan.co.uk?subject=request for quote to change phplist">تماس بگیرید</a>.
بیشتر قابلیتهای جدید PHPlist بر اساس درخواست مشتریان ایجاد شده اند. این هم به نفع مشتریان است چون با پرداخت مبلغ اندکی به اهدافشان میرسند، هم به نفع جامعه کاربران PHPlist است چرا که قابلیتهای جدید به برنامه افزوده می‌شود و هم به نفع توسعه دهندگان که به خاطر کار کردن بر روی PHPlist کمی دستمزد می‌گیرند :-)</p></li>
<li><p>اگر شما همیشه از PHPlist استفاده می‌کنید و تعداد زیادی (بیشتر از ۱۰۰۰) مشترک دارید، ما علاقمند به آگاهی از مشخصات سیستم و همینطور آمار به دست آمده هستیم. به طور پیشفرض PHPlist آمار را برای <a href="mailto:phplist-stats@tincan.co.uk">phplist-stats@tincan.co.uk</a> می‌فرستد ولی مشخصات سیستم را ارسال نمیکند. اگر می‌خواهید به بهبود برنامه کمک کنید، می‌توانید با گفتن جزئیات مشخصات سیستم و اجازه دادن به سیستم برای فرستادن آمار به نشانی گفته شده کمک بزرگی به ما کنید.
محتوای فرستاده شده به نشانی پیش گفته توسط فرد یا افرادی باز نمیشود بلکه تنها تحلیل شده و برای آگاهی از وضعیت عملکرد و اجرای PHPlist از آن استفاده میشود.</p></li>
</ul>

</p>
<p><b><a name="bugtrack"></a>مانتیس</b><br/>
<a href="http://mantis.phplist.com/" target="_blank">مانتیس</a> مکانی برای گزارش مواردی است که در PHPlist به آنها برمی‌خورید. این مورد می‌تواند هر چیزی مربوط به PHPlist، ،دیدگاه‌ها و پیشنهادهایی برای بهبود آن  یا گزارش یک باگ باشد. اگر باگی را گزارش می‌کنید، مطمئن شوید که تا جایی که می‌توانید اطلاعات بیشتری را همراه گزارش بفرستید تا برطرف نمودن آن باگ برای توسعه دهندگان آسان تر شود.</p>
<p>کمینه نیازمندی یک گزارش باگ، جزئیات مشخصات سیستم شماست:</p>

<?php if (!stristr($_SERVER['HTTP_USER_AGENT'], 'firefox')) {
    ?>
<p>اگر به مشکلی برمی‌خورید، لطفا از Firefox استفاده کنید تا ببینید که آیا مشکل حل می‌شود یا خیر.
<a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=131358&amp;t=81"><img border="0" alt="Get Firefox!" title="فایرفاکس دار شوید!" src="images/getff.gif"/></a>
<?php 
} ?>

</p>
<p>جزئیات سیستم شما عبارتند از:</p>

<ul>
<li>ویرایش phplist: <?php echo VERSION?></li>
<li>ویرایش PHP: <?php echo phpversion()?></li>
<li>مرورگر: <?php echo $_SERVER['HTTP_USER_AGENT']?></li>
<li>سرورِ وب: <?php echo $_SERVER['SERVER_SOFTWARE']?></li>
<li>سایتِ وب: <a href="http://<?php echo getConfig('website')."$pageroot"?>"><?php echo getConfig('website')."$pageroot"?></a></li>
<li>اطلاعاتِ Mysql: <?php echo mysql_get_server_info();?></li>
<li>ماجولهای PHP:<br/><ul>
<?php
$le = get_loaded_extensions();
foreach ($le as $module) {
    print "<LI>$module\n";
}
?>
</ul></li>
</ul>
<p>لطفا توجه داشته باشید که ایمیلهایی که از این سیستم یا انجمن‌ها استفاده نکنند در نظر گرفته نخواهند شد.</p>

<p><b><a name="docscontrib"></a>یاری رساندن به مستندات</b><br/>
اگر می‌خواهید در نوشتن مستندات کمک کنید، لطفا در 
<a href="http://tincan.co.uk/?lid=878">فهرست پستی توسعه دهندگان</a>
 ثبت نام کنید.
در حال حاضر به علت همپوشانی مقاصد و سودمندی به شراکت گذاشتن اطلاعات، مستندسازان و توسعه دهندگان از یک فهرست پستی استفاده میکنند.
<br/>
پیش از انجام هر کاری، موضوع را در فهرست پستی مطرح کنید و هنگامی که تفاهم های لازم برای ادامه کار به دست آمد، می‌توانید دست به کار شوید.
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
