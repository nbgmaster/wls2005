<?php 

  // Start Session

  session_start();
  ob_start();


  // Load:: Config Data

  include("config.php"); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="de" xml:lang="de">
<head>

       <title>nbg-master.de FORUM Script v1.0</title>

       <?php  

         // Load:: Style Data

         include("stylesheets/style.php");

       ?>

       <meta http-equiv="imagetoolbar" content="no">

       <script type="text/javascript" src="javascript/bbcode.js" language="JavaScript1.2"></script>

  </head>


  <body>

  <center>

  <a name="top"></a>

  <?php 

    // Load:: Stats

    include("includes/stats.php");


    // Load:: Header

    include("templates/header.php");


    // Load:: Login Template

    if ($action == "" && $f == "" && $t == "" && $do == "")  {  

        include("login.php");

        if ($stats_enable == "1")  {

            include("includes/stats_top.php");

        }

    }

    // Load:: Mainframe
 
    if ($hidecat != "" or $showcat != "")  {

        include("includes/hidecat.php"); 

    }

    if ($action == "")  { 


        // Check:: Access Board

        if ($board_disable == "0")  { 

            $proof_permission = "0";

            if ($do == "" && $p_boardaccess == "1")  { 

                include("forum.php"); $proof_permission = "1";
                 
            }

            else  {

                if ($do == "newtopic" && $p_postaccess == "1" or $do == "edit" && $p_postaccess == "1")  {  include("reply.php"); $proof_permission = "1";    }

                if ($do == "reply" && $p_postaccess == "1")   {  include("reply.php");  $proof_permission = "1";    }

                if ($do == "post" && $p_postaccess == "1")   {  include("post.php");  $proof_permission = "1";    }

                if ($do == "inbox" or $do == "outbox" && $auto_logon_id != "" && $auto_logon_session != "" && $userdata_id != "" && $userdata_status == "1")   {  include("pmbox.php"); $proof_permission = "1";    }

                if ($do == "usercp" && $auto_logon_id != "" && $auto_logon_session != "" && $userdata_id != "" && $userdata_status == "1")   {  include("usercp.php"); $proof_permission = "1";    }

                if ($do == "profile" && $p_profileaccess == "1")  {  include("profile.php"); $proof_permission = "1";    }

                if ($do == "members" && $p_memberaccess == "1")  {  include("members.php"); $proof_permission = "1";   }

                if ($do == "search" && $p_searchaccess == "1")  {  include("search.php"); $proof_permission = "1";   }

                if ($do == "faq")         {  include("faq.php"); $proof_permission = "1";       }

                if ($do == "team")        {  include("team.php");  $proof_permission = "1";     }

                if ($do == "register")    {  include("register.php"); $proof_permission = "1";  }

                if ($do == "markread")    {  include("includes/markread.php"); $proof_permission = "1";  }

                if ($do == "movetopic")   {  include("admin/adminoptions.php");  $proof_permission = "1";    }

                if ($do == "edittopic")   {  include("admin/adminoptions.php");  $proof_permission = "1";    }

                if ($do == "admin" && $userdata_admin == "1")       {  include("admin.php");  $proof_permission = "1";    }

                if ($do == "delete")      {  include("includes/delete.php");  $proof_permission = "1";    }

                if ($do == "newpm")       {  include("includes/newpm.php");  $proof_permission = "1";    }

                if ($do == "vote")        {  include("includes/vote.php");  $proof_permission = "1";    }
     
                if ($do == "email")       {  include("includes/email.php");  $proof_permission = "1";    }

                if ($do == "addbuddy")       {  include("includes/addbuddy.php");  $proof_permission = "1";    }
   
                if ($do == "activate_user")       {  include("includes/activate_user.php");  $proof_permission = "1";    }

                if ($proof_permission == "0")  { 

                    if ($do == "activate_user")  {

                    include("$do.php");
                       
                    }

                    else  {

                    include("templates/no_permission.php");

                    }

                }
 
            }

        }
 
        if ($board_disable == "1")  {

            if ($do == "admin")  {

                include("$do.php");

            }

            else  {

                include("templates/board_disabled.php");

            }

        }

    }

    if ($action == "login")  {

        include("includes/login.php");
                
    }

    if ($action == "logout")  {
                   
        include("includes/logout.php");

    }


  // Load:: Footer

  include("templates/footer.php");

?>

</center>

</body>
</html>

