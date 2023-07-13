<!DOCTYPE html>
<html lang="en">
@include('layouts.backend.header_scripts')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
 @include('layouts.backend.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layouts.backend.sidebar')

  <!-- Content Wrapper. Contains page content -->
 @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
@include('layouts.backend.footer')
  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->

@include('layouts.backend.footer_scripts')
@stack('scripts')
</body>
</html>
