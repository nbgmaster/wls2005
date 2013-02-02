<form action="index.php?do=search" method="post">

<<<<<<< HEAD
<table cellspacing="1" cellpadding="0" width="<?php  echo"$width"; ?>" class="tableinborder">
=======
<table cellspacing="1" cellpadding="0" width="<? echo"$width"; ?>" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="tableb" align="center" width="50%">

    <table cellpadding="6" cellspacing="0">
     
     <tr>

       <td>

       <b>Suche nach Schlüsselwort:</b> <input type="text" name="searchword">

       </td>

      </tr>

    </table>

    </td>

    <td class="tablea" align="center" width="50%">

    <b>Suche nach Benutzernamen:</b> <input type="text" name="searchmember">

    </td>

  </tr>

</table>

<br>

<<<<<<< HEAD
<table cellspacing="0" cellpadding="0" width="<?php  echo"$width"; ?>" class="tableinborder">
=======
<table cellspacing="0" cellpadding="0" width="<? echo"$width"; ?>" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="tablea" align="center" width="50%">

    <select name="boardids[]" style="width:100%;height:200px;" multiple="multiple">

    <option value="*" selected="selected">Suche in allen Foren</option>
    <option value="-1">--------------------</option>

<<<<<<< HEAD
    <?php 
=======
    <?
>>>>>>> af2fff1... version1

          $query_cats = mysql_query("SELECT * from $c_tblname ORDER by position");

          while ($row_cats = mysql_fetch_assoc($query_cats))  {  

                 echo"<option style=\"font-weight:bold;\" value=\"c".$row_cats[id]."\"";

                 if ($row_cats[id] == $c)  { echo" selected"; }

                 echo"><b>".$row_cats["title"]."</b></option>";

                 $query_forums = mysql_query("SELECT * from $f_tblname WHERE cat = '$row_cats[id]' ORDER by position");
 
                 while ($row_forums = mysql_fetch_assoc($query_forums))  {
  
                        echo"<option value=\"".$row_forums[id]."\"";

                        if ($row_forums[id] == $f)  { echo" selected"; }

                        echo">--- ".$row_forums["forum"]."</option>";

                 }

          }

    ?>

    </select>

    </td>

    <td valign="top" align="center" style="height:100%;">

    <table style="width:100%;height:100%;" cellpadding="0" cellspacing="1" class="tableinborder">
     
      <tr>

        <td class="tableb" align="center">

        <b>Suchmodus</b>

        </td>

      </tr>
   
      <tr>

        <td class="tablea" align="center">

        <input type="radio" name="fullpost" value="1" checked="checked">ganzen Beitrag <input type="radio" name="fullpost" value="0">nur Betreff durchsuchen

        </td>

      </tr>

      <tr>

        <td class="tableb" align="center">

        <b>Anzeigemodus</b>

        </td>

      </tr>
    
      <tr>

        <td class="tablea" align="center">

        <input type="radio" name="showposts" value="1" checked="checked">als Beiträge <input type="radio" name="showposts" value="0">als Themen anzeigen

        </td>
   
      </tr>
  
      <tr>

        <td class="tableb" align="center">

         <b>Sortierungsmodus</b>

         </td>

       </tr>

       <tr>
 
         <td class="tablea" align="center">

         <select name="sortby">

         <option value="lastpost">letztem Beitrag</option>

         </select>

         <input type="radio" name="sortorder" value="up">in aufsteigender 
         <input type="radio" name="sortorder" value="down" checked="checked">absteigender Reihenfolge

         </td>

        </tr>

       </table>

       </td>

      </tr>

     </table>

<br>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="6" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td class="tablea" align="center">

    <input type="submit" class="input" value="Suche starten">

    </td>

  </tr>

</form>

</table>