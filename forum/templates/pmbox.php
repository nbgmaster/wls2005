<script language="JavaScript" type="text/javascript" src="./javascript/form_del_pm.js"></script>


<form name="pm_form" action="index.php?do=<?php  echo"$pmbox4"; ?>&sec=delete" method="post" onSubmit="return checkBoxes();">

<form name="pm_form" action="index.php?do=<? echo"$pmbox4"; ?>&sec=delete" method="post" onSubmit="return checkBoxes();">

 
 <tr>

    <td class="tablea" align="center" width="70">


    <img src="images/templates/<?php  echo"$template/$msg_status"; ?>">

    </td>

    <td class="tableb" onclick="location.href='index.php?do=<?php  echo"$pmbox4"; ?>&sec=read&m_id=<?php  echo"".$row_messages["id"].""; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 

    <b><?php  echo"".$row_messages["title"].""; ?></b>

    <img src="images/templates/<? echo"$template/$msg_status"; ?>">

    </td>

    <td class="tableb" onclick="location.href='index.php?do=<? echo"$pmbox4"; ?>&sec=read&m_id=<? echo"".$row_messages["id"].""; ?>';" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> 

    <b><? echo"".$row_messages["title"].""; ?></b>


    </td>

    <td class="tablea" align="center" width="110">


    <a href="index.php?do=profile&user_id=<?php  echo"$msg_user_id"; ?>"><?php  echo"$msg_user_name"; ?></a>

    <a href="index.php?do=profile&user_id=<? echo"$msg_user_id"; ?>"><? echo"$msg_user_name"; ?></a>


    </td>

    <td class="tableb" align="center" width="140">


    <?php  echo"$pm_time"; ?> Uhr

    <? echo"$pm_time"; ?> Uhr


    </td>

    <td class="tablea" align="center" width="50">


    <input type="checkbox" name="del_id[]" value="<?php  echo"".$row_messages["id"].""; ?>">

    <input type="checkbox" name="del_id[]" value="<? echo"".$row_messages["id"].""; ?>">


    </td>

  </tr>
