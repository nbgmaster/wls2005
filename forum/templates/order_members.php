
<?php  if ($do != "admin")  { ?>

<form method="post" action="index.php?do=members">

<?php  } else { ?>

<form method="post" action="index.php?do=admin&sec=edit_user">

<?php  } ?>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<? if ($do != "admin")  { ?>

<form method="post" action="index.php?do=members">

<? } else { ?>

<form method="post" action="index.php?do=admin&sec=edit_user">

<? } ?>

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td align="center" width="59%" class="tableb">

    <table cellspacing="0" cellpadding="2">

      <tr>

        <td width="85" align="center">


        <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Sortierung:</b>

        <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Sortierung:</b>


        </td>

        <td>    

        &nbsp;
 
        <select name="letter" style="width:50px;">
 
        <option value="all"
 

        <?php  if ($letter == "all") { echo"selected"; } ?>

        <? if ($letter == "all") { echo"selected"; } ?>

    
        >Alle</option>

        <option value="#"
 

        <?php  if ($letter == "#") { echo"selected"; } ?> 

        <? if ($letter == "#") { echo"selected"; } ?> 

    
        >#</option>

        <option value="A"
 

        <?php  if ($letter == "A") { echo"selected"; } ?> 

        <? if ($letter == "A") { echo"selected"; } ?> 

    
        >A</option>

        <option value="B"
 

        <?php  if ($letter == "B") { echo"selected"; } ?> 

        <? if ($letter == "B") { echo"selected"; } ?> 

    
        >B</option>

        <option value="C"
 

        <?php  if ($letter == "C") { echo"selected"; } ?> 

        <? if ($letter == "C") { echo"selected"; } ?> 

    
        >C</option>

        <option value="D"
 

        <?php  if ($letter == "D") { echo"selected"; } ?> 

        <? if ($letter == "D") { echo"selected"; } ?> 

    
        >D</option>

        <option value="E"
 

        <?php  if ($letter == "E") { echo"selected"; } ?> 

        <? if ($letter == "E") { echo"selected"; } ?> 

    
        >E</option>

        <option value="F"
 

        <?php  if ($letter == "F") { echo"selected"; } ?> 

        <? if ($letter == "F") { echo"selected"; } ?> 

    
        >F</option>

        <option value="G"
 

        <?php  if ($letter == "G") { echo"selected"; } ?> 

        <? if ($letter == "G") { echo"selected"; } ?> 

    
        >G</option>

        <option value="H"
 

        <?php  if ($letter == "H") { echo"selected"; } ?> 

        <? if ($letter == "H") { echo"selected"; } ?> 

    
        >H</option>

        <option value="I"
 

        <?php  if ($letter == "I") { echo"selected"; } ?> 

        <? if ($letter == "I") { echo"selected"; } ?> 

    
        >I</option>

        <option value="J"
 

        <?php  if ($letter == "J") { echo"selected"; } ?> 

        <? if ($letter == "J") { echo"selected"; } ?> 

    
        >J</option>

        <option value="K"
 

        <?php  if ($letter == "K") { echo"selected"; } ?> 

        <? if ($letter == "K") { echo"selected"; } ?> 

    
        >K</option>

        <option value="L"
 

        <?php  if ($letter == "L") { echo"selected"; } ?> 

        <? if ($letter == "L") { echo"selected"; } ?> 

    
        >L</option>
 
        <option value="M"
 

        <?php  if ($letter == "M") { echo"selected"; } ?> 

        <? if ($letter == "M") { echo"selected"; } ?> 

    
        >M</option>

        <option value="N"
 

        <?php  if ($letter == "N") { echo"selected"; } ?> 

        <? if ($letter == "N") { echo"selected"; } ?> 

    
        >N</option>

        <option vAlue="O"
 

        <?php  if ($letter == "O") { echo"selected"; } ?> 

        <? if ($letter == "O") { echo"selected"; } ?> 

    
        >O</option>

        <option value="P"
 

        <?php  if ($letter == "P") { echo"selected"; } ?> 

        <? if ($letter == "P") { echo"selected"; } ?> 

    
        >P</option>

        <option value="Q"
 

        <?php  if ($letter == "Q") { echo"selected"; } ?> 

        <? if ($letter == "Q") { echo"selected"; } ?> 

   
        >Q</option>

        <option value="R"


        <?php  if ($letter == "R") { echo"selected"; } ?> 

        <? if ($letter == "R") { echo"selected"; } ?> 

    
        >R</option>

        <option value="S"
 

        <?php  if ($letter == "S") { echo"selected"; } ?> 

        <? if ($letter == "S") { echo"selected"; } ?> 

    
        >S</option>

        <option value="T"
 

        <?php  if ($letter == "T") { echo"selected"; } ?> 

        <? if ($letter == "T") { echo"selected"; } ?> 

    
        >T</option>

        <option value="U"
 

        <?php  if ($letter == "U") { echo"selected"; } ?> 

        <? if ($letter == "U") { echo"selected"; } ?> 

    
        >U</option>

        <option value="V"
 

        <?php  if ($letter == "V") { echo"selected"; } ?> 

        <? if ($letter == "V") { echo"selected"; } ?> 

    
        >V</option>

        <option value="W"
 

        <?php  if ($letter == "W") { echo"selected"; } ?> 

        <? if ($letter == "W") { echo"selected"; } ?> 

    
        >W</option>

        <option value="X"


        <?php  if ($letter == "X") { echo"selected"; } ?> 

        <? if ($letter == "X") { echo"selected"; } ?> 

    
        >X</option>

        <option value="Y"
 

        <?php  if ($letter == "Y") { echo"selected"; } ?> 

        <? if ($letter == "Y") { echo"selected"; } ?> 

    
        >Y</option>

        <option value="Z"
 

        <?php  if ($letter == "Z") { echo"selected"; } ?> 

        <? if ($letter == "Z") { echo"selected"; } ?> 

    
        >Z</option>

        </select>
 
        </td>

        <td>

        &nbsp;

        <select name="sortby" style="width:120px;">
  
        <option value="username"
 

        <?php  if ($sortby == "username") {echo"selected"; } ?> 

        <? if ($sortby == "username") {echo"selected"; } ?> 

    
        >Nickname</option>

        <option value="userdate"
 

        <?php  if ($sortby == "userdate") { echo"selected"; } ?> 

        <? if ($sortby == "userdate") { echo"selected"; } ?> 

    
        >Anmeldedatum</option>

        <option value="postnumbers"
 

        <?php  if ($sortby == "postnumbers") { echo"selected"; } ?> 

        <? if ($sortby == "postnumbers") { echo"selected"; } ?> 

    
        >Anzahl der Beiträge</option>

        <option value="online"
 

        <?php  if ($sortby == "online") { echo"selected"; } ?> 

        <? if ($sortby == "online") { echo"selected"; } ?> 

    
        >gerade online</option>

        </select>

        </td>

        <td>

        &nbsp;

        <select name="order" style="width:100px;">
  
        <option value="up"
 

        <?php  if ($order == "up") { echo"selected"; } ?> 

        <? if ($order == "up") { echo"selected"; } ?> 

    
        >Aufsteigend</option>

        <option value="down"
 

        <?php  if ($order == "down") { echo"selected"; } ?> 

        <? if ($order == "down") { echo"selected"; } ?> 

    
        >Absteigend</option>

        </select>

        </td>

        <td>

        &nbsp;

        </td>

        <td align="center">


        <input type="image" src="images/templates/<?php  echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">

        <input type="image" src="images/templates/<? echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">


        </form>

        </td>

       </tr>

    </table>

    </td>

    <td align="center" width="41%" class="tablea">
  

    <?php  if ($do != "admin")  { ?>

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">  

    Neuestes Mitglied: <a href="index.php?do=profile&user_id=<?php  echo"$newest_user_id"; ?>"><b><?php  echo"$newest_user_name"; ?></b></a> am <?php  echo"$newest_user_regdate"; ?>
 
    <?php  } else { ?>

    <? if ($do != "admin")  { ?>

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">  

    Neuestes Mitglied: <a href="index.php?do=profile&user_id=<? echo"$newest_user_id"; ?>"><b><? echo"$newest_user_name"; ?></b></a> am <? echo"$newest_user_regdate"; ?>
 
    <? } else { ?>


    <form action="index.php?do=admin&sec=edit_user" method="post">

    <table cellspacing="0" cellpadding="0"><tr><td>

    <b>Genauen Usernamen eingeben:</b> <input type="text" name="username">

    </td><td>


    &nbsp;<input type="image" src="images/templates/<?php  echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">

    &nbsp;<input type="image" src="images/templates/<? echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">


    </td></tr></table>

    </form>


    <?php  } ?>

    <? } ?>


    </td>

  </tr>

</form>

</table>

<br>