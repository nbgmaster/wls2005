<br>

<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td class="tableb" align="center" width="50%">
    
    <font class="big"><b>

    <table><tR><td>

    Du bist nicht eingeloggt oder hast keine Berechtigung, diese Seite zu betreten. Das könnte aus einem der folgenden Gründe der Fall sein:

    </td></tr><tr><td>


    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> Du bist nicht eingeloggt. Fülle die Login-Felder am Ende dieser Seite aus und probiere es erneut!

    </td></tr><tr><td>

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> Du hast keine Berechtigung, die Seite, die Du aufrufen wolltest, zu betreten. Versuchst Du, den Beitrag eines anderen zu editieren oder eine Moderatoren-/Administrator-Funktion aufzurufen? Überprüfe in den Hilfe des Forums, ob Du diese Aktion ausführen darfst.

    </td></tr><tr><td>

    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> Wenn Du versuchst, einen Beitrag zu schreiben, könnte es sein, daß der Administrator Deinen Account gesperrt hat - oder aber er wurde noch nicht aktiviert.

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> Du bist nicht eingeloggt. Fülle die Login-Felder am Ende dieser Seite aus und probiere es erneut!

    </td></tr><tr><td>

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> Du hast keine Berechtigung, die Seite, die Du aufrufen wolltest, zu betreten. Versuchst Du, den Beitrag eines anderen zu editieren oder eine Moderatoren-/Administrator-Funktion aufzurufen? Überprüfe in den Hilfe des Forums, ob Du diese Aktion ausführen darfst.

    </td></tr><tr><td>

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> Wenn Du versuchst, einen Beitrag zu schreiben, könnte es sein, daß der Administrator Deinen Account gesperrt hat - oder aber er wurde noch nicht aktiviert.


    </td></tr></table>
 
    </b></font>

    </td>

    <td class="tablea" align="center" width="50%">


    <?php  if ($auto_logon == "" && $userdata_id == "")  { ?>

    <? if ($auto_logon == "" && $userdata_id == "")  { ?>

 
    <form action="index.php?action=login" method="post">

    <table cellpadding="3">

      <tr>

        <td align="center">

        <table cellspacing="0" cellpadding="0">

          <tr>

            <td>


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Nickname:</b>&nbsp;

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Nickname:</b>&nbsp;

                       
            <br><br> 
                     
            </td>

            <td> 

            <input type="text" name="login_username" class="input">

            <br><br> 

            </td>

          </tr>

          <tr>

            <td>
 

            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Passwort:</b>&nbsp;

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Passwort:</b>&nbsp;


            </td>

            <td>  

            <input type="password" name="login_userpw" class="input">

            </td>

           </tr>

         </table>

         <br>


         <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Automatisches Einloggen:</b> 

         <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Automatisches Einloggen:</b> 

  
         <input type="checkbox" name="auto_login" value="1">

         <br><br>
           
         <input type="submit" class="input" value="Login" name="submit_login_data" style="width:80px;">

         <br><br>


         <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 

         <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> 


         <a href="index.php?do=register">Noch nicht registriert? Jetzt hier kostenlos anmelden!</a>

         </form>


         <?php  } else { ?>

         <? } else { ?>


         <table cellpadding="3" cellspacing="1" class="tableinborder" width="90%">

           <tr>

             <td class="tablea" width="150">

             <font class="big">

             <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

             <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

             Angemeldet als:
             </font>

             </td>

             <td class="tableb">

             <font class="big">

             <b><?php  echo"$userdata_name"; ?></b>

             <b><? echo"$userdata_name"; ?></b>

             </font>

             </td>

          </tr>

          <tr>

             <td class="tableb">

             <font class="big">

             <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

             <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

             Dein Status: 
             </font>
 
             </td>

             <td class="tablea">

             <font class="big">

             <b><?php  if ($userdata_status == "1")  { echo"Aktiv"; } else { echo"Inaktiv"; } ?></b>

             <b><? if ($userdata_status == "1")  { echo"Aktiv"; } else { echo"Inaktiv"; } ?></b>

             </font>

             </td>

          </tr>  

          <tr>

             <td class="tablea">

             <font class="big">

             <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

             <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

             Dein User Level: 
             </font>

             </td>

             <td class="tableb">

             <font class="big">

             <b><?php  if ($userdata_admin == "1")  { echo"Admin"; } else { echo"User"; } ?></b>

             <b><? if ($userdata_admin == "1")  { echo"Admin"; } else { echo"User"; } ?></b>

             </font>

             </td>

           </tr>

           <tr>

             <td class="tableb">

             <font class="big">

             <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

             <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

             <a href="index.php?action=logout">[Abmelden]</a>
             </font>

             </td>

             <td class="tablea">

             </td>

           </tr>

         </table>


         <?php  } ?>

         <? } ?>


         </td>

      </tr>

  </table>

  </td>

 </tr>

</table>