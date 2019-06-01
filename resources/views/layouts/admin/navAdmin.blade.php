<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('adminHome') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>MFA</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>IT TODAY 2019</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/admin/user.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Session('name')}}</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Beranda</span></a></li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Appstoday</span></a></li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Hacktoday</span></a></li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Data Science Competition</span></a></li>
            <li><a href="{{ route('adminLogout') }}"><i class="fa fa-book"></i> <span>Logout</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
