<?php
if(isset($_GET['nombre'])){
    require_once ('includes/conexion.php');
$img='';
$precio = 0;
$precioFinal = 0;
$descripcion = '';
$nombre = $_GET['nombre'];
$cantidad = 0;
$categoria ='';
$oferta=0;
$buscado = 0;
$qy_productos = "SELECT * FROM productos";
$productos = mysqli_query($conexion, $qy_productos);
while($aux = mysqli_fetch_array($productos)){
    if($nombre == $aux['nombre']){
        $categoria = $aux['categoria'];
        $img = $aux['foto'];
        $cantidad = $aux['cantidad'];
        $descripcion = $aux['descripcion'];
        $buscado = $aux['vecesBuscado'];
        $buscado++;
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

$sumarVisita = "UPDATE productos SET vecesBuscado=$buscado WHERE nombre='$nombre' and descripcion='$descripcion'";
$resultado= mysqli_query($conexion,$sumarVisita);


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
    <link href="css/carruselRelacionados.css" rel="stylesheet">
    <link rel="stylesheet" href="includes/Glider.js-master/glider.min.css">
    <?php include ('includes/navbar.php'); ?>
    <?php include ('includes/bootstrap.php'); ?>
    <?php include ('includes/carruselRelacionados.php'); ?>
    <title>Producto</title>
</head>

<body style="background-color: rgb(50,50,50)">
    <?php navBar(); ?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="card" style="width: 18rem; height:18rem;margin-left:230px">

                    <img src="data:image/jpg;base64,<?php echo base64_encode($img); ?>"
                        height="286rem" width="286rem">
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
    <br>
    <h4 style="text-align:center;color: rgb(198, 168, 125);font-family:Verdana, sans-serif;">PRODUCTOS RELACIONADOS</h4><br>
    <br>
    <?php cargarRelacionados($categoria); ?>
    <script src="includes/Glider.js-master/glider.min.js"></script>
    <script src="js/carruselRelacionados.js"></script>
    <?php include ('includes/buscador.php');?>
    <?php autocompletado(); ?>
</body>

</html>
<?php
}
else{
    header('location:index.php');
}

?>