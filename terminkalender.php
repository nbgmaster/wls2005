<br><table cellspacing=0 cellpadding=0><tr><td style=line-height:18px; align=center>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

$datumb = date("d.m");
$yearb = date("Y");

$logb = date("md");




$limit="11"; 

$t_tag = date("d",$timestamp);
$t_monat = date("m",$timestamp);
$t_year = date("Y",$timestamp);

$pram3 = mysql_query("SELECT * FROM $termine_tblname WHERE unixtime > $timestamp ORDER by unixtime LIMIT $limit");

$gesamt=mysql_num_rows($pram3);

$cou="0";


echo"<img src=images/arrow_r.gif> <b>ABI05 AMIGOS</b> | Termine<br>";

echo"<table cellspacing=4 cellpadding=3>";



while  ($bla3  =  mysql_fetch_row($pram3)) {




echo"<tr>";

if($cou=="0" or $cou=="2" or $cou=="4" or $cou=="6" or $cou=="8" or $cou=="10" or $cou=="12" or $cou=="14") {
echo"<td class=top bgcolor=#ffc08a>"; }

else {
echo"<td class=top width=40>"; }

echo"<b>";

if($bla3[1]<10) { echo"0$bla3[1]."; }

else { echo"$bla3[1]."; }

if($bla3[2]<10) { echo"0$bla3[2]."; }
else { echo"$bla3[2]."; }

echo"</td>";


if($cou=="0" or $cou=="2" or $cou=="4" or $cou=="6" or $cou=="8" or $cou=="10" or $cou=="12" or $cou=="14") {
echo"<td  class=top width=180>"; }

else {
echo"<td  bgcolor=#ffc08a class=top>"; }


echo"<a href=index.php?page=termine&t_id=$bla3[0]>";

if($bla3[1]=="$t_tag" && $bla3[2]=="$t_monat" && $bla3[3]=="$t_year") { echo"<b>"; }

$laengelog2 =  strlen($bla3[5]); 

if($laengelog2 > 20) { echo"<font class=middle>"; }

echo"$bla3[5]";

if($laengelog2 > 20) { echo"</font>"; }


if($bla3[1]=="$t_tag" && $bla3[2]=="$t_monat" && $bla3[3]=="$t_year")  { echo"</b>"; }


echo"</a></td></tr>";

$cou=$cou+1;

}


echo"</table>";


echo"</td></tr></table>";
