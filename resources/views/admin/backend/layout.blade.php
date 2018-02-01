<!DOCTYPE html>
<html>
  <head>
    @include('admin.backend.partials.head')
  </head>
  <body>
    <!--Begin Header-->
      @include('admin.backend.partials.header')
    <!--End Header-->
    <section class="container-fluid">
      @yield('container')
    </section>
    <!--Begin footer-->
    @include('admin.backend.partials.footer')
    <!--End footer-->

    <!--Begin scripts-->
    @include('admin.backend.partials.scripts')
    <!--Begin scripts-->
  </body>
</html>
