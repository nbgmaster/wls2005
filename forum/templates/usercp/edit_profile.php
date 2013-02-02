<form name="usercp_form" action="index.php?do=usercp&sec=edit_profile&module=change" method="post">


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

         <td class="tablea">

         <b>Geschlecht</b>

         </td>

         <td class="tablea">

         <select name="gender">


         <?php  if($userdata_gender == "m") { ?>

         <? if($userdata_gender == "m") { ?>


         <option value="m" selected>männlich</option>   
         <option value="w">weiblich</option> 


         <?php  } else { ?>

         <? } else { ?>


         <option value="m">männlich</option>   
         <option value="w" selected>weiblich</option> 


         <?php  }  ?>

         <? }  ?>


         </select>

         </td>

    </tr>


     <tr>

         <td class="tablea" width="50%">

         <b>Vorname</b>

         </td>

         <td class="tablea" width="50%">


         <input class="input" type="text" name="firstname" maxlength="20" size="40" value="<?php  echo"$userdata_firstname"; ?>">

         <input class="input" type="text" name="firstname" maxlength="20" size="40" value="<? echo"$userdata_firstname"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Nachname</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="lastname" maxlength="20" size="40" value="<?php  echo"$userdata_lastname"; ?>">

         <input class="input" type="text" name="lastname" maxlength="20" size="40" value="<? echo"$userdata_lastname"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Geburtstag</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="birthday" maxlength="2" size="2" value="<?php  echo"$userdata_birthday"; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthmonth" maxlength="2" size="2" value="<?php  echo"$userdata_birthmonth"; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthyear" maxlength="4" size="4" value="<?php  echo"$userdata_birthyear"; ?>">

         <input class="input" type="text" name="birthday" maxlength="2" size="2" value="<? echo"$userdata_birthday"; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthmonth" maxlength="2" size="2" value="<? echo"$userdata_birthmonth"; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthyear" maxlength="4" size="4" value="<? echo"$userdata_birthyear"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Wohnort</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="place" maxlength="20" size="40" value="<?php  echo"$userdata_place"; ?>">

         <input class="input" type="text" name="place" maxlength="20" size="40" value="<? echo"$userdata_place"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Homepage</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="homepage" maxlength="30" size="40" value="<?php  echo"$userdata_homepage"; ?>">

         <input class="input" type="text" name="homepage" maxlength="30" size="40" value="<? echo"$userdata_homepage"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>ICQ</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="icq" maxlength="10" size="40" value="<?php  echo"$userdata_icq"; ?>">

         <input class="input" type="text" name="icq" maxlength="10" size="40" value="<? echo"$userdata_icq"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>AIM Screenname</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="aim" maxlength="50" size="40" value="<?php  echo"$userdata_aim"; ?>">

         <input class="input" type="text" name="aim" maxlength="50" size="40" value="<? echo"$userdata_aim"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>YIM Screenname</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="yim" maxlength="50" size="40" value="<?php  echo"$userdata_yim"; ?>">

         <input class="input" type="text" name="yim" maxlength="50" size="40" value="<? echo"$userdata_yim"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>MSN Screenname</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="msn" maxlength="50" size="40" value="<?php  echo"$userdata_msn"; ?>">

         <input class="input" type="text" name="msn" maxlength="50" size="40" value="<? echo"$userdata_msn"; ?>">


         </td>

    </tr>


     <tr>

         <td class="tablea">

         <b>Beruf</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="job" maxlength="20" size="40" value="<?php  echo"$userdata_job"; ?>">

         <input class="input" type="text" name="job" maxlength="20" size="40" value="<? echo"$userdata_job"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Hobbys / Interessen</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="hobbys" maxlength="200" size="40" value="<?php  echo"$userdata_hobbys"; ?>">

         <input class="input" type="text" name="hobbys" maxlength="200" size="40" value="<? echo"$userdata_hobbys"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Sonstiges</b> (max. 200 Zeichen)

         </td>

         <td class="tablea">


         <textarea name="misc" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="50" rows="6"><?php  echo"$userdata_misc"; ?></textarea>

         <textarea name="misc" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="50" rows="6"><? echo"$userdata_misc"; ?></textarea>


         </td>

    </tr>


     <tr>

         <td class="tablea">

         <b>Lieblingsessen</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="favorite_food" maxlength="50" size="40" value="<?php  echo"$userdata_favorite_food"; ?>">

         <input class="input" type="text" name="favorite_food" maxlength="50" size="40" value="<? echo"$userdata_favorite_food"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsgetränk</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="favorite_drink" maxlength="50" size="40" value="<?php  echo"$userdata_favorite_drink"; ?>">

         <input class="input" type="text" name="favorite_drink" maxlength="50" size="40" value="<? echo"$userdata_favorite_drink"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsmusik</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="favorite_music" maxlength="50" size="40" value="<?php  echo"$userdata_favorite_music"; ?>">

         <input class="input" type="text" name="favorite_music" maxlength="50" size="40" value="<? echo"$userdata_favorite_music"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsfilm</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="favorite_movie" maxlength="50" size="40" value="<?php  echo"$userdata_favorite_movie"; ?>">

         <input class="input" type="text" name="favorite_movie" maxlength="50" size="40" value="<? echo"$userdata_favorite_movie"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingslocation</b>

         </td>

         <td class="tablea">


         <input class="input" type="text" name="favorite_location" maxlength="50" size="40" value="<?php  echo"$userdata_favorite_location"; ?>">

         <input class="input" type="text" name="favorite_location" maxlength="50" size="40" value="<? echo"$userdata_favorite_location"; ?>">


         </td>

    </tr>

</table>