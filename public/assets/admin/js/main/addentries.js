var ComponentsEditors = function () {

    var handleWysihtml5 = function () {
        if (!jQuery().wysihtml5) {
            return;
        }

        if ($('.wysihtml5').size() > 0) {
            $('.wysihtml5').wysihtml5({
                "stylesheets": ["../assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
            });
        }
    }

    var handleSummernote = function () {
        $('#summernote_1').summernote({height: 600});
        //API:
        //var sHTML = $('#summernote_1').code(); // get code
        //$('#summernote_1').destroy(); // destroy
    }

    return {
        //main function to initiate the module
        init: function () {
            handleWysihtml5();
            handleSummernote();
        }
    };

}();

var ComponentsBootstrapTagsinput = function() {

    var tagBlogs = function() {

        var elt = $('#state_tagsinput');

        elt.tagsinput({
            tagClass: function(item) {
              var random = Math.floor((Math.random() * 5) + 1);
                switch (random) {
                    case 1:
                        return 'label label-primary';
                    case 2:
                        return 'label label-danger label-important';
                    case 3:
                        return 'label label-success';
                    case 4:
                        return 'label label-default';
                    case 5:
                        return 'label label-warning';
                }
            },
            itemValue: 'value'
        });

         $('#state_tagsinput_add').on('click', function(){
            elt.tagsinput('add', {
                "value": $('#state_tagsinput_city').val()
            });
        });
    }

    return {
        //main function to initiate the module
        init: function() {
          tagBlogs();
        }
    };

}();

/*Seleccion categoria no multiple*/
$('input[type="checkbox"]').bind('click',function() {
  $('input[type="checkbox"]').not(this).prop("checked", false);
});

jQuery(document).ready(function() {
   load();
   /*Inicializa tags */
   ComponentsBootstrapTagsinput.init();
   /*Inicializa editor*/
   ComponentsEditors.init();
   /*Scroll categoria*/
   var category= $('#target');
   category.css({"height":"150px","overflow":"scroll"});
   category.scroll();
});

$( "#save" ).on( "click", function() {
  var titleBlog= $('#titleBlog').val();
  var contentBlog = $('#summernote_1').summernote('code');

  /*Convierte en arreglo una cadena separada por comas*/
  var tags = $('#state_tagsinput').val().split(",");

  var stateBlog= $('#selectState').val();
  var visibleBlog= $('#selectVisible').val();

  /*Recorro todos los checboxes que este seleccionados (checked)*/
  var categoryBlog = [];
  $.each($("input[name='checkboxes1[]']:checked"), function() {
    categoryBlog.push($(this).val());
  });
});

function load(){
  loadCategory();
  loadPrivate();
  loadState();
}
function loadCategory(){
  var route = "/xpheredesign/public/categoryEntries";
  var checkboxlist = $('#checkboxlist');
  $.get(route, function(res){
    $(res).each(function(key,value){
      var id = value.category_id;
      var name = value.category_name;

      var options = "<div class='md-checkbox'>";
      options += "<input type='checkbox' name='checkboxes1[]'' value='"+id+"' id='checkbox1_"+id+"' class='md-check'>";
      options += "<label for='checkbox1_"+id+"'>";
      options += "<span></span>";
      options += "<span class='check'></span>";
      options += "<span class='box'></span>"+name+"</label>";
      options += "</div>";

      checkboxlist.append(options);
     });
  }).done(function() {

  });
}
function loadPrivate(){
  var route = "/xpheredesign/public/privateEntries";
  var selectlist = $('#selectVisible');
  $.get(route, function(res){
    $(res).each(function(key,value){
      var id = value.privacy_id;
      var name = value.privacy_name;
      var options = "<option value='"+id+"'>"+name+"</option>"
      selectlist.append(options);
     });
  }).done(function() {

  });
}
function loadState(){
  var route = "/xpheredesign/public/stateEntries";
  var selectlist = $('#selectState');
  $.get(route, function(res){
    $(res).each(function(key,value){
      var id = value.state_id;
      var name = value.state_name;
      var options = "<option value='"+id+"'>"+name+"</option>"
      selectlist.append(options);
     });
  }).done(function() {

  });
}
