<?php 

if($cookie_check_abicalypse=="" or $save_id=="") 

{ 

if($step=="finish") { 

$proof="true";


  $result_user = mysql_query("select * from ".$user_tblname."");
   $num_user = mysql_num_rows($result_user);


   for ($b=0; $b<$num_user; $b++)
   {

           $nick_user = mysql_result($result_user, $b, "UserName");
      $email_user = mysql_result($result_user, $b, "UserMail");


if($nickname==$nick_user && $email!="$email_user") { 


echo"<br><br><br><br><br><br><br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Der Nickname <b>$nickname</b> ist bereits registriert! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=anmeldung\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=register\">"; 

$proof="false";

} 


if($nickname==$nick_user && $email=="$email_user") { 


echo"<br><br><br><br><br><br><br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Der Nickname <b>$nickname</b> ist bereits registriert! Sie werden weitergeleitet...</font><br>";

echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Die Email Adresse <b>$email</b> ist bereits registriert! Du wirst weitergeleitet...</font><br><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=anmeldung\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=register\">"; 

$proof="false";

} 

if($email==$email_user && $nickname!="$nick_user") { 

echo"<br><br><br><br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Die Email Adresse <b>$email</b> ist bereits registriert! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=anmeldung\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=register\">"; 

$proof="false";

}   }


$laenge =  strlen($nickname); 



 if(ereg(" ",$nickname) or ereg("<",$nickname)  or ereg(">",$nickname) or ereg("&",$nickname)) { 

echo"<br><br><br><br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Der Nickname enthält Sonderzeichen oder Leerzeichen! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=anmeldung\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=register\">"; 

$proof="false";

}


if($proof!="false") {


$to=$email; 
$from="From: webmaster@abicalypse2005.de"; 
$subject="Erfolgreiche Registrierung auf abicalypse2005.de"; 
$message="Hallo $nickname

Deine Registrierung auf abicalypse2005.de war erfolgreich!

Du kannst dich in Zukunft mit deiner Email Adresse und deinem Passwort einloggen und hast 
damit Zugriff auf die komplette Website!

Solltest du einmal dein Passwort vergessen, dann schreib einfach eine Email an 
webmaster@abicalypse2005.de!



Ich wünsche dir viel Spaß auf der Homepage!


mit freundlichen Grüßen

Stefan Richter


";

mail($to, $subject, $message, $from) 
or print"email nicht versendet!"; 

echo"<br><br><br><font face=\"Tahoma,Helvetica\" size=\"3\">Du hast dich erfolgreich registriert! <br>Du kannst dich nun sofort oben einloggen!</font><br><br><img src=images/arrow_r.gif><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php\"> Klicke hier, um zur Startseite zu gelangen!</a></font>";



if (isset($send_user)) {


$pass_crypt_a=MD5($password);


        $strQuery  = "INSERT into ".$user_tblname." (UserName, vorname, nachname, UserPass, UserMail, geschlecht, UserDate, formmailer) ";
        $strQuery .= "VALUES ('$nickname', '$vorname', '$nachname', '$pass_crypt_a', '$email', '$geschlecht', '$timestamp', '$formmailer')";
    $result = @mysql_query($strQuery);

 }} }


if($step=="") {

?>

<script>
function check_user() {

if( document.f_reg.nickname.value == "" ){
alert( "Du hast keinen Nickname angegeben!" );
document.f_reg.nickname.focus();
return false;
}
if( document.f_reg.vorname.value == "" ){
alert( "Du hast keinen Vornamen angegeben!" );
document.f_reg.vorname.focus();
return false;
}
if( document.f_reg.nachname.value == "" ){
alert( "Du hast keinen Nachnamen angegeben!" );
document.f_reg.nachname.focus();
return false;
}

if( document.f_reg.geschlecht.value == "" ){
alert( "Du hast kein Geschlecht angegeben" );
document.f_reg.geschlecht.focus();
return false;
}
if( document.f_reg.password.value == "" ){
alert( "Du hast kein Passwort angegeben!" );
document.f_reg.password.focus();
return false;
}
if( document.f_reg.password2.value == "" ){
alert( "Du musst das Passwort noch ein 2. mal eingeben!" );
document.f_reg.password2.focus();
return false;
}
if( document.f_reg.password.value != document.f_reg.password2.value ){
alert( "Die Passwörter stimmen nicht überein!" );
document.f_reg.password.focus();
return false;
}
if( document.f_reg.email.value == "" ){
alert( "Du hast keine Email angegeben!" );
document.f_reg.email.focus();
return false;
}
var mail = document.f_reg.email.value;

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
document.f_reg.email.focus();
return false;

}

var pass = document.f_reg.password.value;

if (pass.length < 5) {
alert ("Passwort muss mindestens 5 Zeichen lang sein!");
document.f_reg.password.focus();
return false; }

var pass2 = document.f_reg.password2.value;

if (pass2.length < 5) {
alert ("Passwort muss mindestens 5 Zeichen lang sein!");
document.f_reg.password2.focus();
return false; }

}


</script>
 
<?php 

 echo"<form name=\"f_reg\" action=\"index.php?page=register&step=finish\" method=\"post\" onsubmit=\"return check_user()\">"; ?>
                                                                  


<br>
<img src=images/community.jpg>
<br>

<table width="670" cellpadding="0" cellspacing="0" align="center">
<tr>
	
<td>
&nbsp;&nbsp;&nbsp;<img src=images/arrow_r.gif> <b>Registrierung:</b>


<table width=700 cellspacing=10 cellpadding=3><tr><td class="top">
 

<?php  echo"<input type=hidden value=$timestamp name=date>"; ?>
<b>Nickname</td><td class=top><input type="text" name="nickname" class=edit_p maxlength=20></td></tr>
<tr><td class=top><b>Vorname</td><td class=top><input type="text" name="vorname" class=edit_p maxlength=20></td></tr>
<tr><td class=top><b>Nachname</td><td class=top><input type="text" name="nachname" class=edit_p maxlength=20></td></tr>

<tr><td class=top><b>Geschlecht</td><td class=top>

<select name="geschlecht" style="width:200px;height:18px;" class=select>
    <option value="m">männlich</option>   
    <option value="w">weiblich</option> 
</select>
</td></tr>

<tr><td class=top><b>Passwort</td><td class=top><input type="password" name="password" class=edit_p></td></tr>
<tr><td class=top><b>Passwort wiederholen</td><td class=top><input type="password" name="password2" class=edit_p></td></tr>
<tr><td class=top><b>Email</td><td class=top><input type="text" name="email" class=edit_p></td></tr>
<tr><td class=top>
<font color=red>Hinweis: </font> </td><td class=top> Deine Email Adresse ist für keinen User sichtbar!
</td></tr>
<tr><td width=180 class=top><b><font size=-3>Dürfen User Dir Emails<br> per Formmailer schicken?</font></td>
<td class=top>

<select name="formmailer" style="width:200px;height:18px;" class=select>
    <option value="ja">ja</option>   
    <option value="nein">nein</option> 
</select>

</td></tr>

<tr><td class=top><font color=red>Beachte:</font></td><td class=top> Falls der angegebene Vor-oder Nachname nicht vollständig ist
 oder die Email Adresse ungültig ist wird dein Account ohne Vorwarnung gelöscht! 


</td></tr></table>

<center>
<br>
<input type="submit" name="send_user" value="Registrierung abschließen" class="submit">
</form>
</center>
<?php 

echo"</td></tr></table>";


}

}

else { echo"<br><br><br><br><b><font class=forum>Du bist bereits angemeldet!</b>"; }
