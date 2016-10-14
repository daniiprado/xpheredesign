$(document).ready(function(){
  load();
});

/*Carga la tabla de todos los usuarios*/
function load(){
  var tblDatos = $("#tblUser");
  var route = "/xpheredesign/public/alluser/all";
  $("#tblUser").empty();

      TableDatatablesResponsive.init();

}
