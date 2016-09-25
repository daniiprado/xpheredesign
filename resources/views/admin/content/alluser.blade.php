<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Usuario</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Todos los usuarios</span>
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
        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
            <thead>
                <tr>
                    <th class="all"></th>
                    <th class="min-phone-l">Nombre</th>
                    <th class="min-tablet">Apellido</th>
                    <th class="desktop">Correo Electrónico</th>
                    <th class="none">Rol</th>
                    <th class="all">Accion</th>
                </tr>
            </thead>
            <tbody id="tblUser">
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
     </div>
   <div>
</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->

<script type="text/javascript">
  Layout.initContent();
</script>


<script src="{{ asset('assets/admin/js/main/alluser.js') }}" type="text/javascript"></script>
