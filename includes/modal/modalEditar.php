    <!-- Inicio formulario modal editar-->
    <?php 

    $id= $_GET['id'];
     require_once ('includes/conexion.php');
    $qy_productosEdit = "SELECT *  FROM productos";//falta el from id
    $productosEdit = mysqli_query($conexion, $qy_productosEdit);

     ?>
  

<?php 
    while ($prod=mysqli_fetch_array($productosEdit)) {
        ?>

 <form action="editarProducto.php" method="post" enctype="multipart/form-data">
  
    <div class="modal" tabindex="1" id="ventanaModalEditar">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modifique los datos necesarios</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="border: hidden;"><i class="fas fa-times"></i></button>
          </div>
          <div class="modal-body">
             <div class="form-group mx-sm-3">
              <?php echo $id; ?>
             <label for="categoria" >Categoria</label>
             <input type="text" class="form-control" id="categoria" name="categoria"  value="<?php echo $prod['categoria'] ?> ">
           </div>
            <div class="form-group mx-sm-3">
             <label for="nombre" >Nombre</label>
             <input type="text" class="form-control" id="nombre" name="nombre"  value="<?php echo $prod['nombre'] ?> ">
           </div>
           <div class="form-group mx-sm-3">
             <label for="descripcion" >Descripcion</label>
             <input type="text" class="form-control" id="descripcion" name="descripcion"value="<?php echo $prod['descripcion'] ?> " >
           </div>
           <div class="form-group mx-sm-3">
             <label for="precio" >Precio</label>
             <input type="text" class="form-control" id="precio" name="precio"
              value="<?php echo $prod['precio'] ?> ">
           </div>
           <div class="form-group mx-sm-3">
             <label for="Cantidad" >Cantidad</label>
             <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $prod['cantidad'] ?> ">
           </div>
         </div>
         <div class="form-group mx-sm-3" >
          <p>Foto anterior</p>
          <img class="img" style="width: 70px;
          height: 70px;" src="data:image/jpg;base64,<?php echo base64_encode($prod['foto']); ?>"  ><br>

           <label for="foto" >Foto</label>
           <input type="file" class="form-control" id="foto" name="foto" >
         </div>

         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>

</form>

<?php 
    }

 ?>
 

<!-- Fin formulario modal -->