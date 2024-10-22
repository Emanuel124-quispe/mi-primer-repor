
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vista_producto</title>

</head>
<body>
    <h1>LISTADO DE PRODUCTOS</h1><br>
    <a href="<?=base_url('reportes_productos/imprimir')?>" target="_blank" class="btn btn-warning btn-icon-text" >imprimir</a>
    <div class="card">
            <div class="card-body">
                
                    <div class="table-responsive">
                        <table class="table table-hover">
        <tr>
            <td>Nro</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Marcas</td>
            <td>Foto</td>
        </tr>
        <?php $i=1; foreach ($ver as $fila) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$fila->nombre?></td>
            <td><?=$fila->precio?></td>
            <td><?=$fila->nombre_marca?></td>
            <td>   <img class="img-xs rounded-circle" src="<?= base_url("imagen/". $fila->foto)?>" alt=""></td>
            <td><a href="<?=base_url('controlador_producto/delete/'.$fila->codigo)?>" id="delete" class="btn btn-danger btn-rounded btn-fw"> ELIMINAR</a>
            <a href="<?=base_url('controlador_producto/editar/'.$fila->codigo)?>" id="edit"  class="btn btn-primary btn-rounded btn-fw"> EDITAR</a>
            <a href="<?=base_url('reportes_productos/imprimirProducto/'.$fila->codigo)?>" class="btn btn-warning btn-rounded btn-fw" target="_blank">imprimir</a></td>
            <?php } ?>
        </tr>
    </table>
    
</body>
</html>