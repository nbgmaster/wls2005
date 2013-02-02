<?php 


     if ( isset($_GET['did']) )  {

          require_once('download.php');

          download ($_GET['did'], 'geheim', '');

     }


session_start();
ob_start();


include('config.php'); 


if($pager=="") {
$pager = (int) $pager;

if ($pager <= 0) $pager=1; }

?>

<html>
<head>
<title>Abicalypse2005.de</title>
<link rel="stylesheet" href="stylesheets/style_main.css">
<link rel="shortcut icon" href="images/facion.gif">

<meta http-equiv="imagetoolbar" content="no">
<script type="text/javascript" src="javascript/navi_code.js" language="JavaScript1.2"></script>
<script type="text/javascript" src="javascript/ticker.js" language="JavaScript1.2"></script>
<script type="text/javascript" src="javascript/bbcode.js" language="JavaScript1.2"></script>
<script language="javascript" type="text/javascript" src="script/fcn.js"></script>
</head>

<body bgcolor="#FFC08A" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<center>

<table width="980" border="0" cellpadding="0" cellspacing="0">

<tr><td background="gfx/header.jpg" width="980" height="96">&nbsp;</td>

</tr><tr>

<td background="gfx/navi_background.gif" width="980" height="21">
			

<table width="980" border=0 cellspacing="0" cellpadding="0">

<tr><td width="18">&nbsp;</td>

<?php  if($browser=="sonstigerBrowser") { echo"<td width=\"271\" style=\"line-height:16px;\">"; }

else { echo"<td width=\"23\" style=\"line-height:20px;\">"; }

?>
<script type="text/javascript" src="http://newsticker.shortnews.de/de/js/free/3/a.js"></script>
<script type="text/javascript" src="http://newsticker.shortnews.de/de/js/free/3/b.js"></script>

</td>
<?php  if($browser=="sonstigerBrowser") {echo"<td valign=\"top\" width=\"695\">"; }

else { echo"<td valign=\"top\" width=\"700\">"; } 

?>

<script type="text/javascript" src="javascript/navi_main.js" language="JavaScript1.2"></script>

</td></tr>
</table>


</td></tr>
<tr>
<td background="gfx/main_bg.gif" width="980" align="center" valign="top">

<table cellspacing="0" cellpadding="0" width="100%"><tr><td width="240" valign="top">

<table cellspacing="0" cellpadding="0">

<tr><td valign="top">

<table cellspacing="8" cellpadding="0">
<tr><td width="22">&nbsp;</td>
<td width="210">
<img src="images/title.jpg">
<br>&nbsp;&nbsp;&nbsp;
<font class=portrait2><i>current date: <?php  echo"$datum, $uhrzeit"; ?></i></font>
</td></tr></table>

</td></tr>
<tr><td>

<table cellspacing="0" cellpadding="0">
<tr><td width="20">&nbsp;</td>
<td>

<table cellspacing="0" cellpadding="0">
<tr><td background="gfx/sb_01.gif" height="27" width="210">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;

Shoutbox

</td></tr>
<tr><td background="gfx/sb_02.gif" width="210" align="center">

<?php  include('shoutbox/shoutbox.php'); ?>

</td></tr>


<tr><td>

<table width="210" height="32" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td background="gfx/sb_bottom_01.gif" width="165" height="19">
			</td>
		<td background="gfx/sb_bottom_02.gif" width="33" height="19">
<a href=#top>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
			</td>
		<td background="gfx/sb_bottom_03.gif" width="12" height="19">
			</td>
	</tr>
	<tr>
		<td colspan="3" background="gfx/sb_bottom_04.gif" width="210" height="13">
			</td>
	</tr>
</table>

</td></tr>

</table>
</td></tr></table>
</td></tr></table>


</td>

<td valign="top" width="745">

<table width="725" cellspacing="0" cellpadding="0">
<tr><td height="8"></td></tr>
<tr><td width="1" colspan="2"></td>
<td width="330" valign="top">

<?php  include('top_news.php'); ?>


</td><td valign="top" width="199">


<?php  include('top_login.php'); ?>


</td><td valign="top">

<?php  include('top_counter.php'); ?>


</td></tr></table>


<table width="725" cellpadding="0" cellspacing="0">
	
<tr>
<td background="gfx/main_01.gif" width="725" height="25">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;

Content

</td></tr>
<tr><td background="gfx/main_02.gif" width="725" height="480" align="center" valign="top">



<?php  

if($mode=="login" or $mode=="logout") { echo"<br><br><br><br><i><font class=big>wird aktualisiert...</font></i>"; }

else {

if($page=="") {  include('home.php'); } 
if($page=="gallery") {  include('gallery.php'); } 
if($page=="kurs_fotos_k12") {  include('kurs_fotos_k12.php'); } 
if($page=="kurs_fotos_k13") {  include('kurs_fotos_k13.php'); } 
if($page=="kurs_fotos_ges") {  include('kurs_fotos_ges.php'); } 
if($page=="kursliste") {  include('kurs_liste.php'); } 
if($page=="register") { include('anmeldung.php'); } 
if($page=="register2") {  echo"<br><br><b>Sorry, diese Funktion ist derzeit deaktiviert. <br>Zugangsantrag derzeit nur per Email an den Administrator möglich!</b>"; } 

if($page=="members") {  include('mitglieder.php'); } 
if($page=="user_gb") {  include('user_gb.php'); } 
if($page=="termine") {  include('termine.php'); } 
if($page=="user_pm") {  include('user_pm.php'); }
if($page=="post_eingang") {  include('post_eingang.php'); } 
if($page=="post_ausgang") {  include('post_ausgang.php'); } 
if($page=="user_details") {  include('details.php'); }
if($page=="user_profil") {  include('change_profil.php'); }
if($page=="write_email") {  include('write_email.php'); }
if($page=="disclaimer") {  include('disclaimer.php'); }
if($page=="contact") {  include('contact.php'); }
if($page=="news") {  include('news.php'); }
if($page=="links") {  include('links.php'); }
if($page=="downloads") {  include('downloads.php'); }
if($page=="discoguide") { 

echo"<br><br><b>Diese Seite befindet sich noch im Aufbau!</b><br><br>";
echo"<br><br><img src=images/construction_17.gif>"; }

if($page=="forum") {  include('forum.php'); }
if($page=="birthdays") {  include('geburtstagsticker2.php'); }
if($page=="schule") {  include('schule.php'); }
if($page=="stilblueten") {  include('stilblueten.php'); }
if($page=="signatur") {  include('signatur.php'); }

if($page=="admin") {  include('admin.php'); }

if($page=="archiv") {  
if($sec=="gb") { include('archiv_gb.php'); }
if($sec=="sb") { include('archiv_sb.php'); }
if($sec=="news") { include('archiv_news.php'); }
}

}

?>


</td></tr>	


<tr><td>
	
<table id="Tabelle_01" width="725" height="33" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="gfx/main_bottom_01.gif" width="678" height="19" alt=""></td>
		<td>
<a href=#top><img src="gfx/main_bottom_02.gif" width="36" height="19" alt="" border="0"></a></td>
		<td rowspan="2">
			<img src="gfx/main_bottom_03.gif" width="11" height="33" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="gfx/main_bottom_04.gif" width="714" height="14" alt=""></td>
	</tr>
</table>		

</td></tr></table>
</td></tr></table>


</td></tr>

<tr><td background="gfx/bottom.gif" width="980" height="26" align="center" class="small">

&copy; gfx & code by <a href=http://www.nbg-master.de target=_blank>nbg-master.de</a> 2005 All rights reserved. 

</td></tr></table>

</center>

</body>
</html>