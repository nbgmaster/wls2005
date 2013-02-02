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


if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 


?>
<br>
<table><tr><td>
<img src=images/community.jpg></td></tr></table>
<br>
<table width=700><tr><td><img src=images/arrow_r.gif> 
<a href=index.php?page=post_ausgang><b>Postausgang</b></a></td></tr></table>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1


if($do=="delete")  {

foreach ($delid as $elem) {

$sqlnewc = "DELETE FROM $user_pm_aus_tblname WHERE id = '$elem'";     

mysql_query($sqlnewc) OR die(mysql_error());  

}


echo"<br><br><br><br><br><br>";



echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Mitteilungen wurden gelöscht! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=post_ausgang\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=post_ausgang\">"; 


}



if($do=="read_message") {




 $showpm2 = mysql_query("select * from $user_pm_aus_tblname WHERE id='$p_id'");
  $resultpm2=mysql_num_rows($showpm2);

   while  ($rowpm2  =  mysql_fetch_row($showpm2)) {

if($rowpm2[1]==$save_id) {


?><br>
<table width="700" cellpadding="5" cellspacing="2" align="center" class="news">
<tr>
	
<td class="Top">
	
<table width="100%" class="news">

	<TR>
	<TD>		
	
        <img src="images/news_brief.gif" alt="" class="ImgMid"> 

<<<<<<< HEAD
<font size="2px" color="<?php echo"$color";?>"><b><?php  echo"$rowpm2[3]"; ?></b></font>

</td><td align="right"><i> versendet am <?php  echo"$rowpm2[5]"; ?>, <?php  echo"$rowpm2[6]"; ?> Uhr</i>
=======
<font size="2px" color="<?echo"$color";?>"><b><? echo"$rowpm2[3]"; ?></b></font>

</td><td align="right"><i> versendet am <? echo"$rowpm2[5]"; ?>, <? echo"$rowpm2[6]"; ?> Uhr</i>
>>>>>>> af2fff1... version1


</td></tr></table>


<table width=100% class="news"><tr><td valign="top">
<P align=justify>

<<<<<<< HEAD
<?php  echo"$rowpm2[4]"; ?>
=======
<? echo"$rowpm2[4]"; ?>
>>>>>>> af2fff1... version1

</P>
</td></tr></table>

<table width="100%" class="news">
<tr>
<td valign="middle">
				

<form action=index.php?page=post_ausgang&do=delete method=post>



<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1
 $show2 = mysql_query("select * from $user_tblname WHERE UserID='$rowpm2[2]'");
  
   
   while  ($row2  =  mysql_fetch_row($show2)) { $save_name=$row2[1]; }

 ?>
					
</td></form>
<td align="right">


<<<<<<< HEAD
<img src=images/arrow_r.gif> private Nachricht an <?php echo"<a href=\"javascript:center_position(400,400,'members.php?user_id=$rowpm2[2]','window')\"><b>$save_name</b></a>"; ?>
=======
<img src=images/arrow_r.gif> private Nachricht an <?echo"<a href=\"javascript:center_position(400,400,'members.php?user_id=$rowpm2[2]','window')\"><b>$save_name</b></a>"; ?>
>>>>>>> af2fff1... version1

</td></tr></table>
		

		</td>
	</tr>
</table>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1
}
else { echo"<br><br><br><br><b>Keine Berechtigung für diese Seite!!</b>"; }
}

}


if($do=="") {



 $showh = mysql_query("select * from $user_pm_aus_tblname WHERE von='$save_id'");

$reihenh=mysql_num_rows($showh);


$seiten = $reihenh / $user_pm_anzeigen;

$art = gettype($seiten);
if($art=="double") {
$seiten++;
$seiten = floor($seiten);}


if(!isset($pm_side_forward)) { $pm_side_forward = 0; }

 $showpm = mysql_query("select * from $user_pm_aus_tblname WHERE von='$save_id' order by id DESC LIMIT $pm_side_forward,$user_pm_anzeigen");

 $resultpm=mysql_num_rows($showpm);

if($resultpm=="0") { echo"<br><br>Du hast zur Zeit keine privaten Nachrichten in deinem Postausgang."; }
   
else {

$n = 0; $sc = $seiten;

if($reihenh > $user_pm_anzeigen) {

echo "<br><div align=center><b><font color=$color>Seiten</font></b>&nbsp;";
for($sn=1;$sn<=$sc;$sn++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($sn=="$blomb") {   $bla=$gogo*$user_pm_anzeigen;$huch=$blomb; }

}

if($pm_side_forward==$bla && $sn==$huch) {  echo "</b><font color=#ff7f00>[$sn]</font> "; }

else {
echo "<a href=\"index.php?page=post_ausgang&pm_side_forward=$n\">[$sn]</a> "; 


}


$n += $user_pm_anzeigen;}
echo"<br><br>"; }




 echo "<br><table width=700 cellspacing=0 cellpadding=5 height=22 ><tr>";


echo"<td class=tbl width=240><b>Betreff</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>an</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>versendet am</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>Status</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>löschen</td>";

echo"</tr>";


   while  ($rowpm  =  mysql_fetch_row($showpm)) {

?>
<tr><td class=tbl><img src=images/arrow_r.gif> 
<<<<<<< HEAD
<a href=index.php?page=post_ausgang&do=read_message&p_id=<?php echo"$rowpm[0]";?>>
<font><b><?php  echo"$rowpm[3]"; ?></b></font>
</a>
</td><td class=tbl align=center>
<?php 
=======
<a href=index.php?page=post_ausgang&do=read_message&p_id=<?echo"$rowpm[0]";?>>
<font><b><? echo"$rowpm[3]"; ?></b></font>
</a>
</td><td class=tbl align=center>
<?
>>>>>>> af2fff1... version1
 $show2 = mysql_query("select * from $user_tblname WHERE UserID='$rowpm[2]'");
  
   
   while  ($row2  =  mysql_fetch_row($show2)) { $save_name=$row2[1]; }

echo"<a href=\"index.php?page=user_pm&user_id=$rowpm[2]\">$save_name</a>";

?>


</td><td class=tbl align=center>

<<<<<<< HEAD
<?php  echo"$rowpm[5]"; ?>, <?php  echo"$rowpm[6]"; ?> Uhr

</td>

<?php 
=======
<? echo"$rowpm[5]"; ?>, <? echo"$rowpm[6]"; ?> Uhr

</td>

<?
>>>>>>> af2fff1... version1

 $show2gl = mysql_query("select * from $user_pm_ein_tblname WHERE von='$save_id' && ausid='$rowpm[0]'");
  
   while  ($row2gl  =  mysql_fetch_row($show2gl)) { $gl=$row2gl[7]; }
?>

<<<<<<< HEAD
<td class=tbl align=center><?php  
=======
<td class=tbl align=center><? 
>>>>>>> af2fff1... version1

 if($gl=="ja" or $gl=="") { echo"<b><font color=#ff7f00>gelesen</font></b>"; }
else { echo"<b><font color=#ff7f00>ungelesen</font></b>"; }
?>

</td>

<td class=tbl align=center>
<form action=index.php?page=post_ausgang&do=delete method=post>



<<<<<<< HEAD
<input type=checkbox name=delid[] value=<?php echo"$rowpm[0]";?>>

</td></tr>

<?php 
=======
<input type=checkbox name=delid[] value=<?echo"$rowpm[0]";?>>

</td></tr>

<?
>>>>>>> af2fff1... version1

 }

echo"</table>";

echo"<br><input type=submit value=\"Markierte Mitteilungen löschen\"><br><br>";
echo"</form>";
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
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

}