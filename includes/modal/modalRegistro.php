    <!-- Inicio formulario modal -->
  <form action="cargarProducto.php" method="post" enctype="multipart/form-data">
    <div class="modal" tabindex="1" id="ventanaModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Ingrese los datos requeridos</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="border: hidden;"><i class="fas fa-times"></i></button>
          </div>
          <div class="modal-body">
             <div class="form-group mx-sm-3">
             <label for="categoria" >Categoria</label>
             <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria" required="">
           </div>
            <div class="form-group mx-sm-3">
             <label for="nombre" >Nombre</label>
             <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="">
           </div>
           <div class="form-group mx-sm-3">
             <label for="descripcion" >Descripcion</label>
             <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
           </div>
           <div class="form-group mx-sm-3">
             <label for="precio" >Precio</label>
             <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio">
           </div>
           <div class="form-group mx-sm-3">
             <label for="Cantidad" >Cantidad</label>
             <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
           </div>
         </div>
         <div class="form-group mx-sm-3" >
           <label for="foto" >Foto</label>
           <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto">
         </div>

         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>

</form>

<!-- Fin formulario modal -->