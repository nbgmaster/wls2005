<script type="text/javascript" src="javascript/admin/edit_forum.js" language="JavaScript1.2"></script>


<form name="admin_form" action="index.php?do=admin&sec=edit_cat&module=change" method="post" onsubmit="return check_admin()">


<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

         <td class="tablea" width="50%">
 
         <b>Forumtitel</b>

         </td>

         <td  class="tablea" width="50%">

<<<<<<< HEAD
         <input class="input" type="text" name="forum" value="<?php  echo"".$row_forum["forum"].""; ?>" maxlength="40" size="40">
=======
         <input class="input" type="text" name="forum" value="<? echo"".$row_forum["forum"].""; ?>" maxlength="40" size="40">
>>>>>>> af2fff1... version1

         </td>

      </tr>

      <tr>

         <td class="tablea" width="50%">
 
         <b>Beschreibung</b>

         </td>

         <td  class="tablea" width="50%">

<<<<<<< HEAD
         <textarea style="width:100%; height:100px;" name="description"><?php  echo"".$row_forum["description"].""; ?></textarea>
=======
         <textarea style="width:100%; height:100px;" name="description"><? echo"".$row_forum["description"].""; ?></textarea>
>>>>>>> af2fff1... version1

         </td>

      </tr>

      <tr>

         <td class="tablea" width="50%">
 
         <b>Kategorie</b>

         </td>

         <td  class="tablea" width="50%">

         <select name="f_cat" style="width:120px;">

<<<<<<< HEAD
         <?php 
=======
         <?
>>>>>>> af2fff1... version1

           $query_c = mysql_query("SELECT * from $c_tblname");

           while ($row_c = mysql_fetch_assoc($query_c))  { ?>

<<<<<<< HEAD
                  <option value="<?php  echo"".$row_c[id].""; ?>"

                  <?php  if($row_c[id] == $row_forum[cat])  { ?>

                        selected

                  <?php  } ?>

                  >

                  <?php  echo"".$row_c["title"].""; ?>

                  </option>
 
           <?php  } 
=======
                  <option value="<? echo"".$row_c[id].""; ?>"

                  <? if($row_c[id] == $row_forum[cat])  { ?>

                        selected

                  <? } ?>

                  >

                  <? echo"".$row_c["title"].""; ?>

                  </option>
 
           <? } 
>>>>>>> af2fff1... version1

         ?>

         </select>
    
         </td>

      </tr>

      <tr>

         <td class="tablea" width="50%">
 
         <b>Forum Status</b>

         </td>

         <td  class="tablea" width="50%">

         <select name="f_status" style="width:120px;">

<<<<<<< HEAD
         <?php  
=======
         <? 
>>>>>>> af2fff1... version1

           $query_f = mysql_query("SELECT * from $f_tblname WHERE id='$f'");

           while ($row_f = mysql_fetch_assoc($query_f))  { 

                  if ($row_f[status] == "1")  { ?>

                      <option value="1" selected>offen</option>
                      <option value="0">geschlossen</option>

<<<<<<< HEAD
                  <?php  } else { ?>
=======
                  <? } else { ?>
>>>>>>> af2fff1... version1

                      <option value="1">offen</option>
                      <option value="0" selected>geschlossen</option>

<<<<<<< HEAD
                  <?php  } 
=======
                  <? } 
>>>>>>> af2fff1... version1

           }

         ?>

         </select>

         </td>

      </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>User Rechte:: Lesen</b>

         </td>

         <td  class="tablea" width="50%">

         <select name="f_read" style="width:120px;">

<<<<<<< HEAD
         <?php  
=======
         <? 
>>>>>>> af2fff1... version1

           $query_read = mysql_query("SELECT * from $f_tblname WHERE id='$f'");

           while ($row_read = mysql_fetch_assoc($query_read))  { 

                  echo"<option value=\"all\"";

                  if ($row_read[f_read] == "all")  { echo"selected"; }

                  echo">Alle</option>";

                  echo"<option value=\"reg\"";

                  if ($row_read[f_read] == "reg")  { echo"selected"; }

                  echo">nur registrierte User</option>";

                  echo"<option value=\"mod\"";

                  if ($row_read[f_read] == "mod")  { echo"selected"; }

                  echo">nur Moderatoren</option>";

                  echo"<option value=\"admin\"";

                  if ($row_read[f_read] == "admin")  { echo"selected"; }

                  echo">nur Admins</option>";

           }

         ?>

         </select>

         </td>

      </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>User Rechte:: Schreiben</b>

         </td>

         <td  class="tablea" width="50%">

         <select name="f_write" style="width:120px;">

<<<<<<< HEAD
         <?php  
=======
         <? 
>>>>>>> af2fff1... version1

           $query_write = mysql_query("SELECT * from $f_tblname WHERE id='$f'");

           while ($row_write = mysql_fetch_assoc($query_write))  { 

                  echo"<option value=\"all\"";

                  if ($row_write[f_write] == "all")  { echo"selected"; }

                  echo">Alle</option>";

                  echo"<option value=\"reg\"";

                  if ($row_write[f_write] == "reg")  { echo"selected"; }

                  echo">nur registrierte User</option>";

                  echo"<option value=\"mod\"";

                  if ($row_write[f_write] == "mod")  { echo"selected"; }

                  echo">nur Moderatoren</option>";

                  echo"<option value=\"admin\"";

                  if ($row_write[f_write] == "admin")  { echo"selected"; }

                  echo">nur Admins</option>";

           }

         ?>

         </select>

         </td>

      </tr>

     <tr>

         <td class="tablea" width="50%">
 
         <b>Moderatoren</b>

         </td>

         <td  class="tablea" width="50%">


    <select name="modids[]" style="width:200px;" size="6" multiple="multiple">

<<<<<<< HEAD
    <?php 
=======
    <?
>>>>>>> af2fff1... version1

          $query_users = mysql_query("SELECT * from $user_tblname ORDER by UserName");

          while ($row_users = mysql_fetch_assoc($query_users))  {  
  
                 echo"<option value=\"".$row_users[UserID]."\"";

                 $query_modtbl = mysql_query("SELECT * from $moderator_tblname");
     
                 while ($row_modtbl = mysql_fetch_assoc($query_modtbl))  { 

                        if ($row_modtbl[user_id] == $row_users[UserID] && $row_modtbl[f_id] == $f)  {
            
                            echo"selected";

                        }

                 }
 
                 echo">";

                 echo"".$row_users["UserName"]."</option>";

          }

    ?>

    </select>

         </td>

      </tr>

   </table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

       <td align="center" class="tableb">

<<<<<<< HEAD
       <input class="input" type="hidden" value="<?php  echo"".$row_forum["cat"].""; ?>" name="actual_cat">
       <input class="input" type="hidden" value="<?php  echo"".$row_forum["position"].""; ?>" name="actual_position">
       <input class="input" type="hidden" value="<?php  echo"$f"; ?>" name="f">
=======
       <input class="input" type="hidden" value="<? echo"".$row_forum["cat"].""; ?>" name="actual_cat">
       <input class="input" type="hidden" value="<? echo"".$row_forum["position"].""; ?>" name="actual_position">
       <input class="input" type="hidden" value="<? echo"$f"; ?>" name="f">
>>>>>>> af2fff1... version1

       <input class="input" type="submit" name="send_admin_data" value="Forum �ndern">

       </td>

     </tr>

  </form>

</table>

