<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 

if($do=="reply") { include('forum_eintrag.php'); }

if($do=="edit") { include('forum_edit.php'); }

if($do=="new_topic") { include('forum_thema.php'); }

if($do=="post") {


include('forum_replace.php');

$new_message = str_replace ("\r\n","<br>", $new_message);
 
 $strQuery_f  = "INSERT into $posts_tblname (cat_id,thread_id,user_id,eintrag, time) ";
        $strQuery_f .= "VALUES ('$cat_id','$thread_id','$save_id','$new_message','$timestamp')";

$sqlongra = "UPDATE $threads_tblname SET rankingtime = '$timestamp' WHERE id='$thread_id'";     

mysql_query($sqlongra) OR die(mysql_error());

    $result_f = @mysql_query($strQuery_f);

$check_id = mysql_query("select * from $posts_tblname WHERE cat_id='$cat_id' && thread_id='$thread_id'");
$anzahla=mysql_num_rows($check_id);

$tut=$anzahla / $itperpage;


         while($r_check = mysql_fetch_row($check_id)) {  $newest_id="$r_check[0]"; }


echo"<br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Eintrag wurde erstellt! Du wirst weitergeleitet...</font>";

if($tut < 1) { 
echo"<br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id#$newest_id\">Falls die automatische Weiterleitung nicht funktioniert, klicken Sie bitte hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id#$newest_id\">"; 

 }

else {

for($blomb=1;$blomb<=1000;$blomb++) {

if($tut > $blomb) { $pager=$blomb+1; }

}


echo"<br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$pager#$newest_id\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$pager#$newest_id\">"; 

}}



if($do=="edit_post") {


include('forum_replace.php');

$new_message = str_replace ("\r\n","<br>", $new_message);

$sqlong = "UPDATE $posts_tblname SET eintrag = '$new_message', edittime='$timestamp' WHERE id='$p_id'";     

mysql_query($sqlong) OR die(mysql_error());

$check_id = mysql_query("select * from $posts_tblname WHERE cat_id='$cat_id' && thread_id='$thread_id'");
$anzahla=mysql_num_rows($check_id);

$tut=$anzahla / $itperpage;


         while($r_check = mysql_fetch_row($check_id)) {  $newest_id="$r_check[0]"; }


echo"<br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Dein Eintrag wurde geändert! Du wirst weitergeleitet...</font>";

if($tut < 1) { 
echo"<br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id#$newest_id\">Falls die automatische Weiterleitung nicht funktioniert, klicken Sie bitte hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id#$newest_id\">"; 

 }

else {

for($blomb=1;$blomb<=1000;$blomb++) {

if($tut > $blomb) { $pager=$blomb+1; }

}


echo"<br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$pager#$newest_id\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$pager#$newest_id\">"; 

}}



if($do=="post_topic") {

include('forum_replace.php');

$new_message = str_replace ("\r\n","<br>", $new_message);


 $strQuery_f2  = "INSERT into $threads_tblname (cat_id,threadname,author_id,hits) ";
        $strQuery_f2 .= "VALUES ('$cat_id','$thema','$save_id','0')";

    $result_f2 = @mysql_query($strQuery_f2);

$check_th = mysql_query("select * from $threads_tblname WHERE cat_id='$cat_id' ORDER by id");

         while($r_th = mysql_fetch_row($check_th)) {  $newest="$r_th[0]"; }


 $strQuery_f  = "INSERT into $posts_tblname (cat_id,thread_id,user_id,eintrag, time) ";
        $strQuery_f .= "VALUES ('$cat_id','$newest','$save_id','$new_message','$timestamp')";

    $result_f = @mysql_query($strQuery_f);

$sqlongra = "UPDATE $threads_tblname SET rankingtime = '$timestamp' WHERE id='$newest'";     

mysql_query($sqlongra) OR die(mysql_error());


$check_id = mysql_query("select * from $posts_tblname WHERE cat_id='$cat_id' && thread_id='$newest'");

         while($r_check = mysql_fetch_row($check_id)) {  $newest_id="$r_check[0]"; }

echo"<br><br><br>";
echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Eintrag wurde erstellt! Du wirst weitergeleitet...</font>";

echo"<br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=forum&cat_id=$cat_id&thread_id=$newest#$newest_id\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id\">"; 

}

if($do=="gelesen") {


$sqldt = "DELETE FROM wls_forum_newposts WHERE user_id='$save_id'"; 

mysql_query($sqldt) OR die(mysql_error()); 

echo"<br><br><br>";
echo"<font face=\"Tahoma,Helvetica\" size=\"2\">Alle Beiträge wurden als gelesen markiert!</font>";

echo"<br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=forum&cat_id=$cat_id&thread_id=$newest#$newest_id\">Klicke hier um zum Forum zurückzukehren</a></font>";


}

if($do=="") {


if($thread_id=="") {

 if($cat_id=="") { 

?>
<br>
<img src=images/forum.jpg>
<br><br>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

echo"<div align=right><img src=images/arrow_r.gif> ";

echo"<a href=index.php?page=forum&do=gelesen>Alle ungelesenen Beiträge als gelesen markieren</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>";

echo"<font class=mini><br></font>";
echo"<table width=700 cellpadding=5>"; 

echo"<tr><td></td><td class=top align=center><b>Kategorie</td>";
echo"<td class=top align=center width=56><b> Themen</td>";
echo"<td class=top align=center width=56><b> Beiträge</td>";
echo"<td class=top align=center width=110><b> Letzter Beitrag</td></tr>";


$cat = mysql_query("select * from $cat_tblname ORDER by id");

$x="1";


$check_new2 = mysql_query("select * from $user_tblname WHERE UserID = '$save_id'");
         while($r_new2 = mysql_fetch_row($check_new2)) {  $reglast="$r_new2[16]"; $access=$r_new2[29];  }

$check_new = mysql_query("select * from $posts_tblname WHERE time >'$reglast'");

         while($r_new = mysql_fetch_row($check_new)) { 


if($save_id==$r_new[3]) { echo""; } else {


 $strQuery_f3  = "INSERT into wls_forum_newposts (cat_id,thread_id,user_id) ";
        $strQuery_f3 .= "VALUES ('$r_new[1]','$r_new[2]','$save_id')";
$result_f3 = @mysql_query($strQuery_f3);
}
}

         while($r_cat = mysql_fetch_row($cat)) {  

$check_themen = mysql_query("select * from $threads_tblname WHERE cat_id='$r_cat[0]'");
$themen=mysql_num_rows($check_themen);

$check_beitraege = mysql_query("select * from $posts_tblname WHERE cat_id='$r_cat[0]'");
$beitraege=mysql_num_rows($check_beitraege);

$last_beitrag = mysql_query("select * from $posts_tblname WHERE cat_id='$r_cat[0]' ORDER by id DESC LIMIT 1");
$rows=mysql_num_rows($last_beitrag);


if($rows!="0") { 

while($beitrag = mysql_fetch_row($last_beitrag)) {  $opi=$beitrag[0]; $omi=$beitrag[2]; $lastuser_id="$beitrag[3]"; $unixtime=$beitrag[5];

$lastuser = mysql_query("select * from $user_tblname WHERE UserID='$beitrag[3]'");
while($lastid = mysql_fetch_row($lastuser)) {  $lastuserid=$lastid[1]; $uid=$lastid[0];  } 

 }}

else { $lastuserid=""; }


$anza = mysql_query("select * from $posts_tblname WHERE thread_id='$omi'");


$uhrzeit2 = date("H:i",$unixtime);
$datum2 = date("d.m.Y",$unixtime);

echo"<tr><td class=top>";


$check_new3 = mysql_query("select * from wls_forum_newposts WHERE cat_id ='$r_cat[0]' && user_id='$save_id'");
$hmm=mysql_num_rows($check_new3);

if($hmm=="0") { echo"<img src=images/f_main.gif>"; } else { 


if($r_cat[0]=="5" && $access=="0") { echo"<img src=images/f_main.gif>"; }
else { echo"<img src=images/f_new.gif>"; }

 } 

echo"</td><td class=top onclick=\"location.href='index.php?page=forum&cat_id=$r_cat[0]'\" style=\"cursor:pointer;\" onmouseover=\"style.backgroundColor='ffc081'; return true\" onmouseout=\"style.backgroundColor=''\">";
echo"<img src=images/arrow_r.gif> <font class=forum><b>$r_cat[1]</b></font>";
echo"<font class=mini><br><br></font>$r_cat[2]</td>";

echo"</td><td class=top align=center>$themen</td><td class=top align=center>$beitraege</td>";
echo"<td class=top align=center>";

$anzahla=mysql_num_rows($anza);

$tut=$anzahla / $itperpage;

if($beitraege=="0") {

echo"<font class=middle>noch keine Beiträge vorhanden</font>"; }

else {
echo"<a href=\"javascript:center_position(400,400,'members.php?user_id=$uid','window')\">";

if($lastuserid=="") {

echo"<font class=members><b>*user deleted*</b></a> <br> am $datum2 <br> $uhrzeit2 Uhr";

 }

else {
echo"<font class=members><b>$lastuserid</b></a> <br> am $datum2 <br> $uhrzeit2 Uhr"; }


if($tut < 1) { echo" <a href=index.php?page=forum&cat_id=$r_cat[0]&thread_id=$omi#$opi><img src=images/last_reply.gif border=0></a></font></td></tr>"; }

else {

for($blomb=1;$blomb<=1000;$blomb++) {

if($tut > $blomb) { $pager=$blomb+1; }

}

echo" <a href=index.php?page=forum&cat_id=$r_cat[0]&thread_id=$omi&pager=$pager#$opi><img src=images/last_reply.gif border=0></a></font>";

}
echo"</td></tr>";

}

$x=$x+1;

 }

echo"</table>";

?><br><br>
<table><tr><td>
<img src=images/f_main.gif></td><td>keine neuen Beiträge</td>

<td><img src=images/f_new.gif></td><td>Neue Beiträge</td></tr>
</table>
<br><br>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1


$sqlong = "UPDATE $user_tblname SET reglast = '$timestamp' WHERE UserID='$save_id'";     

mysql_query($sqlong) OR die(mysql_error());

}


if($cat_id!="") {





$thread7 = mysql_query("select * from $threads_tblname WHERE cat_id='$cat_id'");
$anzahl7=mysql_num_rows($thread7);

$navi = mysql_query("select * from $cat_tblname WHERE id='$cat_id'"); $re=mysql_num_rows($navi);

         while($r_navi = mysql_fetch_row($navi)) {  $navi01="$r_navi[1]"; }

echo"<font class=mini><br></font><table width=690 cellspacing=0 cellpadding=0><tr>";
echo"<td width=32></td><td width=128><img src=images/arrow_r.gif> <a href=index.php?page=forum><b>Forum Übersicht</b></a></td>";
echo"<td><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id><b>$navi01</b></a></td>";
echo"<td align=right><img src=images/arrow_r.gif> $anzahl7 ";

if($anzahl7=="1") { echo"Thema"; } else { echo"Themen"; }

echo" vorhanden</td>";
echo"</tr</table>";
echo"<table width=690 cellspacing=0 cellpadding=0><tr><td width=32></td><td>";
echo"<hr width=655 size=1 color=#000000></td></tr></table>";


$check_newehe = mysql_query("select * from $user_tblname WHERE UserID = '$save_id'");
         while($r_newehe = mysql_fetch_row($check_newehe)) {  $ehemaligerx="$r_newehe[29]";  }

if($ehemaligerx=="0" && $cat_id=="5") { echo"<br><b>Du hast keine Berechtigung für diesen Bereich!</b>"; }


else {


$f_data = mysql_query("select * from $threads_tblname WHERE cat_id='$cat_id'");
$f_reihen = mysql_num_rows($f_data);

$f_seiten = $f_reihen / $threads_anzeigen;

$f_art = gettype($f_seiten);
if($f_art=="double") {
$f_seiten++;
$f_seiten = floor($f_seiten);

}


if(!isset($f_forward)) { $f_forward = 0; }
$thread = mysql_query("select * from $threads_tblname WHERE cat_id='$cat_id' order by rankingtime desc LIMIT $f_forward,$threads_anzeigen");
$anzahl=mysql_num_rows($thread);

echo"<table width=690 cellspacing=0 cellpadding=0><tr><td width=32></td><td>";

echo"<table border='0' cellspacing='0' cellpadding='0'><tr><td>";

$p = 0; $lk = $f_seiten;

if($f_reihen > $threads_anzeigen) {

echo "<img src=images/arrow_r.gif> <b>Seiten</b></font>&nbsp;";
for($lp=1;$lp<=$lk;$lp++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($lp=="$blomb") {   $bla=$gogo*$threads_anzeigen;$huch=$blomb; }

}

if($f_forward==$bla && $lp==$huch) {  echo "<b><font color=#ff7f00>$lp</font></b> "; }

else {
echo "<a href=\"index.php?page=forum&cat_id=$cat_id&f_forward=$p\">$lp</a> "; 

}

$p += $threads_anzeigen;}
  }

else { echo"<img src=images/arrow_r.gif> Seite 1 von 1"; }



echo"</td></tr></table>";
echo"</td>";
echo"<td align=right><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id&do=new_topic><b>Neues Thema erstellen</b></a></td>";
echo"</tr></table><font class=mini><br></font>";



if($anzahl=="0") { echo"<br>Es wurde noch kein Thema gestartet.<br>"; }

else {

echo"<table width=700 cellpadding=5>"; 

echo"<tr><td></td><td class=top align=center><b>Thema</td>";
echo"<td class=top align=center width=60><b> Autor</td>";
echo"<td class=top align=center width=60><b> Antworten</td>";
echo"<td class=top align=center width=50><b> Hits</td>";
echo"<td class=top align=center width=200><b> Letzter Beitrag</td></tr>";



$check_new2 = mysql_query("select * from $user_tblname WHERE UserID = '$save_id'");
         while($r_new2 = mysql_fetch_row($check_new2)) {  $reglast="$r_new2[16]";  }

$check_new = mysql_query("select * from $posts_tblname WHERE time >'$reglast'");

         while($r_new = mysql_fetch_row($check_new)) { 

if($save_id==$r_new[3]) { echo""; } else {

 $strQuery_f3  = "INSERT into wls_forum_newposts (cat_id,thread_id,user_id) ";
        $strQuery_f3 .= "VALUES ('$r_new[1]','$r_new[2]','$save_id')";
$result_f3 = @mysql_query($strQuery_f3);

}
}



         while($r_thread = mysql_fetch_row($thread)) {  

$check_id = mysql_query("select * from $posts_tblname WHERE cat_id='$cat_id' && thread_id='$r_thread[0]'");
$antworten2=mysql_num_rows($check_id);
$antworten=$antworten2-1;

         while($r_check = mysql_fetch_row($check_id)) {  $newest_id="$r_check[0]"; }


$author = mysql_query("select * from $threads_tblname WHERE id='$r_thread[0]'");
while($author2 = mysql_fetch_row($author)) {  $authorid=$author2[3]; }

$author3 = mysql_query("select * from $user_tblname WHERE UserID='$authorid'");
while($author4 = mysql_fetch_row($author3)) {  $authorname=$author4[1];  } 

$last_beitrag = mysql_query("select * from $posts_tblname WHERE cat_id='$cat_id' && thread_id='$r_thread[0]' ORDER by id DESC LIMIT 1");

$rows=mysql_num_rows($last_beitrag);

while($beitrag = mysql_fetch_row($last_beitrag)) {  $opi=$beitrag[0]; $lastuser_id="$beitrag[3]"; $unixtime=$beitrag[5];

$lastuser = mysql_query("select * from $user_tblname WHERE UserID='$beitrag[3]'");
while($lastid = mysql_fetch_row($lastuser)) {  $lastuserid=$lastid[1]; $uid=$lastid[0];  } 

 }

$uhrzeit2 = date("H:i",$unixtime);
$datum2 = date("d.m.Y",$unixtime);

echo"<tr><td class=top align=center>";

$check_new3 = mysql_query("select * from wls_forum_newposts WHERE cat_id ='$cat_id' && user_id='$save_id' && thread_id='$r_thread[0]'");
$hmm=mysql_num_rows($check_new3);

if($hmm=="0") { echo"<img src=images/folder.gif>"; } else { echo"<img src=images/newfolder.gif>"; }
echo"</td><td class=top width=350 onclick=\"location.href='index.php?page=forum&cat_id=$r_thread[1]&thread_id=$r_thread[0]'\" style=\"cursor:pointer;\" onmouseover=\"style.backgroundColor='ffc081'; return true\" onmouseout=\"style.backgroundColor=''\">";
echo"<img src=images/arrow_r.gif> <b>$r_thread[2]</b>";
echo"</td>";

echo"</td><td class=top align=center>$authorname</td><td class=top align=center>$antworten</td><td class=top align=center>$r_thread[4]</td>";
echo"<td class=top width=220 align=center>";
echo"<a href=\"javascript:center_position(400,400,'members.php?user_id=$uid','window')\">";

if($lastuserid=="") {

echo"<font class=members><b>*user deleted*</b></a> <br> am $datum2, $uhrzeit2";

 }

else {
echo"<font class=members><b>$lastuserid</b></a> <br> am $datum2, $uhrzeit2";

}

$anzahla=mysql_num_rows($check_id);

$tut=$anzahla / $itperpage;

if($tut < 1) { echo" <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$r_thread[0]#$opi><img src=images/last_reply.gif border=0></a></font></td></tr>"; }

else {

for($blomb=1;$blomb<=1000;$blomb++) {

if($tut > $blomb) { $pager=$blomb+1; }

}

echo" <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$r_thread[0]&pager=$pager#$opi><img src=images/last_reply.gif border=0></a></font></td></tr>";

}

 }


echo"</table>"; }


if($anzahl7 > 10) {


echo"<font class=mini><br></font><table width=690 cellspacing=0 cellpadding=0><tr><td width=32></td><td>";

echo"<table border='0' cellspacing='0' cellpadding='0'><tr><td>";

$p = 0; $lk = $f_seiten;

if($f_reihen > $threads_anzeigen) {

echo "<img src=images/arrow_r.gif> <b>Seiten</b></font>&nbsp;";
for($lp=1;$lp<=$lk;$lp++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($lp=="$blomb") {   $bla=$gogo*$threads_anzeigen;$huch=$blomb; }

}

if($f_forward==$bla && $lp==$huch) {  echo "<b><font color=#ff7f00>$lp</font></b> "; }

else {
echo "<a href=\"index.php?page=forum&cat_id=$cat_id&f_forward=$p\">$lp</a> "; 

}

$p += $threads_anzeigen;}
  }

else { echo"<img src=images/arrow_r.gif> Seite 1 von 1"; }



echo"</td></tr></table>";
echo"</td>";
echo"<td align=right><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id&do=new_topic><b>Neues Thema erstellen</b></a></td>";
echo"</tr></table>";

echo"<table width=690 cellspacing=0 cellpadding=0><tr><td width=32></td><td>";
echo"<hr width=655 size=1 color=#000000></td></tr></table>";

echo"<table width=690 cellspacing=0 cellpadding=0><tr>";
echo"<td width=32></td><td width=128><img src=images/arrow_r.gif> <a href=index.php?page=forum><b>Forum Übersicht</b></a></td>";
echo"<td><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id><b>$navi01</b></a></td>";
echo"<td align=right><img src=images/arrow_r.gif> $anzahl7 Themen vorhanden</td>";
echo"</tr</table>";

}


?><br>
<table><tr><td>
<img src=images/folder.gif></td><td>keine neuen Beiträge</td><td width=3></td>

<td><img src=images/newfolder.gif></td><td>Neue Beiträge</td></tr>
</table><br>
<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1


}

$sqlong = "UPDATE $user_tblname SET reglast = '$timestamp' WHERE UserID='$save_id'";     

mysql_query($sqlong) OR die(mysql_error());

}}


if($thread_id!="") {





$tab = "wls_forum_reload"; 
$reloadsperre2 = "120"; 
$erlaubnis = ""; 
$userip2 = $REMOTE_ADDR;
$time2 = explode( " ", microtime());
$now2 = (double)$time2[0] + (double)$time2[1];
$alt2=$now2-$reloadsperre2;
mysql_query( "DELETE FROM $tab WHERE time < $alt2" ) OR DIE(" ");

$query_line2 = mysql_fetch_row(mysql_query("SELECT * FROM $tab WHERE ip like '$userip2'"));
if($query_line2 == false) {
mysql_query("INSERT INTO $tab (id,ip,time) VALUES('', '$userip2', '$now2')") OR DIE(" ");
$erlaubnis="ja";
} else {
$erlaubnis="nein";
}

if($erlaubnis=="ja") {

$g_datah = mysql_query("select hits from $threads_tblname WHERE id='$thread_id'");

         while($g_rowh = mysql_fetch_row($g_datah)) { 

$hits=$g_rowh[0]; 

$hitsneu=$hits+1; } 

$sqlongal = "UPDATE $threads_tblname SET hits = '$hitsneu' WHERE id='$thread_id'";     

mysql_query($sqlongal) OR die(mysql_error());  }


$anzi = mysql_query("select * from $posts_tblname WHERE cat_id='$cat_id' && thread_id='$thread_id'");
$rez=mysql_num_rows($anzi);


$navi = mysql_query("select * from $cat_tblname WHERE id='$cat_id'"); $re=mysql_num_rows($navi);

         while($r_navi = mysql_fetch_row($navi)) {  $navi01="$r_navi[1]"; }


$navib = mysql_query("select * from $threads_tblname WHERE id='$thread_id'");

         while($r_thread = mysql_fetch_row($navib)) {  $navi02="$r_thread[2]"; }

echo"<font class=mini><br></font><table width=700 cellspacing=0 cellpadding=0><tr>";
echo"<td width=125><img src=images/arrow_r.gif> <a href=index.php?page=forum><b>Forum Übersicht</b></a></td>";
echo"<td><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id><b>$navi01</b></a></td>";
echo"<td align=right><img src=images/arrow_r.gif> Ausgewähltes Thema: <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=1><b>$navi02</b></a>";

echo"</td></tr></table><hr width=700 size=1 color=#000000>";

 

$check_newehe = mysql_query("select * from $user_tblname WHERE UserID = '$save_id'");
         while($r_newehe = mysql_fetch_row($check_newehe)) {  $ehemaligerx="$r_newehe[29]";  }

if($ehemaligerx=="0" && $cat_id=="5") { echo"<br><b>Du hast keine Berechtigung für diesen Bereich!</b>"; }


else {

include('blaettern.php');

if($rez > 2) {

include('blaettern2.php');

echo"<hr width=700 size=1 color=#000000><table width=700 cellspacing=0 cellpadding=0><tr>";
echo"<td width=125><img src=images/arrow_r.gif> <a href=index.php?page=forum><b>Forum Übersicht</b></a></td>";
echo"<td><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id><b>$navi01</b></a></td>";
echo"<td align=right><img src=images/arrow_r.gif> Ausgewähltes Thema: <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=1><b>$navi02</b></a>";

echo"</td></tr></table>"; }

echo"<br>"; 

$check_new3 = mysql_query("select * from wls_forum_newposts WHERE thread_id ='$thread_id' && user_id='$save_id'");
$hmm=mysql_num_rows($check_new3);

if($hmm!="0") { 

$sqldt = "DELETE FROM wls_forum_newposts WHERE thread_id ='$thread_id' && user_id='$save_id'"; 

mysql_query($sqldt) OR die(mysql_error()); }

}

}}


}


else { 


?>
<br>
<img src=images/forum.jpg>
<br><br>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

echo"<br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 } 