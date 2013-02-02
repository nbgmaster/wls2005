    <td align="center">

<<<<<<< HEAD
    <a href="javascript:emoticon('<?php  echo"$row_smilies[code]"; ?>')">

    <img src="<?php  echo"../$smilies_direction$row_smilies[smile_url]"; ?>" border="0"></a>

    </td>
    <?php 
=======
    <a href="javascript:emoticon('<? echo"$row_smilies[code]"; ?>')">

    <img src="<? echo"../$smilies_direction$row_smilies[smile_url]"; ?>" border="0"></a>

    </td>
    <?
>>>>>>> af2fff1... version1

      $cols = "4";
            
      for ($i = 1; $i <= $smilies_showstart; $i++)  {    

           $x = $cols * $i;

           if ($countrows == $x)  {

               echo"</tr><tr>";

           } 

      }