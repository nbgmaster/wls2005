<script type="text/javascript" language="JavaScript1.2">


function OpenNewWindow(Picture,Breit,Hoch)
{


<<<<<<< HEAD
<?php  if($browser!="sonstigerBrowser") { ?>
xsize = Breit+6;// Zusatz fï¿½r Rand rechts und links
ysize = Hoch+21; //Zusatz fï¿½r Rand oben und unten - damit Button angezeit werden kann 
<?php  } else { ?>

xsize = Breit+6;// Zusatz fï¿½r Rand rechts und links
ysize = Hoch+54; //Zusatz fï¿½r Rand oben und unten - damit Button angezeit werden kann 

<?php  } ?>
=======
<? if($browser!="sonstigerBrowser") { ?>
xsize = Breit+6;// Zusatz für Rand rechts und links
ysize = Hoch+21; //Zusatz für Rand oben und unten - damit Button angezeit werden kann 
<? } else { ?>

xsize = Breit+6;// Zusatz für Rand rechts und links
ysize = Hoch+54; //Zusatz für Rand oben und unten - damit Button angezeit werden kann 

<? } ?>
>>>>>>> af2fff1... version1


ScreenWidth = screen.width;
ScreenHeight = screen.height;

<<<<<<< HEAD
window.defaultStatus="Zum Schlieï¿½en einfach auf das Bild klicken!";
=======
window.defaultStatus="Zum Schließen einfach auf das Bild klicken!";
>>>>>>> af2fff1... version1

xpos = (ScreenWidth/2)-(xsize/2);
ypos = (ScreenHeight/2)-(ysize/2);

        NewWindow=window.open("","Bildanzeige","height="+ysize+",width="+xsize+",scrollbars=no,resizable=no,top="+ypos+",left="+xpos+"");
        NewWindow.document.write ("<html><head><meta http-equiv='imagetoolbar' content='no'><title>Abicalypse2005.de Gallery");
        NewWindow.document.write ("</title></head>");
        NewWindow.document.write ("<body bgcolor='#ffffff' onload='focus()' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>");
   
        NewWindow.document.write ("<table bgcolor='#000000' cellpadding='0' cellspacing='0'><tr><td align='center'>");
        NewWindow.document.write ("<img onClick='self.close()' src=");
        NewWindow.document.write (Picture);
        NewWindow.document.write (">");
        NewWindow.document.write ("</td></tr></table>");
        NewWindow.document.write ("</body></html>");
        NewWindow.document.close();
                     NewWindow.resizeTo(xsize,ysize);
}


function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"width="+w+",height="+h+",left="+l+",top="+t+"");
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


include('kursfotos_variablen.php');


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


$blubb2="kurs_fotos_k12/$p_bild/big_picture/$blaaa.jpg";

$size2 = getimagesize($blubb2);
$width=$size2[0];
$height=$size2[1];

<<<<<<< HEAD
echo"<img src=images/arrow_r.gif><a href=\"javascript:OpenNewWindow('kurs_fotos_k12/$p_bild/big_picture/$blaaa.jpg',900,$height)\"><b> Bild vergrï¿½ï¿½ern<b></a>";
=======
echo"<img src=images/arrow_r.gif><a href=\"javascript:OpenNewWindow('kurs_fotos_k12/$p_bild/big_picture/$blaaa.jpg',900,$height)\"><b> Bild vergrößern<b></a>";
>>>>>>> af2fff1... version1



$nummer="01";
$nummer2="02";
$nummer3="03";

echo"&nbsp;&nbsp;<img src=images/arrow_r.gif> Bilder Auswahl:</b></b> ";





if($show_picture=="1") { 


echo"<font color=#ff7f00>[1]</font>";
echo"&nbsp;<a href=index.php?page=kurs_fotos_k12&p_bild=$p_bild&show_picture=2>[2]</a></b>";

}

else {

echo"<a href=index.php?page=kurs_fotos_k12&p_bild=$p_bild&show_picture=1>[1]</a>";
echo"&nbsp;<font color=#ff7f00>[2]</font></b>";

}


echo"&nbsp;&nbsp;&nbsp;<br></td></tr></table><br>";

echo"<table width=700><tr><td valign=top>";



$size = getimagesize($blubb);


$width=$size[0];
$height=$size[1];



echo"<br><img src=images/arrow_r.gif><a href=\"javascript:center_position($width,$height,'lehrer.php?lehrer=$lehrer','window')\"> $lehrer2</a><br><br>";





$b_show = mysql_query("select * from $kurs_tblname WHERE lk1='$namen' or lk2='$namen' ORDER BY nachname");

while($b_row = mysql_fetch_row($b_show)) { 


echo"<img src=images/arrow_r.gif> <a href=\"javascript:center_position(420,292,'kurs_liste.php?profil_id=$b_row[0]','window')\">$b_row[2] $b_row[1]</a><br>";

}


echo"</td><td align=center>";


if($show_picture=="1")  {


echo"<img src=\"kurs_fotos_k12/$p_bild/small_picture/$p_bild$nummer.jpg\" border=\"1\" class=\"muh\">";  }


if($show_picture=="2")  {


echo"<img src=\"kurs_fotos_k12/$p_bild/small_picture/$p_bild$nummer2.jpg\" border=\"1\" class=\"muh\">";  }


echo"</td></tr></table><br>";

}


else { echo"<br><img src=images/galerie.jpg><br><br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 } 
?>