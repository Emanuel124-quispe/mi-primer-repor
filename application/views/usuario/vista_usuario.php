
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
    <title>vista_usuarios</title>

</head>
<body>
    <h1>LISTADO DE USUARIOS</h1><br>
    <a href="<?=base_url('reportes_usuario/imprimirUs')?>" target="_blank" class="btn btn-warning btn-icon-text" >imprimir</a>
    <div class="card">
            <div class="card-body">
                
                    <div class="table-responsive">
                        <table class="table table-hover">
        <tr>
            <td>Nro</td>
            <td>Nombre</td>
            <td>Email</td>
            <td>Contraseña</td>
        </tr>
        <?php $i=1; foreach ($ver3 as $fila) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$fila->nombre?></td>
            <td><?=$fila->email?></td>
            <td><?=$fila->contraseña?></td>
            <td><a href="<?=base_url('controlador_usuario/delete/'.$fila->id)?>" id="delete" class="btn btn-danger btn-rounded btn-fw"> ELIMINAR</a>
            <a href="<?=base_url('controlador_usuario/editar/'.$fila->id)?>" id="edit"  class="btn btn-primary btn-rounded btn-fw"> EDITAR</a>
            <a href="<?=base_url('reportes_usuario/imprimirPerfil/'.$fila->id)?>" class="btn btn-warning btn-rounded btn-fw" target="_blank">imprimir</a>
            </td>
            <?php } ?>
        </tr>
    </table>
    
</body>
</html>