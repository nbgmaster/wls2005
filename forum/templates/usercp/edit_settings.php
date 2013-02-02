<form name="usercp_form" action="index.php?do=usercp&sec=edit_settings&module=change" method="post">


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

         <td class="tablea" width="50%">

         <b>Emailadresse für andere Miglieder sichtbar?</b>

         </td>

         <td class="tablea" width="50%">


         <?php  if($userdata_hide_email == "1") { ?>

         <? if($userdata_hide_email == "1") { ?>


         <input class="input" type="radio" name="hide_email" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="hide_email" value="0"> Nein


         <?php  } else { ?>

         <? } else { ?>


         <input class="input" type="radio" name="hide_email" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="hide_email" value="0" checked="checked"> Nein


         <?php  } ?>

         <? } ?>


         </td>

    </tr>


     <tr>

         <td class="tablea">

         <b>Emails schicken per Formmailer zulassen?

         </td>

         <td class="tablea">


         <?php  if($userdata_formmailer == "1") { ?>

         <? if($userdata_formmailer == "1") { ?>


         <input class="input" type="radio" name="formmailer" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="formmailer" value="0"> Nein


         <?php  } else { ?>

         <? } else { ?>


         <input class="input" type="radio" name="formmailer" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="formmailer" value="0" checked="checked"> Nein


         <?php  }  ?>

         <? }  ?>


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Ghost Modus</b>

         </td>

         <td class="tablea">


         <?php  if($userdata_hide_user == "1") { ?>

         <? if($userdata_hide_user == "1") { ?>


         <input class="input" type="radio" name="hide_user" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="hide_user" value="0"> Nein


         <?php  } else { ?>

         <? } else { ?>


         <input class="input" type="radio" name="hide_user" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="hide_user" value="0" checked="checked"> Nein


         <?php  }  ?>

         <? }  ?>


         </td>

    </tr>

     <tr>

         <td class="tablea">

         <b>Email Nachricht bei neuer PM</b>

         </td>

         <td class="tablea">


         <?php  if($userdata_email_pm == "1") { ?>

         <? if($userdata_email_pm == "1") { ?>


         <input class="input" type="radio" name="email_pm" value="1"  checked="checked"> Ja &nbsp;
         <input class="input" type="radio" name="email_pm" value="0"> Nein


         <?php  } else { ?>

         <? } else { ?>


         <input class="input" type="radio" name="email_pm" value="1"> Ja &nbsp;
         <input class="input" type="radio" name="email_pm" value="0" checked="checked"> Nein


         <?php  }  ?>

         <? }  ?>


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
  
         echo"<option value='$row_template[id]'";

         if($row_template[id] == $userdata_tpl) { echo"selected"; }

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