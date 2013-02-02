
      // Ziel-Datum in MEZ
      var jahr=2005, monat=10, tag=27, stunde=22, minute=00, sekunde=00;
      var zielDatum=new Date(jahr,monat-1,tag,stunde,minute,sekunde);

      function countdown() {
        startDatum=new Date(); // Aktuelles Datum

        // Countdown berechnen und anzeigen, bis Ziel-Datum erreicht ist
        if(startDatum<=zielDatum)  {

          var jahre=0, monate=0, tage=0, stunden=0, minuten=0, sekunden=0;

          /* Allgemeines Vorgehen:
           * Zunächst werden die vollen Jahre gezählt
           * und anschließend der Start- und Ziel-Monat auf den jeweiligen 1. gesetzt.
           * Nun werden erst die vollen Monate vom 1. zum 1. des Start- bzw. Ziel-Monats
           * berechnet und danach die tatsächlichen Monatstage wieder mit einbezogen.
           * Dieses Vorgehen vermeidet Probleme mit den verschiedenen Monatslängen.
           * Was übrig bleibt, wird in Tagen, Stunden, Minuten und Sekunden ausgedrückt.*/

          // Jahre
          if(startDatum<zielDatum) {
            while(startDatum<zielDatum) {
              if(startDatum.setFullYear(startDatum.getFullYear()+1)<=zielDatum) jahre++;
            }
            startDatum.setFullYear(startDatum.getFullYear()-1);
          }

          // Restliche Tage zum Monatsende ermitteln
          var restTage=0;
          var m=startDatum.getMonth();
          if(m==1-1|| m==3-1||m==5-1||m==7-1||m==8-1||m==10-1||m==12-1)
              restTage=31-startDatum.getDate();
          else if(m==4-1|| m==6-1||m==9-1||m==11-1) restTage=30-startDatum.getDate();
          else if(m==2-1) {
            if(startDatum.getFullYear()%4==0 && (startDatum.getFullYear()%100!=0
                || startDatum.getFullYear()%400==0))
                    restTage=29-startDatum.getDate(); // Schaltjahr
            else restTage=28-startDatum.getDate();
          }

          // Start- und Ziel-Tag merken und auf 1 setzen
          var startTag=startDatum.getDate();
          var zielTag=zielDatum.getDate();
          startDatum.setDate(1);
          zielDatum.setDate(1);

          // Monate
          if(startDatum<zielDatum) {
            while(startDatum<zielDatum) {
              if(startDatum.setMonth(startDatum.getMonth()+1)<=zielDatum) monate++;
            }
            startDatum.setMonth(startDatum.getMonth()-1);
          }

          // Tatsächlichen Start- und Ziel-Tag berücksichtigen
          if(startDatum.getMonth()==zielDatum.getMonth()) {
            if(startTag<=zielTag) startDatum.setDate(startTag);
            else {
              monate--;
              tage=restTage+1;
            }
          }
          else {
            startDatum.setMonth(startDatum.getMonth()+1);
            if(startTag>=zielTag) tage=restTage+1;
            else {
              monate++;
              startDatum.setDate(startTag);
            }
          }
          zielDatum.setDate(zielTag);

          // Tage
          restTage=Math.floor((zielDatum-startDatum)/(24*60*60*1000));
          startDatum.setTime(startDatum.getTime()+restTage*24*60*60*1000);
          tage+=restTage;

          // Stunden
          stunden=Math.floor((zielDatum-startDatum)/(60*60*1000));
          startDatum.setTime(startDatum.getTime()+stunden*60*60*1000);

          // Minuten
          minuten=Math.floor((zielDatum-startDatum)/(60*1000));
          startDatum.setTime(startDatum.getTime()+minuten*60*1000);

          // Sekunden
          sekunden=Math.floor((zielDatum-startDatum)/1000);

          // Anzeige formatieren
          (jahre!=1)?jahre=jahre+" Jahre,  ":jahre=jahre+" Jahr,  ";
          (monate!=1)?monate=monate+" Monate,  ":monate=monate+" Monat,  ";
          (tage!=1)?tage=tage+" Tage,  ":tage=tage+" Tag,  ";
          (stunden!=1)?stunden=stunden+" Stunden,  ":stunden=stunden+" Stunde,  ";
          (minuten!=1)?minuten=minuten+" Minuten  und  ":minuten=minuten+" Minute  und  ";
          if(sekunden<10) sekunden="0"+sekunden;
          (sekunden!=1)?sekunden=sekunden+" Sekunden":sekunden=sekunden+" Sekunde";

          document.countdownform.countdowninput.value=
              tage+stunden+minuten+sekunden;

          setTimeout('countdown()',200);
        }
        // Anderenfalls alles auf Null setzen
        else document.countdownform.countdowninput.value=
            "0 Jahre,  0 Monate,  0 Tage,  0 Stunden,  0 Minuten  und  00 Sekunden";
      }
