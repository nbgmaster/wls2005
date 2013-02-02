
<br><?php 

<br><?




if($g_anzahl=="1") {


$eintrag = str_replace ("\r\n","<br>", $eintrag);

   for ($i=1; $i<=$anzahl; $i++)
   { 

echo"$a";

 $strQuery  = "INSERT into wls_gallery_$table (ordnername,number) ";
        $strQuery .= "VALUES ('$table','$i')";

    $result = @mysql_query($strQuery);
 
  

}

 $strQuery2  = "INSERT into wls_gallery (referer,titel,vorschaubild,info,onlineseit,aufnahme,cat) ";
        $strQuery2 .= "VALUES ('$table','$g_linkname','$vorschau','$eintrag','$g_datum','$aufnahme','$categorie')";

    $result2 = @mysql_query($strQuery2);

}




if($choose=="") { 


if (isset($SESSION['tableneu'])) session_unregister(tableneu);
if (isset($SESSION['tableneu2'])) session_unregister(tableneu2);
if (isset($SESSION['picture_tbl'])) session_unregister(picture_tbl);

session_unregister(tableneu);
session_unregister(tableneu2);
session_unregister(picture_tbl);


?>
<table width="448"  border="0" align="center" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td height="29" background="gfx/news_header.jpg"> 
                              <div align="right"> 
                                <table width="75%" border="0" cellspacing="0" cellpadding="0">
                                  <tr> 
                                    <td width="95%"> 
                                      <div align="right"><font color="#FFFFFF" size="1"><b>
<font face="Verdana, Arial, Helvetica, sans-serif">
Galerie Admin
                               </font></b></font></div>
                                    </td>
                                    <td width="5%">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        <tr>  <td background="gfx/11.jpg"><br>

 <?php  echo"<a href=\"index.php?page=admin&choose=new_gallery\">&nbsp;&nbsp;&nbsp;&nbsp;&raquo;Neue Galerie anlegen</a><br>"; ?>
 <?php  echo"<a href=\"index.php?page=admin&choose=edit_gallery\">&nbsp;&nbsp;&nbsp;&nbsp;&raquo;Galerie bearbeiten</a><br>"; ?>
 <?php  echo"<a href=\"index.php?page=admin&choose=del_gallery\">&nbsp;&nbsp;&nbsp;&nbsp;&raquo;Komplette Galerie l&ouml;schen</a><br>"; ?>

 <? echo"<a href=\"index.php?page=admin&choose=new_gallery\">&nbsp;&nbsp;&nbsp;&nbsp;&raquo;Neue Galerie anlegen</a><br>"; ?>
 <? echo"<a href=\"index.php?page=admin&choose=edit_gallery\">&nbsp;&nbsp;&nbsp;&nbsp;&raquo;Galerie bearbeiten</a><br>"; ?>
 <? echo"<a href=\"index.php?page=admin&choose=del_gallery\">&nbsp;&nbsp;&nbsp;&nbsp;&raquo;Komplette Galerie löschen</a><br>"; ?>

</td></tr>


</table><br>


<?php  }

<? }




if($choose=="success_gallery") { 




echo"<font size=+1><br><br><br>Galerie wurde erfolgreich erstellt!<br><br>Sie werden weitergeleitet...</font>";


?> <meta http-equiv="refresh" content="3; url=index.php?page=admin"> <?php  } 

?> <meta http-equiv="refresh" content="3; url=index.php?page=admin"> <? } 





if($choose=="success2_gallery") { 



$change_info = str_replace ("\r\n","<br>", $change_info);


$alt_aendern = "UPDATE wls_gallery_$alter_tbl Set ordnername = '$change_ordner'";
$update_alt = mysql_query($alt_aendern);

$rename_table = "ALTER TABLE wls_gallery_$alter_tbl RENAME wls_gallery_$change_ordner"; 
mysql_query($rename_table);

$g_aendern = "UPDATE ".$gallery_tblname." Set referer = '$change_ordner', titel = '$change_titel', vorschaubild = '$change_vorschau', info = '$change_info', aufnahme = '$aufnahme' WHERE id = '$id_g'";
$update_b = mysql_query($g_aendern);


   print mysql_error();




echo"<font size=+1><br><br><br>Galerie wurde erfolgreich bearbeitet!<br><br>Sie werden weitergeleitet...</font>";


?> <meta http-equiv="refresh" content="3; url=index.php?page=admin"> <?php  } 

?> <meta http-equiv="refresh" content="3; url=index.php?page=admin"> <? } 




if($choose=="success3_gallery")  {  



$tblneu = "_$save_change";
$tblneu2 = "$gallery_tblname$tblneu";


$table_g = "DROP TABLE $tblneu2"; 

$table2_g = "DELETE FROM $gallery_tblname WHERE referer = '$save_change'";

mysql_query($table_g);
mysql_query($table2_g);



echo"<font size=+1><br><br><br>Galerie wurde erfolgreich gel&ouml;scht!<br><br>Sie werden weitergeleitet...</font>";

?> <meta http-equiv="refresh" content="3; url=index.php?page=admin"> <?php  

echo"<font size=+1><br><br><br>Galerie wurde erfolgreich gelöscht!<br><br>Sie werden weitergeleitet...</font>";

?> <meta http-equiv="refresh" content="3; url=index.php?page=admin"> <? 


  }








if($choose=="new_gallery")  {




if($turn=="") {



?><br><br><table width="90%"><tr><td width="60">&nbsp;</td><td>

<b>Kurze Anleitung zur fehlerfreien Erstellung einer Galerie</b>
<br><br><br>


<b><font color=#ff7f00>&raquo;</b></font>Wichtig: Alle Bilder m&uuml;ssen folgenderma&szlig;en hei&szlig;en: 1.jpg,2.jpg,..., 150.jpg!!
<br>&nbsp;&nbsp;&nbsp;Entsprechend m&uuml;ssen die Thumbnails in der Form 1_t.jpg, 2_t.jpg, ..., 150_t.jpg sein!

<b><font color=#ff7f00>&raquo;</b></font>Wichtig: Alle Bilder müssen folgendermaßen heißen: 1.jpg,2.jpg,..., 150.jpg!!
<br>&nbsp;&nbsp;&nbsp;Entsprechend müssen die Thumbnails in der Form 1_t.jpg, 2_t.jpg, ..., 150_t.jpg sein!


<br><br><br>


<b><font color=#ff7f00>&raquo;</b></font>Unterordner im Ordner "gallery" erstellen.<br>
&nbsp;&nbsp;&nbsp;Wichtig: Der Ordnername darf kein Leerzeichen enthalten!<br>
&nbsp;&nbsp;&nbsp;In diesen neuen Unterordner erstellt man die Ordner "images" und "thumbs".<br>

&nbsp;&nbsp;&nbsp;Anschlie&szlig;end kommen die Bilder in den Ordner "images", die Thumbnails in den Ordner "thumbs".<br><br><br>

&nbsp;&nbsp;&nbsp;Anschließend kommen die Bilder in den Ordner "images", die Thumbnails in den Ordner "thumbs".<br><br><br>







<form action="index.php?page=admin&choose=new_gallery&turn=anzahl" method="post">
<b><font color=#ff7f00>&raquo;</b></font>Geben Sie nun den Namen des Unterordners an : <input type="text" name="tbl">
<input type="hidden" value="1" name="g_send">
<input type="submit" name="g_enter" value="Erstellen">
</form>

<br><br></td></tr></table>



<?php 

<?



 }

if($turn=="anzahl") {  




if($g_send=="1") {



$create_table = "CREATE TABLE wls_gallery_$tbl (
  id int(8) NOT NULL auto_increment,
  ordnername varchar(30) NOT NULL default '',
  number int(8) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM";

echo"<br><br>";

if ( @mysql_query ( $create_table )  ) {
		 $error="0";	echo"Galerie <b><font color=#ff7f00>$tbl</b></font> wurde erfolgreich erstellt!<br><br>";
		} else {
	                 $error="1"; echo"";
		}
       
 }



if ($error=="0") {



?>

<br><br>
<b><font color=#ff7f00>&raquo;</b></font>Geben Sie nun noch folgende Daten an:<br><br><br>

<table width="95%"><tr>
<form action="index.php?page=admin&choose=success_gallery" name="g_new" method="post" onsubmit="return check5()">
<td width="150"><b><font color=#ff7f00>Anzahl der Bilder</td><td> <input size=5  type="text" name="anzahl"></td></tr>

<tr><td width="150"><b><font color=#ff7f00>Titel der Galerie / &Uuml;berschrift</td><td><input size=60 type="text" name="g_linkname"></td></tr>

<tr><td width="150"><b><font color=#ff7f00>Titel der Galerie / Überschrift</td><td><input size=60 type="text" name="g_linkname"></td></tr>

<tr><td width="150"><b><font color=#ff7f00>Beschreibung</td><td><textarea cols="70" rows="8"  name="eintrag"></textarea></td></tr>
<tr><td width="150"><b><font color=#ff7f00>Vorschaubild Nummer</td><td><input size="5"  type="text" name="vorschau"></td></tr>
<tr><td width="150"><b><font color=#ff7f00>Aufnahmedatum</td><td><input size="12" type="text" name="aufnahme"></td></tr>
<tr><td width="150"><b><font color=#ff7f00>Kategorie</td><td>
<select name=categorie>
<option value="party">Party</option>
<option value="fahrten">Fahrten</option>
</select>
</td></tr>

</table>

<?php  echo"<input type=hidden name=g_datum value=$datum>"; ?>
<input type="hidden" name="g_anzahl" value="1">
<?php  echo"<input type=hidden name=\"table\" value=\"$tbl\">"; ?><br>
<br><input type="submit" name=proof value="Eintragen">
</form>
<?php 

<? echo"<input type=hidden name=g_datum value=$datum>"; ?>
<input type="hidden" name="g_anzahl" value="1">
<? echo"<input type=hidden name=\"table\" value=\"$tbl\">"; ?><br>
<br><input type="submit" name=proof value="Eintragen">
</form>
<?


}

else { 

echo"<font size=+1><br>Fehler! Galerie konnte nicht erstellt werden!<br><br><br>Sie werden weitergeleitet...</font>";


?> <meta http-equiv="refresh" content="3; url=index.php?page=admin"> <?php  

?> <meta http-equiv="refresh" content="3; url=index.php?page=admin"> <? 



 }

}


}


if($choose=="edit_gallery") {


?>
      <table border="0" width="515">
<br>
&raquo;<u><b>Galerie bearbeiten:</b></u><br><br><br><tr><td></td></tr></table>


<?php 

<?


$data = mysql_query("select * from $gallery_tblname");
$reihen = mysql_num_rows($data);

$seiten = $reihen / $g_anzeigen_main;

$art = gettype($seiten);
if($art=="double") {
$seiten++;
$seiten = floor($seiten);

}




if(!isset($side_forward)) { $side_forward = 0; }
$show = mysql_query("select * from $gallery_tblname ORDER BY id DESC LIMIT $side_forward,$g_anzeigen_main");


$n = 0; $sc = $seiten;

if($reihen > $g_anzeigen_main) {

echo "<div align=center>Seiten&nbsp;";
for($sn=1;$sn<=$sc;$sn++) {
echo "<a href=\"index.php?page=admin&choose=edit_gallery&side_forward=$n\"><b>[$sn]</b></a>\n";


$n += $g_anzeigen_main;}
 }

echo"</div><br>";




         while($row = mysql_fetch_row($show)) {

$row[4] = str_replace ("<br>","\r\n", $row[4]);


?><form action="index.php?page=admin&choose=success2_gallery" name="form_g" method="post" onsubmit="return checka()"><?php 

?><form action="index.php?page=admin&choose=success2_gallery" name="form_g" method="post" onsubmit="return checka()"><?

echo"<table align=center><tr><td>";
echo"<input type=hidden value=$row[1] name=alter_tbl>";
echo"Titel: <input type=text value=\"$row[2]\" size=60 name=change_titel style=\"border:1px solid; font-weight : bold;  background:#ff7f00;\">";
echo"</td><td>";
echo"Ordnername: <input type=text value=\"$row[1]\" size=23 name=change_ordner style=\"border:1px solid; font-weight : bold;  background:#ff7f00;\">";

echo"</td></tr><tr><td><textarea name=change_info cols=65 style=\"padding:3px;\" rows=6>$row[4]</textarea>";
echo"</td><td>Vorschaubildnummer: <input size=1 type=text value=\"$row[3]\"  name=change_vorschau style=\"border:1px solid; font-weight : bold; background:#ff7f00;\">";
echo"<br><br>Aufnahme: <input type=text value=$row[6] name=aufnahme style=\"border:1px solid; font-weight : bold;  background:#ff7f00;\">";

echo"<input type=hidden value=$row[0] name=id_g>";

 echo"<br><br><input type=submit style=\"cursor:crosshair;\"  class=\"button\" onmouseover=\"className='hover'\" onmouseout=\"className='button'\"  name=send_g value=\"&Auml;nderungen &uuml;bernehmen\">";

 echo"<br><br><input type=submit style=\"cursor:crosshair;\"  class=\"button\" onmouseover=\"className='hover'\" onmouseout=\"className='button'\"  name=send_g value=\"Änderungen übernehmen\">";

echo"</td></tr></table><br><table width=95%><hr color=#000000 size=1 width=700></table><br>";
echo"</form>";
}

}


if($choose=="del_gallery")  { 

?>
      <table border="0" width="515">
<br>

&raquo;<u><b>Galerie l&ouml;schen:</b></u><br><br><br><tr><td></td></tr></table>

<?php 

&raquo;<u><b>Galerie löschen:</b></u><br><br><br><tr><td></td></tr></table>

<?



echo"<table>";

$show_del_g = mysql_query("select * from $gallery_tblname ORDER BY id DESC");


        while($row_del_g = mysql_fetch_row($show_del_g)) {



?><form action="index.php?page=admin&choose=success3_gallery" name="form_g" method="post"><?php 
echo"<tr><td><input type=submit style=\"width:60px; cursor:crosshair; color:#ff7f00;\"  class=\"button\" onmouseover=\"className='hover'\" onmouseout=\"className='button'\" value=l&ouml;schen></td><td>$row_del_g[2]</td></tr>";

?><form action="index.php?page=admin&choose=success3_gallery" name="form_g" method="post"><?
echo"<tr><td><input type=submit style=\"width:60px; cursor:crosshair; color:#ff7f00;\"  class=\"button\" onmouseover=\"className='hover'\" onmouseout=\"className='button'\" value=löschen></td><td>$row_del_g[2]</td></tr>";

echo"<input type=hidden name=save_change value=$row_del_g[1]>";
echo"</form>";


}

echo"</table>";  

}  


