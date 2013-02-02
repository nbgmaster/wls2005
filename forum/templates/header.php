
<table  cellspacing="0" cellpadding="0" width="<?php  echo"$width3"; ?>">

<table  cellspacing="0" cellpadding="0" width="<? echo"$width3"; ?>">


 <tr>

  <td align="center">


  <?php  

  if ($header_titles == "1")  {  ?>

  <table cellpadding="4" cellspacing="1" border="0" class="tableinborder" width="100%">
   
    <tr>
    
      <td class="tablea" align="center">


      <b><font class="big"><?php  echo"$board_title"; ?></font></b>

      <b><font class="big"><? echo"$board_title"; ?></font></b>


      </td> 

      <td class="tableb" align="right">


      <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> <?php  echo"$board_description"; ?>

      <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> <? echo"$board_description"; ?>


      </td>

   </tr>
  
  </table>


  <?php  } 

  } 


  if ($banner == "1") { ?>

  <table cellpadding="0" cellspacing="0" border="0" width="100%">
   
    <tr>

          <td valign="top" align="center" class="banner">


          <img src="images/templates/<?php  echo"$template"; ?>/banner.jpg">

          <img src="images/templates/<? echo"$template"; ?>/banner.jpg">


          </td>

        </tr>

      </table>


  <table cellspacing="1" cellpadding="4" style="width:100%;" class="tableinborder">

    <tr>
 
    <td align="center" class="bgheader" width="12%">
    
    <a href="index.php" class="header">Start</b></font></a>

    </td>
         
    <td align="center" class="bgheader" width="11%">
    
    <a href="index.php?do=usercp" class="header">Profil</b></a>

    </td>
            
    <td align="center" class="bgheader" width="11%">
    
    <a href="index.php?do=members" class="header">Mitglieder</b></a>

    </td>
            
    <td align="center" class="bgheader" width="18%">
    
    <a href="index.php?do=inbox" class="header">Private Nachrichten</b></a>

    </td>
           
    <td align="center" class="bgheader" width="11%">
    
    <a href="index.php?do=search" class="header">Suche</b></a>

    </td>
            
    <td align="center" class="bgheader" width="11%">
    
    <a href="index.php?do=faq" class="header">FAQ</b></a>

    </td>

    <td align="center" class="bgheader" width="11%">
    
    <a href="index.php?do=team" class="header">Team</b></a>

    </td>


    <?php  if($userdata_id == "")   { ?>

    <? if($userdata_id == "")   { ?>


    <td align="center" class="bgheader" width="11%">
    
    <a href="index.php?do=register" class="header">Registrieren</b></a>

    </td>


    <?php  } else  {  ?>

    <? } else  {  ?>


    <td align="center" class="bgheader" width="11%">
    
    <a href="index.php?action=logout" class="header">Abmelden</b></a>

    </td>


    <?php  } ?>

    <? } ?>

           
    </tr>

  </table>


  <?php   }  ?>

  <br>

  <table width="<?php  echo"$width"; ?>" cellspacing="0" cellpadding="0">

  <?  }  ?>

  <br>

  <table width="<? echo"$width"; ?>" cellspacing="0" cellpadding="0">


    <tr>

      <td valign="top" align="center">
