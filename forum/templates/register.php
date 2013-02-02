<script type="text/javascript" src="javascript/form_register.js" language="JavaScript1.2"></script>


<form name="reg_form" action="index.php?do=register&sec=create_member" method="post" onsubmit="return check_user()">
     
   

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td class="cellbg">


    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> Registrierung

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> Registrierung


    </td>

  </tr>

</table>

<br>


<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">


  <tr>

    <td class="catbg" align="center">

    Erforderliche Angaben

    </td>

  </tr>

</table>
     

  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
    <tr>

         <td class="tablea" width="50%">
 

         <input type="hidden" value="<?php  echo"$timestamp"; ?>" name="regdate">

         <input type="hidden" value="<? echo"$timestamp"; ?>" name="regdate">


         <b>Nickname</b>

         </td>

         <td class="tablea" width="50%">


         <input type="text" name="r_nickname" maxlength="20" size="40" value="<?php  echo"$nickname"; ?>">

         <input type="text" name="r_nickname" maxlength="20" size="40" value="<? echo"$nickname"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Email</b>

         </td>

         <td class="tablea">


         <input type="text" name="email" maxlength="40" size="40" value="<?php  echo"$email"; ?>"> 

         <input type="text" name="email" maxlength="40" size="40" value="<? echo"$email"; ?>"> 


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Passwort</b>

         </td>

         <td class="tablea">

         <input type="password" name="r_password" maxlength="20" size="40">

         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Passwort wiederholen</b>

         </td>

         <td class="tablea">

         <input type="password" name="password2" maxlength="20" size="40">

         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Geschlecht</b>

         </td>

         <td class="tablea">

         <select name="gender">


         <?php  if($gender != "") {

         <? if($gender != "") {


         if($gender == "m") { ?>

         <option value="m" selected>männlich</option>   
         <option value="w">weiblich</option> 


         <?php  } else { ?>

         <? } else { ?>


         <option value="m">männlich</option>   
         <option value="w" selected>weiblich</option> 


         <?php  } 

         <? } 


         } else { ?>

         <option value="m">männlich</option>   
         <option value="w">weiblich</option> 


         <?php  } ?>

         <? } ?>


         </select>

         </td>

    </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">


  <tr>

    <td class="catbg" align="center">

    Freiwillige Angaben
 
    </td>

  </tr>

</table>


   <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

   <table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
     <tr>

         <td class="tablea" width="50%">

         <b>Vorname</b>

         </td>

         <td class="tablea" width="50%">


         <input type="text" name="firstname" maxlength="20" size="40" value="<?php  echo"$firstname"; ?>">

         <input type="text" name="firstname" maxlength="20" size="40" value="<? echo"$firstname"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Nachname</b>

         </td>

         <td class="tablea">


         <input type="text" name="lastname" maxlength="20" size="40" value="<?php  echo"$lastname"; ?>">

         <input type="text" name="lastname" maxlength="20" size="40" value="<? echo"$lastname"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Geburtstag</b>

         </td>

         <td class="tablea">


         <input type="text" name="birthday" maxlength="2" size="2" value="<?php  echo"$birthday"; ?>">&nbsp;.&nbsp;

         <input type="text" name="birthmonth" maxlength="2" size="2" value="<?php  echo"$birthmonth"; ?>">&nbsp;.&nbsp;

         <input type="text" name="birthyear" maxlength="4" size="4" value="<?php  echo"$birthyear"; ?>">

         <input type="text" name="birthday" maxlength="2" size="2" value="<? echo"$birthday"; ?>">&nbsp;.&nbsp;

         <input type="text" name="birthmonth" maxlength="2" size="2" value="<? echo"$birthmonth"; ?>">&nbsp;.&nbsp;

         <input type="text" name="birthyear" maxlength="4" size="4" value="<? echo"$birthyear"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Wohnort</b>

         </td>

         <td class="tablea">


         <input type="text" name="place" maxlength="20" size="40" value="<?php  echo"$place"; ?>">

         <input type="text" name="place" maxlength="20" size="40" value="<? echo"$place"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Homepage</b>

         </td>

         <td class="tablea">


         <input type="text" name="homepage" maxlength="30" size="40" value="<?php  echo"$homepage"; ?>">

         <input type="text" name="homepage" maxlength="30" size="40" value="<? echo"$homepage"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>ICQ</b>

         </td>

         <td class="tablea">


         <input type="text" name="icq" maxlength="10" size="40" value="<?php  echo"$icq"; ?>">

         <input type="text" name="icq" maxlength="10" size="40" value="<? echo"$icq"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>AIM Screenname</b>

         </td>

         <td class="tablea">


         <input type="text" name="aim" maxlength="50" size="40" value="<?php  echo"$aim"; ?>">

         <input type="text" name="aim" maxlength="50" size="40" value="<? echo"$aim"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>YIM Screenname</b>

         </td>

         <td class="tablea">


         <input type="text" name="yim" maxlength="50" size="40" value="<?php  echo"$yim"; ?>">

         <input type="text" name="yim" maxlength="50" size="40" value="<? echo"$yim"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>MSN Screenname</b>

         </td>

         <td class="tablea">


         <input type="text" name="msn" maxlength="50" size="40" value="<?php  echo"$msn"; ?>">

         <input type="text" name="msn" maxlength="50" size="40" value="<? echo"$msn"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Beruf</b>

         </td>

         <td class="tablea">


         <input type="text" name="job" maxlength="20" size="40" value="<?php  echo"$job"; ?>">

         <input type="text" name="job" maxlength="20" size="40" value="<? echo"$job"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Hobbys / Interessen</b>

         </td>

         <td class="tablea">


         <input type="text" name="hobbys" maxlength="200" size="40" value="<?php  echo"$hobbys"; ?>">

         <input type="text" name="hobbys" maxlength="200" size="40" value="<? echo"$hobbys"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Sonstiges</b> (max. 200 Zeichen)

         </td>

         <td class="tablea">

         <textarea name="misc" onKeyUp="count();" onKeyDown="count();" onBlur = "count();" cols="50" rows="6">


         <?php  echo"$misc"; ?>

         <? echo"$misc"; ?>


         </textarea>

         </td>

    </tr>


     <tr>

         <td class="tablea">

         <b>Lieblingsessen</b>

         </td>

         <td class="tablea">


         <input type="text" name="favorite_food" maxlength="50" size="40" value="<?php  echo"$favorite_food"; ?>">

         <input type="text" name="favorite_food" maxlength="50" size="40" value="<? echo"$favorite_food"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Lieblingsgetränk</b>

         </td>

         <td class="tablea">


         <input type="text" name="favorite_drink" maxlength="50" size="40" value="<?php  echo"$favorite_drink"; ?>">

         <input type="text" name="favorite_drink" maxlength="50" size="40" value="<? echo"$favorite_drink"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Lieblingsmusik</b>

         </td>

         <td class="tablea">


         <input type="text" name="favorite_music" maxlength="50" size="40" value="<?php  echo"$favorite_music"; ?>">

         <input type="text" name="favorite_music" maxlength="50" size="40" value="<? echo"$favorite_music"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Lieblingsfilm</b>

         </td>

         <td class="tablea">


         <input type="text" name="favorite_movie" maxlength="50" size="40" value="<?php  echo"$favorite_movie"; ?>">

         <input type="text" name="favorite_movie" maxlength="50" size="40" value="<? echo"$favorite_movie"; ?>">


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Lieblingslocation</b>

         </td>

         <td class="tablea">


         <input type="text" name="favorite_location" maxlength="50" size="40" value="<?php  echo"$favorite_location"; ?>">

         <input type="text" name="favorite_location" maxlength="50" size="40" value="<? echo"$favorite_location"; ?>">


         </td>

    </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">


  <tr>

    <td class="catbg" align="center">

    Einstellungen
 
    </td>

  </tr>

</table>


  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
    <tr>

         <td class="tablea" width="50%">

         <b>Emailadresse für andere Miglieder sichtbar?</b>

         </td>

         <td class="tablea" width="50%">


         <?php  if($hide_email != "") { 

         <? if($hide_email != "") { 


         if($hide_email == "1") { ?>

         <input type="radio" name="hide_email" value="1"  checked="checked"> Ja &nbsp;
         <input type="radio" name="hide_email" value="0"> Nein


         <?php  } else { ?>

         <? } else { ?>


         <input type="radio" name="hide_email" value="1"> Ja &nbsp;
         <input type="radio" name="hide_email" value="0" checked="checked"> Nein


         <?php  } 

         <? } 


         } else { ?>

         <input type="radio" name="hide_email" value="1" checked="checked"> Ja &nbsp;
         <input type="radio" name="hide_email" value="0"> Nein


         <?php  } ?>

         <? } ?>


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Emails schicken per Formmailer zulassen?

         </td>

         <td class="tablea">


         <?php  if($formmailer != "") { 

         <? if($formmailer != "") { 


         if($formmailer == "1") { ?>

         <input type="radio" name="formmailer" value="1"  checked="checked"> Ja &nbsp;
         <input type="radio" name="formmailer" value="0"> Nein


         <?php  } else { ?>

         <? } else { ?>


         <input type="radio" name="formmailer" value="1"> Ja &nbsp;
         <input type="radio" name="formmailer" value="0" checked="checked"> Nein


         <?php  } 

         <? } 


         } else { ?>

         <input type="radio" name="formmailer" value="1" checked="checked"> Ja &nbsp;
         <input type="radio" name="formmailer" value="0"> Nein


         <?php  } ?>

         <? } ?>


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Ghost Modus</b>

         </td>

         <td class="tablea">


         <?php  if($hide_user != "") { 

         <? if($hide_user != "") { 


         if($hide_user == "1") { ?>

         <input type="radio" name="hide_user" value="1"  checked="checked"> Ja &nbsp;
         <input type="radio" name="hide_user" value="0"> Nein


         <?php  } else { ?>

         <? } else { ?>


         <input type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input type="radio" name="hide_user" value="0" checked="checked"> Nein


         <?php  } 

         <? } 


         } else { ?>

         <input type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input type="radio" name="hide_user" value="0" checked="checked"> Nein


         <?php  } ?>

         <? } ?>


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Email Nachricht bei neuer PM</b>

         </td>

         <td class="tablea">


         <?php  if($email_pm != "") { 

         <? if($email_pm != "") { 


         if($email_pm == "1") { ?>

         <input type="radio" name="email_pm" value="1"  checked="checked"> Ja &nbsp;
         <input type="radio" name="email_pm" value="0"> Nein


         <?php  } else { ?>

         <? } else { ?>


         <input type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input type="radio" name="email_pm" value="0" checked="checked"> Nein


         <?php  } 

         <? } 


         } else { ?>

         <input type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input type="radio" name="email_pm" value="0" checked="checked"> Nein


         <?php  } ?>

         <? } ?>


         </td>

    </tr>

    <tr>

         <td class="tablea">

         <b>Board Style</b>

         </td>

         <td class="tablea">

         <select name="board_style">


	 <?php 

	 <?


	 $query_template = mysql_query("SELECT * from $templates_tblname ORDER by id");

         while($row_template = mysql_fetch_assoc($query_template)) 

         {  
  
         echo"<option value='$row_template[tpl_name]'>$row_template[tpl_name]</option>";

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


<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">


  <tr>

    <td class="tablea" align="center">

    <input type="submit" class="input" name="send_reg_data" value="Registrierung abschließen">

    </td>
 
  </tr>

</form>

</table>