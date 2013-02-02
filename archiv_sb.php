<br>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

if($do=="del") {

$sql = "DELETE FROM $sb_tblname WHERE id = '$sb_id'";     

mysql_query($sql);


echo"<font color=red>Eintrag gelöscht!<br><br>"; 

}

$proseite_sb_archiv="40";

$data_sb_archiv = mysql_query("select * from $sb_tblname");
$reihen_sb_archiv = mysql_num_rows($data_sb_archiv);

$seiten_sb_archiv = $reihen_sb_archiv / $proseite_sb_archiv;

$art_sb = gettype($seiten_sb_archiv);
if($art_sb=="double") {
$seiten_sb_archiv++;
$seiten_sb_archiv = floor($seiten_sb_archiv);

}

if(!isset($start_sb)) { $start_sb = 0; }
$show_sb_archiv = mysql_query("select * from $sb_tblname  ORDER BY id desc LIMIT $start_sb,$proseite_sb_archiv");

$p = 0; $lk = $seiten_sb_archiv;

echo "<table><tr><td width=\"710\" align=\"center\" class=middle> ";



echo "<img src=images/arrow_r.gif> <b>Seiten</b></font>&nbsp;";
for($lp=1;$lp<=$lk;$lp++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($lp=="$blomb") {   $bla=$gogo*$proseite_sb_archiv;$huch=$blomb; }

}

if($start_sb==$bla && $lp==$huch) {  echo "</b><font color=#ff7f00>[$lp]</font> "; }

else {
echo "<a href=\"index.php?page=archiv&sec=sb&start_sb=$p\">[$lp]</a> "; 

}

$p += $proseite_sb_archiv;}
 echo"<br>";


echo"</td></tr></table></font>";
echo"<br><table width=710><tr><td valign=top>";
     while($row = mysql_fetch_row($show_sb_archiv)) {

$row[2] = str_replace("<img src=images/1.gif border=0>", "<img src=smilies/z07.gif border=0>", $row[2]);
$row[2] = str_replace("<img src=images/2.gif border=0>", "<img src=smilies/z03.gif border=0>", $row[2]);
$row[2] = str_replace("<img src=images/3.gif border=0>", "<img src=smilies/z05.gif border=0>", $row[2]);
$row[2] = str_replace("<img src=images/4.gif border=0>", "<img src=smilies/z01.gif border=0>", $row[2]);
$row[2] = str_replace("<img src=images/5.gif border=0>", "<img src=smilies/z08.gif border=0>", $row[2]);
$row[2] = str_replace("<img src=images/6.gif border=0>", "<img src=smilies/z02.gif border=0>", $row[2]);




$row[2] = str_replace(":)", "<img src=smilies/z01.gif border=0>", $row[2]);
$row[2] = str_replace(";)", "<img src=smilies/z02.gif border=0>", $row[2]);
$row[2] = str_replace("8)", "<img src=smilies/z03.gif border=0>", $row[2]);
$row[2] = str_replace(":P", "<img src=smilies/z04.gif border=0>", $row[2]);
$row[2] = str_replace(":D", "<img src=smilies/z05.gif border=0>", $row[2]);

$row[2] = str_replace(":(", "<img src=smilies/z07.gif border=0>", $row[2]);
$row[2] = str_replace(":shock:", "<img src=smilies/z08.gif border=0>", $row[2]);
$row[2] = str_replace(":roll:", "<img src=smilies/z09.gif border=0>", $row[2]);
$row[2] = str_replace(":lol:", "<img src=smilies/z10.gif border=0>", $row[2]);
$row[2] = str_replace(":angry:", "<img src=smilies/z11.gif border=0>", $row[2]);

  ?>  

<font class=middle>

<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1

if($save_id=="1") { 

if($start_sb=="") { 

echo" <a href=\"index.php?page=archiv&sec=sb&do=del&sb_id=$row[0]\" class=\"del\"><font color=#ff7f00><b>$row[1]</b></font></a>";

}

else {

echo" <a href=\"index.php?page=archiv&sec=sb&do=del&start_sb=$start_sb&sb_id=$row[0]\" class=\"del\"><font color=#ff7f00><b>$row[1]</b></font></a>";

}}

else { echo"<font color=#ff7f00><b>$row[1]"; }



echo":&nbsp;</b></font>"; ?>



<<<<<<< HEAD
<?php  echo"$row[2]";
=======
<? echo"$row[2]";
>>>>>>> af2fff1... version1

if($row[3]!="" && $row[3]!="http://") { 


 if(substr($row[3], 0, 7) == "http://") {

echo" | <a href=$row[3] target=_blank><b>Link öffnen</b></a>"; 

}

else {  echo" | <a href=http://$row[3] target=_blank><b>Link öffnen</b></a>"; 
} 


}
 
 ?>

<br><hr color="#c0c0c0" size=1>

<<<<<<< HEAD
 <?php 
=======
 <?
>>>>>>> af2fff1... version1

        }

echo"</table><br>"; 


$p = 0; $lk = $seiten_sb_archiv;

echo "<table><tr><td width=\"710\" align=\"center\" class=middle> ";



echo "<img src=images/arrow_r.gif> <b>Seiten</b></font>&nbsp;";
for($lp=1;$lp<=$lk;$lp++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($lp=="$blomb") {   $bla=$gogo*$proseite_sb_archiv;$huch=$blomb; }

}

if($start_sb==$bla && $lp==$huch) {  echo "</b><font color=#ff7f00>[$lp]</font> "; }

else {
echo "<a href=\"index.php?page=archiv&sec=sb&start_sb=$p\">[$lp]</a> "; 

}

$p += $proseite_sb_archiv;}
 echo"<br>";


echo"</td></tr></table></font><br>";
 