<<<<<<< HEAD
<?php  if ($friendnumbers == "0")  { echo"</td></tr></table><br>Du hast noch keine Benutzer eingetragen."; } ?>
=======
<? if ($friendnumbers == "0")  { echo"</td></tr></table><br>Du hast noch keine Benutzer eingetragen."; } ?>
>>>>>>> af2fff1... version1

      </td>

    </tr>

  </table>

  </td>

  <td>&nbsp;</td>

  <td valign="top">

  <form action="index.php?do=addbuddy" method="post">

  <table cellpadding="4" cellspacing="1" class="tableinborder" width="100%">
 
    <tr>

      <td class="tableb"> 

<<<<<<< HEAD
      <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

      <b>Benutzer hinzuf�gen:</b> 
      <input type="hidden" name="buddyfunction" value="<?php  echo"$this_function"; ?>">
=======
      <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

      <b>Benutzer hinzuf�gen:</b> 
      <input type="hidden" name="buddyfunction" value="<? echo"$this_function"; ?>">
>>>>>>> af2fff1... version1
      <input type="text" name="buddyname" size="30">&nbsp;<input type="submit" value="Hinzuf�gen">
     
      <font class="small">

      <br><br>

<<<<<<< HEAD
      <?php  if ($sec == "buddylist")  { ?>
=======
      <? if ($sec == "buddylist")  { ?>
>>>>>>> af2fff1... version1

      Geben Sie hier den Namen eines Benutzers ein, der Ihrer Freundesliste hinzugef�gt werden soll.
      <br>
      Alternativ k�nnen Sie den gew�nschten Benutzer auch �ber die <a href="index.php?do=members">Mitgliederliste</a> suchen und hinzuf�gen.

<<<<<<< HEAD
      <?php  } if ($sec == "ignorelist")  { ?>
=======
      <? } if ($sec == "ignorelist")  { ?>
>>>>>>> af2fff1... version1

      Geben Sie hier den Namen eines Benutzers ein, der Ihrer Ignorier-Liste hinzugef�gt werden soll. 
      <br>
      Der User kann Ihnen dann keine privaten Nachrichten mehr schreiben.

<<<<<<< HEAD
      <?php  } ?>
=======
      <? } ?>
>>>>>>> af2fff1... version1

      </font>

      </td>

    </tr>

  </table>

  </form>

  </td>

 </tr>

</table>