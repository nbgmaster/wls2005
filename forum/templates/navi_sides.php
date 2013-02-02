
<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1">
               
  <tr>

  <?php    if ($check_rows > $break)  {   ?>

<table width="<? echo"$width"; ?>" cellpadding="0" cellspacing="1">
               
  <tr>

  <?   if ($check_rows > $break)  {   ?>


    <td>

    <table cellspacing="0" cellpadding="0">
               
      <tr>

        <td style="line-height:25px;">

        <b>Seite</b> 

                 <select class="select" style="width:40px;" ONCHANGE="location = this.options[this.selectedIndex].value;">


                 <?php  

                   for ($count = 1;$count <= $maxpages; $count++)  {

                        echo"<option value='$side_link&page=$count' ";

                        if ($count == $page)  { 

                            echo"selected";
 
                        }

                        echo">$count</option>";

                   }

                   echo"</select>";
    
                   echo" von $maxpages";

                   echo" $navi_first $navi_left4 $navi_left3 $navi_left2 $navi_left $navi_actual $navi_right $navi_right2 $navi_right3 $navi_right4 $navi_last";

                   ?>            

             </td>

           </tr>

         </table>
 
       </td>


       <?php  

       <? 


       } 
 
       if ($f != "" && $t == "")  {  ?>

       <td align="right" width="180">


       <?php   if ($f_status_permission == "1" && $granted_write == "1")  { ?>

       <a href="index.php?f=<?php  echo"$f"; ?>&do=newtopic">

       <img src="images/templates/<?php  echo"$template"; ?>/icon_newthread.gif" border="0">

       </a>

       <?php  }  else  {  ?>

       <img src="images/templates/<?php  echo"$template"; ?>/icon_closed.gif" border="0">

       <?php  } ?>

       </td>

       <?php  } if ($t != "" && $granted_write == "1") { ?>

       <td align="right" width="260">

       <a href="index.php?f=<?php  echo"$f"; ?>&do=newtopic">

       <img src="images/templates/<?php  echo"$template"; ?>/icon_newthread.gif" border="0">

       <?  if ($f_status_permission == "1" && $granted_write == "1")  { ?>

       <a href="index.php?f=<? echo"$f"; ?>&do=newtopic">

       <img src="images/templates/<? echo"$template"; ?>/icon_newthread.gif" border="0">

       </a>

       <? }  else  {  ?>

       <img src="images/templates/<? echo"$template"; ?>/icon_closed.gif" border="0">

       <? } ?>

       </td>

       <? } if ($t != "" && $granted_write == "1") { ?>

       <td align="right" width="260">

       <a href="index.php?f=<? echo"$f"; ?>&do=newtopic">

       <img src="images/templates/<? echo"$template"; ?>/icon_newthread.gif" border="0">


       </a> 

       &nbsp;


       <?php  if ($f_status == "1")  { ?>

       <a href="index.php?t=<?php  echo"$t"; ?>&do=reply">
 
       <img src="images/templates/<?php  echo"$template"; ?>/icon_reply.gif" border="0">

       </a>

       <?php  } else { ?>

       <img src="images/templates/<?php  echo"$template"; ?>/icon_closed.gif" border="0">

       <?php  } ?>

       </td>

       <?php  } if($do == "inbox" or $do == "outbox") { ?>

       <td align="right" width="276">

       <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">
   
       Speicherplatz: <?php  echo"$hilight_max $message_numbers"; ?> von <?php  echo"$max_pm $hilight_max"; ?> Plätzen belegt

       </td>

       <?php  } ?>

       <? if ($f_status == "1")  { ?>

       <a href="index.php?t=<? echo"$t"; ?>&do=reply">
 
       <img src="images/templates/<? echo"$template"; ?>/icon_reply.gif" border="0">

       </a>

       <? } else { ?>

       <img src="images/templates/<? echo"$template"; ?>/icon_closed.gif" border="0">

       <? } ?>

       </td>

       <? } if($do == "inbox" or $do == "outbox") { ?>

       <td align="right" width="276">

       <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">
   
       Speicherplatz: <? echo"$hilight_max $message_numbers"; ?> von <? echo"$max_pm $hilight_max"; ?> Plätzen belegt

       </td>

       <? } ?>


       </td>

    </tr>

</table>