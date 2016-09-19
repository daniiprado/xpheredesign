var tpj=jQuery;
tpj.noConflict();

tpj(document).ready(function(){

  tpj( "#btn-register" ).click(function() {
      var name = tpj("#register-name").val();
      var lastname = tpj("#register-lastname").val();
      var email = tpj("#register-email").val();
      var username = tpj("#register-username").val();
      var password = tpj("#register-password").val();
      var repassword = tpj("#register-repassword").val();

      if(password==repassword){
        var route = "/xpheredesign/public/register";
        var token = tpj("#token").val();

        tpj.ajax({
          url: route,
          headers: {'X-CSRF-TOKEN': token},
          type: 'POST',
          dataType: 'json',
          data: {user_type_fk: 1,
                 user_nickname: username,
                 name: name,
                 user_lastname: lastname,
                 email: email,
                 password: password
                },
          succes: function(data, textStatus, jqXHR){

          },
          error: function(msj){

          }
        }).done(function( data, textStatus, jqXHR ) {
            if(data.mensaje== 'true'){
              window.location.href = "/xpheredesign/public/login";
            }
        }).fail( function( jqXHR ) {
          /*Error de campos*/
          alert('error');
        });
      }

  });

});
