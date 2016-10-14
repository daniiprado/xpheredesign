function logout(){
  var route = "/xpheredesign/public/logout";
  $.get(route, function(res){
      if(res.message == 'true'){
        window.location.href = "/xpheredesign/public/login";
      }
  }).always(function() {

  });
}
