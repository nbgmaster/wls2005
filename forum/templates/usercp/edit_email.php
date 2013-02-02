<script type="text/javascript" src="javascript/usercp/edit_email.js" language="JavaScript1.2"></script>


<form name="usercp_form" action="index.php?do=usercp&sec=edit_email&module=change" method="post" onsubmit="return check_usercp()">



<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

         <td class="tablea" width="50%">
 
         <b>Ihr aktuelles Passwort</b>

         </td>

         <td  class="tablea" width="50%">

         <input type="password" name="password" maxlength="20" size="40">

         </td>

    </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>Neue Emailadresse</b>

         </td>

         <td  class="tablea" width="50%">


         <input type="text" class="input" name="email" maxlength="50" size="40" value="<?php  echo"$userdata_email"; ?>">

         <input type="text" class="input" name="email" maxlength="50" size="40" value="<? echo"$userdata_email"; ?>">


         </td>

    </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>Neue Emailadresse wiederholen</b>

         </td>

         <td  class="tablea" width="50%">


         <input type="text" class="input" name="email2" maxlength="50" size="40" value="<?php  echo"$userdata_email"; ?>">

         <input type="text" class="input" name="email2" maxlength="50" size="40" value="<? echo"$userdata_email"; ?>">


         </td>

    </tr>

</table>