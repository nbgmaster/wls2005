<?php 

$show_m = mysql_query("select * from $user_tblname ORDER By UserName");



 echo "<table width=680 cellspacing=0 cellpadding=5 height=22 ><tr>";


echo"<td class=tbl ><b><font size=1 color=$color>Nickname</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>Email</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>Homepage</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>Gästebuch</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>PN</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>ICQ</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>Registrierung</td></tr>";



while($row_m = mysql_fetch_row($show_m)) {  

$check_online=$timestamp-$row_m[28]; 

if($check_online < 180) {

echo"<tr>";



echo"<td align=left class=tbl width=165>";



$laengem =  strlen($row_m[1]); 



echo"<img src=images/arrow_r.gif> <a href=\"javascript:center_position(400,400,'members.php?user_id=$row_m[0]','window')\"><b>";


if($laengem>15) { echo"<font class=portrait>"; }

echo"$row_m[1]";


if($laengem>15) { echo"</font>"; }

echo"</b></a>";
echo"</td>";



echo"<td align=center class=tbl width=80>";



if($row_m[17]=="ja") { 


echo"<a href=index.php?page=write_email&user_id=$row_m[0] class=mitglieder>";
}

echo"<img src=images/icon_email.gif border=0>";

if($prow[17]=="ja") { 

echo"</a>"; }

echo"</td>";




echo"<td align=center class=tbl width=80>";



if($row_m[12]=="") { echo""; } 

else {

 if(substr($row_m[12], 0, 7) == "http://") {

echo"<a href=$row_m[12] target=_blank>";
 
}

else {  

echo"<a href=http://$row_m[12]  target=_blank>";  }}


echo"<img src=images/icon_www.gif border=0>";

if($row_m[12]!="") { echo"</a>"; } 


echo"</td><td align=center class=tbl width=80>";


echo"<a href=index.php?page=user_gb&user_id=$row_m[0] class=mitglieder><img src=images/icon_gb.gif border=0></a></td>";



echo"<td align=center class=tbl width=80>";


echo"<a href=index.php?page=user_pm&user_id=$row_m[0] class=mitglieder><img src=images/icon_pm.gif border=0></a></td>";

echo"<td align=center class=tbl width=80>";


if($row_m[13]!="" && $row_m[13]!="0") {  

echo"<a href=\"http://wwp.icq.com/whitepages/about_me/1,,,00.html?to=%25U&Uin=$row_m[13]\" target=\"_blank\">";


}

echo"<img src=images/icon_icq.gif border=0>"; 


if($row_m[13]!="" && $row_m[13]!="0") {  echo"</a>"; }

echo"</td><td width=80 align=right class=tbl>";


$datum_m = date("d.m.Y",$row_m[5]);
echo"$datum_m";

 

echo"&nbsp;";
echo"</td></tr>";

}


}


echo"</td></tr></table>";