<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1

  if ($_POST[module] == "")  { 

      include("./templates/usercp/edit_profile.php");

  }

  else  {

  $update_profile1 = "UPDATE $user_tblname SET gender = '$_POST[gender]', firstname = '$_POST[firstname]', lastname = '$_POST[lastname]' WHERE UserID = ".userdata_id."";     

  $update_profile2 = "UPDATE $user_tblname SET birthday = '$_POST[birthday]', birthmonth = '$_POST[birthmonth]', birthyear = '$_POST[birthyear]' WHERE UserID = ".userdata_id."";     

  $update_profile3 = "UPDATE $user_tblname SET place = '$_POST[place]', homepage = '$_POST[homepage]', icq = '$_POST[icq]', aim = '$_POST[aim]', yim = '$_POST[yim]', msn = '$_POST[msn]' WHERE UserID = ".userdata_id."";     

  $update_profile4 = "UPDATE $user_tblname SET job = '$_POST[job]', hobbys = '$_POST[hobbys]', misc = '$_POST[misc]' WHERE UserID = ".userdata_id."";     

  $update_profile5 = "UPDATE $user_tblname SET favorite_food = '$_POST[favorite_food]', favorite_drink = '$_POST[favorite_drink]', favorite_music = '$_POST[favorite_music]', favorite_movie = '$_POST[favorite_movie]', favorite_location = '$_POST[favorite_location]' WHERE UserID = ".userdata_id."";     


  mysql_query($update_profile1) OR die(mysql_error());
  mysql_query($update_profile2) OR die(mysql_error());
  mysql_query($update_profile3) OR die(mysql_error());
  mysql_query($update_profile4) OR die(mysql_error());
  mysql_query($update_profile5) OR die(mysql_error());


  $text01   = "Profildaten wurden geändert!";         
  $link     = "index.php?do=usercp";

     
  include("templates/refresh.php");


  }