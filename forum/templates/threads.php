  <tr>

    <td align="center" class="tablea">


    <img src="images/templates/<?php  echo"$template/$img_newposts"; ?>">

    </td>

    <?php  if ($highlight != "" && $highlightuser == "")  { ?>

    <td class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"]."&highlight=$highlight"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($highlight == "" && $highlightuser != "")  { ?>

    <td class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"]."&highlightuser=$highlightuser"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($highlight != "" && $highlightuser != "")  { ?>

    <td class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"]."&highlight=$highlight&highlightuser=$highlightuser"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } if ($highlight == "" && $highlightuser == "")  { ?>

    <td class="tableb" onclick="location.href='index.php?t=<?php  echo"".$row_threads["id"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <?php  } ?>

    <b><?php  echo"".$row_threads["threadname"].""; ?></b>

    <img src="images/templates/<? echo"$template/$img_newposts"; ?>">

    </td>

    <? if ($highlight != "" && $highlightuser == "")  { ?>

    <td class="tableb" onclick="location.href='index.php?t=<? echo"".$row_threads["id"]."&highlight=$highlight"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <? } if ($highlight == "" && $highlightuser != "")  { ?>

    <td class="tableb" onclick="location.href='index.php?t=<? echo"".$row_threads["id"]."&highlightuser=$highlightuser"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <? } if ($highlight != "" && $highlightuser != "")  { ?>

    <td class="tableb" onclick="location.href='index.php?t=<? echo"".$row_threads["id"]."&highlight=$highlight&highlightuser=$highlightuser"; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <? } if ($highlight == "" && $highlightuser == "")  { ?>

    <td class="tableb" onclick="location.href='index.php?t=<? echo"".$row_threads["id"].""; ?>'" onmouseover="this.className='mouseover';" onmouseout="this.className='mouseout';">

    <? } ?>

    <b><? echo"".$row_threads["threadname"].""; ?></b>

 
    </td>
 
    <td class="tablea" align="center">


    <a href="index.php?do=profile&user_id=<?php  echo"$thread_author_id"; ?>"><?php  echo"$thread_author_name"; ?></a>

    <a href="index.php?do=profile&user_id=<? echo"$thread_author_id"; ?>"><? echo"$thread_author_name"; ?></a>


    </td>

    <td class="tableb" align="center">


    <?php  echo"$thread_answers2"; ?>

    <? echo"$thread_answers2"; ?>


    </td>

    <td class="tablea" align="center">


    <?php  echo"".$row_threads["hits"].""; ?>

    <? echo"".$row_threads["hits"].""; ?>


    </td>

    <td align="center" class="tableb">


    <?php  if ($last_post_user_id != "0")  { ?>

    <a href="index.php?do=profile&user_id=<?php  echo"$last_post_user_id"; ?>">

    <?php  } ?>

    <b><?php  echo"$last_post_username"; ?></b>

    <?php  if ($last_post_user_id != "0")  { ?> </a> <?php  } ?>

    <br> am <?php  echo"$last_post_date, $last_post_time2"; ?>

    <a href="index.php?t=<?php  echo"".$row_threads["id"]."$show_link"; ?>"><img src="images/templates/<?php  echo"$template"; ?>/last_reply.gif" border="0"></a>

    <? if ($last_post_user_id != "0")  { ?>

    <a href="index.php?do=profile&user_id=<? echo"$last_post_user_id"; ?>">

    <? } ?>

    <b><? echo"$last_post_username"; ?></b>

    <? if ($last_post_user_id != "0")  { ?> </a> <? } ?>

    <br> am <? echo"$last_post_date, $last_post_time2"; ?>

    <a href="index.php?t=<? echo"".$row_threads["id"]."$show_link"; ?>"><img src="images/templates/<? echo"$template"; ?>/last_reply.gif" border="0"></a>


    </td>

  </tr>