$(document).ready(function(){
  load();
});
/*Carga la tabla de todos los usuarios*/
function load(){
  var route = "/xpheredesign/public/profile/all";
	$.get(route, function(res){

    $("#divname").html(res.user[0].name);
    $("#divtype").html(res.user[0].type_name);

    if(res.user[0].profile_pic != null){
        $("#userimage1").attr('src', res.user[0].profile_pic);
        $("#userimage2").attr('src', res.user[0].profile_pic);
    }

    $("#iduser").val(res.user[0].id);
    $("#username").val(res.user[0].name);
    $("#userapell").val(res.user[0].user_lastname);
    $("#userphone").val(res.user[0].user_phone);
    $("#usernickname").val(res.user[0].user_nickname);
    $("#useremail").val(res.user[0].email);
    $("#userdescription").val(res.user[0].profile_description);
    $("#userweb").val(res.user[0].user_web);

	}).always(function() {

  });
}

function update(){
  var id = $("#iduser").val();
  var name = $('input:text[id=username]').val();
  var apell = $('input:text[id=userapell]').val();
  var phone = $('input:text[id=userphone]').val();
  var nickname = $('input:text[id=usernikname]').val();
  var email = $('input:text[id=useremail]').val();
  var web = $('input:text[id=userweb]').val();
  var description = $('#userremarks').val();
  /*Imagen*/
  var FileImage =  document.getElementById("userfile");
  var file= FileImage.files[0];

  var formData = new FormData();
  formData.append("name",  name);
  formData.append("user_lastname", apell);
  formData.append("user_phone", phone);
  formData.append("email", email);
  formData.append("user_nickname", nickname);
  formData.append("user_web", web);
  formData.append("profile_description", description);
  formData.append("filename", file);

  var route = "/xpheredesign/public/profile/update/"+id;
  var token = $("#token").val();
  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    cache: false,
    type: 'POST',
    contentType:false,
    data: formData,
    processData:false,

    succes: function(data, textStatus, jqXHR){

    },
    error: function(msj){

    }
  }).done(function( data, textStatus, jqXHR ) {
    /*Activamos el boton de alerta*/
    var alert= $('#btn-alertprofile');
    var route = "profile";
    alert.trigger('click');
    $('.page-content-body').load(route);
  }).fail( function( jqXHR ) {
    /*Error de campos*/
    alert('error');
  });

}
