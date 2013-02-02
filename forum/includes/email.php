<?php 

  if ($sec == "send")  {

      $efalse = "0";

      $to      = $receiver_email; 
      $from    = "From: $admin_email"; 
      $message = "Hallo $name
 
      $userdata_name hat dir auf $board_domain eine Email geschickt:

      -------------------------------------------
      $message
      -------------------------------------------

      Auf $board_domain kannst du $userdata_name antworten!

      ";

      mail($to, $subject, $message, $from) 
      or $efalse = "1"; 

      $link   = "index.php?do=members";

      if ($efalse == "1")  {

          $text01 = "Email wurde nicht versendet!";

      }

      else  {

          $text01 = "Email wurde versendet!";

      }

      include("./templates/refresh.php");

  }

  if ($sec == "")  {

      $query_email = mysql_query("SELECT * from $user_tblname WHERE UserID = '$user_id'");
     
      while  ($row_email  =  mysql_fetch_assoc($query_email))  {
 
              $receiver         = "$row_email[UserName]";
              $receiver_email   = "$row_email[UserMail]";

     }

     include("./templates/email.php");

  }

