<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Usuario</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Perfil</span>
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
      <!-- BEGIN PROFILE SIDEBAR -->
      <div class="profile-sidebar">
          <!-- PORTLET MAIN -->
          <div class="portlet light profile-sidebar-portlet">
              <!-- SIDEBAR USERPIC -->
              <div class="profile-userpic">
                  <img id="userimage1" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" class="img-responsive" alt=""> </div>
              <!-- END SIDEBAR USERPIC -->
              <!-- SIDEBAR USER TITLE -->
              <div class="profile-usertitle">
                  <div id="divname" class="profile-usertitle-name"></div>
                  <div id="divtype" class="profile-usertitle-job"> Developer </div>
              </div>
              <!-- END SIDEBAR USER TITLE -->
              <!-- SIDEBAR MENU -->
              <div class="profile-usermenu">
                  <ul class="nav">

                  </ul>
              </div>
              <!-- END MENU -->
          </div>
          <!-- END PORTLET MAIN -->
          <!-- PORTLET MAIN -->
          <div class="portlet light ">
              <!-- STAT -->
              <div class="row list-separated profile-stat">
                  <div class="col-md-4 col-sm-4 col-xs-6">
                      <div class="uppercase profile-stat-title"> 37 </div>
                      <div class="uppercase profile-stat-text"> Projects </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-6">
                      <div class="uppercase profile-stat-title"> 51 </div>
                      <div class="uppercase profile-stat-text"> Tasks </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-6">
                      <div class="uppercase profile-stat-title"> 61 </div>
                      <div class="uppercase profile-stat-text"> Uploads </div>
                  </div>
              </div>
              <!-- END STAT -->
              <div>
                  <h4 class="profile-desc-title">Sobre Marcus Doe</h4>
                  <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                  <div class="margin-top-20 profile-desc-link">
                      <i class="fa fa-globe"></i>
                      <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                  </div>
              </div>
          </div>
          <!-- END PORTLET MAIN -->
      </div>
      <!-- END BEGIN PROFILE SIDEBAR -->
      <!-- BEGIN PROFILE CONTENT -->
      <div class="profile-content">
        {!! Form:: hidden('update', csrf_token(), ['id' => 'token', 'class' => 'form-control']) !!}
          <div class="row">
              <div class="col-md-12">
                  <div class="portlet light ">
                      <div class="portlet-title tabbable-line">
                          <div class="caption caption-md">
                              <i class="icon-globe theme-font hide"></i>
                              <span class="caption-subject font-blue-madison bold uppercase">Perfil</span>
                          </div>
                          <ul class="nav nav-tabs">
                              <li class="active">
                                  <a href="#tab_1_1" data-toggle="tab">Informacion Personal</a>
                              </li>
                              <li>
                                  <a href="#tab_1_2" data-toggle="tab">Foto</a>
                              </li>
                              <li>
                                  <a href="#tab_1_3" data-toggle="tab">Contraseña</a>
                              </li>
                          </ul>
                      </div>
                      <div class="portlet-body">
                          <div class="tab-content">
                              <!-- PERSONAL INFO TAB -->
                              <div class="tab-pane active" id="tab_1_1">
                                {!! Form::open(['url' => '#', 'method' => 'POST', 'role' => 'form', 'id' => 'submit_form', 'files' => true])!!}
                                 {!! Form:: hidden('iduser', csrf_token(), ['id' => 'iduser', 'class' => 'form-control']) !!}
                                      <div class="form-group">
                                          <label class="control-label">Nombre
                                              <span class="required"> * </span>
                                          </label>
                                          {!! Form:: text('name', null, ['class' => 'form-control', 'id' => 'username']) !!}
                                          <span class="help-block"> Escriba su nombre </span>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label">Apellido</label>
                                            {!! Form:: text('apell', null, ['class' => 'form-control', 'id' => 'userapell']) !!}
                                          <span class="help-block"> Escriba su apellido </span>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label">Numero telefonico</label>
                                            {!! Form:: text('phone', null, ['class' => 'form-control', 'id' => 'userphone']) !!}
                                          <span class="help-block"> Escriba su numero telefonico </span>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label">Nombre de usuario</label>
                                            {!! Form:: text('nickname', null, ['class' => 'form-control', 'id' => 'usernickname']) !!}
                                          <span class="help-block"> Escriba su nombre de usuario </span>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label">Correo electronico
                                              <span class="required"> * </span>
                                          </label>
                                            {!! Form:: text('email', null, ['class' => 'form-control', 'id' => 'useremail']) !!}
                                          <span class="help-block"> Escriba su correo electronico </span>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label">Información</label>
                                            {!! Form:: textarea('userdescrip', null, ['class' => 'form-control', 'rows' => '3', 'id' => 'userdescrip']) !!}
                                          <span class="help-block"> Escriba su informacion personal</span>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label">Sitio web</label>
                                            {!! Form:: text('web', null, ['class' => 'form-control', 'id' => 'userweb']) !!}
                                          <span class="help-block"> Escriba su sitio web </span>
                                      </div>
                                      <div class="margiv-top-10">
                                          <a href="javascript:;" class="btn green" id="btn-submit"> Guardar </a>
                                          <a href="javascript:;" class="btn default"> Cancelar </a>
                                      </div>
                                  {!! Form::close() !!}
                              </div>
                              <!-- END PERSONAL INFO TAB -->
                              <!-- CHANGE AVATAR TAB -->
                              <div class="tab-pane" id="tab_1_2">
                                  <form action="#" role="form">
                                      <div class="form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                            <img id="userimage2" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /></div>
                                          <div>
                                              <span class="btn green btn-outline btn-file">
                                                  <span class="fileinput-new"> Seleccionar imagen </span>
                                                  <span class="fileinput-exists"> Cambiar </span>
                                                  <input type="hidden" value="" name="..."><input type="file" id="userfile" name="fileimg"> </span>
                                              <a href="javascript:;" class="btn green fileinput-exists" data-dismiss="fileinput"> Eliminar </a>
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                              </div>
                              <!-- END CHANGE AVATAR TAB -->
                              <!-- CHANGE PASSWORD TAB -->
                              <div class="tab-pane" id="tab_1_3">
                                  {!! Form::open(['url' => '#', 'method' => 'POST', 'role' => 'form', 'id' => 'submit_password', 'files' => true])!!}
                                    <div class="form-group">
                                        <label class="control-label">Contraseña actual
                                            <span class="required"> * </span>
                                        </label>
                                        {!! Form:: password('password', ['class' => 'form-control', 'id' => 'password']) !!}
                                        <span class="help-block"> Escriba su contraseña actual </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Contraseña nueva
                                            <span class="required"> * </span>
                                        </label>
                                          {!! Form:: password('newpassword', ['class' => 'form-control', 'id' => 'newpassword']) !!}
                                        <span class="help-block"> Escriba su nueva contraseña </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Reescriba nueva contraseña
                                            <span class="required"> * </span>
                                        </label>
                                          {!! Form:: password('rnewpassword', ['class' => 'form-control', 'id' => 'rnewpassword']) !!}
                                        <span class="help-block"> Escriba su nueva contraseña  </span>
                                    </div>
                                    <div class="margin-top-10">
                                        <a href="javascript:;" class="btn green" id="btn-password"> Cambiar contraseña </a>
                                        <a href="javascript:;" class="btn default"> Cancelar </a>
                                    </div>
                                  {!! Form::close() !!}
                              </div>
                              <!-- END CHANGE PASSWORD TAB -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- END PROFILE CONTENT -->
  </div>
 </div>
</div>
<div class="clearfix"></div>
<button id="btn-alertprofile" class="btn btn-success mt-sweetalert" data-title="Usuario Creado Correctamente" data-message="..." data-type="success" data-allow-outside-click="true" data-confirm-button-class="btn-success" style="visibility:hidden;">Icon Success Alert</button>
<!-- END DASHBOARD STATS 1-->
<script src="{{ asset('assets/admin/js/main/profile.js') }}" type="text/javascript"></script>
<script type="text/javascript">
  Layout.initContent();
</script>
