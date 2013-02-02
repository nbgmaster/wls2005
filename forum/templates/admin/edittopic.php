<form action="index.php?do=edittopic" method="post">


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

       <td align="center" class="cellbg">

       Thema bearbeiten

       </td>

     </tr>

</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td class="tablea" width="50%">
    
    <b>

    Thema:

    </b>

    </td>

    <td class="tableb" width="50%">


       <input type="text" name="topicname" value="<?php  echo"$topicname"; ?>" style="width:300px;" maxlength="30">

       <input type="text" name="topicname" value="<? echo"$topicname"; ?>" style="width:300px;" maxlength="30">


        </td>

  </tr>
    
</table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

       <td align="center" class="tableb">

       <input type="hidden" name="adminoptions" value="edittopic">


       <input type="hidden" name="t" value="<?php  echo"$t"; ?>">

       <input type="hidden" name="t" value="<? echo"$t"; ?>">


       <input type="submit" class="input" name="send_edit_data" value="Thema ändern">

       </td>

     </tr>

  </form>

</table>