
<p>

<h1>匯入 Email 到系統的電子報Import emails into existing lists</h1>

可選擇以下四種的方式匯入：

<ul>
<li><?php echo PageLink2('import1', '匯入 Email 到系統已預設的欄位');?>. 可按照系統已預設或已建立的欄位來匯入資料，若只你要匯入簡單的 Email，如每行一個 Email 的文字檔案，你可以選用這個方式來匯入<br/><br/>
<li><?php echo PageLink2('import2', '匯入 Eamil 並新增自訂欄位');?>. 當要匯入多項自訂欄位時，可選用此方式，系統未先定義的欄位，會在匯入時以文字的格式來建立新的自訂欄位，也可使用 cvs 的格式來匯入，但一行只能有一個使用者<br/><br/>
<li><?php echo PageLink2('import3', '匯入 IMAP 的使用者帳戶');?>. 若使用此種方式，系統會搜尋指定的 IMAP 資料夾來匯入，但只用姓名 Name 及 Email 會被匯入<br/><br/>
<li><?php echo PageLink2('import4', '從資料庫來匯入 Email');?>.
</ul>

</p>
