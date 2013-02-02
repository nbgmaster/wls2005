<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>


<?php  


  if (!empty($_GET))     extract($_GET);
  if (!empty($_POST))    extract($_POST);
  if (!empty($_COOKIE))  extract($_COOKIE);
  if (!empty($_SESSION)) extract($_SESSION);



include('config.php');

if($save_id != "")  {




if($profil_id!="") {



include('config.php');


?>

<link rel="stylesheet" href="stylesheets/style_main.css">

<meta http-equiv="imagetoolbar" content="no">
<body bgcolor="#ffc08a" onClick='self.close()' leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php 

 $show_profil = mysql_query("select * from $kurs_tblname WHERE id='$profil_id' LIMIT 1");


            while  ($row_profil  =  mysql_fetch_row($show_profil)) {



echo"<table width=100% cellspacing=0><tr><td width=3></td><td valign=top>";

if($profil_id=="2" or $profil_id=="5" or $profil_id=="89" or $profil_id=="50" or $profil_id=="77"  or $profil_id=="18") {

if($profil_id=="2" or $profil_id=="89" or $profil_id=="77" or $profil_id=="50"  or $profil_id=="18") {
echo"<font class=mini><br></font>"; }

if($profil_id=="5") { echo""; }

}

 else  { echo"<br>"; }

echo"<b><font class=big>$row_profil[1] $row_profil[2]</font></b>";

if($profil_id=="5" or $profil_id=="89") {
echo"<font class=mini><br></font>"; } else  { echo"<br><br>"; }

echo"<table width=100% cellspacing=0 cellpadding=0><tr>";

echo"<td><img src=images/arrow_r.gif><b>geboren am</td></tr><tr><td>$row_profil[3].$row_profil[4]</td>";
echo"</tr><tr><td><br></td></tr><tr>";
echo"<td><img src=images/arrow_r.gif><b>Leistungskurse</td></tr><tr><td>";

if($row_profil[9]=="Englisch1" or $row_profil[9]=="Englisch2")

{     echo substr($row_profil[9],0,8);  } else { echo"$row_profil[9]"; }

echo" | ";

if($row_profil[10]=="Englisch1" or $row_profil[10]=="Englisch2") 

{  echo substr($row_profil[10],0,8);  } else { echo"$row_profil[10]"; }

echo"</td></tr><tr><td><br></td></tr><tr>";
echo"<td><img src=images/arrow_r.gif><b>Facharbeitsthema</td></tr><tr><td>";


echo"$row_profil[12]"; 

echo"</td></tr><tr><td><br></td></tr><tr>";
echo"<td><img src=images/arrow_r.gif><b>Hobbys</td></tr><tr><td>";


echo"$row_profil[8]"; 

echo"</td></tr><tr><td><br></td></tr><tr>";
echo"<td><img src=images/arrow_r.gif><b>Lebensmotto</td></tr><tr><td>";


echo"$row_profil[5]"; 

echo"</td></tr></table>";
echo"</td><td valign=bottom align=center>";


echo"<img src=portrait_fotos/$row_profil[11]>"; 

echo"</td></tr></table>";

}

 
}

else {



if(!isset($side_forward)) { $side_forward = 0; }
 $show_kurs = mysql_query("select * from $kurs_tblname ORDER BY nachname LIMIT 0,29");

$show_kurs2 = mysql_query("select * from $kurs_tblname ORDER BY nachname LIMIT 29,29");

$show_kurs3 = mysql_query("select * from $kurs_tblname ORDER BY nachname LIMIT 58,87");






?><br><img src=images/kursliste.jpg><br><br>

<?php  
 if($cookie_check_abicalypse=="allowed") 

{ 
?>
<table width=700 cellpadding=0 cellspacing=0><tr><td align=center>

   <table cellspacing="5" width=220 cellpadding=3 border=0>


 <?php 



            while  ($row  =  mysql_fetch_row($show_kurs)) {



echo"<tr><td class=top><img src=images/arrow_r.gif><a href=\"javascript:center_position(420,292,'kurs_liste.php?profil_id=$row[0]','window')\"> <b>$row[2] $row[1]</a></b>";

echo"</td></tr>";

}

echo"</table>"; 



?> </td><td align=center>


  <table cellspacing="5" width=220 cellpadding=3 border=0>


 <?php 

            while  ($row  =  mysql_fetch_row($show_kurs2)) {



echo"<tr><td class=top><img src=images/arrow_r.gif><a href=\"javascript:center_position(420,292,'kurs_liste.php?profil_id=$row[0]','window')\"> <b>$row[2] $row[1]</a></b>";

echo"</td></tr>";

}

echo"</table>"; 


 

?> </td><td align=center valign=top>


  <table cellspacing="5" width=220 cellpadding=3 border=0>


 <?php 

            while  ($row  =  mysql_fetch_row($show_kurs3)) {



echo"<tr><td class=top><img src=images/arrow_r.gif><a href=\"javascript:center_position(420,292,'kurs_liste.php?profil_id=$row[0]','window')\"> <b>$row[2] $row[1]</a></b>";

echo"</td></tr>";

}

echo"</table>"; 




?></td></tr></table><br>

<?php  }


else { echo"<br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 }}

}