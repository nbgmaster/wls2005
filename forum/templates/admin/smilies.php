    <td align="center" class="tablea">

<<<<<<< HEAD
    <?php  echo"$row_smilies[code]"; ?>
=======
    <? echo"$row_smilies[code]"; ?>
>>>>>>> af2fff1... version1

    </td>  

    <td align="center" class="tableb">

<<<<<<< HEAD
    <img src="<?php  echo"$smilies_direction$row_smilies[smile_url]"; ?>" border="0"></a>
=======
    <img src="<? echo"$smilies_direction$row_smilies[smile_url]"; ?>" border="0"></a>
>>>>>>> af2fff1... version1

    </td>

    <td class="tablea" align="center">

    bearbeiten

    </td>

    <td class="tableb" align="center">

    <input type="checkbox">

    </td>

<<<<<<< HEAD
    <?php 
=======
    <?
>>>>>>> af2fff1... version1

      $cols = "2"; 

      $countsm = $smilienumbers / $cols;
            
      for ($i = 1; $i <= $countsm; $i++)  {    

           $x = $cols * $i;

           if ($countrows == $x)  {

               echo"</tr><tr>";

           } 

      }

      ?>
