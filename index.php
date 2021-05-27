<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('includes/conexion.php'); ?>
    <?php include ('includes/bootstrap.php');?>
    <?php include ('includes/navbar.php'); ?>
    <?php include ('includes/novedades.php'); ?>
    <?php include ('includes/ofertas.php'); ?>
    <?php include ('includes/otrosProductos.php'); ?>
    <?php include ('includes/masVendidos.php'); ?>
    <title>Joyeria D'ambrosio</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="includes/Glider.js-master/glider.min.css">
    <link rel="stylesheet" href="css/carruselesIndex.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body style="background-color: rgb(50,50,50)">
    <header>
        <?php navBar(); ?>
        <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner" >
                <div class="carousel-item active">
                <img src="img/fondo1.jpg" class="img-fluid w-100 fondo1">
                </div>
                <div class="carousel-item">
                <img src="img/diamond.jpg" class="img-fluid w-100 fondo1">
                </div>
                <div class="carousel-item">
                <img src="img/crown.jpg" class="img-fluid w-100 fondo1">
                </div>
            </div>
            
    </header>
    <hr class="solid" style="border-top: 2px solid #bbb;">
    <br>
    <h3 style="text-align:center;color: rgb(198, 168, 125);font-family:Verdana, sans-serif;">LO MAS VENDIDO</h3><br>
    <?php cargarMasVendidos(); ?>
    <hr class="solid" style="border-top: 2px solid #bbb;">
    <br>
    <h3 style="text-align:center;color: rgb(198, 168, 125);font-family:Verdana, sans-serif;">LO NUEVO</h3><br>
    <?php cargarNovedades(); ?>
    <hr class="solid" style="border-top: 2px solid #bbb;">
    <br>
    <!---------------------------------------------------------------------------------------------------->
    <?php 
      $qy_productos = "SELECT * FROM productos WHERE enOferta>0";
      $productos = mysqli_query($conexion, $qy_productos);
      if(mysqli_num_rows($productos)>=9){
        echo '<h3 style="text-align:center;color: rgb(198, 168, 125);font-family:Verdana, sans-serif;">OFERTAS</h3><br>';
        cargarOfertas();
      }
      else{
        echo '<h3 style="text-align:center;color: rgb(198, 168, 125);font-family:Verdana, sans-serif;">NUESTROS PRODUCTOS</h3><br>';
        cargarOtros();
      }
       ?>
    <hr class="solid" style="border-top: 2px solid #bbb;">
    <footer>
        <img id="fondo1" src="img/fondo2.jpg" class="img-fluid w-100">
        <div style="background-color: rgb(60,60,60); position:sticky; bottom:0">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <h5 style="color: rgb(198, 168, 125);font-family:Verdana, sans-serif;"><i><u>Direccion</u></i>
                            </h4>

                            <p style="color: rgb(198, 168, 125)">Av. Soarez 201 <br>Av. Villarino 230</p>
                    </div>
                    <div class="col-3">
                        <h5 style="color: rgb(198, 168, 125);font-family:Verdana, sans-serif;"><i><u>Contacto</u></i>
                            </h4>
                            <p style="color: rgb(198, 168, 125)">Teléfono: 2346428332 <br>Email: maildeejemplo@gmail.com
                            </p>
                    </div>
                    <div class="col-3">
                        <h5 style="color: rgb(198, 168, 125);font-family:Verdana, sans-serif;"><i><u>Ayuda</u></i> </h4>
                            <p style="color: rgb(198, 168, 125)">Como utilizar la página</p>
                    </div>
                    <div class="col-3">
                        <h6 style="color: rgb(198, 168, 125)">Envíanos un mensaje al Whatsapp directamente</h6>
                        <a id="whatsapp" class="whatsapp" target="_blank"
                            href="https://api.whatsapp.com/send?phone=+542346696727"><i
                                class="fab fa-whatsapp-square">Whatsapp.</i></a>
                    </div>
                </div>

            </div>
        </div>

    </footer>




    <script src="includes/Glider.js-master/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/carruselesIndex.js"></script>
</body>

</html>