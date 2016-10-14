<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Blogs</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Todas las entradas</span>
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
                  <div class="tabbable-line ">
                      <ul class="nav nav-tabs ">
                          <li class="">
                              <a href="#tab_5_1" data-toggle="tab" aria-expanded="true"> Todos </a>
                          </li>
                          <li class="active">
                              <a href="#tab_5_2" data-toggle="tab" aria-expanded="false"> Publicadas </a>
                          </li>
                          <li class="">
                              <a href="#tab_5_3" data-toggle="tab" aria-expanded="false"> Borradores </a>
                          </li>
                          <li class="">
                              <a href="#tab_5_4" data-toggle="tab" aria-expanded="false"> Papelera </a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane" id="tab_5_1">
                              <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                  <thead>
                                      <tr>
                                          <th class="all"></th>
                                          <th class="min-phone-l">Titulo</th>
                                          <th class="min-tablet">Autor</th>
                                          <th class="desktop">Categoria</th>
                                          <th class="none">Etiquetas</th>
                                          <th class="all">Comentarios</th>
                                          <th class="all">Fecha</th>
                                          <th class="all">Acciòn</th>
                                      </tr>
                                  </thead>
                                  <tbody id="tblBlogs">
                                  </tbody>
                              </table>
                          </div>
                          <div class="tab-pane active" id="tab_5_2">

                          </div>
                          <div class="tab-pane" id="tab_5_3">

                          </div>
                          <div class="tab-pane" id="tab_5_4">

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
<script src="{{ asset('assets/admin/js/main/allentries.js') }}" type="text/javascript"></script>
<script type="text/javascript">
  Layout.initContent();
</script>
