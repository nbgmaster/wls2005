<?php   


if($cookie_check_abicalypse=="allowed") 

{ 

?>
<br>
<table><tr><td>
<img src=images/community.jpg></td></tr></table>


<?php 


 $show_user = mysql_query("select * from $user_tblname WHERE UserID='$user_id'");
  
   
   while  ($rowuser  =  mysql_fetch_row($show_user)) {


echo"<br><font size=2><b>Private Nachricht an $rowuser[1] schicken</b></font><br>";



if($do=="eintragen") {



if(isset($pm_eintragen)) {


include('replace.php');

echo"<br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Die private Nachricht wurde verschickt! Sie werden weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=user_pm&user_id=$user_id\">Falls die automatische Weiterleitung nicht funktioniert, klicken Sie bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=user_pm&user_id=$user_id\">";  


$pm_eintrag = str_replace ("\r\n","<br>", $pm_eintrag);

 $show = mysql_query("select * from $user_tblname WHERE UserName='$save_user_master'");
  
   
   while  ($row  =  mysql_fetch_row($show)) { $save_id=$row[0]; }


        $strQuery2  = "INSERT into ".$user_pm_aus_tblname." (von, an, titel, message, datum, uhr) ";
        $strQuery2 .= "VALUES ('$save_id', '$user_id', '$titel','$pm_eintrag', '$datum', '$uhrzeit')";
   $result = @mysql_query($strQuery2);

 $showgl = mysql_query("select * from $user_pm_aus_tblname ORDER by id");
  
   
   while  ($rowgl  =  mysql_fetch_row($showgl)) { $gl=$rowgl[0]; }


        $strQuery  = "INSERT into ".$user_pm_ein_tblname." (von, an, titel, message, datum, uhr, gelesen, ausid) ";
        $strQuery .= "VALUES ('$save_id', '$user_id', '$titel','$pm_eintrag', '$datum', '$uhrzeit', 'nein', '$gl')";
   $result2 = @mysql_query($strQuery);



  } }

if($do=="") {


?>

<script>
function check_pm() {
if( document.f_pm.titel.value == "" ){
alert( "Sie haben keinen Betreff angegeben!" );
document.f_pm.titel.focus();
return false;
}
if( document.f_pm.pm_eintrag.value == "" ){
alert( "Sie haben keinen Text angegeben!" );
document.f_pm.pm_eintrag.focus();
return false;
}
}

function smilie(text) {
var txtarea = document.f_pm.pm_eintrag;
text = ' ' + text + ' ';
if (txtarea.createTextRange && txtarea.caretPos) {
var caretPos = txtarea.caretPos;
caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
txtarea.focus();
} else {
txtarea.value  += text;
txtarea.focus();
}
}

</script>
<?php 

echo"<form action=\"index.php?page=user_pm&user_id=$user_id&do=eintragen\" name=\"f_pm\" method=\"post\" style=\"display:inline;\" onsubmit=\"return check_pm()\">";

?><br>
<br><table width=680><tr><td align=center>
<table>
<tr><td width=100>
Dein Name:</td><td> <?php  echo"<font color=$color><b>$save_name</b></font>"; ?>

</td></tr>
<tr><td>Betreff:</td><td><input type=text name=titel class=edit_p></td></tr>
<tr><td valign=top style=line-height:20px;>
Nachricht:
</td><td>
<?php 

echo"<input type=\"hidden\" name=\"an\" value=\"$rowuser[1]\">";

echo"<textarea cols=\"58\" rows=\"12\" name=\"pm_eintrag\" class=textarea></textarea></td>";
echo"</tr></table><br>";

?>

<table><tr><td>

<a href="javascript:smilie(':)')"><img src="smilies/z01.gif"  border="0"></a>
</td><td>
<a href="javascript:smilie(';)')"><img src="smilies/z02.gif" border="0"></a>
</td><td>
<a href="javascript:smilie('8)')"><img src="smilies/z03.gif" border="0"></a>
</td><td>
<a href="javascript:smilie(':P')"><img src="smilies/z04.gif" border=0"></a>
</td><td>
<a href="javascript:smilie(':D')"><img src="smilies/z05.gif" border=0"></a>
</td><td>
<a href="javascript:smilie(':(')"><img src="smilies/z07.gif" border=0"></a>
</td><td>
<a href="javascript:smilie(':shock:')"><img src="smilies/z08.gif" border=0"></a>
</td><td>
<a href="javascript:smilie(':roll:')"><img src="smilies/z09.gif" border=0"></a>
</td><td>
<a href="javascript:smilie(':lol:')"><img src="smilies/z10.gif" border=0"></a>
</td><td>
<a href="javascript:smilie(':angry:')"><img src="smilies/z11.gif" border="0"></a>
</td>
</tr></table>
<br>
<?php 
echo"<input type=\"submit\" value=\"Abschicken\" name=\"pm_eintragen\" class=\"submit\">";

echo"</form><br><br>";


echo"</td></tr></table>";

 }

}

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