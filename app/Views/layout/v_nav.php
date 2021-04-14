<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url() ?>/template/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Ngakan Krisna</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/pages/about') ?>" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        About
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/pages/contact') ?>" class="nav-link">
                    <i class="nav-icon fas fa fa-address-book"></i>
                    <p>
                        Contact
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/turnamen" class="nav-link">
                    <i class="nav-icon fas fa-gamepad"></i>
                    <p>
                        Turnamen
                    </p>
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
                    <h1 class="m-0 text-dark"><?= $title; ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- /.col-md-6 -->