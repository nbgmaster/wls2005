<table cellpadding="4" cellspacing="1" border="0" style="width:100%;" class="tableinborder">
   
  <tr>

    <form action="index.php?action=login" method="post">
    
    <td class="cellbg" align="left"><b>Anmelden</b></td> 
   
 </tr>
   
  <tr>
   
  <td class="tableb">

   <table cellspacing="0" cellpadding="0" width="98%">

      <tr>
      
        <td>


        <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Nickname:</b>&nbsp;

        <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Nickname:</b>&nbsp;


        <input type="text" name="login_username" class="input">

        </td>

        <td>
 

        <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Passwort:</b>&nbsp;

        <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Passwort:</b>&nbsp;


        <input type="password" name="login_userpw" class="input">

        </td> 

        <td width="185">


        <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Automatisches Einloggen:</b> 

        <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Automatisches Einloggen:</b> 


        </td>

        <td>

        <input type="checkbox" name="auto_login" value="1"> 

        </td>

        <td width="20">

        &nbsp;

        </td>

        <td>

        <input type="submit" class="input" value="Anmelden" name="submit_login_data" style="width:80px;">

        </td>

       </tr>

      </table>

      </td>

    </tr>

  </form>

  </table>

  </td>

 </tr>
  
</table>