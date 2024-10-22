<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Usuarios</title>
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
    </head><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h2 class="card-title text-start mb-3">SISTEMA DE TIENDA</h2>
                <h4 class="card-title text-start mb-3">Ingrese Correo y Contraseña</h4>
                <form method="post" action="<?=base_url("controlador_principal/verificarUsuario")?>">
                  <div class="form-group">
                    <label>Correo Electronico *</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">@</span>
                        </div>
                        <input type="text" name="usuario" class="form-control" placeholder="Ejemplo@gmail.com" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Contraseña *</label>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div>
                      <p class="sign-up">copy Emanuel_quispe</p>
                  </div>
                  
                  <div class="text-center d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Iniciar Sesion</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>