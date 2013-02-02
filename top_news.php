<table cellspacing="0" cellpadding="0">

<tr><td background="gfx/top_news_01.gif" width="320" height="27">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

die letzten Neuigkeiten

</td></tr>
<tr><td background="gfx/top_news_02.gif" width="320" height="103" align="center">

<table width="100%"><tr><td width="10">&nbsp;</td>

<td>
<?php 
$news_show = mysql_query("select * from $news_tblname ORDER BY id DESC LIMIT 7");

  while($news_row = mysql_fetch_row($news_show)) {
?>
<img src="images/arrow_r.gif"> <b><?php echo"$news_row[5]";?></b>  &nbsp;<?php echo"<a href=index.php?page=news#news$news_row[0]>$news_row[2]</a>";?><br>

<?php  } ?>
	
</td></tr></table>
	 	
</td></tr>
<tr><td background="gfx/top_news_03.gif" width="320" height="30">

</td></tr></table>