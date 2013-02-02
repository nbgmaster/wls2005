

<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>

<table border="0" cellspacing="0" cellpadding="0">

<tr><td background="gfx/top_small_01.gif" width="190" height="26">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

Login Community

</td></tr>


<tr>
<td background="gfx/top_small_02.gif" width="190" height="104" valign="top" align="center">


<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1


 if($mode=="logout") { 


$sqlonout = "UPDATE $user_tblname SET IP = '' WHERE UserMail = '$save_email_abicalypse'";  
mysql_query($sqlonout) OR die(mysql_error()); 

echo"<br><br><font class=posts><b>Logout erfolgreich!</b></font><br><br><i>wird aktualisiert...</i>";


echo"<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";

if($page=="") { 
echo"<meta http-equiv=\"refresh\" content=\"0; url=index.php\">"; }

else {
echo"<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=$page\">"; }

$sqlonlogout = "UPDATE $user_tblname SET IP = '' WHERE UserName = '$save_user_master'";     

mysql_query($sqlonlogout) OR die(mysql_error()); 

setcookie(save_email_abicalypse,$usermail,time()-365*24*3600);
setcookie(save_pass_abicalypse,$userpw,time()-365*24*3600);
setcookie(cookie_check_abicalypse,allowed,time()-365*24*3600);
}


if($mode=="login") {

if(isset($m_enter)) {

$muha="";

$userpw_crypt=MD5($userpw);


$show_log = mysql_query("select UserMail, UserPass from $user_tblname");


  while($row_log = mysql_fetch_row($show_log)) {


if ($row_log[0]==$usermail && $row_log[1]==$userpw_crypt){ 

$muha="true";



echo"<br><br><font class=posts><b>Login erfolgreich!</b></font><br><br><i>wird aktualisiert...</i>";

echo"<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=members&order=UserName&preg=ASC\">";

setcookie(save_email_abicalypse,$usermail,time()+365*24*3600);
setcookie(save_pass_abicalypse,$userpw,time()+365*24*3600);
setcookie(cookie_check_abicalypse,allowed,time()+365*24*3600);


} }


if($muha != "true") 

{  


echo"<br><br><b><font class=posts>Login fehlgeschlagen!</font></b><br> <br><i>wird aktualisiert...</i></font>";
 
echo"<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";

}

}}


if($mode!="login" && $mode!="logout") { 


if($cookie_check_abicalypse=="allowed" && $save_id!="") {



$sqlonz = "UPDATE $user_tblname SET IP = '$userip' WHERE UserMail = '$save_email_abicalypse'";     

mysql_query($sqlonz) OR die(mysql_error()); 

$sqlonz22 = "UPDATE $user_tblname SET IP = '".$_SERVER['REMOTE_ADDR']."' WHERE UserID = '$save_id'";     

mysql_query($sqlonz22) OR die(mysql_error()); 

 $show_uz = mysql_query("select * from $user_tblname WHERE UserMail='$save_email_abicalypse'");


            while  ($row_uz  =  mysql_fetch_row($show_uz)) { $usern=$row_uz[1]; $save_idct=$row_uz[0]; }


 $show_hid = mysql_query("select * from $user_tblname WHERE UserMail='$save_email_abicalypse'");
     
   while  ($row_hid  =  mysql_fetch_row($show_hid)) {

 $id_hid=$row_hid[0]; }


$showpmct = mysql_query("select * from $user_pm_ein_tblname WHERE an='$save_idct'");
$reihenct=mysql_num_rows($showpmct);

$showpmctneu = mysql_query("select * from $user_pm_ein_tblname WHERE an='$save_idct' && gelesen='nein'");
$reihenctneu =mysql_num_rows($showpmctneu);

$showpmctaus = mysql_query("select * from $user_pm_aus_tblname WHERE von='$save_idct'");
$reihenctaus = mysql_num_rows($showpmctaus);

$showgt = mysql_query("select * from $user_gb_tblname WHERE gbnummer='$save_id'");
$reihengt = mysql_num_rows($showgt);

 ?>


<table width=174>


<tr><td>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

$laengelog =  strlen($usern); 


 echo"<img src=images/arrow_r.gif><a href=\"javascript:center_position(400,400,'members.php?user_id=$save_id','window')\">";

if($laengelog>15) { echo"<b><font class=portrait> $usern</font></b></a>"; }
else { echo"<b> $usern</b></a>"; } 

?>
</td></tr>

<tr><td>
<<<<<<< HEAD
<?php  echo"<img src=images/arrow_r.gif><a href=index.php?page=user_profil> Profil bearbeiten</a>"; ?>
</td></tr>

<tr><td>
<?php  echo"<img src=images/arrow_r.gif><a href=index.php?page=user_gb&user_id=$id_hid> Mein Gästebuch ($reihengt)</a>"; ?>
</td></tr>

<tr><td>
<?php 
=======
<? echo"<img src=images/arrow_r.gif><a href=index.php?page=user_profil> Profil bearbeiten</a>"; ?>
</td></tr>

<tr><td>
<? echo"<img src=images/arrow_r.gif><a href=index.php?page=user_gb&user_id=$id_hid> Mein Gästebuch ($reihengt)</a>"; ?>
</td></tr>

<tr><td>
<?
>>>>>>> af2fff1... version1
if($reihenctneu!="0") { $fett="<b>"; $fett2="</b>"; }
 echo"<img src=images/arrow_r.gif><a href=index.php?page=post_eingang> Posteingang ($fett$reihenctneu$fett2|$reihenct)</a>"; ?>
</td></tr>

<tr><td>
<<<<<<< HEAD
<?php  echo"<img src=images/arrow_r.gif><a href=index.php?page=post_ausgang> Postausgang ($reihenctaus)</a>"; ?>
</td></tr>

<tr><td>
<?php  
=======
<? echo"<img src=images/arrow_r.gif><a href=index.php?page=post_ausgang> Postausgang ($reihenctaus)</a>"; ?>
</td></tr>

<tr><td>
<? 
>>>>>>> af2fff1... version1
echo"<img src=images/arrow_r.gif> <a href=index.php?mode=logout> Ausloggen</a>"; ?>
</td></tr>
</table>



<<<<<<< HEAD
 <?php  }
=======
 <? }
>>>>>>> af2fff1... version1
else {

echo"<form action=index.php?mode=login method=\"post\">";
?>

<table cellspacing="0" cellpadding="0">
<tr>

<td>
<font class=mini><br></font>
<img src="images/arrow_r.gif"> <b>Deine Emailadresse:</b>
<br>
<input type="text" style="width:165px;" onsubmit="return check()" name="usermail">
</td></tr><tr><td><font class=mini><br></font>
<img src="images/arrow_r.gif"> <b>Dein Passwort:</b>
<br>
<input type="password" style="width:165px;" onsubmit="return check()" name="userpw">
</td></tr><tr>

<td align="center">
<font class=mini>
<<<<<<< HEAD
<?php  if($browser=="sonstigerBrowser") { echo"<br>"; } ?>
=======
<? if($browser=="sonstigerBrowser") { echo"<br>"; } ?>
>>>>>>> af2fff1... version1

<br></font>
<input type="submit" value="Einloggen" name="m_enter" style="border:1px solid #000000;width:90px;">

</td></tr></form></table>



<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1
}}

?>


</td></tr>
<tr><td background="gfx/top_small_03.gif" width="190" height="27">

</td></tr></table>
