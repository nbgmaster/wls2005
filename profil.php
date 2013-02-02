
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1


 $show_profil = mysql_query("select * from $user_tblname WHERE UserID='$user_id'"); 

 
 
            while  ($prow  =  mysql_fetch_row($show_profil)) {


$check_status=$prow[15];


$show_on = mysql_query("select * from $on_tblname WHERE IP='$check_status'");


$reihen_on = mysql_num_rows($show_on);


echo"<br><center>";


if($prow[14]=="") { 


echo"<font class=profil>$prow[1]</font>&nbsp;&nbsp;&nbsp;";


$check_online=$timestamp-$prow[28]; 

if($check_online > 180) {


echo"<img src=images/offline.gif>"; }

else  { echo"<img src=images/online1.gif>"; }



}

else {



echo"<font class=profil>$prow[1]</font>&nbsp;&nbsp;&nbsp;";

$check_online=$timestamp-$prow[28]; 

if($check_online > 180) { echo"<img src=images/offline.gif>"; }

else  { echo"<img src=images/online1.gif>"; }



echo"<br><br><img src=\"avatare/$prow[14]\">";

 }


echo"<br><br>";



echo"<table cellspacing=2 cellpadding=\"2\">";

$datumreg = date("d.m.Y",$prow[5]);


echo"<tr><td><img src=images/arrow_r.gif> <b>registriert seit</td>";

echo"<td width=145>$datumreg</td></tr>"; 

if($prow[28]!="0") {

$uhrzeitonl = date("H:i",$prow[28]);
$datumonl = date("d.m.Y",$prow[28]); }

echo"<tr><td width=150><img src=images/arrow_r.gif> <b>zuletzt online</td>";


echo"<td>";

if($prow[28]!="0") { 
echo"$datumonl, $uhrzeitonl Uhr"; } else { echo"noch nie online gewesen"; }


echo"</td></tr>";


$anzahlp = mysql_query("select * from wls_forum_posts WHERE user_id='$prow[0]'");
$anzahlp2 = mysql_num_rows($anzahlp);

echo"<tr><td><img src=images/arrow_r.gif> <b>Beiträge im Forum</td>";


echo"<td>$anzahlp2</td></tr>";


echo"<tr><td width=95><img src=images/arrow_r.gif> <b>Vorname</td>";


if($prow[7]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[7]</td></tr>";

}


echo"<tr><td><img src=images/arrow_r.gif> <b>Nachname</td>";


if($prow[8]=="") {

echo"<td>keine Angabe</td></tr>"; 

} else {

echo"<td>$prow[8]</td></tr>";

}

echo"<tr><td><img src=images/arrow_r.gif> <b>Geschlecht</td>";

if($prow[6]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {

if($prow[6]=="m") {

echo"<td>männlich</td></tr>";

} if($prow[6]=="w") {

echo"<td>weiblich</td></tr>";

}

}

echo"<tr><td><img src=images/arrow_r.gif> <b>Geburtstag</td>";

if($prow[9]=="" or $prow[10]=="" or $prow[11]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[9].$prow[10].$prow[11]</td></tr>";

}


echo"<tr><td><img src=images/arrow_r.gif> <b>Adresse</td>";

if($prow[18]=="") {

echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[18]</td></tr>";

}

if($save_status_ehe=="1") {

echo"<tr><td><img src=images/arrow_r.gif> <b>Telefon/Handynr.</td>";

if($prow[32]=="") {

echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[32]</td></tr>";

}

}


echo"<tr><td><img src=images/arrow_r.gif> <b>Beruf</td>";

if($prow[19]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[19]</td></tr>";

}



echo"<tr><td width=130><img src=images/arrow_r.gif> <b>Homepage</td>";

if($prow[12]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[12]</td></tr>";
 
}


echo"<tr><td><img src=images/arrow_r.gif> <b>ICQ</td>";

if($prow[13]=="0" or $prow[13]=="") {

echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[13]</td></tr>";

}



echo"<tr><td><img src=images/arrow_r.gif> <b>Lieblingsfilm</td>";

if($prow[23]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[23]</td></tr>";

}



echo"<tr><td><img src=images/arrow_r.gif> <b>Lieblingsmusik</td>";

if($prow[22]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[22]</td></tr>";

}



echo"<tr><td><img src=images/arrow_r.gif> <b>Mein Auto</td>";

if($prow[24]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[24]</td></tr>";

}


echo"<tr><td><img src=images/arrow_r.gif> <b>Mein Handy</td>";

if($prow[25]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[25]</td></tr>";

}

echo"<tr><td><img src=images/arrow_r.gif> <b>Kneipen, Discos</td>";

if($prow[27]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[27]</td></tr>";

}




echo"<tr><td><img src=images/arrow_r.gif> <b>Lieblingsgetränk</td>";

if($prow[21]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[21]</td></tr>";

}


echo"<tr><td><img src=images/arrow_r.gif> <b>Lieblingsessen</td>";

if($prow[20]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[20]</td></tr>";

}


echo"<tr><td><img src=images/arrow_r.gif> <b>Hobbys</td>";

if($prow[26]=="") {


echo"<td>keine Angabe</td></tr>"; 

} else {


echo"<td>$prow[26]</td></tr>";

}

echo"</table>";

}
