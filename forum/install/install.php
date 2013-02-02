
<?php 

<?



  $board_domain = "$_SERVER[SERVER_NAME]";

echo"$board_domain<br>";

$board_direction = "$_SERVER[HTTP_REFERER]";


$board_direction = str_replace("http://$board_domain", "", $board_direction);
$board_direction = str_replace("install/index.php", "", $board_direction);

echo"$board_direction";