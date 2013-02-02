
<?php  

<? 


  $member_check = "1";

  if ($userdata_admin == "1")  { 

      $member_check = "0";

      $query_ranks = mysql_query("SELECT * from $ranks_tblname WHERE r_group = '1' ORDER by r_minposts");

      while ($row_ranks = mysql_fetch_assoc($query_ranks))  { 

             if ($row_ranks[minposts] > $postnumbers_user)  { echo""; }

              else {  

                  $current_rank  = $row_ranks[r_rankname]; 
                  $current_stars = $row_ranks[r_stars];

              }

       }

  }


  $query_mod = mysql_query("SELECT * from $moderator_tblname WHERE user_id = '$userdata_id' && f_id = '$f'");

  $check_mod = mysql_num_rows($query_mod); 

  if ($check_mod == "1" && $member_check == "1")  {

      $member_check = "0";

      $query_ranks = mysql_query("SELECT * from $ranks_tblname WHERE r_group = '2' ORDER by r_minposts");

      while ($row_ranks = mysql_fetch_assoc($query_ranks))  {  

             if ($row_ranks[minposts] > $postnumbers_user)  { echo""; }

              else {  

                  $current_rank  = $row_ranks[r_rankname]; 
                  $current_stars = $row_ranks[r_stars];

              }

       }

  }


  if ($userdata_id == "")  {

      $member_check = "0";

      $query_ranks = mysql_query("SELECT * from $ranks_tblname WHERE r_group = '4' ORDER by r_minposts");

      while ($row_ranks = mysql_fetch_assoc($query_ranks))  {  

             if ($row_ranks[minposts] > $postnumbers_user)  { echo""; }

              else {  

                  $current_rank  = $row_ranks[r_rankname]; 
                  $current_stars = $row_ranks[r_stars];

              }

       }

  }

  if ($member_check == "1")  {

      $query_ranks = mysql_query("SELECT * from $ranks_tblname WHERE r_group = '3' ORDER by r_minposts");

      while ($row_ranks = mysql_fetch_assoc($query_ranks))  {  

             if ($row_ranks[minposts] > $postnumbers_user)  { echo""; }

              else {  

                  $current_rank  = $row_ranks[r_rankname]; 
                  $current_stars = $row_ranks[r_stars];

              }

       }

  }

  if ($current_stars == "1")  { $current_stars = "<img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "2")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "3")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "4")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }
  if ($current_stars == "5")  { $current_stars = "<img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\"><img src=\"images/templates/$template/star.gif\">"; }

