       <!-- Sidebar -->
       <div class="sidebar">
           <!-- Sidebar user panel (optional) -->
           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="<?= base_url() ?>/templates/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                   <a href="#" class="d-block">Masrianto</a>
               </div>
           </div>

           <!-- Sidebar Menu -->
           <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                   <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                   <li class="nav-item has-treeview menu-close">
                       <a href="#" class="nav-link active">
                           <i class="nav-icon fas fa-tachometer-alt"></i>Home
                           <i class="right fas fa-angle-left"></i>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="<?= base_url('pages/pages2') ?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Active Page</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="#" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Inactive Page</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item">
                       <a href="<?= base_url('pages/menu1') ?>" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                               Menu 1
                           </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="<?= base_url('pages/menu2') ?>" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                               Menu 2
                           </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="<?= base_url('pages/menu3') ?>" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                               Menu 3
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
                           <h3 class="m-0 text-dark"><?= $title; ?></h3>
                       </div><!-- /.col -->
                       <div class="col-sm-6">
                           <ol class="breadcrumb float-sm-right">
                               <li class="breadcrumb-item"><a href="<?= base_url('pages') ?>">Home</a></li>
                               <li class="breadcrumb-item active"><?= $title; ?></li>
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
                       <!-- m_home -->