
<?php  


  $query_admin_config = mysql_query("SELECT * from $admin_config_tblname");    

  while  ($row_admin_config  =  mysql_fetch_assoc($query_admin_config))  {

          $admin_email           =  $row_admin_config["admin_email"];       // Admin Email

          $board_domain          =  $row_admin_config["board_domain"];      // Board Domain

          $board_direction       =  $row_admin_config["board_direction"];   // Board Direction

  }

  $Header = "MIME-Version: 1.0\n";

  $Header .= "Content-type: text/html; charset=iso-8859-1\n";

  $Header .= "From: $admin_email\n"; 


  $to = $email; 

  $subject = "Erfolgreiche Registrierung auf nbg-master.de"; 

  if ($m_account_activation == "no")  {

  $message = "Hallo $nickname<br><br>

              Deine Registrierung auf nbg-master.de war erfolgreich!<br><br>

              Du kannst dich in Zukunft mit deiner Email Adresse und deinem Passwort einloggen und hast 
                    
              damit Zugriff auf die komplette Website!<br><br>

              Solltest du einmal dein Passwort vergessen, dann schreib einfach eine Email an 

              webmaster@nbg-master.de!



              Ich w�nsche dir viel Spa� auf der Homepage!


              mit freundlichen Gr��en


              Stefan Richter";

  }
  
  if ($m_account_activation == "email")  {


  $message = "Hallo $nickname<br><br>

              Deine Registrierung auf nbg-master.de war erfolgreich!<br><br>

              Du musst deine Registrierung noch mit folgendem Link best�tigen:<br><br>

              <a href=\"http://".$board_domain$board_direction."index.php?do=activate_user&activation_code=$act_code\">Jetzt freischalten!</a>
 
              ";

  }

  if ($m_account_activation == "admin")  {

  $message = "Hallo $nickname<br><br>

              Deine Registrierung auf nbg-master.de war erfolgreich!<br><br>

              In den n�chsten Stunden werden deine Daten �berpr�ft und dann ggf. vom Admin freigeschalten.

              ";

  }

  mail($to, $subject, $message, $Header);


  $text01 = "Erfolgreich registriert!";
  $link   = "index.php";


  include("refresh.php");