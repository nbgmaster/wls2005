
function OpenNewWindow(Picture,Breit,Hoch)
{
xsize = Breit+6;// Zusatz für Rand rechts und links
ysize = Hoch+52; //Zusatz für Rand oben und unten - damit Button angezeit werden kann

ScreenWidth = screen.width;
ScreenHeight = screen.height;

window.defaultStatus="Zum Schließen einfach auf das Bild klicken!";

xpos = (ScreenWidth/2)-(xsize/2);
ypos = (ScreenHeight/2)-(ysize/2);

        NewWindow=window.open("","Bildanzeige","height="+ysize+",width="+xsize+",scrollbars=yes,resizable=no,top="+ypos+",left="+xpos+"");
        NewWindow.document.write ("<html><head><meta http-equiv='imagetoolbar' content='no'><title>Abicalypse2005.de Gallery");
        NewWindow.document.write ("</title></head>");
        NewWindow.document.write ("<body bgcolor='#ffffff' onload='focus()' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>");
   
        NewWindow.document.write ("<table bgcolor='#000000' cellpadding='0' cellspacing='0'><tr><td align='center'>");
        NewWindow.document.write ("<img onClick='self.close()' src=");
        NewWindow.document.write (Picture);
        NewWindow.document.write (">");
        NewWindow.document.write ("</td></tr></table>");
        NewWindow.document.write ("</body></html>");
        NewWindow.document.close();
                     NewWindow.resizeTo(xsize,ysize);
}


function center_position(w,h,url,n)
{
	l	= (screen.availWidth/2)-(w/2);
	t	= (screen.availHeight/2)-(h/2);
         win	= window.open(url,n,"width="+w+",height="+h+",left="+l+",top="+t+"");
	win.focus();
}

