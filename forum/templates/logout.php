<form action="index.php?action=logout" method="post">



<table cellpadding="0" cellspacing="1" border="0" width="<?php  echo"$width"; ?>" class="tableinborder">

<table cellpadding="0" cellspacing="1" border="0" width="<? echo"$width"; ?>" class="tableinborder">

   
  <tr>
    
    <td>
 
    <table cellspacing="0" cellpadding="4" width="100%">

      <tr>

        <td class="cellbg">


        <b>Hallo <?php  echo"$userdata_name"; ?></b>

        <?php  if ($userdata_admin == "1") { ?>

        (Administrator)

        <?php  } else { ?>

        (User)
 
        <?php  } ?>

        <b>Hallo <? echo"$userdata_name"; ?></b>

        <? if ($userdata_admin == "1") { ?>

        (Administrator)

        <? } else { ?>

        (User)
 
        <? } ?>


         | Neue Private Nachrichten: 0

        </td>

        <td align="right" class="cellbg">


        aktuelles Datum: <?php  echo"$c_date, $c_time Uhr"; ?>

        aktuelles Datum: <? echo"$c_date, $c_time Uhr"; ?>


        </td>

      </tr>

    </table>

    </td>
   
 </tr>
   
  <tr>
   
  <td class="tablea">

    <table cellspacing="0" cellpadding="3" width="98%">

      <tr>

         <td>


         <?php  if ($userdata_admin == "1") { ?>

         <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

         <a href="index.php?do=admin">Admin Center</a>&nbsp;&nbsp;

        <?php  } ?>

        <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">
                  
        <a href="index.php?do=markread">Alle ungelesenen Beiträge als gelesen markieren</a>&nbsp;&nbsp;

        <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

         <? if ($userdata_admin == "1") { ?>

         <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

         <a href="index.php?do=admin">Admin Center</a>&nbsp;&nbsp;

        <? } ?>

        <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">
                  
        <a href="index.php?do=markread">Alle ungelesenen Beiträge als gelesen markieren</a>&nbsp;&nbsp;

        <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

                  
        <a href="index.php?do=markread">Neue Beiträge seit letztem Besuch anzeigen</a>

        </td>

        <td align="right">

        <input type="submit" class="input" value="Abmelden" name="submit_login_data" style="width:80px;">


        <?php  echo"$table_end"; ?> 

        <? echo"$table_end"; ?> 


      </td>

    </tr>

  </form>

  </table>

  </td>

 </tr>
  
</table>