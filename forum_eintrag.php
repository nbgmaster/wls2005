<script language="JavaScript" type="text/javascript">

function checkForm() {


if (document.bbform.message.value.indexOf('<',0)!=-1 || document.bbform.message.value.indexOf('>',0)!=-1) {
alert( "Bitte kein Html benutzen!" );
document.bbform.message.focus();
return false;
}

formErrors = false;

if (document.bbform.message.value.length < 2) {
formErrors = "Du musst zu deinem Beitrag einen Text eingeben.";
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

<?php 
$sql3 = mysql_query("select * from wls_forum_posts WHERE id='$q_id' order by id");

while ($r_posts = mysql_fetch_row($sql3)) {

$r_posts[4] = str_replace("<br>", "\n\r", $r_posts[4]);


$r_posts[4] = str_replace("A target=_blank href", "URL", $r_posts[4]);
$r_posts[4] = str_replace("/A", "/URL", $r_posts[4]);
$r_posts[4] = str_replace("IMG src=", "IMG]", $r_posts[4]);
$r_posts[4] = str_replace(" alt=", "[/IMG", $r_posts[4]);

$r_posts[4] = str_replace("FONT ", "", $r_posts[4]);
$r_posts[4] = str_replace("/FONT", "/COLOR", $r_posts[4]);


$r_posts[4] = str_replace("<", "[", $r_posts[4]);
$r_posts[4] = str_replace(">", "]", $r_posts[4]);

$r_posts[4] = str_replace('"', "", $r_posts[4]);



$r_posts[4] = str_replace("&lt;br&gt;", "\n", $r_posts[4]);

$zitat="$r_posts[4]"; 


$post_name = mysql_query("select * from wls_login WHERE UserID='$r_posts[3]'"); 

while($r_name = mysql_fetch_row($post_name))  {   $usern="$r_name[1]"; }}


$navi = mysql_query("select * from $cat_tblname WHERE id='$cat_id'");

         while($r_navi = mysql_fetch_row($navi)) {  $navi01="$r_navi[1]"; }


$navib = mysql_query("select * from $threads_tblname WHERE id='$thread_id'");

         while($r_thread = mysql_fetch_row($navib)) {  $navi02="$r_thread[2]"; }

echo"<br><table width=690><tr>";

echo"<td width=125><img src=images/arrow_r.gif> <a href=index.php?page=forum><b>Forum Übersicht</b></a></td>";

echo"<td><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id><b>$navi01</b></a></td>";

echo"<td align=right>";


echo"<img src=images/arrow_r.gif> Thema: <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=1><b>$navi02</b></a></td></tr></table>";

echo"<form  action=\"index.php?page=forum&do=post\" method=\"post\" name=\"bbform\" onsubmit=\"return checkForm(this)\">";

?>

<br><table width=690><tr><td style="border:1px solid #000000;" bgcolor=#f8f8f8 valign=top width=160 align=center>

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
<td><a href="javascript:emoticon(':angry:')"><img src="images/smiles/mad.gif" border="0" alt="Böse" title="Böse" /></a></td>
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

<option value="3">groß</option>
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
  <td width="50%"><font face="Tahoma,Helvetica" size="1"><input class="input" type="button" value="aktuellen Tag schliessen" accesskey="c" title="aktuellen tag schließen (alt+c)"  onclick="closetag(this.form)"></font></td>
  <td width="50%"><font face="Tahoma,Helvetica" size="1"><input class="input" type="button" value="alle Tags schliessen" accesskey="x" title="alle tags schließen (alt+x)" onclick="closeall(this.form)"></font></td>

 </tr>
</table>


<?php  


$quote1="[QUOTE=$usern]"; $quote2="[/QUOTE]"; 

?></td>
          </tr>
          <tr>
           <td><textarea nowrap name="message" rows=15 cols=74 style="display:inline;"><?php  if($q_id!="") { echo"$quote1$zitat$quote2"; } ?></textarea></td>
          </tr>
         </table> 

<input type=hidden value=<?php echo"$cat_id";?> name=cat_id>
<input type=hidden value=<?php echo"$thread_id";?> name=thread_id>
<input type=hidden value=<?php echo"$save_id";?> name=user_id>
<input type=hidden value=<?php echo"$timestamp";?> name=post_time>
<br>
<center>

<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>

<input class="input" type="submit" name="submit" accesskey="S" value="Beitrag absenden">
</center>
<br>
</form>

</td></tr></table>


<br><img src=images/arrow_r.gif> <b>die letzten 5 Beiträge:</b>
<br><br>
<?php 


$posts = mysql_query("select * from $posts_tblname WHERE cat_id='$cat_id' && thread_id='$thread_id' ORDER by id DESC LIMIT 5");

         while($r_posts = mysql_fetch_row($posts)) {   



$post_name = mysql_query("select * from wls_login WHERE UserID='$r_posts[3]'"); 


$avatar=="";

         while($r_name = mysql_fetch_row($post_name)) {  $zuu=$r_name[0]; 
$usern="$r_name[1]"; $regdate=$r_name[5]; $hp=$r_name[12]; $signatur=$r_name[30];
$avatar2=$r_name[14];
}

$uhrzeit2 = date("H:i",$r_posts[5]);
$datum2 = date("d.m.Y",$r_posts[5]);

$signatur = str_replace("[SIZE=1]", "<FONT SIZE=1>", $signatur);
$signatur = str_replace("[SIZE=2]", "<FONT SIZE=2>", $signatur);
$signatur = str_replace("[SIZE=3]", "<FONT SIZE=3>", $signatur);
$signatur = str_replace("[SIZE=4]", "<FONT SIZE=4>", $signatur);
$signatur = str_replace("[/SIZE]", "</FONT>", $signatur);

$signatur = str_replace("&lt;", "<", $signatur);
$signatur = str_replace("&gt;", ">", $signatur);

   while  ($rowadmin  =  mysql_fetch_row($showadmin)) { $saver=$rowadmin[0]; }

if($avatar2=="") { $avatar="no avatar uploaded<br><br>";

$height=40;

 } else { $avatar="<img src=\"avatare/$avatar2\">"; 

$blubb2="avatare/$avatar2";

$size2 = getimagesize($blubb2);
$width=$size2[0];
$height=$size2[1];


}

$soo=75+$height;

if($r_posts[3]==75) { $winter="König Winter<br>"; } else { $winter=""; }

$anzahlp = mysql_query("select * from wls_forum_posts WHERE user_id='$r_posts[3]'");
$anzahlp2 = mysql_num_rows($anzahlp);

if($anzahlp2 < 20)  { $sterne="<img src=images/star.gif><br>Made<br>"; }
if($anzahlp2 > 19 && $anzahlp2 < 50) { $sterne="<img src=images/star.gif><img src=images/star.gif><br>Sträfling<br> "; }
if($anzahlp2 > 49 && $anzahlp2 < 100) { $sterne="<img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><br>Weichkeks<br> "; }
if($anzahlp2 > 99 && $anzahlp2 < 200) { $sterne="<img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><br>Hausmeistergehilfe<br> "; }
if($anzahlp2 > 199) { $sterne="<img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><br>Besserwisser<br> "; }

$r_posts[4] = str_replace("[SIZE=1]", "<FONT SIZE=1>", $r_posts[4]);
$r_posts[4] = str_replace("[SIZE=2]", "<FONT SIZE=2>", $r_posts[4]);
$r_posts[4] = str_replace("[SIZE=3]", "<FONT SIZE=3>", $r_posts[4]);
$r_posts[4] = str_replace("[SIZE=4]", "<FONT SIZE=4>", $r_posts[4]);
$r_posts[4] = str_replace("[/SIZE]", "</FONT>", $r_posts[4]);

$r_posts[4] = str_replace("[QUOTE=", "&nbsp;<b>Zitat:</b><font class=mini><br><br></font><table bgcolor=#ffffff cellpadding=5 cellspacing=0 width=500><tr><td class=top8 style=line-height:20px;><i>von ", $r_posts[4]);
$r_posts[4] = str_replace("]", "</i><br>", $r_posts[4]);
$r_posts[4] = str_replace("[/QUOTE", "</i></td></tr></table>", $r_posts[4]);
$r_posts[4] = str_replace("[", "", $r_posts[4]);

$r_posts[4] = str_replace("&lt;", "<", $r_posts[4]);
$r_posts[4] = str_replace("&gt;", ">", $r_posts[4]);



$datum_reg = date("d.m.Y",$regdate);

include('forum_replace2.php');

if($signatur!="") { $signatur="<table cellspacing=0 cellpadding=0><tr><td style=line-height:15px;>_______________________<br>$signatur</td></tr></table>"; }


 if($r_posts[6]!="" && $r_posts[6]!="0") { 

$uhrzeited = date("H:i",$r_posts[6]);
$datumed = date("d.m.Y",$r_posts[6]);

$editt="<br><br><i><font class=small>zuletzt editiert am $datumed, $uhrzeited Uhr</font></i>";
 }  else { $editt=""; }


echo"<a name=$r_posts[0]></a>";
echo"<table width=690 cellpadding=2 cellspacing=5>";
echo"<tr><td width=150 valign=top style=\"border:1px solid #000000;\" bgcolor=#f8f8f8 align=center>";
echo"<table width=150 cellpadding=0 cellspacing=0><tr><td align=center>";
echo"<a href=\"javascript:center_position(400,400,'members.php?user_id=$zuu','window')\"><font size=2><b>$usern</b></font></a><br>$winter<br>$sterne";
echo"<br><br>$avatar<br><br>";


echo"</td></tr></table>";
echo"</td><td style=\"border:1px solid #000000;\" bgcolor=#f7f7f7 valign=top>";
echo"<table cellspacing=2 style=\"border-bottom:1px solid #000000;\" cellpadding=0 width=100%><tr><td valign=middle>";
echo"&nbsp;<img src=images/arrow_r.gif> <font class=members>Beitrag erstellt am $datum2 um $uhrzeit2 Uhr</font></td>";

echo"</tr></table>";

echo"<table width=518 cellpadding=5 height=$soo><tr><td class=postsf valign=top>";
echo"$r_posts[4]";

echo"$editt";
echo"$signatur";
echo"</td></tr>";



echo"</table>";

echo"</td></tr>";
echo"</table>";

}

echo"<br>";

