<script>
function check_form() {

if (document.bbform.message.value.indexOf('<',0)!=-1 || document.bbform.message.value.indexOf('>',0)!=-1) {
alert( "Bitte kein Html benutzen!" );
document.bbform.message.focus();
return false;
}

formErrors = false;

if (document.bbform.message.value.length < 2) {
formErrors = "Du musst zu deinem Beitrag einen Text eingeben.";
document.bbform.message.focus();
}

if (document.bbform.thema.value.length < 2) {
formErrors = "Du musst einen Titel angeben.";
document.bbform.thema.focus();
}

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
<?php 
=======
<?
>>>>>>> af2fff1... version1


$navi = mysql_query("select * from $cat_tblname WHERE id='$cat_id'");

         while($r_navi = mysql_fetch_row($navi)) {  $navi01="$r_navi[1]"; }


echo"<br><table width=690><tr>";

echo"<td width=125><img src=images/arrow_r.gif> <a href=index.php?page=forum><b>Forum ‹bersicht</b></a></td>";

echo"<td><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id><b>$navi01</b></a></td>";

echo"<td align=right>";


echo"<img src=images/arrow_r.gif> Neues Thema erstellen</td></tr></table>";


?>
<form action="index.php?page=forum&do=post_topic" method="post" name="bbform" onsubmit="return check_form(this)">

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


<b>Thema:</b> <input type=text maxlength=30 name=thema style="width:420px;">
<font class=small><br><br></font>
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
</td>
 </tr></table>
<table align=center>
 <tr>
  <td width="50%"><font face="Tahoma,Helvetica" size="1"><input class="input" type="button" value="aktuellen Tag schliessen" accesskey="c" title="aktuellen tag schlieﬂen (alt+c)"  onclick="closetag(this.form)"></font></td>
  <td width="50%"><font face="Tahoma,Helvetica" size="1"><input class="input" type="button" value="alle Tags schliessen" accesskey="x" title="alle tags schlieﬂen (alt+x)" onclick="closeall(this.form)"></font></td>

 </tr>
</table></td>
          </tr>
          <tr>
           <td><textarea name="message" rows=15 cols=74 wrap="virtual" tabindex="3"></textarea></td>
          </tr>
         </table> 

<<<<<<< HEAD
<input type=hidden value=<?php echo"$cat_id";?> name=cat_id>
<input type=hidden value=<?php echo"$save_id";?> name=user_id>
<input type=hidden value=<?php echo"$timestamp";?> name=post_time>
=======
<input type=hidden value=<?echo"$cat_id";?> name=cat_id>
<input type=hidden value=<?echo"$save_id";?> name=user_id>
<input type=hidden value=<?echo"$timestamp";?> name=post_time>
>>>>>>> af2fff1... version1
<br>
<center>
<input class="input" type="submit" name="submit" accesskey="S" value="Thema erstellen">
</center>
<br>
</form>

</td></tr></table>
<br>
