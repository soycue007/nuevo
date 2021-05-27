<?php 
session_start();
require_once ('includes/conexion.php');

$qy_relojes = "SELECT * FROM productos where categoria= 'relojes'" ;
$resultado = mysqli_query($conexion, $qy_relojes);
?>






<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria Relojes.</title>


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <!-- Google Font: Source Sans Pro -->  <!-- css propios-->
  <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- datatables css -->
  <link rel="stylesheet" type="text/css" href="datatables/datatables.css"/>
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <!-- jquery -->
  <script src="jquery/jquery-3.5.1.js"></script>
  <!-- datatables js -->
  <script type="text/javascript" src="datatables/datatables.min.js"></script>


        <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <?php include ('includes/navbar.php'); ?> 
</head>
<body class = "bg-light">
<div class= 'container'></div>

<?php navBar(); ?>

<h1 class="text-center display-4 my-4">Relojeria</h1>


        <div class="container">
                <div class="card-columns">
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                <div class="card">


                <?php while ($fila = mysqli_fetch_array($resultado)){
                    ?>
                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($fila['foto']); ?>" alt="" class="img-responsive">                
                    </a>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>


                <?php

                    }?>
</div>
</div>


</div>
































</body>

</html>