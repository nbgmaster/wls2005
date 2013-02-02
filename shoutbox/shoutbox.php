<?php 


include('sb_config.php');

$check_sb="true";

?>


<?php  if($dosb=="admin") { include('sb_admin.php'); }

if($dosb=="" or $dosb=="del") { ?>


<table cellspacing="0" cellpadding="2"><tr><td align="center" width="<?php echo"$width";?>">

<div style="color:<?php echo"$schriftfarbe";?>;font-size:<?php echo"$schriftgroesse";?>;">


<?php  

if($check_sb=="true") { 


if($dosb=="del") {

$sql = "DELETE FROM $sb_tblname WHERE id = '$sb_id'";     

mysql_query($sql);

echo"<font color=\"red\" size=\"1\">Eintrag gelöscht</font>";

}

if (isset($submit_sb)) {


$erlaubnis = ""; 
$userip = $REMOTE_ADDR;
$time = explode( " ", microtime());
$now = (double)$time[0] + (double)$time[1];
$alt=$now-$reloadsperre;


mysql_query( "DELETE FROM $ip_tblname WHERE time < $alt" ) OR DIE(" ");

$query_line = mysql_fetch_row(mysql_query("SELECT * FROM $ip_tblname WHERE ip like '$userip'"));

if($query_line == false) {

mysql_query("INSERT INTO $ip_tblname (id,ip,time) VALUES('', '$userip', '$now')") OR DIE(" ");

$erlaubnis="ja";

} 

else 

{
$erlaubnis="nein";
}


if($erlaubnis=="nein") {  echo"<font color=\"red\" size=\"1\">IP gesperrt!</font>"; }

else {

$message=$text_sb;


include('shoutbox/sb_replace.php');


        $strQuery_sb  = "INSERT into $sb_tblname (name_sb, text_sb, link_sb, date_sb, id_user_sb) ";
        $strQuery_sb .= "VALUES ('$name_sb', '$message', '$link_sb', '$timestamp', '$save_id')";
    $result = @mysql_query($strQuery_sb);
    print mysql_error();

}}


$list_sb = mysql_query("select * from $sb_tblname");

$eintraege=mysql_num_rows($list_sb);

if($archiv_link=="ja" or $admin_link=="ja") {

?>

<div class="header">

<?php 


if($archiv_link=="ja") { ?>

<a href="javascript:sb_archiv()" class="link"><b>Archiv</b></a> (<?php echo"$eintraege";?>)

<?php  }

if($archiv_link=="ja" && $admin_link=="ja") 

{ echo" | "; }

if($admin_link=="ja") { 

echo"<a href=\"$PHP_SELF?dosb=admin\" class=\"link\">Admin</a>";

 } ?>

</div>

<?php  } ?>

</div>

<?php 


include('shoutbox/sb_functions.php');


$data_sb = mysql_query("select * from $sb_tblname");

$reihen_sb = mysql_num_rows($data_sb);


include('shoutbox/sb_template.php');


if(!isset($side_forward_sb)) { $side_forward_sb = 0; }

$show_sb = mysql_query("select * from $sb_tblname ORDER BY id DESC LIMIT $side_forward_sb,$proseite_sb");


echo"<table border=0 width=196 cellspacing=\"0\" cellpadding=\"0\">";

  while($row_sb = mysql_fetch_row($show_sb)) {


$row_sb[2] = str_replace("<img src=images/1.gif border=0>", "<img src=smilies/z07.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace("<img src=images/2.gif border=0>", "<img src=smilies/z03.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace("<img src=images/3.gif border=0>", "<img src=smilies/z05.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace("<img src=images/4.gif border=0>", "<img src=smilies/z01.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace("<img src=images/5.gif border=0>", "<img src=smilies/z08.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace("<img src=images/6.gif border=0>", "<img src=smilies/z02.gif border=0>", $row_sb[2]);


$row_sb[2] = str_replace(":)", "<img src=smilies/z01.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace(";)", "<img src=smilies/z02.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace("8)", "<img src=smilies/z03.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace(":P", "<img src=smilies/z04.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace(":D", "<img src=smilies/z05.gif border=0>", $row_sb[2]);

$row_sb[2] = str_replace(":(", "<img src=smilies/z07.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace(":shock:", "<img src=smilies/z08.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace(":roll:", "<img src=smilies/z09.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace(":lol:", "<img src=smilies/z10.gif border=0>", $row_sb[2]);
$row_sb[2] = str_replace(":angry:", "<img src=smilies/z11.gif border=0>", $row_sb[2]);


$row_sb[2] = wordwrap($row_sb[2], 28, "\n", 1);


echo"<tr><td width=\"4\"></td><td style=\"width:195px;font-size:$schriftgroeße2\";>";



echo"<b><font color=\"$schriftfarbe1\">$row_sb[1]: </font></b>"; 


echo"<font color=\"$schriftfarbe2\">$row_sb[2]</font>";

$uhrzeitsb = date("H:i",$row_sb[4]);
$datumsb = date("d.m.Y",$row_sb[4]);

if($row_sb[4]!="0") {
echo"<br><i>$datumsb, $uhrzeitsb</i>";

if($row_sb[3]!="" && $row_sb[3]!="http://") { 


 if(substr($row_sb[3], 0, 7) == "http://") {

echo" | <a href=$row_sb[3] target=_blank><b>Link öffnen</b></a>"; 

}

else {  echo" | <a href=http://$row_sb[3] target=_blank><b>Link öffnen</b></a>"; 
} 

}
}


echo "<hr width=185 color=#c0c0c0 size=1></td><td>&nbsp;</td></tr>";  }  


echo"</table>";

}

else { 

echo"Bitte überprüfe die Angaben in der sb_config.php!"; }



?>

</td></tr>

</table>

<?php  } ?>


