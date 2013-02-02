  <tr>
 
<<<<<<< HEAD
    <?php  if($do == "members") { ?>

    <td class="tableb" align="left" onclick="location.href='index.php?do=profile&user_id=<?php  echo"".$row_members["UserID"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php   } else { ?>

    <td class="tableb" align="left" onclick="location.href='index.php?do=admin&sec=edit_user&user_id=<?php  echo"".$row_members["UserID"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php   } ?>

    <b> <?php  echo"".$row_members["UserName"].""; ?> </b>

    </td>

    <?php  if ($do != "admin")  { ?>

    <td class="tablea" align="center">

    <?php  echo"$formmailer"; ?>
  
    <img src="images/templates/<?php  echo"$template"; ?>/icon_email.gif" border="0">

    <?php  echo"$formmailer2"; ?>
=======
    <? if($do == "members") { ?>

    <td class="tableb" align="left" onclick="location.href='index.php?do=profile&user_id=<? echo"".$row_members["UserID"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?  } else { ?>

    <td class="tableb" align="left" onclick="location.href='index.php?do=admin&sec=edit_user&user_id=<? echo"".$row_members["UserID"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?  } ?>

    <b> <? echo"".$row_members["UserName"].""; ?> </b>

    </td>

    <? if ($do != "admin")  { ?>

    <td class="tablea" align="center">

    <? echo"$formmailer"; ?>
  
    <img src="images/templates/<? echo"$template"; ?>/icon_email.gif" border="0">

    <? echo"$formmailer2"; ?>
>>>>>>> af2fff1... version1

    </td>

    <td class="tableb" align="center">

<<<<<<< HEAD
    <?php  echo"$user_hp"; ?>

    <img src="images/templates/<?php  echo"$template"; ?>/icon_www.gif" border="0">

    <?php  echo"$user_hp2"; ?>
=======
    <? echo"$user_hp"; ?>

    <img src="images/templates/<? echo"$template"; ?>/icon_www.gif" border="0">

    <? echo"$user_hp2"; ?>
>>>>>>> af2fff1... version1

    </td>

    <td class="tablea" align="center">

<<<<<<< HEAD
    <a href="index.php?do=search&user_id=<?php  echo"".$row_members["UserID"].""; ?>"><img src="images/templates/<?php  echo"$template"; ?>/icon_search.gif" border="0"></a>
=======
    <a href="index.php?do=search&user_id=<? echo"".$row_members["UserID"].""; ?>"><img src="images/templates/<? echo"$template"; ?>/icon_search.gif" border="0"></a>
>>>>>>> af2fff1... version1

    </td>

    <td class="tableb" align="center">

<<<<<<< HEAD
    <a href="index.php?do=newpm&user_id=<?php  echo"".$row_members["UserID"].""; ?>"><img src="images/templates/<?php  echo"$template"; ?>/icon_pm.gif" border="0"></a>
=======
    <a href="index.php?do=newpm&user_id=<? echo"".$row_members["UserID"].""; ?>"><img src="images/templates/<? echo"$template"; ?>/icon_pm.gif" border="0"></a>
>>>>>>> af2fff1... version1

    </td>

    <td class="tablea" align="center">

<<<<<<< HEAD
    <?php  echo"$addbuddylink"; ?>

    <img src="images/templates/<?php  echo"$template"; ?>/icon_homie.gif" border="0"> 

    <?php  echo"$addbuddylink2"; ?>
=======
    <? echo"$addbuddylink"; ?>

    <img src="images/templates/<? echo"$template"; ?>/icon_homie.gif" border="0"> 

    <? echo"$addbuddylink2"; ?>
>>>>>>> af2fff1... version1
 
    </td>

    <td class="tableb" align="center">

<<<<<<< HEAD
    <?php  } else { ?>

    <td class="tablea" align="center">

    <?php  } ?>

    <?php  echo"$member_regdate"; ?>

    </td>

    <?php  if ($do != "admin")  { ?>

    <td class="tablea" align="center">

    <?php  } else { ?>

    <td class="tableb" align="center">

    <?php  } ?>

    <?php  echo"".$row_members["postnumbers"].""; ?>
=======
    <? } else { ?>

    <td class="tablea" align="center">

    <? } ?>

    <? echo"$member_regdate"; ?>

    </td>

    <? if ($do != "admin")  { ?>

    <td class="tablea" align="center">

    <? } else { ?>

    <td class="tableb" align="center">

    <? } ?>

    <? echo"".$row_members["postnumbers"].""; ?>
>>>>>>> af2fff1... version1

    </td>

  </tr>