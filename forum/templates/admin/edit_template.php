<script language="JavaScript" type="text/javascript" src="./javascript/form_tpl.js"></script>


<<<<<<< HEAD
<form action="index.php?do=admin&sec=templates&module=modify&tpl=<?php  echo"$tpl_id"; ?>" name="tplform" onsubmit="return checkForm(this)"  method="post">


<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
=======
<form action="index.php?do=admin&sec=templates&module=modify&tpl=<? echo"$tpl_id"; ?>" name="tplform" onsubmit="return checkForm(this)"  method="post">


<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="cellbg" align="center">

    Allgemein 

    </td>

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td class="tableb" width="50%">Verzeichnis, in dem alle Template Bilder liegen müssen</td>

<<<<<<< HEAD
    <td class="tablea" width="50%"><?php  echo"http://$board_domain$board_direction"; ?>images/templates/<?php  echo"$template_name"; ?></td>
=======
    <td class="tablea" width="50%"><? echo"http://$board_domain$board_direction"; ?>images/templates/<? echo"$template_name"; ?></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Banner URL</td>

<<<<<<< HEAD
    <td class="tablea"><?php  echo"http://$board_domain$board_direction"; ?>images/templates/<?php  echo"$template_name"; ?>/banner.jpg</td>
=======
    <td class="tablea"><? echo"http://$board_domain$board_direction"; ?>images/templates/<? echo"$template_name"; ?>/banner.jpg</td>
>>>>>>> af2fff1... version1

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td class="tablea" align="center">

<<<<<<< HEAD
    <img src="images/templates/<?php  echo"$template"; ?>/arrow_r.gif"> 

    Für eine optimale Forumsansicht mit Banner sollte der Banner genau <b><?php  echo"$width4"; ?> Pixel breit</b> sein!
=======
    <img src="images/templates/<? echo"$template"; ?>/arrow_r.gif"> 

    Für eine optimale Forumsansicht mit Banner sollte der Banner genau <b><? echo"$width4"; ?> Pixel breit</b> sein!
>>>>>>> af2fff1... version1

    </td>

  </tr>

</table>



<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <?php  if($delete_tpl == "true") { ?>
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">

  <? if($delete_tpl == "true") { ?>
>>>>>>> af2fff1... version1

    <tr>

    <td class="tableb"><b>Template löschen</b></td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="checkbox" name="del_tpl" value="<?php  echo"$template_name"; ?>"></td>

  </tr>

  <?php  } ?>
=======
    <td class="tablea"><input class="input" type="checkbox" name="del_tpl" value="<? echo"$template_name"; ?>"></td>

  </tr>

  <? } ?>
>>>>>>> af2fff1... version1
               
  <tr>

    <td class="tableb" width="50%">Template Name</td>

<<<<<<< HEAD
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_tpl_name" value="<?php  echo"$row_template_data[tpl_name]"; ?>" maxlength="50"></td>
                       <input type="hidden" name="current_tpl_name" value="<?php  echo"$row_template_data[tpl_name]"; ?>"> 
=======
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_tpl_name" value="<? echo"$row_template_data[tpl_name]"; ?>" maxlength="50"></td>
                       <input type="hidden" name="current_tpl_name" value="<? echo"$row_template_data[tpl_name]"; ?>"> 
>>>>>>> af2fff1... version1
  </tr>

  <tr>

    <td class="tableb">Forum Breite (Wert sollte ungefähr zwischen 800 und 1000 liegen!)</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_width" value="<?php  echo"$row_template_data[width]"; ?>" maxlength="4"> px</td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_width" value="<? echo"$row_template_data[width]"; ?>" maxlength="4"> px</td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftart</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontfamily" value="<?php  echo"$row_template_data[fontfamily]"; ?>" maxlength="20"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontfamily" value="<? echo"$row_template_data[fontfamily]"; ?>" maxlength="20"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Randfarbe</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_bordercolor" value="<?php  echo"$row_template_data[bordercolor]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_bordercolor" value="<? echo"$row_template_data[bordercolor]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="cellbg" align="center">

    Hintergrund

    </td>

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="tableb" width="50%">Hintergrundbild Kategorie</td>

<<<<<<< HEAD
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_img_catbg" value="<?php  echo"$row_template_data[img_catbg]"; ?>" maxlength="50"></td>
=======
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_img_catbg" value="<? echo"$row_template_data[img_catbg]"; ?>" maxlength="50"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Hintergrundbild Hauptzellen</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_img_cellbg" value="<?php  echo"$row_template_data[img_cellbg]"; ?>" maxlength="50"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_img_cellbg" value="<? echo"$row_template_data[img_cellbg]"; ?>" maxlength="50"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Hintergrundbild Header Navigation</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_img_headerbg" value="<?php  echo"$row_template_data[img_headerbg]"; ?>" maxlength="50"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_img_headerbg" value="<? echo"$row_template_data[img_headerbg]"; ?>" maxlength="50"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe außen</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_bgcolor" value="<?php  echo"$row_template_data[bgcolor]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_bgcolor" value="<? echo"$row_template_data[bgcolor]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe innen</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_bg_tablein" value="<?php  echo"$row_template_data[bg_tablein]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_bg_tablein" value="<? echo"$row_template_data[bg_tablein]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Zelle 1</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_cell_bg01" value="<?php  echo"$row_template_data[cell_bg01]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_cell_bg01" value="<? echo"$row_template_data[cell_bg01]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Zelle 2</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_cell_bg02" value="<?php  echo"$row_template_data[cell_bg02]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_cell_bg02" value="<? echo"$row_template_data[cell_bg02]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Zellen Mouseover</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_bgcolor_mouseover" value="<?php  echo"$row_template_data[bgcolor_mouseover]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_bgcolor_mouseover" value="<? echo"$row_template_data[bgcolor_mouseover]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Hintergrundfarbe Buttons, Textarea, Select & Inputfelder</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_bgcolor_buttons" value="<?php  echo"$row_template_data[bgcolor_buttons]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_bgcolor_buttons" value="<? echo"$row_template_data[bgcolor_buttons]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="cellbg" align="center">

    Schriftgröße

    </td>

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="tableb" width="50%">Schriftgröße klein</td>

<<<<<<< HEAD
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_fontsize_small" value="<?php  echo"$row_template_data[fontsize_small]"; ?>" maxlength="2"> px</td>
=======
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_fontsize_small" value="<? echo"$row_template_data[fontsize_small]"; ?>" maxlength="2"> px</td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftgröße normal</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontsize" value="<?php  echo"$row_template_data[fontsize]"; ?>" maxlength="2"> px</td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontsize" value="<? echo"$row_template_data[fontsize]"; ?>" maxlength="2"> px</td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftgröße groß</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_big" value="<?php  echo"$row_template_data[fontsize_big]"; ?>" maxlength="2"> px</td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_big" value="<? echo"$row_template_data[fontsize_big]"; ?>" maxlength="2"> px</td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftgröße Header Links</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_header" value="<?php  echo"$row_template_data[fontsize_header]"; ?>" maxlength="2"> px</td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_header" value="<? echo"$row_template_data[fontsize_header]"; ?>" maxlength="2"> px</td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftgröße Überschriften, Titel</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_title" value="<?php  echo"$row_template_data[fontsize_title]"; ?>" maxlength="2"> px</td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_title" value="<? echo"$row_template_data[fontsize_title]"; ?>" maxlength="2"> px</td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftgröße Kategorien</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_cat" value="<?php  echo"$row_template_data[fontsize_cat]"; ?>" maxlength="2"> px</td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_cat" value="<? echo"$row_template_data[fontsize_cat]"; ?>" maxlength="2"> px</td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftgröße Buttons, Textarea, Select & Inputfelder</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_buttons" value="<?php  echo"$row_template_data[fontsize_buttons]"; ?>" maxlength="2"> px</td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontsize_buttons" value="<? echo"$row_template_data[fontsize_buttons]"; ?>" maxlength="2"> px</td>
>>>>>>> af2fff1... version1

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="cellbg" align="center">

    Schriftfarbe

    </td>

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="4" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1

  <tr>

    <td class="tableb" width="50%">Schriftfarbe</td>

<<<<<<< HEAD
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_fontcolor" value="<?php  echo"$row_template_data[fontcolor]"; ?>" maxlength="6"></td>
=======
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_fontcolor" value="<? echo"$row_template_data[fontcolor]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Hauptzellen</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_cellbg_fontcolor" value="<?php  echo"$row_template_data[cellbg_fontcolor]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_cellbg_fontcolor" value="<? echo"$row_template_data[cellbg_fontcolor]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Buttons, Textarea, Select & Inputfelder</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_buttons" value="<?php  echo"$row_template_data[fontcolor_buttons]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_buttons" value="<? echo"$row_template_data[fontcolor_buttons]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb" width="50%">Schriftfarbe Header Links</td>

<<<<<<< HEAD
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_fontcolor_header" value="<?php  echo"$row_template_data[fontcolor_header]"; ?>" maxlength="6"></td>
=======
    <td class="tablea" width="50%"><input class="input" type="text" name="edit_fontcolor_header" value="<? echo"$row_template_data[fontcolor_header]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Header Links Hover</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_header_hover" value="<?php  echo"$row_template_data[fontcolor_header_hover]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_header_hover" value="<? echo"$row_template_data[fontcolor_header_hover]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Kategorie Link</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_cat" value="<?php  echo"$row_template_data[fontcolor_cat]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_cat" value="<? echo"$row_template_data[fontcolor_cat]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Kategorie Link Hover</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_cat_hover" value="<?php  echo"$row_template_data[fontcolor_cat_hover]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_cat_hover" value="<? echo"$row_template_data[fontcolor_cat_hover]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Farbe Links</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_link_color" value="<?php  echo"$row_template_data[link_color]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_link_color" value="<? echo"$row_template_data[link_color]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Farbe Links Hover</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_link_hovercolor" value="<?php  echo"$row_template_data[link_hovercolor]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_link_hovercolor" value="<? echo"$row_template_data[link_hovercolor]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Überschriften Links</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_title" value="<?php  echo"$row_template_data[fontcolor_title]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_fontcolor_title" value="<? echo"$row_template_data[fontcolor_title]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Schriftfarbe Überschriften Hover</td>

<<<<<<< HEAD
    <td class="tablea"><input class="input" type="text" name="edit_title_hovercolor" value="<?php  echo"$row_template_data[title_hovercolor]"; ?>" maxlength="6"></td>
=======
    <td class="tablea"><input class="input" type="text" name="edit_title_hovercolor" value="<? echo"$row_template_data[title_hovercolor]"; ?>" maxlength="6"></td>
>>>>>>> af2fff1... version1

  </tr>

  <tr>

    <td class="tableb">Links Markierung</td>

    <td class="tablea">

    <select class="input" name="edit_link_decoration" style="width:200px;">

    <option value="overline" 

<<<<<<< HEAD
    <?php  if ($row_template_data[link_decoration] == "overline")  { echo"selected"; } ?> 
=======
    <? if ($row_template_data[link_decoration] == "overline")  { echo"selected"; } ?> 
>>>>>>> af2fff1... version1

    >oben unterstrichen</option>

    <option value="underline"

<<<<<<< HEAD
    <?php  if ($row_template_data[link_decoration] == "underline")  { echo"selected"; } ?> 
=======
    <? if ($row_template_data[link_decoration] == "underline")  { echo"selected"; } ?> 
>>>>>>> af2fff1... version1

    >unten unterstrichen</option>
  
    <option value="underline overline"

<<<<<<< HEAD
    <?php  if ($row_template_data[link_decoration] == "underline overline")  { echo"selected"; } ?> 
=======
    <? if ($row_template_data[link_decoration] == "underline overline")  { echo"selected"; } ?> 
>>>>>>> af2fff1... version1

    >oben und unten unterstrichen</option>

    <option value="none"

<<<<<<< HEAD
    <?php  if ($row_template_data[link_decoration] == "none")  { echo"selected"; } ?> 
=======
    <? if ($row_template_data[link_decoration] == "none")  { echo"selected"; } ?> 
>>>>>>> af2fff1... version1

    >keine</option>

    </select>

</td>

  </tr>

  <tr>

    <td class="tableb">Links Hover Markierung</td>

    <td class="tablea">

    <select class="input" name="edit_hover_decoration" style="width:200px;">

    <option value="overline" 

<<<<<<< HEAD
    <?php  if ($row_template_data[hover_decoration] == "overline")  { echo"selected"; } ?> 
=======
    <? if ($row_template_data[hover_decoration] == "overline")  { echo"selected"; } ?> 
>>>>>>> af2fff1... version1

    >oben unterstrichen</option>

    <option value="underline"

<<<<<<< HEAD
    <?php  if ($row_template_data[hover_decoration] == "underline")  { echo"selected"; } ?> 
=======
    <? if ($row_template_data[hover_decoration] == "underline")  { echo"selected"; } ?> 
>>>>>>> af2fff1... version1

    >unten unterstrichen</option>
  
    <option value="underline overline"

<<<<<<< HEAD
    <?php  if ($row_template_data[hover_decoration] == "underline overline")  { echo"selected"; } ?> 
=======
    <? if ($row_template_data[hover_decoration] == "underline overline")  { echo"selected"; } ?> 
>>>>>>> af2fff1... version1

    >oben und unten unterstrichen</option>

    <option value="none"

<<<<<<< HEAD
    <?php  if ($row_template_data[hover_decoration] == "none")  { echo"selected"; } ?> 
=======
    <? if ($row_template_data[hover_decoration] == "none")  { echo"selected"; } ?> 
>>>>>>> af2fff1... version1

    >keine</option>

    </select>

</td>

  </tr>

</table>

<<<<<<< HEAD
<table width="<?php  echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
=======
<table width="<? echo"$width"; ?>" cellpadding="3" cellspacing="1" class="tableinborder">
>>>>>>> af2fff1... version1
               
  <tr>

    <td align="center" class="tableb">

<<<<<<< HEAD
    <input class="input" type="hidden" value="<?php  echo"$template_name"; ?>" name="template_name">
=======
    <input class="input" type="hidden" value="<? echo"$template_name"; ?>" name="template_name">
>>>>>>> af2fff1... version1

    <input class="input" type="submit" value="Template ändern" name="edit_tpl">

    </td> 

  </tr>

</form>

</table>