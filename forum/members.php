<?php  

  // Load:: Variables Data

  if ($sortby == "")  { 

      $sortby = "postnumbers"; 
      $order  = "down";
      $letter = "all";

  }

  if ($sortby == "username")  { 

      $sortby2 = "UserName";

  }

  if ($sortby == "userdate")  { 

      $sortby2 = "UserRegdate";

  }

  if ($sortby == "online")  { 

      $sortby2 = "UserName";

  }

  if ($order == "up")  { 

      $order2 = "ASC";

  }

  if ($order == "down")  { 

      $order2 = "DESC";

  }


  // Include:: Header

  include("templates/order_members.php");


  // Check Entrys per side

  if ($letter == "all")  {   

      $query_members2 = mysql_query("SELECT * from $user_tblname");

  }

  else  {

      if ($letter == "#")  {

          $query_members2 = mysql_query("SELECT * from $user_tblname WHERE UserName REGEXP '^[*:.~1234567890_-]'");

      }

      else  {

          $query_members2 = mysql_query("SELECT * from $user_tblname WHERE UserName LIKE '$letter%'");

      }

  }

  
  if ($sortby != "online")  { 

      $check_rows = mysql_num_rows($query_members2);

  }

  if ($sortby == "online")  {

      $check_rows = "0";
 
      while ($row_members2 = mysql_fetch_assoc($query_members2))  {
 
             $check_online_time = $timestamp - $row_members2["last_online_time"]; 

             if ($check_online_time < $online_time)  {  

                 $update_online = "UPDATE $user_tblname SET online = '1' WHERE UserID = '$row_members2[UserID]'";     
                 mysql_query($update_online);

                 $check_rows = $check_rows + 1; 

             } 

             else  {

             $update_online = "UPDATE $user_tblname SET online = '0' WHERE UserID = '$row_members2[UserID]'";     
             mysql_query($update_online);

             }

      }

  }


  // Include:: Navigation Sides

  include("includes/navi_sides.php");


  if ($sortby == "username" or $sortby == "userdate")  {

      if ($letter == "all")  { 

          $query_members = mysql_query("SELECT * from $user_tblname ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");

      }

      else  {

          if ($letter == "#")  {

              $query_members = mysql_query("SELECT * from $user_tblname WHERE UserName REGEXP '^[*:.~1234567890_-]' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");

          }
  
          else  {

             $query_members = mysql_query("SELECT * from $user_tblname WHERE UserName LIKE '$letter%' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");
 
          }

      }
 
  }


  if ($sortby == "postnumbers")  {
    
      if ($letter == "all")  {

          $query_members = mysql_query("SELECT * from $user_tblname ORDER by postnumbers $order2 LIMIT ".(($page-1)*$break).",$break");

      }
 
      else  {

          if ($letter == "#")  {

              $query_members = mysql_query("SELECT * from $user_tblname WHERE UserName REGEXP '^[*:.~1234567890_-]' ORDER by postnumbers $order2 LIMIT ".(($page-1)*$break).",$break");

          }

          else  {

              $query_members = mysql_query("SELECT * from $user_tblname WHERE UserName LIKE '$letter%' ORDER by postnumbers $order2 LIMIT ".(($page-1)*$break).",$break");

          }

      }

  }


  if ($sortby == "online")  {

      if ($check_rows != "0")  {

          if ($letter == "all")  {

              $query_members = mysql_query("SELECT * from $user_tblname WHERE online = '1' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");

          }

          else  {

              if ($letter == "#")  {

                  $query_members = mysql_query("SELECT * from $user_tblname WHERE online = '1' && UserName REGEXP '^[*:.~1234567890_-]' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");

              }

              else  {

                  $query_members = mysql_query("SELECT * from $user_tblname WHERE online = '1' && UserName LIKE '$letter%' ORDER by $sortby2 $order2 LIMIT ".(($page-1)*$break).",$break");
 
              }

          }

      }

  }

  // Start:: Content


  if ($check_rows != "0")  { 

     include("templates/members_top.php");

     while ($row_members = mysql_fetch_assoc($query_members))  { 

            if ($row_members["formmailer"] == "1")  { 

                $formmailer  = "<a href=\"index.php?do=email&user_id=".$row_members["UserID"]."\">";
                $formmailer2 = "</a>";
        
            }

            if ($row_members["UserID"] != $userdata_id)  { 

                $addbuddylink   = "<a href=\"index.php?do=addbuddy&user_id=".$row_members["UserID"]."\">";
                $addbuddylink22 = "</a>";
        
            }

            if ($row_members["homepage"] != "")  {

                if (substr($row_members["homepage"], 0, 7) == "http://")  {
   
                    $user_hp = "<a href=\"".$row_members["homepage"]."\" target=\"_blank\">";
  
                }

                else  {  

                    $user_hp = "<a href=\"http://".$row_members["homepage"]."\"  target=\"_blank\">";

                }

                $user_hp2 ="</a>";

            }

            $member_regdate = date("d.m.Y",$row_members["UserRegdate"]);

            include("templates/members.php");      

     }
 
  }

  // No Entrys

  else  { 

      include("templates/members_none.php");
 
  }

  include("templates/close_table.php");