<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

  $query_template = mysql_query("SELECT * from $admin_config_tblname");

  while ($row_template = mysql_fetch_assoc($query_template))  {  

         $overwrite_user_tpl = "$row_template[overwrite_user_tpl]";
         $template_id        = "$row_template[tpl_active]";

  }

  if ($overwrite_user_tpl == "0")  {

      $template_id = "$userdata_tpl";

  }

  $query_template_data = mysql_query("SELECT * from $templates_tblname WHERE id = '$template_id'");

  $check_query         = mysql_num_rows($query_template_data);

  if ($check_query == "false")  {

      $query_template_data = mysql_query("SELECT * from $templates_tblname WHERE id = '$default_style'");

  }

  while($row_template_data = mysql_fetch_assoc($query_template_data))  {

        $template                 = $row_template_data["tpl_name"];

	$width3           	  = $row_template_data["width"];

        $check_chars = '%';  
 
        if ( eregi($check_chars, $width3) )  {

            $percent_width = "1";

            $width3   = str_replace("%", "", $width3);
        
            $width    = "99";

            $percent  = "%";

            $js_width = $width3;

            $width    = "$width$percent";

            $width3   = "$width3$percent";

            ?>

            <script type="text/javascript">

            <!--

<<<<<<< HEAD
            banner_width = <?php  echo"$js_width"; ?> * screen.width / 100;
=======
            banner_width = <? echo"$js_width"; ?> * screen.width / 100;
>>>>>>> af2fff1... version1

            banner_width = Math.round(banner_width);

            banner_width = banner_width - 2;

            //-->

            </script>

<<<<<<< HEAD
            <?php 
=======
            <?
>>>>>>> af2fff1... version1

        }

        else  {      

            $percent_width        = "0";

	    $width            	  = $width3 - 20;

        }

	$width2            	  = $width / 2;

	$fontsize_small           = $row_template_data["fontsize_small"];
	$fontsize           	  = $row_template_data["fontsize"];
	$fontsize_big             = $row_template_data["fontsize_big"];
	$fontsize_title           = $row_template_data["fontsize_title"];
	$fontsize_header          = $row_template_data["fontsize_header"];
	$fontsize_cat             = $row_template_data["fontsize_cat"];

	$fontcolor_title_hover    = $row_template_data["title_hovercolor"];

	$fontcolor                = $row_template_data["fontcolor"];
	$fontfamily               = $row_template_data["fontfamily"];
 
	$bgcolor                  = $row_template_data["bgcolor"];
	$bordercolor              = $row_template_data["bordercolor"];
	$bordergage               = 1;

	$bg_tablein               = $row_template_data["bg_tablein"];

	$fontcolor_header         = $row_template_data["fontcolor_header"];
	$fontcolor_header_hover   = $row_template_data["fontcolor_header_hover"];
	$fontcolor_cat            = $row_template_data["fontcolor_cat"];
	$fontcolor_cat_hover      = $row_template_data["fontcolor_cat_hover"];

	$cellbg_fontcolor 	  = $row_template_data["cellbg_fontcolor"];

	$cell_bg01         	  = $row_template_data["cell_bg01"];
	$cell_bg02         	  = $row_template_data["cell_bg02"];

	$link_color       	  = $row_template_data["link_color"];
	$link_hover_color 	  = $row_template_data["link_hovercolor"];

	$bgcolor_mouseover  	  = $row_template_data["bgcolor_mouseover"];

	$fontsize_buttons  	  = $row_template_data["fontsize_buttons"];
	$fontcolor_buttons 	  = $row_template_data["fontcolor_buttons"];
	$bgcolor_buttons   	  = $row_template_data["bgcolor_buttons"];

	$fontsize_textarea 	  = $row_template_data["fontsize_textarea"];
	$fontcolor_textarea 	  = $row_template_data["fontcolor_textarea"];
	$bgcolor_textarea  	  = $row_template_data["bgcolor_textarea"];

	$rows_textarea     	  = $row_template_data["rows_textarea"];
	$cols_textarea    	  = $row_template_data["cols_textarea"];

        $fontcolor_title   	  = $row_template_data[fontcolor_title];

        $link_decoration  	  = $row_template_data[link_decoration];
        $hover_decoration  	  = $row_template_data[hover_decoration];

	$img_catbg         	  = $row_template_data["img_catbg"];
	$img_cellbg        	  = $row_template_data["img_cellbg"];
	$img_headerbg      	  = $row_template_data["img_headerbg"];

  }

  $width_smilies_window  = "375";
  $height_smilies_window = "350";


  $cellspacing = "1";

?>

<style type="text/css">
<!--

body {
 margin            : 0;
<<<<<<< HEAD
 background-color  : #<?php  echo"$bgcolor";    ?>;
 color             : #<?php  echo"$fontcolor";  ?>;
 font-family       : <?php  echo"$fontfamily";  ?>;
 font-size         : <?php  echo"$fontsize";    ?>px;
=======
 background-color  : #<? echo"$bgcolor";    ?>;
 color             : #<? echo"$fontcolor";  ?>;
 font-family       : <? echo"$fontfamily";  ?>;
 font-size         : <? echo"$fontsize";    ?>px;
>>>>>>> af2fff1... version1
}


td {
<<<<<<< HEAD
 color       :  #<?php  echo"$fontcolor";  ?>;
 font-family :  <?php  echo"$fontfamily";  ?>;
 font-size   :  <?php  echo"$fontsize";    ?>px;
=======
 color       :  #<? echo"$fontcolor";  ?>;
 font-family :  <? echo"$fontfamily";  ?>;
 font-size   :  <? echo"$fontsize";    ?>px;
>>>>>>> af2fff1... version1
}


.mouseover { 
<<<<<<< HEAD
 background-color : #<?php  echo"$bgcolor_mouseover"; ?>;
=======
 background-color : #<? echo"$bgcolor_mouseover"; ?>;
>>>>>>> af2fff1... version1
 cursor           : pointer;
}


.mouseout {  
<<<<<<< HEAD
 background-color : #<?php  echo"$cell_bg02"; ?>;
=======
 background-color : #<? echo"$cell_bg02"; ?>;
>>>>>>> af2fff1... version1
}


textarea {  
<<<<<<< HEAD
 background-color : #<?php  echo"$bgcolor_buttons";   ?>;
 color            : #<?php  echo"$fontcolor_buttons"; ?>;
 font-size        : <?php  echo"$fontsize_buttons";   ?>px;
 border           : <?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>;
=======
 background-color : #<? echo"$bgcolor_buttons";   ?>;
 color            : #<? echo"$fontcolor_buttons"; ?>;
 font-size        : <? echo"$fontsize_buttons";   ?>px;
 border           : <? echo"$bordergage"; ?>px solid #<? echo"$bordercolor"; ?>;
>>>>>>> af2fff1... version1
}


select {
<<<<<<< HEAD
 background-color : #<?php  echo"$bgcolor_buttons";  ?>;
 font-size        : <?php  echo"$fontsize_buttons";  ?>px;
 border           : <?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>;
 color            : #<?php  echo"$fontcolor_buttons"; ?>;
}

input {
 border            : <?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>; 
 background-color  : #<?php  echo"$bgcolor_buttons";   ?>;
 color             : #<?php  echo"$fontcolor_buttons"; ?>;
 font-size         : <?php  echo"$fontsize_buttons";   ?>px;
=======
 background-color : #<? echo"$bgcolor_buttons";  ?>;
 font-size        : <? echo"$fontsize_buttons";  ?>px;
 border           : <? echo"$bordergage"; ?>px solid #<? echo"$bordercolor"; ?>;
 color            : #<? echo"$fontcolor_buttons"; ?>;
}

input {
 border            : <? echo"$bordergage"; ?>px solid #<? echo"$bordercolor"; ?>; 
 background-color  : #<? echo"$bgcolor_buttons";   ?>;
 color             : #<? echo"$fontcolor_buttons"; ?>;
 font-size         : <? echo"$fontsize_buttons";   ?>px;
>>>>>>> af2fff1... version1
}


.small { 
<<<<<<< HEAD
 font-size : <?php  echo"$fontsize_small"; ?>px; 
=======
 font-size : <? echo"$fontsize_small"; ?>px; 
>>>>>>> af2fff1... version1
}


.main { 
<<<<<<< HEAD
 font-size : <?php  echo"$fontsize"; ?>px;
=======
 font-size : <? echo"$fontsize"; ?>px;
>>>>>>> af2fff1... version1
} 


.big { 
<<<<<<< HEAD
 font-size : <?php  echo"$fontsize_big"; ?>px;
=======
 font-size : <? echo"$fontsize_big"; ?>px;
>>>>>>> af2fff1... version1
}


.title {
<<<<<<< HEAD
 font-size   : <?php  echo"$fontsize_title";   ?>px; 
 color       : #<?php  echo"$fontcolor_title"; ?>; 
=======
 font-size   : <? echo"$fontsize_title";   ?>px; 
 color       : #<? echo"$fontcolor_title"; ?>; 
>>>>>>> af2fff1... version1
 font-weight : bold; 
}


.tableinborder_top {
<<<<<<< HEAD
 border           : <?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>; 
 background-color : #<?php  echo"$bg_tablein"; ?>;
=======
 border           : <? echo"$bordergage"; ?>px solid #<? echo"$bordercolor"; ?>; 
 background-color : #<? echo"$bg_tablein"; ?>;
>>>>>>> af2fff1... version1
}


.tableinborder {
<<<<<<< HEAD
 background-color : #<?php  echo"$bordercolor"; ?>;
=======
 background-color : #<? echo"$bordercolor"; ?>;
>>>>>>> af2fff1... version1
}


.input {
<<<<<<< HEAD
 font-size         : <?php  echo"$fontsize_buttons";   ?>px;
 background-color  : #<?php  echo"$bgcolor_buttons";   ?>;
 color             : #<?php  echo"$fontcolor_buttons"; ?>;
 background-color  : #<?php  echo"$bgcolor_buttons";   ?>;
=======
 font-size         : <? echo"$fontsize_buttons";   ?>px;
 background-color  : #<? echo"$bgcolor_buttons";   ?>;
 color             : #<? echo"$fontcolor_buttons"; ?>;
 background-color  : #<? echo"$bgcolor_buttons";   ?>;
>>>>>>> af2fff1... version1
}


.tablea { 
<<<<<<< HEAD
 background-color : #<?php  echo"$cell_bg01"; ?>;
=======
 background-color : #<? echo"$cell_bg01"; ?>;
>>>>>>> af2fff1... version1
}


.tableb {
<<<<<<< HEAD
 background-color : #<?php  echo"$cell_bg02"; ?>;
=======
 background-color : #<? echo"$cell_bg02"; ?>;
>>>>>>> af2fff1... version1
}


.cellbg {
<<<<<<< HEAD
 background-image:  url(images/templates/<?php  echo"$template/$img_cellbg"; ?>);
 color            : #<?php  echo"$cellbg_fontcolor"; ?>;
=======
 background-image:  url(images/templates/<? echo"$template/$img_cellbg"; ?>);
 color            : #<? echo"$cellbg_fontcolor"; ?>;
>>>>>>> af2fff1... version1
}


.catbg {
<<<<<<< HEAD
 background-image : url(images/templates/<?php  echo"$template/$img_catbg"; ?>);
 color            : #<?php  echo"$fontcolor_cat"; ?>;
 font-weight      : bold;
 font-size        : <?php  echo"$fontsize_cat"; ?>px;
=======
 background-image : url(images/templates/<? echo"$template/$img_catbg"; ?>);
 color            : #<? echo"$fontcolor_cat"; ?>;
 font-weight      : bold;
 font-size        : <? echo"$fontsize_cat"; ?>px;
>>>>>>> af2fff1... version1
}


.banner {
<<<<<<< HEAD
 border-bottom : <?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>; 
 border-top    : <?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>; 
=======
 border-bottom : <? echo"$bordergage"; ?>px solid #<? echo"$bordercolor"; ?>; 
 border-top    : <? echo"$bordergage"; ?>px solid #<? echo"$bordercolor"; ?>; 
>>>>>>> af2fff1... version1
}


.borderbottom {
<<<<<<< HEAD
 border-bottom : <?php  echo"$bordergage"; ?>px solid #<?php  echo"$bordercolor"; ?>; 
=======
 border-bottom : <? echo"$bordergage"; ?>px solid #<? echo"$bordercolor"; ?>; 
>>>>>>> af2fff1... version1
}


.bgheader {
<<<<<<< HEAD
 background-image : url(images/templates/<?php  echo"$template/$img_headerbg"; ?>);
 font-size        : <?php  echo"$fontsize_header"; ?>px;
=======
 background-image : url(images/templates/<? echo"$template/$img_headerbg"; ?>);
 font-size        : <? echo"$fontsize_header"; ?>px;
>>>>>>> af2fff1... version1
 font-weight      : bold;
}


A.catbg:link {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_cat";   ?>;
 text-decoration : <?php  echo"$link_decoration";  ?>;
=======
 color           : #<? echo"$fontcolor_cat";   ?>;
 text-decoration : <? echo"$link_decoration";  ?>;
>>>>>>> af2fff1... version1
}


A.catbg:visited {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_cat";   ?>;
 text-decoration : <?php  echo"$link_decoration";  ?>;
=======
 color           : #<? echo"$fontcolor_cat";   ?>;
 text-decoration : <? echo"$link_decoration";  ?>;
>>>>>>> af2fff1... version1
        }


A.catbg:active {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_cat";   ?>;
 text-decoration : <?php  echo"$link_decoration";  ?>;
=======
 color           : #<? echo"$fontcolor_cat";   ?>;
 text-decoration : <? echo"$link_decoration";  ?>;
>>>>>>> af2fff1... version1
}


A.catbg:hover {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_cat_hover"; ?>;
 text-decoration : <?php  echo"$link_decoration";      ?>;
=======
 color           : #<? echo"$fontcolor_cat_hover"; ?>;
 text-decoration : <? echo"$link_decoration";      ?>;
>>>>>>> af2fff1... version1
}


A.header:link {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_header"; ?>;
 text-decoration : <?php  echo"$link_decoration";   ?>;
=======
 color           : #<? echo"$fontcolor_header"; ?>;
 text-decoration : <? echo"$link_decoration";   ?>;
>>>>>>> af2fff1... version1
}


A.header:visited {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_header"; ?>;
 text-decoration : <?php  echo"$link_decoration";   ?>;
=======
 color           : #<? echo"$fontcolor_header"; ?>;
 text-decoration : <? echo"$link_decoration";   ?>;
>>>>>>> af2fff1... version1
}


A.header:active {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_header"; ?>;
 text-decoration : <?php  echo"$link_decoration";   ?>;
=======
 color           : #<? echo"$fontcolor_header"; ?>;
 text-decoration : <? echo"$link_decoration";   ?>;
>>>>>>> af2fff1... version1
}


A.header:hover {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_header_hover"; ?>;
 text-decoration : <?php  echo"$hover_decoration";        ?>;
=======
 color           : #<? echo"$fontcolor_header_hover"; ?>;
 text-decoration : <? echo"$hover_decoration";        ?>;
>>>>>>> af2fff1... version1
}


A.title:link {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_title";  ?>;
 text-decoration :  <?php  echo"$link_decoration";  ?>;
=======
 color           : #<? echo"$fontcolor_title";  ?>;
 text-decoration :  <? echo"$link_decoration";  ?>;
>>>>>>> af2fff1... version1
}


A.title:visited {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_title";  ?>;
 text-decoration : <?php  echo"$link_decoration";   ?>;
=======
 color           : #<? echo"$fontcolor_title";  ?>;
 text-decoration : <? echo"$link_decoration";   ?>;
>>>>>>> af2fff1... version1
}


A.title:active {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_title";  ?>;
 text-decoration : <?php  echo"$link_decoration";   ?>;
=======
 color           : #<? echo"$fontcolor_title";  ?>;
 text-decoration : <? echo"$link_decoration";   ?>;
>>>>>>> af2fff1... version1
}


A.title:hover {
<<<<<<< HEAD
 color           : #<?php  echo"$fontcolor_title_hover"; ?>;
 text-decoration : <?php  echo"$hover_decoration";       ?>;
=======
 color           : #<? echo"$fontcolor_title_hover"; ?>;
 text-decoration : <? echo"$hover_decoration";       ?>;
>>>>>>> af2fff1... version1
}


A:link {
<<<<<<< HEAD
 color           : #<?php  echo"$link_color";     ?>;
 text-decoration : <?php  echo"$link_decoration"; ?>;
=======
 color           : #<? echo"$link_color";     ?>;
 text-decoration : <? echo"$link_decoration"; ?>;
>>>>>>> af2fff1... version1
}


A:visited {
<<<<<<< HEAD
 color           : #<?php  echo"$link_color";     ?>;
 text-decoration : <?php  echo"$link_decoration"; ?>;
=======
 color           : #<? echo"$link_color";     ?>;
 text-decoration : <? echo"$link_decoration"; ?>;
>>>>>>> af2fff1... version1
}


A:active {
<<<<<<< HEAD
 color           : #<?php  echo"$link_color";     ?>;
 text-decoration : <?php  echo"$link_decoration"; ?>;
=======
 color           : #<? echo"$link_color";     ?>;
 text-decoration : <? echo"$link_decoration"; ?>;
>>>>>>> af2fff1... version1
}


A:hover {
<<<<<<< HEAD
 color           : #<?php  echo"$link_hover_color"; ?>;
 text-decoration : <?php  echo"$hover_decoration";  ?>;
=======
 color           : #<? echo"$link_hover_color"; ?>;
 text-decoration : <? echo"$hover_decoration";  ?>;
>>>>>>> af2fff1... version1
}

-->
</style>