<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

      $tempname    = $_FILES["file"]["tmp_name"]; 
      $filename    = $_FILES["file"]["name"]; 
      $filetype    = $_FILES["file"]["type"];
      $size        = filesize($_FILES["file"]["tmp_name"]);

      $size2       = getimagesize($tempname);

      $md5name = md5 (uniqid (rand()));

      $upload_access = "true";

      if ($filetype == "image/jpeg" or $filetype == "image/jpg" or $filetype == "image/pjpeg")  {

      $filename2 = "attachments/"."$md5name.jpg";
      $filename3 = "$md5name.jpg";

      }

      if ($filetype == "image/gif")  {

      $filename2 = "attachments/"."$md5name.gif";
      $filename3 = "$md5name.gif";

      }

      if ($filetype == "image/bmp")  {

      $filename2 = "attachments/"."$md5name.bmp";
      $filename3 = "$md5name.bmp";

      }

      if ($filetype == "image/png")  {

      $filename2 = "attachments/"."$md5name.png";
      $filename3 = "$md5name.png";

      } 

      if ($filetype == "text/plain")  {

      $filename2 = "attachments/"."$md5name.txt";
      $filename3 = "$md5name.txt";

      } 
 
      if (isset($send_postdata))  { 

          if ($size > 99999999)   {

              $text04        = "<br>Datei darf max. $avatar_max_size Bytes groﬂ sein!<br><br>";  
              $upload_access = "false";

          }


          if ($upload_access == "true" && $filename != "")  { echo"$filename2 | $filename3";


                  copy("$tempname", "$filename2");  $attachment = $filename3;

           

          }

      }


