<?php 

  if ($_POST[adminoptions] == "movetopic")  {

      if (isset($send_moveto_data) && $_POST[move_to] != "")  {

          $query_moveto = "UPDATE $threads_tblname SET f = '$move_to' WHERE id = '$t'";     

          mysql_query($query_moveto) OR die(mysql_error());

          $query_moveto2 = "UPDATE $posts_tblname SET f = '$move_to' WHERE t = '$t'";     

          mysql_query($query_moveto2) OR die(mysql_error());

          $text01 = "Thema wurde verschoben.";

          $link   = "index.php?t=$t";

          include("./templates/refresh.php");

      }

      else  {

          include("./templates/admin/movetopic.php");  

      }
 
  }

  if ($_POST[adminoptions] == "edittopic")  {

      if (isset($send_edit_data))  {

          $query_edit = "UPDATE $threads_tblname SET threadname = '$topicname' WHERE id = '$t'";     

          mysql_query($query_edit) OR die(mysql_error());

          $text01 = "Thema wurde bearbeitet.";

          $link   = "index.php?t=$t";

          include("./templates/refresh.php");

      }

      else  {

          $query_topicname = mysql_query("SELECT * from $threads_tblname WHERE id = '$t'");

          while ($row_topicname = mysql_fetch_assoc($query_topicname))  {

                 $topicname = "$row_topicname[threadname]";

          }

          include("./templates/admin/edittopic.php");

      }  

  }

  if ($_POST[adminoptions] == "deletetopic")  {

      if ($send_del_data == "Ja") {

      $text01 = "Dieses Thema wirklich löschen?";

      $link = "javascript:history.back();";
 
      include("templates/delete.php");
	  
	  }

  }
