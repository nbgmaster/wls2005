<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1
if($do=="" or $do=="aendern") {

 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 

if($do=="aendern") {

echo"<br><br><br><br><br><br>";

$proof="true";

if($check_user!=$nickname) { 


  $result_u = mysql_query("select * from ".$user_tblname."");
   $num_u = mysql_num_rows($result_u);


   for ($b=0; $b<$num_u; $b++)
   {

     
      $user_u = mysql_result($result_u, $b, "UserName");
  $email_u = mysql_result($result_u, $b, "UserMail");



if($nickname==$user_u) { 



echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Der angegebene Nickname ist bereits vergeben! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=$page\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=$page\">"; 

$proof="false";

}}}


if($check_email!=$email) { 

  $result_u2 = mysql_query("select * from ".$user_tblname."");
   $num_u2 = mysql_num_rows($result_u2);


   for ($b2=0; $b2<$num_u2; $b2++)
   {

     
  $email_u2 = mysql_result($result_u2, $b2, "UserMail");

if($email==$email_u2) { 

echo"<br><br><br><br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Die Email Adresse <b>$email</b> ist bereits registriert! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=$page\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=$page\">"; 

$proof="false";

}}}



if($proof!="false") {


$pong="0";
$nope="1";

$pass_crypt=MD5($password);

$tempname = $_FILES['file']['tmp_name']; 
$name = $_FILES['file']['name']; 

$name2 = "avatare/".$name;

$size = filesize($_FILES['file']['tmp_name']); 

$size2 = getimagesize($file);

$blubber = $_FILES['file']['type'];

$laenge =  strlen($nickname); 


if($laenge>20) {  


echo"<br><br><br><br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Der Nickname ist zu lang!<br><br>";


$nope="0";

}


 if(ereg(" ",$nickname) or ereg("<",$nickname)  or ereg(">",$nickname) or ereg("&",$nickname)) { 

echo"<br><br><br><br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Der Nickname enthält Sonderzeichen oder Leerzeichen!<br><br>";


$nope="0";

}



 $show_profiler = mysql_query("select * from $user_tblname WHERE UserID='$ident'");


            while  ($prower  =  mysql_fetch_row($show_profiler)) { $nerv=$prower[14]; }

if($del_bild=="1") { $name="";


unlink("avatare/$altesbild"); 

    $aendern3  = "UPDATE ".$user_tblname." Set bild='$name' WHERE UserID='$ident'";  
  
$update3 = mysql_query($aendern3);

}

$handle=opendir ('avatare/'); 
$path='avatare/'; 

while (false !== ($fileon = readdir ($handle))) 
{ 

if($fileon=="$name")  { $nope="0";

echo"Der Dateiname ist bereits vorhanden! Benenne die Datei bitte um!<br><br>"; }}

if($file=="") { echo""; }

else {

if($del_bild=="1") { $name = $_FILES['file']['name'];

  $aendern7  = "UPDATE ".$user_tblname." Set bild='$name' WHERE UserID='$ident'";  
  
$update7 = mysql_query($aendern7);

}


else { 


if($size2[0] > 150) { echo"<font size=2>Das hochgeladene Bild ist <b>zu breit</b>!<br><br>";$nope="0"; }

if($size2[1] > 150) { echo"<font size=2>Das hochgeladene Bild ist <b>zu hoch</b>!<br><br>"; $nope="0"; }

if($blubber != 'image/jpeg' && $blubber != 'image/jpg' && $blubber != 'image/pjpeg' && $blubber != 'image/gif' && $blubber != 'image/bmp' && $blubber != 'image/png') 

{ echo"<font size=2>Es sind nur Bilddateien im Format <b>gif | jpg | png</b> erlaubt!<br><br>"; $nope="0"; }

if($del_bild!="1" && $nerv!="" && $nope!="0") { unlink("avatare/$altesbild"); }


 
}}

if($nope=="0") {

echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Sie werden weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=$page\">Falls die automatische Weiterleitung nicht funktioniert, klicken Sie bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=$page\">"; 

}


if($nope!="0") {


 $show_profil5 = mysql_query("select * from $user_tblname WHERE UserID='$ident'");


            while  ($prow5  =  mysql_fetch_row($show_profil5)) {

if($prow5[4]!="$email") {     $aendern4  = "UPDATE ".$user_tblname." Set UserMail='$email' WHERE UserID='$save_id'";  
  
$update4 = mysql_query($aendern4); $pong="1";  } 


if($prow5[2]!="$pass_crypt") {     $aendern5  = "UPDATE ".$user_tblname." Set UserPass='$pass_crypt' WHERE UserID='$ident'";  
  
$update5 = mysql_query($aendern5);$pong="1";  } 


}


if($pong=="1") {

echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Dein Profil wurde geändert!<br> Logge dich bitte mit deinen neuen Daten wieder ein! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php\">"; 
 

setcookie(save_email_abicalypse,$usermail,time()-365*24*3600);
setcookie(save_pass_abicalypse,$userpw,time()-365*24*3600);
setcookie(cookie_check_abicalypse,allowed,time()-365*24*3600);

}


        $aendern  = "UPDATE ".$user_tblname." SET UserName='$nickname', nachname='$nachname', vorname='$vorname', geschlecht='$geschlecht', geburtstag='$geburtstag', geburtsmonat='$geburtsmonat',geburtsjahr='$geburtsjahr', adresse='$adresse', telefon='$telefon', beruf='$beruf', UserMail='$email',formmailer='$sichtbar',homepage='$hp',icq='$icq', essen='$essen', trinken='$trinken', musik='$musik',film='$film', auto='$auto',handy='$handy', disco='$disco', hobbys='$hobbys' WHERE UserID='$ident'";
  
$update = mysql_query($aendern);
print mysql_error();

if($pong!="1") {


if($file!="") {


copy("$tempname", "$name2");  

    $aendern2  = "UPDATE ".$user_tblname." Set bild='$name' WHERE UserID='$ident'";  
  
$update2 = mysql_query($aendern2); }


echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Dein Profil wurde geändert! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=$page\">Falls die automatische Weiterleitung nicht funktioniert, klicken bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=$page\">"; 


}

}

}

}

if($do=="") {
?>

<script>
function check_change() {

if( document.f_change.nickname.value == "" ){
alert( "Du hast keinen Nickname angegeben!" );
document.f_change.nickname.focus();
return false;
}
if( document.f_change.vorname.value == "" ){
alert( "Du hast keinen Vornamen angegeben!" );
document.f_change.vorname.focus();
return false;
}
if( document.f_change.nachname.value == "" ){
alert( "Du hast keinen Nachnamen angegeben!" );
document.f_change.nachname.focus();
return false;
}
if( document.f_change.email.value == "" ){
alert( "Du hast keine Email angegeben!" );
document.f_change.email.focus();
return false;
}
if( document.f_change.password.value == "" ){
alert( "Du hast kein Passwort angegeben!" );
document.f_change.password.focus();
return false;
}

var pass = document.f_change.password.value;

if (pass.length < 5) {
alert ("Passwort muss mindestens 5 Zeichen lang sein!");
document.f_change.password.focus();
return false; }


var mail = document.f_change.email.value;

var mailOK = true;

if (!mail)
   mailOK = false;

if (mail.indexOf ("@") == -1)
   mailOK = false;

if (mail.indexOf ("@") == 0 || 
      mail.lastIndexOf ("@") == mail.length - 1)
   mailOK = false;
if (mail.indexOf ("@") != mail.lastIndexOf ("@"))
   mailOK = false;
if (!mailOK) {
   alert ("Die E-Mail-Adresse ist ungültig!");
document.f_change.email.focus();
return false;

}}
</script>

<br>
<table><tr><td>
<img src=images/community.jpg></td></tr></table>
<form enctype="multipart/form-data" action="index.php?page=user_profil&do=aendern" method="post" name="f_change" onsubmit="return check_change()">
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

 $show_profil = mysql_query("select * from $user_tblname WHERE UserID='$save_id'"); 


            while  ($prow  =  mysql_fetch_row($show_profil)) {



echo"<br><b><font size=2>Hier kannst du deine persönlichen Daten ändern:</font></b><br><br>";
echo"<input type=hidden name=ident value=$prow[0]>";



 include('profil_edit.php'); 


echo"<table width=700 cellpadding=\"4\" cellspacing=0 border=\"0\">";
echo"<tr><td class=top6 bgcolor=#efefef>";

echo"<b>Avatar</b><br><center>";

echo"<table width=500><tr><td align=center>";

if($prow[14]=="")  { 

echo"Sie haben im Moment<br> kein Bild hochgeladen.";

}

else { 

echo"<input type=\"hidden\" name=\"altesbild\" value=\"$prow[14]\">";



echo"<img border=1 border-color=#000000 src=\"avatare/$prow[14]\">"; }


echo"</td><td width=50></td><td valign=center><img src=images/arrow_r.gif> Bild löschen <input type=\"checkbox\" value=\"1\" name=\"del_bild\">"; 

echo"<br><br>";

echo"<img src=images/arrow_r.gif> Neues Bild hochladen: (max. 150x150 Pixel)<br><br>";
echo"<input name=\"file\" size=50 type=\"file\" class=edit_p><br>"; 


echo"<br><center>";

echo"<input type=hidden value=\"$prow[1]\" name=\"check_user\">";


echo"</td></tr></table>";

}


echo"</td></tr></table><br>";

echo"<input type=\"submit\" class=\"submit\" value=\"Profil ändern\"></form></center><br>";
}


}



else { echo"<br><img src=images/community.jpg><br><br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 }

}