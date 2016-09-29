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
