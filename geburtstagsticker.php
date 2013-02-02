<table cellspacing=0 cellpadding=0><tr><td style=line-height:18px; align=center>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

$datumb = date("d.m");
$yearb = date("Y");

$logb = date("md");

$datumheu =  date("md",$timestamp);


if($page=="") { $limit="15"; } else { $limit="90"; }

$pram3 = mysql_query("SELECT * FROM $kurs_tblname WHERE date >= '$logb' ORDER BY date LIMIT $limit");

$gesamt=mysql_num_rows($pram3);

$cou="0";


echo"<img src=images/arrow_r.gif> <b>ABI05 AMIGOS</b> | Geburtstage<br>";

echo"<table cellspacing=4 cellpadding=3>";


while  ($bla3  =  mysql_fetch_row($pram3)) {


$alterb = $yearb - $bla3[4]; 



echo"<tr>";

if($cou=="0" or $cou=="2" or $cou=="4" or $cou=="6" or $cou=="8" or $cou=="10" or $cou=="12" or $cou=="14") {
echo"<td class=top bgcolor=#ffc08a>"; }

else {
echo"<td class=top width=40>"; }

echo"<b>$bla3[3].</td>";



if($cou=="0" or $cou=="2" or $cou=="4" or $cou=="6" or $cou=="8" or $cou=="10" or $cou=="12" or $cou=="14") {
echo"<td  class=top>"; }

else {
echo"<td  bgcolor=#ffc08a class=top width=180>"; }


if($datumheu==$bla3[7]) { echo"<b>"; }
 

echo"$bla3[1] $bla3[2] <i>($alterb)</i>";


if($datumheu==$bla3[7]) { echo"</b>"; }

echo"</td></tr>";

$cou=$cou+1;

}



if($gesamt<="14") {

$cou="0";

$lim=15-$gesamt;

$pram88 = mysql_query("SELECT * FROM $kurs_tblname WHERE date > '0101' ORDER BY date LIMIT $lim");

while  ($bla88  =  mysql_fetch_row($pram88)) {

echo"<tr>";


if($lim=="0" or $lim=="2" or $lim=="4" or $lim=="6" or $lim=="8" or $lim=="10" or $lim=="12" or $lim=="14")

{

if($cou=="1" or $cou=="3" or $cou=="5" or $cou=="7" or $cou=="9" or $cou=="11" or $cou=="13" or $cou=="15") {
echo"<td class=top bgcolor=#ffc08a>";  }

else {
echo"<td class=top width=40>"; }

}

else 

{

if($cou=="1" or $cou=="3" or $cou=="5" or $cou=="7" or $cou=="9" or $cou=="11" or $cou=="13" or $cou=="15") {
echo"<td class=top width=40>";  }

else {
echo"<td class=top bgcolor=#ffc08a>";  }

}


echo"<b>$bla88[3].</td>";

$alterb = $yearb - $bla88[4]; 


if($lim=="0" or $lim=="2" or $lim=="4" or $lim=="6" or $lim=="8" or $lim=="10" or $lim=="12" or $lim=="14")

{


if($cou=="1" or $cou=="3" or $cou=="5" or $cou=="7" or $cou=="9" or $cou=="11" or $cou=="13" or $cou=="15") {
echo"<td  class=top>";}

else {
 echo"<td  bgcolor=#ffc08a class=top width=180>"; } 

}

else {


if($cou=="1" or $cou=="3" or $cou=="5" or $cou=="7" or $cou=="9" or $cou=="11" or $cou=="13" or $cou=="15") {
  echo"<td  bgcolor=#ffc08a class=top width=180>"; }

else {
echo"<td  class=top>";  } 


}

if($datumheu==$bla88[7]) { echo"<b>"; }
 

echo"$bla88[1] $bla88[2] <i>($alterb)</i></b>";


if($datumheu==$bla88[7]) { echo"</b></font>"; }

echo"</td></tr>";

$cou=$cou+1;

}}





echo"</table>";

echo"</td></tr></table>";