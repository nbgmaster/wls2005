
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

    <td class="tablea" align="center">
    <b>Nickname</b>
    </td>


    <?php  if ($do != "admin")  { ?>

    <? if ($do != "admin")  { ?>


    <td class="tableb" align="center" width="100">
    <b>Email</b>
    </td>

    <td class="tablea" align="center" width="100"">
    <b>Homepage</b>
    </td>

    <td class="tableb" align="center" width="100">
    <b>Suchen</b>
    </td>

    <td class="tablea" align="center" width="100">
    <b>PN</b>
    </td>

    <td class="tableb" align="center" width="100">
    <b>Homie
    </td>

    <td class="tablea" align="center" width="120">


    <?php  } else { ?>

    <td class="tableb" align="center" width="120">

    <?php  } ?>

    <? } else { ?>

    <td class="tableb" align="center" width="120">

    <? } ?>


    <b>Registrierung
    </td>


    <?php  if ($do != "admin")  { ?>

    <td class="tableb" align="center" width="70">

    <?php  } else { ?>

    <td class="tablea" align="center" width="70">

    <?php  } ?>

    <? if ($do != "admin")  { ?>

    <td class="tableb" align="center" width="70">

    <? } else { ?>

    <td class="tablea" align="center" width="70">

    <? } ?>

    <b>Beiträge
    </td>

  </tr>