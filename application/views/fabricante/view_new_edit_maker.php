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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de editar Fabricantes</title>
</head>
<body>
<div class="card">
    <div class="card-body">
                    <h4 class="card-title">Modificacion del Fabricante</h4>
                    <p>
                    <?php foreach ($datos as $fila) { ?>
                    <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Nombre del Fabricante</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= $fila->nombre ?>">
                      </div>
                      <input type="submit" id="editar" name="editar" value="ACTUALIZAR" class="btn btn-primary me-2">
                      <a class="btn btn-dark" href="<?=base_url("controlador_fabricante/ver2");?>" >Cancelar</a>
                      </form>
                      <?php } ?>
     </div>
</body>
</html>