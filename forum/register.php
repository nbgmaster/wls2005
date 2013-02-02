<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  if ($auto_logon == "" && $userdata_id == "")  { 

      if ($sec == "create_member")  { 

          include("includes/create_member.php");
 
      }

      else  {

          include("templates/register.php");

      }   // End of sec == ""

  }   // End of Cookie Check

  else  { 
  
      $text01 = "Sie sind bereits angemeldet!";
      $link   = "javascript:history.back();";

      include('templates/refresh.php');

  }
