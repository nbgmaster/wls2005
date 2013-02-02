<a href="home2.php?download=123">bla</a>

<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

session_start();
ob_start();

if($download!="") {
$download = $_GET['download'];
$basedir = "/home/htdocs/web103/files/";
$filelist = array(
  "123" => "bla.pdf"
);
if (!isset($filelist[$download]))
  die("Datei $download ist nicht vorhanden.");
$filename = sprintf("%s/%s", $basedir, $filelist[$download]);
header("Content-Type: application/octet-stream");
$save_as_name = basename($filelist[$download]);
header("Content-Disposition: attachment; filename=\"$save_as_name\"");
readfile($filename); }
?>