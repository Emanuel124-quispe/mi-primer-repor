<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
            
            
            <div class="row">
                <div class="col-sm-4 grid-margin">
                
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                
            </div>
            <div class="col-sm-4 grid-margin">
                
            </div>
    <!-- content-wrapper ends -->
<?php
?>

<body>
<div class="card">
    <div class="card-body">
                    <h4 class="card-title">MODIFICACION DEL USUARIO</h4>
                    <p>
                    <?php foreach ($datos as $fila) { ?>
                    <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" _mstplaceholder="43069" value="<?= $fila->nombre ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" _mstplaceholder="58058" value="<?= $fila->email ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Contraseña</label>
                        <input type="email" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña" _mstplaceholder="58058" value="<?= $fila->contraseña ?>">
                      </div>
                   
                      <input type="submit" id="editar" name="editar" value="ACTUALIZAR" class="btn btn-primary me-2">
                      <a class="btn btn-dark" href="<?=base_url("controlador_usuario/ver3");?>" >Cancelar</a>
                    </form>
                    <?php } ?>
                  </div>

</body>
</html>