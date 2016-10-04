$(document).ready(function(){
  load();
});
/*Carga la tabla de todos los usuarios*/
function load(){
  var route = "/profile/all";
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

  var route = "/profile/update/"+id;
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

var ValidationProfile= function () {


    return {
        //main function to initiate the module
        init: function () {

            function format(state) {
                if (!state.id) return state.text; // optgroup
                return "<img class='flag' src='../../assets/global/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
            }

            $("#country_list").select2({
                placeholder: "Select",
                allowClear: true,
                formatResult: format,
                width: 'auto',
                formatSelection: format,
                escapeMarkup: function (m) {
                    return m;
                }
            });

            var form = $('#submit_form');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate({
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    //account
                    name: {
                        minlength: 5,
                        required: true
                    },
                    apell: {
                        minlength: 5,
                    },
                    phone: {
                        digits: true,
                        minlength: 7,
                        maxlength: 12
                    },
                    email: {
                        email: true,
                        required: true
                    },
                    nickname: {
                        minlength: 5,
                        maxlength: 12
                    },
                    web: {
                        minlength: 5
                    },
                    userdescrip: {
                        minlength: 5
                    },
                    //payment
                    'payment[]': {
                        required: true,
                        minlength: 1
                    }
                },

                messages: { // custom messages for radio buttons and checkboxes
                    'payment[]': {
                        required: "Please select at least one option",
                        minlength: jQuery.validator.format("Please select at least one option")
                    }
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.attr("name") == "gender") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_gender_error");
                    } else if (element.attr("name") == "payment[]") { // for uniform checkboxes, insert the after the given container
                        error.insertAfter("#form_payment_error");
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit
                    success.hide();
                    error.show();
                    App.scrollTo(error, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    if (label.attr("for") == "gender" || label.attr("for") == "payment[]") { // for checkboxes and radio buttons, no need to show OK icon
                        label
                            .closest('.form-group').removeClass('has-error').addClass('has-success');
                        label.remove(); // remove error label here
                    } else { // display success icon for other inputs
                        label
                            .addClass('valid') // mark the current input as valid and display OK icon
                        .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    }
                },

                submitHandler: function (form) {
                    success.show();
                    error.hide();
                    //form[0].submit();
                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
                }

            });
            $('#btn-submit').click(function () {
                if (form.valid() == false) {
                    return false;
                }else{
                    update();
                }
            });


            //apply validation on select2 dropdown value change, this only needed for chosen dropdown integration.
            $('#country_list', form).change(function () {
                form.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });




        }

    };

}();

var ValidationPassword = function () {


    return {
        //main function to initiate the module
        init: function () {

            function format(state) {
                if (!state.id) return state.text; // optgroup
                return "<img class='flag' src='../../assets/global/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
            }

            var form = $('#submit_password');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate({
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    //account
                    password: {
                        minlength: 5,
                        required: true
                    },
                    newpassword: {
                        minlength: 5,
                        required: true
                    },
                    rnewpassword: {
                        minlength: 5,
                        required: true,
                        equalTo: "#newpassword"
                    }
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    if (element.attr("name") == "gender") { // for uniform radio buttons, insert the after the given container
                        error.insertAfter("#form_gender_error");
                    } else if (element.attr("name") == "payment[]") { // for uniform checkboxes, insert the after the given container
                        error.insertAfter("#form_payment_error");
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit
                    success.hide();
                    error.show();
                    App.scrollTo(error, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    if (label.attr("for") == "gender" || label.attr("for") == "payment[]") { // for checkboxes and radio buttons, no need to show OK icon
                        label
                            .closest('.form-group').removeClass('has-error').addClass('has-success');
                        label.remove(); // remove error label here
                    } else { // display success icon for other inputs
                        label
                            .addClass('valid') // mark the current input as valid and display OK icon
                        .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    }
                },

                submitHandler: function (form) {
                    success.show();
                    error.hide();
                    //form[0].submit();
                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
                }

            });
            $('#btn-password').click(function () {
                if (form.valid() == false) {
                    return false;
                }else{

                }
            });

        }

    };

}();


jQuery(document).ready(function() {
    ValidationProfile.init();
    ValidationPassword.init();
});
