<form method="post" action="index.php?do=post">


<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

               
  <tr>

     <td class="tablea" align="center">

     <br>


     <img src="images/templates/<?php  echo"$template/arrow_r.gif"; ?>">

     <b>Sie können nun ihre Umfrage zu dem Thema "<?php  echo"$title"; ?>" hinzufügen</b>

     <img src="images/templates/<? echo"$template/arrow_r.gif"; ?>">

     <b>Sie können nun ihre Umfrage zu dem Thema "<? echo"$title"; ?>" hinzufügen</b>


     <br><br>

     <table cellspacing="1" cellpadding="4" class="tableinborder" width="100%">

       <tr>

         <td class="tablea" width="30%"><b>Frage:</b></td>

         <td class="tableb" width="70%"> <input type="text" name="poll_question" size="80"> </td>

         </tr><tr>

         <td class="tablea"><b>Antwort 1:</b></td>

         <td class="tableb"> <input type="text" name="poll_data1" size="40"> </td>

         </tr><tr>

         <td class="tablea"><b>Antwort 2:</b></td>

         <td class="tableb"> <input type="text" name="poll_data2" size="40"> </td>

         </tr><tr>

         <td class="tablea"><b>Antwort 3:</b></td>

         <td class="tableb"> <input type="text" name="poll_data3" size="40"> </td>

         </tr><tr>

         <td class="tablea"><b>Antwort 4:</b></td>

         <td class="tableb"> <input type="text" name="poll_data4" size="40"> </td>

         </tr><tr>

         <td class="tablea"><b>Antwort 5:</b></td>

         <td class="tableb"> <input type="text" name="poll_data5" size="40"> </td>

         </tr><tr>

         <td class="tablea"><b>Antwort 6:</b></td>

         <td class="tableb"> <input type="text" name="poll_data6" size="40"> </td>

       </tr>

     </table>

     <br>


     <input type="hidden" name="title" value="<?php  echo"$title"; ?>">
     <input type="hidden" name="message" value="<?php  echo"$message"; ?>">
     <input type="hidden" name="f" value="<?php  echo"$f"; ?>">
     <input type="hidden" name="attachment" value="<?php  echo"$attachment"; ?>">

     <input type="hidden" name="title" value="<? echo"$title"; ?>">
     <input type="hidden" name="message" value="<? echo"$message"; ?>">
     <input type="hidden" name="f" value="<? echo"$f"; ?>">
     <input type="hidden" name="attachment" value="<? echo"$attachment"; ?>">


     <input type="submit" value="Umfrage starten"> 

     <br><br>

     </td>

   </tr>

</form>

</table>
