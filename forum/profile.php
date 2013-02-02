<?php  

  $query_user = mysql_query("SELECT * from $user_tblname WHERE UserID = '$user_id'");

  while ($row_user = mysql_fetch_assoc($query_user))  {

         if ($row_user["gender"] == "m")  {

             $gender_img="male.gif";

         }

         else  {

             $gender_img="female.gif"; 

         }


         if ($row_user["avatar"] == "")  { 

 	     $avatar = "";

         }

         else  { 

             $avatar = "<img src=\"avatars/$row_user[avatar]\">"; 

         }

         $user_regdate    =  date("d.m.Y",$row_user["UserRegdate"]);

         $row_user["last_online_time"]    =  date("d.m.Y H:i",$row_user["last_online_time"]);

         $user_timedurance = $timestamp - $row_user["UserRegdate"];

         $user_daydurance  = 24 * 60 * 60;
 
         $user_onlinedurance = $user_timedurance / $user_daydurance;
 
         $user_postsperday   = $row_user["postnumbers"] / $user_onlinedurance;

         $user_postsperday = round($user_postsperday,2);

         $query_postnumbers_user = mysql_query("SELECT * from $posts_tblname WHERE user_id = '$user_id'");
               
         $postnumbers_user       = mysql_num_rows($query_postnumbers_user);

 
         include("templates/user_rank.php");

         include("templates/profile.php"); 

  }
