<br>
<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td class="tableb" align="center" width="50%">
    
    <font class="big"><b>

    <table><tR><td>

    Du bist nicht eingeloggt oder hast keine Berechtigung, diese Seite zu betreten. Das könnte aus einem der folgenden Gründe der Fall sein:

    </td></tr><tr><td>

<<<<<<< HEAD
    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> Du bist nicht eingeloggt. Fülle die Login-Felder am Ende dieser Seite aus und probiere es erneut!

    </td></tr><tr><td>

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> Du hast keine Berechtigung, die Seite, die Du aufrufen wolltest, zu betreten. Versuchst Du, den Beitrag eines anderen zu editieren oder eine Moderatoren-/Administrator-Funktion aufzurufen? Überprüfe in den Hilfe des Forums, ob Du diese Aktion ausführen darfst.

    </td></tr><tr><td>

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> Wenn Du versuchst, einen Beitrag zu schreiben, könnte es sein, daß der Administrator Deinen Account gesperrt hat - oder aber er wurde noch nicht aktiviert.
=======
    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> Du bist nicht eingeloggt. Fülle die Login-Felder am Ende dieser Seite aus und probiere es erneut!

    </td></tr><tr><td>

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> Du hast keine Berechtigung, die Seite, die Du aufrufen wolltest, zu betreten. Versuchst Du, den Beitrag eines anderen zu editieren oder eine Moderatoren-/Administrator-Funktion aufzurufen? Überprüfe in den Hilfe des Forums, ob Du diese Aktion ausführen darfst.

    </td></tr><tr><td>

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> Wenn Du versuchst, einen Beitrag zu schreiben, könnte es sein, daß der Administrator Deinen Account gesperrt hat - oder aber er wurde noch nicht aktiviert.
>>>>>>> af2fff1... version1

    </td></tr></table>
 
    </b></font>

    </td>

    <td class="tablea" align="center" width="50%">

<<<<<<< HEAD
    <?php  if ($auto_logon == "" && $userdata_id == "")  { ?>
=======
    <? if ($auto_logon == "" && $userdata_id == "")  { ?>
>>>>>>> af2fff1... version1
 
    <form action="index.php?action=login" method="post">

    <table cellpadding="3">

      <tr>

        <td align="center">

        <table cellspacing="0" cellpadding="0">

          <tr>

            <td>

<<<<<<< HEAD
            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Nickname:</b>&nbsp;
=======
            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Nickname:</b>&nbsp;
>>>>>>> af2fff1... version1
                       
            <br><br> 
                     
            </td>

            <td> 

            <input type="text" name="login_username" class="input">

            <br><br> 

            </td>

          </tr>

          <tr>

            <td>
 
<<<<<<< HEAD
            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Passwort:</b>&nbsp;
=======
            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Passwort:</b>&nbsp;
>>>>>>> af2fff1... version1

            </td>

            <td>  

            <input type="password" name="login_userpw" class="input">

            </td>

           </tr>

         </table>

         <br>

<<<<<<< HEAD
         <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Automatisches Einloggen:</b> 
=======
         <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Automatisches Einloggen:</b> 
>>>>>>> af2fff1... version1
  
         <input type="checkbox" name="auto_login" value="1">

         <br><br>
           
         <input type="submit" class="input" value="Login" name="submit_login_data" style="width:80px;">

         <br><br>

<<<<<<< HEAD
         <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 
=======
         <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> 
>>>>>>> af2fff1... version1

         <a href="index.php?do=register">Noch nicht registriert? Jetzt hier kostenlos anmelden!</a>

         </form>

<<<<<<< HEAD
         <?php  } else { ?>
=======
         <? } else { ?>
>>>>>>> af2fff1... version1

         <table cellpadding="3" cellspacing="1" class="tableinborder" width="90%">

           <tr>

             <td class="tablea" width="150">

             <font class="big">
<<<<<<< HEAD
             <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">
=======
             <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">
>>>>>>> af2fff1... version1
             Angemeldet als:
             </font>

             </td>

             <td class="tableb">

             <font class="big">
<<<<<<< HEAD
             <b><?php  echo"$userdata_name"; ?></b>
=======
             <b><? echo"$userdata_name"; ?></b>
>>>>>>> af2fff1... version1
             </font>

             </td>

          </tr>

          <tr>

             <td class="tableb">

             <font class="big">
<<<<<<< HEAD
             <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">
=======
             <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">
>>>>>>> af2fff1... version1
             Dein Status: 
             </font>
 
             </td>

             <td class="tablea">

             <font class="big">
<<<<<<< HEAD
             <b><?php  if ($userdata_status == "1")  { echo"Aktiv"; } else { echo"Inaktiv"; } ?></b>
=======
             <b><? if ($userdata_status == "1")  { echo"Aktiv"; } else { echo"Inaktiv"; } ?></b>
>>>>>>> af2fff1... version1
             </font>

             </td>

          </tr>  

          <tr>

             <td class="tablea">

             <font class="big">
<<<<<<< HEAD
             <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">
=======
             <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">
>>>>>>> af2fff1... version1
             Dein User Level: 
             </font>

             </td>

             <td class="tableb">

             <font class="big">
<<<<<<< HEAD
             <b><?php  if ($userdata_admin == "1")  { echo"Admin"; } else { echo"User"; } ?></b>
=======
             <b><? if ($userdata_admin == "1")  { echo"Admin"; } else { echo"User"; } ?></b>
>>>>>>> af2fff1... version1
             </font>

             </td>

           </tr>

           <tr>

             <td class="tableb">

             <font class="big">
<<<<<<< HEAD
             <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">
=======
             <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">
>>>>>>> af2fff1... version1
             <a href="index.php?action=logout">[Abmelden]</a>
             </font>

             </td>

             <td class="tablea">

             </td>

           </tr>

         </table>

<<<<<<< HEAD
         <?php  } ?>
=======
         <? } ?>
>>>>>>> af2fff1... version1

         </td>

      </tr>

  </table>

  </td>

 </tr>

</table>