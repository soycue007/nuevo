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
<div class= 'conteiner'></div>

<?php navBar(); ?>



    <div class="row justify-content-center text-center">

    <div class="row justify-content-center text-center"></div>
            
     



            
          
          <?php 
                
                for ($i = 0; $i<=20;$i++){



                while ($fila = mysqli_fetch_array($resultado)) {
                    
                     ?>
                     <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">

                        <div class="card">
                 
                        <img src="data:image/jpg;base64,<?php echo base64_encode($fila['foto']); ?>" class="img-responsive">
                       

                    <div class="modal fade" id="imagen" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">


                       <?php
                          
                       
                       $arreglo[$i]= $fila['id']?>
                       
                        </div>
                    
                    </div>
                        <!-- Button to trigger modal -->

                     
                        
                        <button class="btn btn-success btn-lg"id="btonmodal" data-toggle="modal" data-target="#modalForm">
                            
                                <h4 class="text-info"><?php echo $fila['nombre']; ?></h4>
                        </button>
                        
                        <h4 class="text-danger"><?php echo $fila['precio']; ?></h4>  

                        <h4 class="text-danger"><?php echo $fila['id']; ?></h4>  

                        <h4 class="text-danger"><?php echo $i; ?></h4>  

                        <h4 class="text-danger"><?php echo $arreglo[$i]?></h4> 
                    
                    
                        </div>
                        </div>
             

                        <?php
                            
                        }
    
                        ?>



             
<!-- Modal -->
<div class="modal" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
                                       
          <?php 
                $qy_relojes = "SELECT * FROM productos where id =$arreglo[$i]" ;
                $resultado = mysqli_query($conexion, $qy_relojes);
                
                while ($fila2 = mysqli_fetch_array($resultado)) {

                    
                    
                     ?>
                     <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">

                        <div class="card-columns" id="galeria"></div>
                        <div class="card">
                 
                        <img src="data:image/jpg;base64,<?php echo base64_encode($fila2['foto']); ?>" class="img-responsive">
                       

                    <div class="modal fade" id=<?php"$i"?> tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">


                       
                       
                        </div>
                    
                    </div>
                    </div>
                        <!-- Button to trigger modal -->
                    

                    <h4 class="text-info"><?php echo $fila2['nombre']; ?></h4>
                        
                        
                        <h4 class="text-danger"><?php echo $fila2['precio']; ?></h4>  
                        <h4 class="text-danger"><?php echo $fila2['cantidad']; ?></h4> 
                        <h4 class="text-danger"><?php echo $fila2['descripcion']; ?></h4> 
                  
                        </div>
                        </div>
                        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                       
                    <?php
                            
                    }

                    ?>

                       
                    <?php







                            
                            
                    
                }

                    ?>
                   

         




<script>
    jQuery(document).ready(function(){

	jQuery('modalForm').on('hidden.bs.modal', function (e) {
	    jQuery(this).removeData('bs.modal');
	    jQuery(this).find('.modal-content').empty();
	})

    })
</script>



</body>
</html>
