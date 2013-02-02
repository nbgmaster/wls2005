
<?php 

// notwendige Angaben


$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wls2005";



// ab hier kann, muss aber nichts mehr geï¿½ndert werden


// diese Angaben bitte nicht mehr ï¿½ndern, nachdem die Shoutbox einmal aufgerufen wurde!




// ab hier kann, muss aber nichts mehr geändert werden


// diese Angaben bitte nicht mehr ändern, nachdem die Shoutbox einmal aufgerufen wurde!


$sb_tblname   = "wls_shoutbox";      // Name der Tabelle für die Einträge, bitte nach dem 1. Seitenaufruf nicht mehr ändern!

$ip_tblname   = "wls_ipsperre";  // Name der Tabelle für die IP Sperre, bitte nach dem 1. Seitenaufruf nicht mehr ändern!


$reloadsperre = "600";           // Dauer der IP Sperre in Sekunden



// Login Daten zum Lï¿½schen von Eintrï¿½gen

// Login Daten zum Löschen von Einträgen



$adminname   =   "test";     // Administrator Name 

$adminpw     =   "test";    // Administrator Passwort



// Design ï¿½ndern


$proseite_sb     =   7    ;            // Anzahl der angezeigten Shoutboxeintrï¿½ge pro Seite.

// Design ändern


$proseite_sb     =   7    ;            // Anzahl der angezeigten Shoutboxeinträge pro Seite.

 
$width           =   180   ;          // Breite der Shoutbox

$bgcolor         =   "#ffffff"  ;   // Hintergrundfarbe der Shoutbox


$schriftart      =  "Verdana, sans-serif"  ;     //  Schriftart



$schriftfarbe    =   "#000000"  ;      // Schriftfarbe ï¿½berschrift "SHOUTBOX"

$schriftgroesse  =   13         ;     // Schriftgroesse ï¿½berschrift "SHOUTBOX"

$schriftfarbe    =   "#000000"  ;      // Schriftfarbe Überschrift "SHOUTBOX"

$schriftgroesse  =   13         ;     // Schriftgroesse Überschrift "SHOUTBOX"


$adminschrift    =   11         ;    // Schriftgroesse Admin Text


$linkfarbe       =  "#000000"   ;     // Farbe eines Links


$hoverfarbe      =  "#ff7f00"   ;    // Farbe eines Links wenn sich der Mauszeiger ï¿½ber ihm befindet (Hover Link)

$linkgroeï¿½e      =   9    ;         // Schriftgrï¿½ï¿½e eines Links

$linkfarbe2      =  "#333333"   ;   // Farbe des Links "Lï¿½schen eines Eintrags" (x) 

$hoverfarbe      =  "#ff7f00"   ;    // Farbe eines Links wenn sich der Mauszeiger über ihm befindet (Hover Link)

$linkgroeße      =   9    ;         // Schriftgröße eines Links

$linkfarbe2      =  "#333333"   ;   // Farbe des Links "Löschen eines Eintrags" (x) 



$schriftseiten1  =   9    ;        // Schriftgroesse aktive Seitenzahl und Wort "Seiten" im Archiv
 
$schriftseiten2  =  "#000000"   ; // Schriftfarbe aktive Seitenzahl und Wort "Seiten" im Archiv


$smilies         =  "an"        ;    // Smilies an oder ausschalten ?  (an|aus)

$archiv_link     =  "nein"        ;   // Link zum Archiv anzeigen ?     (ja|nein)

$admin_link      =  "nein"        ;  // Link zum Admin anzeigen ?       (ja|nein)

$html            =   "nein";      // HTML in der 'Message' erlauben ?  (ja|nein) 

 
$schriftfarbe1   =   "#ff7f00"  ;     // Schriftfarbe 'Name'

$schriftfarbe2   =   "#333333"  ;    // Schriftfarbe 'Message'


$schriftgroeï¿½e1  =   10    ;        // Schriftgrï¿½ï¿½e 'Name'

$schriftgroeï¿½e2  =   10    ;      // Schriftgrï¿½ï¿½e 'Message' 


$inputlaenge1    =   27    ;            // Lï¿½nge des Eingabefeldes 'Name'

$bginput1        =  "transparent"  ;   // Hintergrundfarbe des Eingabefeldes 'Name'

$hoeheinput1     =   15    ;          // Hï¿½he des Eingabefeldes 'Name'

$schriftinput1   =   10    ;         // Schriftgrï¿½ï¿½e des Eingabefeldes 'Name'

$schriftgroeße1  =   10    ;        // Schriftgröße 'Name'

$schriftgroeße2  =   10    ;      // Schriftgröße 'Message' 


$inputlaenge1    =   27    ;            // Länge des Eingabefeldes 'Name'

$bginput1        =  "transparent"  ;   // Hintergrundfarbe des Eingabefeldes 'Name'

$hoeheinput1     =   15    ;          // Höhe des Eingabefeldes 'Name'

$schriftinput1   =   10    ;         // Schriftgröße des Eingabefeldes 'Name'


$inputfarbe1     =   "#000000"   ;  // Schriftfarbe des Eingabefeldes 'Name'

$inputborder1     =  "#000000"   ;  // Farbe des Randes des Eingabefeldes 'Name'



$inputlaenge2    =   34   ;              // Lï¿½nge des Eingabefeldes 'Message'

$bginput2        =  "transparent"  ;    // Hintergrundfarbe des Eingabefeldes 'Message'

$hoeheinput2     =   15   ;  	       // Hï¿½he des Eingabefeldes 'Message'

$schriftinput2   =   10   ; 	      // Schriftgrï¿½ï¿½e des Eingabefeldes 'Message'

$inputlaenge2    =   34   ;              // Länge des Eingabefeldes 'Message'

$bginput2        =  "transparent"  ;    // Hintergrundfarbe des Eingabefeldes 'Message'

$hoeheinput2     =   15   ;  	       // Höhe des Eingabefeldes 'Message'

$schriftinput2   =   10   ; 	      // Schriftgröße des Eingabefeldes 'Message'


$inputfarbe2     =   "#000000"   ;   // Schriftfarbe des Eingabefeldes 'Message'

$inputborder2     =  "#000000"   ;  // Farbe des Randes des Eingabefeldes 'Message'



$submitlaenge    =  188  ;              // Lï¿½nge des Shoutbuttons

$bgsubmit        =  "#ffffff"   ;       // Hintergrundfarbe des Shoutbuttons

$hoehesubmit     =   15   ;            // Hï¿½he des Shoutbuttons

$schriftsubmit   =   10   ;           // Schriftgrï¿½ï¿½e des Shoutbuttons

$submitlaenge    =  188  ;              // Länge des Shoutbuttons

$bgsubmit        =  "#ffffff"   ;       // Hintergrundfarbe des Shoutbuttons

$hoehesubmit     =   15   ;            // Höhe des Shoutbuttons

$schriftsubmit   =   10   ;           // Schriftgröße des Shoutbuttons


$schriftsubmit2  =  "#000000"   ;    // Schriftfarbe des Shoutbuttons

$submitborder    =  "#000000"   ;   // Farbe des Randes des Shoutbuttons

 
$trennlinie      =  "#000000"   ;    // Farbe der Trennlinien




// ab hier nichts mehr ï¿½ndern

// ab hier nichts mehr ändern




$db = mysql_connect($dbserver, $dbuser, $dbpass, $dbname);   

$db2 = mysql_select_db($dbname, $db);

?>