<?php 

session_start();

if ($_SESSION['s_activa']== true)
{
require_once ('includes/conexion.php');


$qy_productos = "SELECT *  FROM productos";
$productos = mysqli_query($conexion, $qy_productos);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panel de administracion</title>


  <!-- fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <!-- Google Font: Source Sans Pro -->  <!-- css propios-->
  <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- datatables css -->
  <link rel="stylesheet" type="text/css" href="datatables/datatables.css"/>
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <!-- estilos propios -->
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <!-- jquery -->
 
 
  <?php 
  include ('includes/modal/editModal.php');
  
  include ('includes/modal/ventanaModal1.php'); 
  include ('includes/modal/ventanaModal2.php');   
  include ('includes/modal/ventanaModal3.php'); ?> 
</head>

<body style=" background-image: url(img/crown.jpg);background-repeat: no-repeat;background-size: cover;">

  <!-- Llamado a funcion navbar -->
  <?php include 'includes/panelLateral.php'; ?>


  <!-- Inicio tabla -->
  <div class="container">

    <div class="row ">
      <div class="col"></div>
      <div class="col-10" >
        <center>
          <br>
          <table>
        <tr>
              
              <td><button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal1" >Cargar Joyeria</button></td>
              <td><button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal2" >Cargar Regalos</button></td>
              <td><button class="btn btn-primary" data-toggle="modal" data-target="#ventanaModal3" >Cargar Relojes</button></td>
        </tr>

          </table>
          
          <br><br>
        </center>
        <table id="tabla"  cellspacing="0" width="100%" >
          <thead>
            <tr>
              
              <th>Codigo</th>
              <th>Categoria</th>
              <th>Nombre</th>
              <th>Descripcion</th>              
              <th>Cantidad</th>
              <th>Foto</th>
              <th>Precio</th>
              <th>Edicion</th>

            </tr>
          </thead>
          <tbody >
            <?php 
            while ($fila = mysqli_fetch_array($productos)) {

             echo '<tr >';
             echo '<td >'.$fila['id'].'</td>';
             echo '<td>'.$fila['categoria'].'</td>';
             echo '<td>'.$fila['nombre'].'</td>';
             echo '<td>'.$fila['descripcion'].'</td>';
             echo '<td>'.$fila['cantidad'].'</td>';
             
             echo '<td> <img class="img" id="img" style="width: 70px;
             height: 70px;" src="data:image/jpg;base64,'.base64_encode($fila["foto"]).' "/> </td>';

             echo '<td>'.$fila['precio'].'</td>';
             //echo '<td>'.base64_encode($fila['foto']).'</td>';
//<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
             ?>

             <!-- botones editar y eliminar -->


             <td>
              <div style="display: inline-flex; justify-content: space-between;"> 


<!--   -->

                <button type="button" onclick="cargarData(<?php echo $fila['id']; ?>);" class="btn btn-success editBtn" data-toggle="modal" data-target="#editModal"
                 ><i class="fas fa-pen"></i>
                </button>

              &nbsp;
              <form action="eliminarProducto.php" method="POST">

                <button type="submit" name="btnEliminar" class="btn btn-danger eliminarBtn" value="<?php echo $fila['id'];?>" data-toggle="modal" data-target="#modalEliminar"><i class="fas fa-trash-alt"></i></button>
              </div>
            </td>
          </form>

        </tr>
        <?php

      }

      ?>


    </tbody>
  </table>
</div>
</div>
</div>




<!-- FONT AWESOME -->
<script src="https://kit.fontawesome.com/d72dca5e4b.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<!-- ******************************************************************************************* -->

<script src="jquery/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>


  <!-- JS bootstrap -->
  <script src="js/bootstrap.min.js"></script>



<!-- Script para abrir modal editar -->
<script>
  $(document).ready(function(){
    $('.editBtn').on('click', function(e){
      e.preventDefault();
      $tr = $(this).closest('tr');
      
      var data= $tr.children("td").map(function(){
        return $(this).text();

      }).get();
      console.log(data);

      $('#update_id').val(data[0]);
     
      $('#nombre').val(data[2]);
      $('#descripcion').val(data[3]);
      $('#cantidad').val(data[4]);
      $('#foto').val(data[5]);
      $('#precio2').val(data[6]);

      
    });
   
  });
</script>
<!-- Fin script para abrir modal editar -->


</body>
</html>
<?php 
}
else
{
  header("location: login.php");
}


 ?>