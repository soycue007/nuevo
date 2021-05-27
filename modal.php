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


<script type="text/javascript">

$(function(){

    $('modal1').modal({

        


    });
  
        });

</script>






    <?php include ('includes/navbar.php'); ?> 
</head>
<body class = "bg-light">
<div class= 'conteiner'></div>

<?php navBar(); ?>



    <div class="row justify-content-center text-center">

    <div class="row justify-content-center text-center"></div>
            
     



            
          
          
                   

            <div class ="container">
               <div class="modal fade" tabindex="-1" id="modal1">
                    <div class="modal-dialog modal-dialog-scrollable">
                         <div class="modal-content">
                                <div class="modal-header">
                                  <button class="close" data-dismiss="modal">&times;</button>

                                </div> 


                                <div class="modal-body">
                                
                                


                                </div>

                                <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal">&times;</button>
    
                                <button class="btn btn-primary">Guardar cambios</button>
                                </div>
                         </div> 
                    </div>
            </div>  
            
            </div>



<!-- Modal -->
<div class="modal" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
                                       
          <?php 
                $qy_relojes = "SELECT * FROM productos where id ='$contador'" ;
                $resultado = mysqli_query($conexion, $qy_relojes);
                
                while ($fila = mysqli_fetch_array($resultado)) {

                
                

                    
                    
                     ?>
                     <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">

                        <div class="card">
                 
                        <img src="data:image/jpg;base64,<?php echo base64_encode($fila['foto']); ?>" class="img-responsive">
                       

                    <div class="modal fade" id="imagen" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">


                       
                       
                        </div>
                    
                    </div>
                        <!-- Button to trigger modal -->
                    

                    <h4 class="text-info"><?php echo $fila['nombre']; ?></h4>
                        
                        
                        <h4 class="text-danger"><?php echo $fila['precio']; ?></h4>  
                        <h4 class="text-danger"><?php echo $fila['cantidad']; ?></h4> 
                        <h4 class="text-danger"><?php echo $fila['descripcion']; ?></h4> 
                  
                        </div>
                        </div>
             
                       
                    <?php
                            
                    }

                    ?>

            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
              

<script>
$('.openBtn').on('click',function(){
    $('.modal-body').load('content.html',function(){
        $('modalForm').modal({show:true});
    });
});
</script>

<script>
$('.openBtn').on('click',function(){
    $('.modal-body').load('getContent.php?id=2',function(){
        $('modalForm').modal({show:true});
    });
});
</script>




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