<!DOCTYPE html>
<html dir="ltr" lang="es-CO">
  <!-- Document Head Start
  ============================================= -->
  <head>
    @section('head')
      @include('index.partials.head')
    @show
  </head>
  <!-- Document Head Ends
  ============================================= -->
  <body class="stretched">
    <!-- Document Wrapper Start
    ============================================= -->
    <div id="wrapper" class="clearfix">
      @include('index.partials.header')
      @yield('slider')
      
      <!-- Content
      ============================================= -->
      <section id="content">
        <div class="content-wrap">

          @yield('content')

        </div>

      </section><!-- #content end -->
      <!-- Footer
      ============================================= -->
      <footer id="footer" class="dark">
        @include('index.partials.footer')
      </footer><!-- #footer end -->

    </div><!-- #wrapper end -->
    @section('scripts')
      @include('index.partials.scripts')
    @show
  </body>
</html>
