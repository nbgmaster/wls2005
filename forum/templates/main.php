  <tr>

    <td class="tablea">

<<<<<<< HEAD
    <img src="images/templates/<?php  echo"$template/$img_newposts"; ?>">

    </td>

    <td class="tableb" onclick="location.href='index.php?f=<?php  echo"".$row_forums["id"].""; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">
     
    <font class="title"><b>
    <?php  echo"".$row_forums["forum"].""; ?>
    </b></font>
    <br>

    <?php   echo"".$row_forums["description"].""; ?>
=======
    <img src="images/templates/<? echo"$template/$img_newposts"; ?>">

    </td>

    <td class="tableb" onclick="location.href='index.php?f=<? echo"".$row_forums["id"].""; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">
     
    <font class="title"><b>
    <? echo"".$row_forums["forum"].""; ?>
    </b></font>
    <br>

    <?  echo"".$row_forums["description"].""; ?>
>>>>>>> af2fff1... version1
          
    </td>

    <td class="tablea" align="center">

<<<<<<< HEAD
    <?php 
=======
    <?
>>>>>>> af2fff1... version1

      if ($mods != "")  {  

          $modcounter = "1"; 

          foreach ($mods as $modnames)  { 

                   echo"$modnames"; 

                   if ($modcounter != $modnumbers)  { 

                       echo" <br> "; }

                       $modcounter = $modcounter + 1;

                   }   

          echo"</b>"; 

      } 

      else  { 

             echo"keine"; 

      }

    ?>


    </td>
           
    <td class="tableb" align="center">
<<<<<<< HEAD
    <?php  echo"$topic"; ?>
    </td>

    <td class="tablea" align="center">
    <?php  echo"$article"; ?>
    </td>

    <td class="tableb" align="center">
    <?php   if($last_article2 == "0")  { ?>
    noch keine Beiträge <br> vorhanden
                    
    <?php  } else {

    if ($lastuser_id != "0")  { ?>

    <a href="index.php?do=profile&user_id=<?php  echo"$last_user_id"; ?>">

    <?php  } ?>

    <b><?php  echo"$last_user_name"; ?></b>

    <?php  if ($lastuser_id != "0")  { ?> </a> <?php  } ?>

    <br> am <?php  echo"$current_date"; ?>,<br> <?php  echo"$current_time"; ?> Uhr

    <a href="<?php  echo"$show_link"; ?>"><img src="images/templates/<?php  echo"$template"; ?>/last_reply.gif" border="0"></a>
    <?php  } ?>
=======
    <? echo"$topic"; ?>
    </td>

    <td class="tablea" align="center">
    <? echo"$article"; ?>
    </td>

    <td class="tableb" align="center">
    <?  if($last_article2 == "0")  { ?>
    noch keine Beiträge <br> vorhanden
                    
    <? } else {

    if ($lastuser_id != "0")  { ?>

    <a href="index.php?do=profile&user_id=<? echo"$last_user_id"; ?>">

    <? } ?>

    <b><? echo"$last_user_name"; ?></b>

    <? if ($lastuser_id != "0")  { ?> </a> <? } ?>

    <br> am <? echo"$current_date"; ?>,<br> <? echo"$current_time"; ?> Uhr

    <a href="<? echo"$show_link"; ?>"><img src="images/templates/<? echo"$template"; ?>/last_reply.gif" border="0"></a>
    <? } ?>
>>>>>>> af2fff1... version1

    </td>

  </tr>
