function check_usercp() 

  {

   if( document.usercp_form.password.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.usercp_form.password.focus();
       return false;
      }


   if( document.usercp_form.password2.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.usercp_form.password2.focus();
       return false;
      }


   if( document.usercp_form.password3.value == "" )

      {
       alert( "Fehler: Passwort fehlt!" );
       document.usercp_form.password3.focus();
       return false;
      }


   if( document.usercp_form.password2.value != document.usercp_form.password3.value )

      {
       alert( "Die Passwörter stimmen nicht überein!" );
       document.usercp_form.password2.focus();
       return false;
      }


 var pass2 = document.usercp_form.password2.value;

   if (pass2.length < 5)

      {
       alert ("Passwort muss mindestens 5 Zeichen lang sein!");
       document.usercp_form.password2.focus();
       return false;
      }

 var pass3 = document.usercp_form.password3.value;

   if (pass3.length < 5)

      {
       alert ("Passwort muss mindestens 5 Zeichen lang sein!");
       document.usercp_form.password3.focus();
       return false;
      }

  }