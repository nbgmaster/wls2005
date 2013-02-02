<?php 

  $granted_write = "0";


  $query_this_f = mysql_query("SELECT * from $threads_tblname WHERE id = '$t' ORDER by id");
	
  while ($row_this_f = mysql_fetch_assoc($query_this_f))  { 

         $f = "$row_this_f[f]";

  }


  $check_write   = mysql_query("SELECT * from $f_tblname WHERE id = '$f'");

  while ($row_write = mysql_fetch_assoc($check_write))  { 

         if ($row_write[f_write] == "all")  {

             $granted_write = "1"; 

         }


         if ($row_write[f_write] == "reg")  {

             if ($userdata_id != "")  { 

                 $granted_write = "1";

             }  

         }

         if ($row_write[f_write] == "mod")  {

             $check_mod   = mysql_query("SELECT * from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f'");

             $mod_status  = mysql_num_rows($check_mod);

             if ($mod_status != "" && $mod_status != "0")  {

                 $granted_write = "1";

             }  

         }

         if ($row_write[f_write] == "admin")  {

              if ($userdata_admin == "1")  {

                 $granted_write = "1";

             } 

        }       
      
  }

  // Hits Reload Access

  include("includes/thread_hits_reload.php");

  include("replace/bbcode_php_function.php");

  if ($_POST[adminoptions] == "closetopic")  {

      $query_t_status = mysql_query("SELECT * from $threads_tblname WHERE id = '$t'");

      while ($row_t_status = mysql_fetch_assoc($query_t_status))  { 

             $current_status = $row_t_status["status"];

      }

      if ($current_status == "1")  { $new_status = "0"; }
      if ($current_status == "0")  { $new_status = "1"; }

      $update_t_option = "UPDATE $threads_tblname SET status = '$new_status' WHERE id = '$t'";     

      mysql_query($update_t_option) OR die(mysql_error());  

  }

  if ($reload_access == "yes")  {

      $query_thread_hits = mysql_query("SELECT hits from $threads_tblname WHERE id = '$t'");

      while ($row_thread_hits = mysql_fetch_assoc($query_thread_hits))  { 

             $thread_hits     = $row_thread_hits["hits"]; 

             $new_thread_hits = $thread_hits + 1;

      } 

      $sql_thread_hits = "UPDATE $threads_tblname SET hits = '$new_thread_hits' WHERE id = '$t'";     

      mysql_query($sql_thread_hits) OR die(mysql_error());  


  }


  // Load:: Main Data 

  include("includes/show_posts.php");


  // Check New Posts

  $check_newposts = mysql_query("SELECT * from $newposts_tblname WHERE t = '$t' && user_id = '$userdata_id'");
  $newposts       = mysql_num_rows($check_newposts);

  if ($newposts != "0")  { 

      $sql_newposts = "DELETE FROM $newposts_tblname WHERE t = '$t' && user_id = '$userdata_id'"; 
 
      mysql_query($sql_newposts) OR die(mysql_error());

  }

