<script>


function zentrieren(b,h) 
{
var ns6 = (!document.all && document.getElementById);
var ie4 = (document.all);
var ns4 = (document.layers);

if(ns6||ns4) {
sbreite = innerWidth;
shoehe = innerHeight;
}
else if(ie4) {
sbreite = document.body.clientWidth;
shoehe = document.body.clientHeight;
}

x = (sbreite-b)/2;
y = (shoehe-h)/2;
eigenschaften="left="+x+",top="+y+",screenX="+x+",screenY="+y+",width="+b+",height="+h;
}


function zusatzeigenschaften()
{
eigenschaften= eigenschaften + "menubar=0";   
eigenschaften= eigenschaften + "toolbar=0";    
eigenschaften= eigenschaften + "statusbar=0";  
eigenschaften= eigenschaften + "scrollbars=0"; 
eigenschaften= eigenschaften + "resizable=0";   
eigenschaften= eigenschaften + "locationbar=0"; 
eigenschaften= eigenschaften + "directories=0";
}



function center_picture(dateiname,b,h,z,w)
{

eigenschaft = ""
eigenschaften = "width="+b+",height="+h;


if(z==1) {
zentrieren(b,h);    
}
else              
{
x = 5;
y = 5;
eigenschaften="left="+x+",top="+y+",width="+b+",height="+h;
}

zusatzeigenschaften();


fenster=window.open(dateiname,"Titeltext",eigenschaften);

fenster.focus();

}

//-->
</script>

<script>
function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"scrollbars=yes,width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}
</script>
<<<<<<< HEAD
<?php 
=======
<?
>>>>>>> af2fff1... version1

 if($cookie_check_abicalypse=="allowed" && $save_id!="") 

{ 


if($class=="party") {  include('gallery_party.php'); }
if($class=="fahrten") {  include('gallery_fahrten.php'); }
if($class=="sonstige") {  include('gallery_sonstige.php'); }

}


else { echo"<br><img src=images/galerie.jpg><br><br><br><b><font class=forum>Sorry, du bist nicht eingeloggt!</font></b><br>";
echo"<br>Wenn du bereits registriert bist, logge dich oben mit deiner Emailadresse";
echo" und deinem Passwort ein.<br><br>";
echo"<br><a href=index.php?page=register><b>Noch nicht registriert? Hier gehts zur Anmeldung!</b></a>";
 } 
