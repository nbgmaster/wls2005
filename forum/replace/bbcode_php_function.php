
<?php 

  // Replace PHP CODE

  function highlight_php($string)  {

  include("config.php"); 
  include("stylesheets/style.php");

  $Line = explode("\n",$string);

  $string = str_replace("&lt;?&lt;?", "&lt;?", $string);
  $string = str_replace("?&gt;?&gt;", "?&gt;", $string);
  $string = str_replace("\\", "", $string);
  $string = str_replace("\n\r", "", $string);
  $string = str_replace("<br />", "", $string);
  $string = str_replace("&lt;", "<", $string);
  $string = str_replace("&gt;", ">", $string);

  for($i=1;$i<=count($Line);$i++)
  {
   $line .= "&nbsp;".$i."&nbsp;<br>";
  }
  
  ob_start();
  highlight_string($string);
  $string = htmlentities($string); 
  $Code=ob_get_contents();
  ob_end_clean();

 
  $header='<table cellpadding="1" cellspacing="0" width="100%">
   <tr>
     <td width="100%" class="code" colspan="2"  style="border-style: solid; border-width:1px; border-color: black; background-color: #'.$cell_bg02.'; color:'.$fontcolor_title.'; font-weight:bold;">&nbsp;Php-Code:</td>
   </tr>
   <tr>
     <td width="3%" class="code" valign="top" style="background-color: #'.$cell_bg02.'; border-style: solid; font-size : 12px; border-width:1px; border-color:  #'.$bordercolor.';"><code><font color='.$fontcolor_title.'>'.$line.'</font></code></td>
     <td width="97%" class="code" valign="top" style="background-color: #FFFFFF;border-style: solid;  font-size : 12px; border-width:1px; border-color: #'.$bordercolor.';"><div style="white-space: nowrap; overflow: auto;"><code>';
  
  $footer=$Code.'</div></code></td>
   </tr>
  </table>';

  return $header.$footer;
} 
