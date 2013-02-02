<<<<<<< HEAD
<?php  if ($userdata_admin != "1")  { ?>

<?php  } if ($c != "")  { ?>

<form action="index.php?c=<?php  echo"$c"; ?>" method="post">
    
<?php  } if ($f != "")  { ?>

<form action="index.php?f=<?php  echo"$f"; ?>" method="post"> 
   
<?php  } if ($row_posts["id"] != "")  { ?>

<form action="index.php?f=<?php  echo"$f"; ?>" method="post">

<?php  } ?>
=======
<? if ($userdata_admin != "1")  { ?>

<? } if ($c != "")  { ?>

<form action="index.php?c=<? echo"$c"; ?>" method="post">
    
<? } if ($f != "")  { ?>

<form action="index.php?f=<? echo"$f"; ?>" method="post"> 
   
<? } if ($row_posts["id"] != "")  { ?>

<form action="index.php?f=<? echo"$f"; ?>" method="post">

<? } ?>
>>>>>>> af2fff1... version1

<table cellpadding="0" cellspacing="1">

  <tr>

    <td align="right">

    <table style="width:100%;">

      <tr>

        <td align="right"><b>Gehe zu:</b>&nbsp;

        <select ONCHANGE="location = this.options[this.selectedIndex].value;">

<<<<<<< HEAD
        <?php 
=======
        <?
>>>>>>> af2fff1... version1
 
          $query_cats = mysql_query("SELECT * from $c_tblname ORDER by id");

          while ($row_cats = mysql_fetch_assoc($query_cats))  {  

                 echo"<option style=\"font-weight:bold;\" value=\"index.php?c=".$row_cats[id]."\"";

                 if ($row_cats[id] == $c)  { echo" selected"; }

                 echo"><b>".$row_cats["title"]."</b></option>";

                 $query_forums = mysql_query("SELECT * from $f_tblname WHERE cat = '$row_cats[id]' ORDER by id");
 
                 while ($row_forums = mysql_fetch_assoc($query_forums))  {
  
                        echo"<option value=\"index.php?f=".$row_forums[id]."\"";

                        if ($row_forums[id] == $f)  { echo" selected"; }

                        echo">--- ".$row_forums["forum"]."</option>";

                 }

          }

        ?>

        </select>


        </td>

        <td align="center" width="40">

<<<<<<< HEAD
        <input type="image" name="send_data" src="images/templates/<?php  echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">
=======
        <input type="image" name="send_data" src="images/templates/<? echo"$template"; ?>/icon_go.gif" style="background: transparent; border: 0px solid;">
>>>>>>> af2fff1... version1
    
        </td>

       </tr>

    </table>

    </td>

  </tr>

</form>

</table>


</td>

</tr>

</table>