<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  $check_data     = mysql_query("SELECT * from $threads_tblname WHERE f = '$f'");

  $check_rows     = mysql_num_rows($check_data);


  $granted_access = "0";

  $check_rights   = mysql_query("SELECT * from $f_tblname WHERE id = '$f'");

  while ($row_rights = mysql_fetch_assoc($check_rights))  { 

         if ($row_rights[f_read] == "all")  {

             $granted_access = "1"; 

         }

         if ($row_rights[f_read] == "reg")  {

             if ($userdata_id != "")  { 

                 $granted_access = "1";

             }  

         }

         if ($row_rights[f_read] == "mod")  {

             $check_mod   = mysql_query("SELECT * from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f'");

             $mod_status  = mysql_num_rows($check_mod);

             if ($mod_status != "" && $mod_status != "0")  {

                 $granted_access = "1";

             }  

         }

         if ($row_rights[f_read] == "admin")  {

              if ($userdata_admin == "1")  {

                 $granted_access = "1";

             } 

        }       
      
  }
 

  if ($granted_access == "1")  {


  if ($do != "search")  {

      include("includes/navi_links.php");

      include('includes/navi_sides.php');

      $query_threads = mysql_query("SELECT * from $threads_tblname WHERE f = '$f'");

  }

  else  {

      $counter_t = "0";
      $nodoubles = "0";
      $topicids[] = "";

      while ($row_posts = mysql_fetch_assoc($query_posts2))  {  

             foreach ($topicids as $topicids2)  {

                      if ($row_posts[t] == $topicids2)  { 

                          $nodoubles = "1"; 

                      }

             }
             
             if ($nodoubles == "0")  {

                 if ($counter_t == "0")  {

                     $topicids[$counter_t] = "id = '$row_posts[t]'";

                 }

                 else  {

                     $topicids[$counter_t] = " or id = '$row_posts[t]'";

                 }

             $counter_t = $counter_t + 1; 

             }

      } 

      $tfolders = implode("\n", $topicids);

      $query_threads = mysql_query("SELECT * from $threads_tblname WHERE $tfolders");

      $check_rows = mysql_num_rows($query_threads);

      $break = "$show_threads";

      include("includes/navi_sides.php");

  }

  $topicnumbers  = mysql_num_rows($query_threads);

  if ($topicnumbers == "0")  {  

      include("templates/threads_none.php");

  }

  else  { 

      if ($do != "search")  {

          $query_threads = mysql_query("SELECT * from $threads_tblname WHERE f = '$f' order by rankingtime DESC LIMIT ".(($page-1)*$break).",$break");
 
      }

      else  {

          if ($sortby == "lastpost")  { 

              $sortby = "rankingtime"; 

          }

          $query_threads = mysql_query("SELECT * from $threads_tblname WHERE $tfolders ORDER by $sortby $order LIMIT ".(($page-1)*$break).",$break");

      }

      include("templates/threads_top.php");
 
      while ($row_threads = mysql_fetch_assoc($query_threads))  {  

             if ($do != "search")  {

                 $query_post_id     = mysql_query("SELECT * from $posts_tblname WHERE f = '$f' && t = '$row_threads[id]'");

             }

             else  {

                 $query_post_id     = mysql_query("SELECT * from $posts_tblname WHERE t = '$row_threads[id]'");

             }

	     $thread_answers    = mysql_num_rows($query_post_id);

             $thread_answers2   = $thread_answers - 1;


             while ($row_post_id = mysql_fetch_assoc($query_post_id))  {  

                    $newest_post_id = $row_post_id["id"]; 

	     }


             $query_thread_author      = mysql_query("SELECT * from $threads_tblname WHERE id = '$row_threads[id]'");

	     while ($row_thread_author  = mysql_fetch_assoc($query_thread_author))  {  

                    $thread_author_id   = $row_thread_author["author_id"];

             }

             $query_thread_author2     = mysql_query("SELECT * from $user_tblname WHERE UserID = '$thread_author_id'");

             while ($row_thread_author2 = mysql_fetch_assoc($query_thread_author2))  {  

                    $thread_author_name = $row_thread_author2["UserName"];

             } 

             $query_last_post = mysql_query("SELECT * from $posts_tblname WHERE t = '$row_threads[id]' ORDER by id DESC LIMIT 1");

             while ($row_last_post = mysql_fetch_assoc($query_last_post))  {  

                    $last_post_id       = $row_last_post["id"];
		    $last_post_user_id  = $row_last_post["user_id"]; 
                    $last_post_time     = $row_last_post["time"];

                    $query_last_post_username = mysql_query("SELECT * from $user_tblname WHERE UserID = '$last_post_user_id'");

                    while ($row_last_post_username = mysql_fetch_assoc($query_last_post_username))  {  

		           $last_post_user_id    = $row_last_post_username["UserID"];                                                      
		           $last_post_username   = $row_last_post_username["UserName"];
 						    
                    } 
             }

             if ($last_post_user_id == "0")  {

	         $last_post_username   = "Gast";

             }
 
             $last_post_time2 = date("H:i",$last_post_time);
             $last_post_date  = date("d.m.Y",$last_post_time);

             $check_new_posts = mysql_query("SELECT * from $newposts_tblname WHERE f ='$f' && user_id = '$userdata_id' && t = '$row_threads[id]'");

             $new_posts = mysql_num_rows($check_new_posts);

         $f_status     = $row_threads["status"];

         if ($f_status == "0")  {

             if ($thread_answers2 > 50 or $row_threads["hits"] > 150)  {

             $img_newposts = "hotlockfolder.gif";  

             }

             else  {

             $img_newposts = "closed.gif";  

             }

         }

         else  {

             if ($new_posts == "0")  { 

                 if ($thread_answers2 > 50 or $row_threads["hits"] > 150)  {

                     $img_newposts = "hotfolder.gif";  

                 }

                 else  {

                     $img_newposts = "folder.gif";  

                 }

             } 

             else  {


                 if ($thread_answers2 > 50 or $row_threads["hits"] > 150)  {

                     $img_newposts = "newhotfolder.gif";  

                 }

                 else  {

                     $img_newposts = "newfolder.gif";  

                 }

             }

         }
       	     $postnumbers = mysql_num_rows($query_post_id);

             $sidenumbers = $thread_answers / $postsperpage;

	     if ($sidenumbers < 1)  { 
                 
                 $show_link = "#$last_post_id";
                                       
             }

             else   {

                 for ($count = 1;$count <= 10000;$count++)  {
 
                      if ($sidenumbers > $count)  {

                          $page = $count + 1;

                      }
 
	         }

                 $show_link = "&page=$page#$last_post_id";
				
             }

             include("templates/threads.php");

       }

       include("templates/close_table.php");

  }


  if ($topicnumbers > $navi_bottom_begin)  {

      include("templates/navi_sides.php");
      include("includes/navi_links.php");

  }

  echo"<br>";

  include("templates/thread_search.php");

  include("templates/footer_goto.php");

  include("templates/footer_folders_threads.php");



  }


  else  {

      include("templates/no_permission.php");

  }
