
<?php  if ($friendnumbers == "0")  { echo"</td></tr></table><br>Du hast noch keine Benutzer eingetragen."; } ?>

<? if ($friendnumbers == "0")  { echo"</td></tr></table><br>Du hast noch keine Benutzer eingetragen."; } ?>


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


      <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif">

      <b>Benutzer hinzufügen:</b> 
      <input type="hidden" name="buddyfunction" value="<?php  echo"$this_function"; ?>">

      <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif">

      <b>Benutzer hinzufügen:</b> 
      <input type="hidden" name="buddyfunction" value="<? echo"$this_function"; ?>">

      <input type="text" name="buddyname" size="30">&nbsp;<input type="submit" value="Hinzufügen">
     
      <font class="small">

      <br><br>


      <?php  if ($sec == "buddylist")  { ?>

      <? if ($sec == "buddylist")  { ?>


      Geben Sie hier den Namen eines Benutzers ein, der Ihrer Freundesliste hinzugefügt werden soll.
      <br>
      Alternativ können Sie den gewünschten Benutzer auch über die <a href="index.php?do=members">Mitgliederliste</a> suchen und hinzufügen.


      <?php  } if ($sec == "ignorelist")  { ?>

      <? } if ($sec == "ignorelist")  { ?>


      Geben Sie hier den Namen eines Benutzers ein, der Ihrer Ignorier-Liste hinzugefügt werden soll. 
      <br>
      Der User kann Ihnen dann keine privaten Nachrichten mehr schreiben.


      <?php  } ?>

      <? } ?>


      </font>

      </td>

    </tr>

  </table>

  </form>

  </td>

 </tr>

</table>