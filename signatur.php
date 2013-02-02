
<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1

 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 

if($do=="change") {


include('forum_replace.php');


$sqlsg = "UPDATE $user_tblname SET signatur = '$new_message' WHERE UserID='$save_id'";     

mysql_query($sqlsg) OR die(mysql_error());



echo"<br><br><br><font face=\"Tahoma,Helvetica\" size=\"2\">Signatur wurde ge‰ndert! Du wirst weitergeleitet...</font>";


echo"<br><font face=\"Tahoma,Helvetica\" size=\"2\"><a href=\"index.php?page=signatur\">Falls die automatische Weiterleitung nicht funktioniert, klicke bitte hier!</a></font>";


echo"<meta http-equiv=\"refresh\" content=\"3; url=index.php?page=signatur\">"; 

 
}

else { 

$check_sg = mysql_query("select * from $user_tblname WHERE UserID='$save_id'");

         while($r_sg = mysql_fetch_row($check_sg)) {  $signatur="$r_sg[30]";

$signatur = str_replace("<br>", "\n\r", $signatur);


$signatur = str_replace("A target=_blank href", "URL", $signatur);
$signatur = str_replace("/A", "/URL", $signatur);
$signatur = str_replace("IMG src=", "IMG]", $signatur);
$signatur = str_replace(" alt=", "[/IMG", $signatur);

$signatur = str_replace("FONT ", "", $signatur);
$signatur = str_replace("/FONT", "/COLOR", $signatur);


$signatur = str_replace("<", "[", $signatur);
$signatur = str_replace(">", "]", $signatur);

$signatur = str_replace('"', "", $signatur);



$signatur = str_replace("&lt;br&gt;", "\n", $signatur);


$signatur2="$signatur"; 


 }

?>

<script language="JavaScript" type="text/javascript">

function checkForm() {


if (document.bbform.message.value.indexOf('<',0)!=-1 || document.bbform.message.value.indexOf('>',0)!=-1) {
alert( "Bitte kein Html benutzen!" );
document.bbform.message.focus();
return false;
}

formErrors = false;



if (formErrors) {
alert(formErrors);
return false;
} else {

return true;
}
}

function emoticon(text) {
var txtarea = document.bbform.message;
text = ' ' + text + ' ';
if (txtarea.createTextRange && txtarea.caretPos) {
var caretPos = txtarea.caretPos;
caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
txtarea.focus();
} else {
txtarea.value  += text;
txtarea.focus();
}
}



</script>

<<<<<<< HEAD
<?php  echo"$widthimg"; ?>
=======
<? echo"$widthimg"; ?>
>>>>>>> af2fff1... version1
<br>
<font class=mitglieder>
<b>Signatur bearbeiten:</b></font><br>

<<<<<<< HEAD
<?php  echo"<form  action=\"index.php?page=signatur&do=change\" method=\"post\" name=\"bbform\" onsubmit=\"return checkForm(this)\">";
=======
<? echo"<form  action=\"index.php?page=signatur&do=change\" method=\"post\" name=\"bbform\" onsubmit=\"return checkForm(this)\">";
>>>>>>> af2fff1... version1
?>
<br>
<table width=690><tr><td style="border:1px solid #000000;" bgcolor=#f8f8f8 valign=top width=160 align=center>

<table border="0" cellspacing="0" cellpadding="3">
<tr align="center">
<td class="gensmall"><b>Smilies</b><br><br></td>
</tr>
<tr align="center" valign="middle">

<td><a href="javascript:emoticon(':D')"><img src="images/smiles/biggrin.gif" border="0" alt="*grins*" title="*grins*" /></a></td>
<td><a href="javascript:emoticon(':)')"><img src="images/smiles/smile.gif" border="0" alt="Smile" title="Smile" /></a></td>
<td><a href="javascript:emoticon(':(')"><img src="images/smiles/sad.gif" border="0" alt="Traurig" title="Traurig" /></a></td>
</tr>
<tr align="center" valign="middle">
<td><a href="javascript:emoticon('^_^')"><img src="images/smiles/happy.gif" border="0" alt="Happy" title="Happy" /></a></td>
<td><a href="javascript:emoticon(':angry:')"><img src="images/smiles/mad.gif" border="0" alt="Bˆse" title="Bˆse" /></a></td>
<td><a href="javascript:emoticon(':o')"><img src="images/smiles/ohmy.gif" border="0" alt="Ohmy" title="Ohmy" /></a></td>
</tr>
<tr align="center" valign="middle">
<td><a href="javascript:emoticon(':P')"><img src="images/smiles/tongue.gif" border="0" alt="Zunge" title="Zunge" /></a></td>
<td><a href="javascript:emoticon(':roll:')"><img src="images/smiles/rolleyes.gif" border="0" alt="roll eyes" title="roll eyes" /></a></td>
<td><a href="javascript:emoticon(':lol:')"><img src="images/smiles/laugh.gif" border="0" alt="lol" title="lol" /></a></td>
</tr>

<tr align="center" valign="middle">
<td><a href="javascript:emoticon(':2ar15:')"><img src="images/smiles/2ar15smilie.gif" border="0" alt="2ar15" title="2ar15" /></a></td>
<td><a href="javascript:emoticon(':ar15:')"><img src="images/smiles/ar15.gif" border="0" alt="ar15" title="ar15" /></a></td>
<td><a href="javascript:emoticon(':blah:')"><img src="images/smiles/ices_blah.gif" border="0" alt="bla" title="bla" /></a></td>
</tr>
<tr align="center" valign="middle">
<td><a href="javascript:emoticon(':bonk:')"><img src="images/smiles/bonk.gif" border="0" alt="bonk" title="bonk" /></a></td>
<td><a href="javascript:emoticon(':cul:')"><img src="images/smiles/cul2.gif" border="0" alt="arsch" title="arsch" /></a></td>
<td><a href="javascript:emoticon(':LOL:')"><img src="images/smiles/d-lol.gif" border="0" alt="LOL" title="LOL" /></a></td>
</tr>
<tr align="center">
<td colspan="4"><span  class="nav"><br><img src=images/arrow_r.gif> <a href="#" onclick="window.open('forum_smilies.php', 'smilies', 'HEIGHT=520,resizable=yes,scrollbars=yes,WIDTH=720');return false;" target="smilies" class="nav">Weitere Smilies ansehen</a></span></td>
</tr>
</table>
<br><br><br>
Optionen:<br><br>
<img src=images/arrow_r.gif> HTML ist <b>aus</b><br>
<img src=images/arrow_r.gif> BBCode ist <b>an</b><br>
<img src=images/arrow_r.gif> Smilies sind <b>an</b>


</td><td width=2></td><td style="border:1px solid #000000;" bgcolor=#f8f8f8 align=center>
<br>

<table><tr><td>
<table cellspacing=0 cellpadding=0 align=center>
 <tr>
  <td><font face="Tahoma,Helvetica" size="1"><input type="radio" name="mode" value="0" title="einfacher Modus: (alt+n)" accesskey="n" onclick="setmode(this.value)" checked>einfacher Modus
&nbsp;<input type="radio" name="mode" value="1" title="erweiterter Modus: (alt+e)" accesskey="e" onclick="setmode(this.value)" >erweiterter Modus</font></td>
 </tr></table><br>
<table cellspacing=0 cellpadding=0 width=400>
 <tr>

  <td valign=center><select id="sizeselect" onchange="fontformat(this.form,this.options[this.selectedIndex].value,'SIZE')"><option value="0">SIZE</option><option value="1">klein</option>
<option value="2">mittel</option>

<option value="3">groﬂ</option>
<option value="4">riesig</option>
</select>&nbsp;&nbsp;<select id="colorselect" onchange="fontformat(this.form,this.options[this.selectedIndex].value,'COLOR')"><option value="0">COLOR</option><option value="skyblue" style="color:skyblue">sky blue</option>
<option value="royalblue" style="color:royalblue">royal blue</option>
<option value="blue" style="color:blue">blue</option>
<option value="darkblue" style="color:darkblue">dark-blue</option>
<option value="orange" style="color:orange">orange</option>
<option value="orangered" style="color:orangered">orange-red</option>

<option value="crimson" style="color:crimson">crimson</option>
<option value="red" style="color:red">red</option>
<option value="firebrick" style="color:firebrick">firebrick</option>
<option value="darkred" style="color:darkred">dark red</option>
<option value="green" style="color:green">green</option>
<option value="limegreen" style="color:limegreen">limegreen</option>
<option value="seagreen" style="color:seagreen">sea-green</option>
<option value="deeppink" style="color:deeppink">deeppink</option>
<option value="tomato" style="color:tomato">tomato</option>

<option value="coral" style="color:coral">coral</option>
<option value="purple" style="color:purple">purple</option>
<option value="indigo" style="color:indigo">indigo</option>
<option value="burlywood" style="color:burlywood">burlywood</option>
<option value="sandybrown" style="color:sandybrown">sandy brown</option>
<option value="sienna" style="color:sienna">sienna</option>
<option value="chocolate" style="color:chocolate">chocolate</option>
<option value="teal" style="color:teal">teal</option>
<option value="silver" style="color:silver">silver</option></select>
</td><td valign=center>
 &nbsp;
  <img src="images/bbcode_bold.gif" title="fettgedruckter Text" border="0" onclick="bbcode(document.bbform,'B','')" class="clsCursor">&nbsp;
<img src="images/bbcode_italic.gif" title="kursiver Text" border="0" onclick="bbcode(document.bbform,'I','')" class="clsCursor">&nbsp;
<img src="images/bbcode_underline.gif" title="unterstrichener Text" border="0" onclick="bbcode(document.bbform,'U','')" class="clsCursor">&nbsp;
<img src="images/bbcode_center.gif" title="zentrierter Text" border="0" onclick="bbcode(document.bbform,'CENTER','')" class="clsCursor">&nbsp;
<img src="images/bbcode_url.gif" title="Hyperlink einf&uuml;gen" border="0" onclick="namedlink(document.bbform,'URL')" class="clsCursor">&nbsp;

<img src="images/bbcode_image.gif" title="Bild einf&uuml;gen" border="0" onclick="bbcode(document.bbform,'IMG','http://')" class="clsCursor">&nbsp;
 </tr></table>
<table align=center>
 <tr>
  <td width="50%"><font face="Tahoma,Helvetica" size="1"><input class="input" type="button" value="aktuellen Tag schliessen" accesskey="c" title="aktuellen tag schlieﬂen (alt+c)"  onclick="closetag(this.form)"></font></td>
  <td width="50%"><font face="Tahoma,Helvetica" size="1"><input class="input" type="button" value="alle Tags schliessen" accesskey="x" title="alle tags schlieﬂen (alt+x)" onclick="closeall(this.form)"></font></td>

 </tr>
</table></td>
          </tr>
          <tr>
<<<<<<< HEAD
           <td><textarea nowrap name="message" rows=15 cols=60 style="display:inline;"><?php  echo"$signatur2"; ?></textarea></td>
=======
           <td><textarea nowrap name="message" rows=15 cols=60 style="display:inline;"><? echo"$signatur2"; ?></textarea></td>
>>>>>>> af2fff1... version1
          </tr>
         </table> 


<br>
<center>



<input class="input" type="submit" name="submit" accesskey="S" value="‹bernehmen">
</center>
<br>
</form>

</td></tr></table>

<<<<<<< HEAD
<?php  }
=======
<? }
>>>>>>> af2fff1... version1

}

else { echo"<br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 }