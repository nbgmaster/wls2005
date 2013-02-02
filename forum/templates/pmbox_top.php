
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td class="tableb" width="25" align="center">
    &nbsp;
    </td>

    <td class="tablea">
    <b>Betreff</b>
    </td>

    <td class="tableb" width="110" align="center">
    <b>

    <?php  if($do == "inbox") { echo"von"; } else { echo"an"; } ?>

    <? if($do == "inbox") { echo"von"; } else { echo"an"; } ?>

    </b>
    </td>

    <td class="tablea" width="140" align="center">

    <b><?php  echo"$pmbox6"; ?> am</b>

    <b><? echo"$pmbox6"; ?> am</b>

    </td>

    <td class="tableb" width="50" align="center">
    <b>löschen</b>
    </td>

  </tr>