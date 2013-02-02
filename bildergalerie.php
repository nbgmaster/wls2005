<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1
include('config.php');


if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 


$g_show = mysql_query("select * from wls_gallery WHERE id='$g_id'");

    while($g_row = mysql_fetch_row($g_show)) {  

$gallery=$g_row[1]; 

}

$g_show2 = mysql_query("select * from wls_gallery_$gallery");
$reiheng = mysql_num_rows($g_show2);

$p_id2=$p_id-1;
$p_id3=$p_id+1;

if($p_id > "1") {  

$blubb2="gallery/$gallery/images/$p_id2.jpg";

$size2 = getimagesize($blubb2);

if($browser!="sonstigerBrowser") {  $width2=$size2[0]+27; $width2b=$size2[0]+33; }
else { $width2=$size2[0]; $width2b=$size2[0]+6; }


$height2=$size2[1]+25;

$height2b=$size2[1]+75;

if($height2 > 550) { $height2="550"; $height2b="550"; $width2=$width2+16; $width2b=$width2b+16;  }

}

if($p_id < $reiheng) {  

$blubb3="gallery/$gallery/images/$p_id3.jpg";

$size3 = getimagesize($blubb3);


if($browser!="sonstigerBrowser") {  $width3=$size3[0]+27; $width3b=$size3[0]+33; }
else { $width3=$size3[0]; $width3b=$size3[0]+6; }


$height3=$size3[1]+25;

$height3b=$size3[1]+75;

if($height3 > 550) { $height3="550"; $height3b="550"; $width3=$width3+16; $width3b=$width3b+16; }

}


if($size3[0] < 500) {  $width3b="620"; $width3="620"; $height3b="535"; $height3="535";}

if($size2[0] < 500) { $width2b="620"; $width2="620";  $height2b="535"; $height2="535";  }

?>
<html><head><title>Abicalypse2005.de Gallery</title>
<link rel="stylesheet" href="stylesheets/style_main.css">
<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>
</head>
<body bgcolor='#ffc08a' onload='focus()' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
<meta http-equiv='imagetoolbar' content='no'>
<center>   
<table cellpadding='0' cellspacing='0'><tr><td align='center'>
<table cellpadding='0' cellspacing='0' width=600><tr><td width=20></td><td><img src=images/arrow_r.gif> <b>Navigation:</b></td>
<td align=center>
<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1

if($p_id > "1") {  


echo"<a onclick='javascript:parent.window.resizeTo($width2b,$height2b)' href=\"javascript:center_position($width2,$height2,'bildergalerie.php?g_id=$g_id&p_id=$p_id2','window')\"><img src=images/linksnavi.gif border=0></a>"; 

}

?></td><td align=center>
<<<<<<< HEAD
&nbsp;&nbsp;Bild <?php  echo"<b>$p_id</b> von $reiheng"; ?>&nbsp;&nbsp;
</td><td align=center>
<?php  
=======
&nbsp;&nbsp;Bild <? echo"<b>$p_id</b> von $reiheng"; ?>&nbsp;&nbsp;
</td><td align=center>
<? 
>>>>>>> af2fff1... version1
if($p_id < $reiheng) {  
echo"<a onclick='javascript:parent.window.resizeTo($width3b,$height3b)' href=\"javascript:center_position($width3,$height3,'bildergalerie.php?g_id=$g_id&p_id=$p_id3','window')\"><img src=images/rechtsnavi.gif border=0></a>"; 
}
?>
</td><td align=right class=portrait>Zum Schliessen auf das Bild klicken!</td></tr></table>

<<<<<<< HEAD
<?php  echo"<img onclick='self.close()' src=gallery/$gallery/images/$p_id.jpg>"; ?>
=======
<? echo"<img onclick='self.close()' src=gallery/$gallery/images/$p_id.jpg>"; ?>
>>>>>>> af2fff1... version1
</td></tr></table>
</body></html>


<<<<<<< HEAD
<?php  }
=======
<? }
>>>>>>> af2fff1... version1
