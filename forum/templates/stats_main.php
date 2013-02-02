     <tr>

         <td>

<<<<<<< HEAD
         <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

         <a href="<?php  echo"$show_link"; ?>"><?php  echo"$last_thread"; ?></a>

         </td>

         <td width="110"><a href="index.php?do=profile&user_id=<?php  echo"$row_n_user[UserID]"; ?>"><?php  echo"$row_n_user[UserName]"; ?></a></td>
         <td width="90">

<?php  
=======
         <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

         <a href="<? echo"$show_link"; ?>"><? echo"$last_thread"; ?></a>

         </td>

         <td width="110"><a href="index.php?do=profile&user_id=<? echo"$row_n_user[UserID]"; ?>"><? echo"$row_n_user[UserName]"; ?></a></td>
         <td width="90">

<? 
>>>>>>> af2fff1... version1
                       if ($minutes == "0" && $hours == "0")  { echo"$secondes Sekunden"; } else {
echo"$hours h $minutes min";  } ?>

         </td>
<<<<<<< HEAD
         <td width="25" align="right"><?php  echo"$row_n_threads[hits]"; ?></td>
=======
         <td width="25" align="right"><? echo"$row_n_threads[hits]"; ?></td>
>>>>>>> af2fff1... version1

      </tr>
