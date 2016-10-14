<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Blogs</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Nueva entrada</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Admin Dashboard
    <small>statistics, charts, recent events and reports</small>
</h1>
<!-- END PAGE TITLE-->
{!! Form:: hidden('delete', csrf_token(), ['id' => 'token', 'class' => 'form-control']) !!}
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row full-height-content full-height-content-scrollable">
   <div class="col-md-12">
     <div class="full-height-content-body">
       <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject bold uppercase"></span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
              <div class="row">
                <div class="col-md-9">
                  <div class="portlet light bordered">
                      <div class="portlet-title">
                          <div class="caption font-red-intense">
                              <i class="icon-speech font-red-intense"></i>
                              <span class="caption-subject bold uppercase"> Añadir nueva entrada</span>
                          </div>
                          <div class="tools">
                              <a href="" class="collapse" data-original-title="" title=""> </a>
                              <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                              <a href="" class="reload" data-original-title="" title=""> </a>
                              <a href="" class="fullscreen" data-original-title="" title=""> </a>
                          </div>
                      </div>
                      <div class="portlet-body">
                          <div id="context2" data-toggle="context" data-target="#context-menu">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Titulo
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-12">
                                        {!! Form:: text('titleBlog', null, ['class' => 'form-control', 'id' => 'titleBlog']) !!}
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="portlet-body form">
                                    <form class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group last">
                                                <div class="col-md-12">
                                                    <div name="summernote" id="summernote_1"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="portlet light bordered">
                      <div class="portlet-title">
                          <div class="caption font-red-intense">
                              <i class="icon-speech font-red-intense"></i>
                              <span class="caption-subject bold uppercase"> Imagen Destacada</span>
                          </div>
                          <div class="tools">
                              <a href="" class="collapse" data-original-title="" title=""> </a>
                              <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                              <a href="" class="reload" data-original-title="" title=""> </a>
                              <a href="" class="fullscreen" data-original-title="" title=""> </a>
                          </div>
                      </div>
                      <div class="portlet-body">
                          <div id="context2" data-toggle="context" data-target="#context-menu">
                              <div class="row">
                                <div class="col-md-12">
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
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="portlet light bordered">
                      <div class="portlet-title">
                          <div class="caption font-red-intense">
                              <i class="icon-speech font-red-intense"></i>
                              <span class="caption-subject bold uppercase"> Publicar</span>
                          </div>
                          <div class="tools">
                              <a href="" class="collapse" data-original-title="" title=""> </a>
                              <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                              <a href="" class="reload" data-original-title="" title=""> </a>
                              <a href="" class="fullscreen" data-original-title="" title=""> </a>
                          </div>
                      </div>
                      <div class="portlet-body">
                          <div id="context2" data-toggle="context" data-target="#context-menu">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1"><b>Estado</b></label>
                                      <div class="col-md-12">
                                          <select id="selectState" class="form-control" name="delivery" aria-required="true" aria-invalid="false" aria-describedby="delivery-error">

                                          </select><span id="delivery-error" class="help-block help-block-error"></span>
                                          <div class="form-control-focus"> </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1"><b>Visibilidad</b></label>
                                      <div class="col-md-12">
                                          <select id="selectVisible" class="form-control" name="delivery" aria-required="true" aria-invalid="false" aria-describedby="delivery-error">

                                          </select><span id="delivery-error" class="help-block help-block-error"></span>
                                          <div class="form-control-focus"> </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-12 col-md-offset-3"><br>
                                  <div class="btn-group">
                                      <button class="btn green btn-md btn-outline dropdown-toggle" data-toggle="dropdown">Acciòn
                                          <i class="fa fa-angle-down"></i>
                                      </button>
                                      <ul class="dropdown-menu pull-right">
                                          <li>
                                              <a id="save" href="javascript:;">
                                                  <i class="fa fa-print"></i> Guardar </a>
                                          </li>
                                          <li>
                                              <a href="javascript:;">
                                                  <i class="fa fa-file-pdf-o"></i> Vista previa </a>
                                          </li>
                                          <li>
                                              <a href="javascript:;">
                                                  <i class="fa fa-file-excel-o"></i> Publicar </a>
                                          </li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="portlet light bordered">
                      <div class="portlet-title">
                          <div class="caption font-red-intense">
                              <i class="icon-speech font-red-intense"></i>
                              <span class="caption-subject bold uppercase"> Categoria</span>
                          </div>
                          <div class="tools">
                              <a href="" class="collapse" data-original-title="" title=""> </a>
                              <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                              <a href="" class="reload" data-original-title="" title=""> </a>
                              <a href="" class="fullscreen" data-original-title="" title=""> </a>
                          </div>
                      </div>
                      <div class="portlet-body">
                          <div id="context2" data-toggle="context" data-target="#context-menu">
                              <div class="row" id="target">
                                  <div class="col-md-12">
                                     <div id="checkboxlist" class="md-checkbox-list">
                                     </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="portlet light bordered">
                      <div class="portlet-title">
                          <div class="caption font-red-intense">
                              <i class="icon-speech font-red-intense"></i>
                              <span class="caption-subject bold uppercase"> Etiquetas</span>
                          </div>
                          <div class="tools">
                              <a href="" class="collapse" data-original-title="" title=""> </a>
                              <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                              <a href="" class="reload" data-original-title="" title=""> </a>
                              <a href="" class="fullscreen" data-original-title="" title=""> </a>
                          </div>
                      </div>
                      <div class="portlet-body">
                          <div id="context2" data-toggle="context" data-target="#context-menu">
                              <div class="row">
                                <div class="col-md-12">
                                      <input type="text" placeholder="Tag" class="form-control" id="state_tagsinput_city">
                                    <div class="margin-top-10">
                                        <input type="text" style="border:1px solid #ffffff" class="form-control" style="" value="" id="state_tagsinput">
                                    </div>
                                    <div class="margin-top-10">
                                        <a href="javascript:;" class="btn red" id="state_tagsinput_add">Añadir tag</a>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
<!-- END EXAMPLE TABLE PORTLET-->
     </div>
   </div>
</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->
<script src="{{ asset('assets/admin/js/main/addentries.js') }}" type="text/javascript"></script>
<script type="text/javascript">
  Layout.initContent();
</script>
