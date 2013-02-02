<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  if ($module == "")  { 

      $form_link = "index.php?do=usercp&sec=edit_signature&module=change";

      $query_signature = mysql_query("SELECT * from $user_tblname WHERE UserID = '$userdata_id'");

      while($row_signature = mysql_fetch_assoc($query_signature))  {  

      $str = $row_signature["signature"];

      }

      include("./templates/reply.php"); 

      }


  if ($module == "change")  { 

<<<<<<< HEAD
      $message = str_replace("[PHP]", "[PHP]<?php ", $message);
=======
      $message = str_replace("[PHP]", "[PHP]<?", $message);
>>>>>>> af2fff1... version1
      $message = str_replace("[/PHP]", "?>[/PHP]", $message);

      $update_signature = "UPDATE $user_tblname SET signature = '$message' WHERE UserID = '$userdata_id'";     

      mysql_query($update_signature) OR die(mysql_error());

      $text01 = "Signatur wurde geändert!";
      $link   = "index.php?do=usercp";

      include("./templates/refresh.php");

  }
