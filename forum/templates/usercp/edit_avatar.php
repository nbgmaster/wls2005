<form name="usercp_form" action="index.php?do=usercp&sec=edit_avatar&module=change" method="post" enctype="multipart/form-data">

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="2" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="2" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td class="tableb" width="30%" align="center">

<<<<<<< HEAD
    <?php  if($userdata_avatar != "")  {  ?> 

    <img src="avatars/<?php  echo"$userdata_avatar"; ?>" style="border:<?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>;">

    <?php  } else { ?>

    <font class="big"><b>kein Avatar <br> hochgeladen</b></font>

    <?php  } ?>
=======
    <? if($userdata_avatar != "")  {  ?> 

    <img src="avatars/<? echo"$userdata_avatar"; ?>" style="border:<? echo"$bordergage"; ?>px solid #<? echo"$bordercolor"; ?>;">

    <? } else { ?>

    <font class="big"><b>kein Avatar <br> hochgeladen</b></font>

    <? } ?>
>>>>>>> af2fff1... version1

    </td>

    <td class="tablea" width="70%">

    <table>

      <tr>

        <td width="20%">&nbsp;</td>

        <td>

        <br>
 
<<<<<<< HEAD
        <?php  if($userdata_avatar != "") { ?>

        <img src=images/templates/<?php  echo"$template"; ?>/arrow_r.gif> <b>Bild löschen:</b> <input type="checkbox" value="1" name="del_avatar">

        <br><br>

        <?php  } ?>
  
        <img src=images/templates/<?php  echo"$template"; ?>/arrow_r.gif> <b>Neues Bild hochladen:</b>
=======
        <? if($userdata_avatar != "") { ?>

        <img src=images/templates/<? echo"$template"; ?>/arrow_r.gif> <b>Bild löschen:</b> <input type="checkbox" value="1" name="del_avatar">

        <br><br>

        <? } ?>
  
        <img src=images/templates/<? echo"$template"; ?>/arrow_r.gif> <b>Neues Bild hochladen:</b>
>>>>>>> af2fff1... version1

        <br><br>

        <input name="file" type="file" size="60">

        <br><br>

<<<<<<< HEAD
        <img src=images/templates/<?php  echo"$template"; ?>/arrow_r.gif> <b>Bild von einer URL laden:</b> 
=======
        <img src=images/templates/<? echo"$template"; ?>/arrow_r.gif> <b>Bild von einer URL laden:</b> 
>>>>>>> af2fff1... version1

        <br><br>

        <input name="url_file" type="text" size="60">

        <br><br>

<<<<<<< HEAD
        (max. <?php  echo"$avatar_max_width x $avatar_max_height Pixel, $avatar_max_size2 KB"; ?> | jpg, gif, bmp, png)
=======
        (max. <? echo"$avatar_max_width x $avatar_max_height Pixel, $avatar_max_size2 KB"; ?> | jpg, gif, bmp, png)
>>>>>>> af2fff1... version1

        <br><br>

        <input type="submit" name="send_data" value="Avatareinstellungen ändern">

        <br><br>

        </td>

        <td width="20%">&nbsp;</td>

      </tr>

    </table>

    </td>

  </tr>

</form>

</table>