<<<<<<< HEAD
<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
=======
<?

>>>>>>> af2fff1... version1

  if (!empty($_GET))     extract($_GET);
  if (!empty($_POST))    extract($_POST);
  if (!empty($_COOKIE))  extract($_COOKIE);
  if (!empty($_SESSION)) extract($_SESSION);


$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wls2005";


$db = mysql_connect($dbserver, $dbuser, $dbpass, $dbname);      mysql_select_db($dbname, $db);


$timestamp = time();



$uhrzeit = date("H:i",$timestamp);
$datum = date("d.m.Y",$timestamp);
$t_year = date("Y",$timestamp);

$gb_anzeigen = 10;
$gb_tblname = "wls_gb";

$sb_tblname ="wls_Shoutbox";

$abizeitung_tblname="wls_abizeitung";

$news_anzeigen =8;  // Hauptseite News

$news_tblname = "wls_news";

$n_anzeigen = 20;     // Kommentare News pro Seite

$news_anzeigen_archiv=50;   // Archiv News pro Seite

$kurs_tblname = "wls_kurs0304";
$kurs_anzeigen = "30";

$user_tblname="wls_login";
<<<<<<< HEAD
$user_gb_anzeigen="20";    // Gï¿½stebucheintrï¿½ge pro Seite
=======
$user_gb_anzeigen="20";    // Gästebucheinträge pro Seite
>>>>>>> af2fff1... version1


$termine_tblname="wls_termine";
$termine_comments_tblname="wls_termine_comments";
$t_anzeigen = 10;   
$termine_anzeigen = 10;

$user_pm_ein_tblname="wls_pm_ein";
$user_pm_aus_tblname="wls_pm_aus";
$user_pm_anzeigen="20";

$cat_tblname="wls_forum_cat";
$threads_tblname="wls_forum_threads";
$posts_tblname="wls_forum_posts";

$itperpage = 10;

$threads_anzeigen = 20;

$links_tblname1 = "wls_links_schule";
$links_tblname2 = "wls_links_lustiges";
$links_tblname3 = "wls_links_infos";
$links_anzeigen = "20";

$comment_tblname = "wls_comment";

$games_tblname = "wls_games";
$games_anzeigen = "10";

$zitate_tblname = "wls_zitate";
$zitate_anzeigen = "20";

$downloads_tblname = "wls_downloads";
$downloads_anzeigen = "20";

$proseite_mitglieder =30;   // Mitglieder anzeigen pro Seite

$on_tblname="wls_online";


$user_gb_tblname="wls_gb_user";

$gallery_tblname = "wls_gallery";

if($class=="party") {
$g_anzeigen_main = "12";    }
else {$g_anzeigen_main = "8"; }
$g_anzeigen = "50";         // Bilder pro Seite Party


$besucher_tblname="wls_besucher";


$userip = $REMOTE_ADDR;


if (ereg("Opera",$HTTP_USER_AGENT)) $browser = 'Opera'; 

elseif (ereg("MSIE 6\.0",$HTTP_USER_AGENT)) $browser = 'MSIE 6.0'; 
elseif (ereg("MSIE 5\.5",$HTTP_USER_AGENT)) $browser = 'MSIE 5.5'; 
elseif (ereg("MSIE 5\.",$HTTP_USER_AGENT)) $browser = 'MSIE 5.0-4'; 
elseif (ereg("MSIE 4\.",$HTTP_USER_AGENT)) $browser = 'MSIE 4.x'; 

elseif (ereg("Netscape/7\.",$HTTP_USER_AGENT)) $browser = 'Netscape7.x'; 
elseif (ereg("Netscape6/6\.",$HTTP_USER_AGENT)) $browser = 'Netscape6.x'; 

else $browser = 'sonstigerBrowser'; 


 $showadmin = mysql_query("select * from $user_tblname WHERE UserMail='$save_email_abicalypse'");

   
   while  ($rowadmin  =  mysql_fetch_row($showadmin)) { $save_id=$rowadmin[0];$save_name=$rowadmin[1];

$save_status_ehe=$rowadmin[29];
  
$sqlon = "UPDATE $user_tblname SET onlinetime = $timestamp WHERE UserMail = '$save_email_abicalypse'";     

mysql_query($sqlon) OR die(mysql_error()); 

 }



$sql = "SELECT COUNT(*) as Anzahl FROM $on_tblname WHERE IP = '".$_SERVER['REMOTE_ADDR']."'"; 

$result = mysql_query($sql) OR die(mysql_error()); 

$row = mysql_fetch_assoc($result);  
  
if($row['Anzahl']) {     
    
$sql = "UPDATE $on_tblname SET Datum = NOW() WHERE IP = '".$_SERVER['REMOTE_ADDR']."'";     

mysql_query($sql) OR die(mysql_error());    }


else {          

$sql = "INSERT INTO $on_tblname (IP, Datum) VALUES ('".$_SERVER['REMOTE_ADDR']."', NOW())"; 
       
mysql_query($sql) OR die(mysql_error());    }  


$sql = "DELETE FROM $on_tblname  WHERE DATE_SUB(NOW(), INTERVAL 3 MINUTE) > Datum;"; 

mysql_query($sql) OR die(mysql_error());


$sqlio = "SELECT COUNT(*) as Anzahl FROM $on_tblname;"; 

$result = mysql_query($sqlio) OR die(mysql_error()); 


$ip_b=$_SERVER['REMOTE_ADDR']; 

$besucher_s = mysql_query("select * from $besucher_tblname WHERE IP='$ip_b' && Datum='$datum'");
$spacer=mysql_num_rows($besucher_s);

if($spacer=="0") {


$besuchersql = "INSERT INTO $besucher_tblname (IP, Datum, time, browser) VALUES ('".$_SERVER['REMOTE_ADDR']."', '$datum', '$timestamp', '$HTTP_USER_AGENT')"; 
       
mysql_query($besuchersql) OR die(mysql_error());    }  



if($do=="read_message" && $page=="post_eingang") {


$sqlonup = "UPDATE $user_pm_ein_tblname SET gelesen = 'ja' WHERE id = '$p_id'";     

mysql_query($sqlonup) OR die(mysql_error()); 

}



