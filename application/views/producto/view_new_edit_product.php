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
                    <h4 class="card-title">MODIFICACION DEL PRODUCTO</h4>
                    <p>
                    <?php foreach ($datos as $fila) { ?>
                    <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Nombre Producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" _mstplaceholder="43069" value="<?= $fila->nombre ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Precio del Producto</label>
                        <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio" _mstplaceholder="58058" value="<?= $fila->precio ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Marca del Fabricante</label>
                        <select class="form-select" id="fk_codigo" name="fk_codigo">
                               <option value="">Seleccione una opción</option>
                               <?php foreach ($marcas as $marca){ ?>
                                     <option value="<?= $marca->codigo ?>" <?= $marca->codigo  == $fila->fk_codigo ? 'selected' :''  ?>> <?= $marca->nombre ?></option>
                              <?php } ?>
                        </select>

                      <div class="form-group">
                       <small class="text-muted">imagen actual</small>
                        <input type="hidden"  name="imagen_actual"   value="<?= $fila->foto ?>">
                     

                         <div class="form-group">
                         <img src="<?= base_url("imagen/". $fila->foto)?>" alt="image"  style="whidth:100px; height:150px;" class="img-thumbnail">
                          </div>
                      </div> 

                      <div class="form-group">
                            <label for="exampleInputEmail1">Ingrese su Foto</label>
                            <input type="file" class="form-control" name="upload" id="upload" accept=".jpg , ,png" placeholder="Imagen">
                       </div>
                     
                      <input type="submit" id="editar" name="editar" value="ACTUALIZAR" class="btn btn-primary me-2">
                      <a class="btn btn-dark" href="<?=base_url("controlador_producto/ver");?>" >Cancelar</a>
                    </form>
                    <?php } ?>
                  </div>

</body>
</html>
