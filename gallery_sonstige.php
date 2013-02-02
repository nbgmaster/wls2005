<a name="s"></a>  <?php 



if($picture_id!="")  {  


$past=$picture_id - 1;
$next=$picture_id + 1;

echo"<table width=96% border=0 align=center>";
echo"<tr><td align=right>";
echo"<b><font color=#ff7f00 size=1>&raquo;</font><font size=1>Navigation:  ";

echo"<a href=index.php?site=gallery><font size=2>Fotoalben</a> | <a href=index.php?site=gallery&class=sonstige#s>Sonstige Bilder</a></td></tr></table>";
echo"<br><br>";


$s_show = mysql_query("select * from wls_config");


         while($s_row = mysql_fetch_row($s_show)) {   $s_anzahl=$s_row[1]; }


$g_reihen = $s_anzahl;

echo"<b><img src=\"gfx/nav_symbol.gif\"><u>Sonstige Bilder</u>&nbsp;</b><i>($g_reihen Bilder)</i><br><br><br><br>"; 



if($past<1) {  echo""; }

else {



echo"<a href=\"index.php?site=gallery&class=sonstige&picture_id=$past#s\"><b>&raquo;Vorheriges Bild</a>&nbsp;&nbsp;&nbsp;";

}




if($picture_id>$g_anzeigen) {





if($picture_id>$g_anzeigen) { $d=1; }
if($picture_id>$g_anzeigen * 2) { $d=2; }
if($picture_id>$g_anzeigen * 3) { $d=3; }
if($picture_id>$g_anzeigen * 4) { $d=4; }
if($picture_id>$g_anzeigen * 5) { $d=5; }
if($picture_id>$g_anzeigen * 6) { $d=6; }
if($picture_id>$g_anzeigen * 7) { $d=7; }
if($picture_id>$g_anzeigen * 8) { $d=8; }
if($picture_id>$g_anzeigen * 9) { $d=9; }
if($picture_id>$g_anzeigen * 10) { $d=10; }
if($picture_id>$g_anzeigen * 11) { $d=11; }
if($picture_id>$g_anzeigen * 12) { $d=12; }
if($picture_id>$g_anzeigen * 13) { $d=13; }
if($picture_id>$g_anzeigen * 14) { $d=14; }
if($picture_id>$g_anzeigen * 15) { $d=15; }
if($picture_id>$g_anzeigen * 16) { $d=16; }
if($picture_id>$g_anzeigen * 17) { $d=17; }
if($picture_id>$g_anzeigen * 18) { $d=18; }
if($picture_id>$g_anzeigen * 19) { $d=19; }
if($picture_id>$g_anzeigen * 20) { $d=20; }


$c = $g_anzeigen * $d;  




if($picture_id>$c)  {

 


echo"<a href=\"index.php?site=gallery&class=sonstige&g_side_forward=$c#s\"><b>&raquo;Thumbnails</b></a>&nbsp;&nbsp;&nbsp;";

 }  } 

else {
echo"<a href=\"index.php?site=gallery&class=sonstige#s\"><b>&raquo;Thumbnails</b></a>&nbsp;&nbsp;&nbsp;"; }


$s_show = mysql_query("select * from wls_config");


         while($s_row = mysql_fetch_row($s_show)) {   $s_anzahl=$s_row[1]; }

$g_reihen=$s_anzahl;



if($next>$g_reihen) { echo""; } 

else {

echo"<a href=\"index.php?site=gallery&class=sonstige&picture_id=$next#s\"><b>&raquo;Nächstes Bild</b></a>";

}



 echo"<br><br><img src=\"gallery/sonstige/images/$picture_id.jpg\" alt=\"Bild $picture_id\" border=\"3\"><br><br>";

if($past<1) {  echo""; }

else {


echo"<a href=\"index.php?site=gallery&class=sonstige&picture_id=$past#s\"><b>&raquo;Vorheriges Bild</a>&nbsp;&nbsp;&nbsp;";

}

 


if($picture_id>$g_anzeigen) {





if($picture_id>$g_anzeigen) { $d=1; }
if($picture_id>$g_anzeigen * 2) { $d=2; }
if($picture_id>$g_anzeigen * 3) { $d=3; }
if($picture_id>$g_anzeigen * 4) { $d=4; }
if($picture_id>$g_anzeigen * 5) { $d=5; }
if($picture_id>$g_anzeigen * 6) { $d=6; }
if($picture_id>$g_anzeigen * 7) { $d=7; }
if($picture_id>$g_anzeigen * 8) { $d=8; }
if($picture_id>$g_anzeigen * 9) { $d=9; }
if($picture_id>$g_anzeigen * 10) { $d=10; }
if($picture_id>$g_anzeigen * 11) { $d=11; }
if($picture_id>$g_anzeigen * 12) { $d=12; }
if($picture_id>$g_anzeigen * 13) { $d=13; }
if($picture_id>$g_anzeigen * 14) { $d=14; }
if($picture_id>$g_anzeigen * 15) { $d=15; }
if($picture_id>$g_anzeigen * 16) { $d=16; }
if($picture_id>$g_anzeigen * 17) { $d=17; }
if($picture_id>$g_anzeigen * 18) { $d=18; }
if($picture_id>$g_anzeigen * 19) { $d=19; }
if($picture_id>$g_anzeigen * 20) { $d=20; }


$c = $g_anzeigen * $d;  



if($picture_id>$c)  {

 


echo"<a href=\"index.php?site=gallery&class=sonstige&g_side_forward=$c#s\"><b>&raquo;Thumbnails</b></a>&nbsp;&nbsp;&nbsp;";

 }  } 

else {
echo"<a href=\"index.php?site=gallery&class=sonstige#s\"><b>&raquo;Thumbnails</b></a>&nbsp;&nbsp;&nbsp;"; }



if($next>$g_reihen) { echo""; } 

else {

echo"<a href=\"index.php?site=gallery&class=sonstige&picture_id=$next#s\"><b>&raquo;Nächstes Bild</b></a>";

}

}


else {


$s_show = mysql_query("select * from wls_config");


         while($s_row = mysql_fetch_row($s_show)) {   $s_anzahl=$s_row[1]; }


$g_reihen = $s_anzahl;



$g_seiten = $g_reihen / $g_anzeigen;

$g_art = gettype($g_seiten);
if($g_art=="double") {
$g_seiten++;
$g_seiten = floor($g_seiten);

}



?>
<table width=646 align=center cellspacing=0 cellpadding=0><tr>

<td align=left height=47><img src=images/partypics.jpg></td><td valign=top align=right class=middle>
<font class=mini><br></font>
<?php 
echo"<img src=images/arrow_r.gif> <b>Album:</b> Sonstige Bilder";


echo"<br><br>";


if(!isset($g_side_forward)) { $g_side_forward = 0; }
$g_show = mysql_query("select * from wls_sonstige ORDER BY number LIMIT $g_side_forward,$g_anzeigen");



$n = 0; $sc = $g_seiten;

if($g_reihen > $g_anzeigen) {

echo "<img src=images/arrow_r.gif> <b>Seiten</b>&nbsp;";
for($sn=1;$sn<=$sc;$sn++) {

for($blomb2=1;$blomb2<=1000;$blomb2++) {

$gogo2=$blomb2-1;
if($sn=="$blomb2") {   $bla2=$gogo2*$g_anzeigen;$huch2=$blomb2; }

}

if($g_side_forward==$bla2 && $sn==$huch2) {  echo "</b><font color=#ff7f00>[$sn]</font> "; }

else {
echo "<a href=\"index.php?page=gallery&class=sonstige&g_side_forward=$n\">[$sn]</a> "; 

}

$n += $g_anzeigen;}
 }

else { echo"Seite <b>1</b> von 1"; }

echo"</td></tr></table><img src=images/trennlinie_big.gif>";
echo"<table width=95% align=center border=0 cellpadding=6 cellspacing=0><tr>";


$zaehlg="0";

         while($g_row = mysql_fetch_row($g_show)) {  


if($g_row[2]>$g_reihen) {  echo""; }

else {

$zaehlg=$zaehlg+1;


$blubb=$g_row[2];
$blubb3=$g_row[1];
$blubb2="gallery/sonstige/images/$blubb.jpg";

$size2 = getimagesize($blubb2);
$width=$size2[0];
$height=$size2[1];

echo"<td align=center><a href=\"javascript:center_picture('gallery_sonstige2.php?image=$g_row[2]','$width','$height','1');\"><img src=\"gallery/sonstige/thumbs/$g_row[2].jpg\" class=bilder alt=\"Bild $g_row[2]\"></a>";

echo"</td>";  


for ($i=1; $i<=100; $i++)
   {    

$x = 5 * $i;  

 
  

if($g_row[2]==$x) { echo"</tr><tr>"; } 
else { echo""; }

}
}
}

echo"</td></tr></table><br>";

$alter=$g_reihen-$g_anzeigen;


}



