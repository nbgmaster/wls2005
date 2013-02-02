function emoticon(text) {
text = ' ' + text + ' ';
if (opener.document.forms['bbform'].message.createTextRange && opener.document.forms['bbform'].message.caretPos) {
var caretPos = opener.document.forms['bbform'].message.caretPos;
caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
opener.document.forms['bbform'].message.focus();
} else {
opener.document.forms['bbform'].message.value  += text;
opener.document.forms['bbform'].message.focus();
}
}
