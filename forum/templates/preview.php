
<?php 

  $_POST[message] = str_replace("[PHP]", "[PHP]<?php ", $_POST[message]);

<?

  $_POST[message] = str_replace("[PHP]", "[PHP]<?", $_POST[message]);

  $_POST[message] = str_replace("[/PHP]", "?>[/PHP]", $_POST[message]);

  include("replace/bbcode_php_function.php");


  $str = trim($_POST[message]);

  include("./replace/show_posts.php");
  include("./replace/smilies.php");

  $main_message  = $str;

?>


  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

       <td align="center" class="cellbg" bgcolor="<?php  echo"#$cell_bg02"; ?>">

       <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <b>Vorschau</b>

  <table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
               
    <tr>

       <td align="center" class="cellbg" bgcolor="<? echo"#$cell_bg02"; ?>">

       <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <b>Vorschau</b>

  
       </td>

    </tr>

  </table>


  <table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
    <tr>

        <td class="tableb">

        <span class="post">


        <?php  echo"$main_message"; ?>

        <? echo"$main_message"; ?>


        </span>

        </td>

     </tr>

  </table>
<br>