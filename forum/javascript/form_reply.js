function checkForm() {


   if( document.bbform.message.value == "" )

      {
       alert( "Fehler: Sie müssen eine Nachricht eingeben!" );
       document.bbform.message.focus();
       return false;
      }


formErrors = false;



if (formErrors) {
alert(formErrors);
return false;
} else {

return true;
}
}

function emoticon(text) {
var txtarea = document.bbform.message;
text = ' ' + text + ' ';
if (txtarea.createTextRange && txtarea.caretPos) {
var caretPos = txtarea.caretPos;
caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
txtarea.focus();
} else {
txtarea.value  += text;
txtarea.focus();
}
}