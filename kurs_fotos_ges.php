<script type="text/javascript" src="javascript/kursfotos_ges.js" language="JavaScript1.2"></script>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 

if($p_bild=="gesamt12") { $bildname="Kursfoto K12"; }
if($p_bild=="gesamt13") { $bildname="Kursfoto K13"; }

?>
<table width=695><tr><td align=left>
<br>
<<<<<<< HEAD
<b><?php echo"$bildname";?></b></font>
</td><td align=right><br>

<?php 
=======
<b><?echo"$bildname";?></b></font>
</td><td align=right><br>

<?
>>>>>>> af2fff1... version1

$z="0";
$blaaa="$p_bild$z$show_picture";


$blubb2="kurs_fotos_ges/$p_bild/big_picture/$blaaa.jpg";

$size2 = getimagesize($blubb2);
$width=$size2[0];
$height=$size2[1];

<<<<<<< HEAD
echo"<img src=images/arrow_r.gif><a href=\"javascript:OpenNewWindow('kurs_fotos_ges/$p_bild/big_picture/$blaaa.jpg',900,$height)\"><b> Bild vergr&ouml;&szlig;ern<b></a>";
=======
echo"<img src=images/arrow_r.gif><a href=\"javascript:OpenNewWindow('kurs_fotos_ges/$p_bild/big_picture/$blaaa.jpg',900,$height)\"><b> Bild vergrößern<b></a>";
>>>>>>> af2fff1... version1



$nummer="01";
$nummer2="02";
$nummer3="03";

echo"&nbsp;&nbsp;<img src=images/arrow_r.gif> Bilder Auswahl:</b></b> ";





if($show_picture=="1") { 


echo"<font color=#ff7f00>[1]</font>";
echo"&nbsp;<a href=index.php?page=kurs_fotos_ges&p_bild=$p_bild&show_picture=2>[2]</a></b>";

}

else {

echo"<a href=index.php?page=kurs_fotos_ges&p_bild=$p_bild&show_picture=1>[1]</a>";
echo"&nbsp;<font color=#ff7f00>[2]</font></b>";

}


echo"<br></td></tr></table><br>";



<<<<<<< HEAD
//$size = getimagesize($blubb);


//$width=$size[0];
//$height=$size[1];
=======
$size = getimagesize($blubb);


$width=$size[0];
$height=$size[1];
>>>>>>> af2fff1... version1




if($show_picture=="1")  {


echo"<img src=\"kurs_fotos_ges/$p_bild/small_picture/$p_bild$nummer.jpg\" border=\"1\" class=\"muh\">";  }


if($show_picture=="2")  {


echo"<img src=\"kurs_fotos_ges/$p_bild/small_picture/$p_bild$nummer2.jpg\" border=\"1\" class=\"muh\">";  }

}

else { echo"<br><img src=images/galerie.jpg><br><br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 } 

 
?>