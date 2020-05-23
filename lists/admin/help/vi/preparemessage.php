<p>Trong trang n&agrave;y b&#7841;n c&oacute; th&#7875; chu&#7849;n b&#7883; s&#7861;n th&#432; m&agrave; s&#7869; &#273;&#432;&#7907;c g&#7917;i ra v&agrave;o m&#7897;t ng&agrave;y n&agrave;o &#273;&oacute;. B&#7841;n c&oacute; th&#7875; th&ecirc;m v&agrave;o t&#7845;t c&#7843; nh&#7919;ng th&ocirc;ng tin c&#7847;n thi&#7871;t cho th&#432; c&#7911;a b&#7841;n ngo&#7841;i tr&#7915; danh s&aacute;ch h&#7897;i vi&ecirc;n s&#7869; &#273;&#432;&#7907;c g&#7917;i t&#7899;i. Sau &#273;&oacute;, v&agrave;o th&#7901;i &#273;i&#7875;m g&#7917;i (th&#432; &#273;&atilde; so&#7841;n s&#7861;n) b&#7841;n c&oacute; th&#7875; ch&#7881; ra danh s&aacute;ch h&#7897;i vi&ecirc;n m&agrave; b&#7841;n mu&#7889;n g&#7917;i.</p>
<p>
 Th&#432; so&#7841;n s&#7861;n n&#7857;m &#7903; trong th&#432; vi&#7879;n, do v&#7853;y n&oacute; s&#7869; kh&ocirc;ng m&#7845;t &#273;i khi th&#432; &#273;&#432;&#7907;c g&#7917;i &#273;i, v&agrave; b&#7841;n c&oacute; th&#7875; d&ugrave;ng nhi&#7873;u l&#7847;n. H&atilde;y c&#7849;n th&#7853;n v&#7899;i ch&#7913;c n&#259;ng n&agrave;y b&#7903;i v&igrave; b&#7841;n c&oacute; th&#7875; g&#7917;i c&ugrave;ng th&#432; &#273;&oacute; cho h&#7897;i vi&ecirc;n c&#7911;a b&#7841;n nhi&#7873;u l&#7847;n.
</p>
<p>
Ch&#7913;c n&#259;ng n&agrave;y &#273;&#432;&#7907;c thi&#7871;t k&#7871; v&#7899;i ch&#7911; &yacute; l&agrave; d&ugrave;ng cho m&ocirc;i tr&#432;&#7901;ng &quot;nhi&#7873;n qu&#7843;n tr&#7883; vi&ecirc;n&quot;.
N&#7871;u m&#7897;t qu&#7843;n tr&#7883; vi&ecirc;n ch&iacute;nh so&#7841;n s&#7861;n m&#7897;t th&#432; th&igrave; c&aacute;c qu&#7843;n tr&#7883; vi&ecirc;n kh&aacute;c s&#7869; c&oacute; th&#7875; d&ugrave;ng &#273;&#7875; g&#7917;i cho h&#7897;i vi&ecirc;n c&#7911;a h&#7885;. Trong tr&#432;&#7901;ng h&#7907;p n&agrave;y b&#7841;n c&oacute; th&#7875; th&ecirc;m c&aacute;c thu&#7897;c t&iacute;nh c&#7911;a qu&#7843;n tr&#7883; vi&ecirc;n v&agrave;o th&#432;  nh&#432; c&aacute;c h&#7897;p ch&#7913;a thu&#7897;c t&iacute;nh.
</p>
<p>V&iacute; d&#7909; n&#7871;u b&#7841;n c&oacute; m&#7897;t thu&#7897;c t&iacute;nh <b>Name</b> c&#7911;a qu&#7843;n tr&#7883; vi&ecirc;n b&#7841;n c&oacute; th&#7875; d&ugrave;ng [LISTOWNER.NAME] h&#7897;p ch&#7913;a n&agrave;y s&#7869; &#273;&#432;&#7907;c th&#7871; b&#7903;i t&ecirc;n [<b>Name]</b> c&#7911;a qu&#7843;n tr&#7883; vi&ecirc;n &#273;ang qu&#7843;n l&yacute; danh s&aacute;ch h&#7897;i vi&ecirc;n &#273;&#432;&#7907;c g&#7917;i t&#7899;i b&#7845;t k&#7875; ai l&agrave; ng&#432;&#7901;i g&#7917;i th&#432; &#273;i. Do v&#7853;y n&#7871;u qu&#7843;n tr&#7883; vi&ecirc;n ch&iacute;nh g&#7917;i th&#432; t&#7899;i danh s&aacute;ch &#273;&#432;&#7907;c qu&#7843;n l&yacute; b&#7903;i qu&#7843;n tr&#7883; vi&ecirc;n kh&aacute;c th&igrave; [LISTOWNER] s&#7869; l&agrave; t&ecirc;n c&#7911;a qu&#7843;n tr&#7883; vi&ecirc;n &#273;ang qu&#7843;n l&yacute; danh s&aacute;ch ch&#432; kh&ocirc;ng ph&#7843;i l&agrave; qu&#7843;n tr&#7883; vi&ecirc;n ch&iacute;nh.
</P>
<p>Tham kh&#7843;o:
<br/>
H&igrave;nh t&#7913;c th&#7875; hi&#7879;n c&#7911;a h&#7897;p ch&#7913;a  [LISTOWNER] l&agrave;<b> [LISTOWNER.ATTRIBUTE]</b><br/>
<p>Hi&#7879;n t&#7841;i b&#7841;n c&oacute; th&#7875; d&ugrave;ng c&aacute;c thu&#7897;c t&iacute;nh sau &#273;&acirc;y cho qu&#7843;n tr&#7883; vi&ecirc;n:
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
