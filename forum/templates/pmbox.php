<script language="JavaScript" type="text/javascript" src="./javascript/form_del_pm.js"></script>

<<<<<<< HEAD
<form name="pm_form" action="index.php?do=<?php  echo"$pmbox4"; ?>&sec=delete" method="post" onSubmit="return checkBoxes();">
=======
<form name="pm_form" action="index.php?do=<? echo"$pmbox4"; ?>&sec=delete" method="post" onSubmit="return checkBoxes();">
>>>>>>> af2fff1... version1
 
 <tr>

    <td class="tablea" align="center" width="70">

<<<<<<< HEAD
    <img src="images/templates/<?php  echo"$template/$msg_status"; ?>">

    </td>

    <td class="tableb" onclick="location.href='index.php?do=<?php  echo"$pmbox4"; ?>&sec=read&m_id=<?php  echo"".$row_messages["id"].""; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 

    <b><?php  echo"".$row_messages["title"].""; ?></b>
=======
    <img src="images/templates/<? echo"$template/$msg_status"; ?>">

    </td>

    <td class="tableb" onclick="location.href='index.php?do=<? echo"$pmbox4"; ?>&sec=read&m_id=<? echo"".$row_messages["id"].""; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> 

    <b><? echo"".$row_messages["title"].""; ?></b>
>>>>>>> af2fff1... version1

    </td>

    <td class="tablea" align="center" width="110">

<<<<<<< HEAD
    <a href="index.php?do=profile&user_id=<?php  echo"$msg_user_id"; ?>"><?php  echo"$msg_user_name"; ?></a>
=======
    <a href="index.php?do=profile&user_id=<? echo"$msg_user_id"; ?>"><? echo"$msg_user_name"; ?></a>
>>>>>>> af2fff1... version1

    </td>

    <td class="tableb" align="center" width="140">

<<<<<<< HEAD
    <?php  echo"$pm_time"; ?> Uhr
=======
    <? echo"$pm_time"; ?> Uhr
>>>>>>> af2fff1... version1

    </td>

    <td class="tablea" align="center" width="50">

<<<<<<< HEAD
    <input type="checkbox" name="del_id[]" value="<?php  echo"".$row_messages["id"].""; ?>">
=======
    <input type="checkbox" name="del_id[]" value="<? echo"".$row_messages["id"].""; ?>">
>>>>>>> af2fff1... version1

    </td>

  </tr>
