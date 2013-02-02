
<a name="<?php  echo"".$row_posts["id"].""; ?>"></a>

<?php  if ($do == "search")  { ?>

<table width="<?php  echo"$width"; ?>" cellpadding="5" cellspacing="1" class="tableinborder">

<a name="<? echo"".$row_posts["id"].""; ?>"></a>

<? if ($do == "search")  { ?>

<table width="<? echo"$width"; ?>" cellpadding="5" cellspacing="1" class="tableinborder">


  <tr>

    <td class="tableb">


    <font class="big"><b>Thema: <?php  echo"$topicname"; ?></b></font>

    <font class="big"><b>Thema: <? echo"$topicname"; ?></b></font>


    </td>

  </tr>

</table>


<?php  } ?>

<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="1" class="tableinborder">

<? } ?>

<table width="<? echo"$width"; ?>" cellpadding="0" cellspacing="1" class="tableinborder">

               
  <tr>
  
    <td width="180" valign="top" class="tablea">

    <table cellpadding="8" cellspacing="0">

      <tr>

        <td class="tablea">


        <?php  if ($post_user_name != "Gast")  { ?>

        <a href="index.php?do=profile&user_id=<?php  echo"$post_user_id"; ?>">

        <?php  } ?>

        <font class="big"><b><?php  echo"$post_user_name"; ?></b></font>

        <?php  if ($post_user_name != "Gast")  { ?> </a> <?php  } ?>

        <img src="images/templates/<?php  echo"$template/$gender_img"; ?>">

        <? if ($post_user_name != "Gast")  { ?>

        <a href="index.php?do=profile&user_id=<? echo"$post_user_id"; ?>">

        <? } ?>

        <font class="big"><b><? echo"$post_user_name"; ?></b></font>

        <? if ($post_user_name != "Gast")  { ?> </a> <? } ?>

        <img src="images/templates/<? echo"$template/$gender_img"; ?>">



        <br><br>


        <?php  echo"$current_stars<br>$current_rank"; ?>

        <?php  if ($avatar != "")  { 

        <? echo"$current_stars<br>$current_rank"; ?>

        <? if ($avatar != "")  { 


        echo"<br>$avatar<br>"; 

        } ?>

        <br>

        <table cellpadding="0" cellspacing="0">

          <tr>

            <td>


            <img src="images/templates/<?php  echo"$template/arrow_r.gif"; ?>"> <b>Dabei seit:</b> <?php  echo"$datum_reg"; ?>

            <img src="images/templates/<? echo"$template/arrow_r.gif"; ?>"> <b>Dabei seit:</b> <? echo"$datum_reg"; ?>


            </td>

          </tr>

          <tr>

            <td>


            <img src="images/templates/<?php  echo"$template/arrow_r.gif"; ?>"> <b>Beiträge:</b>&nbsp;&nbsp; <?php  echo"$postnumbers_user"; ?>

            <img src="images/templates/<? echo"$template/arrow_r.gif"; ?>"> <b>Beiträge:</b>&nbsp;&nbsp; <? echo"$postnumbers_user"; ?>


            </td>

          </tr>


          <?php  if($user_place != "")  { ?>

          <? if($user_place != "")  { ?>

 
          <tr>

            <td>


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Wohnort:</b>&nbsp;&nbsp; <?php  echo"".$user_place.""; ?>

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Wohnort:</b>&nbsp;&nbsp; <? echo"".$user_place.""; ?>


            </td>

          </tr>


          <?php  } ?>

          <? } ?>


        </table>

        </td>

      </tr>

    </table>

    </td>

    <td class="tablea" valign="top">


    <table style="width:100%;border-bottom:1px solid <?php  echo"#$bordercolor"; ?>;" class="tableb">

    <table style="width:100%;border-bottom:1px solid <? echo"#$bordercolor"; ?>;" class="tableb">


      <tr>

        <td>


        <?php  echo"<b>$topictitle</b>"; ?>

        <? echo"<b>$topictitle</b>"; ?>


        </td>

        <td align="right" valign="bottom">


        <?php  if ($granted_write == "1")  { ?>

        <a href="index.php?t=<?php  echo"$t&do=reply"; ?>">

        <img src="images/templates/<?php  echo"$template"; ?>/replypost.gif" title="Beitrag beantworten" border="0"></a> 
	
        &nbsp;

        <?php   }  

        <? if ($granted_write == "1")  { ?>

        <a href="index.php?t=<? echo"$t&do=reply"; ?>">

        <img src="images/templates/<? echo"$template"; ?>/replypost.gif" title="Beitrag beantworten" border="0"></a> 
	
        &nbsp;

        <?  }  


        if ($do != "inbox" && $do != "outbox") { 

        if ($granted_write == "1")  {  ?>


        <a href="index.php?t=<?php  echo"$t&do=reply&q_id=".$row_posts["id"].""; ?>">

        <?php  } ?>

        <img src="images/templates/<?php  echo"$template"; ?>/icon_quote.gif" title="Beitrag zitieren" border="0">

        <?php  if ($granted_write == "1")  {  echo"</a>"; } ?>
	
        &nbsp;

        <?php  echo"$edit_post"; ?>

        <img src="images/templates/<?php  echo"$template"; ?>/icon_edit.gif" title="Beitrag editieren" border="0">

        <?php  echo"$edit_post2"; ?>

        &nbsp;

        <?php  echo"$del_post $del_post2 $del_post3 &nbsp;"; ?>

        <a href="#top"><img src="images/templates/<?php  echo"$template"; ?>/icon_goup.gif" title="Nach oben" border="0"></a>

        &nbsp;

        <?php  } else { ?>

        <a href="index.php?do=newpm&user_id=<?php  echo"$post_user_id"; ?>">

        <img src="images/templates/<?php  echo"$template"; ?>/icon_reply.gif" title="Antworten" border="0"></a> 

        </a>
 
        <?php  } ?>

        <a href="index.php?t=<? echo"$t&do=reply&q_id=".$row_posts["id"].""; ?>">

        <? } ?>

        <img src="images/templates/<? echo"$template"; ?>/icon_quote.gif" title="Beitrag zitieren" border="0">

        <? if ($granted_write == "1")  {  echo"</a>"; } ?>
	
        &nbsp;

        <? echo"$edit_post"; ?>

        <img src="images/templates/<? echo"$template"; ?>/icon_edit.gif" title="Beitrag editieren" border="0">

        <? echo"$edit_post2"; ?>

        &nbsp;

        <? echo"$del_post $del_post2 $del_post3 &nbsp;"; ?>

        <a href="#top"><img src="images/templates/<? echo"$template"; ?>/icon_goup.gif" title="Nach oben" border="0"></a>

        &nbsp;

        <? } else { ?>

        <a href="index.php?do=newpm&user_id=<? echo"$post_user_id"; ?>">

        <img src="images/templates/<? echo"$template"; ?>/icon_reply.gif" title="Antworten" border="0"></a> 

        </a>
 
        <? } ?>


        </td>

      </tr>

    </table>

    <table cellpadding="2" style="width:100%;">

      <tr>

        <td><font class="big">


        <?php  echo"$main_message"; ?>

        <?php  echo"$attachment"; ?>

        <? echo"$main_message"; ?>

        <? echo"$attachment"; ?>


        </td>

      </tr>

      <tr>

        <td valign="bottom">

        <br>


        <?php   if ($user_signature != "" && $sig_disable == "0")  {  ?>

        <?  if ($user_signature != "" && $sig_disable == "0")  {  ?>


        <table cellspacing="0" cellpadding="0" style="width:100%;">

          <tr>
                                 
            <td style="line-height:15px;">_______________________<br>


            <?php  echo"$user_signature"; ?>

            <? echo"$user_signature"; ?>


            </td>

          </tr>

        </table> 


        <?php  }  if($row_posts["edittime"] != "" && $row_posts["edittime"] != "0") { ?>

        <br><br><i><font class="small">zuletzt editiert von <?php  echo"$edit_user"; ?> am <?php  echo"$edit_post_date, $edit_post_time"; ?> Uhr</font></i>

        <?php  }

        <? }  if($row_posts["edittime"] != "" && $row_posts["edittime"] != "0") { ?>

        <br><br><i><font class="small">zuletzt editiert von <? echo"$edit_user"; ?> am <? echo"$edit_post_date, $edit_post_time"; ?> Uhr</font></i>

        <? }


        if ($user_signature != "" && $sig_disable == "0")  {  

        echo"<br><br>"; }

        ?>

        </td>

       </tr>

    </table>

    </td>

  </tr>

  <tr>

    <td class="tableb" align="center" style="height:25px;">


    <img src="images/templates/<?php  echo"$template"; ?>/posticon.gif"> <?php  echo"$post_date, $post_time"; ?>

    <img src="images/templates/<? echo"$template"; ?>/posticon.gif"> <? echo"$post_date, $post_time"; ?>


    </td>

    <td class="tablea">

    &nbsp;


    <img src="images/templates/<?php  echo"$template/$user_status"; ?>">

    &nbsp;

    <a href="index.php?do=email&user_id=<?php  echo"$post_user_id"; ?>"><img src="images/templates/<?php  echo"$template"; ?>/icon_email.gif" title="Email an <?php  echo"$post_user_name2"; ?> schreiben" border="0"></a>
   
    &nbsp;
           
    <a href="index.php?do=newpm&user_id=<?php  echo"$post_user_id"; ?>"><img title="PN an <?php  echo"$post_user_name2"; ?> schreiben" src="images/templates/<?php  echo"$template"; ?>/icon_pm.gif" border="0"></a>
       
    &nbsp;
         
    <?php  echo"$user_hp"; ?><img src="images/templates/<?php  echo"$template"; ?>/icon_www.gif" title="Homepage von <?php  echo"$post_user_name2"; ?> anschauen" border="0"><?php  echo"$user_hp2"; ?>
         
    &nbsp;           
          
    <a href="index.php?do=search&user_id=<?php  echo"$post_user_id"; ?>"><img src="images/templates/<?php  echo"$template"; ?>/icon_search.gif" title="Beiträge von <?php  echo"$post_user_name2"; ?> suchen" border="0"></a>
          
    &nbsp;           
         
    <a href="index.php?do=addbuddy&user_id=<?php  echo"$post_user_id"; ?>"><img src="images/templates/<?php  echo"$template"; ?>/icon_homie.gif" title="<?php  echo"$post_user_name2"; ?> zur Freundesliste hinzufügen" border="0"></a>

    <img src="images/templates/<? echo"$template/$user_status"; ?>">

    &nbsp;

    <a href="index.php?do=email&user_id=<? echo"$post_user_id"; ?>"><img src="images/templates/<? echo"$template"; ?>/icon_email.gif" title="Email an <? echo"$post_user_name2"; ?> schreiben" border="0"></a>
   
    &nbsp;
           
    <a href="index.php?do=newpm&user_id=<? echo"$post_user_id"; ?>"><img title="PN an <? echo"$post_user_name2"; ?> schreiben" src="images/templates/<? echo"$template"; ?>/icon_pm.gif" border="0"></a>
       
    &nbsp;
         
    <? echo"$user_hp"; ?><img src="images/templates/<? echo"$template"; ?>/icon_www.gif" title="Homepage von <? echo"$post_user_name2"; ?> anschauen" border="0"><? echo"$user_hp2"; ?>
         
    &nbsp;           
          
    <a href="index.php?do=search&user_id=<? echo"$post_user_id"; ?>"><img src="images/templates/<? echo"$template"; ?>/icon_search.gif" title="Beiträge von <? echo"$post_user_name2"; ?> suchen" border="0"></a>
          
    &nbsp;           
         
    <a href="index.php?do=addbuddy&user_id=<? echo"$post_user_id"; ?>"><img src="images/templates/<? echo"$template"; ?>/icon_homie.gif" title="<? echo"$post_user_name2"; ?> zur Freundesliste hinzufügen" border="0"></a>

        
    </td>

  </tr>

</table> 