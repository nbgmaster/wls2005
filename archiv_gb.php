<br>
<font class=posts>
Die Einträge des Gästebuchs von der alten Homepage sind hier aufgelistet:
</font>
<br>
<?php 

  
$data = mysql_query("select * from $gb_tblname");
$reihen = mysql_num_rows($data);

$seiten = $reihen / $gb_anzeigen;

$art = gettype($seiten);
if($art=="double") {
$seiten++;
$seiten = floor($seiten);

}


$show33 = mysql_query("select * from $gb_tblname ORDER BY id DESC");
if(!isset($side_forward)) { $side_forward = 0; }
$show = mysql_query("select * from $gb_tblname ORDER BY id DESC LIMIT $side_forward,$gb_anzeigen");


$p = 0; $lk = $seiten;

echo "<br><table width=704><tr><td align=\"left\" class=middle> ";



echo "<img src=images/arrow_r.gif> <b>Seiten</b></font>&nbsp;";
for($lp=1;$lp<=$lk;$lp++) {

for($blomb=1;$blomb<=1000;$blomb++) {

$gogo=$blomb-1;
if($lp=="$blomb") {   $bla=$gogo*$gb_anzeigen;$huch=$blomb; }

}

if($side_forward==$bla && $lp==$huch) {  echo "</b><font color=#ff7f00>[$lp]</font> "; }

else {
echo "<a href=\"index.php?page=archiv&sec=gb&side_forward=$p\">[$lp]</a> "; 

}

$p += $gb_anzeigen;}
 echo"<br>";


echo"</td><td align=right width=150><b>$reihen</b> Einträge gesamt</td></tr></table></font><br>";
 

echo"</div>";

$igt = mysql_num_rows($show33);
$igt=$igt+1;

$zzz=$igt-$side_forward;

         while($row = mysql_fetch_row($show)) {

$zzz=$zzz-1;
?>
<table width=700><tr><td>
<?php  echo"<b>($zzz)</b> <font color=#ff7f00> <b>$row[1]: </b></font>";



echo"$row[5]";

echo"<hr size=1 color=#c0c0c0 width=700>";


if($row[4] != "") {

 if(substr($row[4], 0, 7) == "http://") {

echo"<img src=images/arrow_r.gif> <a href=\"$row[4]\" target=\"blank\">Homepage von $row[1] besuchen</a>"; }

else {  echo"<img src=images/arrow_r.gif> <a href=\"http://$row[4]\" target=\"blank\">Homepage von $row[1] besuchen</a>"; }

} else { echo""; }


 if($row[2] == "") { echo"" ;} else {


echo""; echo" <img src=images/arrow_r.gif> <a href=mailto:".$row[2].">Email an $row[1] schreiben</a>"; }



 
echo" <img src=images/arrow_r.gif> verfasst am <i>$row[7]</i>&nbsp;"; ?>
                             
&nbsp;

                            


<?php 
echo"</td></tr></table><br>";

    }

