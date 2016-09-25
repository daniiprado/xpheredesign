$(document).ready(function(){
  load();
});
/*Carga la tabla de todos los usuarios*/
function load(){
  var tblDatos = $("#tblTypes");
  var route = "/xpheredesign/public/typesuser/all";
  $("#tblTypes").empty();

	$.get(route, function(res){
		$(res).each(function(key,value){
      var action = "<div class='btn-group pull-right'>";
          action += "<button class='btn green btn-xs btn-outline dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>Tools";
          action += "<i class='fa fa-angle-down'></i>";
          action += "</button>";
          action += "<ul class='dropdown-menu pull-right'>";
          action += "<li>";
          action += "<a href='javascript:;'>";
          action += "<i class='fa fa-print'></i> Print </a>";
          action += "</li>";
          action += "</ul>";
          action += "</div>";

      var data = "<tr>";
          data += "<th></th>";
          data += "<td>"+value.type_name+"</td>";
          data += "<td>"+value.type_description+"</td>";
          data += "<td>"+value.created_at+"</td>";
          data += "<td>"+action+"</td>";
          data += "</tr>";

        tblDatos.append(data);

		});
	}).always(function() {
      TableDatatablesResponsive.init();
  });
}
