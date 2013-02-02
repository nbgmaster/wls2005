<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  // Check:: Inbox or Outbox variables

  if ($do == "inbox")  { 

      $pmbox  = "receiver_id"; 

      $pmbox2 = "sender_id"; 
 
      $pmbox3 = "$pm_in_tblname"; 

      $pmbox4 = "inbox";

      $pmbox5 = "Posteingang";

      $pmbox6 = "empfangen";

      $max_pm = $max_pm_inbox;

      $usercp_navi  = "<a href=\"index.php?do=inbox\">Posteingang</a>"; 
      $usercp_navi2 = "<a href=\"index.php?do=outbox\">Zum Postausgang wechseln</a>";
   
  } 

  else  { 

      $pmbox  = "sender_id"; 

      $pmbox2 = "receiver_id"; 

      $pmbox3 = "$pm_out_tblname";

      $pmbox4 = "outbox";

      $pmbox5 = "Postausgang";

      $pmbox6 = "versendet";

      $max_pm = $max_pm_outbox;

      $usercp_navi  = "<a href=\"index.php?do=outbox\">Postausgang</a>"; 
      $usercp_navi2 = "<a href=\"index.php?do=inbox\">Zum Posteingang wechseln</a>";

  }


  // Load:: Header

  include("templates/usercp/usercp_top.php");


  // Delete PM


  if ($sec == "delete")  { 

      if ($_POST["deloption"] != "")  {

          if ($deloption == "del_pm")  {

              foreach ($del_id as $element)  {

                       $delete_messages = "DELETE FROM $pmbox3 WHERE id = '$element'";     

                       mysql_query($delete_messages) OR die(mysql_error());  

              }

              $text01 = "Nachrichten gelöscht!";

          }

          else  { 

              $delete_messages = "DELETE FROM $pmbox3 WHERE $pmbox2 = '$userdata_id'";     

              mysql_query($delete_messages) OR die(mysql_error());  

              $text01 = "Nachrichten gelöscht!";

          }

       $link   = "index.php?do=$pmbox4";

       include("templates/refresh.php");

       }
  
  }


  // Read PM

  if ($sec == "read")  {


      $query_message = mysql_query("SELECT * from $pmbox3 WHERE id = '$_GET[m_id]'");

      while ($row_message = mysql_fetch_assoc($query_message))  {

             if ($row_message["$pmbox"] == $userdata_id)  { 

                 if ($do == "inbox")  {

                     // Update:: Status PM-Box read/unread

                     $query_pm_read = "UPDATE $pmbox3 SET status = '1' WHERE id = '$_GET[m_id]'";     

                     mysql_query($query_pm_read) OR die(mysql_error()); 

                 }

                 $sender_id   = $row_message["sender_id"];
 
                 $post_time   =  date("H:i",$row_message["time"]);
                       
                 $post_date   =  date("d.m.Y",$row_message["time"]);
 
                 $query_msg_user = mysql_query("SELECT * from $user_tblname WHERE UserID = '$row_message[from]'");
  
                 while ($row_msg_user  =  mysql_fetch_assoc($query_msg_user))  { 

                        $msg_user_name = $row_msg_user["UserName"]; 

                 }

                 include("includes/show_posts.php");

             }

             else  {  

                include("templates/pm_noaccess.php");

             }

       }
  
  }


  // Show PMs

  if ($sec == "")  {

      $query_messages = mysql_query("SELECT * from $pmbox3 WHERE $pmbox = '$userdata_id' order by id DESC");
  
      $message_numbers = mysql_num_rows($query_messages);

     if ($message_numbers == $max_pm)  {

         $hilight_max  = "<font color=\"$fontcolor_title\"><b>";

         $hilight_max2 = "</b></font>";

     }

      if ($message_numbers == "0")  { 

          include("templates/pm_nomessages.php");

      }
 
      else  {

          include("includes/navi_sides.php");

          include("templates/pmbox_top.php");

          while ($row_messages  =  mysql_fetch_assoc($query_messages))  {

                 $query_msg_user = mysql_query("SELECT * from $user_tblname WHERE UserID = '$row_messages[$pmbox2]'");

                 while ($row_msg_user  =  mysql_fetch_assoc($query_msg_user))  {

                        $msg_user_id   = $row_msg_user["UserID"];
                        $msg_user_name = $row_msg_user["UserName"]; 

                 }

                 $pm_time    =  date("d.m.Y, H:i",$row_messages["time"]);

                 if ($row_messages["status"] == "1")  {

                     $msg_status = "folder.gif"; 

                 }

                 else  {

                     $msg_status = "newfolder.gif"; 

                 }

                 include("templates/pmbox.php");
 
          }

          include("templates/close_table.php");

     }


     if ($message_numbers != "0")  {

         include("templates/pmbox_form_end.php");

     } 

  }