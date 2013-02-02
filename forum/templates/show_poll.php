<form method="post" action="index.php?do=vote">


<table width="<?php  echo"$width"; ?>" cellpadding="3">

<table width="<? echo"$width"; ?>" cellpadding="3">

               
  <tr>

     <td align="center">

     <table cellspacing="1" cellpadding="4" class="tableinborder" width="100%">

       <tr>

         <td class="tableb">     


         <img src="images/templates/<?php  echo"$template/arrow_r.gif"; ?>"> Umfrage:

         <?php  echo"$row_polls[question]"; ?> 

         <img src="images/templates/<? echo"$template/arrow_r.gif"; ?>"> Umfrage:

         <? echo"$row_polls[question]"; ?> 


         </td>

       </tr>

     </table>

     <table cellspacing="1" cellpadding="4" class="tableinborder" width="100%">

       <tr>

         <td class="tableb" width="30"><input type="radio" value="1" name="answer_number"></td>


         <td class="tablea" width="250"><b><?php  echo"$row_polls[answer1]"; ?></b></td>

         <td class="tablea" width="250"><b><? echo"$row_polls[answer1]"; ?></b></td>


         <td class="tableb">

         <table cellspacing="0" cellpadding="0"><tr>    


         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_middle.gif" width="<?php  echo"$widthp1"; ?>" height="9"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_right.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_middle.gif" width="<? echo"$widthp1"; ?>" height="9"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_right.gif"></td>


         </tr></table>

         </td>


         <td class="tablea"><?php  echo"$answer1_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent1%"; ?></td>

         <td class="tablea"><? echo"$answer1_votes"; ?></td>

         <td class="tableb"><? echo"$percent1%"; ?></td>


 
         </td>

         </tr><tr>

         <td class="tableb"><input type="radio" value="2" name="answer_number"></td>


         <td class="tablea"><b><?php  echo"$row_polls[answer2]"; ?></b></td>

         <td class="tablea"><b><? echo"$row_polls[answer2]"; ?></b></td>


         <td class="tableb">  

         <table cellspacing="0" cellpadding="0"><tr>    


         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_middle.gif" width="<?php  echo"$widthp2"; ?>" height="9"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_right.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_middle.gif" width="<? echo"$widthp2"; ?>" height="9"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_right.gif"></td>


         </tr></table>

         </td>


         <td class="tablea"><?php  echo"$answer2_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent2%"; ?></td>

         <td class="tablea"><? echo"$answer2_votes"; ?></td>

         <td class="tableb"><? echo"$percent2%"; ?></td>


         </tr><tr>

         <td class="tableb"><input type="radio" value="3" name="answer_number"></td>


         <td class="tablea"><b><?php  echo"$row_polls[answer3]"; ?></b></td>

         <td class="tablea"><b><? echo"$row_polls[answer3]"; ?></b></td>


         <td class="tableb">

         <table cellspacing="0" cellpadding="0"><tr>    


         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_middle.gif" width="<?php  echo"$widthp3"; ?>" height="9"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_right.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_middle.gif" width="<? echo"$widthp3"; ?>" height="9"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_right.gif"></td>


         </tr></table>

         </td>


         <td class="tablea"><?php  echo"$answer3_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent3%"; ?></td>

         <td class="tablea"><? echo"$answer3_votes"; ?></td>

         <td class="tableb"><? echo"$percent3%"; ?></td>



         </td>

         </tr><tr>

         <td class="tableb"><input type="radio" value="4" name="answer_number"></td>


         <td class="tablea"><b><?php  echo"$row_polls[answer4]"; ?></b></td>

         <td class="tablea"><b><? echo"$row_polls[answer4]"; ?></b></td>


         <td class="tableb">

         <table cellspacing="0" cellpadding="0"><tr>    


         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_middle.gif" width="<?php  echo"$widthp4"; ?>" height="9"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_right.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_middle.gif" width="<? echo"$widthp4"; ?>" height="9"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_right.gif"></td>


         </tr></table>

         </td>


         <td class="tablea"><?php  echo"$answer4_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent4%"; ?></td>

         <td class="tablea"><? echo"$answer4_votes"; ?></td>

         <td class="tableb"><? echo"$percent4%"; ?></td>



         </td>

         </tr><tr>

         <td class="tableb"><input type="radio" value="5" name="answer_number"></td>


         <td class="tablea"><b><?php  echo"$row_polls[answer5]"; ?></b></td>

         <td class="tablea"><b><? echo"$row_polls[answer5]"; ?></b></td>


         <td class="tableb">

         <table cellspacing="0" cellpadding="0"><tr>    


         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_middle.gif" width="<?php  echo"$widthp5"; ?>" height="9"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_right.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_middle.gif" width="<? echo"$widthp5"; ?>" height="9"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_right.gif"></td>


         </tr></table>

         </td>


         <td class="tablea"><?php  echo"$answer5_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent5%"; ?></td>

         <td class="tablea"><? echo"$answer5_votes"; ?></td>

         <td class="tableb"><? echo"$percent5%"; ?></td>



         </td>

         </tr><tr>

         <td class="tableb"><input type="radio" value="6" name="answer_number"></td>


         <td class="tablea"><b><?php  echo"$row_polls[answer6]"; ?></b></td>

         <td class="tablea"><b><? echo"$row_polls[answer6]"; ?></b></td>


         <td class="tableb">

         <table cellspacing="0" cellpadding="0"><tr>    


         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_middle.gif" width="<?php  echo"$widthp6"; ?>" height="9"></td>

         <td><img src="images/templates/<?php  echo"$template"; ?>/vote_right.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_left.gif"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_middle.gif" width="<? echo"$widthp6"; ?>" height="9"></td>

         <td><img src="images/templates/<? echo"$template"; ?>/vote_right.gif"></td>


         </tr></table>

         </td>


         <td class="tablea"><?php  echo"$answer6_votes"; ?></td>

         <td class="tableb"><?php  echo"$percent6%"; ?></td>

         <td class="tablea"><? echo"$answer6_votes"; ?></td>

         <td class="tableb"><? echo"$percent6%"; ?></td>



         </td>

       </tr>

     </table>

     <br>


     <input type="hidden" name="t" value="<?php  echo"$t"; ?>">

     <input type="hidden" name="poll_id" value="<?php  echo"$row_polls[id]"; ?>">

     <input type="hidden" name="t" value="<? echo"$t"; ?>">

     <input type="hidden" name="poll_id" value="<? echo"$row_polls[id]"; ?>">


     <input type="submit" value="Stimme abgeben"> 

     <br><br>

     </td>

   </tr>

</form>

</table>
