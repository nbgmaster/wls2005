 var onechecked=false;

function checkBoxes()
{

var all=document.forms[0];

for(var x = 0; x < all.length; x++)
{

if (all.elements[x].checked == true)
{
onechecked=true;
}

}


if(onechecked == false && document.pm_form.deloption.value == "del_pm")
{
alert('Sie m�ssen erst eine Nachricht markieren!');
return false;
}

}
