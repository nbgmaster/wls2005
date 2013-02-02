<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  if ($sec == "edit_nickname")  { 

      $usercp_navi = "Nickname ändern";
  
      include("templates/usercp/usercp_top.php");

      if ($change_nick_disable == "0")  {

          include("includes/usercp/edit_nickname.php"); 
          include("templates/usercp/edit_form_end.php");

      }

      else  {

           $text01 = "Diese Funktion wurde vom Admin deaktiviert!";
           $link   = "javascript:history.back();";

           include("templates/refresh.php");    

      }

  }

  if ($sec == "edit_pw")  { 

      $usercp_navi = "Passwort ändern";
  
      include("templates/usercp/usercp_top.php");
      include("includes/usercp/edit_pw.php"); 
      include("templates/usercp/edit_form_end.php");

  }

  if ($sec == "edit_email")  {
 
      $usercp_navi = "Emailadresse ändern";
     
      include("templates/usercp/usercp_top.php");
      include("includes/usercp/edit_email.php");
      include("templates/usercp/edit_form_end.php");

  }

  if ($sec == "edit_settings")  { 

      $usercp_navi = "Einstellungen ändern";
   
      include("templates/usercp/usercp_top.php");
      include("includes/usercp/edit_settings.php");
      include("templates/usercp/edit_form_end.php");

  }

  if ($sec == "edit_profile")  { 

      $usercp_navi = "Profildaten ändern";
 
      include("templates/usercp/usercp_top.php");
      include("includes/usercp/edit_profile.php");
      include("templates/usercp/edit_form_end.php");

  }

  if ($sec == "edit_signature")  { 

      if ($module == "")  { 

          $usercp_navi = "Signatur ändern";
 
          include("templates/usercp/usercp_top.php");
          include("includes/usercp/edit_signature.php");

      }

      else  {

          include("includes/usercp/edit_signature.php"); 

      }

  }

  if ($sec == "edit_avatar")  {

      $usercp_navi = "Avatar ändern"; 
  
      include("templates/usercp/usercp_top.php");
      include("includes/usercp/edit_avatar.php");

  }

  if ($sec == "buddylist")  { 

      $usercp_navi = "Freundesliste"; 
 
      include("templates/usercp/usercp_top.php");
      include("includes/buddylist.php");

  }

  if ($sec == "ignorelist")  { 

      $usercp_navi = "Ignorierliste"; 
 
      include("templates/usercp/usercp_top.php");
      include("includes/buddylist.php");

  }

  if ($sec == "")  {

      $usercp_navi = "Hauptmenü";
 
      include("templates/usercp/usercp_top.php");

  }

  if ($sec == "")  {

      include("templates/usercp/usercp.php");

  }