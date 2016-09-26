<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Usuario</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Agregar nuevo</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Admin Dashboard
    <small>statistics, charts, recent events and reports</small>
</h1>
<!-- END PAGE TITLE-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row full-height-content full-height-content-scrollable">
   <div class="col-md-12">
     <div class="full-height-content-body">

       <!-- BEGIN PROFILE CONTENT -->
       <div class="profile-content">
           <div class="row">
             <!-- BEGIN EXAMPLE TABLE PORTLET-->
                  <div class="portlet-body">
                    <div class="col-md-12">
                        <div class="portlet light bordered" id="form_wizard_1">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-red"></i>
                                    <span class="caption-subject font-red bold uppercase">
                                        <span class="step-title"></span>
                                    </span>
                                </div>
                            </div>
                            {!! Form:: hidden('register', csrf_token(), ['id' => 'token', 'class' => 'form-control']) !!}
                            <div class="portlet-body form">
                              {!! Form::open(['url' => '#', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'submit_form', 'files' => true])!!}
                                    <div class="form-wizard">
                                        <div class="form-body">
                                            <ul class="nav nav-pills nav-justified steps">
                                                <li>
                                                    <a href="#tab1" data-toggle="tab" class="step">
                                                        <span class="number"> 1 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Informacion Personal  </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number"> 2 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Informacion Adicional </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab3" data-toggle="tab" class="step active">
                                                        <span class="number"> 3 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Foto de Perfil </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab4" data-toggle="tab" class="step">
                                                        <span class="number"> 4 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Confirmación </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div id="bar" class="progress progress-striped" role="progressbar">
                                                <div class="progress-bar progress-bar-success"> </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="alert alert-danger display-none">
                                                    <button class="close" data-dismiss="alert"></button> Usted tiene algunos errores. Por favor , consulte más abajo . </div>
                                                <div class="alert alert-success display-none">
                                                    <button class="close" data-dismiss="alert"></button> Su forma de validación es exitosa! </div>
                                                <div class="tab-pane active" id="tab1">
                                                    <h3 class="block">Ingresar datos de su cuenta</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Nombre
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            {!! Form:: text('name', null, ['class' => 'form-control', 'id' => 'username']) !!}
                                                            <span class="help-block"> Escriba su nombre </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Apellido
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            {!! Form:: text('apell', null, ['class' => 'form-control', 'id' => 'userapell']) !!}
                                                            <span class="help-block"> Escriba sus apellidos </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Numero telefonico
                                                            <span class="">  </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            {!! Form:: text('phone', null, ['class' => 'form-control', 'id' => 'userphone']) !!}
                                                            <span class="help-block"> Escriba su numero telefonico</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Contraseña
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            {!! Form:: password('password', ['class' => 'form-control', 'id' => 'submit_form_password']) !!}
                                                            <span class="help-block"> Escriba su contraseña.. </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Confirmar contraseña
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            {!! Form:: password('rpassword', ['class' => 'form-control']) !!}
                                                            <span class="help-block"> Confirmar su contraseña </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Correo
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            {!! Form:: text('email', null, ['class' => 'form-control', 'id' => 'useremail']) !!}
                                                            <span class="help-block"> Escriba su dirección de correo electrónico</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <h3 class="block">Proporcionar datos de su perfil</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Nombre de usuario
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            {!! Form:: text('nikname', null, ['class' => 'form-control', 'id' => 'usernikname']) !!}
                                                            <span class="help-block"> Escriba su nombre de usuario </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Tipo de usuario</label>
                                                        <div class="col-md-4">
                                                            <select name="typeuser" id="country_list" class="form-control">
                                                                <option value=""></option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Sitio web
                                                            <span class="">  </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            {!! Form:: text('web', null, ['class' => 'form-control', 'id' => 'userweb']) !!}
                                                            <span class="help-block"> Escriba su sitio web </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Descripción</label>
                                                        <div class="col-md-4">
                                                            {!! Form:: textarea('remarks', null, ['class' => 'form-control', 'rows' => '3', 'id' => 'userremarks']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <h3 class="block">Provide your billing and credit card details</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Foto de perfil
                                                            <span class="">  </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                                                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /></div>
                                                                <div>
                                                                    <span class="btn green btn-outline btn-file">
                                                                        <span class="fileinput-new"> Seleccionar imagen </span>
                                                                        <span class="fileinput-exists"> Cambiar </span>
                                                                        <input type="hidden" value="" name="imageprofile" id="fileimage"><input type="file" name="filename" id="userfile" /></span>
                                                                    <a href="javascript:;" class="btn green fileinput-exists" data-dismiss="fileinput"> Eliminar </a>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <span class="help-block"> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab4">
                                                    <h3 class="block">Confirme su cuenta</h3>
                                                    <h4 class="form-section">Informacion Personal</h4>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Nombre:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="name"> </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Apellido:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="apell"> </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Numero telefonico:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="phone"> </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Correo electronico:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="email"> </p>
                                                        </div>
                                                    </div>
                                                    <h4 class="form-section">Informacion Adicional</h4>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Nombre de usuario:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="nikname"> </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Tipo de usuario:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="typeuser"> </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Sitio web:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="web"> </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Descripción:</label>
                                                        <div class="col-md-4">
                                                            <p class="form-control-static" data-display="remarks"> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <a href="javascript:;" class="btn default button-previous">
                                                        <i class="fa fa-angle-left"></i> Atras </a>
                                                    <a href="javascript:;" class="btn btn-outline green button-next"> Continuar
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn green button-submit" id="btn_submit"> Enviar
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                  </div>
              <!-- END EXAMPLE TABLE PORTLET-->
           </div>
       </div>
       <!-- END PROFILE CONTENT -->
     </div>
   <div>
</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->

<script type="text/javascript">
  FormWizard.init();
  Layout.initContent();
</script>
