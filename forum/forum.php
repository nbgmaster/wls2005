<?php 
     
  if ($t == "")  {

      // Load:: Categorys & Forums

      if ($c == "")  {

          // Load:: Categorys

          if ($f == "")  { 

              include("categorys.php"); 

          }

          // Load:: Threads

          if ($f != "")  {

              if ($p_readaccess == "1")  {

              include("show_threads.php");

              }

              else  {

              include("templates/no_permission.php");

              }

          }

      } 

      else  {

          // Load:: Category

          include("main.php");

      }

  }

  else  { 

      // Load:: Posts
                     
              if ($p_readaccess == "1")  {

                  if ($_POST[adminoptions] == "movetopic" or $_POST[adminoptions] == "edittopic" or $_POST[adminoptions] == "deletetopic")  {

                      include("admin/adminoptions.php");   

                  }

                  else  { 
              
                      include("show_posts.php");

                  }
 
              }

              else  {

              include("templates/no_permission.php");

              }

  }