
<?php 



if($cookie_check_abicalypse=="allowed") 

{ 



if($do=="send") {



 $show_user5 = mysql_query("select * from $user_tblname WHERE UserID='$user_id'");
     
   while  ($rowuser5  =  mysql_fetch_row($show_user5)) {

 $mail=$rowuser5[4];$name=$rowuser5[1]; }


 $show_user6 = mysql_query("select * from $user_tblname WHERE UserID='$absender'");
     
   while  ($rowuser6  =  mysql_fetch_row($show_user6)) {

 $absender=$rowuser6[1];$oo=$rowuser6[0]; }


$to=$mail; 
$from="From: webmaster@abicalypse2005.de"; 
$subject="$betreff"; 
$message="Hallo $name

$absender hat dir auf www.abicalypse2005.de eine Email geschickt:

-------------------------------------------
$e_eintrag
-------------------------------------------

Auf www.abicalypse2005.de kannst du $absender antworten!


---------------------------------------------------------------------------------
www.abicalypse2005.de - Abiturjahrgang 2005 der WLS


";

mail($to, $subject, $message, $from) 
or print"email nicht versendet!"; 


echo"<br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Ihre Email wurde versendet! Sie werden weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=write_email&user_id=$user_id\">Falls die automatische Weiterleitung nicht funktioniert, klicken Sie bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=write_email&user_id=$user_id\">";  


}



if($do=="") {

 $show_user5 = mysql_query("select * from $user_tblname WHERE UserID='$user_id'");
     
   while  ($rowuser5  =  mysql_fetch_row($show_user5)) {

echo"<br><font size=2><b>Email an $rowuser5[1] schreiben</b></font><br>";
 $nickname=$rowuser5[1]; $id2=$rowuser5[0]; }


echo"<form action=\"index.php?page=write_email&user_id=$user_id&absender=$save_id&do=send\" name=\"e_gb\" method=\"post\" style=\"display:inline;\" onsubmit=\"return check_e()\">";


?>


<script>
function check_e() {
if( document.e_gb.betreff.value == "" ){
alert( "Du hast keinen Betreff angegeben!" );
document.e_gb.betreff.focus();
return false;
}
if( document.e_gb.e_eintrag.value == "" ){
alert( "Du hast keine Nachricht angegeben!" );
document.e_gb.e_eintrag.focus();
return false;
}
}
</script>

<br>
<br>
<table width=600>
<tr><td width=200>
<img src=images/arrow_r.gif> Dein Name:</td><td> <?php  echo"<font color=$color><b>$save_name</b></font>"; ?>

</td></tr>
<tr><td>
<img src=images/arrow_r.gif> Betreff:</td><td> <input type=text size=25 name=betreff class=textarea>

</td></tr>
<tr><td valign=top style=line-height:20px;>
<img src=images/arrow_r.gif> Deine Mitteilung:
</td><td>
<?php 


echo"<textarea cols=\"75\" rows=\"12\" name=\"e_eintrag\" class=textarea></textarea></td>";
echo"</tr></table><br>";

echo"<input type=\"submit\" value=\"Email abschicken\" name=\"e_eintragen\" class=\"submit\">";

echo"</form><br><br>"; }

}


else {



?>
<br><br><br>
<table><tr><td>
<img src=images/community_big.gif></td><td><b><font size="2">Community</font></b></td></tr></table>
<br><br>
Dieser Bereich ist nur für registrierte Mitglieder sichtbar!
<br>
<?php 
}