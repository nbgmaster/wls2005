<<<<<<< HEAD
<?php  
=======
<? 
>>>>>>> af2fff1... version1

  if (isset($preview))  {

  include("preview.php");
  
  } 

  if ($title_required == "1")  { ?>

      <script language="JavaScript" type="text/javascript" src="./javascript/form_title2.js"></script>

<<<<<<< HEAD
  <?php  } else {
=======
  <? } else {
>>>>>>> af2fff1... version1

      if ($do == "newpm" or $do == "newtopic")  { ?>

          <script language="JavaScript" type="text/javascript" src="./javascript/form_title.js"></script>
 
<<<<<<< HEAD
          <?php   }  else {  ?>

          <script language="JavaScript" type="text/javascript" src="./javascript/form_reply.js"></script>

       <?php   }
=======
          <?  }  else {  ?>

          <script language="JavaScript" type="text/javascript" src="./javascript/form_reply.js"></script>

       <?  }
>>>>>>> af2fff1... version1

  }
     
?>
<<<<<<< HEAD
<form action="<?php  echo"$form_link"; ?>" method="post" name="bbform" onsubmit="return checkForm(this)" style="display:inline;" enctype="multipart/form-data">

      
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<form action="<? echo"$form_link"; ?>" method="post" name="bbform" onsubmit="return checkForm(this)" style="display:inline;" enctype="multipart/form-data">

      
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td class="tableb" valign="top" width="200" align="center">

    <br><br>

<<<<<<< HEAD
    <b><?php  echo"$smilies_showstart"; ?> von <?php  echo"$smilienumbers"; ?> Smilies:</b>
=======
    <b><? echo"$smilies_showstart"; ?> von <? echo"$smilienumbers"; ?> Smilies:</b>
>>>>>>> af2fff1... version1

    <br><br>

    <table cellpadding="4">

      <tr>

<<<<<<< HEAD
      <?php  include("./includes/smilies.php"); ?>
=======
      <? include("./includes/smilies.php"); ?>
>>>>>>> af2fff1... version1

      </tr>

    </table>

        <br>

        <script language="JavaScript" type="text/javascript" src="./javascript/window_position.js"></script>

<<<<<<< HEAD
        <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 

        <a href="javascript:window_position(<?php  echo"$width_smilies_window,$height_smilies_window"; ?>,'includes/allsmilies.php','Smilies')">Weitere Smilies ansehen</a>
=======
        <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> 

        <a href="javascript:window_position(<? echo"$width_smilies_window,$height_smilies_window"; ?>,'includes/allsmilies.php','Smilies')">Weitere Smilies ansehen</a>
>>>>>>> af2fff1... version1

    <br><br><br>

    Optionen:<br><br>

    <table>

      <tr>

        <td>

<<<<<<< HEAD
        <img src=images/templates/<?php  echo"$template"; ?>/arrow_r.gif> HTML ist     <b><?php  echo"$html_mode"; ?></b>
=======
        <img src=images/templates/<? echo"$template"; ?>/arrow_r.gif> HTML ist     <b><? echo"$html_mode"; ?></b>
>>>>>>> af2fff1... version1

      </tr>

      <tr>

        <td>

<<<<<<< HEAD
        <img src=images/templates/<?php  echo"$template"; ?>/arrow_r.gif> BBCode ist   <b><?php  echo"$bbcode_mode"; ?></b>
=======
        <img src=images/templates/<? echo"$template"; ?>/arrow_r.gif> BBCode ist   <b><? echo"$bbcode_mode"; ?></b>
>>>>>>> af2fff1... version1

      </tr>

      <tr>

        <td>

<<<<<<< HEAD
        <img src=images/templates/<?php  echo"$template"; ?>/arrow_r.gif> Smilies sind <b><?php  echo"$smilies_mode"; ?></b>
=======
        <img src=images/templates/<? echo"$template"; ?>/arrow_r.gif> Smilies sind <b><? echo"$smilies_mode"; ?></b>
>>>>>>> af2fff1... version1

        </td>

      </tr>

    </table>

    </td>
      
<<<<<<< HEAD
    <td class="main" bgcolor="<?php  echo"#$cell_bg01"; ?>" align="center">
=======
    <td class="main" bgcolor="<? echo"#$cell_bg01"; ?>" align="center">
>>>>>>> af2fff1... version1

    <br>

    <b>Titel:</b>

<<<<<<< HEAD
    <?php  if ($do == "newtopic" or $do == "newpm")  { ?>

    <input class="input" type="text" maxlength="30" value="<?php  echo"$title"; ?>" name="title" style="width:420px;">

    <?php  }  else  { ?>

    <input class="input" type="text" maxlength="30" value="<?php  echo"$newtitle"; ?>" name="newtitle" style="width:420px;">

    <?php  } ?>
=======
    <? if ($do == "newtopic" or $do == "newpm")  { ?>

    <input class="input" type="text" maxlength="30" value="<? echo"$title"; ?>" name="title" style="width:420px;">

    <? }  else  { ?>

    <input class="input" type="text" maxlength="30" value="<? echo"$newtitle"; ?>" name="newtitle" style="width:420px;">

    <? } ?>
>>>>>>> af2fff1... version1

    <br><br>
              
    <table style="width:100%;">

      <tr>

        <td align="center" style="width:100%;">

        <table cellspacing="0" cellpadding="0" align="center">

          <tr>
      
            <td>

            <input class="input" type="radio" name="mode" value="0" title="einfacher Modus: (alt+n)" accesskey="n" onclick="setmode(this.value)" checked>einfacher Modus
            &nbsp;
            <input class="input" type="radio" name="mode" value="1" title="erweiterter Modus: (alt+e)" accesskey="e" onclick="setmode(this.value)" >erweiterter Modus

            </td>

          </tr>

        </table>

        <br>

        <table cellspacing="0" cellpadding="0">
 
          <tr>

            <td>

            <select id="sizeselect"  style="width:75px;" onchange="fontformat(this.form,this.options[this.selectedIndex].value,'SIZE')">

            <option value="0">SIZE</option>

            <option value="1">klein</option>
            <option value="2">mittel</option>
            <option value="3">groﬂ</option>
            <option value="4">riesig</option>

            </select>
 
            &nbsp;&nbsp;

            <select id="colorselect" style="width:100px;" onchange="fontformat(this.form,this.options[this.selectedIndex].value,'COLOR')">

            <option value="0">COLOR</option>

            <option value="skyblue" style="color:skyblue">sky blue</option>
            <option value="royalblue" style="color:royalblue">royal blue</option>
            <option value="blue" style="color:blue">blue</option>
            <option value="darkblue" style="color:darkblue">dark-blue</option>
     	    <option value="orange" style="color:orange">orange</option>
            <option value="orangered" style="color:orangered">orange-red</option>
            <option value="crimson" style="color:crimson">crimson</option>
            <option value="red" style="color:red">red</option>
            <option value="firebrick" style="color:firebrick">firebrick</option>
            <option value="darkred" style="color:darkred">dark red</option>
            <option value="green" style="color:green">green</option>
            <option value="limegreen" style="color:limegreen">limegreen</option>
            <option value="seagreen" style="color:seagreen">sea-green</option>
            <option value="deeppink" style="color:deeppink">deeppink</option>
            <option value="tomato" style="color:tomato">tomato</option>
            <option value="coral" style="color:coral">coral</option>
            <option value="purple" style="color:purple">purple</option>
            <option value="indigo" style="color:indigo">indigo</option>
            <option value="burlywood" style="color:burlywood">burlywood</option>
            <option value="sandybrown" style="color:sandybrown">sandy brown</option>
            <option value="sienna" style="color:sienna">sienna</option>
            <option value="chocolate" style="color:chocolate">chocolate</option>
            <option value="teal" style="color:teal">teal</option>
            <option value="silver" style="color:silver">silver</option></select>

            </select>
            &nbsp;
            </td>

            <td>
     
            &nbsp;
<<<<<<< HEAD
            <img src="images/templates/<?php  echo"$template";?>/bbcode_bold.gif" title="fettgedruckter Text" border="0" onclick="bbcode(document.bbform,'B','')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template";?>/bbcode_italic.gif" title="kursiver Text" border="0" onclick="bbcode(document.bbform,'I','')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template";?>/bbcode_underline.gif" title="unterstrichener Text" border="0" onclick="bbcode(document.bbform,'U','')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template";?>/bbcode_center.gif" title="zentrierter Text" border="0" onclick="bbcode(document.bbform,'CENTER','')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template";?>/bbcode_url.gif" title="Hyperlink einf&uuml;gen" border="0" onclick="namedlink(document.bbform,'URL')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<?php  echo"$template";?>/bbcode_image.gif" title="Bild einf&uuml;gen" border="0" onclick="bbcode(document.bbform,'IMG','http://')" class="clsCursor">
            &nbsp;
             <img src="images/templates/<?php  echo"$template";?>/bbcode_quote.gif" title="Zitat" border="0" onclick="bbcode(document.bbform,'QUOTE','')" class="clsCursor">
            &nbsp;
             <img src="images/templates/<?php  echo"$template";?>/bbcode_code.gif" title="Code" border="0" onclick="bbcode(document.bbform,'PHP','')" class="clsCursor">
            &nbsp;
             <img src="images/templates/<?php  echo"$template";?>/bbcode_php.gif" title="PHP Code" border="0" onclick="bbcode(document.bbform,'PHP','')" class="clsCursor">
=======
            <img src="images/templates/<? echo"$template";?>/bbcode_bold.gif" title="fettgedruckter Text" border="0" onclick="bbcode(document.bbform,'B','')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<? echo"$template";?>/bbcode_italic.gif" title="kursiver Text" border="0" onclick="bbcode(document.bbform,'I','')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<? echo"$template";?>/bbcode_underline.gif" title="unterstrichener Text" border="0" onclick="bbcode(document.bbform,'U','')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<? echo"$template";?>/bbcode_center.gif" title="zentrierter Text" border="0" onclick="bbcode(document.bbform,'CENTER','')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<? echo"$template";?>/bbcode_url.gif" title="Hyperlink einf&uuml;gen" border="0" onclick="namedlink(document.bbform,'URL')" class="clsCursor">
            &nbsp;
            <img src="images/templates/<? echo"$template";?>/bbcode_image.gif" title="Bild einf&uuml;gen" border="0" onclick="bbcode(document.bbform,'IMG','http://')" class="clsCursor">
            &nbsp;
             <img src="images/templates/<? echo"$template";?>/bbcode_quote.gif" title="Zitat" border="0" onclick="bbcode(document.bbform,'QUOTE','')" class="clsCursor">
            &nbsp;
             <img src="images/templates/<? echo"$template";?>/bbcode_code.gif" title="Code" border="0" onclick="bbcode(document.bbform,'PHP','')" class="clsCursor">
            &nbsp;
             <img src="images/templates/<? echo"$template";?>/bbcode_php.gif" title="PHP Code" border="0" onclick="bbcode(document.bbform,'PHP','')" class="clsCursor">
>>>>>>> af2fff1... version1
            &nbsp;
            </td>

         </tr>

       </table>

       <table align="center">

         <tr>

           <td>

           </td>

         </tr>

         <tr>

           <td width="50%">
           <input class="input" type="button" value="aktuellen Tag schlieﬂen" accesskey="c" title="aktuellen tag schlieﬂen (alt+c)" onclick="closetag(this.form)" class="reply_button">
           &nbsp; 
           </td>

           <td width="50%">
           &nbsp; 
           <input class="input" type="button" value="alle Tags schlieﬂen" accesskey="x" title="alle tags schlieﬂen (alt+x)" onclick="closeall(this.form)" class="reply_button">
           </td>

         </tr>

       </table>

       </td>

     </tr>
 
     <tr>
           
       <td align="center">

<<<<<<< HEAD
       <textarea nowrap name="message" rows="<?php  echo"$rows_textarea"; ?>" style="width:95%;height:240px;"><?php  if (isset($preview)) {  
=======
       <textarea nowrap name="message" rows="<? echo"$rows_textarea"; ?>" style="width:95%;height:240px;"><? if (isset($preview)) {  
>>>>>>> af2fff1... version1
$_POST["message"] = trim($_POST["message"]);
$preview_message = stripslashes($_POST["message"]);

echo"$preview_message";
}
else  {

           if ($q_id != "")     { 

<<<<<<< HEAD
               $quote_msg = str_replace("[PHP]<?php ", "[PHP]", $quote_msg);
=======
               $quote_msg = str_replace("[PHP]<?", "[PHP]", $quote_msg);
>>>>>>> af2fff1... version1
               $quote_msg = str_replace("?>[/PHP]", "[/PHP]", $quote_msg);

               echo"$quote1$quote_msg$quote2";

           } 
    
           if ($do == "edit")   {

<<<<<<< HEAD
               $edit_message = str_replace("[PHP]<?php ", "[PHP]", $edit_message);
=======
               $edit_message = str_replace("[PHP]<?", "[PHP]", $edit_message);
>>>>>>> af2fff1... version1
               $edit_message = str_replace("?>[/PHP]", "[/PHP]", $edit_message);

               echo"$edit_message"; 

           } 

           if ($do == "usercp") { 

<<<<<<< HEAD
               $userdata_signature = str_replace("[PHP]<?php ", "[PHP]", $userdata_signature);
=======
               $userdata_signature = str_replace("[PHP]<?", "[PHP]", $userdata_signature);
>>>>>>> af2fff1... version1
               $userdata_signature = str_replace("?>[/PHP]", "[/PHP]", $userdata_signature);

               echo"$userdata_signature"; 

           } 

           if ($do == "newpm")  { 

               echo"$message";

           } 

       }

       ?></textarea>
 
       </td>

     </tr>

<<<<<<< HEAD
     <?php  if ($do == "newtopic" or $do == "reply" or $do == "post")  { ?>
=======
     <? if ($do == "newtopic" or $do == "reply" or $do == "post")  { ?>
>>>>>>> af2fff1... version1

     <tr>

        <td align="center">
        <br>
        Datei anh‰ngen:     <input class="input" name="file" type="file" size="36">
        <br>
        </td>

      </tr>

<<<<<<< HEAD
      <?php   } ?>

     <?php  if ($do == "newtopic")  { ?>
=======
      <?  } ?>

     <? if ($do == "newtopic")  { ?>
>>>>>>> af2fff1... version1

     <tr>

        <td align="center">
        <br>
        Umfrage starten:     <input type="radio" value="1" name="poll"> Ja <input type="radio" value="0" name="poll" checked> Nein
        <br>
        </td>

      </tr>

<<<<<<< HEAD
      <?php   } ?>
=======
      <?  } ?>
>>>>>>> af2fff1... version1

   </table> 

   <br>

   <center>

<<<<<<< HEAD
   <?php  if ($do == "post")  { ?>

   <input class="input" type="hidden" value="<?php  echo"$_POST[forum_id]"; ?>" name="forum_id">
   <input class="input" type="hidden" value="<?php  echo"$_POST[t]"; ?>" name="t">   
   <input class="input" type="hidden" value="<?php  echo"$_POST[f]"; ?>" name="f">
   <input class="input" type="hidden" value="<?php  echo"$_POST[p_id]"; ?>" name="p_id">
   <input class="input" type="hidden" value="<?php  echo"$_POST[p_userid]"; ?>" name="p_userid">

   <?php  }  if ($do == "reply")  { ?>

   <input class="input" type="hidden" value="<?php  echo"$forum_id"; ?>" name="forum_id">
   <input class="input" type="hidden" value="<?php  echo"$t"; ?>" name="t">

   <?php  }  if ($do == "newtopic")  { ?>

   <input class="input" type="hidden" value="<?php  echo"$f"; ?>" name="f">
  
   <?php  }  if ($do == "edit")  { ?>

   <input class="input" type="hidden" value="<?php  echo"$p_userid"; ?>" name="p_userid">
   <input class="input" type="hidden" value="<?php  echo"$p_id"; ?>" name="p_id">
 
   <?php  }  if ($do == "newpm")  { ?>

   <input class="input" type="hidden" value="<?php  echo"$user_id"; ?>" name="user_id">


   <?php  }  if ($do == "newpm")  { ?>

   <input class="input" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Nachricht abschicken">
   
   <?php  }  if ($do == "edit")  { ?>
=======
   <? if ($do == "post")  { ?>

   <input class="input" type="hidden" value="<? echo"$_POST[forum_id]"; ?>" name="forum_id">
   <input class="input" type="hidden" value="<? echo"$_POST[t]"; ?>" name="t">   
   <input class="input" type="hidden" value="<? echo"$_POST[f]"; ?>" name="f">
   <input class="input" type="hidden" value="<? echo"$_POST[p_id]"; ?>" name="p_id">
   <input class="input" type="hidden" value="<? echo"$_POST[p_userid]"; ?>" name="p_userid">

   <? }  if ($do == "reply")  { ?>

   <input class="input" type="hidden" value="<? echo"$forum_id"; ?>" name="forum_id">
   <input class="input" type="hidden" value="<? echo"$t"; ?>" name="t">

   <? }  if ($do == "newtopic")  { ?>

   <input class="input" type="hidden" value="<? echo"$f"; ?>" name="f">
  
   <? }  if ($do == "edit")  { ?>

   <input class="input" type="hidden" value="<? echo"$p_userid"; ?>" name="p_userid">
   <input class="input" type="hidden" value="<? echo"$p_id"; ?>" name="p_id">
 
   <? }  if ($do == "newpm")  { ?>

   <input class="input" type="hidden" value="<? echo"$user_id"; ?>" name="user_id">


   <? }  if ($do == "newpm")  { ?>

   <input class="input" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Nachricht abschicken">
   
   <? }  if ($do == "edit")  { ?>
>>>>>>> af2fff1... version1

   <input class="input" type="submit" name="preview" accesskey="S" onclick="closeall(this.form)" value="Vorschau">
   
   <input class="input" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Beitrag ‰ndern">
   
<<<<<<< HEAD
   <?php  }  if ($do == "usercp")  { ?>

   <input class="input" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Signatur ‰ndern">
   
   <?php  }  if ($do != "usercp" && $do != "edit" && $do != "newpm")  { ?>
=======
   <? }  if ($do == "usercp")  { ?>

   <input class="input" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Signatur ‰ndern">
   
   <? }  if ($do != "usercp" && $do != "edit" && $do != "newpm")  { ?>
>>>>>>> af2fff1... version1

   <input class="input" type="submit" name="preview" accesskey="S" onclick="closeall(this.form)" value="Vorschau">

   <input class="input" type="submit" name="send_postdata" accesskey="S" onclick="closeall(this.form)" value="Beitrag absenden">
   
<<<<<<< HEAD
   <?php  } ?>
=======
   <? } ?>
>>>>>>> af2fff1... version1

   </center>

   <br>

   </td>

  </tr>

</form>

</table>