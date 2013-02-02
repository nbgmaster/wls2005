<script language="JavaScript" type="text/javascript" src="./javascript/admin/edit_user.js"></script>


<form name="admin_form" action="index.php?do=admin&sec=edit_user&module=change" method="post" onsubmit="return check_admin()">

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="cellbg" align="center"  bgcolor="<?php  echo"#$cell_bg02"; ?>">

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Erforderliche Angaben</b>
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
  <tr>

    <td class="cellbg" align="center"  bgcolor="<? echo"#$cell_bg02"; ?>">

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Erforderliche Angaben</b>
>>>>>>> af2fff1... version1

    </td>

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
    <tr>

         <td class="tablea" width="50%">
 
         <b>Nickname</b>

         </td>

         <td class="tablea" width="50%">

<<<<<<< HEAD
         <input class="input" type="text" name="nickname" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["UserName"].""; ?>">
=======
         <input class="input" type="text" name="nickname" maxlength="20" size="40" value="<? echo"".$row_admin_userdata["UserName"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">
 
         <b>Passwort</b>

         </td>

         <td class="tablea">

         <input class="input" type="password" name="password" value="**********" maxlength="20" size="40">

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Admin</b>

         </td>

          <td class="tablea">
      

         <select name="admin" style="width:100px;">

<<<<<<< HEAD
         <?php  if($row_admin_userdata["admin"] == "1") { ?>
=======
         <? if($row_admin_userdata["admin"] == "1") { ?>
>>>>>>> af2fff1... version1

         <option value="1" selected>Admin</option>   
         <option value="0">User</option> 

<<<<<<< HEAD
         <?php  } else { ?>
=======
         <? } else { ?>
>>>>>>> af2fff1... version1

         <option value="1">Admin</option>   
         <option value="0" selected>User</option> 

<<<<<<< HEAD
         <?php  }  ?>
=======
         <? }  ?>
>>>>>>> af2fff1... version1


         </td>

    </tr>

 <tr>

         <td class="tablea">

         <b>Geschlecht</b>

         </td>

         <td class="tablea">

         <select name="gender" style="width:100px;">

<<<<<<< HEAD
         <?php  if($row_admin_userdata["gender"] == "m") { ?>
=======
         <? if($row_admin_userdata["gender"] == "m") { ?>
>>>>>>> af2fff1... version1

         <option value="m" selected>männlich</option>   
         <option value="w">weiblich</option> 

<<<<<<< HEAD
         <?php  } else { ?>
=======
         <? } else { ?>
>>>>>>> af2fff1... version1

         <option value="m">männlich</option>   
         <option value="w" selected>weiblich</option> 

<<<<<<< HEAD
         <?php  }  ?>
=======
         <? }  ?>
>>>>>>> af2fff1... version1

         </select>

         </td>

    </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>Emailadresse</b>

         </td>

         <td class="tablea" width="50%">

<<<<<<< HEAD
         <input class="input" type="text" name="email" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["UserMail"].""; ?>">
=======
         <input class="input" type="text" name="email" maxlength="50" size="40" value="<? echo"".$row_admin_userdata["UserMail"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td class="cellbg" align="center">

<<<<<<< HEAD
    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Freiwillige Angaben</b>
=======
    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Freiwillige Angaben</b>
>>>>>>> af2fff1... version1

    </td>

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

         <td class="tablea" width="50%">

         <b>Vorname</b>

         </td>

         <td class="tablea" width="50%">

<<<<<<< HEAD
         <input class="input" type="text" name="firstname" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["firstname"].""; ?>">
=======
         <input class="input" type="text" name="firstname" maxlength="20" size="40" value="<? echo"".$row_admin_userdata["firstname"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Nachname</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="lastname" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["lastname"].""; ?>">
=======
         <input class="input" type="text" name="lastname" maxlength="20" size="40" value="<? echo"".$row_admin_userdata["lastname"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Geburtstag</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="birthday" maxlength="2" size="2" value="<?php  echo"".$row_admin_userdata["birthday"].""; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthmonth" maxlength="2" size="2" value="<?php  echo"".$row_admin_userdata["birthmonth"].""; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthyear" maxlength="4" size="4" value="<?php  echo"".$row_admin_userdata["birthyear"].""; ?>">
=======
         <input class="input" type="text" name="birthday" maxlength="2" size="2" value="<? echo"".$row_admin_userdata["birthday"].""; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthmonth" maxlength="2" size="2" value="<? echo"".$row_admin_userdata["birthmonth"].""; ?>">&nbsp;.&nbsp;

         <input class="input" type="text" name="birthyear" maxlength="4" size="4" value="<? echo"".$row_admin_userdata["birthyear"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Wohnort</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="place" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["place"].""; ?>">
=======
         <input class="input" type="text" name="place" maxlength="20" size="40" value="<? echo"".$row_admin_userdata["place"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Homepage</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="homepage" maxlength="30" size="40" value="<?php  echo"".$row_admin_userdata["homepage"].""; ?>">
=======
         <input class="input" type="text" name="homepage" maxlength="30" size="40" value="<? echo"".$row_admin_userdata["homepage"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>ICQ</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="icq" maxlength="10" size="40" value="<?php  echo"".$row_admin_userdata["icq"].""; ?>">
=======
         <input class="input" type="text" name="icq" maxlength="10" size="40" value="<? echo"".$row_admin_userdata["icq"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>AIM Screenname</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="aim" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["aim"].""; ?>">
=======
         <input class="input" type="text" name="aim" maxlength="50" size="40" value="<? echo"".$row_admin_userdata["aim"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>YIM Screenname</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="yim" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["yim"].""; ?>">
=======
         <input class="input" type="text" name="yim" maxlength="50" size="40" value="<? echo"".$row_admin_userdata["yim"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>MSN Screenname</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="msn" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["msn"].""; ?>">
=======
         <input class="input" type="text" name="msn" maxlength="50" size="40" value="<? echo"".$row_admin_userdata["msn"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>


     <tr>

         <td class="tablea">

         <b>Beruf</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="job" maxlength="20" size="40" value="<?php  echo"".$row_admin_userdata["job"].""; ?>">
=======
         <input class="input" type="text" name="job" maxlength="20" size="40" value="<? echo"".$row_admin_userdata["job"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Hobbys / Interessen</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="hobbys" maxlength="200" size="40" value="<?php  echo"".$row_admin_userdata["hobbys"].""; ?>">
=======
         <input class="input" type="text" name="hobbys" maxlength="200" size="40" value="<? echo"".$row_admin_userdata["hobbys"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Sonstiges</b> (max. 200 Zeichen)

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <textarea name="misc" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="50" rows="6"><?php  echo"".$row_admin_userdata["misc"].""; ?></textarea>
=======
         <textarea name="misc" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="50" rows="6"><? echo"".$row_admin_userdata["misc"].""; ?></textarea>
>>>>>>> af2fff1... version1

         </td>

    </tr>


     <tr>

         <td class="tablea">

         <b>Lieblingsessen</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="favorite_food" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_food"].""; ?>">
=======
         <input class="input" type="text" name="favorite_food" maxlength="50" size="40" value="<? echo"".$row_admin_userdata["favorite_food"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsgetränk</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="favorite_drink" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_drink"].""; ?>">
=======
         <input class="input" type="text" name="favorite_drink" maxlength="50" size="40" value="<? echo"".$row_admin_userdata["favorite_drink"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsmusik</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="favorite_music" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_music"].""; ?>">
=======
         <input class="input" type="text" name="favorite_music" maxlength="50" size="40" value="<? echo"".$row_admin_userdata["favorite_music"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingsfilm</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="favorite_movie" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_movie"].""; ?>">
=======
         <input class="input" type="text" name="favorite_movie" maxlength="50" size="40" value="<? echo"".$row_admin_userdata["favorite_movie"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Lieblingslocation</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <input class="input" type="text" name="favorite_location" maxlength="50" size="40" value="<?php  echo"".$row_admin_userdata["favorite_location"].""; ?>">
=======
         <input class="input" type="text" name="favorite_location" maxlength="50" size="40" value="<? echo"".$row_admin_userdata["favorite_location"].""; ?>">
>>>>>>> af2fff1... version1

         </td>

    </tr>

</table>


<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td class="cellbg" align="center">

<<<<<<< HEAD
    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Einstellungen</b>
=======
    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Einstellungen</b>
>>>>>>> af2fff1... version1

    </td>

  </tr>

</table>

<<<<<<< HEAD
<?php  echo"$table_begin"; ?><table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<? echo"$table_begin"; ?><table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

         <td class="tablea" width="50%">

         <b>Emailadresse für andere Miglieder sichtbar?</b>

         </td>

         <td class="tablea" width="50%">

<<<<<<< HEAD
         <?php  if($row_admin_userdata["hide_email"] == "1") { ?>
=======
         <? if($row_admin_userdata["hide_email"] == "1") { ?>
>>>>>>> af2fff1... version1

         <input class="input" type="radio" name="hide_email" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="hide_email" value="0"> Nein

<<<<<<< HEAD
         <?php  } else { ?>
=======
         <? } else { ?>
>>>>>>> af2fff1... version1

         <input class="input" type="radio" name="hide_email" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="hide_email" value="0" checked="checked"> Nein

<<<<<<< HEAD
         <?php  } ?>
=======
         <? } ?>
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Emails schicken per Formmailer zulassen?

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <?php  if($row_admin_userdata["formmailer"] == "1") { ?>
=======
         <? if($row_admin_userdata["formmailer"] == "1") { ?>
>>>>>>> af2fff1... version1

         <input class="input" type="radio" name="formmailer" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="formmailer" value="0"> Nein

<<<<<<< HEAD
         <?php  } else { ?>
=======
         <? } else { ?>
>>>>>>> af2fff1... version1

         <input class="input" type="radio" name="formmailer" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="formmailer" value="0" checked="checked"> Nein

<<<<<<< HEAD
         <?php  }  ?>
=======
         <? }  ?>
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Ghost Modus</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <?php  if($row_admin_userdata["hide_user"] == "1") { ?>
=======
         <? if($row_admin_userdata["hide_user"] == "1") { ?>
>>>>>>> af2fff1... version1

         <input class="input" type="radio" name="hide_user" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="hide_user" value="0"> Nein

<<<<<<< HEAD
         <?php  } else { ?>
=======
         <? } else { ?>
>>>>>>> af2fff1... version1

         <input class="input" type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="hide_user" value="0" checked="checked"> Nein

<<<<<<< HEAD
         <?php  }  ?>
=======
         <? }  ?>
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Email Nachricht bei neuer PM</b>

         </td>

         <td class="tablea">

<<<<<<< HEAD
         <?php  if($row_admin_userdata["email_pm"] == "1") { ?>
=======
         <? if($row_admin_userdata["email_pm"] == "1") { ?>
>>>>>>> af2fff1... version1

         <input class="input" type="radio" name="email_pm" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="email_pm" value="0"> Nein

<<<<<<< HEAD
         <?php  } else { ?>
=======
         <? } else { ?>
>>>>>>> af2fff1... version1

         <input class="input" type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="email_pm" value="0" checked="checked"> Nein

<<<<<<< HEAD
         <?php  }  ?>
=======
         <? }  ?>
>>>>>>> af2fff1... version1

         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Board Style</b>

         </td>

         <td class="tablea">

         <select name="board_style">

<<<<<<< HEAD
	 <?php 
=======
	 <?
>>>>>>> af2fff1... version1

	   $query_template = mysql_query("SELECT * from $templates_tblname ORDER by id");

           while ($row_template = mysql_fetch_assoc($query_template))  {  
    
                  echo"<option value=".$row_template["tpl_name"]."";

                  if ($row_template["tpl_name"] == $row_admin_userdata["template"])  { 

                      echo"selected"; 

                  }

	          echo">$row_template[tpl_name]</option>";

           }  

	   ?>

           </select>

           </td>

         </tr>

         <tr>

           <td class="tablea">

           <b>Sprache</b>
 
           </td>

           <td class="tablea">

           <select name="language">
           <option value="german">Deutsch</option>   
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

    <td class="tableb" align="center">

<<<<<<< HEAD
    <input class="input" type="hidden" name="user_id" value="<?php  echo"".$row_admin_userdata["UserID"].""; ?>">
=======
    <input class="input" type="hidden" name="user_id" value="<? echo"".$row_admin_userdata["UserID"].""; ?>">
>>>>>>> af2fff1... version1
    <input class="input" type="submit" name="send_admin_data" value="Profildaten ändern">

    </td>

  </tr>

</form>

</table>