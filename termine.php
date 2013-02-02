
<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>

<?php  


 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 


if($action=="send_comment") {


$m_comment = str_replace ("\r\n","<br>", $m_comment);

        $strQuery_c  = "INSERT into $termine_comments_tblname (userid, message, unixtime, termin_id) ";
        $strQuery_c .= "VALUES ('$save_id', '$m_comment', '$timestamp', '$termin_id')";
    $resultc = @mysql_query($strQuery_c);
    print mysql_error();


echo"<br><br><br><br><br><br>";

echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Dein Kommentar wurde erfolgreich eingetragen! Du wirst weitergeleitet...</font><br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=termine&t_id=$termin_id\">Falls die automatische Weiterleitung nicht funktioniert, klicke hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=termine&t_id=$termin_id\">"; 


}

else {


if($action=="eintragen") { 



if($file!="") {

$tempname = $_FILES['file']['tmp_name']; 
$name = $_FILES['file']['name']; 


$name2 = "termine/".$name;


copy("$tempname", "$name2");  

}

else { $name=""; }

$timemk = mktime(23,59,59,$monat,$tag,$jahr);

$beschreibung = str_replace ("\r\n","<br>", $beschreibung);
 

 $strQueryx = "INSERT into $termine_tblname (tag,monat,jahr,user_id,titel,beschreibung, posttime, stunden, minuten, ort, anhang, unixtime) ";
        $strQueryx .= "VALUES ('$tag','$monat','$jahr','$save_id','$titel','$beschreibung','$timestamp', '$stunden5', '$minuten5', '$ort', '$name', '$timemk')";

    $result = @mysql_query($strQueryx);

echo"<br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Termin wurde eingetragen! Du wirst weitergeleitet...</font>";

echo"<br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=termine\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=termine\">"; 


}


else {




echo"<form action=index.php?page=termine method=post name=bla>";


$monatka = date("m",$timestamp);

?>
<br>
<table width=560 cellspacing=0 cellpadding=0><tr><td width=50> Monat: 
</td><td width=100>

<select name=monat>
<?php 

if($t_id!="") {


$shownid = mysql_query("select * from $termine_tblname WHERE id='$t_id'");
  
   
   while  ($rownid  =  mysql_fetch_row($shownid)) { $monat=$rownid[2];}


if($monat=="1") { echo"<option value=1 selected>Januar</option>"; } else  { echo"<option value=1>Januar</option>"; } 
if($monat=="2") { echo"<option value=2 selected>Februar</option>"; } else  { echo"<option value=2>Februar</option>"; } 
if($monat=="3") { echo"<option value=3 selected>März</option>"; } else  { echo"<option value=3>März</option>"; } 
if($monat=="4") { echo"<option value=4 selected>April</option>"; } else  { echo"<option value=4>April</option>"; } 
if($monat=="5") { echo"<option value=5 selected>Mai</option>"; } else  { echo"<option value=5>Mai</option>"; } 
if($monat=="6") { echo"<option value=6 selected>Juni</option>"; } else  { echo"<option value=6>Juni</option>"; } 
if($monat=="7") { echo"<option value=7 selected>Juli</option>"; } else  { echo"<option value=7>Juli</option>"; } 
if($monat=="8") { echo"<option value=8 selected>August</option>"; } else  { echo"<option value=8>August</option>"; } 
if($monat=="9") { echo"<option value=9 selected>September</option>"; } else  { echo"<option value=9>September</option>"; } 
if($monat=="10") { echo"<option value=10 selected>Oktober</option>"; } else  { echo"<option value=10>Oktober</option>"; } 
if($monat=="11") { echo"<option value=11 selected>November</option>"; } else  { echo"<option value=11>November</option>"; } 
if($monat=="12") { echo"<option value=12 selected>Dezember</option>"; } else  { echo"<option value=12>Dezember</option>"; } 


}

else {

if($monat!="") { 

if($monat=="1") { echo"<option value=1 selected>Januar</option>"; } else  { echo"<option value=1>Januar</option>"; } 
if($monat=="2") { echo"<option value=2 selected>Februar</option>"; } else  { echo"<option value=2>Februar</option>"; } 
if($monat=="3") { echo"<option value=3 selected>März</option>"; } else  { echo"<option value=3>März</option>"; } 
if($monat=="4") { echo"<option value=4 selected>April</option>"; } else  { echo"<option value=4>April</option>"; } 
if($monat=="5") { echo"<option value=5 selected>Mai</option>"; } else  { echo"<option value=5>Mai</option>"; } 
if($monat=="6") { echo"<option value=6 selected>Juni</option>"; } else  { echo"<option value=6>Juni</option>"; } 
if($monat=="7") { echo"<option value=7 selected>Juli</option>"; } else  { echo"<option value=7>Juli</option>"; } 
if($monat=="8") { echo"<option value=8 selected>August</option>"; } else  { echo"<option value=8>August</option>"; } 
if($monat=="9") { echo"<option value=9 selected>September</option>"; } else  { echo"<option value=9>September</option>"; } 
if($monat=="10") { echo"<option value=10 selected>Oktober</option>"; } else  { echo"<option value=10>Oktober</option>"; } 
if($monat=="11") { echo"<option value=11 selected>November</option>"; } else  { echo"<option value=11>November</option>"; } 
if($monat=="12") { echo"<option value=12 selected>Dezember</option>"; } else  { echo"<option value=12>Dezember</option>"; } 


  }

else { 

if($monatka=="1") { echo"<option value=1 selected>Januar</option>"; } else  { echo"<option value=1>Januar</option>"; } 
if($monatka=="2") { echo"<option value=2 selected>Februar</option>"; } else  { echo"<option value=2>Februar</option>"; } 
if($monatka=="3") { echo"<option value=3 selected>März</option>"; } else  { echo"<option value=3>März</option>"; } 
if($monatka=="4") { echo"<option value=4 selected>April</option>"; } else  { echo"<option value=4>April</option>"; } 
if($monatka=="5") { echo"<option value=5 selected>Mai</option>"; } else  { echo"<option value=5>Mai</option>"; } 
if($monatka=="6") { echo"<option value=6 selected>Juni</option>"; } else  { echo"<option value=6>Juni</option>"; } 
if($monatka=="7") { echo"<option value=7 selected>Juli</option>"; } else  { echo"<option value=7>Juli</option>"; } 
if($monatka=="8") { echo"<option value=8 selected>August</option>"; } else  { echo"<option value=8>August</option>"; } 
if($monatka=="9") { echo"<option value=9 selected>September</option>"; } else  { echo"<option value=9>September</option>"; } 
if($monatka=="10") { echo"<option value=10 selected>Oktober</option>"; } else  { echo"<option value=10>Oktober</option>"; } 
if($monatka=="11") { echo"<option value=11 selected>November</option>"; } else  { echo"<option value=11>November</option>"; } 
if($monatka=="12") { echo"<option value=12 selected>Dezember</option>"; } else  { echo"<option value=12>Dezember</option>"; } 

}}

?>
</select>

</td><td width=40> Jahr: </td><td width=80>

<select name=jahr>

<?php 

$year0="2005";
$yearka = date("Y",$timestamp);

$yearka2=$yearka+2;

$yearka3=$yearka2-$year0;

for ($tt=0; $tt<=$yearka3; $tt++)
   {    



if($t_id!="") {


$shownid2 = mysql_query("select * from $termine_tblname WHERE id='$t_id'");
  
   
   while  ($rownid2  =  mysql_fetch_row($shownid2)) { $monat=$rownid2[2]; $jahr=$rownid2[3]; }


}



if($jahr!="") {


if($year0==$jahr) { echo"<option selected value=$year0>$year0</option>"; }

else {
echo"<option value=$year0>$year0</option>";
}

}

else {

if($yearka==$year0) { echo"<option selected value=$year0>$year0</option>"; }

else {
echo"<option value=$year0>$year0</option>";
}


}

$year0=$year0+1;

}

?>
</select>

</td><td width=100>
<input type=submit value="Anzeigen" style="width:80px;">
</td><td align=right width=250><img src=images/arrow_r.gif>

<?php  if($termine_side_forward!="") {


echo"<a href=index.php?page=termine&monat=$monat&jahr=$jahr&termine_side_forward=$termine_side_forward#neuer_termin><b>Neuen Termin eintragen</b></a>";

}

else { ?>
 
<a href=index.php?page=termine#neuer_termin><b>Neuen Termin eintragen</b></a>

<?php  }

?>

</td>
</form></tr></table><font class=mini><br></font>

<font color=#c0c0c0>
&nbsp;-----------------------------------------------------------------------------------------------------------------</font>



<?php 


if($t_id=="") {

echo"<form enctype=\"multipart/form-data\" action=index.php?page=termine&action=eintragen method=post name=post_termin onsubmit=\"return check_user()\">";


$monka = date("m",$timestamp);

if($monat=="") { $monat=$monka; $jahr=$t_year; }



$showht = mysql_query("select * from $termine_tblname  WHERE monat='$monat' && jahr='$jahr'");

$reihenht=mysql_num_rows($showht);


$seitent = $reihenht / $termine_anzeigen;

$artt = gettype($seitent);
if($artt=="double") {
$seitent++;
$seitent = floor($seitent);}


if(!isset($termine_side_forward)) { $termine_side_forward = 0; }


$checkt = mysql_query("select * from $termine_tblname WHERE monat='$monat' && jahr='$jahr' ORDER by tag  LIMIT $termine_side_forward,$termine_anzeigen");

$dd=mysql_num_rows($checkt);

if($dd=="") {


if($browser=="sonstigerBrowser") { echo"<br>"; }

echo"Für diesen Monat sind noch keine Termine eingetragen.<br><br>"; }


$n = 0; $sc = $seitent;

if($reihenht > $termine_anzeigen) {

if($browser=="sonstigerBrowser") { echo"<br>"; }

echo "<b><font color=$color>Seiten</font></b>&nbsp;";
for($sn=1;$sn<=$sc;$sn++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($sn=="$blomb") {   $bla=$gogo*$termine_anzeigen;$huch=$blomb; }

}

if($termine_side_forward==$bla && $sn==$huch) {  echo "</b><font color=#ff7f00>[$sn]</font> "; }

else {
echo "<a href=\"index.php?page=termine&monat=$monat&jahr=$jahr&termine_side_forward=$n\">[$sn]</a> "; 


}


$n += $termine_anzeigen;}
echo"<br>"; }


 $tage = array("Sonntag","Montag","Dienstag","Mittwoch",
  "Donnerstag","Freitag","Samstag");



$timestamp2 = time();
$tag2 = date("d", $timestamp2); 

         while($t_check = mysql_fetch_row($checkt)) {  



$timestamp5 = mktime(23,59,59,$t_check[2],$t_check[1],$t_check[3]);


$tag = date("w", $timestamp5);  


$nametag=$tage[$tag];


$anzahltc = mysql_query("select * from $termine_comments_tblname WHERE termin_id = '$t_check[0]'");
$anzahltcm = mysql_num_rows($anzahltc);

$checkka = mysql_query("select * from $user_tblname WHERE UserID = '$t_check[4]'");
         while($r_ka2 = mysql_fetch_row($checkka)) {  $nameka="$r_ka2[1]";  }

$datumka = date("d.m.Y",$t_check[7]);


echo"<br>";
echo"<table cellspacing=2 cellpadding=2><tr><td><img src=images/news.image.gif></td><td>";
echo"<table width=500 cellspacing=2 cellpadding=2>";
echo"<tr><td class=top width=180>";
echo "<b>$t_check[1].$t_check[2].$t_check[3] ($nametag)</b></td>";
echo"<td class=top><b><font color=#ff7f00> $t_check[5]</font></b></td></tr>";
echo"<tr><td class=top>Beginn: $t_check[8]:";

if($t_check[9]=="0") { echo"0$t_check[9]"; }

else {  echo"$t_check[9]"; }

echo" Uhr</td><td class=top>Ort: $t_check[10]";
echo"</td></tr></table>";
echo"<table width=500 cellspacing=2 cellpadding=2>";
echo"<tr><td class=top><p align=justify>$t_check[6]</p>";
echo"</td></tr></table>";


if($t_check[11]!="") {

echo"<table width=500 cellspacing=2 cellpadding=2>";
echo"<tr><td class=top><img src=images/arrow_r.gif>";
echo"<a href=\"termine/$t_check[11]\" target=_blank> Achtung: Zu diesem Termin wurde eine Datei angehängt!</a>";
echo"</td></tr></table>";
 }

echo"<table width=500 cellspacing=2 cellpadding=2><tr><td class=top width=180>";
echo"<img src=images/arrow_r.gif><a href=index.php?page=termine&t_id=$t_check[0]> Kommentar schreiben ($anzahltcm)</a>";
echo"</td><td class=top><img src=images/arrow_r.gif> Eingetragen von $nameka am $datumka";
echo"</td></tr></table></td></tr></table><br>";
 }

?>
<font color=#c0c0c0>
&nbsp;-----------------------------------------------------------------------------------------------------------------</font>
<br><br>



<script>
function check_user() {

if( document.post_termin.titel.value == "" ){
alert( "Du hast keinen Titel angegeben!" );
document.post_termin.titel.focus();
return false;
}
if( document.post_termin.ort.value == "" ){
alert( "Du hast keinen Ort angegeben!" );
document.post_termin.ort.focus();
return false;
}
if( document.post_termin.beschreibung.value == "" ){
alert( "Du hast keine Beschreibung angegeben!" );
document.post_termin.beschreibung.focus();
return false;
}

}


</script>



<img src=images/arrow_r.gif> <b>Neuen Termin eintragen:</b>
<br><br><a name=neuer_termin></a>
<table><tr><td>

<b><font color=#ff7f00>Eventname/Titel:</font></b></td><td> <input type=text name=titel style="width:360px;" maxlength=28>
</td></tr>
<tr><td width=200>
<b>Wann findet das Event statt?</b></td><td>
<table><tr><td>
<select name=tag>


<?php 



for ($bb=1; $bb<=31; $bb++)
   {    


if($bb>9) {


$uu="0$bb";



if($uu==$tag2) { 

echo"<option selected>$bb</option>"; 

}

else {

echo"<option>$bb</option>"; 


}


}


else 

{


if($bb==$tag2) { 

echo"<option selected>0$bb</option>"; 

}

else {

echo"<option>0$bb</option>"; 


}}

}

?>

</select>

</td><td>


<?php 


$monat2 = date("m",$timestamp2);

?>

<select name=monat>


<?php 



for ($ii=1; $ii<=12; $ii++)
   {    


if($ii>9) {


$zz="0$ii";



if($zz==$monat2) { 

echo"<option selected>$ii</option>"; 

}

else {

echo"<option>$ii</option>"; 


}


}


else 

{


if($ii==$monat2) { 

echo"<option selected>0$ii</option>"; 

}

else {

echo"<option>0$ii</option>"; 


}}

}

?>

</select>

</td><td>

<select name=jahr>
<?php 

$oi=$t_year;

for ($i=0; $i<=2; $i++)
   {    

echo"<option value=\"$oi\" scrolling=\"yes\">$oi</option>";

$oi = $oi + 1;  

 }

?>

  </select>
</td><td>&nbsp;&nbsp;&nbsp;<b><font color=#ff7f00>Beginn:</font></b>&nbsp;</td><td>


<select name="stunden5">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option selected value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>

</td><td>

<select name="minuten5">
<option value="00">00</option>
<option value="15">15</option>
<option value="30">30</option>
<option value="45">45</option>
</select>
&nbsp;Uhr
</td>

</tr></table>

</td></tr>
<tr><td><b><font color=#ff7f00>Wo?</font></b></td><td><input type=text name=ort style="width:360px;">
</td></tr><tr><td>
<b>Beschreibung:</b></td><td> <textarea cols=55 rows=10 name=beschreibung></textarea>
</td></tr>
<tr><td valign=top><b><font color=#ff7f00>Anhang: </font></b>(optional)</td><td>

Hier kannst du z.B. einen Flyer oder eine Wegbeschreibung zu<br> einem Event anfügen.
<font class=mini><br><br></font>
<input type=file size=40 name=file>
</td>
</tr>
</table>
<br><br>
<input type=submit value=Eintragen style="width:100px";>
</form>
<br><br>

<?php  }


else {



$t_com_show = mysql_query("select * from $termine_tblname WHERE id=$t_id");


 $tage = array("Sonntag","Montag","Dienstag","Mittwoch",
  "Donnerstag","Freitag","Samstag");


  while($t_check = mysql_fetch_row($t_com_show)) {


$timestamp2 = time();
$tag2 = date("d", $timestamp2); 

        


$timestamp5 = mktime(23,59,59,$t_check[2],$t_check[1],$t_check[3]);


$tag = date("w", $timestamp5);  


$nametag=$tage[$tag];



$checkka = mysql_query("select * from $user_tblname WHERE UserID = '$t_check[4]'");
         while($r_ka2 = mysql_fetch_row($checkka)) {  $nameka="$r_ka2[1]";  }


$anzahltc = mysql_query("select * from $termine_comments_tblname WHERE termin_id = '$t_check[0]'");
$anzahltcm = mysql_num_rows($anzahltc);

$datumka = date("d.m.Y",$t_check[7]);


echo"<br>";
echo"<table cellspacing=2 cellpadding=2><tr><td><img src=images/news.image.gif></td><td>";
echo"<table width=500 cellspacing=2 cellpadding=2>";
echo"<tr><td class=top width=180>";
echo "<b>$t_check[1].$t_check[2].$t_check[3] ($nametag)</b></td>";
echo"<td class=top><b><font color=#ff7f00> $t_check[5]</font></b></td></tr>";
echo"<tr><td class=top>Beginn: $t_check[8]:";

if($t_check[9]=="0") { echo"0$t_check[9]"; }

else {  echo"$t_check[9]"; }

echo" Uhr</td><td class=top>Ort: $t_check[10]";
echo"</td></tr></table>";
echo"<table width=500 cellspacing=2 cellpadding=2>";
echo"<tr><td class=top>$t_check[6]";
echo"</td></tr></table>";


if($t_check[11]!="") {

echo"<table width=500 cellspacing=2 cellpadding=2>";
echo"<tr><td class=top><img src=images/arrow_r.gif>";
echo"<a href=\"termine/$t_check[11]\" target=_blank> Achtung: Zu diesem Termin wurde eine Datei angehängt!</a>";
echo"</td></tr></table>";
 }

echo"<table width=500 cellspacing=2 cellpadding=2><tr><td class=top width=180>";
echo"<img src=images/arrow_r.gif> $anzahltcm ";

if($anzahltcm=="1") { echo"Kommentar"; } else { echo"Kommentare"; } 
 echo"</a>";
echo"</td><td class=top><img src=images/arrow_r.gif> Eingetragen von $nameka am $datumka";
echo"</td></tr></table></td></tr></table><br>";
 }


?>
<b style=line-height:8px;>Kommentare</b>
<br>
<?php  echo"<a href=index.php?page=termine&t_id=$t_id#p><i style=line-height:18px; class=middle><u>Kommentar schreiben</u></i></a>";?>
<br>
<?php 

$n_data = mysql_query("select * from $termine_comments_tblname WHERE termin_id='$t_id'");
$n_reihen = mysql_num_rows($n_data);

$n_seiten = $n_reihen / $t_anzeigen;

$n_art = gettype($n_seiten);
if($n_art=="double") {
$n_seiten++;
$n_seiten = floor($n_seiten);

}

if(!isset($t_side_forward)) { $t_side_forward = 0; }
$news_com = mysql_query("select * from $termine_comments_tblname WHERE termin_id='$t_id' ORDER by id DESC LIMIT $t_side_forward,$t_anzeigen");
$spacer=mysql_num_rows($news_com);

if($spacer!="0") { echo"<br>"; }


if($spacer!="0") { 


$f = 0; $bg = $n_seiten;

if($n_reihen > $t_anzeigen) {

echo "<div align=center><b><font color=$color>Seiten</font>&nbsp;";
for($bf=1;$bf<=$bg;$bf++) {

for($blomb2b=1;$blomb2b<=1000;$blomb2b++) {

$gogo2b=$blomb2b-1;
if($bf=="$blomb2b") {   $bla2b=$gogo2b*$t_anzeigen;$huch2b=$blomb2b; }

}

if($t_side_forward==$bla2b && $bf==$huch2b) {  echo "</b><font color=#ff7f00>[$bf]</font> "; }

else {
echo "<a href=\"index.php?page=termine&t_id=$t_id&t_side_forward=$f\">[$bf]</a> "; 

}

$f += $t_anzeigen;}

echo"<br><br>";

 }
$zaehln="0";
  while($r_comment = mysql_fetch_row($news_com)) { $zaehln=$zaehln+1;

$shown = mysql_query("select * from $user_tblname WHERE UserID='$r_comment[1]'");
  
   
   while  ($rown  =  mysql_fetch_row($shown)) { $save_nick=$rown[1];$save_o=$rown[0]; }


$uhrzeit_t = date("H:i",$r_comment[4]);
$datum_t = date("d.m.Y",$r_comment[4]);

?>
      
<table width="66%" cellpadding="1" cellspacing="3" align="center" class="news">
<tr>
	
<td class="Top">

<table width=100%><tr><td width=20 align=center>


<img src=images/news_brief.gif border=0>



</td><td>

<table width=100%><tr><td>
<?php  
echo"<a href=\"javascript:center_position(400,400,'members.php?user_id=$save_o','window')\">";

echo"<font class=members><b>$save_nick</a></b></font>"; 
echo"</td><td align=right class=middle>$datum_t, $uhrzeit_t Uhr";?> 
</td></tr></table><a name="p"></a>
<table width=100%><tr><td>
	
<?php  echo"$r_comment[2]"; ?>
</td></tr></table>
</td></tr></table>
</td></tr></table>


<?php  

}}

else { echo"<br><br>Es sind noch keine Kommentare vorhanden.<br><br>"; }



?>


<script>
function check_user() {

if( document.t_comment.m_comment.value == "" ){
alert( "Du hast keinen Kommentar angegeben!" );
document.t_comment.m_comment.focus();
return false;
}
}
</script>

<center><br>
<form action=index.php?page=termine&action=send_comment method=post name=t_comment onsubmit="return check_user()">
<table width=500><tr><td>
<img src=images/arrow_r.gif> <b>Kommentar schreiben</b>
</td></tr></table>


<table width=500><tr><td>
</td></tr>
<tr><td width=90>
Dein Name:</td><td> <?php  echo"<font color=$color><b>$save_name</b></font>"; ?>

</td></tr>
<tr><td valign=top style=line-height:20px;>
Dein Kommentar:
</td><td>
<textarea cols=55 rows=6 name=m_comment class=textarea></textarea>
</td></tr></table>
<br>
<?php  echo"<input type=hidden value=$t_id name=termin_id>"; ?>

<input name="s_comment" type=submit class=submit value="Kommentar abschicken">
</form>
<?php 

}


}

}


}

else { echo"<br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 }