<?php 
 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 
?>
<font class=small><br></font>
<table width=680><tr><td>
<img src=images/neuigkeiten.jpg></td><td align=right>
<?php 


$n_data_main = mysql_query("select * from $news_tblname");
$n_reihen_main = mysql_num_rows($n_data_main);

$n_seiten_main = $n_reihen_main / $news_anzeigen;

$n_art_main = gettype($n_seiten_main);
if($n_art_main=="double") {
$n_seiten_main++;
$n_seiten_main = floor($n_seiten_main);

}





if(!isset($n_side_forward)) { $n_side_forward = 0; }
$news_show = mysql_query("select * from $news_tblname ORDER BY id DESC LIMIT $n_side_forward,$news_anzeigen");
$p = 0; $lk = $n_seiten_main;

if($n_reihen_main > $news_anzeigen) {

echo "<br><img src=images/arrow_r.gif> <b>Seiten</b></font>&nbsp;";
for($lp=1;$lp<=$lk;$lp++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($lp=="$blomb") {   $bla=$gogo*$news_anzeigen;$huch=$blomb; }

}

if($n_side_forward==$bla && $lp==$huch) {  echo "</b><font color=#ff7f00>[$lp]</font> "; }

else {
echo "<a href=\"index.php?page=news&n_side_forward=$p\">[$lp]</a> "; 

}

$p += $news_anzeigen;}
 echo"<br>"; }


echo"</td></tr></table><br>";


  while($news_row = mysql_fetch_row($news_show)) {

echo"<a name=news$news_row[0]></a>";
?>
<table width=680 align=center cellspacing=0 cellpadding=0  style="border: 1px solid #C0C0C0;">
<tr>

<td align=center valign=top>
<br>
<?php 

echo"<img src=\"images/news.image.gif\"></a>";

echo"</td><td width=10></td><td align=left width=580 valign=top>";

echo"<table width=580 height=29 cellspacing=0 cellpadding=0><tr><td>";
echo"<img src=images/arrow_r.gif> <b>$news_row[2]</b></td>";
echo"<td align=right class=small width=140>gepostet am: <b>$news_row[5]</b></td>";

echo"</tr></table>"; 


echo"<font class=middle>$news_row[4]<br><br></font>";

echo"</td><td width=10></td></tr></table>";
echo"<br>";

      
}
}

else { echo"<br><img src=images/neuigkeiten.jpg><br><br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 }
