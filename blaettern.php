<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>
<?php 


function getUser($pager, $cat_id, $thread_id, $save_id)

{		

include('config.php');


	$sql = " select * from wls_forum_posts WHERE cat_id='$cat_id' && thread_id='$thread_id' order by id";	

$res = mysql_query($sql);	
$anz = mysql_num_rows($res);

$maxpages_int   = (int) ($anz/$itperpage);
$maxpages_float = $anz/$itperpage;	   

if ( $maxpages_float > $maxpages_int ) 
{		
$maxpages = (int)(($anz/$itperpage)+1);	}
else {	$maxpages = (int)(($anz/$itperpage));		}

	if ($pager > $maxpages) $pager = $maxpages;

	$sql3 = mysql_query("select * from wls_forum_posts WHERE cat_id='$cat_id' && thread_id='$thread_id' order by id limit ".(($pager-1)*$itperpage).",$itperpage");


	if($anz > 0) {		
	
	
$navi_left       = ""; 
$navi_right      = ""; 		
$userliste       = ""; 

$maxpages2=$maxpages-1;

if($anz > $itperpage) {

if ($pager > 1){ $pager3=$pager-1;
$navi_left = "<strong><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$pager3>Vorherige Seite</a></strong>&nbsp;";
}
if ($pager < $maxpages) { $pager2=$pager+1;
$navi_right = "<strong><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$pager2>Nächste Seite</a></strong>";

}
if ($pager < $maxpages2) { 
$navi_last = "... <img src=images/arrow_r.gif><a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$maxpages><b> Seite $maxpages</b></a>";
}
}


echo"<table width=700 cellspacing=0 cellpadding=0><tr><td>";

echo"<table border='0' cellspacing='0' cellpadding='0'><tr><td>";
echo"<b>Seite</b> ";

echo"<select class=select style=\"width:40px;\" ONCHANGE=\"location = this.options[this.selectedIndex].value;\">";

for($blom=1;$blom<=$maxpages;$blom++) {

echo"<option value=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$blom ";

if($blom==$pager) { echo"selected"; }
echo">$blom</option>"; }

echo"</select>";

echo" von $maxpages";


echo" $navi_left $navi_right  $navi_last";


echo"</td></tr></table><input type=hidden name=page_no value=\"$page\">";
echo"</td>";
echo"<td align=right><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&do=reply><b>Antwort erstellen&nbsp;</b></a></td>";
echo"</tr></table>";


while ($r_posts = mysql_fetch_row($sql3)) {



if($save_id=="$r_posts[3]") { 

$linkedit="<a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&do=edit&p_id=$r_posts[0]>";
$linkedit2="</a>"; }

else { $linkedit=""; $linkedit2=""; }	 

include('forum_replace2.php');

$post_name = mysql_query("select * from wls_login WHERE UserID='$r_posts[3]'"); 
$tztz=mysql_num_rows($post_name);
$avatar=="";



if($tztz=="0") {  $muhi="1"; $zuu=""; $regdate=""; $avatar2="";
$usern="*user deleted*"; }

else {

         while($r_name = mysql_fetch_row($post_name)) {  



$zuu=$r_name[0]; 
$usern="$r_name[1]"; $regdate=$r_name[5]; $hp=$r_name[12]; $signatur=$r_name[30];
$avatar2=$r_name[14];
}}



$anzahlp = mysql_query("select * from wls_forum_posts WHERE user_id='$r_posts[3]'");

 $anzahlp2 = mysql_num_rows($anzahlp);


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


$uhrzeit2 = date("H:i",$r_posts[5]);
$datum2 = date("d.m.Y",$r_posts[5]);

if($r_posts[3]==19) { $winter="König Winter<br>"; } else { $winter=""; }

if($anzahlp2 < 20)  { $sterne="<img src=images/star.gif><br>Made<br>"; }
if($anzahlp2 > 19 && $anzahlp2 < 50) { $sterne="<img src=images/star.gif><img src=images/star.gif><br>Sträfling<br> "; }
if($anzahlp2 > 49 && $anzahlp2 < 100) { $sterne="<img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><br>Weichkeks<br> "; }
if($anzahlp2 > 99 && $anzahlp2 < 200) { $sterne="<img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><br>Hausmeistergehilfe<br> "; }
if($anzahlp2 > 199) { $sterne="<img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><img src=images/star.gif><br>Besserwisser<br> "; }

$r_posts[4] = str_replace("[COLOR=", "<FONT COLOR=", $r_posts[4]);
$r_posts[4] = str_replace("[/COLOR]", "</FONT>", $r_posts[4]);

$r_posts[4] = str_replace("[SIZE=1]", "<FONT SIZE=1>", $r_posts[4]);
$r_posts[4] = str_replace("[SIZE=2]", "<FONT SIZE=2>", $r_posts[4]);
$r_posts[4] = str_replace("[SIZE=3]", "<FONT SIZE=3>", $r_posts[4]);
$r_posts[4] = str_replace("[SIZE=4]", "<FONT SIZE=4>", $r_posts[4]);

$r_posts[4] = str_replace("[/SIZE]", "</FONT>", $r_posts[4]);

$r_posts[4] = str_replace("[QUOTE=", "<table bgcolor=#ffffff cellpadding=5 cellspacing=0 width=500><tr><td class=top8 style=line-height:20px;><i> Zitat von ", $r_posts[4]);
$r_posts[4] = str_replace("]", "</i><br>", $r_posts[4]);
$r_posts[4] = str_replace("[/QUOTE", "</i></td></tr></table>", $r_posts[4]);
$r_posts[4] = str_replace("[", "", $r_posts[4]);

$r_posts[4] = str_replace("&lt;", "<", $r_posts[4]);
$r_posts[4] = str_replace("&gt;", ">", $r_posts[4]);



if($regdate=="") { $datum_reg="-"; }
else {
$datum_reg = date("d.m.Y",$regdate);  }

include('forum_replace2.php');

if($signatur!="") { $signatur="<table cellspacing=0 cellpadding=0><tr>
<td style=line-height:15px;>_______________________<br>
$signatur
</td></tr></table>"; }


 if($r_posts[6]!="" && $r_posts[6]!="0") { 

$uhrzeited = date("H:i",$r_posts[6]);
$datumed = date("d.m.Y",$r_posts[6]);

$editt="<br><br><i><font class=small>zuletzt editiert am $datumed, $uhrzeited Uhr</font></i>";
 }  else { $editt=""; }

$userliste ="$userliste<a name=$r_posts[0]></a>
<table width=690 cellpadding=2 cellspacing=5>
<tr><td width=150 valign=top style=\"border:1px solid #000000;\" bgcolor=#f8f8f8 align=center>
<table width=150 cellpadding=0 cellspacing=0><tr><td align=center>
<a href=\"javascript:center_position(400,400,'members.php?user_id=$zuu','window')\"><font size=2><b>$usern</b></font></a><br>$winter<br>$sterne
<br>$avatar
<p align=left>&nbsp;<img src=images/arrow_r.gif> Dabei seit: $datum_reg
<br>
&nbsp;<img src=images/arrow_r.gif> Beiträge: $anzahlp2

</td></tr></table>
</td><td style=\"border:1px solid #000000;\" bgcolor=#f7f7f7 valign=top>
<table cellspacing=2 style=\"border-bottom:1px solid #000000;\" cellpadding=0 width=100%><tr><td valign=middle>
&nbsp;<img src=images/arrow_r.gif> <font class=members>Beitrag erstellt am $datum2 um $uhrzeit2 Uhr</font></td>
<td align=right valign=middle>
<a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&do=reply&q_id=$r_posts[0]>
<img src=images/icon_quote.gif title=\"Beitrag zitieren\" border=0></a> 
$linkedit
<img src=images/icon_edit.gif title=\"Beitrag editieren\" border=0>$linkedit2&nbsp;</td>
</tr></table>

<table width=518 cellpadding=5 height=$soo><tr><td class=postsf valign=top>
$r_posts[4]

$editt
$signatur
</td></tr>


<tr><td valign=bottom align=right>
<a href=\"javascript:center_position(400,400,'members.php?user_id=$zuu','$usern')\"><img src=images/icon_profile.gif title=\"Profile anschauen\" border=0></a>
<a href=index.php?page=write_email&user_id=$zuu><img title=\"Email schreiben\" src=images/icon_email2.gif border=0></a>
<a href=index.php?page=user_pm&user_id=$zuu><img src=images/icon_pm2.gif title=\"Private Nachricht senden\" border=0></a>
<a href=http://$hp target=_blank><img src=images/icon_www2.gif title=\"Homepage von $usern anschauen\" border=0></a>

</td></tr>

</table>

</td></tr>

</table>";

 }}
	

return $userliste;

}

echo $show = getUser($pager,$cat_id,$thread_id,$save_id);
