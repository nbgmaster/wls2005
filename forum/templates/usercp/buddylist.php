  <tr>


    <td class="tableb" align="left" onclick="location.href='index.php?do=profile&user_id=<?php  echo"$f_userid"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <b> <?php  echo"$f_sorted"; ?> </b>

    <td class="tableb" align="left" onclick="location.href='index.php?do=profile&user_id=<? echo"$f_userid"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <b> <? echo"$f_sorted"; ?> </b>


    </td>

    <td class="tablea" align="center" width="40">
  

    <img src="images/templates/<?php  echo"$template"; ?>/user_online.gif" border="0">

    <img src="images/templates/<? echo"$template"; ?>/user_online.gif" border="0">


    </td>

    <td class="tableb" align="center" width="100">


    <a href="index.php?do=newpm&user_id=<?php  echo"$f_userid"; ?>"><img src="images/templates/<?php  echo"$template"; ?>/icon_pm.gif" border="0"></a>

    <a href="index.php?do=newpm&user_id=<? echo"$f_userid"; ?>"><img src="images/templates/<? echo"$template"; ?>/icon_pm.gif" border="0"></a>


    </td>

    <td class="tablea" align="center" width="100">


    <a href="index.php?do=usercp&sec=<?php  echo"$sec"; ?>&del_id=<?php echo"$f_userid"; ?>">

    <img src="images/templates/<?php  echo"$template"; ?>/icon_delete.gif" border="0">   

    <a href="index.php?do=usercp&sec=<? echo"$sec"; ?>&del_id=<?echo"$f_userid"; ?>">

    <img src="images/templates/<? echo"$template"; ?>/icon_delete.gif" border="0">   


    </a>
 
    </td>

  </tr>