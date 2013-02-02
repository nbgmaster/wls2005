<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 

echo"<table width=710 cellspacing=10 cellpadding=3><tr><td class=top align=center>";
echo"<font class=forum>Kategorie: <b>Schule</b></font></td></tr></table>";


   $show_link = mysql_query("select * from $links_tblname1 order by id DESC");
 
  echo"<table width=710 cellspacing=10 cellpadding=3>";
 


         while($row_link = mysql_fetch_row($show_link)) {

echo"<tr><td width=35% class=top onclick=\"window.open('http://$row_link[1]','open_link')\" style=\"cursor:pointer;\" onmouseover=\"style.backgroundColor='ffc081'; return true\" onmouseout=\"style.backgroundColor=''\">";
echo"<img src=images/arrow_r.gif> <b>$row_link[1]";
echo"</b></td><td class=top>$row_link[2]</td></tr>";


}

echo"</table>";


echo"<table width=710 cellspacing=10 cellpadding=3><tr><td class=top align=center>";
echo"<font class=forum>Kategorie: <b>Fun</b></font></td></tr></table>";

   $show_link2 = mysql_query("select * from $links_tblname2 order by id DESC");
 
  echo"<table width=710 cellspacing=10 cellpadding=3>";
 



         while($row_link2 = mysql_fetch_row($show_link2)) {

echo"<tr><td width=35% class=top onclick=\"window.open('http://$row_link2[1]','open_link')\" style=\"cursor:pointer;\" onmouseover=\"style.backgroundColor='ffc081'; return true\" onmouseout=\"style.backgroundColor=''\">";
echo"<img src=images/arrow_r.gif> <b>$row_link2[1]";
echo"</b></td><td class=top>$row_link2[2]</td></tr>";


}

echo"</table>"; 




echo"<table width=710 cellspacing=10 cellpadding=3><tr><td class=top align=center>";
echo"<font class=forum>Kategorie: <b>Sonstiges</b></font></td></tr></table>";


   $show_link3 = mysql_query("select * from $links_tblname3 order by id DESC");
 
  echo"<table width=710 cellspacing=10 cellpadding=3>";
 


         while($row_link3 = mysql_fetch_row($show_link3)) {

echo"<tr><td width=35% class=top onclick=\"window.open('http://$row_link3[1]','open_link')\" style=\"cursor:pointer;\" onmouseover=\"style.backgroundColor='ffc081'; return true\" onmouseout=\"style.backgroundColor=''\">";
echo"<img src=images/arrow_r.gif> <b>";
echo"$row_link3[1]</b></td><td class=top>$row_link3[2]</td></tr>";


}

echo"</table>"; 

}

else { 


echo"<br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 } 