<script language="JavaScript" type="text/javascript" src="./javascript/form_rank.js"></script>


<<<<<<< HEAD
<form action="index.php?do=admin&sec=ranks&module=modify&r_id=<?php  echo"$r_id"; ?>" method="post" name="rankform" onsubmit="return checkForm(this)">

<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
=======
<form action="index.php?do=admin&sec=ranks&module=modify&r_id=<? echo"$r_id"; ?>" method="post" name="rankform" onsubmit="return checkForm(this)">

<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="cellbg" align="center">

    Benutzerrang bearbeiten

    </td>

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="tableb" width="50%">Rangname</td>

<<<<<<< HEAD
    <td class="tablea" width="50%"><input class="input" type="text" name="rankname" value="<?php  echo"$row_rank_data[r_rankname]"; ?>" maxlength="50"></td>
=======
    <td class="tablea" width="50%"><input class="input" type="text" name="rankname" value="<? echo"$row_rank_data[r_rankname]"; ?>" maxlength="50"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Benutzergruppe</td>

    <td class="tablea">

    <select name="group">

<<<<<<< HEAD
    <?php  
=======
    <? 
>>>>>>> af2fff1... version1

    $query_groups = mysql_query("SELECT * from $groups_tblname Order by id");

    while ($row_groups = mysql_fetch_assoc($query_groups))  {  ?>

<<<<<<< HEAD
    <option value="<?php  echo"$row_groups[id]"; ?>"

    <?php  if ($row_groups[id] == $row_rank_data[r_group])  { echo"selected"; } ?>

    ><?php  echo"$row_groups[groupname]"; ?></option>

    <?php  } ?>
=======
    <option value="<? echo"$row_groups[id]"; ?>"

    <? if ($row_groups[id] == $row_rank_data[r_group])  { echo"selected"; } ?>

    ><? echo"$row_groups[groupname]"; ?></option>

    <? } ?>
>>>>>>> af2fff1... version1

    </select>

  </td>

  </tr>

  <tr>

    <td class="tableb">Ab Beiträge</td>

    <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="minposts" value="<?php  echo"$row_rank_data[r_minposts]"; ?>">
=======
         <input class="input" type="text" name="minposts" value="<? echo"$row_rank_data[r_minposts]"; ?>">
>>>>>>> af2fff1... version1

  </td>

  </tr>

  <tr>

<<<<<<< HEAD
    <td class="tableb">Anzahl Sterne <img src="images/templates/<?php  echo"$template"; ?>/star.gif"></td>
=======
    <td class="tableb">Anzahl Sterne <img src="images/templates/<? echo"$template"; ?>/star.gif"></td>
>>>>>>> af2fff1... version1

    <td class="tablea">

    <select name="stars">

    <option value="1"
<<<<<<< HEAD
    <?php  if ($row_rank_data[r_stars] == "1")  { echo" selected"; } ?>
    >1</option>

    <option value="2"
    <?php  if ($row_rank_data[r_stars] == "2")  { echo" selected"; } ?>
    >2</option>

    <option value="3"
    <?php  if ($row_rank_data[r_stars] == "3")  { echo" selected"; } ?>
    >3</option>

    <option value="4"
    <?php  if ($row_rank_data[r_stars] == "4")  { echo" selected"; } ?>
    >4</option>

    <option value="5"
    <?php  if ($row_rank_data[r_stars] == "5")  { echo" selected"; } ?>
=======
    <? if ($row_rank_data[r_stars] == "1")  { echo" selected"; } ?>
    >1</option>

    <option value="2"
    <? if ($row_rank_data[r_stars] == "2")  { echo" selected"; } ?>
    >2</option>

    <option value="3"
    <? if ($row_rank_data[r_stars] == "3")  { echo" selected"; } ?>
    >3</option>

    <option value="4"
    <? if ($row_rank_data[r_stars] == "4")  { echo" selected"; } ?>
    >4</option>

    <option value="5"
    <? if ($row_rank_data[r_stars] == "5")  { echo" selected"; } ?>
>>>>>>> af2fff1... version1
    >5</option>

    </select>

  </td>

  </tr>

</table>


<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td align="center" class="tableb">

<<<<<<< HEAD
    <input type="hidden" name="actual_rankname" value="<?php  echo"$row_rank_data[r_rankname]"; ?>">
=======
    <input type="hidden" name="actual_rankname" value="<? echo"$row_rank_data[r_rankname]"; ?>">
>>>>>>> af2fff1... version1

    <input class="input" type="submit" value="Rang ändern" name="send_rank_data">

    </td> 

  </tr>

</form>

</table>