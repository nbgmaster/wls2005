<form action="index.php" method="post" name="form_sb" onsubmit="return check_sb()" style="display:inline">
<div align="center">

<?php  if($cookie_check_abicalypse=="" or $save_id=="") { 

echo"<table width=195 cellspacing=0 cellpadding=0><tr><td align=center>";
echo"<font class=portrait>Sorry, aber nur registrierte Mitglieder dürfen Einträge schreiben!</font>";
echo"</td></tr></table>";
}

else { ?>
<table><tr><td>

<input type="hidden" name="name_sb" value="<?php echo"$save_name";?>">
<input type="text" name="text_sb" value="dein Eintrag hier rein" onfocus="if (value == 'dein Eintrag hier rein') {value =''}" size="26" class="input" style="padding:0px 0px 0px 3px; background:<?php echo"$bginput2";?>;font-size:<?php echo"$schriftinput2";?>;height:<?php echo"$hoeheinput2";?>;color:<?php echo"$inputfarbe2";?>;border-color:<?php echo"$inputborder2";?>;">
</td></tr><tr><td>
<b>Link:</b> <input type="text" name="link_sb" value="http://" onfocus="if (value == 'http://') {value =''}" size="21" class="input" style="padding:0px 0px 0px 3px; background:<?php echo"$bginput2";?>;font-size:<?php echo"$schriftinput2";?>;height:<?php echo"$hoeheinput2";?>;color:<?php echo"$inputfarbe2";?>;border-color:<?php echo"$inputborder2";?>;">

</td></tr></table>

<?php  } if($smilies=="an") { ?>

<table><tr><td>

<a href="#" onclick="javascript:smilie(':)')"><img src="smilies/z01.gif"  border="0"></a>
</td><td>
<a href="#" onclick="javascript:smilie(';)')"><img src="smilies/z02.gif" border="0"></a>
</td><td>
<a href="#" onclick="javascript:smilie('8)')"><img src="smilies/z03.gif" border="0"></a>
</td><td>
<a href="#" onclick="javascript:smilie(':P')"><img src="smilies/z04.gif" border=0"></a>
</td><td>
<a href="#" onclick="javascript:smilie(':D')"><img src="smilies/z05.gif" border=0"></a>
</td><td>
<a href="#" onclick="javascript:smilie(':(')"><img src="smilies/z07.gif" border=0"></a>
</td><td>
<a href="#" onclick="javascript:smilie(':shock:')"><img src="smilies/z08.gif" border=0"></a>
</td><td>
<a href="#" onclick="javascript:smilie(':roll:')"><img src="smilies/z09.gif" border=0"></a>
</td><td>
<a href="#" onclick="javascript:smilie(':lol:')"><img src="smilies/z10.gif" border=0"></a>
</td><td>
<a href="#" onclick="javascript:smilie(':angry:')"><img src="smilies/z11.gif" border="0"></a>
</td>
</tr></table>

<?php  } ?>

<table width="115"><tr><td align="center">

<?php  if($cookie_check_abicalypse=="") { ?>
<input type="button" name="submit_sb" value="Eintrag absenden" size="60" class="submit" style="background:<?php echo"$bgsubmit";?>;font-size:<?php echo"$schriftsubmit";?>;width:<?php echo"$submitlaenge";?>;height:<?php echo"$hoehesubmit";?>;color:<?php echo"$schriftsubmit2";?>;border-color:<?php echo"$submitborder";?>;">


<?php  } else { ?>

<input type="submit" name="submit_sb" value="Eintrag absenden" size="60" class="submit" style="background:<?php echo"$bgsubmit";?>;font-size:<?php echo"$schriftsubmit";?>;width:<?php echo"$submitlaenge";?>;height:<?php echo"$hoehesubmit";?>;color:<?php echo"$schriftsubmit2";?>;border-color:<?php echo"$submitborder";?>;">

<?php  } ?>
</td></tr></table>

</form>
