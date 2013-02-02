<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>

<<<<<<< HEAD
<?php   
=======
<?  
>>>>>>> af2fff1... version1


if($sec=="delete")  {


$sqlnewc = "DELETE FROM $user_gb_tblname WHERE id = '$g_id'";     

mysql_query($sqlnewc) OR die(mysql_error());  



echo"<br><br><br><br><br><br>";



echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Eintrag wurde gelöscht! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=user_gb&user_id=$user_id\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=user_gb&user_id=$user_id\">"; 


}


if($sec=="" or $sec=="eintragen") {

if($cookie_check_abicalypse=="allowed") 

{ 

?>
<br><img src=images/community.jpg><br>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1


 $show_user5 = mysql_query("select * from $user_tblname WHERE UserID='$user_id'");
     
   while  ($rowuser5  =  mysql_fetch_row($show_user5)) {

echo"<br><table width=600><tr><td><font size=2><b>Gästebuch von $rowuser5[1]</b></font></td><td align=right> ";

echo"<img src=images/arrow_r.gif> <a href=index.php?page=user_gb&user_id=$user_id#g><b>Eintrag schreiben</b></a>";

echo"&nbsp;</td></tr></table>";
 $nickname=$rowuser5[1]; $id2=$rowuser5[0]; }


if($sec=="eintragen") {




if(isset($gb_eintragen)) {

include('replace.php');




echo"<br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Ihr Eintrag wurde erstellt! Sie werden weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=user_gb&user_id=$user_id\">Falls die automatische Weiterleitung nicht funktioniert, klicken Sie bitte hier!</a></font>";

echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=user_gb&user_id=$user_id\">";  


$gb_eintrag = str_replace ("\r\n","<br>", $gb_eintrag);

        $strQuery  = "INSERT into ".$user_gb_tblname." (nickid, datum, uhr, eintrag, gbnummer, ip) ";
        $strQuery .= "VALUES ('$nickid', '$datumgb', '$uhrzeit','$gb_eintrag', '$user_id', '$ipuser')";
    $result = @mysql_query($strQuery);
}  } 


if($sec=="") {



$ipuser = getenv("REMOTE_ADDR");


 $show_user9 = mysql_query("select * from $user_tblname WHERE UserName='$save_user_master'");
     
   while  ($rowuser9  =  mysql_fetch_row($show_user9)) {

 $id3=$rowuser9[0]; }



if(!isset($side_forward)) { $side_forward = 0; }
 $show_gb = mysql_query("select * from $user_gb_tblname WHERE gbnummer='$user_id' ORDER by id DESC LIMIT $side_forward,$user_gb_anzeigen");


 $showh = mysql_query("select * from $user_gb_tblname WHERE gbnummer='$user_id'");

$reihenh=mysql_num_rows($showh);


$seiten = $reihenh / $user_gb_anzeigen;

$art = gettype($seiten);
if($art=="double") {
$seiten++;
$seiten = floor($seiten);}


$n = 0; $sc = $seiten;

if($reihenh > $user_gb_anzeigen) {

echo "<br><div align=center><b><font color=$color>Seiten</font></b>&nbsp;";
for($sn=1;$sn<=$sc;$sn++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($sn=="$blomb") {   $bla=$gogo*$user_gb_anzeigen;$huch=$blomb; }

}

if($side_forward==$bla && $sn==$huch) {  echo "</b><font color=#ff7f00>[$sn]</font> "; }

else {
echo "<a href=\"index.php?page=user_gb&user_id=$user_id&side_forward=$n\">[$sn]</a> "; 


}


$n += $user_gb_anzeigen;}
echo"<br>"; }



if($reihenh=="0") { 

echo"<br><br>Es sind noch keine Einträge vorhanden!<br>"; }

else {

    
$zaehlg="0"; 
   while  ($row_gb  =  mysql_fetch_row($show_gb)) {
$zaehlg=$zaehlg+1;

$id=$row_gb[0]; 

$showg = mysql_query("select * from $user_tblname WHERE UserID='$row_gb[1]'");
  
   
   while  ($rowg  =  mysql_fetch_row($showg)) { $save_nick=$rowg[1]; }

?><br>
<table width="600" cellpadding="1" cellspacing="3" align="center">
<tr>
	
<td class="Top">

<table width=100%><tr><td>

<table width=100%><tr><td>
<<<<<<< HEAD
<?php  echo"<img src=images/arrow_r.gif> <a href=\"javascript:center_position(400,400,'members.php?user_id=$row_gb[1]','window')\"><b>$save_nick</b></a>"; 
=======
<? echo"<img src=images/arrow_r.gif> <a href=\"javascript:center_position(400,400,'members.php?user_id=$row_gb[1]','window')\"><b>$save_nick</b></a>"; 
>>>>>>> af2fff1... version1
echo"</td><td align=right class=sbdate>$row_gb[4] $row_gb[5]";?> 
</td></tr></table><a name="g"></a>
<table width=100%><tr><td>
	
<<<<<<< HEAD
<?php  echo"<font size=1>$row_gb[2]</font>"; ?>
</td><td align=right valign=bottom>

<?php  if($save_id==$user_id) { ?>
<form action=index.php?page=user_gb&user_id=<?php echo"$user_id";?>&sec=delete method=post>

<?php  echo"<input type=hidden name=g_id value=\"$row_gb[0]\">";  ?>
<input type=submit class=submit style=height:17px;font-size:9px; value="Eintrag löschen"> <?php  } ?>
=======
<? echo"<font size=1>$row_gb[2]</font>"; ?>
</td><td align=right valign=bottom>

<? if($save_id==$user_id) { ?>
<form action=index.php?page=user_gb&user_id=<?echo"$user_id";?>&sec=delete method=post>

<? echo"<input type=hidden name=g_id value=\"$row_gb[0]\">";  ?>
<input type=submit class=submit style=height:17px;font-size:9px; value="Eintrag löschen"> <? } ?>
>>>>>>> af2fff1... version1

</td></tr></table>
</td></tr></table>
</td></tr></table>
<<<<<<< HEAD
<?php   if($save_id==$user_id) { ?></form><?php  }
=======
<?  if($save_id==$user_id) { ?></form><? }
>>>>>>> af2fff1... version1


}
}



?>
<center>
<script>
function check_gb() {
if( document.f_gb.gb_eintrag.value == "" ){
alert( "Sie haben keinen Text angegeben!" );
document.f_gb.gb_eintrag.focus();
return false;
}}


function smilie(text) {
var txtarea = document.f_gb.gb_eintrag;
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

<br><a name="g"></a>
<table width=600><tr><td>
<b>Eintrag schreiben</b>
</td></tr></table>
<table width=600>

<tr><td width=105>
<<<<<<< HEAD
Dein Name:</td><td> <?php  echo"<font color=$color><b>$save_name</b></font>"; ?>
=======
Dein Name:</td><td> <? echo"<font color=$color><b>$save_name</b></font>"; ?>
>>>>>>> af2fff1... version1

</td></tr>
<tr><td valign=top style=line-height:20px;>
Deine Mitteilung:
</td><td>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

echo"<form action=\"index.php?page=user_gb&user_id=$user_id&sec=eintragen\" name=\"f_gb\" method=\"post\" style=\"display:inline;\" onsubmit=\"return check_gb()\">";


echo"<input type=\"hidden\" name=\"datumgb\" value=\"$datum\">";
echo"<input type=\"hidden\" name=\"nickid\" value=\"$save_id\">";
echo"<input type=\"hidden\" name=\"ipuser\" value=\"$ipuser\">";
echo"<input type=\"hidden\" name=\"userid\" value=\"$id3\">";

echo"<textarea cols=\"75\" rows=\"8\" name=\"gb_eintrag\" class=textarea></textarea></td>";
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
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1
echo"<input type=\"submit\" value=\"Eintragen\" name=\"gb_eintragen\" class=\"submit\">";

echo"</form><br><br>";


  }}


else {



?>
<br><br><br>
<table><tr><td>
<img src=images/community_big.gif></td><td><b><font size="2">Community</font></b></td></tr></table>
<br><br>
Dieser Bereich ist nur für registrierte Mitglieder sichtbar!
<br>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

}

if($zaehlg>10) { echo"<br><a href=#top>&raquo;Nach oben&laquo;</a><br><br>"; }
}