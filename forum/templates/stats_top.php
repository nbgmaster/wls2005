<br>


    <table cellpadding="0" cellspacing="0" width="<?php  echo"$width"; ?>">

    <table cellpadding="0" cellspacing="0" width="<? echo"$width"; ?>">

         
     <tr>
   
       <td class="tablea" style="width:100%;">

       <table cellspacing="0" cellpadding="0" style="width:100%;">

         <tr>

           <td width="29%">


           <table cellpadding="4" cellspacing="1" class="tableinborder" style="width:100%;">

             <tr>

               <td class="cellbg">

               <table cellspacing="0" cellpadding="0" style="width:100%;">

                <tr>

                  <td>


                  <font color="#<?php  echo"$cellbg_fontcolor"; ?>"><b>Statistik: 5 neuesten Mitglieder</b></font>

                  <font color="#<? echo"$cellbg_fontcolor"; ?>"><b>Statistik: 5 neuesten Mitglieder</b></font>


                  </td>

                </tr>
  
               </table>

               </td>

            </tr>

            <tr>

              <td class="tablea">

             <table style="width:100%;" cellpadding="1" cellspacing="0">


             <?php   $query_newest_users = mysql_query("SELECT * from $user_tblname ORDER by UserRegdate DESC LIMIT 5");

             <?  $query_newest_users = mysql_query("SELECT * from $user_tblname ORDER by UserRegdate DESC LIMIT 5");


                 while ($row_newest_users = mysql_fetch_assoc($query_newest_users))  {  ?>   

             <tr>

              <td> 


              <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

              <a href="index.php?do=profile&user_id=<?php  echo"$row_newest_users[UserID]"; ?>">

              <?php  echo"$row_newest_users[UserName]"; ?></a>

              <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

              <a href="index.php?do=profile&user_id=<? echo"$row_newest_users[UserID]"; ?>">

              <? echo"$row_newest_users[UserName]"; ?></a>


              </td>

            </tr> 


            <?php  } ?>

            <? } ?>


          </table>

          </td>

        </tr>
  
     </table>

     </td>

     <td width="1%">&nbsp;</td>

     <td width="70%">

     <table cellpadding="4" cellspacing="1" class="tableinborder" style="width:100%;">

       <tr>

         <td class="cellbg">

         <table cellspacing="0" cellpadding="0" style="width:100%;">

           <tr>

             <td>


             <font color="#<?php  echo"$cellbg_fontcolor"; ?>"><b>Statistik: 5 neuesten Beiträge</b></font>

             </td>

             <td width="110" align="left"><font color="#<?php  echo"$cellbg_fontcolor"; ?>"><b>Verfasser</b></font></td>

             <td width="90" align="left"><font color="#<?php  echo"$cellbg_fontcolor"; ?>"><b>vor...</b></font></td>

             <td width="25" align="right"><font color="#<?php  echo"$cellbg_fontcolor"; ?>"><b>Hits</b></font></td>

             <font color="#<? echo"$cellbg_fontcolor"; ?>"><b>Statistik: 5 neuesten Beiträge</b></font>

             </td>

             <td width="110" align="left"><font color="#<? echo"$cellbg_fontcolor"; ?>"><b>Verfasser</b></font></td>

             <td width="90" align="left"><font color="#<? echo"$cellbg_fontcolor"; ?>"><b>vor...</b></font></td>

             <td width="25" align="right"><font color="#<? echo"$cellbg_fontcolor"; ?>"><b>Hits</b></font></td>


           </tr>

         </table>
 
         </td>

      </tr> 

    </table>   


    <table cellpadding="4" cellspacing="0" style="width:100%;border:1px solid #<?php  echo"$bordercolor"; ?>;border-top:0px solid;">

    <table cellpadding="4" cellspacing="0" style="width:100%;border:1px solid #<? echo"$bordercolor"; ?>;border-top:0px solid;">


      <tr>

        <td class="tablea">

        <table style="width:100%;" cellpadding="1" cellspacing="0">

