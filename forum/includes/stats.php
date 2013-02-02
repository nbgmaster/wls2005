<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  $online_members = "0";
  $ghost_members  = "0";
  $s              = "0";

  $query_online_members = mysql_query("SELECT * from $user_tblname ORDER by UserName");

  while ($row_online_members = mysql_fetch_assoc($query_online_members))  {

         $profile_link  = "<a href=\"index.php?do=profile&user_id=$row_online_members[UserID]\">"; 
         $profile_link2 = "</a>"; 

         $check_online_time2 = $timestamp - $row_online_members["last_online_time"]; 

         if ($check_online_time2 < $online_time)  {  

             if ($row_online_members["hide_user"] == "1")  {

                 $ghost_members  = $ghost_members + 1;

                 $online_members = $online_members + 1; 

             }
 
             else  {

                 $online_members = $online_members + 1; 

                 if ($row_online_members["admin"] == "1")  {

                     $admin_hilight  = "<b>"; 
                     $admin_hilight2 = "</b>"; 

                 }

                 else  {

                     $admin_hilight  = ""; 
                     $admin_hilight2 = ""; 

                 }

                 $members_online_names[$s] = "$profile_link$admin_hilight".$row_online_members["UserName"]."$admin_hilight2$profile_link2";

                 $s = $s + 1;	

             }

         } 

  }


  $query_online_visiters = mysql_query("SELECT * from $visiter_online_tblname");

  $visiter_numbers = mysql_num_rows($query_online_visiters);


  $no_members = $visiter_numbers - $online_members;


  $query_visiter_record = mysql_query("SELECT * from $admin_config_tblname");

  while ($row_visiter_record = mysql_fetch_assoc($query_visiter_record))  {

         if ($visiter_numbers > $row_visiter_record["visiter_record_numbers"])  {

             $sql_update_record = "UPDATE $admin_config_tblname SET visiter_record_numbers = '$visiter_numbers', visiter_record_time = '$timestamp'";     

             mysql_query($sql_update_record) OR die(mysql_error());  

        }
 
  }


  $query_membernumbers = mysql_query("SELECT * from $user_tblname");
  $membernumbers       = mysql_num_rows($query_membernumbers);
 
  $query_threadnumbers = mysql_query("SELECT * from $threads_tblname");
  $threadnumbers       = mysql_num_rows($query_threadnumbers);

  $query_postnumbers   = mysql_query("SELECT * from $posts_tblname");
  $postnumbers         = mysql_num_rows($query_postnumbers);


  $query_config = mysql_query("SELECT * from $admin_config_tblname");

  while ($row_config = mysql_fetch_assoc($query_config))  { 

         $startdate              = $row_config["start_date"];
         $visiter_record_numbers = $row_config["visiter_record_numbers"];
         $visiter_record_time    = $row_config["visiter_record_time"];

  }


  $visiter_record_time    = date("d.m.Y H:i",$visiter_record_time);


  $timedurance = $timestamp - $startdate;

  $daydurance = 24 * 60 * 60;

  $board_onlinedurance = $timedurance / $daydurance;

  $postsperday = $postnumbers / $board_onlinedurance;
  $postsperday = round($postsperday,2);

  $query_newest_user = mysql_query("SELECT * from $user_tblname ORDER by UserID");

  while ($row_newest_user = mysql_fetch_assoc($query_newest_user))  {  


         $query_postnumbers2  = mysql_query("SELECT * from $posts_tblname WHERE user_id = '$row_newest_user[UserID]'");

         $postnumbers2        = mysql_num_rows($query_postnumbers2); 

         $update_postnumbers2 = "UPDATE $user_tblname SET postnumbers = '$postnumbers2' WHERE UserID = '$row_newest_user[UserID]'";     

         mysql_query($update_postnumbers2);


         $newest_user_name    = $row_newest_user["UserName"]; 
         $newest_user_id      = $row_newest_user["UserID"]; 
         $newest_user_regdate = $row_newest_user["UserRegdate"];
 
  }

  $newest_user_regdate = date("d.m.Y",$newest_user_regdate);

  function countfiles($path)  {

    $handle    = opendir($path);
    $filecount = 0;
    while ($res  = readdir($handle))  {

           if (is_dir($res))  {

           } 

           else  {
    
               $filecount++;
     
           }

    }

    return $filecount;

  }  

  $smilienumbers = countfiles('images/smiles');
  $smilienumbers = $smilienumbers - 1;
