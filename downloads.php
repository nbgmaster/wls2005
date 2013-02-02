<br><br><img src=images/downloads.jpg>
<br><br>
<?php 

 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 


$dl_data = mysql_query("select * from $downloads_tblname");
$dl_reihen = mysql_num_rows($dl_data);

$dl_seiten = $dl_reihen / $downloads_anzeigen;

$dl_art = gettype($dl_seiten);
if($dl_art=="double") {
$dl_seiten++;
$dl_seiten = floor($dl_seiten);

}



if(!isset($dl_side_forward)) { $dl_side_forward = 0; }
   $show_downloads = mysql_query("select * from $downloads_tblname order by id DESC LIMIT $dl_side_forward,$downloads_anzeigen");
 
  echo"<table width=680 cellspacing=10 cellpadding=3>";
 

$n = 0; $sc = $dl_seiten;

if($dl_reihen > $downloads_anzeigen) {

echo "<br><div align=center><b><font color=#ff7f00>Seiten</font></b>&nbsp;";
for($sn=1;$sn<=$sc;$sn++) {
echo "<a href=\"index.php?site=stuff&go=downloads&dl_side_forward=$n\"><b>[$sn]</b></a>\n";


$n += $downloads_anzeigen;}
echo"<br><br>"; }


         while($row_downloads = mysql_fetch_row($show_downloads)) {


echo"<tr>";
echo"<td width=100 align=center class=top onclick=\"location.href='downloads/$row_downloads[1]'\" style=\"cursor:pointer;\" onmouseover=\"style.backgroundColor='ffc081'; return true\" onmouseout=\"style.backgroundColor=''\"><b>";
echo"DOWNLOAD</b></td><td class=top><img src=images/arrow_r.gif> $row_downloads[2]</td><td class=top width=100 align=right>$row_downloads[3]</td></tr>";



}

echo"</table>";

}

else { echo"<br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 }