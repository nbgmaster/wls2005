<br>


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td align="center" class="catbg">

    <table cellspacing="0" cellpadding="0">

      <tr>


        <?php  if ($c == "")  { ?>

        <td>
        <?php  if ($hidecat_var != "1")  { ?> 
        <a href="index.php?hidecat=<?php  echo"".$row_cats["id"].""; ?>">
        <img src="images/collapse.gif" border="0">
        <?php  } else { ?>
        <a href="index.php?showcat=<?php  echo"".$row_cats["id"].""; ?>">
        <img src="images/expand.gif" border="0">
        <?php  } ?>
        </a>
        </td>

        <?php  } ?>

        <td>
        <a href="index.php?c=<?php  echo"".$row_cats["id"].""; ?>" class="catbg">
        <?php  echo"".$row_cats["title"].""; ?> 

        <? if ($c == "")  { ?>

        <td>
        <? if ($hidecat_var != "1")  { ?> 
        <a href="index.php?hidecat=<? echo"".$row_cats["id"].""; ?>">
        <img src="images/collapse.gif" border="0">
        <? } else { ?>
        <a href="index.php?showcat=<? echo"".$row_cats["id"].""; ?>">
        <img src="images/expand.gif" border="0">
        <? } ?>
        </a>
        </td>

        <? } ?>

        <td>
        <a href="index.php?c=<? echo"".$row_cats["id"].""; ?>" class="catbg">
        <? echo"".$row_cats["title"].""; ?> 

        </a>
        </td>

       </tr>

    </table>

    </a>

    </td>

  </tr>

</table>