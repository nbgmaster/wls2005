<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  // Security:: Set register globals off

  if (@ini_get('register_globals'))
  
      foreach ($_REQUEST as $key => $value)
     
               unset($GLOBALS[$key]);

  if (!empty($_GET))     extract($_GET);
  if (!empty($_POST))    extract($_POST);
  if (!empty($_COOKIE))  extract($_COOKIE);
  if (!empty($_SESSION)) extract($_SESSION);


  // Connect to Database

  $dbserver = "localhost";
  $dbuser   = "root";
  $dbpass   = "";
  $dbname   = "forum";

  $db = mysql_connect($dbserver, $dbuser, $dbpass, $dbname);      

  mysql_select_db($dbname, $db) OR die(mysql_error());


  // Load:: Time

  $timestamp = time();

  $c_time    =  date("H:i",$timestamp);
  $c_date    =  date("d.m.Y",$timestamp);

  // Initialize Pages

  if ($page == "")  {

      $page = (int) $page;
 
      if ($page <= 0) $page = 1; 
                
  }

  // Check Session or Cookie set

  if ($_SESSION["cookie_nbg_master_de_id"] != "")  {  

      $str_session = explode("|", $_SESSION["cookie_nbg_master_de_id"]);

      $auto_logon_session = $str_session[0];
      $auto_logon_id      = $str_session[1];

  } 

  else  {

      $str_session = explode("|", $_COOKIE[cookie_nbg_master_de_id]);

      $auto_logon_session = $str_session[0];
      $auto_logon_id      = $str_session[1];

  } 


  // Load:: Database tables
 
  $user_tblname            = "users";      	  // Data:: Members 
   
  $c_tblname               = "categorys";         // Data:: Categorys

  $f_tblname               = "forums";            // Data:: Forums

  $threads_tblname         = "threads";    	  // Data:: Threads
 
  $posts_tblname           = "posts";             // Data:: Posts

  $reload_tblname          = "reload_hits"; 	  // Data:: Hits Reload Ban
 
  $newposts_tblname        = "newposts";   	  // Data:: Check new posts

  $pm_in_tblname           = "pm_in_box";  	  // Data:: In-Box

  $pm_out_tblname          = "pm_out_box"; 	  // Data:: Out-Box

  $templates_tblname       = "templates";  	  // Data:: Templates	

  $admin_config_tblname    = "admin_config";      // Data:: Admin Config

  $visiter_tblname         = "visiter";           // Data:: Visiters

  $visiter_online_tblname  = "visiter_online";    // Data:: Visiters Online

  $moderator_tblname       = "moderators";        // Data:: Moderators

  $hidecat_tblname         = "hidecat";           // Data:: Hide or Show Cat

  $smilies_tblname         = "smilies";           // Data:: Smilies

  $buddylist_tblname       = "buddylist";         // Data:: Friends

  $ignorelist_tblname      = "ignorelist";        // Data:: Ignore Users

  $search_tblname          = "search";            // Data:: Search Data

  $groups_tblname          = "groups";            // Data:: User Groups

  $ranks_tblname           = "ranks";             // Data:: User Ranks

  $polls_tblname           = "polls";             // Data:: Polls

  $votes_tblname           = "poll_votes";        // Data:: Poll Votes
 

  // Load:: Admin Config

  $query_admin_config = mysql_query("SELECT * from $admin_config_tblname");    

  while  ($row_admin_config  =  mysql_fetch_assoc($query_admin_config))  {

          $show_threads          =  $row_admin_config["show_threads"];        // Row:: Threads

          $postsperpage          =  $row_admin_config["postsperpage"];        // Row:: Posts

          $show_user_pm          =  $row_admin_config["show_user_pm"];        // Row:: Private Messages

          $show_members          =  $row_admin_config["show_members"];        // Row:: Members

	  $reload_length         =  $row_admin_config["reload_length"];       // Thread-Hits Ban Time

          $refresh_time          =  $row_admin_config["refresh_time"];        // Time duration Meta Refresh
  
	  $online_time           =  $row_admin_config["online_time"];         // Time duration User online

          $max_pm_inbox          =  $row_admin_config["max_pm_inbox"];        // Maximum PMs Inbox

          $max_pm_outbox         =  $row_admin_config["max_pm_outbox"];       // Maximum PMs Outbox

          $board_domain          =  $row_admin_config["board_domain"];        // Board Domain

          $board_direction       =  $row_admin_config["board_direction"];     // Board Direction
 
          $board_title           =  $row_admin_config["board_title"];         // Board Title

          $board_description     =  $row_admin_config["board_description"];   // Board Description

          $default_style         =  $row_admin_config["tpl_active"];          // Default Template
  
          $banner                =  $row_admin_config["banner"];              // Banner on/off
 
          $header_titles         =  $row_admin_config["header_titles"];       // Header titles on/off

          $navi_bottom_begin     =  $row_admin_config["navi_bottom_begin"];   // Navi Bottom Begin Threads

          $navi_bottom_begin_p   =  $row_admin_config["navi_bottom_begin_p"]; // Navi Bottom Begin Posts

          $board_disable         =  $row_admin_config["board_disable"];       // Board disable

          $m_account_activation  =  $row_admin_config["account_activation"];  // Account Activation Method

          $admin_email           =  $row_admin_config["admin_email"];         // Admin Email

          $stats_enable          =  $row_admin_config["stats_enable"];        // Show Stats

          $pm_disable            =  $row_admin_config["pm_disable"];          // Allow PM

          $email_disable         =  $row_admin_config["email_disable"];       // Allow Email

          $change_nick_disable   =  $row_admin_config["change_nick_disable"]; // Allow Change Nickname
 
          $sig_disable           =  $row_admin_config["sig_disable"];         // Allow Signature

          $html_disable          =  $row_admin_config["html_disable"];        // Allow HTML

          $smilies_disable       =  $row_admin_config["smilies_disable"];     // Allow Smilies

          $bbcode_disable        =  $row_admin_config["bbcode_disable"];      // Allow BBCode

          $avatar_disable        =  $row_admin_config["avatar_disable"];      // Allow Avatar

          $avatar_from_url       =  $row_admin_config["avatar_from_url"];     // Avatar:: Load from URL Access

          $avatar_max_size       =  $row_admin_config["avatar_max_size"];     // Avatar:: Size

          $avatar_max_height     =  $row_admin_config["avatar_max_height"];   // Avatar:: Height

          $avatar_max_width      =  $row_admin_config["avatar_max_width"];    // Avatar:: Width

          $smilies_showstart     =  $row_admin_config["smilies_showstart"];   // Smilies Row Numbers

          $smilies_direction     =  $row_admin_config["smilies_direction"];   // Smilies URL Path

  }


  // Load:: User Data

  $userdata_ip = $_SERVER["REMOTE_ADDR"];    // Data:: User IP

  if ($auto_logon_id != "")  {

      $query_userdata = mysql_query("SELECT * from $user_tblname WHERE UserSession = '$auto_logon_session' && UserID = '$auto_logon_id'");  
  
      while  ($row_userdata  =  mysql_fetch_assoc($query_userdata))  {

              $userdata_id                 =  $row_userdata["UserID"];             //  Data:: User ID
              $userdata_name               =  $row_userdata["UserName"];           //  Data:: User Name
              $userdata_email              =  $row_userdata["UserMail"];           //  Data:: User Email
              $userdata_session            =  $row_userdata["UserSession"];       //  Data:: User Session

              $userdata_admin              =  $row_userdata["admin"];              //  Data:: User Admin

              $userdata_hide_email         =  $row_userdata["hide_email"];         //  Data:: Settings
              $userdata_formmailer         =  $row_userdata["formmailer"];         //  Data:: Settings
              $userdata_hide_user          =  $row_userdata["hide_user"];          //  Data:: Settings
              $userdata_email_pm           =  $row_userdata["email_pm"];           //  Data:: Settings
              $userdata_tpl                =  $row_userdata["template"];           //  Data:: Settings       
              $userdata_language           =  $row_userdata["language"];           //  Data:: Settings

              $userdata_gender             =  $row_userdata["gender"];             //  Data:: Profile
              $userdata_firstname          =  $row_userdata["firstname"];          //  Data:: Profile
              $userdata_lastname           =  $row_userdata["lastname"];           //  Data:: Profile
              $userdata_birthday           =  $row_userdata["birthday"];           //  Data:: Profile
              $userdata_birthmonth         =  $row_userdata["birthmonth"];         //  Data:: Profile       
              $userdata_birthyear          =  $row_userdata["birthyear"];          //  Data:: Profile
              $userdata_place              =  $row_userdata["place"];              //  Data:: Profile
              $userdata_homepage           =  $row_userdata["homepage"];           //  Data:: Profile
              $userdata_icq                =  $row_userdata["icq"];                //  Data:: Profile
              $userdata_aim                =  $row_userdata["aim"];                //  Data:: Profile
              $userdata_yim                =  $row_userdata["yim"];                //  Data:: Profile       
              $userdata_msn                =  $row_userdata["msn"];                //  Data:: Profile
              $userdata_job                =  $row_userdata["job"];                //  Data:: Profile
              $userdata_hobbys             =  $row_userdata["hobbys"];             //  Data:: Profile
              $userdata_misc               =  $row_userdata["misc"];               //  Data:: Profile
              $userdata_favorite_food      =  $row_userdata["favorite_food"];      //  Data:: Profile
              $userdata_favorite_drink     =  $row_userdata["favorite_drink"];     //  Data:: Profile       
              $userdata_favorite_music     =  $row_userdata["favorite_music"];     //  Data:: Profile
              $userdata_favorite_movie     =  $row_userdata["favorite_movie"];     //  Data:: Profile       
              $userdata_favorite_location  =  $row_userdata["favorite_location"];  //  Data:: Profile
 
              $userdata_signature          =  $row_userdata["signature"];          //  Data:: Signature
              $userdata_avatar             =  $row_userdata["avatar"];             //  Data:: Avatar

              $userdata_status             =  $row_userdata["UserActive"];         //  Data:: User Status

      }
 
  }


  // Check Forum Permissions


  $query_post_permissions = mysql_query("SELECT * from $posts_tblname WHERE id = '$p_id'");  
  
  while  ($row_post_permissions  =  mysql_fetch_assoc($query_post_permissions))  { 

          $f        = $row_post_permissions["f"];
          $p_userid = $row_post_permissions["user_id"];

  }   

  $query_threads_permissions = mysql_query("SELECT * from $threads_tblname WHERE id = '$t'");  
  
  while  ($row_threads_permissions  =  mysql_fetch_assoc($query_threads_permissions))  { 

          $f_status = $row_threads_permissions["status"];

  }   

  $query_forum_permissions = mysql_query("SELECT * from $f_tblname WHERE id = '$f'");  
  
  while  ($row_forum_permissions  =  mysql_fetch_assoc($query_forum_permissions))  { 

          $f_status_permission = $row_forum_permissions["status"];

  }  

  if ($userdata_id == "")  {

  $query_permissions = mysql_query("SELECT * from $groups_tblname WHERE id = '1'");  
  
  }

  else  {

  $query_permissions = mysql_query("SELECT * from $groups_tblname WHERE id = '2'");  
  
  }

  while  ($row_permissions  =  mysql_fetch_assoc($query_permissions))  { 

          $p_boardaccess      = $row_permissions["boardaccess"];
          $p_searchaccess     = $row_permissions["searchaccess"];
          $p_pmaccess         = $row_permissions["pmaccess"];
          $p_memberaccess     = $row_permissions["memberaccess"];
          $p_profileaccess    = $row_permissions["profileaccess"];
          $p_readaccess       = $row_permissions["readaccess"];
          $p_postaccess       = $row_permissions["postaccess"];

  }   

  $query_mod = mysql_query("SELECT * from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f'");  
  $mod_user_status = mysql_num_rows($query_mod);       


  // Check Visiter Numbers

  $query_visiter   = mysql_query("SELECT * from $visiter_tblname WHERE IP = '$userdata_ip' && day = '$c_date'");
  $check_visiter   = mysql_num_rows($query_visiter);

  if($check_visiter == "0")  {

     $sql_visiter     = "INSERT into $visiter_tblname (IP, day, time, browser) ";
     $sql_visiter    .= "VALUES ('$userdata_ip', '$c_date', '$timestamp', '$HTTP_USER_AGENT')";
     $result_visiter  = @mysql_query($sql_visiter) OR die(mysql_error());

  }


  $query_online_visiters = mysql_query("SELECT * FROM $visiter_online_tblname"); 

  while ($row_online_visiters = mysql_fetch_assoc($query_online_visiters))  {

         $check_online_durance = $timestamp - $row_online_visiters[date]; 

         if ($check_online_durance > $online_time)  { 
 
             $query_del_visiter = "DELETE FROM $visiter_online_tblname WHERE id = '$row_online_visiters[id]'";     

             mysql_query($query_del_visiter) OR die(mysql_error());  

         } 

  }


  $query_online_visiter  = mysql_query("SELECT * FROM $visiter_online_tblname WHERE IP = '$userdata_ip'"); 
  $result_online_visiter = mysql_num_rows($query_online_visiter); 

  if ($result_online_visiter == "0")  {

      $query_new_visiter = "INSERT INTO $visiter_online_tblname (IP, date) VALUES ('$userdata_ip', '$timestamp')"; 
       
      mysql_query($query_new_visiter) OR die(mysql_error());    

  }


  // Check ID forum

  $query_f = mysql_query("SELECT * from $threads_tblname WHERE id = '$t'");

  while ($row_f = mysql_fetch_assoc($query_f))  {
                      
         $forum_id = $row_f["f"];

  }


  // Style:: Choose Images

  if($f == "")  { 

     $img_f_main    = "f_main.gif"; 
     $img_f_new     = "f_new.gif"; 
     $img_f_closed  = "f_closed.gif"; 

  }

  else  {

    $img_f_main    = "folder.gif"; 
    $img_f_new     = "newfolder.gif";
    $img_f_closed  = "closed.gif"; 

  }


  // Delete Register Sessions

  if($do != "register" or $sec != "create_member")  { 

     session_unregister(r_nickname);
     session_unregister(email);
     session_unregister(gender);

     session_unregister(firstname);
     session_unregister(lastname);
     session_unregister(birthday);
     session_unregister(birthmonth);
     session_unregister(birthyear);
     session_unregister(place);
     session_unregister(homepage);
     session_unregister(icq);
     session_unregister(aim);
     session_unregister(yim);
     session_unregister(msn);
     session_unregister(job);
     session_unregister(hobbys);
     session_unregister(misc);

     session_unregister(favorite_food);
     session_unregister(favorite_drink);
     session_unregister(favorite_music);
     session_unregister(favorite_movie);
     session_unregister(favorite_location);

     session_unregister(hide_email);
     session_unregister(formmailer);
     session_unregister(hide_user);
     session_unregister(email_pm);
     session_unregister(board_style);
     session_unregister(language);

  }


  // Delete PM Sessions

  if($do != "newpm")  { 
 
     session_unregister(message);
     session_unregister(title);

  }


  // Check:: New articles

  include("includes/check_new_articles.php");


  // Update:: User online time

  if ($auto_logon_id != "" && $userdata_id != "")  {

      $query_onlinetime = "UPDATE $user_tblname SET last_online_time = '$timestamp' WHERE UserID = '$userdata_id'";     

      mysql_query($query_onlinetime) OR die(mysql_error()); 

  }