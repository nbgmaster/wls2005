<<<<<<< HEAD
<?php 

// notwendige Angaben


$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wls2005";



// ab hier kann, muss aber nichts mehr ge�ndert werden


// diese Angaben bitte nicht mehr �ndern, nachdem die Shoutbox einmal aufgerufen wurde!


$sb_tblname   = "wls_shoutbox";      // Name der Tabelle f�r die Eintr�ge, bitte nach dem 1. Seitenaufruf nicht mehr �ndern!

$ip_tblname   = "wls_ipsperre";  // Name der Tabelle f�r die IP Sperre, bitte nach dem 1. Seitenaufruf nicht mehr �ndern!
=======
<?

// notwendige Angaben

$dbserver = "localhost";
$dbuser = "web231";
$dbpass = "121DB413";
$dbname = "usr_web231_2";




// ab hier kann, muss aber nichts mehr ge�ndert werden


// diese Angaben bitte nicht mehr �ndern, nachdem die Shoutbox einmal aufgerufen wurde!


$sb_tblname   = "wls_shoutbox";      // Name der Tabelle f�r die Eintr�ge, bitte nach dem 1. Seitenaufruf nicht mehr �ndern!

$ip_tblname   = "wls_ipsperre";  // Name der Tabelle f�r die IP Sperre, bitte nach dem 1. Seitenaufruf nicht mehr �ndern!
>>>>>>> af2fff1... version1

$reloadsperre = "600";           // Dauer der IP Sperre in Sekunden


<<<<<<< HEAD
// Login Daten zum L�schen von Eintr�gen
=======
// Login Daten zum L�schen von Eintr�gen
>>>>>>> af2fff1... version1


$adminname   =   "test";     // Administrator Name 

$adminpw     =   "test";    // Administrator Passwort


<<<<<<< HEAD
// Design �ndern


$proseite_sb     =   7    ;            // Anzahl der angezeigten Shoutboxeintr�ge pro Seite.
=======
// Design �ndern


$proseite_sb     =   7    ;            // Anzahl der angezeigten Shoutboxeintr�ge pro Seite.
>>>>>>> af2fff1... version1
 
$width           =   180   ;          // Breite der Shoutbox

$bgcolor         =   "#ffffff"  ;   // Hintergrundfarbe der Shoutbox


$schriftart      =  "Verdana, sans-serif"  ;     //  Schriftart


<<<<<<< HEAD
$schriftfarbe    =   "#000000"  ;      // Schriftfarbe �berschrift "SHOUTBOX"

$schriftgroesse  =   13         ;     // Schriftgroesse �berschrift "SHOUTBOX"
=======
$schriftfarbe    =   "#000000"  ;      // Schriftfarbe �berschrift "SHOUTBOX"

$schriftgroesse  =   13         ;     // Schriftgroesse �berschrift "SHOUTBOX"
>>>>>>> af2fff1... version1

$adminschrift    =   11         ;    // Schriftgroesse Admin Text


$linkfarbe       =  "#000000"   ;     // Farbe eines Links

<<<<<<< HEAD
$hoverfarbe      =  "#ff7f00"   ;    // Farbe eines Links wenn sich der Mauszeiger �ber ihm befindet (Hover Link)

$linkgroe�e      =   9    ;         // Schriftgr��e eines Links

$linkfarbe2      =  "#333333"   ;   // Farbe des Links "L�schen eines Eintrags" (x) 
=======
$hoverfarbe      =  "#ff7f00"   ;    // Farbe eines Links wenn sich der Mauszeiger �ber ihm befindet (Hover Link)

$linkgroe�e      =   9    ;         // Schriftgr��e eines Links

$linkfarbe2      =  "#333333"   ;   // Farbe des Links "L�schen eines Eintrags" (x) 
>>>>>>> af2fff1... version1


$schriftseiten1  =   9    ;        // Schriftgroesse aktive Seitenzahl und Wort "Seiten" im Archiv
 
$schriftseiten2  =  "#000000"   ; // Schriftfarbe aktive Seitenzahl und Wort "Seiten" im Archiv


$smilies         =  "an"        ;    // Smilies an oder ausschalten ?  (an|aus)

$archiv_link     =  "nein"        ;   // Link zum Archiv anzeigen ?     (ja|nein)

$admin_link      =  "nein"        ;  // Link zum Admin anzeigen ?       (ja|nein)

$html            =   "nein";      // HTML in der 'Message' erlauben ?  (ja|nein) 

 
$schriftfarbe1   =   "#ff7f00"  ;     // Schriftfarbe 'Name'

$schriftfarbe2   =   "#333333"  ;    // Schriftfarbe 'Message'

<<<<<<< HEAD
$schriftgroe�e1  =   10    ;        // Schriftgr��e 'Name'

$schriftgroe�e2  =   10    ;      // Schriftgr��e 'Message' 


$inputlaenge1    =   27    ;            // L�nge des Eingabefeldes 'Name'

$bginput1        =  "transparent"  ;   // Hintergrundfarbe des Eingabefeldes 'Name'

$hoeheinput1     =   15    ;          // H�he des Eingabefeldes 'Name'

$schriftinput1   =   10    ;         // Schriftgr��e des Eingabefeldes 'Name'
=======
$schriftgroe�e1  =   10    ;        // Schriftgr��e 'Name'

$schriftgroe�e2  =   10    ;      // Schriftgr��e 'Message' 


$inputlaenge1    =   27    ;            // L�nge des Eingabefeldes 'Name'

$bginput1        =  "transparent"  ;   // Hintergrundfarbe des Eingabefeldes 'Name'

$hoeheinput1     =   15    ;          // H�he des Eingabefeldes 'Name'

$schriftinput1   =   10    ;         // Schriftgr��e des Eingabefeldes 'Name'
>>>>>>> af2fff1... version1

$inputfarbe1     =   "#000000"   ;  // Schriftfarbe des Eingabefeldes 'Name'

$inputborder1     =  "#000000"   ;  // Farbe des Randes des Eingabefeldes 'Name'


<<<<<<< HEAD
$inputlaenge2    =   34   ;              // L�nge des Eingabefeldes 'Message'

$bginput2        =  "transparent"  ;    // Hintergrundfarbe des Eingabefeldes 'Message'

$hoeheinput2     =   15   ;  	       // H�he des Eingabefeldes 'Message'

$schriftinput2   =   10   ; 	      // Schriftgr��e des Eingabefeldes 'Message'
=======
$inputlaenge2    =   34   ;              // L�nge des Eingabefeldes 'Message'

$bginput2        =  "transparent"  ;    // Hintergrundfarbe des Eingabefeldes 'Message'

$hoeheinput2     =   15   ;  	       // H�he des Eingabefeldes 'Message'

$schriftinput2   =   10   ; 	      // Schriftgr��e des Eingabefeldes 'Message'
>>>>>>> af2fff1... version1

$inputfarbe2     =   "#000000"   ;   // Schriftfarbe des Eingabefeldes 'Message'

$inputborder2     =  "#000000"   ;  // Farbe des Randes des Eingabefeldes 'Message'


<<<<<<< HEAD
$submitlaenge    =  188  ;              // L�nge des Shoutbuttons

$bgsubmit        =  "#ffffff"   ;       // Hintergrundfarbe des Shoutbuttons

$hoehesubmit     =   15   ;            // H�he des Shoutbuttons

$schriftsubmit   =   10   ;           // Schriftgr��e des Shoutbuttons
=======
$submitlaenge    =  188  ;              // L�nge des Shoutbuttons

$bgsubmit        =  "#ffffff"   ;       // Hintergrundfarbe des Shoutbuttons

$hoehesubmit     =   15   ;            // H�he des Shoutbuttons

$schriftsubmit   =   10   ;           // Schriftgr��e des Shoutbuttons
>>>>>>> af2fff1... version1

$schriftsubmit2  =  "#000000"   ;    // Schriftfarbe des Shoutbuttons

$submitborder    =  "#000000"   ;   // Farbe des Randes des Shoutbuttons

 
$trennlinie      =  "#000000"   ;    // Farbe der Trennlinien



<<<<<<< HEAD
// ab hier nichts mehr �ndern
=======
// ab hier nichts mehr �ndern
>>>>>>> af2fff1... version1



$db = mysql_connect($dbserver, $dbuser, $dbpass, $dbname);   

$db2 = mysql_select_db($dbname, $db);

?>