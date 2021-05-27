<?php
require_once ('includes/conexion.php');
$img='';
$precio = 0;
$precioFinal = 0;
$descripcion = '';
$nombre = $_GET['nombre'];
$cantidad = 0;
$oferta=0;

$qy_productos = "SELECT * FROM productos";
$productos = mysqli_query($conexion, $qy_productos);
while($aux = mysqli_fetch_array($productos)){
    if($nombre == $aux['nombre']){
        $img = $aux['foto'];
        $cantidad = $aux['cantidad'];
        $descripcion = $aux['descripcion'];
        if ($aux['enOferta']>0){
            $oferta = $aux['enOferta'];
            $precioFinal = $aux['precio'] - ($aux['precio']*$oferta)/100;
            $precio = $aux['precio'];
        }
        else{
            $precio = $aux['precio'];
        }
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- javascript-->
    <script type="text/javascript" src="JQUERY/jquery-3.5.1.slim.jmin.js"> </script>
    <script type="text/javascript" src="JS/bootstrap.min.js"> </script>
    <script type="text/javascript" src="JS/bootstrap.bundle.js"> </script>
    <!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include ('INCLUDES/navbar.php'); ?>
    <title>Producto</title>
</head>

<body style="background-color: rgb(50,50,50)">
    <?php navBar(); ?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="card" style="width: 18rem; height:18rem;margin-left:230px">

                    <img src="data:image/jpg;base64,<?php echo base64_encode($img); ?>" class="card-img-top"
                        height="286rem" width="18rem">
                </div>
            </div>
            <div class="col-5">
                <form action="carrito.php" method="post">
                    <input type="hidden" id="nombre" name="nombre" value="<?php echo $nombre ?>"><label
                        style="color: rgb(198, 168, 125);font-size:25px" for="nombre"><?php echo $nombre ?></label>
                    <br><br>
                    <?php 
                        if($oferta>0){
                            ?>
                    <label style="color: rgb(198, 168, 125)" for="precio"><s>Precio:
                            $<?php echo $precio ?></s></label><br>
                    <input type="hidden" id="precio" name="precio" value="<?php echo $precioFinal ?>"><label
                        style="color: rgb(198, 168, 125)" for="precio">Precio: $<?php echo $precioFinal ?></label> <br>
                    <?php
                        }
                        else{
                            ?>

                    <input type="hidden" id="precio" name="precio" value="<?php echo $precio ?>"><label
                        style="color: rgb(198, 168, 125)" for="precio">Precio: $<?php echo $precio ?></label> <br>
                    <?php
                        }
                    ?>

                    <input type="hidden" id="descripcion" name="descripcion" value="<?php echo $descripcion ?>"><label
                        style="color: rgb(198, 168, 125)" for="descripcion">Descripcion:
                        <?php echo $descripcion ?></label><br>
                    <input type="hidden" id="cantidad" name="cantidad" value="<?php echo $cantidad ?>"><label
                        style="color: rgb(198, 168, 125)" for="cantidad">Cantidad: <?php echo $cantidad ?></label>
                    <br><br>
                    <button type="submit" class="btn btn-success">Añadir al carro</button>
                </form>

            </div>
        </div>
    </div>
    <br><br><br>
    <hr class="solid" style="border-top: 2px solid #bbb;">

</body>

</html>