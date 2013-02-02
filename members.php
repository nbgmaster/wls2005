<body bgcolor="#ffc08a" onClick='self.close()' leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php 

include('config.php');

 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 


?>
<link rel="stylesheet" href="stylesheets/style_main.css"><?php 



 include('profil.php'); 


 }

else { echo"<br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";

 }