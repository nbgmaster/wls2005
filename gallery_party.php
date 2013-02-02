<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1


if($g_id=="") {


?>

<table width=700 align=center cellspacing=0 cellpadding=0><tr>

<td align=left height=47>&nbsp;<img src=images/partypics.jpg></td>
<td valign=top align=right class=middle>
<font class=mini><br></font>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

$g_data_main = mysql_query("select * from $gallery_tblname WHERE cat='party'");
$g_reihen_main = mysql_num_rows($g_data_main);

$g_seiten_main = $g_reihen_main / $g_anzeigen_main;

$g_art_main = gettype($g_seiten_main);
if($g_art_main=="double") {
$g_seiten_main++;
$g_seiten_main = floor($g_seiten_main);

}


if(!isset($g_side_forward_main)) { $g_side_forward_main = 0; }
$g_show_main = mysql_query("select * from $gallery_tblname WHERE cat='party' ORDER BY id DESC LIMIT $g_side_forward_main,$g_anzeigen_main");


$p = 0; $lk = $g_seiten_main;

if($g_reihen_main > $g_anzeigen_main) {

echo "<br><img src=images/arrow_r.gif> <b>Seiten</b></font>&nbsp;";
for($lp=1;$lp<=$lk;$lp++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($lp=="$blomb") {   $bla=$gogo*$g_anzeigen_main;$huch=$blomb; }

}

if($g_side_forward_main==$bla && $lp==$huch) {  echo "</b><font color=#ff7f00>[$lp]</font> "; }

else {
echo "<a href=\"index.php?page=gallery&class=party&g_side_forward_main=$p\">[$lp]</a> "; 

}

$p += $g_anzeigen_main;}
 echo"<br>"; }



echo"</td></tr></table>";



 

while($g_row_main = mysql_fetch_row($g_show_main)) { 


?>

<table width=700 align=center cellspacing=0 cellpadding=0  style="border: 1px solid #C0C0C0;">
<tr>

<td align=left valign=top>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1
echo"<a href=\"index.php?page=gallery&class=party&g_id=$g_row_main[0]\">";
echo"<img src=\"gallery/$g_row_main[1]/thumbs/$g_row_main[3].jpg\" class=bilder></a>";

echo"</td><td width=10></td><td align=left width=580 valign=top>";

echo"<table width=580 height=29 cellspacing=0 cellpadding=0><tr><td>";
echo"<img src=images/arrow_r.gif> <b>$g_row_main[2]</b></td>";
echo"<td align=right class=small width=80>aufgenommen am: <b>$g_row_main[6]</b></td>";
echo"<td width=8></td><td align=right class=small width=60>online seit: <b>$g_row_main[5]</b></td>";
echo"</tr></table>"; 


echo"<font class=middle>$g_row_main[4]</font>";

echo"</td><td width=10></td></tr></table>";
echo"<br>";

}


}

if($g_id!="")  {


$g_data_mai2 = mysql_query("select * from $gallery_tblname WHERE id > '$g_id' && cat='party'");
$roy=mysql_num_rows($g_data_mai2);


include('gallery_variablen.php');


$g_data_main2 = mysql_query("select * from $gallery_tblname WHERE id='$g_id'");

         while($g_row6 = mysql_fetch_row($g_data_main2)) {  $g_sec=$g_row6[1];$album=$g_row6[2]; }

$g_data = mysql_query("select * from wls_gallery_$g_sec");
$g_reihen = mysql_num_rows($g_data);

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
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1
echo"<img src=images/arrow_r.gif> <b>Album:</b> $album";
echo" | <img src=images/arrow_r.gif>";

if($roy2=="0") {  echo" <a href=index.php?page=gallery&class=party><b>Zur Album Übersicht</b></a>"; }

else { echo" <a href=index.php?page=gallery&class=party&g_side_forward_main=$roy2><b>Zur Album Übersicht</b></a>"; }

echo"<br><br>";


if(!isset($g_side_forward)) { $g_side_forward = 0; }
$g_show = mysql_query("select * from wls_gallery_$g_sec ORDER BY number LIMIT $g_side_forward,$g_anzeigen");



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
echo "<a href=\"index.php?page=gallery&class=party&g_id=$g_id&g_side_forward=$n\">[$sn]</a> "; 

}

$n += $g_anzeigen;}
 }

echo"</td></tr></table><img src=images/trennlinie_big.gif>";
echo"<table width=95% align=center border=0 cellpadding=6 cellspacing=0><tr>";


$zaehlg="0";

         while($g_row = mysql_fetch_row($g_show)) {  

$zaehlg=$zaehlg+1;


$blubb=$g_row[2];
$blubb3=$g_row[1];
$blubb2="gallery/$blubb3/images/$blubb.jpg";

$size2 = getimagesize($blubb2);

if($browser!="sonstigerBrowser") {   $width=$size2[0]+23;  $height=$size2[1]+43; }
else { 

if($size2[1] < 550) { $width=$size2[0]; } else { $width=$size2[0]+16; }

$height=$size2[1]+25; }


if($height > 550) { $height="550"; }


if($size2[0] < 500) {  $width="620"; $height="485"; }


echo"<td align=center><a href=\"javascript:center_position($width,$height,'bildergalerie.php?g_id=$g_id&p_id=$g_row[2]','window')\"><img src=\"gallery/$g_row[1]/thumbs/$g_row[2].jpg\" class=bilder alt=\"Bild $g_row[2]\"></a>";


echo"</td>";  


for ($i=1; $i<=100; $i++)
   {    

$x = 5 * $i;  

 
  

if($g_row[2]==$x) { echo"</tr><tr>"; } 
else { echo""; }

}


}
echo"</td></tr></table><br>";

$alter=$g_reihen-$g_anzeigen;


}
