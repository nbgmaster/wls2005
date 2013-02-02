<<<<<<< HEAD
<?php  if ($do != "admin")  { ?>

<form method="post" action="index.php?do=members">

<?php  } else { ?>

<form method="post" action="index.php?do=admin&sec=edit_user">

<?php  } ?>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<? if ($do != "admin")  { ?>

<form method="post" action="index.php?do=members">

<? } else { ?>

<form method="post" action="index.php?do=admin&sec=edit_user">

<? } ?>

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td align="center" width="59%" class="tableb">

    <table cellspacing="0" cellpadding="2">

      <tr>

        <td width="85" align="center">

<<<<<<< HEAD
        <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Sortierung:</b>
=======
        <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Sortierung:</b>
>>>>>>> af2fff1... version1

        </td>

        <td>    

        &nbsp;
 
        <select name="letter" style="width:50px;">
 
        <option value="all"
 
<<<<<<< HEAD
        <?php  if ($letter == "all") { echo"selected"; } ?>
=======
        <? if ($letter == "all") { echo"selected"; } ?>
>>>>>>> af2fff1... version1
    
        >Alle</option>

        <option value="#"
 
<<<<<<< HEAD
        <?php  if ($letter == "#") { echo"selected"; } ?> 
=======
        <? if ($letter == "#") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >#</option>

        <option value="A"
 
<<<<<<< HEAD
        <?php  if ($letter == "A") { echo"selected"; } ?> 
=======
        <? if ($letter == "A") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >A</option>

        <option value="B"
 
<<<<<<< HEAD
        <?php  if ($letter == "B") { echo"selected"; } ?> 
=======
        <? if ($letter == "B") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >B</option>

        <option value="C"
 
<<<<<<< HEAD
        <?php  if ($letter == "C") { echo"selected"; } ?> 
=======
        <? if ($letter == "C") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >C</option>

        <option value="D"
 
<<<<<<< HEAD
        <?php  if ($letter == "D") { echo"selected"; } ?> 
=======
        <? if ($letter == "D") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >D</option>

        <option value="E"
 
<<<<<<< HEAD
        <?php  if ($letter == "E") { echo"selected"; } ?> 
=======
        <? if ($letter == "E") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >E</option>

        <option value="F"
 
<<<<<<< HEAD
        <?php  if ($letter == "F") { echo"selected"; } ?> 
=======
        <? if ($letter == "F") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >F</option>

        <option value="G"
 
<<<<<<< HEAD
        <?php  if ($letter == "G") { echo"selected"; } ?> 
=======
        <? if ($letter == "G") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >G</option>

        <option value="H"
 
<<<<<<< HEAD
        <?php  if ($letter == "H") { echo"selected"; } ?> 
=======
        <? if ($letter == "H") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >H</option>

        <option value="I"
 
<<<<<<< HEAD
        <?php  if ($letter == "I") { echo"selected"; } ?> 
=======
        <? if ($letter == "I") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >I</option>

        <option value="J"
 
<<<<<<< HEAD
        <?php  if ($letter == "J") { echo"selected"; } ?> 
=======
        <? if ($letter == "J") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >J</option>

        <option value="K"
 
<<<<<<< HEAD
        <?php  if ($letter == "K") { echo"selected"; } ?> 
=======
        <? if ($letter == "K") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >K</option>

        <option value="L"
 
<<<<<<< HEAD
        <?php  if ($letter == "L") { echo"selected"; } ?> 
=======
        <? if ($letter == "L") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >L</option>
 
        <option value="M"
 
<<<<<<< HEAD
        <?php  if ($letter == "M") { echo"selected"; } ?> 
=======
        <? if ($letter == "M") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >M</option>

        <option value="N"
 
<<<<<<< HEAD
        <?php  if ($letter == "N") { echo"selected"; } ?> 
=======
        <? if ($letter == "N") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >N</option>

        <option vAlue="O"
 
<<<<<<< HEAD
        <?php  if ($letter == "O") { echo"selected"; } ?> 
=======
        <? if ($letter == "O") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >O</option>

        <option value="P"
 
<<<<<<< HEAD
        <?php  if ($letter == "P") { echo"selected"; } ?> 
=======
        <? if ($letter == "P") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >P</option>

        <option value="Q"
 
<<<<<<< HEAD
        <?php  if ($letter == "Q") { echo"selected"; } ?> 
=======
        <? if ($letter == "Q") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
   
        >Q</option>

        <option value="R"

<<<<<<< HEAD
        <?php  if ($letter == "R") { echo"selected"; } ?> 
=======
        <? if ($letter == "R") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >R</option>

        <option value="S"
 
<<<<<<< HEAD
        <?php  if ($letter == "S") { echo"selected"; } ?> 
=======
        <? if ($letter == "S") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >S</option>

        <option value="T"
 
<<<<<<< HEAD
        <?php  if ($letter == "T") { echo"selected"; } ?> 
=======
        <? if ($letter == "T") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >T</option>

        <option value="U"
 
<<<<<<< HEAD
        <?php  if ($letter == "U") { echo"selected"; } ?> 
=======
        <? if ($letter == "U") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >U</option>

        <option value="V"
 
<<<<<<< HEAD
        <?php  if ($letter == "V") { echo"selected"; } ?> 
=======
        <? if ($letter == "V") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >V</option>

        <option value="W"
 
<<<<<<< HEAD
        <?php  if ($letter == "W") { echo"selected"; } ?> 
=======
        <? if ($letter == "W") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >W</option>

        <option value="X"

<<<<<<< HEAD
        <?php  if ($letter == "X") { echo"selected"; } ?> 
=======
        <? if ($letter == "X") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >X</option>

        <option value="Y"
 
<<<<<<< HEAD
        <?php  if ($letter == "Y") { echo"selected"; } ?> 
=======
        <? if ($letter == "Y") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >Y</option>

        <option value="Z"
 
<<<<<<< HEAD
        <?php  if ($letter == "Z") { echo"selected"; } ?> 
=======
        <? if ($letter == "Z") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >Z</option>

        </select>
 
        </td>

        <td>

        &nbsp;

        <select name="sortby" style="width:120px;">
  
        <option value="username"
 
<<<<<<< HEAD
        <?php  if ($sortby == "username") {echo"selected"; } ?> 
=======
        <? if ($sortby == "username") {echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >Nickname</option>

        <option value="userdate"
 
<<<<<<< HEAD
        <?php  if ($sortby == "userdate") { echo"selected"; } ?> 
=======
        <? if ($sortby == "userdate") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >Anmeldedatum</option>

        <option value="postnumbers"
 
<<<<<<< HEAD
        <?php  if ($sortby == "postnumbers") { echo"selected"; } ?> 
=======
        <? if ($sortby == "postnumbers") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >Anzahl der Beiträge</option>

        <option value="online"
 
<<<<<<< HEAD
        <?php  if ($sortby == "online") { echo"selected"; } ?> 
=======
        <? if ($sortby == "online") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >gerade online</option>

        </select>

        </td>

        <td>

        &nbsp;

        <select name="order" style="width:100px;">
  
        <option value="up"
 
<<<<<<< HEAD
        <?php  if ($order == "up") { echo"selected"; } ?> 
=======
        <? if ($order == "up") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >Aufsteigend</option>

        <option value="down"
 
<<<<<<< HEAD
        <?php  if ($order == "down") { echo"selected"; } ?> 
=======
        <? if ($order == "down") { echo"selected"; } ?> 
>>>>>>> af2fff1... version1
    
        >Absteigend</option>

        </select>

        </td>

        <td>

        &nbsp;

        </td>

        <td align="center">

<<<<<<< HEAD
        <input type="image" src="images/templates/<?php  echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">
=======
        <input type="image" src="images/templates/<? echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">
>>>>>>> af2fff1... version1

        </form>

        </td>

       </tr>

    </table>

    </td>

    <td align="center" width="41%" class="tablea">
  
<<<<<<< HEAD
    <?php  if ($do != "admin")  { ?>

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">  

    Neuestes Mitglied: <a href="index.php?do=profile&user_id=<?php  echo"$newest_user_id"; ?>"><b><?php  echo"$newest_user_name"; ?></b></a> am <?php  echo"$newest_user_regdate"; ?>
 
    <?php  } else { ?>
=======
    <? if ($do != "admin")  { ?>

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">  

    Neuestes Mitglied: <a href="index.php?do=profile&user_id=<? echo"$newest_user_id"; ?>"><b><? echo"$newest_user_name"; ?></b></a> am <? echo"$newest_user_regdate"; ?>
 
    <? } else { ?>
>>>>>>> af2fff1... version1

    <form action="index.php?do=admin&sec=edit_user" method="post">

    <table cellspacing="0" cellpadding="0"><tr><td>

    <b>Genauen Usernamen eingeben:</b> <input type="text" name="username">

    </td><td>

<<<<<<< HEAD
    &nbsp;<input type="image" src="images/templates/<?php  echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">
=======
    &nbsp;<input type="image" src="images/templates/<? echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">
>>>>>>> af2fff1... version1

    </td></tr></table>

    </form>

<<<<<<< HEAD
    <?php  } ?>
=======
    <? } ?>
>>>>>>> af2fff1... version1

    </td>

  </tr>

</form>

</table>

<br>