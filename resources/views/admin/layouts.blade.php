<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{config('app.name')}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('cmc/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('cmc/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('cmc/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('cmc/plugins/toastr/toastr.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('cmc/dist/css/adminlte.min.css') }}">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          
          <a href="" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('cmc/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      @if( Auth('admin')->user())
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{  Auth('admin')->user()->cover }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> 
            {{ Auth('admin')->user()->name }}  
        </div>
      </div>
      @endif</a>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                @if( Auth('admin')->user())
                {{ Auth('admin')->user()->name }}
                @endif
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          </li>
          @can('index-hospitals')
             {{-- Hospitals --}}
            <li class="nav-item">
              <a href="{{route('hosptials.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Hospitals
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
          @endcan
          @can('index-blogs')
            {{-- Blogs --}}
            <li class="nav-item">
              <a href="{{route('blogs.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Blogs
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            @endcan
            @can('index-sections')
            <li class="nav-item">
              <a href="{{route('sections.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Sections
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            @endcan
          @can('index-majors')
           {{-- Major --}}
            <li class="nav-item">
            <a href="{{route('majors.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Major
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
            </li>
          @endcan          
          @can('index-doctors')
             {{-- Doctor --}}
            <li class="nav-item">
              <a href="{{route('doctors.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th    "></i>
                  <p>Doctor
                      <span class="right badge badge-danger">New</span>
                  </p>
              </a>
            </li>
          @endcan
          @can('index-uesrs')
            <li class="nav-item">
              <a href="{{ route('uesrs.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Uesr
                      <span class="right badge badge-danger">New</span>
                  </p>
              </a>
            </li>
          @endcan
          @can('index-conditions')
            <li class="nav-item">
              <a href="{{ route('conditions.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Condition
                      <span class="right badge badge-danger">New</span>
                  </p>
              </a>
            </li>
          @endcan
          @can('index-admins')
            <li class="nav-item">
              <a href="{{ route('admins.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                      Admins
                      <span class="right badge badge-danger">New</span>
                  </p>
              </a>
            </li>
          @endcan
          <li class="nav-item">
            <a href="{{ route('messages.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  messages
                    <span class="right badge badge-danger">show</span>
                </p>
            </a>
          </li>
        </ul>
        @canany(['index-roles', 'index-permissions'])
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Roles&Permission
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
          @endcan
          @can('index-roles')
            <li class="nav-item">
              <a href="{{ route('roles.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                  Roles
                  </p>
              </a>
            </li>
          @endcan
     
          @can('index-permissions')
            <li class="nav-item">
              <a href="{{ route('permissions.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                  Permission  
                  </p>
              </a>
            </li>
          @endcan
        </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Setting
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
         {{-- logout --}}
         <li class="nav-item">
            <a href="{{route('admin.logout')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>logout</p>
            </a>
         </li>
         {{-- change password --}}
         <li class="nav-item">
            <a href="{{route('admin.change-password')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>change password</p>
            </a>
         </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        @yield('content')
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /. -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('cmc/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('cmc/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('cmc/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
<script src="{{asset('cmc/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('cmc/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('cmc/dist/js/adminlte.min.js')}}"></script>
<!-- axios && sweet  -->
<script src="{{ asset('js/axios.js') }}"></script>
<script src="{{ asset('js/sweet.js') }}"></script>
<script src="{{ asset('cmc/plugins/toastr/toastr.min.js') }}"></script> 
@yield('script')
</body>
</html>
