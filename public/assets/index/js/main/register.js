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
        var route = "/xpheredesign/public/registerstore";
        var token = tpj("#token").val();

        tpj.ajax({
          url: route,
          headers: {'X-CSRF-TOKEN': token},
          type: 'POST',
          dataType: 'json',
          data: {user_type_fk: 1,
                 user_nickname: username,
                 user_firstname: name,
                 user_lastname: lastname,
                 email: email,
                 password: password
                },
          succes: function(data, textStatus, jqXHR){
            alert('wii');
          },
          error: function(msj){
            //tpj("#msj").html(msj.responseJSON.genre);
            //tpj('#msj-error').fadeIn();
            alert('error');
          }
        }).done(function( data, textStatus, jqXHR ) {
            if(data.mensaje== 'true'){
              window.location('admin');
            }
        });
      }

  });

});
