
<?php 


echo"<table width=700 cellpadding=\"4\" cellspacing=0 border=\"0\">";

echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Nickname</td>";


echo"<td class=top3 bgcolor=#efefef><input type=\"text\" maxlength=20 name=\"nickname\" class=\"edit_p\" value=\"$prow[1]\"></td></tr>"; 



echo"<tr><td width=95 class=top2><b><font color=$color>Vorname</td>";


echo"<td class=top3><input type=\"text\" maxlength=\"20\" name=\"vorname\" class=\"edit_p\" value=\"$prow[7]\"></td></tr>"; 


echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Nachname</td>";


echo"<td class=top3 bgcolor=#efefef><input type=\"text\" maxlength=\"20\" name=\"nachname\" class=\"edit_p\" value=\"$prow[8]\"></td></tr>"; 



echo"<tr><td class=top2><b><font color=$color>Geschlecht</td>";


if($prow[6]=="") {

echo"<td class=top3>";

echo"<select name=\"geschlecht\" class=\"select\">";
echo"<option value=\"m\">männlich</option><option value=\"w\">weiblich</option>";
echo"</select>";

echo"</td></tr>"; 


} else {

echo"<td class=top3>";

echo"<select name=geschlecht class=select>";
echo"<option selected value=$prow[6]>";


if($prow[6]=="m") { 
echo"männlich";}

if($prow[6]=="w") {
echo"weiblich";}

echo"</option>";

if($prow[6]=="m") { 
echo"<option value=w>weiblich";}

if($prow[6]=="w") {
echo"<option value=m>männlich";}

echo"</option></select>";

echo"</td></tr>"; 

}


echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Passwort</td>";


echo"<td class=top3 bgcolor=#efefef><input type=\"password\" maxlength=\"20\" name=\"password\" class=\"edit_p\" value=\"$save_pass_abicalypse\"></td></tr>"; 


echo"<tr><td class=top2><b><font color=$color>Geburtstag</td>";

echo"<td class=top3>";

if($prow[9]=="" or $prow[10]=="" or $prow[11]=="") {

echo"<table cellspacing=0 cellpadding=0><tr><td>";
echo"<input type=\"text\" maxlength=\"2\" size=2 name=\"geburtstag\" class=\"geb\">&nbsp;.&nbsp;</td>";

echo"<td><input type=text size=2 name=geburtsmonat class=geb maxlength=\"2\">&nbsp;.&nbsp;";

echo"</td><td><input type=text size=4 name=geburtsjahr class=geb maxlength=\"4\"></td></tr></table>";

echo"</td></tr>"; 

} else {


echo"<table cellspacing=0 cellpadding=0><tr><td>";
echo"<input type=\"text\" maxlength=\"2\" size=2 name=\"geburtstag\" class=\"geb\" value=\"$prow[9]\">&nbsp;.&nbsp;</td><td>";

echo"<input type=\"text\"  maxlength=\"2\" size=2 name=\"geburtsmonat\" class=\"geb\" value=\"$prow[10]\">&nbsp;.&nbsp;";

echo"</td><td><input type=\"text\"  size=4 maxlength=\"4\" name=\"geburtsjahr\" class=\"geb\" value=\"$prow[11]\">";


echo"</td></tr></table></td></tr>";

}

echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Adresse (Wohnort, Straße, Postleitzahl, etc)</td>";

echo"<td class=top3 bgcolor=#efefef><input type=\"text\" maxlength=\"100\" name=\"adresse\" class=\"edit_p\" style=width:300px; value=\"$prow[18]\"></td></tr>"; 


if($save_status_ehe=="1") {


echo"<tr><td class=top2 bgcolor=#f8f8f8><b><font color=$color>Telefon/Handynummer </b><i>(nur für Ehemalige sichtbar)</i></td>";

echo"<td class=top3 bgcolor=#f8f8f8><input type=\"text\" maxlength=\"100\" name=\"telefon\" class=\"edit_p\" value=\"$prow[32]\"></td></tr>"; 

}

echo"<tr><td class=top2><b><font color=$color>Beruf</td>";

echo"<td class=top3><input type=\"text\" maxlength=\"40\" name=\"beruf\" class=\"edit_p\" value=\"$prow[19]\"></td></tr>"; 




echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Email</td>";


echo"<td class=top3 bgcolor=#efefef><input type=\"text\" maxlength=\"50\" name=\"email\" class=\"edit_p\" value=\"$prow[4]\"></td></tr>"; 


echo"<tr><td class=top2 width=375><b>Dürfen User Ihnen Emails per Formmailer schicken?</td>";


echo"<td class=top3><select size=\"1\" style=\"width:55px;\" scrolling=yes name=\"sichtbar\" class=select>";
echo"<option value=\"$prow[17]\" scrolling=\"yes\">$prow[17]</option>"; 

if($prow[17]=="ja") { $pussy="nein"; }

else { $pussy="ja"; }

echo"<option value=\"$pussy\" scrolling=\"yes\">$pussy</option>"; 
echo"</select></td></tr>";

echo"<input type=hidden name=check_email value=$prow[4]>";
echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Homepage</td>";


echo"<td class=top3 bgcolor=#efefef><input type=\"text\" maxlength=\"50\" name=\"hp\" class=\"edit_p\" value=\"$prow[12]\"></td></tr>"; 


echo"<tr><td class=top2><b><font color=$color>ICQ</td>";

if($prow[13]=="0") {

echo"<td class=top3><input type=\"text\" maxlength=\"15\" name=\"icq\" class=\"edit_p\" value=\"\"></td></tr>"; 
}

else {

echo"<td class=top3><input type=\"text\" maxlength=\"15\" name=\"icq\" class=\"edit_p\" value=\"$prow[13]\"></td></tr>"; 


}


echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Lieblingsessen</td>";

echo"<td class=top3 bgcolor=#efefef><input type=\"text\" maxlength=\"40\" name=\"essen\" class=\"edit_p\" value=\"$prow[20]\"></td></tr>"; 

echo"<tr><td class=top2><b><font color=$color>Lieblingsgetränk</td>";

echo"<td class=top3><input type=\"text\" maxlength=\"40\" name=\"trinken\" class=\"edit_p\" value=\"$prow[21]\"></td></tr>"; 

echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Lieblingsmusik</td>";

echo"<td class=top3 bgcolor=#efefef><input type=\"text\" maxlength=\"40\" name=\"musik\" class=\"edit_p\" value=\"$prow[22]\"></td></tr>"; 

echo"<tr><td class=top2><b><font color=$color>Lieblingsfilm</td>";

echo"<td class=top3><input type=\"text\" maxlength=\"40\" name=\"film\" class=\"edit_p\" value=\"$prow[23]\"></td></tr>"; 

echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Mein Auto</td>";

echo"<td class=top3 bgcolor=#efefef><input type=\"text\" maxlength=\"20\" name=\"auto\" class=\"edit_p\" value=\"$prow[24]\"></td></tr>"; 

echo"<tr><td class=top2><b><font color=$color>Mein Handy</td>";

echo"<td class=top3><input type=\"text\" maxlength=\"20\" name=\"handy\" class=\"edit_p\" value=\"$prow[25]\"></td></tr>"; 

echo"<tr><td class=top2 bgcolor=#efefef><b><font color=$color>Kneipen, Discos</td>";

echo"<td class=top3 bgcolor=#efefef><input type=\"text\" maxlength=\"30\" name=\"disco\" class=\"edit_p\" value=\"$prow[27]\"></td></tr>"; 

echo"<tr><td class=top4><b><font color=$color>Hobbys</td>";

echo"<td class=top5><input type=\"text\" maxlength=\"100\" name=\"hobbys\" class=\"edit_p\" value=\"$prow[26]\"></td></tr>"; 


echo"</table>";



