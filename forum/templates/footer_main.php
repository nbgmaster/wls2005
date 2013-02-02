    <br>


    <table cellpadding="4" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">

    <table cellpadding="4" cellspacing="1" border="0" class="tableinborder" width="<? echo"$width"; ?>">

   
      <tr>
    
       <td class="cellbg" align="left"><b>Mitglieder in den letzten 5 Minuten online</b></td> 
   
     </tr>
   
     <tr>
   
       <td class="tableb">

       <table>

         <tr>

           <td width="40">


           &nbsp;<img src="images/templates/<?php  echo"$template"; ?>/footer_members.gif">

           &nbsp;<img src="images/templates/<? echo"$template"; ?>/footer_members.gif">

   
           </td>

           <td valign="top">
               
          <table>

            <tr>

               <td>


               Zur Zeit sind <b><?php  echo"$online_members"; ?></b>

               <?php  if($online_members == "1") { echo" Mitglied"; } else { echo" Mitglieder"; } ?>

               <?php  echo"(<b>$ghost_members</b>"; if($ghost_members == "1") { echo" Geist)"; } else { echo" Geister)"; } ?>

               <?php  echo"und <b>$no_members</b>"; if($no_members == "1") { echo" Gast"; } else { echo" Gäste"; } ?>

               Zur Zeit sind <b><? echo"$online_members"; ?></b>

               <? if($online_members == "1") { echo" Mitglied"; } else { echo" Mitglieder"; } ?>

               <? echo"(<b>$ghost_members</b>"; if($ghost_members == "1") { echo" Geist)"; } else { echo" Geister)"; } ?>

               <? echo"und <b>$no_members</b>"; if($no_members == "1") { echo" Gast"; } else { echo" Gäste"; } ?>


               im Forum unterwegs. 

               </td>

             </tr>


             <?php   


             $t = "0";

             if ($s != "0")  {

             ?>
                  
             <tr>
 
               <td>


               <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> Mitglieder: 

               <?php 

               <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> Mitglieder: 

               <?


               foreach ($members_online_names as $read_out)  {

                        $t = $t + 1;
  
                        echo"$read_out";

                        if($t != $s)  { echo", "; }

                }

                ?>          

                </td>

             </tr>


             <?php   }   ?>

             <?  }   ?>

  
           </table>
         
           </td>

         </tr>
  
        </table>

        </td>

      </tr>

    </table>

    <br>


    <table cellpadding="4" cellspacing="1" border="0" class="tableinborder" width="<?php  echo"$width"; ?>">

    <table cellpadding="4" cellspacing="1" border="0" class="tableinborder" width="<? echo"$width"; ?>">

   
      <tr>
    
        <td class="cellbg" align="left"><b>Statistik</b></td> 
   
     </tr>
      
     <tr>
   
       <td class="tableb">

       <table>

         <tr>

           <td width="40">


           &nbsp;<img src="images/templates/<?php  echo"$template"; ?>/footer_stats.gif">

           &nbsp;<img src="images/templates/<? echo"$template"; ?>/footer_stats.gif">

   
           </td>

           <td valign="top">


           Besucher-Rekord: <?php  echo"$visiter_record_numbers"; ?> Besucher am <?php  echo"$visiter_record_time"; ?> Uhr.

           <br>
         
           Mitglieder: <b><?php  echo"$membernumbers"; ?></b> |

           Themen: <b><?php  echo"$threadnumbers"; ?></b> | 
   
           Beiträge: <b><?php  echo"$postnumbers"; ?></b> (durchschnittlich <?php  echo"$postsperday"; ?> Beiträge/Tag)

           <br>

           Unser neuestes Mitglied heißt: <b><?php  echo"$newest_user_name"; ?></b>.

           Besucher-Rekord: <? echo"$visiter_record_numbers"; ?> Besucher am <? echo"$visiter_record_time"; ?> Uhr.

           <br>
         
           Mitglieder: <b><? echo"$membernumbers"; ?></b> |

           Themen: <b><? echo"$threadnumbers"; ?></b> | 
   
           Beiträge: <b><? echo"$postnumbers"; ?></b> (durchschnittlich <? echo"$postsperday"; ?> Beiträge/Tag)

           <br>

           Unser neuestes Mitglied heißt: <b><? echo"$newest_user_name"; ?></b>.


           </td>

         </tr>
  
       </table>   

       </td>

     </tr>
  
    </table>