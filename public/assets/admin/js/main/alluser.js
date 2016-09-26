$(document).ready(function(){
  load();
});

/*Muestra el usuario a modificar*/
function update(btn){
  var value = btn.id;
  var id = value.substring(3);

  var route = "/xpheredesign/public/updateuser/"+id+"/";
  var token = $("#token").val();
  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data: {user: id},

    succes: function(data, textStatus, jqXHR){

    },
    error: function(msj){

    }
  }).done(function( data, textStatus, jqXHR ) {
      console.log(data.mensage);
  }).fail( function( jqXHR ) {
      /*Error de campos*/
      alert('error');
  });

}

/*Elimina el usuario*/
function remove(btn){
  var value = btn.id;
  var id = value.substring(4);

  var route = "/xpheredesign/public/deleteuser/"+id+"/";
  var token = $("#token").val();
  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data: {user: id},

    succes: function(data, textStatus, jqXHR){

    },
    error: function(msj){

    }
  }).done(function( data, textStatus, jqXHR ) {
      console.log(data.mensage);
  }).fail( function( jqXHR ) {
      /*Error de campos*/
      alert('error');
  });


}

/*Carga la tabla de todos los usuarios*/
function load(){
  var tblDatos = $("#tblUser");
  var route = "/xpheredesign/public/alluser/all";
  $("#tblUser").empty();

	$.get(route, function(res){
		$(res).each(function(key,value){
      var action = "<div class='btn-group pull-right'>";
          action += "<button class='btn green btn-xs btn-outline dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>Opciones";
          action += "<i class='fa fa-angle-down'></i>";
          action += "</button>";
          action += "<ul class='dropdown-menu pull-right'>";
          action += "<li>";
          action += "<a onclick= 'update(this)' id=mod"+value.id+">";
          action += "<i class='fa fa-print'></i> Modificar </a>";
          action += "</li>";
          action += "<li>";
          action += "<a onclick= 'remove(this)' id=elim"+value.id+">";
          action += "<i class='fa fa-print'></i> Eliminar </a>";
          action += "</li>";
          action += "</ul>";
          action += "</div>";


      var data = "<tr>";
          data += "<th></th>";
          data += "<td>"+value.name+"</td>";
          data += "<td>"+value.user_lastname+"</td>";
          data += "<td>"+value.email+"</td>";
          data += "<td>"+value.type_name+"</td>";
          data += "<td>"+action+"</td>";
          data += "</tr>";

        tblDatos.append(data);
		});
	}).always(function() {
      TableDatatablesResponsive.init();
  });
}
