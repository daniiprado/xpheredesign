<!DOCTYPE html>
<!--
Template Name: XphereDesign - Administradot
Version: 4.7
Author: Miguel Ortiz / Daniel Prado
Website: http://xpheredesign.com/
Contact: 	xpheredesign@xpheredesign.com
Like: https://www.facebook.com/XphereDesign-199277760442833/?fref=ts
License: XphereDesign
-->
<html lang="en">
<!-- BEGIN HEAD /INICIO ENCABEZADO -->
<head>
  @section('head')
    @include('admin.partials.head')
  @show
</head>
<!-- END HEAD / INICIO ENCABEZADO -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
    <div class="page-wrapper">
        @include('admin.partials.topbar')
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            @include('admin.partials.sidebar')
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    @include('admin.partials.themepanel')
                  <div class="page-content-body">
                    @section('content')
                    @show
                  </div>
                </div>
                <!-- END CONTENT BODY -->
                @include('admin.partials.quicksidebar')
            </div>
            <!-- END CONTAINER -->
            @include('admin.partials.footer')
        </div>
        <!-- END CONTAINER -->
        @include('admin.partials.quicknav')

        <!-- BEGIN CONTENT SCRIPT -->
        @section('scripts')
          @include('admin.partials.script')
        @show
        <!-- END CONTENT SRIPT -->
</body>

</html>
