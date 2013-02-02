<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

function getSeiten($pager, $cat_id, $thread_id)

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

if($anz > $itperpage) {

if ($pager > 1){ $pager3=$pager-1;
$navi_left = "<strong><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$pager3>Vorherige Seite</a></strong>&nbsp;";
}
if ($pager < $maxpages) { $pager2=$pager+1;
$navi_right = "<strong><img src=images/arrow_r.gif> <a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$pager2>Nächste Seite</a></strong>";
$navi_last = "... <img src=images/arrow_r.gif><a href=index.php?page=forum&cat_id=$cat_id&thread_id=$thread_id&pager=$maxpages><b> Seite $maxpages</b></a>";

}}


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

}}

echo $show2 = getSeiten($pager,$cat_id,$thread_id);
