<?php  

  if ($userdata_id != "")  { 

      $query_user_articles = mysql_query("SELECT * from $user_tblname WHERE UserID = '$userdata_id'");

      while ($row_user_articles = mysql_fetch_assoc($query_user_articles))  { 

             $last_online_time = $row_user_articles["last_online_time"];

      }

      $query_newposts = mysql_query("SELECT * from $posts_tblname WHERE time > '$last_online_time'");

      while ($row_newposts = mysql_fetch_assoc($query_newposts))  {

             if ($userdata_id != $row_newposts["user_id"])  { 

                 $query_newposts  = "INSERT into $newposts_tblname (f, t, p, user_id)";
                 $query_newposts .= "VALUES ('$row_newposts[f]', '$row_newposts[t]', '$row_newposts[id]','$userdata_id')";

                 $result_newposts = @mysql_query($query_newposts) OR die(mysql_error());
          
             }

      }

  }