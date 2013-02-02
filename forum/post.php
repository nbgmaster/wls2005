<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  $message = stripslashes($message);
  $message = str_replace("'", "\'", $message);

<<<<<<< HEAD
  $message = str_replace("[PHP]", "[PHP]<?php ", $message);
=======
  $message = str_replace("[PHP]", "[PHP]<?", $message);
>>>>>>> af2fff1... version1
  $message = str_replace("[/PHP]", "?>[/PHP]", $message);

  // Post PM

  if ($_POST[user_id] != "") {

      $query_out_box   = "INSERT into $pm_out_tblname (sender_id, receiver_id, title, message, time, status) ";
      $query_out_box  .= "VALUES ('$userdata_id', '$user_id', '$title','$message', '$timestamp', '0')";

      $result_out_box  = @mysql_query($query_out_box) OR die(mysql_error());

      $query_newest_out_id = mysql_query("SELECT * from $pm_out_tblname ORDER by id");
  
      while ($row_newest_out_id  =  mysql_fetch_assoc($query_newest_out_id))  { 

             $newest_out_id = $row_newest_out_id["id"];

      }

      $query_in_box  = "INSERT into $pm_in_tblname (sender_id, receiver_id, title, message, time, status, out_id)";
      $query_in_box .= "VALUES ('$userdata_id', '$user_id', '$title', '$message', '$timestamp', '0', '$newest_out_id')";

      $result_in_box = @mysql_query($query_in_box);

      $link   = "index.php?do=outbox";

      $text01 = "Nachricht verschickt!";

  }

  else  {


  if (isset($preview))  {

      include("replace/bbcode_php_function.php");

      include('includes/navi_links.php'); 
      include("templates/reply.php");
      include("includes/row_last_posts.php"); 

  }

  else  {

      $tempname    = $_FILES["file"]["tmp_name"]; 

      if ($tempname != "" && $_POST[poll] != "1")  {

      include("includes/attachment.php");
 
      }

      // Edit Post

      if ($_POST[p_id] != "")  { 

          if ($userdata_id == $_POST[p_userid] or $userdata_admin == "1")  { 

              if ($attachment != "")  {

                  $query_edit_post = "UPDATE $posts_tblname SET title = '$newtitle', message = '$message', attachment = '$attachment', edittime = '$timestamp', edit_user = '$userdata_id' WHERE id = '$p_id'";     

              }

              else  {

                  $query_edit_post = "UPDATE $posts_tblname SET title = '$newtitle', message = '$message', edittime = '$timestamp', edit_user = '$userdata_id' WHERE id = '$p_id'";     

              }

              mysql_query($query_edit_post) OR die(mysql_error());

              $query_newest_id = mysql_query("SELECT * from $posts_tblname WHERE id = '$p_id' ORDER by id");

              while ($row_newest_id  =  mysql_fetch_assoc($query_newest_id))  { 

              $newest_id = $row_newest_id["t"];

              }

              $query_check_id = mysql_query("SELECT * from $posts_tblname WHERE t = '$newest_id' && id <= '$p_id' ORDER by id");

              $postnumbers    = mysql_num_rows($query_check_id);

              $sidenumbers    = $postnumbers / $postsperpage;

              if ($sidenumbers < 1)  { 

                  $link = "index.php?t=$newest_id#$p_id";
 
              }

              else  {

                  for ($count = 1;$count <= 10000;$count++)  {

                       if ($sidenumbers > $count)  { 

                            $page = $count + 1;

                       }

                  }

              $link = "index.php?t=$newest_id&page=$page#$p_id";

              }

              $text01 = "Beitrag ";
              $text02 = "geändert!";

          }

          else  {

          include("templates/no_permission.php");

          }

      }


      // Post new thread

      else  {

          if ($userdata_id == "")  { $userdata_id = "0"; }

          if ($_POST[poll] == "1")  {

              include("templates/poll.php");

          }

          if ($_POST[title] != "" && $_POST[poll] != "1")  {  
 
 	      $query_threads  = "INSERT into $threads_tblname (f, threadname, author_id, hits, rankingtime, status) ";

	      $query_threads .= "VALUES ('$f','$title','$userdata_id','0', '$timestamp', '1')";
   
  	      $result_threads = @mysql_query($query_threads) OR die(mysql_error());


              $query_newest_t = mysql_query("SELECT * from $threads_tblname WHERE f = ".$f." ORDER by id");

   	      while ($row_newest_t = mysql_fetch_assoc($query_newest_t))  {  
                   
                     $newest_t = $row_newest_t["id"];
       
              }

              if ($_POST[poll_question] != "")  {

 	      $query_polls  = "INSERT into $polls_tblname (t, question, answer1, answer2, answer3, answer4, answer5, answer6) ";

	      $query_polls .= "VALUES ('$newest_t', '$poll_question','$poll_data1','$poll_data2','$poll_data3', '$poll_data4', '$poll_data5', '$poll_data6')";
   
  	      $result_polls = @mysql_query($query_polls) OR die(mysql_error());

              }

              if ($attachment != "")  {

                  $query_posts  = "INSERT into $posts_tblname (f, t, user_id, title, message, time, attachment) ";
        
                  $query_posts .= "VALUES ('$f','$newest_t','$userdata_id', '$title', '$message','$timestamp', '$attachment')";

              }

              else  {

                  $query_posts  = "INSERT into $posts_tblname (f, t, user_id, title, message, time) ";
        
                  $query_posts .= "VALUES ('$f','$newest_t','$userdata_id', '$title', '$message','$timestamp')";

              }

              $result_posts = @mysql_query($query_posts) OR die(mysql_error());

          }


          // New Post

         
          if ($_POST[forum_id] != "")  {  {

              if ($attachment != "")  {

                  $query_posts  = "INSERT into $posts_tblname (f, t, user_id, title, message, time, attachment) ";

                  $query_posts .= "VALUES ('$forum_id','$t','$userdata_id','$newtitle', '$message','$timestamp', '$attachment')";

              }

              else  { 

                  $query_posts  = "INSERT into $posts_tblname (f, t, user_id, title, message, time) ";

                  $query_posts .= "VALUES ('$forum_id','$t','$userdata_id','$newtitle', '$message','$timestamp')";

     }

              $result_posts = @mysql_query($query_posts) OR die(mysql_error());


              $query_check_id = mysql_query("SELECT * from $posts_tblname WHERE t = '$t' ORDER by id");

              $postnumbers    = mysql_num_rows($query_check_id);


              $sidenumbers    = $postnumbers / $postsperpage;

              while ($row_check_id = mysql_fetch_assoc($query_check_id))  {  

                     $newest_id = $row_check_id["id"]; 

             }

          }

      } 

      // Update rankingtime

      $query_rankingtime = "UPDATE $threads_tblname SET rankingtime = '$timestamp' WHERE id = '$t'";     

      mysql_query($query_rankingtime) OR die(mysql_error());


      // Refresh Data

      if ($_POST[title] == "")  { 

          $text01 = "Eintrag ";

      } 

      else  {

         $text01 = "Thema "; 

      }

          $text02 = "erstellt!"; 


      if ($_POST[title] != "")  { 
    
          $link = "index.php?t=$newest_t";

      }


      if ($_POST[title] == "" or $do == "edit")  {

          if ($sidenumbers < 1)  { 

              $link = "index.php?t=$t#$newest_id";
 
          }

          else  {

              for ($count = 1;$count <= 10000;$count++)  {

                   if ($sidenumbers > $count)  { 

                       $page = $count + 1;

                   }

              }

              $link = "index.php?t=$t&page=$page#$newest_id";

          }

       }

    }

  if ($_POST[poll] != "1")  {

      include("templates/refresh.php");

  }

  }

  }

