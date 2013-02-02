<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  if ($userdata_admin == "1")  {


      $query_topic = mysql_query("SELECT * from $posts_tblname WHERE id = '$p_id' ORDER by id");

      while ($row_topic = mysql_fetch_assoc($query_topic))  { 

             $t = $row_topic["t"];

      }
   
      $query_thread = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' ORDER by id");

      while ($row_thread = mysql_fetch_assoc($query_thread))  { 

             $f = $row_thread["f"];

      }


      if (!isset($send_del_data))  {

      $query_check_id = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' && id <= '$p_id' ORDER by id");

      $postnumbers    = mysql_num_rows($query_check_id);

      $sidenumbers    = $postnumbers / $postsperpage;

      if ($sidenumbers < 1)  { 

          $link = "index.php?t=$t";
 
      }

      else  {

          for ($count = 1;$count <= 10000;$count++)  {

               if ($sidenumbers > $count)  { 

                   $page = $count + 1;

               }

          }

          $link   = "index.php?t=$t&page=$page#$p_id";

      }

      $text01 ="Diesen Beitrag wirklich löschen?";
 
      include("templates/delete.php");

      }

      if (isset($send_del_data))  {
      
          $check_thread = mysql_num_rows($query_thread); 


          if ($send_del_data == "Ja")  {

              if ($check_thread == "1")  {

                  $delete_thread = "DELETE FROM $threads_tblname WHERE id = '$t'";     

                  mysql_query($delete_thread); 

                  $del_thread = "1";

              }


              $delete_newpost = "DELETE FROM $newposts_tblname WHERE p = '$p_id'";     

              mysql_query($delete_newpost); 

              $delete_post = "DELETE FROM $posts_tblname WHERE id = '$p_id'";     
  
              mysql_query($delete_post);  


              $query_check_id = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' && id < '$p_id' ORDER by id");

          }

 
          $postnumbers    = mysql_num_rows($query_check_id);

          $sidenumbers    = $postnumbers / $postsperpage;

          if ($del_thread == "1")  {

              $link   = "index.php?f=$f";

          }

          else  {

              if ($sidenumbers < 1)  { 

                  $link = "index.php?t=$t";
 
              }

              else  {

                  for ($count = 1;$count <= 10000;$count++)  {

                       if ($sidenumbers > $count)  { 

                           $page = $count + 1;

                       }

                  }

                  $n_id = $p_id - 1;

                  $text01 = "Beitrag wurde gelöscht!";

                  $link   = "index.php?t=$t&page=$page#$n_id";

              }

          }

          include("templates/refresh.php");

      }

  }

  else  {

      include("templates/no_permission.php");

  }