<br>
<img src=images/geburtstage.jpg>
<br><br>

<?php 

 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 


$datumb = date("d.m");
$yearb = date("Y");

$logb = "date(md)";



if($page=="") { $limit="3"; } else { $limit="90"; }

$pram3 = mysql_query("SELECT * FROM $kurs_tblname ORDER BY date");

$gesamt=mysql_num_rows($pram3);

echo"<table width=700><tr><td align=center>";


$p="0";

while  ($bla3  =  mysql_fetch_row($pram3)) {


$alterb = $yearb - $bla3[4]; 

$p=$p+1; 



echo"<table><tr><td valign=top width=220 class=top><img src=images/arrow_r.gif> $bla3[3].$bla3[4] &nbsp;<b>$bla3[1] $bla3[2]</b>";
echo"</td></tr></table><br>";

for ($i=1; $i<=100; $i++)
   {    

$x = 29 * $i;  


  

if($p==$x) { echo"</td><td valign=top align=center>"; } 
else { echo""; }

}


}


?></td></tr></table>


<?php  }

else { echo"<br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 }