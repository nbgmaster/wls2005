function check_usercp() 

  {

   if( document.usercp_form.password.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.usercp_form.password.focus();
       return false;
      }


   if( document.usercp_form.email.value == "" )

      {
       alert( "Fehler: Emailadresse fehlt!" );
       document.usercp_form.email.focus();
       return false;
      }


   if( document.usercp_form.email2.value == "" )

      {
       alert( "Fehler: Emailadresse zweimal eingeben!" );
       document.usercp_form.email2.focus();
       return false;
      }


   if( document.usercp_form.email.value != document.usercp_form.email2.value )

      {
       alert( "Die Emailadressen stimmen nicht überein!" );
       document.usercp_form.email.focus();
       return false;
      }



   var mail   = document.usercp_form.email.value;

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
       document.usercp_form.email.focus();
       return false;
      }



  }