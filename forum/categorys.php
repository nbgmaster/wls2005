<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1

  $query_cats = mysql_query("SELECT * from $c_tblname ORDER by id");

  while ($row_cats = mysql_fetch_assoc($query_cats))  {  
 
         include("main.php");

  }

  include("templates/footer_main.php");

  include("templates/footer_folders_main.php");