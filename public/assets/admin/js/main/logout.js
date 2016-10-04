function logout(){
  var route = "/logout";
  $.get(route, function(res){
      if(res.message == 'true'){
        window.location.href = "/login";
      }
  }).always(function() {

  });
}
