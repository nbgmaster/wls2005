<?php  

  if ($action == "logout")  { 

      include("includes/logout.php");

  }

  if ($action == "login")  {

      include("includes/login.php");
   
  }

  if ($action == "")  {

      if ($auto_logon_id == "" or $userdata_id == "" or $auto_logon_session == "")  {

          include("templates/login.php");

      }

      else  {

          include("templates/logout.php");

      }

  }