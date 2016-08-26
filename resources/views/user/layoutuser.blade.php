<!DOCTYPE html>
<html>
@section('htmlhead')
    @include('layouts.htmlhead')
@show
  <body class="hold-transition skin-blue sidebar-mini">
        @include('layouts/header-main')
      <!-- Left side column. contains the logo and sidebar -->
      <aside>
        <!-- sidebar: style can be found in sidebar.less -->
        @include('user/sidebar-user')
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
        @yield('content')
      </div><!-- /.content-wrapper -->
    </body>
</html>