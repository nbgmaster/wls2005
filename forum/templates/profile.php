
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td class="tableb" width="50%">


    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <a href="index.php?do=members"><b>Mitglieder</b></a>
 
    &nbsp;	
     
    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

    <b>Profil von <?php  echo"".$row_user["UserName"].""; ?></b>

    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <a href="index.php?do=members"><b>Mitglieder</b></a>
 
    &nbsp;	
     
    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

    <b>Profil von <? echo"".$row_user["UserName"].""; ?></b>


    </td>

  </tr>

</table>  

<br> 

<!-- Main Frame -->


<table width="<?php  echo"$width"; ?>" cellpadding="0" cellspacing="0">

<table width="<? echo"$width"; ?>" cellpadding="0" cellspacing="0">

               
  <tr>

      <!-- Cell 1:: User --> 


      <td class="tablea" width="200" valign="top" align="center" style="height:100%;">


       <table cellpadding="0" cellspacing="1" class="tableinborder" width="100%" style="height:100%;">

         <tr>

           <td align="center" class="tableb" style="height:100%;">

           <font class="mini"><br></font>


           <img src="images/templates/<?php  echo"$template/$gender_img"; ?>">

           <a href="index.php?do=profile&user_id=<?php  echo"".$row_user["UserID"].""; ?>"><font class="big"><b><?php  echo"".$row_user["UserName"].""; ?></b></font></a>

           <br><br>

           <?php  echo"$stars"; ?>

           <?php  if ($avatar != "")  { 

           <img src="images/templates/<? echo"$template/$gender_img"; ?>">

           <a href="index.php?do=profile&user_id=<? echo"".$row_user["UserID"].""; ?>"><font class="big"><b><? echo"".$row_user["UserName"].""; ?></b></font></a>

           <br><br>

           <? echo"$stars"; ?>

           <? if ($avatar != "")  { 


           echo"<br>$avatar<br>"; 

           } ?>

           <br>

           <table>

             <tr>

               <td>


               <img src="images/templates/<?php  echo"$template/arrow_r.gif"; ?>"> <b>Dabei seit:</b> <?php  echo"$user_regdate"; ?>

               <img src="images/templates/<? echo"$template/arrow_r.gif"; ?>"> <b>Dabei seit:</b> <? echo"$user_regdate"; ?>


               </td>
 
             </tr>

             <tr>

               <td>


               <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Wohnort:</b>&nbsp;&nbsp; 

               <?php   if($row_user["place"] == "") { echo"keine Angabe"; } else { echo"".$row_user["place"].""; } ?>

               <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Wohnort:</b>&nbsp;&nbsp; 

               <?  if($row_user["place"] == "") { echo"keine Angabe"; } else { echo"".$row_user["place"].""; } ?>


               </td>

             </tr>

             <tr>

               <td>


               <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Beitr�ge:</b>&nbsp;&nbsp; <?php  echo"".$row_user["postnumbers"]."<br><br><center> ($user_postsperday"; ?> Beitr�ge pro Tag)</center>

               <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Beitr�ge:</b>&nbsp;&nbsp; <? echo"".$row_user["postnumbers"]."<br><br><center> ($user_postsperday"; ?> Beitr�ge pro Tag)</center>


               </td>

             </tr>

           </table>

           <br>

           </td>

         </tr>

       </table>

       </td>

       <!-- Cell 2:: First Details -->

       <td valign="top" style="height:100%;">

        <table cellpadding="5" cellspacing="1" style="width:100%;height:100%;" class="tableinborder">

          <tr>

            <td class="tableb" width="30%">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>zuletzt online</b>

            </td>
	
            <td class="tablea" width="70%">


            <?php   if($row_user["hide_user"] == "1") { echo"keine Angabe"; } else { echo"am ".$row_user["last_online_time"]." Uhr"; } ?>

            <?  if($row_user["hide_user"] == "1") { echo"keine Angabe"; } else { echo"am ".$row_user["last_online_time"]." Uhr"; } ?>


            </td>

   	  </tr>

          <tr>

            <td class="tablea">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>Vorname</b>

            </td>

            <td class="tableb">


            <?php  if($row_user["firstname"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["firstname"]."";  }  ?>

            <? if($row_user["firstname"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["firstname"]."";  }  ?>


            </td>

          </tr>

          <tr>

            <td class="tableb">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>Nachname</b>

            </td>

            <td class="tablea">


            <?php  if($row_user["lastname"] == "")  { echo"keine Angabe"; } else { echo"".$row_user[lastname].""; }  ?>

            <? if($row_user["lastname"] == "")  { echo"keine Angabe"; } else { echo"".$row_user[lastname].""; }  ?>


            </td>

          </tr>

          <tr>

            <td class="tablea">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>Geburtstag</b>

            </td>

            <td class="tableb">


            <?php  

            <? 


              if ($row_user["birthday"] == "" or $row_user["birthmonth"] == "" or $row_user["birthyear"] == "")  { 

                  echo"keine Angabe";

              } 

              else  {  


              echo"".$row_user["birthday"].""; ?>.<?php  echo"".$row_user["birthmonth"].""; ?>.<?php  echo"".$row_user["birthyear"].""; }

              echo"".$row_user["birthday"].""; ?>.<? echo"".$row_user["birthmonth"].""; ?>.<? echo"".$row_user["birthyear"].""; }


            ?>

            </td>

          </tr>
  
          <tr>

            <td class="tableb">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>Beruf</b>

            </td>
 
            <td class="tablea">


            <?php  if($row_user["job"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["job"].""; } ?>

            <? if($row_user["job"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["job"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tablea">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>Homepage</b>

            </td>

            <td class="tableb">


            <?php  if($row_user["homepage"] == "")  { echo"keine Angabe"; } else { 

            <? if($row_user["homepage"] == "")  { echo"keine Angabe"; } else { 


            if (substr($row_user["homepage"], 0, 7) == "http://")  {
   
                echo"<a href=\"".$row_user["homepage"]."\" target=\"_blank\">";
  
            }

            else  {  

                echo"<a href=\"http://".$row_user["homepage"]."\"  target=\"_blank\">";

            }  echo"".$row_user["homepage"]."</a>"; }  ?>

            </td>

          </tr>

          <tr>

            <td class="tableb">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>ICQ</b>

            </td>

            <td class="tablea">


            <?php  if($row_user["icq"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["icq"].""; } ?>

            <? if($row_user["icq"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["icq"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tablea">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>AIM Screenname</b>

            </td>

            <td class="tableb">


            <?php  if($row_user["aim"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["aim"].""; } ?>

            <? if($row_user["aim"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["aim"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tableb">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>YIM Screenname</b>

            </td>
 
            <td class="tablea">


            <?php  if($row_user["yim"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["yim"].""; } ?>

            <? if($row_user["yim"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["yim"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tablea">


            <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

            <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

            <b>MSN Screenname</b>

            </td>

            <td class="tableb">


            <?php  if($row_user["msn"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["msn"].""; } ?>

            <? if($row_user["msn"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["msn"].""; } ?>


            </td>

          </tr>

       </table>

       </td>

     </tr>

     <tr>

     <!-- Cell 3:: Details Title -->

       <td>

       <table cellpadding="5" cellspacing="1" style="width:100%;" class="tableinborder">

         <tr>
 
           <td class="tablea">


           <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

           <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

           <b>Hobbys / Interessen</b>

           </td>

         </tr>

         <tr>

           <td class="tableb">


           <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

           <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

           <b>Sonstiges</b>

           </td>

         </tr>

         <tr>

           <td class="tablea">


           <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

           <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

           <b>Lieblingsessen</b>

           </td>

         </tr>

         <tr>

           <td class="tableb">


           <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

           <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

           <b>Lieblingsgetr�nk</b>
    
           </td>

         </tr>

         <tr>

           <td class="tablea">


           <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

           <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

           <b>Lieblingsmusik</b>

           </td>

         </tr>

         <tr>

           <td class="tableb">


           <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

           <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

           <b>Lieblingsfilm</b>

           </td>

         </tr>

         <tr>
 
           <td class="tablea">


           <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

           <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

           <b>Lieblingslocation</b>

           </td>

         </tr>

       </table>

       </td>

       <!-- Cell 4: Details Main -->

       <td>

       <table cellpadding="5" cellspacing="1" style="width:100%;" class="tableinborder">

          <tr>

            <td class="tableb">


            <?php  if($row_user["hobbys"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["hobbys"].""; } ?>

            <? if($row_user["hobbys"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["hobbys"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tablea">


            <?php  if($row_user["misc"] == "")  { echo"keine Angabe"; } else {  echo"".$row_user["misc"].""; } ?>

            <? if($row_user["misc"] == "")  { echo"keine Angabe"; } else {  echo"".$row_user["misc"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tableb">


            <?php  if($row_user["favorite_food"] == "")  { echo"keine Angabe"; } else {  echo"".$row_user["favorite_food"].""; } ?>

            <? if($row_user["favorite_food"] == "")  { echo"keine Angabe"; } else {  echo"".$row_user["favorite_food"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tablea">


            <?php  if($row_user["favorite_drink"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["favorite_drink"].""; } ?>

            <? if($row_user["favorite_drink"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["favorite_drink"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tableb">


            <?php  if($row_user["favorite_music"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["favorite_music"].""; } ?>

            <? if($row_user["favorite_music"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["favorite_music"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tablea">


            <?php  if($row_user["favorite_movie"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["favorite_movie"].""; } ?>

            <? if($row_user["favorite_movie"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["favorite_movie"].""; } ?>


            </td>

          </tr>

          <tr>

            <td class="tableb">


            <?php  if($row_user["favorite_location"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["favorite_location"].""; } ?>

            <? if($row_user["favorite_location"] == "")  { echo"keine Angabe"; } else { echo"".$row_user["favorite_location"].""; } ?>

 
            </td>

          </tr>

        </table>

        </td>

      </tr>

    </table>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td class="tablea" align="center">

    &nbsp;


    <img src="images/templates/<?php  echo"$template"; ?>/user_online.gif">

    &nbsp;

    <a href="index.php?page=write_email&user_id=<?php  echo"$post_user_id"; ?>"><img title="Email schreiben" src="images/templates/<?php  echo"$template"; ?>/icon_email.gif" border="0"></a>
   
    &nbsp;
           
    <a href="index.php?page=write_email&user_id=<?php  echo"$post_user_id"; ?>"><img title="PN schreiben" src="images/templates/<?php  echo"$template"; ?>/icon_pm.gif" border="0"></a>
       
    &nbsp;
         
    <a href="http://$hp" target="_blank"><img src="images/templates/<?php  echo"$template"; ?>/icon_www.gif" title="Homepage von $usern anschauen" border="0"></a>
         
    &nbsp;           
          
    <a href="index.php?page=user_pm&user_id=<?php  echo"$post_user_id"; ?>"><img src="images/templates/<?php  echo"$template"; ?>/icon_search.gif" title="Beitr�ge suchen" border="0"></a>
          
    &nbsp;           
         
    <a href="index.php?page=user_pm&user_id=<?php  echo"$post_user_id"; ?>"><img src="images/templates/<?php  echo"$template"; ?>/icon_homie.gif" title="Freundesliste" border="0"></a>

    <img src="images/templates/<? echo"$template"; ?>/user_online.gif">

    &nbsp;

    <a href="index.php?page=write_email&user_id=<? echo"$post_user_id"; ?>"><img title="Email schreiben" src="images/templates/<? echo"$template"; ?>/icon_email.gif" border="0"></a>
   
    &nbsp;
           
    <a href="index.php?page=write_email&user_id=<? echo"$post_user_id"; ?>"><img title="PN schreiben" src="images/templates/<? echo"$template"; ?>/icon_pm.gif" border="0"></a>
       
    &nbsp;
         
    <a href="http://$hp" target="_blank"><img src="images/templates/<? echo"$template"; ?>/icon_www.gif" title="Homepage von $usern anschauen" border="0"></a>
         
    &nbsp;           
          
    <a href="index.php?page=user_pm&user_id=<? echo"$post_user_id"; ?>"><img src="images/templates/<? echo"$template"; ?>/icon_search.gif" title="Beitr�ge suchen" border="0"></a>
          
    &nbsp;           
         
    <a href="index.php?page=user_pm&user_id=<? echo"$post_user_id"; ?>"><img src="images/templates/<? echo"$template"; ?>/icon_homie.gif" title="Freundesliste" border="0"></a>


    </td>

  </tr>

</table>