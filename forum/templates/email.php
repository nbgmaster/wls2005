<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
 
  <tr>

    <td class="tableb" align="center">

    <br>

<<<<<<< HEAD
    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <font class="big"><b>Email an <?php  echo"$receiver"; ?> schreiben</b></font>
=======
    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <font class="big"><b>Email an <? echo"$receiver"; ?> schreiben</b></font>
>>>>>>> af2fff1... version1

    <br><br><br>

    <script language="JavaScript" type="text/javascript" src="./javascript/form_email.js"></script>

<<<<<<< HEAD
    <form action="index.php?do=email&sec=send&user_id=<?php  echo"$user_id"; ?>" name="f_email" method="post" onsubmit="return check_email()">
=======
    <form action="index.php?do=email&sec=send&user_id=<? echo"$user_id"; ?>" name="f_email" method="post" onsubmit="return check_email()">
>>>>>>> af2fff1... version1

    <table cellspacing="1" cellpadding="5" class="tableinborder">

      <tr>

        <td width="20%" class="tableb">

        Dein Name:

        </td>

        <td width="80%" class="tablea"> 

<<<<<<< HEAD
        <b><?php  echo"$userdata_name"; ?></b>
=======
        <b><? echo"$userdata_name"; ?></b>
>>>>>>> af2fff1... version1

        </td>

      </tr>

      <tr>

        <td class="tableb">

        Betreff:

        </td>

        <td class="tablea"> 

        <input type="text" size="50" name="subject">

        </td>

      </tr>

      <tr>

        <td class="tableb">

        Deine Mitteilung:

        </td>

        <td class="tablea">

        <textarea cols="75" rows="12" name="message"></textarea>

        </td>

      </tr>

    </table>

    <br>

<<<<<<< HEAD
    <input type="hidden" name="receiver_email" value="<?php  echo"$receiver_email"; ?>">
    <input type="hidden" name="receiver" value="<?php  echo"$receiver"; ?>">
=======
    <input type="hidden" name="receiver_email" value="<? echo"$receiver_email"; ?>">
    <input type="hidden" name="receiver" value="<? echo"$receiver"; ?>">
>>>>>>> af2fff1... version1

    <input type="submit" value="Email abschicken" class="submit">

    </form>

    <br>

    </td>

  </tr>

</table>