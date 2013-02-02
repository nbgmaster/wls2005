<?php 

$show_m = mysql_query("select * from $user_tblname");

$mit="0";

while($row_m = mysql_fetch_row($show_m)) {  


$erg=$timestamp-$row_m[28];

if($erg < 180) { $mit=$mit+1; }

$check_status=$row_m[15];

$show_on = mysql_query("select * from $on_tblname WHERE IP='$check_status'");

$reihen_on = mysql_num_rows($show_on);


}


$show_online = mysql_query("select * from $on_tblname");

$reihenon = mysql_num_rows($show_online);


$gaeste=$reihenon-$mit;




$userg = mysql_query("select * from $user_tblname");

$userg = mysql_num_rows($userg);

$besucher_zeig = mysql_query("select * from $besucher_tblname");
$spacerzeig=mysql_num_rows($besucher_zeig);
$spacerzeig=$spacerzeig+12654;


$besucher_zeig2 = mysql_query("select * from $besucher_tblname WHERE Datum='$datum'");
$spacerzeig2=mysql_num_rows($besucher_zeig2);

$stunden=date("H",$timestamp);
$minuten=date("i",$timestamp);


$sekunden=($stunden*60*60)+($minuten*60)+86400;

$sekundenb=($stunden*60*60)+($minuten*60);


$timezu=$timestamp-$sekunden;

$time2zu=$timestamp-$sekundenb;

$besucher_zeig3 = mysql_query("select * from $besucher_tblname WHERE Datum!='$datum' && time>'$timezu' && time<'$time2zu'");

$spacerzeig3=mysql_num_rows($besucher_zeig3);

?>

<table cellspacing="0" cellpadding="0">

<tr><td background="gfx/top_small_01.gif" width="190" height="26">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

Counter Stats

</td></tr>
<tr><td background="gfx/top_small_02.gif" width="190" height="66" align="center">

<table width="170">
<tr><td>
<img src="images/arrow_r.gif"> Besucher gesamt
</td><td align="right">
<b><?php  echo"$spacerzeig"; ?></b>
</td></tr>

<tr><td>
<img src="images/arrow_r.gif"> Besucher heute
</td><td align="right">
<b><?php  echo"$spacerzeig2"; ?></b>
</td></tr>

<tr><td>
<img src="images/arrow_r.gif"> Besucher gestern
</td><td align="right">
<b><?php  echo"$spacerzeig3"; ?></b>
</td></tr>

<tr><td>
<img src="images/arrow_r.gif"> Mitglieder gesamt
</td><td align="right">
<b><?php  echo"$userg"; ?></b>
</td></tr>

<tr><td>

<img src="images/arrow_r.gif"> Mitglieder online
</td><td align="right">
<b><?php  echo"$mit"; ?></b>
</td></tr>

<tr><td>
<img src="images/arrow_r.gif"> Gäste online
</td><td align="right">
<b><?php  echo"$gaeste"; ?></b>
</td></tr>

</table>

</td></tr>

<tr><td background="gfx/top_small_03.gif" width="190" height="27">

</td></tr></table>
