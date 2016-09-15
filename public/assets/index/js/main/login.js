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
          if(data.mensaje== 'true'){
            window.location.href = "/xpheredesign/public/admin";
          }else{

          }
      });

   });

});
