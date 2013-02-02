<!--
function lt(url) {
    live = window.open(url,'nxLiveticker','top=0,left=0,width=788,height=570,scrollbars=no,resizable=no');
    return false;
}

if (!document.getElementById || navigator.userAgent.indexOf("Opera 5")>=0){
location.href="/browser.html";
}
else {

}

mid="";

function MouseOverOut(img_name,img_src){
	if (img_name!=mid){
		document[img_name].src=img_src;
	}
}

function SetMenu(img_name,img_src){
	MouseOverOut(img_name,img_src);
	mid=img_name;
}

function MouseOverOutIL(img_name,img_src){
	if (document.layers) {
		document['submenu'].document[img_name].src=img_src;
	}
	else {
		document[img_name].src=img_src;
	}
}

function Fenster(url){
	a=window.open(url,'minimal_popup','top=100,left=100,width=543,height=369,scrollbars=yes,resizable=no');
	a.focus();
}

function Fenster2(url){
	a=window.open(url,'minimal_popup','top=100,left=100,width=500,height=380,scrollbars=yes,resizable=no');
	a.focus();
}

function Fenster3(url){
	a=window.open(url,'minimal_popup','top=100,left=100,width=480,height=380,scrollbars=no,resizable=no');
	a.focus();
}

function LayerEinAusblenden(LName,EinAus) {
	if (document.layers) {
		document[LName].visibility = EinAus;
	}
	else
	if (document.getElementById){
		document.getElementById(LName).style.visibility = EinAus;
	}
	else
	if (document.all && !document.getElementById){
		document.all[LName].style.visibility = EinAus;
	}
	else {
		document.write("Ihr Browser unterstützt diese Funktion nicht. Bitte updaten Sie Ihren Browser.");
	}
}

a=455;
b=638;
d=0;
uebergabe=0;

function kleiner(url1a,url2a){
	url1=url1a;
	url2=url2a;
	if (uebergabe==0){
		uebergabe=uebergabe+1;
	}
	else {
		uebergabe=uebergabe-1;
	}
	kleiner2();
}

function kleiner2(){
	if (document.layers){
		if (uebergabe==1){
			document.bild.src=url2;
		}
		else {
			document.bild.src=url1;
		}
	}
	else {
	
	
		if (a!=1){
			document.bild.width=a;
		}
		else {
			
		}
		if (b!=1){
			document.bild.height=b;
		}
		else {
			//clearTimeout(c);groesser();
		}
		c = setTimeout("kleiner2()",10);
		if (a>0 && d<455){
			if (uebergabe==1){
				document.bild.src=url1;
			}
			else {
				document.bild.src=url2;
			}
			
			a=a-16;
			b=b-22;
			d=d+16;
		}
		else
		if (a<455 && d>454){
			if (uebergabe==1){
				document.bild.src=url2;
			}
			else {
				document.bild.src=url1;
			}
			a=a+16;
			b=b+22;
			d=d+16;
		}
		else {
			d=0;clearTimeout(c);
		}
	}
}

idtr="";
idtr_old="";
setidsm="";
setidsm_old="";
TimeoutSet="";
checkTimeout="";

function SeeSubmenu(idtr){
	if (document.getElementById){
		document.getElementById("smenu_0"+idtr).style.display='block';
		document.getElementById("smenu_0"+idtr+"_gr").style.display='block';
		if (idtr!="999") {
			MouseOverOut('b0'+idtr,'image/hmenu_b_0'+idtr+'_o.gif');
		}
		
		if (idtr_old!="" && idtr_old!=idtr){
			document.getElementById("smenu_0"+idtr_old).style.display='none';
			document.getElementById("smenu_0"+idtr_old+"_gr").style.display='none';
			if (tid_old!=""){
				document.getElementById(tid_old).style.display='none';
			}
			if (idtr_old!="999") {
				MouseOverOut('b0'+idtr_old,'image/hmenu_b_0'+idtr_old+'_n.gif');
			}
		}
	}
	/*else if (document.all){
		document.all[idtr].style.display='block';
		if (idtr_old!="" && idtr_old!=idtr){
			document.all[idtr_old].style.display='none';
		}
	}*/
	idtr_old=idtr;
}

function HideSubmenu(){
	if (idtr_old!=""){
		document.getElementById("smenu_0"+idtr_old).style.display='none';
		document.getElementById("smenu_0"+idtr_old+"_gr").style.display='none';
		if (tid_old!=""){
			document.getElementById(tid_old).style.display='none';
		}
		if (idtr_old!="999") {
			MouseOverOut('b0'+idtr_old,'image/hmenu_b_0'+idtr_old+'_n.gif');
		}
	}
}

function SetSubmenu(setidsm){
	checkTimeout="ok";
	setidsm_old=setidsm;
	SeeSubmenu(setidsm_old);
}

function SetSubmenuTimeout(){
	if (TimeoutSet=="ok"){
		clearTimeout(a);
	}
	if (checkTimeout=="ok"){
		a=setTimeout("SetSubmenu(setidsm_old)",5000);
		TimeoutSet="ok";
	}
}

function ChangeColor(xy,objName){
	if (xy=="1"){
		objName.style.backgroundColor='#e71818';
	}
	else {
		objName.style.backgroundColor='';
	}
}

function ChangeBG(xy,objName){
	if (xy=="1"){
		objName.style.backgroundImage='url(/image/nav_bg.gif)';
	}
	else {
		objName.style.backgroundImage='';
	}
}

tid_old="";

function SeeSubSubMenu(tid,lh) {
	document.getElementById(tid).style.display='block';
	document.getElementById(tid).style.top=lh;
	document.getElementById(tid).style.right=(-1*document.getElementById(tid).offsetWidth);
	document.getElementById(tid).style.display='block';
	if (tid_old!="") {
		if (tid!=tid_old){
			document.getElementById(tid_old).style.display='none';
		}
	}
	if (tid!=tid_old){
		tid_old=tid;
	}
	
}

function ActiveSubmenu(gid){
	SetMenu('b0'+gid,'image/hmenu_b_0'+gid+'_o.gif');
	SetSubmenu('999');
}

//check for flash
var flashversion = 7;
var plugin = (navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"]) ? navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin : 0;
if ( plugin ) {
	plugin = parseInt(plugin.description.substring(plugin.description.indexOf(".")-1)) >= flashversion;
}
else if (navigator.userAgent && navigator.userAgent.indexOf("MSIE")>=0 && (navigator.userAgent.indexOf("Windows 95")>=0 || navigator.userAgent.indexOf("Windows 98")>=0 || navigator.userAgent.indexOf("Windows NT")>=0)) {
	document.write('<SCRIPT LANGUAGE=VBScript\> \n');
	document.write('on error resume next \n');
	document.write('plugin = ( IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.'+flashversion+'")))\n');
	document.write('</SCRIPT\> \n');
}

function playSWF(file,id,vars,width,height,wmode,bgcolor,baseurl,wLName) {
	fsource='<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"';
	fsource+=' codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" ';
	fsource+=' ID='+id+' WIDTH="'+width+'"; HEIGHT="'+height+'">';
	fsource+=' <PARAM NAME="allowScriptAccess" VALUE="sameDomain" /> <PARAM NAME=movie VALUE="'+file+'"> <PARAM NAME=FlashVars VALUE="page_vars='+vars+'"> <PARAM NAME=menu VALUE=false>  <PARAM NAME="BASE" VALUE='+baseurl+'> <PARAM NAME=quality VALUE=high> <PARAM NAME=wmode value='+wmode+'> <PARAM NAME=bgcolor VALUE='+bgcolor+'>';
		if(navigator.userAgent.indexOf("Opera")==-1) {
			fsource+=' <EMBED src="'+file+'" FlashVars="page_vars='+vars+'" wmode='+wmode+' menu=false quality=high bgcolor='+bgcolor+'';
			fsource+=' swLiveConnect=FALSE allowScriptAccess="sameDomain" NAME='+id+' WIDTH="'+width+'" HEIGHT="'+height+'"';
			fsource+=' TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" BASE='+baseurl+'>';
			fsource+=' </EMBED>';
		}
		else	{
			fsource+=' <EMBED src="'+file+'" FlashVars="page_vars='+vars+'" wmode='+wmode+' menu=false quality=high bgcolor='+bgcolor+'';
			fsource+=' swLiveConnect=FALSE allowScriptAccess="sameDomain" ID='+id+' WIDTH="'+width+'" HEIGHT="'+height+'"';
			fsource+=' TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" BASE='+baseurl+'>';
			fsource+=' </EMBED>';
		}
	fsource+=' </OBJECT>';

	if (document.getElementById){
		document.getElementById(wLName).innerHTML=fsource;
	}

}
//-->