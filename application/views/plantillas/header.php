<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>tienda_inf</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url("assets")?>/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url("assets")?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url("assets")?>/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?=base_url("assets")?>/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?=base_url("assets")?>/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?=base_url("assets")?>/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="<?=base_url("assets")?>/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url("assets")?>/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url("assets")?>/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url("assets")?>/images/favicon.png" />
    </head>
<body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
       
        <ul class="nav">
          
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=base_url("controlador_principal/index");?>">
              <span class="menu-icon">
                <i class="fa fa-drivers-license-o"></i>
              </span>
              <span class="menu-title">tienda</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="fa fa-linode"></i>
              </span>
              <span class="menu-title">productos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=base_url("controlador_producto/ver");?>">listado de productos</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('controlador_producto/ver_view_new_product')?>">registrar productos</a></li>
              </ul>
            </div>
          </li>
            <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Fabricantes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">  <a class="nav-link" href="<?=base_url("controlador_fabricante/ver2");?>"> listado de fabricantes</a></li>
                <li class="nav-item">  <a class="nav-link" href="<?=base_url('controlador_fabricante/ver_view_new_maker')?>">registrar fabricantes</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth-a" aria-expanded="false" aria-controls="auth-a">
              <span class="menu-icon">
                <i class="fa fa-address-book"></i>
              </span>
              <span class="menu-title">Usuarios</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth-a">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">  <a class="nav-link" href="<?=base_url("controlador_usuario/ver3");?>"> listado de Usuarios</a></li>
                <li class="nav-item">  <a class="nav-link" href="<?=base_url('controlador_usuario/verF')?>">registrar Usuarios</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
           
            <ul class="navbar-nav navbar-nav-right">
              
            
           
          
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="<?= base_url("fotos/").$this->session->userdata('foto')?>" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php print_r($this->session->userdata("nombre")) ?> </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Cerrar Sesion</h6>
                  <div class="dropdown-divider"></div>
                 
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item"href="<?=base_url()?>controlador_principal/logout">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                    <p class="preview-subject mb-1">salir</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>