<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>
<br>
<img src=images/community.jpg>
<br>
<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1

 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 

$show_new = mysql_query("select * from $user_tblname ORDER by UserID");


while($row_new = mysql_fetch_row($show_new)) {  $newest_m=$row_new[1]; $reg_m=$row_new[5];$usid=$row_new[0]; }

$reg_m2 = date("d.m.Y",$reg_m);

if($do=="" or $do=="delete") {

if($do=="delete") { echo"<font color=red>User gelöscht!</font><br>"; }

?>
<br>
<table width=680 cellspacing=0 cellpadding=5><tr><td align=left>


<form method=post>

<img src=images/arrow_r.gif> <b>Sortierungsmethode:</b> &nbsp;

<<<<<<< HEAD
<?php  if($order=="UserName") { 
=======
<? if($order=="UserName") { 
>>>>>>> af2fff1... version1

if($preg=="ASC") {

?>

 <select ONCHANGE="location = this.options[this.selectedIndex].value;">


         <option value="index.php?page=members&order=UserName&preg=ASC" selected>Nickname Aufsteigend</option>
	 <option value="index.php?page=members&order=UserName&preg=DESC">Nickname Absteigend</option>
 	 <option value="index.php?page=members&order=UserDate&preg=ASC">Anmeldedatum Aufsteigend</option>
         <option value="index.php?page=members&order=UserDate&preg=DESC">Anmeldedatum Absteigend</option>
         <option value="index.php?page=members&order=beitraege">Beiträge im Forum</option>        
         <option value="index.php?page=members&order=ehemalige">Nur Ehemalige</option>
         <option value="index.php?page=members&order=online">gerade Online</option>
         </select>

<<<<<<< HEAD
<?php  }
=======
<? }
>>>>>>> af2fff1... version1

else {

?>

 <select ONCHANGE="location = this.options[this.selectedIndex].value;">
         <option value="index.php?page=members&order=UserName&preg=ASC">Nickname Aufsteigend</option>
	 <option value="index.php?page=members&order=UserName&preg=DESC" selected>Nickname Absteigend</option>
 	 <option value="index.php?page=members&order=UserDate&preg=ASC">Anmeldedatum Aufsteigend</option>
         <option value="index.php?page=members&order=UserDate&preg=DESC">Anmeldedatum Absteigend</option>
         <option value="index.php?page=members&order=beitraege">Beiträge im Forum</option> 
         <option value="index.php?page=members&order=ehemalige">Nur Ehemalige</option>
         <option value="index.php?page=members&order=online">gerade Online</option>
         </select>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

}}

if($order=="UserDate") {


if($preg=="ASC") {

?>

 <select ONCHANGE="location = this.options[this.selectedIndex].value;">


         <option value="index.php?page=members&order=UserName&preg=ASC">Nickname Aufsteigend</option>
	 <option value="index.php?page=members&order=UserName&preg=DESC">Nickname Absteigend</option>
 	 <option value="index.php?page=members&order=UserDate&preg=ASC" selected>Anmeldedatum Aufsteigend</option>
         <option value="index.php?page=members&order=UserDate&preg=DESC">Anmeldedatum Absteigend</option>
         <option value="index.php?page=members&order=beitraege">Beiträge im Forum</option> 
         <option value="index.php?page=members&order=ehemalige">Nur Ehemalige</option>
         <option value="index.php?page=members&order=online">gerade Online</option>
         </select>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1


}

else {

?>

 <select ONCHANGE="location = this.options[this.selectedIndex].value;">


         <option value="index.php?page=members&order=UserName&preg=ASC">Nickname Aufsteigend</option>
	 <option value="index.php?page=members&order=UserName&preg=DESC">Nickname Absteigend</option>
 	 <option value="index.php?page=members&order=UserDate&preg=ASC">Anmeldedatum Aufsteigend</option>
         <option value="index.php?page=members&order=UserDate&preg=DESC" selected>Anmeldedatum Absteigend</option>
         <option value="index.php?page=members&order=beitraege">Beiträge im Forum</option> 
         <option value="index.php?page=members&order=ehemalige">Nur Ehemalige</option>
         <option value="index.php?page=members&order=online">gerade Online</option>
         </select>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

}
}

if($order=="beitraege") {

?>

 <select ONCHANGE="location = this.options[this.selectedIndex].value;">


         <option value="index.php?page=members&order=UserName&preg=ASC">Nickname Aufsteigend</option>
	 <option value="index.php?page=members&order=UserName&preg=DESC">Nickname Absteigend</option>
 	 <option value="index.php?page=members&order=UserDate&preg=ASC">Anmeldedatum Aufsteigend</option>
         <option value="index.php?page=members&order=UserDate&preg=DESC">Anmeldedatum Absteigend</option>
         <option value="index.php?page=members&order=beitraege" selected>Beiträge im Forum</option> 
         <option value="index.php?page=members&order=ehemalige">Nur Ehemalige</option>
         <option value="index.php?page=members&order=online">gerade Online</option>
         </select>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1


}


if($order=="ehemalige") {

?>

 <select ONCHANGE="location = this.options[this.selectedIndex].value;">


              <option value="index.php?page=members&order=UserName&preg=ASC">Nickname Aufsteigend</option>
	 <option value="index.php?page=members&order=UserName&preg=DESC">Nickname Absteigend</option>
 	 <option value="index.php?page=members&order=UserDate&preg=ASC">Anmeldedatum Aufsteigend</option>
         <option value="index.php?page=members&order=UserDate&preg=DESC">Anmeldedatum Absteigend</option>
         <option value="index.php?page=members&order=beitraege">Beiträge im Forum</option> 
        <option value="index.php?page=members&order=ehemalige" selected>Nur Ehemalige</option>
         <option value="index.php?page=members&order=online">gerade Online</option>
         </select>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

}


if($order=="online") {

?>

 <select ONCHANGE="location = this.options[this.selectedIndex].value;">


         <option value="index.php?page=members&order=UserName&preg=ASC">Nickname Aufsteigend</option>
	 <option value="index.php?page=members&order=UserName&preg=DESC">Nickname Absteigend</option>
 	 <option value="index.php?page=members&order=UserDate&preg=ASC">Anmeldedatum Aufsteigend</option>
         <option value="index.php?page=members&order=UserDate&preg=DESC">Anmeldedatum Absteigend</option>
         <option value="index.php?page=members&order=beitraege">Beiträge im Forum</option> 
         <option value="index.php?page=members&order=ehemalige">Nur Ehemalige</option>
         <option value="index.php?page=members&order=online" selected>gerade Online</option>
         </select>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1


}

?>


</td><td width=2></td><td valign=center align=right>
<<<<<<< HEAD
<img src=images/arrow_r.gif>  Neuestes Mitglied: <?php echo"<a href=\"javascript:center_position(400,400,'members.php?user_id=$usid','window')\"><b>$newest_m</b></a> am $reg_m2";?>
=======
<img src=images/arrow_r.gif>  Neuestes Mitglied: <?echo"<a href=\"javascript:center_position(400,400,'members.php?user_id=$usid','window')\"><b>$newest_m</b></a> am $reg_m2";?>
>>>>>>> af2fff1... version1
</td></tr></form>
</table>

<br>
<table width=680><tr><td>


<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

if($do=="delete")  {


$sqlnewc = "DELETE FROM $user_tblname WHERE UserID = '$m_id'";     

mysql_query($sqlnewc) OR die(mysql_error());  

}


$datam = mysql_query("select * from $user_tblname");
$reihenm = mysql_num_rows($datam);

$seitenm = $reihenm / $proseite_mitglieder;

$artm = gettype($seitenm);
if($artm=="double") {
$seitenm++;
$seitenm = floor($seitenm);

}



if($order=="ehemalige") {

$show_m2 = mysql_query("select * from $user_tblname WHERE ehemaliger='1' ORDER by nachname");
$show_m = mysql_query("select * from $user_tblname WHERE ehemaliger='1' ORDER by nachname");

}

if($order=="online") {

$show_m2 = mysql_query("select * from $user_tblname ORDER By UserName");


}

if($order!="online" && $order!="ehemalige") {

$show_m2 = mysql_query("select * from $user_tblname"); }

$reihenm2=mysql_num_rows($show_m2);

$seiten = $reihenm2 / $proseite_mitglieder;

$art = gettype($seiten);
if($art=="double") {
$seiten++;
$seiten = floor($seiten);}


$n = 0; $sc = $seiten;



if(!isset($side_forward_mitglieder)) { $side_forward_mitglieder = 0; }

if($order!="online" && $order!="ehemalige" && $order!="beitraege") {

$show_m = mysql_query("select * from $user_tblname ORDER by $order $preg LIMIT $side_forward_mitglieder,$proseite_mitglieder");

}

if($order=="beitraege") {

$show_m2 = mysql_query("select * from $user_tblname");

while($row_m2 = mysql_fetch_row($show_m2)) {  


$show_p = mysql_query("select * from $posts_tblname WHERE user_id='$row_m2[0]'");
$r_po = mysql_num_rows($show_p); 


$sqlong = "UPDATE $user_tblname SET anzahlposts = '$r_po' WHERE UserID='$row_m2[0]'";     

mysql_query($sqlong) OR die(mysql_error());

}

$show_m = mysql_query("select * from $user_tblname ORDER by anzahlposts DESC LIMIT $side_forward_mitglieder,$proseite_mitglieder");




}

if($order=="ehemalige") {

$show_m = mysql_query("select * from $user_tblname WHERE ehemaliger='1' ORDER by nachname LIMIT $side_forward_mitglieder,$proseite_mitglieder");
$blaa=mysql_num_rows($show_m);
}

if($order=="online") {

$show_m = mysql_query("select * from $user_tblname ORDER By UserName");


}

$rumba=mysql_num_rows($show_m); 

$x = 0; $yz = $seiten;

if($reihenm2 > $proseite_mitglieder && $order!="online") {

echo "<div align=right><b><font color=$color>Seiten</font></b>&nbsp;";
for($sn=1;$sn<=$sc;$sn++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($sn=="$blomb") {   $bla=$gogo*$proseite_mitglieder;$huch=$blomb; }

}

if($side_forward_mitglieder==$bla && $sn==$huch) {  echo "</b><font color=#ff7f00>[$sn]</font> "; }

else {

if($order!="online" && $order!="ehemalige" && $order!="beitraege") {

echo "<a href=\"index.php?page=members&order=$order&preg=$preg&side_forward_mitglieder=$n\">[$sn]</a> "; 

}

else {
echo "<a href=\"index.php?page=members&order=$order&side_forward_mitglieder=$n\">[$sn]</a> "; 

}
}

$n += $proseite_mitglieder;}
echo"<br><br>"; }


$rum="0";



$rumba78=$rumba-$mit;

if($order!="online" && $order!="ehemalige" && $order!="beitraege") {

 echo "<table width=680 cellspacing=0 cellpadding=5 height=22 ><tr>";


echo"<td class=tbl ><b><font size=1 color=$color>Nickname</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>Email</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>Homepage</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>Gästebuch</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>PN</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>ICQ</td>";

echo"<td class=tbl  align=center><b><font size=1 color=$color>Registrierung</td></tr>";


while($row_m = mysql_fetch_row($show_m)) {  

echo"<tr>";



echo"<td align=left class=tbl width=165>";



$laengem =  strlen($row_m[1]); 


if($row_m[14]=="") {
echo"<img src=images/arrow_r.gif> <a href=\"javascript:center_position(400,400,'members.php?user_id=$row_m[0]','window')\"><b>";

}

else {
echo"<img src=images/arrow_r.gif> <a href=\"javascript:center_position(400,400,'members.php?user_id=$row_m[0]','window')\"><b>";

}

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

$seitemit=$side_forward_mitglieder/$proseite_mitglieder;
$seitemit2=$seitemit+1;

echo"</table><br>";

}}


if($order=="beitraege") {

include('mitglieder_beitraege.php');

}

if($order=="online") {

include('mitglieder_online.php');

}

if($order=="ehemalige") {

include('mitglieder_ehemalige.php');

}

echo"</table><br>";

echo"<b><font color=#ff7f00>$reihenm2</font></b>";

if($order=="ehemalige") { echo" Ehemalige ";  }

else {echo" Mitglieder "; }

echo"gesamt<br><br>";


}

else { echo"<br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 }