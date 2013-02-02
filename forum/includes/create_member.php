<?php 

  $reg_data = "ok";

  session_register(r_nickname);
  session_register(email);
  session_register(gender);

  session_register(firstname);
  session_register(lastname);
  session_register(birthday);
  session_register(birthmonth);
  session_register(birthyear);
  session_register(place);

  session_register(homepage);
  session_register(icq);
  session_register(aim);
  session_register(yim);
  session_register(msn);

  session_register(job);
  session_register(hobbys);
  session_register(misc);

  session_register(favorite_food);
  session_register(favorite_drink);
  session_register(favorite_music);
  session_register(favorite_movie);
  session_register(favorite_location);

  session_register(hide_email);
  session_register(formmailer);
  session_register(hide_user);
  session_register(email_pm);
  session_register(board_style);
  session_register(language);


  $query_members_free_data = mysql_query("SELECT * from $user_tblname");
   
  while ($row_members_free_data = mysql_fetch_assoc($query_members_free_data))  {

         $nickname_members =  $row_members_free_data["UserName"];

         $email_members    =  $row_members_free_data["UserMail"];


         if ($_POST[r_nickname] == "$nickname_members" && $_POST[email] != "$email_members")  { 

             $text01   = "Der gewählte Nickname ist bereits registriert!";
             $link     = "index.php?do=register";

             $reg_data = "wrong";

         } 

         if ($_POST[r_nickname] != "$nickname_members" && $_POST[email] == "$email_members")  { 
 
            
             $text01   = "Die gewählte Emailadresse ist bereits registriert!";
             $link     = "index.php?do=register";
         
             $reg_data = "wrong";

         } 
 
         if($_POST[r_nickname] == "$nickname_members" && $_POST[email] == "$email_members")  { 
        
            $text01   = "Der gewählte Nickname ist bereits registriert!<br>";
            $text02   = "Die gewählte Emailadresse ist bereits registriert!";
            $link     = "index.php?do=register";

            $reg_data = "wrong";

       } 

  } 


  $allowed_chars = '[^a-z0-9|*_\-\:\~\.\ ]';  
 
  if ( eregi($allowed_chars, $_POST[r_nickname]) )  {

      $text01   = "Der Nickname darf keine Sonderzeichen enthalten!";         
      $link     = "index.php?do=register";
      
      $reg_data = "wrong"; 

  }

  if ($reg_data == "wrong")  { 

      include("templates/refresh.php");

  }

  if ($reg_data != "wrong")  { 

  
      if (isset($send_reg_data))  {

          $crypt_password  = MD5($r_password);

          $query_register  = "INSERT INTO $user_tblname (UserName, UserPass, UserMail, UserRegdate, UserIP, last_online_time, postnumbers, gender, firstname, lastname, birthday, birthmonth, birthyear, place, homepage, icq, aim, yim, msn, job, hobbys, misc, favorite_food, favorite_drink, favorite_music, favorite_movie, favorite_location, hide_email, formmailer, hide_user, email_pm, template, language)"; 

          $query_register .= "VALUES ('$r_nickname', '$crypt_password', '$email', '$regdate', '$userdata_ip', '', '0', '$gender', '$firstname', '$lastname', '$birthday', '$birthmonth', '$birthyear', '$place', '$homepage', '$icq', '$aim', '$yim', '$msn', '$job', '$hobbys', '$misc', '$favorite_food', '$favorite_drink', '$favorite_music', '$favorite_movie', '$favorite_location', '$hide_email', '$formmailer', '$hide_user', '$email_pm', '$board_style', '$language')";

          $result          = @mysql_query($query_register) OR die(mysql_error());


          $query_newest_reg_id      = mysql_query("SELECT * from $user_tblname ORDER by UserID");
   
          while ($row_newest_reg_id = mysql_fetch_assoc($query_newest_reg_id))  {

          $newest_reg_id    =  $row_newest_reg_id["UserID"];       

          }
 

          if ($m_account_activation == "no")  {

              $update_register  = "UPDATE $user_tblname SET UserActive = '1', activation_code = '' WHERE UserID = '$newest_reg_id'"; 


          }

          else  {

              $act_code = md5 (uniqid (rand()));

              $update_register  = "UPDATE $user_tblname SET UserActive = '0', activation_code = '$act_code' WHERE UserID = '$newest_reg_id'"; 


          }

          mysql_query($update_register) OR die(mysql_error());

      }

      include("templates/create_member_true.php");

  }