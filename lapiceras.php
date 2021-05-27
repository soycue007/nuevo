<?php
include ('includes/conexion.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include ('includes/bootstrap.php');
    include ('includes/navbar.php');
    ?>
    <title>Lapiceras</title>

  
</head>

<body style="background-color: rgb(50,50,50)">
    <?php navBar();  ?>
    <br>
    <h2 style="text-align:center;color: rgb(198, 168, 125);font-family:Verdana, sans-serif;">LAPICERAS</h2>
    <hr class="solid" style="border-top: 2px solid #bbb;" >
    <br>
        <?php
$consulta = "SELECT * FROM productos WHERE categoria like'lapiceras%' ORDER BY id ASC";
$pulseras = mysqli_query($conexion,$consulta);

            ?><div class="grid-container">
                <?php
           
                    while ($fila = mysqli_fetch_array($pulseras)){
                                            ?>

                
                    <div class="grid-item">
                   
                    <a href="productoDetalle.php?nombre=<?php echo $fila['nombre']?>">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($fila['foto']); ?>" class="card-img-top"> 
                             
                    </a>
                  
                    <h5 style="color: rgb(198, 168, 125); text-align:center"><?php echo $fila['nombre'] ?></h5>
                
                <h6 style="color: rgb(198, 168, 125); text-align:center">Precio: <?php echo '$'.$fila['precio'] ?></h6>
                </div>
                          

          
      
        <?php
   
    }


?>
</div>    
</body>

</html>