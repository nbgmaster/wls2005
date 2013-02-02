<?php   include('sb_config.php');  ?>


<link rel="stylesheet" href="shoutbox.css">

<?php  include('style.php'); ?>

<table cellspacing="0" cellpadding="2"><tr><td align="center" width="<?php echo"$width";?>">

<div style="color:<?php echo"$schriftfarbe";?>;font-size:<?php echo"$schriftgroesse";?>;">

<br>
SHOUTBOX Admin
<br><br>

<font size="1">

adminname : test
passwort  : test
<br>
</font>

<?php  


if($sec=="logout") {


setcookie(save_user_admin,$username,time()-365*24*3600);
setcookie(save_pw_admin,$userpw,time()-365*24*3600);
setcookie(save_sb,granted,time()-365*24*3600);


echo"<font style=\"font-size:$adminschrift;\">Sie haben sich ausgeloggt.</font>";


echo"<br><br><a href=\"$PHP_SELF\" class=\"link\">Zurück zur Shoutbox</a> <br><br> <a href=\"$PHP_SELF?do=admin\" class=\"link\">Einloggen</a>";



}


if($sec=="") { 


if($save_sb=="granted") { 

echo"<font style=\"font-size:$adminschrift;\">Sie sind bereits eingeloggt!</font>";

echo"<br><br><a href=\"$PHP_SELF\" class=\"link\">Zurück zur Shoutbox</a> <br><br> <a href=\"$PHP_SELF?do=admin&sec=logout\" class=\"link\">Logout</a>";

}

else {

?>

<form action="<?php echo"$PHP_SELF?do=admin&sec=login";?>" method="post">

<table><tr><td>
<tr><td><input type="text" value="adminname" size="18" onsubmit="return check()" name="username" class="input" style="background:<?php echo"$bginput1";?>;font-size:<?php echo"$schriftinput1";?>;height:<?php echo"$hoeheinput1";?>;color:<?php echo"$inputfarbe1";?>;border-color:<?php echo"$inputborder1";?>;">
</td>
</tr>
<tr><td><input type="password" size="18" value="passwort" onsubmit="return check()" name="userpw" class="input" style="background:<?php echo"$bginput2";?>;font-size:<?php echo"$schriftinput2";?>;height:<?php echo"$hoeheinput2";?>;color:<?php echo"$inputfarbe2";?>;border-color:<?php echo"$inputborder2";?>;">
</td></tr>
</table>
</td></tr>
<tr><td align="center">
<input type="submit" value="Einloggen" name="m_enter" class="submit" style="background:<?php echo"$bgsubmit";?>;font-size:<?php echo"$schriftsubmit";?>;width:<?php echo"$submitlaenge";?>;height:<?php echo"$hoehesubmit";?>;color:<?php echo"$schriftsubmit2";?>;border-color:<?php echo"$submitborder";?>;">
</form>
<br><br><a href="<?php echo"$PHP_SELF";?>" class="link">Zurück zur Shoutbox</a>


<?php  } }


if($sec=="login") {



if($username=="$adminname" && $userpw=="$adminpw") 

{ 


setcookie(save_user_admin,$username,time()+365*24*3600);
setcookie(save_pw_admin,$userpw,time()+365*24*3600);
setcookie(save_sb,granted,time()+365*24*3600);


echo"<font style=\"font-size:$adminschrift;\">Sie haben sich erfolgreich eingeloggt!<br>";

echo"Sie können nun Beiträge aus der Shoutbox löschen.</font><br>";

echo"<br><a href=\"$PHP_SELF\" class=\"link\">Hier gehts zur Shoutbox</a>"; }


else  { echo"Login fehlgeschlagen!"; 

echo"<br><br><a href=\"javascript:history.back()\">Zurück</a>";

}

}

echo"</div></td></tr></table>";
