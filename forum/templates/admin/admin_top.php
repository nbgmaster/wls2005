
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td class="cellbg">


    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <a href="index.php?do=admin">Admin Center</a>

    <?php  if ($admin_navi != "")  { ?>

    &nbsp;

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <?php  echo"$admin_navi"; ?>

    <?php  } if ($admin_navi2 != "") { ?>
        
    &nbsp;

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <?php  echo"$admin_navi2"; ?>

    <?php  } ?>

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <a href="index.php?do=admin">Admin Center</a>

    <? if ($admin_navi != "")  { ?>

    &nbsp;

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <? echo"$admin_navi"; ?>

    <? } if ($admin_navi2 != "") { ?>
        
    &nbsp;

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <? echo"$admin_navi2"; ?>

    <? } ?>


    </td>

  </tr>

</table>

<br>