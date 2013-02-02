<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  $query_votes  = "INSERT into $votes_tblname (user_id, poll_id, answer_number) ";
 
  $query_votes .= "VALUES ('$userdata_id', '$poll_id','$answer_number')";
   
  $result_votes = @mysql_query($query_votes) OR die(mysql_error());

  $text01 = "Deine Stimme wurde gezählt!";

  $link = "index.php?t=$t";

  include("./templates/refresh.php");