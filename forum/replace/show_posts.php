<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  $str = trim($str);


  if ($html_disable == "1")  {


      $str = str_replace("<", "&lt;", $str);
      $str = str_replace(">", "&gt;", $str);

  }


  if ($bbcode_disable == "0")  {

 
      // Line Breaks
      $str = nl2br($str);

      // Replace PHP Code
      $match   = array('#\[PHP\](.*?)\[\/PHP\]#se');

      $replace = array("'<div>'.highlight_php('$1').'</div>'");

      $str     =  preg_replace($match, $replace, $str);

      // Replace IMG Code
      preg_match_all("=\[IMG\](.*)\[/IMG\]=Uis", $str, $strikes, PREG_SET_ORDER);

      foreach ($strikes as $content) {

               $img_var = trim($content[1]);

               $img_size = getimagesize($img_var);
               $max_w    = $width - 200;

               if ($img_size[0] > $max_w)  {

                   $str = str_replace("[IMG]$content[1][/IMG]", "<img src=\"$img_var\" width=\"$max_w\" style=\"border:".$bordergage."px solid #$bordercolor;\"><br><img src=\"images/templates/$template/arrow_r.gif\"><a href=\"$img_var\" target=\"_blank\"><b style=\"line-height:20px;\">Volle Bildgröße anzeigen</b></a>", $str);

               }

               else  {

                   $str = str_replace("[IMG]$content[1][/IMG]", "<img src=\"$img_var\" style=\"border:".$bordergage."px solid #$bordercolor;\">", $str);

               }

      }

       $str = preg_replace('#\[COLOR=(.*)\](.*)\[/COLOR\]#Uis',
                            '<FONT COLOR="\1">\2</FONT>',
                            $str);

       $str = preg_replace('=\[B\](.*)\[/B\]=Uis',
                            '<B>\1</B>',
                            $str);
    
       $str = preg_replace('=\[I\](.*)\[/I\]=Uis',
                            '<I>\1</I>',
                            $str);

       $str = preg_replace('=\[QUOTE\](.*)\[/QUOTE\]=Uis',
                            '<center><table cellpadding="4" style="width:90%;"><tr><td>Zitat:</td></tr><tr><td bgcolor="#actual_bgcolor333" style="border:actual_bordergage333px solid #actual_bordercolor333;">\1</td></tr></table></center>',
                            $str);

       $str = preg_replace('=\[U\](.*)\[/U\]=Uis',
                            '<U>\1</U>',
                            $str);


            $str = preg_replace('#\[QUOTE=(.*)\](.*)\[/QUOTE\]#Uis',
            '<center><table cellpadding="4" style="width:90%;"><tr><td><b>\1</b> hat folgendes geschrieben:</td></tr><tr><td bgcolor="#actual_bgcolor333" style="border:actual_bordergage333px solid #actual_bordercolor333;">\2</td></tr></table></center>',
            $str);

       

       $str = preg_replace('#\[SIZE=(.*)\](.*)\[/SIZE\]#Uis',
                            '<FONT SIZE="\1">\2</FONT>',
                            $str);

       $str = preg_replace('=\[CENTER\](.*)\[/CENTER\]=Uis',
                            '<CENTER>\1</CENTER>',
                            $str);

       $str = preg_replace('#\[URL=(.*)\](.*)\[/URL\]#Uis',
                            '<span style="text-decoration:underline;"><A HREF="\1" TARGET="_BLANK">\2</A></span>',
                            $str);

       $str = preg_replace('=\[URL\](.*)\[/URL\]=Uis',
                            '<span style="text-decoration:underline;"><A HREF="\1" TARGET="_BLANK">\1</A></span>',
                            $str);

       $str = str_replace("actual_bordercolor333", "$bordercolor", $str);
       $str = str_replace("actual_bordergage333", "$bordergage", $str);
       $str = str_replace("actual_bgcolor333", "$cell_bg02", $str);


  }
