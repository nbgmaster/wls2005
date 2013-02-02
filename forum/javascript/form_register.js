function check_user() 

  {

   if( document.reg_form.nickname.value == "" )

      {
       alert( "Fehler: Nickname fehlt!" );
       document.reg_form.nickname.focus();
       return false;
      }


   if( document.reg_form.email.value == "" )

      {
       alert( "Fehler: Email fehlt!" );
       document.reg_form.email.focus();
       return false;
      }


   var mail   = document.reg_form.email.value;

   var mailOK = true;

   if (!mail)
   mailOK = false;

   if (mail.indexOf ("@") == -1)
   mailOK = false;

   if (mail.indexOf ("@") == 0 || 
   mail.lastIndexOf ("@") == mail.length - 1)
   mailOK = false;

   if (mail.indexOf ("@") != mail.lastIndexOf ("@"))
   mailOK = false;

   if (!mailOK) 

      {
       alert ("Die E-Mail-Adresse ist ungültig!");
       document.reg_form.email.focus();
       return false;
      }


   if( document.reg_form.password.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.reg_form.password.focus();
       return false;
      }

 
   if( document.reg_form.password2.value == "" )

      {
       alert( "Fehler: Passwort zweimal eingeben!" );
       document.reg_form.password2.focus();
       return false;
      }


   var pass = document.reg_form.password.value;

   if (pass.length < 5)

      {
       alert ("Passwort muss mindestens 5 Zeichen lang sein!");
       document.reg_form.password.focus();
       return false;
      }


   var pass2 = document.reg_form.password2.value;

   if (pass2.length < 5) 

      {
       alert ("Passwort muss mindestens 5 Zeichen lang sein!");
       document.reg_form.password2.focus();
       return false; 
      }


   if( document.reg_form.password.value != document.reg_form.password2.value )

      {
       alert( "Die Passwörter stimmen nicht überein!" );
       document.reg_form.password.focus();
       return false;
      }

  }


function count()

  {

   var laenge=document.reg_form.misc.value.length;
 
   if (laenge > 200)

      {
       document.reg_form.misc.value=document.reg_form.misc.value.substring(0,200);
      }

  }