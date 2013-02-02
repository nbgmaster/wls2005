<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  // Row:: Category

  if ($c != "")  { 

      $query_forums = mysql_query("SELECT * from $f_tblname WHERE cat = '$c' ORDER by position");

      $query_cat_title = mysql_query("SELECT * from $c_tblname WHERE id = '$c'");

      while ($row_cat_title = mysql_fetch_assoc($query_cat_title))  {  

             $row_cats["title"] = $row_cat_title["title"];

      }

      $row_cats["id"] = $c;
  }


  // Row:: Forums

  else  {

    $query_forums = mysql_query("SELECT * from $f_tblname WHERE cat = '$row_cats[id]' ORDER by position");

  }


  // Load:: Header Templates

  if ($auto_logon_id == "" or $userdata_id == "")  {

      $userdata_id = $userdata_ip;

  }

  if ($c == "")  {

      $query_hidecat = mysql_query("SELECT * from $hidecat_tblname WHERE catid = '$row_cats[id]' && user = '$userdata_id'");    
  
      $hidecat_var = mysql_num_rows($query_hidecat);

  }

  include("templates/categorys.php");

  if ($hidecat_var != "1")  { 

  include("templates/main_top.php");


  // Start:: Content

  while ($row_forums = mysql_fetch_assoc($query_forums))  {


         $show_last_article  = "";
         $show_last_username = ""; 
         $show_link          = "";

         $check_topic    = mysql_query("SELECT * from $threads_tblname WHERE f = '$row_forums[id]'");
         $topic          = mysql_num_rows($check_topic);

         $check_article  = mysql_query("SELECT * from $posts_tblname WHERE f = '$row_forums[id]'");
         $article        = mysql_num_rows($check_article);

         $last_article   = mysql_query("SELECT * from $posts_tblname WHERE f = '$row_forums[id]' ORDER by id DESC LIMIT 1");
         $last_article2  = mysql_num_rows($last_article);


         if ($last_article2 != "0")  { 
 
             while ($row_article = mysql_fetch_assoc($last_article))  {  

                    $article_id      =  $row_article["id"]; 
                    $article_thread  =  $row_article["t"]; 
                    $lastuser_id     =  $row_article["user_id"]; 
                    $unixtime        =  $row_article["time"];

                    $query_lastuser = mysql_query("SELECT * from $user_tblname WHERE UserID = '$lastuser_id'");

                    while ($row_lastuser = mysql_fetch_assoc($query_lastuser))  {  

                           $last_user_name = $row_lastuser["UserName"]; 
                           $last_user_id   = $row_lastuser["UserID"];

                    } 

             }

             $current_time  = date("H:i",$unixtime);
             $current_date  = date("d.m.Y",$unixtime);

         } 

         if ($lastuser_id == "0")  { $last_user_name = "Gast"; }

         $query_mods      = mysql_query("SELECT * from $moderator_tblname WHERE f_id = '$row_forums[id]'");   
         $mods_available  = mysql_num_rows($query_mods);  

         $mod_id = "0";

         if ($mods_available != "0")  {

             while ($row_mods = mysql_fetch_assoc($query_mods))  { 

                    $query_mods_name       = mysql_query("SELECT * from $user_tblname WHERE UserID = '$row_mods[user_id]'");     

                    while ($row_mods_name  = mysql_fetch_assoc($query_mods_name))  { 

                           $mods[$mod_id]  = $row_mods_name[UserName];

                    }

                    $mod_id = $mod_id + 1;

             }

         natsort($mods);

         $modnumbers = count($mods);

         }

         else  {

             $mods = "";

         }

        
         $post_numbers     = mysql_query("SELECT * from $posts_tblname WHERE t = '$article_thread'");
         $post_numbers2    = mysql_num_rows($post_numbers);

         $query_newposts2  = mysql_query("SELECT * from $newposts_tblname WHERE f = '$row_forums[id]' && user_id = '$userdata_id'");
         $numbers_newposts = mysql_num_rows($query_newposts2);

         $f_status     = $row_forums["status"]; 

         if ($f_status == "0")  {

             $img_newposts = "f_closed.gif";  

         }

         else  {

             if ($numbers_newposts == "0")  { 

                 $img_newposts = "f_main.gif"; 

             } 

             else  {

                 $img_newposts = "f_new.gif";   

             }

         }
                      
         $output = $post_numbers2 / $postsperpage;

         if ($last_article2 != "0")  { 

             if ($output < 1)  { 

                 $show_link = "index.php?t=$article_thread#$article_id"; 

             }

             else  {

                 for ($count = 1;$count <= 10000;$count++)  {    

                      if ($output > $count)  {

                          $page = $count + 1; 

                      }

	         }

                 $show_link = "index.php?t=$article_thread&page=$page#$article_id";

             }
   
         } 
 
         include("templates/main.php");               
 
  }

  include("templates/close_table.php");


}

  if ($c != "")  {

      include("templates/footer_goto.php"); 

  } 
