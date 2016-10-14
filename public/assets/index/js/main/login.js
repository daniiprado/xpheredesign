var tpj=jQuery;
tpj.noConflict();

tpj(document).ready(function(){

  tpj( "#btn-login" ).click(function() {

      var email = tpj("#login-username").val();
      var password = tpj("#login-password").val();

      var route = "/xpheredesign/public/log";
      var token = tpj("#token").val();

      tpj.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {email: email,
               password: password
              },
        succes: function(data, textStatus, jqXHR){

        },
        error: function(msj){

        }
      }).done(function( data, textStatus, jqXHR ) {
          if(data.message == 'true'){
            /*Contraseña correcta*/
            window.location.href = "/xpheredesign/public/admin";
          }else{
            tpj( '#log-email' ).addClass('has-error');
            tpj( '#log-password' ).addClass('has-error');
          }
      }).fail( function( jqXHR ) {
         /*Error de campos*/
         var error= JSON.parse(jqXHR.responseText)
         if(typeof error.email != 'undefined'){
           tpj( '#log-email' ).addClass('has-error');
         }else{
           tpj( '#log-email' ).removeClass('has-error');
         }
         if(typeof error.password != 'undefined'){
           tpj( '#log-password' ).addClass('has-error');
         }else {
           tpj( '#log-password' ).removeClass('has-error');
         }
      }).always(function() {
         /*Peticion completada*/
      });

   });

});
