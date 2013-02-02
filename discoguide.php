<script>
function check_c() {
if( document.f_comment.c_name.value == "" ){
alert( "Du hast keinen Namen angegeben!" );
document.f_comment.c_name.focus();
return false;
}
if( document.f_comment.comment.value == "" ){
alert( "Du hast keinen Kommentar angegeben!" );
document.f_comment.comment.focus();
return false;
}
}
</script>

<?php 

if(isset($wuff))  {

$comment = str_replace ("\r\n","<br>", $comment);


        $strQuery_c  = "INSERT into $comment_tblname (disco, c_name, comment, note, datum) ";
        $strQuery_c .= "VALUES ('$disco', '$c_name', '$comment', '$c_note', '$c_datum')";
    $result = @mysql_query($strQuery_c);

}


if($next=="comment_stargate") {

echo"<font size=+1><br><br><br>Kommentar wurde erfolgreich eingetragen!<br><br>Sie werden weitergeleitet...</font>";

?> <meta http-equiv="refresh" content="3; url=index.php?site=stuff&go=discoguide&next=comment&disco=stargate"> <?php  }


if($next=="comment_loop") {

echo"<font size=+1><br><br><br>Kommentar wurde erfolgreich eingetragen!<br><br>Sie werden weitergeleitet...</font>";

?> <meta http-equiv="refresh" content="3; url=index.php?site=stuff&go=discoguide&next=comment&disco=loop"> <?php  }

if($next=="comment_tiefenrausch") {

echo"<font size=+1><br><br><br>Kommentar wurde erfolgreich eingetragen!<br><br>Sie werden weitergeleitet...</font>";

?> <meta http-equiv="refresh" content="3; url=index.php?site=stuff&go=discoguide&next=comment&disco=tiefenrausch"> <?php  }

if($next=="comment_trend") {

echo"<font size=+1><br><br><br>Kommentar wurde erfolgreich eingetragen!<br><br>Sie werden weitergeleitet...</font>";

?> <meta http-equiv="refresh" content="3; url=index.php?site=stuff&go=discoguide&next=comment&disco=trend"> <?php  }

if($next=="comment_planet") {

echo"<font size=+1><br><br><br>Kommentar wurde erfolgreich eingetragen!<br><br>Sie werden weitergeleitet...</font>";

?> <meta http-equiv="refresh" content="3; url=index.php?site=stuff&go=discoguide&next=comment&disco=planet"> <?php  }

if($next=="comment_jamclub") {

echo"<font size=+1><br><br><br>Kommentar wurde erfolgreich eingetragen!<br><br>Sie werden weitergeleitet...</font>";

?> <meta http-equiv="refresh" content="3; url=index.php?site=stuff&go=discoguide&next=comment&disco=jamclub"> <?php  }





 if($next=="") { 

echo"<br><a href=index.php?site=stuff><b><font color=#ff7f00>&raquo;</font>Zurück<font color=#ff7f00>&laquo;</font></b></a><br><br>";

?>
   <table width="448" border="0" align="center" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td height="29" background="gfx/news_header.jpg"> 
                              <div align="right"> 
                                <table width="75%" border="0" cellspacing="0" cellpadding="0">
                                  <tr> 
                                    <td width="95%"> 
                                      <div align="right"><font color="#FFFFFF" size="1"><b>
<font face="Verdana, Arial, Helvetica, sans-serif">
Stargate Discowelt
                               </font></b></font></div>
                                    </td>
                                    <td width="5%">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                          <tr> 
                            <td background="gfx/11.jpg"> 
                              <table width="95%" border="0" align="center" cellspacing="0" cellpadding="0">
                                <tr> 
                                  <td align=center> <br>

<table width=95%><tr><td align=center><a href=http://www.stargate-discowelt.de target=_blank><img src=images/g8.gif></a></td>
</tr></table><br>

<table border=1 cellspacing=0 cellpadding=5 bordercolor=#000000 width=95%><tr><td align=center><b>Dienstag</b></b></td><td>
<p align=justify>
<font color=#ff7f00><b>&raquo;</b></font>50 Cent Party
<br>
</td></tr><tr><td align=center><b>Donnerstag</b></td><td>
<font color=#ff7f00><b>&raquo;</b></font>Die Macht der Frauen
<br>
<font color=#ff7f00><b>&raquo;</b></font>alle offenen Getränke nur 1 €
<br>
<font color=#ff7f00><b>&raquo;</b></font>Alle Frauen haben freien Eintritt
<br>
</td></tr><tr><td align=center><b>Freitag</b></td><td>
<font color=#ff7f00><b>&raquo;</b></font>Die Doppeldecker Party
<br>
<font color=#ff7f00><b>&raquo;</b></font>alle offenen Getränke zum halben Preis
<br>
<font color=#ff7f00><b>&raquo;</b></font>ein Getränk bezahlen und ein zweites kostenlos dazu
<br>
</td></tr><tr><td align=center><b>Samstag</b></td><td>
<font color=#ff7f00><b>&raquo;</b></font>Saturday-Night-Fire
<br>
<font color=#ff7f00><b>&raquo;</b></font>best of Black and Party Music in Town DJ Pleasure
<br>
</td></tr></table>
<br>
<table width=95%><tr><td align=center>
<a href=index.php?site=gallery&class=sonstige&picture_id=7#s><img src=gallery/sonstige/thumbs/7_t.jpg></a>
</td><td align=center>
<a href=index.php?site=gallery&class=sonstige&picture_id=9#s><img src=gallery/sonstige/thumbs/9_t.jpg></a>
</td><td align=center>
<a href=index.php?site=gallery&class=sonstige&picture_id=14#s><img src=gallery/sonstige/thumbs/14_t.jpg></a>
</td></tr></table>
<br>
<center>
<a href=index.php?site=stuff&go=discoguide&next=comment&disco=stargate><font size=2><b><font color=#ff7f00>&raquo;</font>Kommentar abgeben und Disco Bewerten</font></a>
<br>

<?php  
$nerv="stargate";
$c_show_main = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id");
 $blubber = mysql_num_rows($c_show_main);

$note="0";

         while($row = mysql_fetch_row($c_show_main)) {


  $note_d = $row[4];



$note=$note_d+$note;

 }


$note_g=$note/$blubber;

$note_g=round($note_g,2);

?><br>
<center><font size=1>durschnittliche Note der User = <?php  echo"<b><font color=#ff7f00 size=3>$note_g</b>";?></font> 
<br><br>
<b>Eintritt:<font color=#ff7f00> 5 €</b></font>
<br><br>
<b>Homepage: <a href=http://www.stargate-discowelt.de target=_blank><font color=#ff7f00>&raquo;</font>www.stargate-discowelt.de</a>
</b>
                                    </td>
                                </tr>

                              </table>
                            

</td>
</tr>
<tr> 
<td height="38" background="gfx/unten.jpg">
<center><b>Anschrift: 
90480 Nürnberg | Regensburger Str. 334


</td>
</tr>

</table><br><br> 

  <table width="448" border="0" align="center" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td height="29" background="gfx/news_header.jpg"> 
                              <div align="right"> 
                                <table width="75%" border="0" cellspacing="0" cellpadding="0">
                                  <tr> 
                                    <td width="95%"> 
                                      <div align="right"><font color="#FFFFFF" size="1"><b>
<font face="Verdana, Arial, Helvetica, sans-serif">
Loop & Fifty 6 & Golden Nugget
                               </font></b></font></div>
                                    </td>
                                    <td width="5%">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                          <tr> 
                            <td background="gfx/11.jpg"> 
                              <table width="95%" border="0" align="center" cellspacing="0" cellpadding="0">
                                <tr> 
                                  <td align=center> <br>

<table width=95%><tr><td><a href=http://www.loopclub.de target=_blank><img src=images/loop.gif></a></td><td><a href=http://www.loopclub.de target=_blank><img src=images/goldennugget.jpg></a></td><td><a href=http://www.loopclub.de target=_blank><img src=images/fifty6.gif></a></td>
</tr></table><br>

<table border=1 cellspacing=0 cellpadding=5 bordercolor=#000000 width=95%><tr><td align=center><b>Donnerstag</b></b></td><td>
<p align=justify>
<font color=#ff7f00><b>&raquo;</b></font>50 Cent-Party - Alle offenen Getränke 50 Cent!
<br>
<font color=#ff7f00><b>&raquo;</b></font>Im LOOP und im FIFTY-6 = 2 Clubs - 1 Eintritt!
<br>
<font color=#ff7f00><b>&raquo;</b></font>DISCOCLASSICS - POP/ROCK - & SOUL der 80er&more
<br>
<font color=#ff7f00><b>&raquo;</b></font>Nürnbergs größte Karaoke-Show mit SKI
<br>
</td></tr><tr><td align=center><b>Freitag</b></td><td>
<font color=#ff7f00><b>&raquo;</b></font>Kinder der Nacht
<br>
<font color=#ff7f00><b>&raquo;</b></font>WAVE - FUTUREPOP - EBM - INDUSTRIAL -
NEW WAVE
<br>
</td></tr><tr><td align=center><b>Samstag</b></td><td>
<font color=#ff7f00><b>&raquo;</b></font>Indie-X-Tasy / Indie-Oldie-Party
<br>
<font color=#ff7f00><b>&raquo;</b></font>INDEPENDENT - GRUNGE - X-OVER -
GUITARPOP - 80es
<br>
</td></tr></table>
<br>
<table width=95%><tr><td align=center>
<a href=index.php?site=gallery&class=sonstige&picture_id=1#s><img src=gallery/sonstige/thumbs/1_t.jpg></a>
</td><td align=center>
<a href=index.php?site=gallery&class=sonstige&picture_id=16#s><img src=gallery/sonstige/thumbs/16_t.jpg></a>
</td><td align=center>
<a href=index.php?site=gallery&class=sonstige&picture_id=44#s><img src=gallery/sonstige/thumbs/44_t.jpg></a>
</td></tr></table>
<br>
<center>
<a href=index.php?site=stuff&go=discoguide&next=comment&disco=loop><font size=2><b><font color=#ff7f00>&raquo;</font>Kommentar abgeben und Disco Bewerten</font></a>
<br>

<?php  
$nerv="loop";
$c_show_mainloop = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id");
 $blubberloop = mysql_num_rows($c_show_mainloop);

$noteloop="0";

         while($rowloop = mysql_fetch_row($c_show_mainloop)) {


  $note_dloop = $rowloop[4];



$noteloop=$note_dloop+$noteloop;

 }


$note_gloop=$noteloop/$blubberloop;

$note_gloop=round($note_gloop,2);

?><br>
<center><font size=1>durschnittliche Note der User = <?php  echo"<b><font color=#ff7f00 size=3>$note_gloop</b>";?></font> 
<br><br>
<b>Eintritt:<font color=#ff7f00> 6 €</b></font>
<br><br>
<b>Homepage: <a href=http://www.loopclub.de target=_blank><font color=#ff7f00>&raquo;</font>www.loopclub.de</a>
</b>
                                    </td>
                                </tr>

                              </table>
                            

</td>
</tr>
<tr> 
<td height="38" background="gfx/unten.jpg">
<center><b>Anschrift: 
90411 Nürnberg | Klingenhofstraße 52, 56 und 50c


</td>
</tr>

</table><br><br> 


   <table width="448" border="0" align="center" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td height="29" background="gfx/news_header.jpg"> 
                              <div align="right"> 
                                <table width="75%" border="0" cellspacing="0" cellpadding="0">
                                  <tr> 
                                    <td width="95%"> 
                                      <div align="right"><font color="#FFFFFF" size="1"><b>
<font face="Verdana, Arial, Helvetica, sans-serif">
Tiefenrausch
                               </font></b></font></div>
                                    </td>
                                    <td width="5%">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                          <tr> 
                            <td background="gfx/11.jpg"> 
                              <table width="95%" border="0" align="center" cellspacing="0" cellpadding="0">
                                <tr> 
                                  <td align=center> <br>

<table width=95%><tr><td align=center><a href=http://www.tiefen-rausch.com target=_blank><img src=images/tr.gif></a></td>
</tr></table><br>

<table border=1 cellspacing=0 cellpadding=5 bordercolor=#000000 width=95%><tr><td align=center><b>Mittwoch</b></b></td><td>
<p align=justify>
<font color=#ff7f00><b>&raquo;</b></font>Black Mission - 50 Cent Party
<br>
<font color=#ff7f00><b>&raquo;</b></font>Hip Hop, RNB & Dance Hall
<br>
<font color=#ff7f00><b>&raquo;</b></font>von 20.30 - 5.00 Uhr
<br>
</td></tr><tr><td align=center><b>Freitag</b></td><td>
<font color=#ff7f00><b>&raquo;</b></font>Despo Club Night
<br>
<font color=#ff7f00><b>&raquo;</b></font>Black Music mit DJ Me-Low
<br>
<font color=#ff7f00><b>&raquo;</b></font>Ladies bis 23.30 Uhr Eintritt frei
<br>
<font color=#ff7f00><b>&raquo;</b></font>Desperados 2 € | Wodka Energy & Pils 1 €
<br>
</td></tr><tr><td align=center><b>Samstag</b></td><td>
<font color=#ff7f00><b>&raquo;</b></font>99 Cent Party
<br>
<font color=#ff7f00><b>&raquo;</b></font>Black Music mit DJ Crinko
<br>
<font color=#ff7f00><b>&raquo;</b></font>Ladies bis 23.30 Uhr Eintritt frei
<br>
</td></tr></table>

<br>

<table width=95%><tr><td align=center>
<img src=images/tr1.jpg>
</td><td align=center>
<img src=images/tr4.jpg>
</td><td align=center>
<img src=images/tr5.jpg>
</td></tr></table>
<br>
<center>
<a href=index.php?site=stuff&go=discoguide&next=comment&disco=tiefenrausch><font size=2><b><font color=#ff7f00>&raquo;</font>Kommentar abgeben und Disco Bewerten</font></a>
<br>

<?php  
$nerv="tr";
$c_show_maintr = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id");
 $blubbertr = mysql_num_rows($c_show_maintr);

$notetr="0";

         while($rowtr = mysql_fetch_row($c_show_maintr)) {


  $note_dtr = $rowtr[4];



$notetr=$note_dtr+$notetr;

 }


$note_gtr=$notetr/$blubbertr;

$note_gtr=round($note_gtr,2);

?><br>
<center><font size=1>durschnittliche Note der User = <?php  echo"<b><font color=#ff7f00 size=3>$note_gtr</b>";?></font> 
<br><br>
<b>Eintritt:<font color=#ff7f00> 6 €</b></font>
<br><br>
<b>Homepage: <a href=http://www.tiefen-rausch.com target=_blank><font color=#ff7f00>&raquo;</font>www.tiefen-rausch.com</a>
</b>
                                    </td>
                                </tr>

                              </table>
                            

</td>
</tr>
<tr> 
<td height="38" background="gfx/unten.jpg">
<center><b>Anschrift: 
90403 Nürnberg | Weintraubengasse 2


</td>
</tr>

</table><br><br> 



  <table width="448" border="0" align="center" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td height="29" background="gfx/news_header.jpg"> 
                              <div align="right"> 
                                <table width="75%" border="0" cellspacing="0" cellpadding="0">
                                  <tr> 
                                    <td width="95%"> 
                                      <div align="right"><font color="#FFFFFF" size="1"><b>
<font face="Verdana, Arial, Helvetica, sans-serif">
Trend
                               </font></b></font></div>
                                    </td>
                                    <td width="5%">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                          <tr> 
                            <td background="gfx/11.jpg"> 
                              <table width="95%" border="0" align="center" cellspacing="0" cellpadding="0">
                                <tr> 
                                  <td align=center> <br>

<table width=95%><tr><td align=center><a href=http://www.disco-trend.de target=_blank><img src=images/trend.jpg></a></td>
</tr></table><br>

<table border=1 cellspacing=0 cellpadding=5 bordercolor=#000000 width=95%><tr>
<td align=center><b>Freitag</b></b></td><td>
<p align=justify>
<font color=#ff7f00><b>&raquo;</b></font>Der Freitag im Partytempel
<br>
<font color=#ff7f00><b>&raquo;</b></font>Alle Mädels haben freien Eintritt
<br>
<font color=#ff7f00><b>&raquo;</b></font>Alle offenen Getränke nur 99 Cent
<br>
<font color=#ff7f00><b>&raquo;</b></font>Salitos, Salitos Ice, CAB, Gutmann Weissbiere 2,30 €
<br>
<font color=#ff7f00><b>&raquo;</b></font>Dance, Hip-Hop, Mixed
<br>
</td></tr><tr>
<td align=center><b>Samstag</b></b></td><td>
<font color=#ff7f00><b>&raquo;</b></font>Der Samstag im Partytempel
<br>
<font color=#ff7f00><b>&raquo;</b></font>Salitos 2 €, Wodka und Tequila 1 €
<br>

</td></tr></table>
<br>

<table width=95%><tr><td align=center>
<img src=images/trend01.jpg>
</td><td align=center>
<img src=images/trend04.jpg>

</td></tr></table>
<br>

<center>
<a href=index.php?site=stuff&go=discoguide&next=comment&disco=trend><font size=2><b><font color=#ff7f00>&raquo;</font>Kommentar abgeben und Disco Bewerten</font></a>
<br>

<?php  
$nerv="trend";
$c_show_maintrend = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id");
 $blubbertrend = mysql_num_rows($c_show_maintrend);

$notetrend="0";

         while($rowtrend = mysql_fetch_row($c_show_maintrend)) {


  $note_dtrend = $rowtrend[4];



$notetrend=$note_dtrend+$notetrend;

 }


$note_gtrend=$notetrend/$blubbertrend;

$note_gtrend=round($note_gtrend,2);

?><br>
<center><font size=1>durschnittliche Note der User = <?php  echo"<b><font color=#ff7f00 size=3>$note_gtrend</b>";?></font> 
<br><br>
<b>Eintritt:<font color=#ff7f00> 4 €</b></font>
<br><br>
<b>Homepage: <a href=http://www.disco-trend.de target=_blank><font color=#ff7f00>&raquo;</font>www.disco-trend.de</a>
</b>
                                    </td>
                                </tr>

                              </table>
                            

</td>
</tr>
<tr> 
<td height="38" background="gfx/unten.jpg">
<center><b>Anschrift: 
92353 Postbauer-Heng | Am Grünberg 15


</td>
</tr>

</table><br><br>


   <table width="448" border="0" align="center" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td height="29" background="gfx/news_header.jpg"> 
                              <div align="right"> 
                                <table width="75%" border="0" cellspacing="0" cellpadding="0">
                                  <tr> 
                                    <td width="95%"> 
                                      <div align="right"><font color="#FFFFFF" size="1"><b>
<font face="Verdana, Arial, Helvetica, sans-serif">
Planet
                               </font></b></font></div>
                                    </td>
                                    <td width="5%">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                          <tr> 
                            <td background="gfx/11.jpg"> 
                              <table width="95%" border="0" align="center" cellspacing="0" cellpadding="0">
                                <tr> 
                                  <td align=center> <br>

<table width=95%><tr><td align=center><a href=http://www.planetdance.de target=_blank><img src=images/planet.gif></a></td>
</tr></table><br>

<table border=1 cellspacing=0 cellpadding=5 bordercolor=#000000 width=95%><tr><td align=center><b>Samstag</b></b></td><td>
<p align=justify>
<font color=#ff7f00><b>&raquo;</b></font>Abwechselnde Events
<br>

</td></tr></table>
<br>
<table width=95%><tr><td align=center>
<img src=images/planet1.jpg>
</td><td>
<img src=images/planet2.jpg>
</td><td align=center>
<img src=images/planet3.jpg>
</td></tr></table>
<br>

<center>
<a href=index.php?site=stuff&go=discoguide&next=comment&disco=planet><font size=2><b><font color=#ff7f00>&raquo;</font>Kommentar abgeben und Disco Bewerten</font></a>
<br>

<?php  

$nerv="planet";
$c_show_mainplanet = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id");
 $blubberplanet = mysql_num_rows($c_show_mainplanet);

$noteplanet="0";

if($blubberplanet!="0") { 

         while($rowplanet = mysql_fetch_row($c_show_mainplanet)) {


  $note_dplanet = $rowplanet[4];



$noteplanet=$note_dplanet+$noteplanet;

 }


$note_gplanet=$noteplanet/$blubberplanet;

$note_gplanet=round($note_gplanet,2);

} 

else { $note_gplanet="noch keine"; }

?><br>
<center><font size=1>durschnittliche Note der User = <?php  echo"<b><font color=#ff7f00 size=3>$note_gplanet</b>";?></font> 
<br><br>
<b>Eintritt:<font color=#ff7f00> 7 €</b></font>
<br><br>
<b>Homepage: <a href=http://www.planetdance.de target=_blank><font color=#ff7f00>&raquo;</font>www.planetdance.de</a>
</b>
                                    </td>
                                </tr>

                              </table>
                            

</td>
</tr>
<tr> 
<td height="38" background="gfx/unten.jpg">
<center><b>Anschrift: 
90411 Nuernberg | Klingenhofstrasse 40


</td>
</tr>

</table><br><br>



  <table width="448" border="0" align="center" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td height="29" background="gfx/news_header.jpg"> 
                              <div align="right"> 
                                <table width="75%" border="0" cellspacing="0" cellpadding="0">
                                  <tr> 
                                    <td width="95%"> 
                                      <div align="right"><font color="#FFFFFF" size="1"><b>
<font face="Verdana, Arial, Helvetica, sans-serif">
Jam Club
                               </font></b></font></div>
                                    </td>
                                    <td width="5%">&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                          <tr> 
                            <td background="gfx/11.jpg"> 
                              <table width="95%" border="0" align="center" cellspacing="0" cellpadding="0">
                                <tr> 
                                  <td align=center> <br>

<table width=95%><tr><td align=center><a href=http://www.jam-clubbing.com target=_blank><img src=images/jc.gif border=0></a></td>
</tr></table><br>

<table border=1 cellspacing=0 cellpadding=5 bordercolor=#000000 width=95%><tr>
<td align=center><b>Freitag</b></b></td><td>
<p align=justify>
<font color=#ff7f00><b>&raquo;</b></font>Alle offenen Getränke 1 €
<br>
<font color=#ff7f00><b>&raquo;</b></font>Hip-Hop | RnB | Soul
<br>
</td></tr><tr>
<td align=center><b>Samstag</b></b></td><td>
<p align=justify>
<font color=#ff7f00><b>&raquo;</b></font>Der 99-Cent Samstag
<br>
<font color=#ff7f00><b>&raquo;</b></font>Hip-Hop | RnB | Soul
<br>

</td></tr></table>
<br>

<table width=95%><tr><td align=center>
<img src=images/jc01.jpg>
<img src=images/jc2.jpg>
</td><td align=center>
<img src=images/jc3.jpg>
</td></tr></table>
<br>

<center>
<a href=index.php?site=stuff&go=discoguide&next=comment&disco=jamclub><font size=2><b><font color=#ff7f00>&raquo;</font>Kommentar abgeben und Disco Bewerten</font></a>
<br>

<?php  
$nerv="jamclub";
$c_show_mainjc = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id");
 $blubberjc = mysql_num_rows($c_show_mainjc);

$notejc="0";

if($blubberjc!="0") { 

         while($rowjc = mysql_fetch_row($c_show_mainjc)) {


  $note_djc = $rowjc[4];



$notejc=$note_djc+$notejc;

 }


$note_gjc=$notejc/$blubberjc;

$note_gjc=round($note_gjc,2);

}

else { $note_gjc="noch keine"; }

?><br>
<center><font size=1>durschnittliche Note der User = <?php  echo"<b><font color=#ff7f00 size=3>$note_gjc</b>";?></font> 
<br><br>
<b>Eintritt:<font color=#ff7f00> 6 €</b></font>
<br><br>
<b>Homepage: <a href=http://www.jam-clubbing.de target=_blank><font color=#ff7f00>&raquo;</font>www.jam-clubbing.de</a>
</b>
                                    </td>
                                </tr>

                              </table>
                            

</td>
</tr>
<tr> 
<td height="38" background="gfx/unten.jpg">
<center><b>Anschrift: 
90443 Nürnberg | Kohlenhofstr. 1


</td>
</tr>

</table><br><br>

<a href="#top"><b>&raquo;Nach oben&laquo;</b></a>
<br>

<?php  }

if($next=="comment") {


if($disco=="stargate") {


echo"<br><b><font color=#ff7f00>&raquo;</font>Kategorie: <font color=#ff7f00>Disco Stargate</font><br><br><br>";

echo"<a href=http://www.stargate-discowelt.de target=_blank><img src=images/g8.gif></a><br><br>";
echo"<br><a href=index.php?site=stuff&go=discoguide>[Zurück]</a>";

echo"<table border=0><tr><td><b>Name</b></td>";
echo"<form action=index.php?site=stuff&go=discoguide&next=comment_stargate method=post name=f_comment onsubmit=\"return check_c()\">";
echo"<td> <input type=text name=c_name></td></tr>";
echo"<input type=hidden name=disco value=stargate><br>";
echo"<input type=hidden name=c_datum value=$datum><br>";
echo"<tr><td><b>Kommentar</b></td><td> <textarea rows=5 cols=45 name=comment></textarea>";
echo"</td></tr><tr><td><b>Note</b></td><td>";
echo"<select size=\"1\" style=\"width:40px;\" scrolling=yes name=\"c_note\">";
echo"<option value=1 scrolling=yes>1</option>";
echo"<option value=2 scrolling=yes>2</option>";
echo"<option value=3 scrolling=yes>3</option>";
echo"<option value=4 scrolling=yes>4</option>";
echo"<option value=5 scrolling=yes>5</option>";
echo"<option value=6 scrolling=yes>6</option>";
echo"</select>";
echo"</td></tr></table><br><input type=submit value=\"Kommentar absenden\" name=wuff>";
echo"<br><br><br></form>";

$nerv="stargate";

$c_show_main = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id DESC");

echo"<table width=90% cellspacing=0 cellpadding=8 border=1>";


         while($c_row_main = mysql_fetch_row($c_show_main)) { 

echo"<tr><td width=25% align=center><b><font color=#ff7f00 size=2>$c_row_main[2]<br></b></font><i>(am $c_row_main[5])</i><br>abgegebene Note: <font size=2><b>$c_row_main[4]</font></b></td><td><font size=1>$c_row_main[3]</font></td></tr>";

}

echo"</td></tr></table>";



}



if($disco=="loop") {


echo"<br><b><font color=#ff7f00>&raquo;</font>Kategorie: <font color=#ff7f00>Disco Loop & Fifty 6</font><br><br><br>";

echo"<a href=http://www.loopclub.de target=_blank><img src=images/loop.gif></a><br><br>";
echo"<br><a href=index.php?site=stuff&go=discoguide>[Zurück]</a>";

echo"<table border=0><tr><td><b>Name</b></td>";
echo"<form action=index.php?site=stuff&go=discoguide&next=comment_loop method=post name=f_comment onsubmit=\"return check_c()\">";
echo"<td> <input type=text name=c_name></td></tr>";
echo"<input type=hidden name=disco value=loop><br>";
echo"<input type=hidden name=c_datum value=$datum><br>";
echo"<tr><td><b>Kommentar</b></td><td> <textarea rows=5 cols=45 name=comment></textarea>";
echo"</td></tr><tr><td><b>Note</b></td><td>";
echo"<select size=\"1\" style=\"width:40px;\" scrolling=yes name=\"c_note\">";
echo"<option value=1 scrolling=yes>1</option>";
echo"<option value=2 scrolling=yes>2</option>";
echo"<option value=3 scrolling=yes>3</option>";
echo"<option value=4 scrolling=yes>4</option>";
echo"<option value=5 scrolling=yes>5</option>";
echo"<option value=6 scrolling=yes>6</option>";
echo"</select>";
echo"</td></tr></table><br><input type=submit value=\"Kommentar absenden\" name=wuff>";
echo"<br><br><br></form>";

$nerv="loop";

$c_show_main = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id DESC");

echo"<table width=90% cellspacing=0 cellpadding=8 border=1>";


         while($c_row_main = mysql_fetch_row($c_show_main)) { 

echo"<tr><td width=25% align=center><b><font color=#ff7f00 size=2>$c_row_main[2]<br></b></font><i>(am $c_row_main[5])</i><br>abgegebene Note: <font size=2><b>$c_row_main[4]</font></b></td><td><font size=1>$c_row_main[3]</font></td></tr>";

}

echo"</td></tr></table>";



}




if($disco=="tiefenrausch") {


echo"<br><b><font color=#ff7f00>&raquo;</font>Kategorie: <font color=#ff7f00>Disco Tiefenrausch</font><br><br><br>";

echo"<a href=http://www.tiefen-rausch.com target=_blank><img src=images/tr.gif></a><br><br>";
echo"<br><a href=index.php?site=stuff&go=discoguide>[Zurück]</a>";

echo"<table border=0><tr><td><b>Name</b></td>";
echo"<form action=index.php?site=stuff&go=discoguide&next=comment_tiefenrausch method=post name=f_comment onsubmit=\"return check_c()\">";
echo"<td> <input type=text name=c_name></td></tr>";
echo"<input type=hidden name=disco value=tr><br>";
echo"<input type=hidden name=c_datum value=$datum><br>";
echo"<tr><td><b>Kommentar</b></td><td> <textarea rows=5 cols=45 name=comment></textarea>";
echo"</td></tr><tr><td><b>Note</b></td><td>";
echo"<select size=\"1\" style=\"width:40px;\" scrolling=yes name=\"c_note\">";
echo"<option value=1 scrolling=yes>1</option>";
echo"<option value=2 scrolling=yes>2</option>";
echo"<option value=3 scrolling=yes>3</option>";
echo"<option value=4 scrolling=yes>4</option>";
echo"<option value=5 scrolling=yes>5</option>";
echo"<option value=6 scrolling=yes>6</option>";
echo"</select>";
echo"</td></tr></table><br><input type=submit value=\"Kommentar absenden\" name=wuff>";
echo"<br><br><br></form>";

$nerv="tr";

$c_show_main = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id DESC");

echo"<table width=90% cellspacing=0 cellpadding=8 border=1>";


         while($c_row_main = mysql_fetch_row($c_show_main)) { 

echo"<tr><td width=25% align=center><b><font color=#ff7f00 size=2>$c_row_main[2]<br></b></font><i>(am $c_row_main[5])</i><br>abgegebene Note: <font size=2><b>$c_row_main[4]</font></b></td><td><font size=1>$c_row_main[3]</font></td></tr>";

}

echo"</td></tr></table>";



}



if($disco=="trend") {


echo"<br><b><font color=#ff7f00>&raquo;</font>Kategorie: <font color=#ff7f00>Disco Trend</font><br><br><br>";

echo"<a href=http://www.disco-trend.de target=_blank><img src=images/trend.jpg></a><br><br>";
echo"<br><a href=index.php?site=stuff&go=discoguide>[Zurück]</a>";

echo"<table border=0><tr><td><b>Name</b></td>";
echo"<form action=index.php?site=stuff&go=discoguide&next=comment_trend method=post name=f_comment onsubmit=\"return check_c()\">";
echo"<td> <input type=text name=c_name></td></tr>";
echo"<input type=hidden name=disco value=trend><br>";
echo"<input type=hidden name=c_datum value=$datum><br>";
echo"<tr><td><b>Kommentar</b></td><td> <textarea rows=5 cols=45 name=comment></textarea>";
echo"</td></tr><tr><td><b>Note</b></td><td>";
echo"<select size=\"1\" style=\"width:40px;\" scrolling=yes name=\"c_note\">";
echo"<option value=1 scrolling=yes>1</option>";
echo"<option value=2 scrolling=yes>2</option>";
echo"<option value=3 scrolling=yes>3</option>";
echo"<option value=4 scrolling=yes>4</option>";
echo"<option value=5 scrolling=yes>5</option>";
echo"<option value=6 scrolling=yes>6</option>";
echo"</select>";
echo"</td></tr></table><br><input type=submit value=\"Kommentar absenden\" name=wuff>";
echo"<br><br><br></form>";

$nerv="trend";

$c_show_main = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id DESC");

echo"<table width=90% cellspacing=0 cellpadding=8 border=1>";


         while($c_row_main = mysql_fetch_row($c_show_main)) { 

echo"<tr><td width=25% align=center><b><font color=#ff7f00 size=2>$c_row_main[2]<br></b></font><i>(am $c_row_main[5])</i><br>abgegebene Note: <font size=2><b>$c_row_main[4]</font></b></td><td><font size=1>$c_row_main[3]</font></td></tr>";

}

echo"</td></tr></table>";



}



if($disco=="planet") {


echo"<br><b><font color=#ff7f00>&raquo;</font>Kategorie: <font color=#ff7f00>Disco Planet</font><br><br><br>";

echo"<a href=http://www.planetdance.de target=_blank><img src=images/planet.gif></a><br><br>";
echo"<br><a href=index.php?site=stuff&go=discoguide>[Zurück]</a>";

echo"<table border=0><tr><td><b>Name</b></td>";
echo"<form action=index.php?site=stuff&go=discoguide&next=comment_planet method=post name=f_comment onsubmit=\"return check_c()\">";
echo"<td> <input type=text name=c_name></td></tr>";
echo"<input type=hidden name=disco value=planet><br>";
echo"<input type=hidden name=c_datum value=$datum><br>";
echo"<tr><td><b>Kommentar</b></td><td> <textarea rows=5 cols=45 name=comment></textarea>";
echo"</td></tr><tr><td><b>Note</b></td><td>";
echo"<select size=\"1\" style=\"width:40px;\" scrolling=yes name=\"c_note\">";
echo"<option value=1 scrolling=yes>1</option>";
echo"<option value=2 scrolling=yes>2</option>";
echo"<option value=3 scrolling=yes>3</option>";
echo"<option value=4 scrolling=yes>4</option>";
echo"<option value=5 scrolling=yes>5</option>";
echo"<option value=6 scrolling=yes>6</option>";
echo"</select>";
echo"</td></tr></table><br><input type=submit value=\"Kommentar absenden\" name=wuff>";
echo"<br><br><br></form>";

$nerv="planet";

$c_show_main = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id DESC");

echo"<table width=90% cellspacing=0 cellpadding=8 border=1>";


         while($c_row_main = mysql_fetch_row($c_show_main)) { 

echo"<tr><td width=25% align=center><b><font color=#ff7f00 size=2>$c_row_main[2]<br></b></font><i>(am $c_row_main[5])</i><br>abgegebene Note: <font size=2><b>$c_row_main[4]</font></b></td><td><font size=1>$c_row_main[3]</font></td></tr>";

}

echo"</td></tr></table>";



}


if($disco=="jamclub") {


echo"<br><b><font color=#ff7f00>&raquo;</font>Kategorie: <font color=#ff7f00>Disco Jam Club</font><br><br><br>";

echo"<a href=http://www.jam-clubbing.de target=_blank><img src=images/jc.gif border=0></a><br><br>";
echo"<br><a href=index.php?site=stuff&go=discoguide>[Zurück]</a>";

echo"<table border=0><tr><td><b>Name</b></td>";
echo"<form action=index.php?site=stuff&go=discoguide&next=comment_jamclub method=post name=f_comment onsubmit=\"return check_c()\">";
echo"<td> <input type=text name=c_name></td></tr>";
echo"<input type=hidden name=disco value=jamclub><br>";
echo"<input type=hidden name=c_datum value=$datum><br>";
echo"<tr><td><b>Kommentar</b></td><td> <textarea rows=5 cols=45 name=comment></textarea>";
echo"</td></tr><tr><td><b>Note</b></td><td>";
echo"<select size=\"1\" style=\"width:40px;\" scrolling=yes name=\"c_note\">";
echo"<option value=1 scrolling=yes>1</option>";
echo"<option value=2 scrolling=yes>2</option>";
echo"<option value=3 scrolling=yes>3</option>";
echo"<option value=4 scrolling=yes>4</option>";
echo"<option value=5 scrolling=yes>5</option>";
echo"<option value=6 scrolling=yes>6</option>";
echo"</select>";
echo"</td></tr></table><br><input type=submit value=\"Kommentar absenden\" name=wuff>";
echo"<br><br><br></form>";

$nerv="jamclub";

$c_show_main = mysql_query("select * from $comment_tblname WHERE disco='$nerv' ORDER by id DESC");

echo"<table width=90% cellspacing=0 cellpadding=8 border=1>";


         while($c_row_main = mysql_fetch_row($c_show_main)) { 

echo"<tr><td width=25% align=center><b><font color=#ff7f00 size=2>$c_row_main[2]<br></b></font><i>(am $c_row_main[5])</i><br>abgegebene Note: <font size=2><b>$c_row_main[4]</font></b></td><td><font size=1>$c_row_main[3]</font></td></tr>";

}

echo"</td></tr></table>";



}




}


