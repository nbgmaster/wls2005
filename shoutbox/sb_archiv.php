<<<<<<< HEAD
<?php  include('sb_config.php'); ?>
=======
<? include('sb_config.php'); ?>
>>>>>>> af2fff1... version1

<html>
<head>

<title>nbg-master.de Shoutbox</title>

<link rel="stylesheet" href="shoutbox.css">


<<<<<<< HEAD
<?php  include('style.php'); ?>
=======
<? include('style.php'); ?>
>>>>>>> af2fff1... version1


</head>

<<<<<<< HEAD
<body bgcolor="<?php echo"$bgcolor";?>">

<table cellspacing="0" cellpadding="2"><tr><td align="center" width="<?php echo"$width";?>">

<?php 
=======
<body bgcolor="<?echo"$bgcolor";?>">

<table cellspacing="0" cellpadding="2"><tr><td align="center" width="<?echo"$width";?>">

<?
>>>>>>> af2fff1... version1


if($dosb=="del") {

$sql = "DELETE FROM $sb_tblname WHERE id = '$sb_id'";     

mysql_query($sql);


}

$data_sb = mysql_query("select * from $sb_tblname");

$reihen_sb = mysql_num_rows($data_sb);


$data_sb_archiv = mysql_query("select * from $sb_tblname");
$reihen_sb_archiv = mysql_num_rows($data_sb_archiv);

$seiten_sb_archiv = $reihen_sb_archiv / $proseite_sb;

$art_sb = gettype($seiten_sb_archiv);
if($art_sb=="double") {
$seiten_sb_archiv++;
$seiten_sb_archiv = floor($seiten_sb_archiv);

}


if(!isset($side_forward_sb)) { $side_forward_sb = 0; }

$show_sb = mysql_query("select * from $sb_tblname ORDER BY id DESC LIMIT $side_forward_sb,$proseite_sb");


$n = 0; $sc = $seiten_sb_archiv;

echo "<div align=\"center\" class=\"sb_archiv\" style=\"font-size:$schriftseiten1;color:$schriftseiten2;\"><b>Seiten</b>&nbsp;";
for($sn=1;$sn<=$sc;$sn++) {

for($count=1;$count<=30000;$count++) {

$counter = $count - 1;

if($sn=="$count") {   $new_c = $counter*$proseite_sb; $sec = $count; }

}

if($side_forward_sb=="$new_c" && $sn=="$sec") {  echo "</b>[$sn]"; }

else { echo "<a href=\"sb_archiv.php?side_forward_sb=$n\" class=\"link\"><b>[$sn]</b></a> "; }

$n += $proseite_sb;}

echo"</div>";

if($dosb=="del") { echo"<font color=\"red\" size=\"1\">Eintrag gelöscht</font>"; }

echo"<hr size=\"1\" color=\"#000000\">";

echo"<table cellspacing=\"0\" cellpadding=\"0\">";

   while($row_sb = mysql_fetch_row($show_sb)) {

echo"<tr><td width=\"4\"></td><td><table cellspacing=\"0\" cellpadding=\"0\">";

$breite = $width-15;

echo"<tr><td width=\"$breite\" style=\"font-size:$schriftgroeße1;\">";

echo"<b><font color=\"$schriftfarbe1\">";


if($save_id=="1") { 

if($side_forward_sb=="") { 

echo" <a href=\"sb_archiv.php?dosb=del&sb_id=$row_sb[0]\" class=\"del\">$row_sb[1]</a>";

}

else {

echo" <a href=\"sb_archiv.php?side_forward_sb=$side_forward_sb&dosb=del&sb_id=$row_sb[0]\" class=\"del\">$row_sb[1]</a>";

}}

else { echo"$row_sb[1]"; }


echo"</font></b></td><td align=\"right\">";


echo"</td></tr></table>";

echo"</td></tr><tr><td width=\"4\"></td><td style=\"font-size:$schriftgroeße2\";>";

echo"<font color=\"$schriftfarbe2\">$row_sb[2]</font><hr size=\"1\" align=\"left\" width=\"98%\" color=\"$trennlinie\">";



echo "</td></tr>";  }  


echo"</table>";


?>

</td></tr></table>

</body>
</html>