<script>

function check_sb() {
if( document.form_sb.name_sb.value == "" ){
alert( "Du hast keinen Namen angegeben!" );
document.form_sb.name_sb.focus();
return false;
}
if( document.form_sb.text_sb.value == "" ){
alert( "Du hast keinen Text angegeben!" );
document.form_sb.text_sb.focus();
return false;
}
<<<<<<< HEAD
<?php  if($html=="nein") { ?>
=======
<? if($html=="nein") { ?>
>>>>>>> af2fff1... version1
if (document.form_sb.text_sb.value.indexOf('<',0)!=-1 || document.form_sb.text_sb.value.indexOf('>',0)!=-1) {
alert( "Bitte kein Html benutzen!" );
document.form_sb.text_sb.focus();
return false;
}
<<<<<<< HEAD
<?php  } ?>
=======
<? } ?>
>>>>>>> af2fff1... version1
}
function smilie(name_sb) {
document.form_sb.text_sb.focus();
document.form_sb.text_sb.value = document.form_sb.text_sb.value + name_sb;
document.form_sb.text_sb.focus();
document.form_sb.text_sb.value = document.form_sb.text_sb.value;
document.form_sb.text_sb.focus();
}

</script>