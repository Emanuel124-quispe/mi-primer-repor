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
    <title>Formulario Producto</title>
 
</head>
<body>
    
 

<div class="card">
    <div class="card-body">
  
            
                    <h4 class="card-title">Formulario Producto</h4>
                    <p>
                    <form class="forms-sample" action="<?=base_url('controlador_producto/adicionar')?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Nombre Producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" _mstplaceholder="43069">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Precio del Producto</label>
                        <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio" _mstplaceholder="58058">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Marca del Fabricante</label>
                        <select class="form-select" id="fk_codigo" name="fk_codigo">
                               <option value="">Seleccione una opción</option>
                               <?php foreach ($marcas as $marca){ ?>
                                     <option value="<?=$marca->codigo?>"><?=$marca->nombre?></option>
                              <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                            <label for="exampleInputEmail1">Ingrese su Foto</label>
                            <input type="file" class="form-control" name="upload" id="upload" accept=".jpg , ,png" placeholder="Imagen">
                       </div>
                    
                      <button type="submit" class="btn btn-primary me-2">Enviar</button>
                      <a class="btn btn-dark" href="<?=base_url("controlador_producto/ver");?>" >Cancelar</a>
                    </form>
     </div>

</body>
</html>
